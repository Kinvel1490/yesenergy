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
<!-- <link rel="stylesheet" type="text/css" href="/slick.css">
<link rel="stylesheet" type="text/css" href="/slick-theme.css"> -->
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

<div class="namesa"><div class="bread"><a href="/">Главная</a> / Контакты </div>
<div class="name">Контакты </div></div>


<div class="social"><div class="round music"><img src="/img/y_10.png" alt=""></div>
<div class="round"><a href="<?php echo $in['vk']; ?>" target="_blank"><img src="/img/y_05.png" alt="VK.com"></a></div>
<div class="round"><a href="<?php echo $in['tg']; ?>" target="_blank"><img src="/img/y_07.png" alt="Telegram"></a></div></div>
 

</div>
 
</div>

 </header>
 
<main> 

<section class="optovik"><div class="wrapper"> 
 
 
 <div class="contapage flexy">
 <div class="texto">
 
 <?php if($t['text']) {
	 echo "<div style='color:#fff; margin-bottom: 15px; position:relative; z-index:9;'>".$t['text']."</div>";

 }	 ?></div>
 <div class="maps">
 <?php echo $t['map']; ?>
 </div>
 </div>
 <br><br>
 
 
 
</div> 




</section>



</main>
 
 
<?php 
require ($_SERVER['DOCUMENT_ROOT']."/part/footer.php"); //  Подвал
?>