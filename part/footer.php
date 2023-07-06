
<footer class="open">
<picture class="bg-footer">
	<source media="(min-width: 1920px)" srcset="/img/bgfoot/bgfoot.webp">
	<source media="(max-width: 1920px)" srcset="/img/bgfoot/bgfoot_1920.webp">
	<source media="(max-width: 1600px)" srcset="/img/bgfoot/bgfoot_1600.webp">
	<source media="(min-width: 1344px)" srcset="/img/bgfoot/bgfoot_1344.webp">
	<source media="(min-width: 1280px)" srcset="/img/bgfoot/bgfoot_1200.webp">
	<source media="(min-width: 1024px)" srcset="/img/bgfoot/bgfoot_1000.webp">
	<source media="(min-width: 860px)" srcset="/img/bgfoot/bgfoot_850.webp">
	<source media="(min-width: 600px)" srcset="/img/bgfoot/bgfoot_600.webp">
	<source media="(min-width: 480px)" srcset="/img/bgfoot/bgfoot_480.webp">
	<img src="/img/bgfoot/bgfoot.webp" alt="Фон с погонщиком оленей" class="bg-footer">
</picture>
<div class="footslog<?php if (isset($_GET['url'])) if($_GET['url'] == 'opt') echo '2';?>"><?php
$ynewspat = '/ynews/';
$ynewsURL = ((!empty($_SERVER['HTTPS'])) ? 'https' : 'http') . '://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
$ynewsmatches = preg_match ($ynewspat, $ynewsURL);
if ($ynewsmatches) {
  $t = $db->super_query( "SELECT * FROM page WHERE id='3'" ); 
  $title=$t['title'];
  $descr= $t['descr'];
  $keyw = $t['keyw'];
}
echo $t['podp']; 
?></div>
  
<div class="wrapper footer-wrapper">

<div class="foot">
<div class="flexy">
<div class="copy">© <?php echo date('Y');?>. Все права защищены. <br>
При использовании материалов ссылка обязательна.<br>
<div class="soc flexy">
<a href="<?php echo $in['tg']; ?>" target="_blank"><div class="round vk"><img src="/img/icf_1.png" alt="Vkontakte" loading="lazy"></div></a>
<a href="<?php echo $in['tg']; ?>" target="_blank"><div class="round tg"><img src="/img/icf_2.png" alt="Telegram" loading="lazy"></div></a></div>

</div>
<div class="menuf"><?php echo $in['footer']; ?></div>
</div>

</div>
</div>
 </footer> 
</div>
<audio id="fon">
  <source src="/music.ogg" type="audio/ogg">
  <source src="/music.mp3" type="audio/mpeg"> 
</audio>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js" ></script>
 <script async src="/js/lazysizes.min.js" ></script>
