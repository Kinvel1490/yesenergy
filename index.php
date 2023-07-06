<?php 
require ($_SERVER['DOCUMENT_ROOT']."/conecter/dbsend.php"); // БД
require ($_SERVER['DOCUMENT_ROOT']."/part/head.php"); // Шапка основная  с анимацией
?>
<main class="open">
<section class="about">
<div class="wrapper full-width padded">
<picture>
	<source media="(min-width: 1024px)" srcset="/img/bgabout/bgabout.webp">
	<source media="(min-width: 860px)" srcset="/img/bgabout/bgabout_850.webp">
	<source media="(min-width: 600px)" srcset="/img/bgabout/bgabout_600.webp">
	<source media="(min-width: 480px)" srcset="/img/bgabout/bgabout_480.webp">
	<img src="/img/bgabout/bgabout.webp" class="mnfon" alt="фон с вьгой" loading="lazy">
</picture>

<div class="flexy product">
<div class="text">
<div class="icn flex">

<div><img src="/img/y_46.webp" alt="Укрепляет иммунитет" loading="lazy"></div>
<div><img src="/img/y_48.webp" alt="дает долгий бодрящий эффект" loading="lazy"></div>
<div><img src="/img/y_46_2.webp" alt="натуральный состав" loading="lazy"></div>
<div><img src="/img/y_50.webp" alt="улучшает память и внимание" loading="lazy"></div>
<div><img src="/img/y_52.webp" alt="тонизирует на весь день" loading="lazy"></div>

</div>
<?php echo $t['text']; ?>
<div class="dalee"> </div>
</div>
<div class="pic">
<div class="bg greder">
<img src="/img/y_18.webp" class="bled1" alt="разлетающиеся ээфекты анимации" loading="lazy">
<img src="/img/y_58.webp" class="bled2" alt="разлетающиеся ээфекты анимации" loading="lazy">
<img src="/img/y_12.webp" class="bled3" alt="разлетающиеся ээфекты анимации" loading="lazy">
<img src="/img/y_61.png" class="bfr6" alt="разлетающиеся ээфекты анимации" loading="lazy">
<img src="/img/y_37.webp" class="bfr1" alt="разлетающиеся ээфекты анимации" loading="lazy">
<img src="/img/c1.png" class="bfr5" style="opacity:0;" alt="разлетающиеся ээфекты анимации" loading="lazy">
<img src="/img/y_18.png" class="bfr2" alt="разлетающиеся ээфекты анимации" loading="lazy">
<img src="/img/y_27.webp" class="bfr3" alt="разлетающиеся ээфекты анимации" loading="lazy">
<img src="/img/y_37.webp" class="bfr4" alt="разлетающиеся ээфекты анимации" loading="lazy">

<img src="/img/bp/bp_480.webp" class="bps" alt="эффект огня" loading="lazy">
 <div class="bhh"><div class="smas"> <img src="/img/y1.webp" alt="Банка с напитком" class="b1" loading="lazy"> </div>  </div></div>
 
 
 
</div>


</div>
</div>
</section>




<?php  require ($_SERVER['DOCUMENT_ROOT']."/part/otz_block.php");   ?>
 

<?php  require ($_SERVER['DOCUMENT_ROOT']."/part/news_block.php");   ?>
 


</main>
<?php  require ($_SERVER['DOCUMENT_ROOT']."/part/footer.php"); ?>