<!doctype html>
<html lang="ru-RU">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php echo $title; ?></title>
<meta name="keywords" content="<?php echo $keyw; ?>" >
<meta name="description" content="<?php echo $descr; ?>" >
<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css">
<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css">
<link rel="stylesheet" href="/style.css">
<?php if($_SERVER['REQUEST_URI'] != '/') { ?>
<style>
footer {
margin-top: -10px !important;
} 
</style>
	 <?php } ?>
</head>
<body class="gg">
<div class="open">
	<div class="mobmenu"><div class="close"></div>
	<div class="men"> 
		<div class="namemenu">МЕНЮ</div>
		<?php echo $in['mobmenu']; ?>
	</div>
</div>
<picture class="bg-2">
	<source media="(min-width: 1921px)" srcset="/img/newfon/newfon.webp">
	<source media="(max-width: 1920px)" srcset="/img/newfon/newfon_1920.webp">
	<source media="(max-width: 1600px)" srcset="/img/newfon/newfon_1600.webp">
	<source media="(max-width: 1440px)" srcset="/img/newfon/newfon_1440.webp">
	<source media="(max-width: 1200px)" srcset="/img/newfon/newfon_1200.webp">
	<source media="(max-width: 1000px)" srcset="/img/newfon/newfon_1000.webp">
	<source media="(max-width: 850px)" srcset="/img/newfon/newfon_850.webp">
	<source media="(max-width: 480px)" srcset="/img/newfon/newfon_480.webp">
	<img src="/img/newfon/newfon.webp" alt="фон-2" class="bg-2">
</picture>
<header class="full-screen-wrapper screen screen1">
<div class="flexy toping abs">
		<div class="mens"> 
			<div class="round burg">
				<div class="burg-wrapper">
					<div class="l"></div>
					<div class="lr2"></div>
					<div class="lr3"></div>
				</div>
			</div>
		</div>

		<div class="social">
			<div class="round music">
				<img src="/img/y_10.png"  alt="Выключатель музыки">
			</div>
		<div class="round">
			<a href="<?php echo $in['vk']; ?>" target="_blank">
				<img src="/img/y_05.png" alt="VK.com">
			</a>
		</div>
		<div class="round">
			<a href="<?php echo $in['tg']; ?>" target="_blank">
				<img src="/img/y_07.png" alt="Telegram">
			</a>
		</div>
	</div>
</div>
<div class="wrapper full-screen-wrapper bg-head">
	<div class="bg-wrapper">
	<div class="parallax-wr" data-depth=".8" style="z-index: 11">
			<img src="/img/y_27.png" alt="" class="red_berry bll">
		</div>
		<div class="parallax-wr" data-depth="0.8" style="z-index: 8">
			<img src="/img/y_35.png" alt="" class="red_berry br">
		</div>
		<div class="parallax-wr" data-depth="0.2" style="z-index: 8">
			<img src="/img/y_70.png" alt="" class="red_berry bls">
		</div>
		<div class="parallax-wr" data-depth="0.8" style="z-index: 11">
			<img src="/img/y_37.webp" alt="" class="red_berry leaft">
		</div>
		<div class="parallax-wr" data-depth="0.2" style="z-index: 5">
			<img src="/img/y_30.webp" alt="" class="red_berry leafb">
		</div>
		<div class="parallax-wr" data-depth="0">
			<div class="proy" data-depth="0">НА ОСНОВЕ ПАНТОВ СЕВЕРНОГО ОЛЕНЯ</div>
		</div>
		<div class="parallax-wr" data-depth="1" style="z-index: 11">
			<img src="/img/y_58.webp" alt="" class="red_berry ice1">
		</div>
		<div class="parallax-wr" data-depth="0.6" style="z-index: 8">
			<img src="/img/y_18.webp" alt="" class="red_berry ice2">
		</div>
		<div class="parallax-wr" data-depth="0.2">
			<img src="/img/y_58.webp" alt="" class="red_berry ice3">
		</div>
		<div class="parallax-wr" data-depth="0">
			<img src="/img/y_42.png" data-depth="0" alt="100% натрульно" class="natural">
		</div>
<div class="sad z10" data-depth="0" >
	<img class="front_can" data-depth="0" src="/img/y1.webp" alt="Банка с напитком">
</div>
<div class="sad z7" data-depth="0" >
	<img class="bg_can" data-depth="0" src="/img/y1.webp" alt="Банка с напитком">
</div>
</div>
</div>
</header>