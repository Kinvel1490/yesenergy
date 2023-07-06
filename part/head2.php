<!doctype html>
<html lang="ru-RU">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php echo $title; ?></title>
<meta name="keywords" content="<?php echo $keyw; ?>" />
<meta name="description" content="<?php echo $descr; ?>" />
<link rel="stylesheet" href="/fonts/lato/lato.css">  
<link rel="stylesheet" href="/style.css">   
<script src="/js/jquery.min.js"></script>   
<link rel="stylesheet" type="text/css" href="/slick.css">
<link rel="stylesheet" type="text/css" href="/slick_theme.css">
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
<div class="round burg"><div class="l"></div><div class="lr2"></div><div class="lr3"></div></div>
</div>

<div class="social"><div class="round music"><img src="/img/y_10.png"></div>
<div class="round"><a href="<?php echo $in['vk']; ?>" target="_blank"><img src="/img/y_05.png" width="40px"></a></div>
<div class="round"><a href="<?php echo $in['tg']; ?>" target="_blank"><img src="/img/y_07.png" width="40px"></a></div></div>
 

</div>
 
</div>

 </header>