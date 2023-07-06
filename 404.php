<?php 
require ($_SERVER['DOCUMENT_ROOT']."/conecter/dbsend.php"); // БД
require ($_SERVER['DOCUMENT_ROOT']."/part/head.php"); // Шапка основная  с анимацией
?>
<main> <br><br>
<section class="optovik"><div class="wrapper error-page"> 
<div class="bread"><a href="/">Главная</a> / Ошибка 404 </div>
<div class="name">Ошибка 404</div>
 
<div style="color:#fff; font-size:16px; line-height:1.5;">Что-то пошло не так. Возможно, вы ошиблись, набирая адрес в строке браузера — так бывает. Если вы уверены, что адрес набран верно, то страница, скорее всего, была удалена и ее больше нет. </div>
<br><br>
<a href="/" style="padding: 17px 20px; color:#000; background:#fff; border-radius:10px;">Назад на главную</a>
</div>
</section>

<?php  require ($_SERVER['DOCUMENT_ROOT']."/part/otz_block.php");   ?>
<br><br>
<?php  require ($_SERVER['DOCUMENT_ROOT']."/part/news_block.php");   ?>

</main>
 
 
<?php 
require ($_SERVER['DOCUMENT_ROOT']."/part/footer.php"); //  Подвал
?>