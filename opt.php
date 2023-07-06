<?php 
require ($_SERVER['DOCUMENT_ROOT']."/conecter/dbsend.php"); // БД
 
 $ot = 0;
if(isset($_POST['nname'])) {
	
	
$admins = $in['mail'];
$mailz = 'no-reply@na4u.ru';
$subjz = 'Поступило сообщение с сайта na4u.ru';
$headersz  = 'MIME-Version: 1.0' . "\r\n";
$headersz .= 'Content-type: text/html; charset=utf-8' . "\r\n";
$headersz .= 'From: '.$mailz.' <'.$mailz.'>' . "\r\n";
$ip=$_SERVER['REMOTE_ADDR'];
$data = date('d.m.Y');
$messagez = ' Упал обращение нужно обработать. <br>  
 Имя: '.$_POST['nname'].'<br>
 Контакты:  '.$_POST['mmail'].'<br>
 Город:  '.$_POST['ccity'].'<br>
 Сообщение:  '.$_POST['ttext'].'<br>
 IP отправителя: '.$ip.' <br> _____________________________<br><br> Отправлено роботом.';
$send_actaz = mail($admins, $subjz, $messagez,$headersz); 
 $ot = 1;
}

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

<div class="namesa"><div class="bread">Главная / Оптовикам </div>
<div class="name">Оптовикам </div></div>


<div class="social"><div class="round music"><img src="/img/y_10.png" alt="отключение музыки"></div>
<div class="round"><a href="<?php echo $in['vk']; ?>" target="_blank"><img src="/img/y_05.png" alt="VK.com"></a></div>
<div class="round"><a href="<?php echo $in['tg']; ?>" target="_blank"><img src="/img/y_07.png" alt="Telegram"></a></div></div>
 

</div>
 
</div>
 </header>
 
<main> 

<section class="optovik"><div class="wrapper"><img src="/img/bgabout.png" class="mnfon" alt="">



 
 <?php if($t['text']) {
	 echo "".$t['text']."";

 }	 ?>






 
<div class="addot" style="z-index:10; position:relative;"> 

<?php if($ot == 0) { ?>
<form method="post">


 
<div class="iname">Название компании</div>
<input type="text" class="inpa" name="nname" value="" required> 


<div class="iname">Адрес</div>
<input type="text" class="inpa" name="ccity" value="" required> 


<div class="iname">Телефон</div>
<input type="text" class="inpa" name="mmail" value="" required> 




 
<br><br>
<div class="copsa"> Оставляя заявку, вы даете согласие на обработку персональных данных.</div>
				
				<div class='loadver'> 
				<input type='submit' value='Отправить' class='adbuto'></div>  
 
 
</form>
 <?php 
 	  } else {
			echo '  <div class="iname" style="text-align:center;">Спасибо за обращение! <br>Ожидайте, с вами свяжется менеджер.</div>';  
		  }
		  ?>
		  
		  
		  
 </div>
		</div>
</section>



</main>
 
 
<?php 
require ($_SERVER['DOCUMENT_ROOT']."/part/footer.php"); //  Подвал
?>