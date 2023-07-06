<?php 
require ($_SERVER['DOCUMENT_ROOT']."/conecter/dbsend.php"); // БД
 
?>

<!doctype html>
<html lang="ru-RU">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php echo $title; ?></title>
<meta name="keywords" content="<?php echo $keyw; ?>" >
<meta name="description" content="<?php echo $descr; ?>" >
<!--<link rel="stylesheet" href="/fonts/lato/lato.css">  -->
<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css">
<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css">
<link rel="stylesheet" href="/style.css">
<?php if($_SERVER['REQUEST_URI'] != '/') { ?>
<style>
footer {
margin-top: -10px !important;
} </style>
	 <?php } ?>
</head>
<body class="gg nohead">
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

<div class="namesa"><div class="bread"><a href="/">Главная</a> / Отзывы </div>
<div class="name">Отзывы </div></div>


<div class="social"><div class="round music"><img src="/img/y_10.png" alt="alt-icon"></div>
<div class="round"><a href="<?php echo $in['vk']; ?>" target="_blank"><img src="/img/y_05.png" alt="alt-icon"></a></div>
<div class="round"><a href="<?php echo $in['tg']; ?>" target="_blank"><img src="/img/y_07.png" alt="alt-icon"></a></div></div>
 

</div>
 
</div>

 </header>
 
<main> 

<section class="optovik"><div class="wrapper"> 

 
 
 <?php if($t['text']) {
	 echo "<div style='color:#fff; margin-bottom: 15px;'>".$t['text']."</div>";

 }	 ?>
 
 <div class="otzovik flex">

<?php
$sql_orders = $db->query ( "SELECT * FROM otzivi WHERE stat='1' ORDER BY RAND()  " );
	
while ( $i = $db->get_row( $sql_orders ) ) {
	if($i['star'] == '5') {
		$star = '<img src="/img/y_84.png" alt="оценка"><img src="/img/y_84.png" alt="оценка"><img src="/img/y_84.png" alt="оценка"><img src="/img/y_84.png" alt="оценка"><img src="/img/y_84.png" alt="оценка">';
	} elseif ($i['star'] == '4') {
			$star = '<img src="/img/y_84.png" alt="оценка"><img src="/img/y_84.png" alt="оценка"><img src="/img/y_84.png" alt="оценка"><img src="/img/y_84.png" alt="оценка"><img src="/img/y_84_0.png" alt="нет оценки">';
	} elseif ($i['star'] == '3') {
			$star = '<img src="/img/y_84.png" alt="оценка"><img src="/img/y_84.png" alt="оценка"><img src="/img/y_84.png" alt="оценка"><img src="/img/y_84_0.png" alt="нет оценки"><img src="/img/y_84_0.png" alt="нет оценки">';
	} elseif ($i['star'] == '2') {
			$star = '<img src="/img/y_84.png" alt="оценка"><img src="/img/y_84.png" alt="оценка"><img src="/img/y_84_0.png" alt="нет оценки"><img src="/img/y_84_0.png" alt="нет оценки"><img src="/img/y_84_0.png" alt="нет оценки">';
	} else {
				$star = '<img src="/img/y_84.png" alt="оценка"><img src="/img/y_84_0.png" alt="нет оценки"><img src="/img/y_84_0.png" alt="нет оценки"><img src="/img/y_84_0.png" alt="нет оценки"><img src="/img/y_84_0.png" alt="нет оценки">';
	
	}
	
	
echo '

<div class="bigor">
<div class="namex">'.$i['name'].'</div>
<div class="star flex">'.$star.'</div>
<div class="info">'.$i['text'].'</div>
</div> ';	
}



?>
 
 
 
 </div> 
 
 <div class="addo"><a href="/add" style="color:#fff; z-index:10; position:relative;">Написать отзыв</a></div>
</div> 




</section>



</main>
 
 
<?php 
require ($_SERVER['DOCUMENT_ROOT']."/part/footer.php"); //  Подвал
?>