<?php 
require ($_SERVER['DOCUMENT_ROOT']."/conecter/dbsend.php"); // БД 
 $ot = 0;

if(isset($_POST['names'])) {
	$data = cod_date(date('d-m-YH:i:s')); 
	$db->query( "INSERT INTO otzivi (name,kak,data,text,star) VALUES ('".$_POST['names']."','".$_POST['who']."','$data','".$_POST['text']."','".$_POST['star']."')" ); 
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

  <?php if($t['text']) {
	 echo "<div style='color:#fff; margin-bottom: 15px;'>".$t['text']."</div>";

 }	 ?>
 
<div class="addot">
<?php if($ot == 0) { ?>
<form method="post">


<?php


                    $s = file_get_contents('http://ulogin.ru/token.php?token=' . $_POST['token'] . '&host=' . $_SERVER['HTTP_HOST']);
                    $user = json_decode($s, true);
             if(isset($user['network'])) {
                echo "
				<div class=\"iname\">Ваше имя, город</div>
<input type=\"text\" class=\"inpa\" name=\"names\" value=\"".$user['first_name']."\" required> 

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

				
				<div class='loadver'><input type='hidden' name='who' value='".$user['network']." : ".$user['identity']." -". $user['first_name'].", ".$user['last_name']."'>
				<input type='submit' value='Оставить отзыв' class='adbuto'></div>";
			 }
 
 ?>
</form>
<?php 
          if(!isset($user['network'])) { ?>
		  <div class="iname">Чтобы оставить отзыв, авторизуйтесь: </div>
<script src="//ulogin.ru/js/ulogin.js"></script>
		  <div id="uLogin" data-ulogin="display=panel;theme=classic;fields=first_name,last_name;providers=vkontakte,odnoklassniki,mailru,facebook;hidden=other;redirect_uri=http%3A%2F%2Fyesenergy.ru%2Fadd;mobilebuttons=0;"></div> <br> <?php } 
		  
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