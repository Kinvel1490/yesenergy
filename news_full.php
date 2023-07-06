<?php 
require ($_SERVER['DOCUMENT_ROOT']."/conecter/dbsend.php"); // БД 
 

class Calendar 

{

	/**

	 * Вывод календаря на один месяц.

	 */

	public static function  getMonth($month, $year, $events = array())
	{
	$db = new db;

		$months = array(

			1  => 'Январь',

			2  => 'Февраль',

			3  => 'Март',

			4  => 'Апрель',

			5  => 'Май',

			6  => 'Июнь',

			7  => 'Июль',

			8  => 'Август',

			9  => 'Сентябрь',

			10 => 'Октябрь',

			11 => 'Ноябрь',

			12 => 'Декабрь'

		);

	$month = intval($month);
		$pat = '/ynews/';
		$subj = ((!empty($_SERVER['HTTPS'])) ? 'https' : 'http') . '://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
		$matches = preg_match ($pat, $subj);
		if($matches){
			$link = strrchr($subj, '/');
			$link = substr($link, 1);
			$linkres = $db->query("SELECT data FROM news WHERE url = '$link'");
			while ($i = $db->get_row($linkres)) {
				$monthlink = date('m', $i['data']);
				$monthlink = intval($monthlink);
				$yearlink = date('Y', $i['data']);
			}
			if ($monthlink == $month && $yearlink == $year){
				$dataAttr = 'data-mothVal= '.'"'.$month.'.'.$year.'"';
			} else {$dataAttr = "";}
		} else {$dataAttr = '';
		}
		$out = '

		<div class="calendar-item"'. $dataAttr .'>

			<div class="calendar-head">' . $months[$month] . ' ' . $year . '</div>

			<table>

				<tr>

					<th>Пн</th>

					<th>Вт</th>

					<th>Ср</th>

					<th>Чт</th>

					<th>Пт</th>

					<th>Сб</th>

					<th>Вс</th>

				</tr>';

 

		$day_week = date('N', mktime(0, 0, 0, $month, 1, $year));

		$day_week--;

 

		$out.= '<tr>';

 

		for ($x = 0; $x < $day_week; $x++) {

			$out.= '<td></td>';

		}

 

		$days_counter = 0;		

		$days_month = date('t', mktime(0, 0, 0, $month, 1, $year));

	

		for ($day = 1; $day <= $days_month; $day++) {

			if (date('j.n.Y') == $day . '.' . $month . '.' . $year) {

				$class = 'today';

			} elseif (time() > strtotime($day . '.' . $month . '.' . $year)) {

				$class = 'last';

			} else {

				$class = '';

			}

			

			$event_show = false;

			$event_text = array();
			if (!empty($events)) {

				foreach ($events as $date => $text) {
					$date = explode('.', $date);

					if (count($date) == 3) {

						$y = explode(' ', $date[2]);

						if (count($y) == 2) {

							$date[2] = $y[0];

						}

 

						if ($day == intval($date[0]) && $month == intval($date[1]) && $year == $date[2]) {

							$event_show = true;

							$event_text[] = $text;

						}

					} elseif (count($date) == 2) {

						if ($day == intval($date[0]) && $month == intval($date[1])) {

							$event_show = true;

							$event_text[] = $text;

						}

					} elseif ($day == intval($date[0])) {

						$event_show = true;

						$event_text[] = $text;

					}				
				}
				$event_show = true;

			}

			
			if ($event_show) {
	$data = cod_date(date($day.'-'.$month.'-'.$year.'00:00:01'));
	$data2 = cod_date(date($day.'-'.$month.'-'.$year.'23:59:59')); 



$db = new db;
	$poisk = $db->super_query( "SELECT count(*) as count FROM news WHERE data>='$data' AND data <='$data2'  " ); 
if($poisk['count'] > '0') {
	$dod = '<a href="/newsort/' . $day .date('-m-Y').'">';
	$pod = '</a>';
} else {
	$dod = '';
	$pod = '';
}
				$out.= '<td class="calendar-day ' . $class . ' event">'.$dod. $day;

				if (!empty($event_text)) {

					$out.= '<div class="calendar-popup">' . implode('<br>', $event_text) . '</div>';

				}

				$out.= $pod.'</td>';

			} else {

		
	$data = cod_date(date($day.'-'.$month.'-'.$year.'00:00:01')); 
	$data2 = cod_date(date($day.'-'.$month.'-'.$year.'23:59:59')); 
	
	

	$poisk = $db->super_query( "SELECT count(*) as count FROM news WHERE data>='$data' AND data <='$data2' " ); 

if($poisk['count'] > '0') {

		$out.= '<td class="calendar-day ' . $class . '"><a href="/news.php/?id=' . $day.'-'.$month.'-'.$year.'">' . $day . '</a></td>';
	
} else {
		$out.= '<td class="calendar-day ' . $class . '">' . $day . '</td>';
}


			}

 

			if ($day_week == 6) {

				$out.= '</tr>';

				if (($days_counter + 1) != $days_month) {

					$out.= '<tr>';

				}

				$day_week = -1;

			}

 

			$day_week++; 

			$days_counter++;

		}

 

		$out .= '</tr></table></div>';
		return $out;

	}

	

