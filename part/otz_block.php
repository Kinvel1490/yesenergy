<?php 
require ($_SERVER['DOCUMENT_ROOT']."/conecter/dbsend.php"); // БД
?>

<section class="otz"><div class="wrapper">
<img src="/img/y_30.webp" data-src="/img/y_30.webp" class="lazyload listok" alt="icon_vector-listok" loading="lazy">
<div class="cloud">
<img src="/img/y_80.webp" alt="айсберг" class="iceberg">
<img src="/img/girl_low.webp" data-src="/img/girl.webp" class="lazyload girl" alt="Девушека, употребляющая напиток">

<div class="otzivi flexy">


<?php
$sql_orders = $db->query ( "SELECT * FROM otzivi WHERE stat='1' ORDER BY id DESC   LIMIT 7 " );

while ( $i = $db->get_row( $sql_orders ) ) {
	if($i['star'] == '5') {
		$star = '<img src="/img/y_84.png" alt="alt-icon" loading="lazy"><img src="/img/y_84.png" alt="alt-icon" loading="lazy"><img src="/img/y_84.png" alt="alt-icon" loading="lazy"><img src="/img/y_84.png" alt="alt-icon" loading="lazy"><img src="/img/y_84.png" alt="alt-icon" loading="lazy">';
	} elseif ($i['star'] == '4') {
			$star = '<img src="/img/y_84.png" alt="alt-icon" loading="lazy"><img src="/img/y_84.png" alt="alt-icon" loading="lazy"><img src="/img/y_84.png" alt="alt-icon" loading="lazy"><img src="/img/y_84.png" alt="alt-icon" loading="lazy"><img src="/img/y_84_0.png" alt="alt-icon" loading="lazy">';
	} elseif ($i['star'] == '3') {
			$star = '<img src="/img/y_84.png" alt="alt-icon" loading="lazy"><img src="/img/y_84.png" alt="alt-icon" loading="lazy"><img src="/img/y_84.png" alt="alt-icon" loading="lazy"><img src="/img/y_84_0.png" alt="alt-icon" loading="lazy"><img src="/img/y_84_0.png" alt="alt-icon" loading="lazy">';
	} elseif ($i['star'] == '2') {
			$star = '<img src="/img/y_84.png" alt="alt-icon" loading="lazy"><img src="/img/y_84.png" alt="alt-icon" loading="lazy"><img src="/img/y_84_0.png" alt="alt-icon" loading="lazy"><img src="/img/y_84_0.png" alt="alt-icon" loading="lazy"><img src="/img/y_84_0.png" alt="alt-icon" loading="lazy">';
	} else {
				$star = '<img src="/img/y_84.png" alt="alt-icon" loading="lazy"><img src="/img/y_84_0.png" alt="alt-icon" loading="lazy"><img src="/img/y_84_0.png" alt="alt-icon" loading="lazy"><img src="/img/y_84_0.png" alt="alt-icon" loading="lazy"><img src="/img/y_84_0.png" alt="alt-icon" loading="lazy">';
	
	}

echo '

<div class="otfull">
<div class="name">'.$i['name'].'</div>
<div class="star flex">'.$star.'</div>
<div class="info">'.$i['text'].'</div>
</div> ';	
}



?>
 
 
 
 
</div>
<div class="addo"><a href="/add">Написать отзыв</a></div>
  </div>
</div></section>