<script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/parallax/3.1.0/parallax.min.js"></script>
<script src="/js/heighter.js"></script>
<script> 
var l = l => console.log(l);
  const wrapp = document.getElementById('fon');

  document.addEventListener("DOMContentLoaded", function() {

  
      
      
    $("html").css({ opacity:"0" });
    
  $("body").on("click", ".burg", function(){ 	 
  $(".mobmenu").animate({width: 'show'}, 500); 
  }); 
  
  $("body").on("click", ".close", function(){  
  $(".mobmenu").animate({width: 'hide'}, 500);
 
  });
 
	    if( window.innerWidth > 1000 ){
        var counr = 3;
		} else if ( window.innerWidth > 600) {
		var counr = 2;	
		} else {
		var counr = 1;		
		}

    var cp = window.innerWidth / 4 + "px";

	   $(".newes").slick({
        centerMode: true,
        dots: false,
        centerPadding: cp,
        infinite: true,
        arrows : false,
        draggable: true, 
        slidesToScroll: 1,
        slidesToShow: 1,
        responsive: [
        {
          breakpoint: 680,
          settings: {
            centerMode: true,
            dots: false,
            infinite: true,
            arrows : false,
            draggable: true,
            slidesToShow: 1,
            slidesToScroll: 1,
          },
        },
        {
          breakpoint: 1250,
          settings: {
            centerMode: true,
            dots: false,
            centerPadding: cp,
            infinite: true,
            arrows : false,
            draggable: true, 
            slidesToScroll: 3,
            slidesToShow: 1,
          },
        },
        {
          breakpoint: 1920,
          settings: {
            centerMode: true,
            dots: false,
            centerPadding: cp,
            infinite: true,
            arrows : false,
            draggable: true, 
            slidesToScroll: 3,
            slidesToShow: 1,
          },
        },
        ]

        });
	
	
	    if( window.innerWidth > 1000 ){
        var counrels = 3;
		} else if ( window.innerWidth > 600) {
		var counrels = 2;	
		} else {
		var counrels = 1;		
		}
		
		
		
	    $(".otzivi").slick({
        dots: false,
        infinite: true,
		arrows : true,
		draggable: true, 
        centerMode: false, 
        slidesToShow: counrels,
        slidesToScroll: counrels,
        slidesToScroll: 1,
    mobileFirst:true,//add this one
    responsive: [
      {
          breakpoint: 320,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1,
            //centerPadding: '60px',
          },
        },
      {
          breakpoint: 680,
          settings: {
            slidesToShow: 1,
            centerPadding: '0px',
          },
        },
       {
          breakpoint: 768,
          settings: {
            slidesToShow: 2,
          },
        },
        {
          breakpoint: 1344,
          settings: {
            slidesToShow: 2,
            slidesToScroll: 1,
          },
        },
        {
          breakpoint: 2540,
          settings: {
            slidesToShow: 2,
     
          },
        }
        
  ]
        });	
	
		$("body").on("click", ".music", function(){  
        wrapp.play();
        $('.music').html('<img src="/img/y_10_1.png">');
        $('.music').addClass("nomusic");
        });

		$("body").on("click", ".nomusic", function(){  
        wrapp.pause();
        $('.music').html('<img src="/img/y_10.png">');
        $('.music').removeClass("nomusic");
        });

	let l1 = document.querySelector('.berry');
  if(l1){
    window.addEventListener('mousemove', function(s) {
    let x = s.clientX / window.innerWidth;
    let y = s.clientY / window.innerHeight;  
    l1.style.transform = 'translate(-' + x * 8 + 'px, -' + y * 54 + 'px)';
    });
  }
		 
 	let l2 = document.querySelector('.expo');
  if (l2) {
    window.addEventListener('mousemove', function(s) {
    let x = s.clientX / window.innerWidth;
    let y = s.clientY / window.innerHeight;  
    l2.style.transform = 'translate(-' + x * 60 + 'px, -' + y * 69 + 'px)';
    });
  }
	
			   $("html").animate({ opacity:"1" }, 500); 
			 $("body").animate({ opacity:"1" }, 500); 
	
  // $(window).load(function(){
		 
		         $('body').css({ background: "#165596" });  
 	$(".l1").animate({ opacity:"1" }, 1); 
		$(".l2").animate({ opacity:"1" }, 1); 
			$(".l3").animate({ opacity:"1" }, 1); 
				$(".l4").animate({ opacity:"1" }, 1); 
		
	 $("body").css({ overflow: "unset" }); 
	 $(".load").hide();
	 $(".open").animate({ opacity:"1" }, 1000); 
	 
 
	 $('.boom').addClass("bma"); 
	 $('.expo').addClass("bmas"); 
	 $('.berry').addClass("bmas"); 
	 $('.finish').addClass("bmah"); 
	 $('.sad').addClass("ritm"); 
	 
	 
	 
	   $( ".bhh" ).hover(function(){
 	 $('.smas').addClass("ritmas");
	    }, function(){ // задаем функцию, которая срабатывает, когда указатель выходит из элемента 	
 	 $('.smas').removeClass("ritmas");
	  });
	 
	 <?php if($_SERVER['REQUEST_URI'] == '/') { ?>
	 var blockTop = $('.product').offset().top;
    var CountUpFlag = 0;
    var $window = $(window);
    $window.on('load scroll', function() {
        var top = $window.scrollTop();
        var height = $window.height();
        if (top + height >= blockTop && CountUpFlag == 0) {
            // CountUp();
            CountUpFlag = 1;
        }
    });
    	 
	 <?php } ?>	 
	 
	    $(".proy").animate({ opacity:"1" }, 1); 

  });
</script>
<script>
document.addEventListener("DOMContentLoaded", function() {
  var lazyBackgrounds = [].slice.call(document.querySelectorAll(".lazy-background"));

  if ("IntersectionObserver" in window) {
    let lazyBackgroundObserver = new IntersectionObserver(function(entries, observer) {
      entries.forEach(function(entry) {
        if (entry.isIntersecting) {
          entry.target.classList.add("visible");
          lazyBackgroundObserver.unobserve(entry.target);
        }
      });
    });

    lazyBackgrounds.forEach(function(lazyBackground) {
      lazyBackgroundObserver.observe(lazyBackground);
    });
  }
});
</script>
<?php echo $in['coder']; ?>
</body></html>