	/**

	 * Вывод календаря на несколько месяцев.

	 */

	public static function  getInterval($start, $end, $newRequest, $events = array())

	{
		// print_r($newRequest);
		
		$curent = explode('.', $start);

		$curent[0] = intval($curent[0]);

		$end = explode('.', $end);

		$end[0] = intval($end[0]);
		
		

		$begin = true;

		$out = '<div class="calendar-wrp">';
		

		do {
			foreach ($newRequest as $reuest) {
			if (date(mktime(0, 0, 0, $curent[0], 1, $curent[1]))< $reuest && $reuest < date(mktime(0, 0, 0, $curent[0]+1, 0, $curent[1]))) {
				$out .= self::getMonth($curent[0], $curent[1], $events);
				break;
			}
		}


			if ($curent[0] == $end[0] && $curent[1] == $end[1]) {

				$begin = false;

			}		

 

			$curent[0]++;

			if ($curent[0] == 13) {

				$curent[0] = 1;

				$curent[1]++;

			}

		} while ($begin == true);	

		

		$out .= '</div>';

		return $out;

	}

}

?> 
<!doctype html>
<html lang="ru-RU">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php echo $title; ?></title>
<meta name="keywords" content="<?php echo $keyw; ?>" />
<meta name="description" content="<?php echo $descr; ?>" />
<!-- <link rel="stylesheet" href="/fonts/lato/lato.css">   -->
<!-- <link rel="stylesheet" type="text/css" href="/slick.css">
<link rel="stylesheet" type="text/css" href="/slick-theme.css"> -->
<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css">
<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css">
<link rel="stylesheet" href="/style.css"> 
<script>
	window.addEventListener('DOMContentLoaded', ()=>{
		var slideToShow = document.querySelectorAll('.calendar-item').length - 1;
		var calends = Array.from((document.querySelectorAll('.calendar-item')));
		if (calends.length>1){
			calends.forEach(calend =>{
                if(calend.getAttribute('data-mothval')){
                    slideToShow = calends.indexOf (calend);
                }
            });
		}
		$('.calendar-wrp').slick({
			infinite: true,
			slidesToShow: 1,
			slidesToScroll: 1,
			dots: false,
			arrows: true,
			fade: true,
			initialSlide: slideToShow,
			appendArrows: ".calend",
		});
	});
</script>
<?php if($_SERVER['REQUEST_URI'] != '/') { ?>
<style>
footer {
margin-top: -10px !important;
} </style>
	 <?php } ?>
</head>
<body class="gg nohead"><div class="load"><img src="/img/load.png" class="loadlog" alt="Загрузка"><br> <span class="loadproc"></span>%</div>
<div class="open">
<div class="mobmenu"><div class="close"> </div>
<div class="men"> 
<div class="namemenu">МЕНЮ</div>
<?php echo $in['mobmenu']; ?>

</div></div>


<header>

 
<div class="wrapper ">
<div class="flexy toping">
<div class="mens"> 
<div class="round burg"><div class="burg-wrapper"><div class="l"></div><div class="lr2"></div><div class="lr3"></div></div></div>
</div>

<div class="namesa"><div class="bread"><a href="/">Главная</a> / <a href="/news">Новости</a> / <?php echo $n['name']; ?></div>
<div class="name"><?php echo $n['name']; ?></div></div>


<div class="social"><div class="round music"><img src="/img/y_10.png"></div>
<div class="round"><a href="<?php echo $in['vk']; ?>" target="_blank"><img src="/img/y_05.png" width="40px"></a></div>
<div class="round"><a href="<?php echo $in['tg']; ?>" target="_blank"><img src="/img/y_07.png" width="40px"></a></div></div>
 

</div>
 
</div>

 </header>
 
<main> <br><br>
<section class="optovik"><div class="wrapper"> 


<div class="ngg flexy"> 

<div class="nobos  ">  
 <div style="color:#fff; font-size:16px; line-height:1.5;"><?php echo $n['text']; ?></div>
<div style="color:#fff; margin: 15px 0px;"><?php echo date('d.m.Y',$n['data']); ?></div>
 
</div>

<?php
$res = array();
$newRequest = $db->query ("SELECT * FROM news");
	while ($i = $db->get_row($newRequest)){
		$res[] = $i["data"];
	}

?>
<div class="calend"> <?php echo Calendar::getInterval(date('m.Y', min($res)), date('m.Y'), $res); ?>
<!-- <div class="calend  "> <?php echo Calendar::getMonth(02, date('Y')); ?> -->
</div>
 </div>

 

 </div>
</section>

<?php  require ($_SERVER['DOCUMENT_ROOT']."/part/otz_block.php");   ?>
 
</main>
 
 
<?php 
require ($_SERVER['DOCUMENT_ROOT']."/part/footer.php"); //  Подвал
?>