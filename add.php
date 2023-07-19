<?php 
require ($_SERVER['DOCUMENT_ROOT']."/conecter/dbsend.php"); // БД 
require ($_SERVER['DOCUMENT_ROOT'].'/OAuth/vkLogin.php');
require ($_SERVER['DOCUMENT_ROOT'].'/OAuth/okLogin.php');
 $ot = 0;

if(isset($_POST['names'])) {
	$data = cod_date(date('d-m-YH:i:s')); 
	$db->query( "INSERT INTO otzivi (name,kak,data,text,star,stat) VALUES ('".$_POST['names']."','".$_POST['who']."','$data','".$_POST['text']."','".$_POST['star']."',0)" ); 
 $ot = 1;
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
</head>
<body class="gg nohead"><div class="load"><img src="/img/load.png" class="loadlog" alt="Загрузка"><br> <span class="loadproc"></span>%</div>
<div class="open">
<div class="mobmenu"><div class="close"> </div>
<div class="men"> 
<div class="namemenu">МЕНЮ</div>
<?php echo $in['mobmenu']; ?>
	 <?php if($_SERVER['REQUEST_URI'] != '/') { ?>
<style>
footer {
margin-top: -10px !important;
} </style>
	 <?php } ?>
</div></div>


<header>

 
<div class="wrapper ">
<div class="flexy toping">
<div class="mens">
<div class="round burg"><div class="burg-wrapper"><div class="l"></div><div class="lr2"></div><div class="lr3"></div></div></div>

</div>

<div class="namesa"><div class="bread"><a href="/">Главная</a> / Добавление отзыва </div>
<div class="name">Добавление отзыва</div></div>


<div class="social"><div class="round music"><img src="/img/y_10.png"></div>
<div class="round"><a href="<?php echo $in['vk']; ?>" target="_blank"><img src="/img/y_05.png" width="40px"></a></div>
<div class="round"><a href="<?php echo $in['tg']; ?>" target="_blank"><img src="/img/y_07.png" width="40px"></a></div></div>
 

</div>
 
</div>

 </header>
 
<main>  <br><br>
<section class="optovik"><div class="wrapper"> 
 
<div class="addot">
<?php if($ot == 0) { ?>
<form method="post">


<?php
	if(isset($uname)) {		                  
                echo "
				<div class=\"iname\">Ваше имя, город</div>
<input type=\"text\" class=\"inpa\" name=\"names\" value=\"".$uname.", ".$ucity."\" required> 

<div class=\"iname\">Оцените продукцию</div>
<select class=\"inpa\" name=\"star\" required> 
<option value=\"5\">Отлично (5 звёзд)</option>
<option value=\"4\">Хорошо (4 звезды)</option>
<option value=\"3\">Удовлетворительно (3 звезды)</option>
<option value=\"2\">Плохо (2 звезды)</option>
<option value=\"1\">Ужасно  (1 звезда)</option>
</select>
<div class=\"iname\">Ваш отзыв</div>
<textarea class=\"inpas\" name=\"text\" required></textarea>
<br><br>

				
				<div class='loadver'><input type='hidden' name='who' value='".$uname." ".$uLName." -".$user_id."'>
				<input type='submit' value='Оставить отзыв' class='adbuto'></div>";
	echo '
	<script>
		history.pushState(null, null, "http://localhost/add")
	</script>
	';
	}

 
 ?>
</form>
<?php 
          if(!isset($uname)) { ?>
		  <div class="iname">Чтобы оставить отзыв, авторизуйтесь: </div>
		  <?php 
		?>
		  <div id="soc_auth">
			<div class="vklogin">
				<img src="/img/VKLogoWhite.svg" alt="ВКонтакте">
			</div>
			<div class="oklogin">
				<img src="/img/apiok_logo.png" alt="Одноклассники">
		  	</div>
		  </div> <?php } 
		  
		  } else {
			echo '  <div class="iname" style="text-align:center;">Спасибо за отзыв! Мы его обязательно опубликуем.</div>';  
		  }
		  
		  ?>
		  
		  
		  
		  
 </div>

 
<br><br><br><br>
<a href="/" class="addot-link">Назад на главную</a>
</div><br><br>
</section>



<?php  require ($_SERVER['DOCUMENT_ROOT']."/part/news_block.php");   ?>

</main>
 
 
 <script>
 
 
 
	  </script>
 
<?php 
require ($_SERVER['DOCUMENT_ROOT']."/part/footer.php"); //  Подвал
?>