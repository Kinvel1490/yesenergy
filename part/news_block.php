<?php 
require ($_SERVER['DOCUMENT_ROOT']."/conecter/dbsend.php"); // БД
?><section class="slaid screen screen4 stop-scroll"><div class="wrapper news-wrapper">
<div class="name">Новости </div>
<div class="newes">  


<?php
$sql_orders = $db->query ( "SELECT * FROM news ORDER BY id DESC   LIMIT 5  " );
	
while ( $i = $db->get_row( $sql_orders ) ) {
	// if($i['pic'] == 'fotocar_14022023022241.jpg') $i['pic'] = 'fotocar_14022023022241.webp';
echo '<div class="newe"><a href="/ynews/'.$i['url'].'"><img src="/pic/'.$i['pic'].'" data-src="/pic/'.$i['pic'].'" loading="lazy" class="lazyload" alt=" news '. $i['name'] .'"><div class="name">'.$i['name'].'<div class="data">'.date('d.m.Y',$i['data']) .'</div></div></a></div>';
}



?>
 
</div>
<div class="exepreme"><img src="img/y_88.png" alt="title-icon"></div>
</div></section>