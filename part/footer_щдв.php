
<footer class="open">

<div class="footslog<?php if($_GET['url'] == 'opt') echo '2';?>"><?php echo $t['podp']; ?></div>
  
<div class="wrapper">
<div class="foot">
<div class="flexy">
<div class="copy">© <?php echo date('Y');?>. Все права защищены. <br>
При использовании материалов ссылка обязательна.<br>
Email: <?php echo $in['mail']; ?>
<div class="soc flexy">
<a href="<?php echo $in['tg']; ?>" target="_blank"><div class="round vk"><img src="/img/icf_1.png"></div></a>
<a href="<?php echo $in['tg']; ?>" target="_blank"><div class="round tg"><img src="/img/icf_2.png"></div></a></div>

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
 <?php echo $in['coder']; ?>
<script src="/js/slick.js" type="text/javascript" charset="utf-8"></script>
<script> 

   $("html").css({ opacity:"0" }); 
	
	
    function counter(ms, className){
    let counter = 0;
    let interval = setInterval(() => {
        document.querySelector(className).innerHTML = ++counter;
        counter === 100 ? clearInterval(interval) : false;
    }, ms)
    }
  counter(100, '.loadproc');
  const wrapp = document.getElementById('fon');

  $(function() {
		
  $("body").on("click", ".burg", function(){ 	 
  $(".mobmenu").animate({width: 'show'}, 500); 
  }); 
  
  $("body").on("click", ".close", function(){  
  $(".mobmenu").animate({width: 'hide'}, 400);
 
  });
 
	    if( window.innerWidth > 1000 ){
        var counr = 3;
		} else if ( window.innerWidth > 600) {
		var counr = 2;	
		} else {
		var counr = 1;		
		}
		
	
	   $(".newes").slick({
        dots: false,
        infinite: true,
		arrows : false,
		draggable: true, 
        centerMode: false, 
		centerPadding: 0,
        slidesToShow: counr,
        slidesToScroll: counr
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
        slidesToScroll: counrels
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


	let l1 = document.querySelector('.led1');
    window.addEventListener('mousemove', function(s) {
    let x = s.clientX / window.innerWidth;
    let y = s.clientY / window.innerHeight;  
    l1.style.transform = 'translate(-' + x * 8 + 'px, -' + y * 54 + 'px)';
    });

	let l2 = document.querySelector('.led2');
    window.addEventListener('mousemove', function(s) {
    let x = s.clientX / window.innerWidth;
    let y = s.clientY / window.innerHeight;  
    l2.style.transform = 'translate(-' + x * 8 + 'px, -' + y * 14 + 'px)';
    });
	let l3 = document.querySelector('.led3');
    window.addEventListener('mousemove', function(s) {
    let x = s.clientX / window.innerWidth;
    let y = s.clientY / window.innerHeight;  
    l3.style.transform = 'translate(-' + x * 78 + 'px, -' + y * 34 + 'px)';
    });
		

	let ya3 = document.querySelector('.ya1');
    window.addEventListener('mousemove', function(s) {
    let x = s.clientX / window.innerWidth;
    let y = s.clientY / window.innerHeight;  
    ya3.style.transform = 'translate(-' + x * 8 + 'px, -' + y * 4 + 'px)';
    });
		

	let ya2 = document.querySelector('.ya2');
    window.addEventListener('mousemove', function(s) {
    let x = s.clientX / window.innerWidth;
    let y = s.clientY / window.innerHeight;  
    ya2.style.transform = 'translate(-' + x * 7 + 'px, -' + y * 3 + 'px)';
    });
    let list1 = document.querySelector('.list1');
    window.addEventListener('mousemove', function(s) {
    let x = s.clientX / window.innerWidth;
    let y = s.clientY / window.innerHeight;  
    list1.style.transform = 'translate(-' + x * 17 + 'px, -' + y * 23 + 'px)';
    });
						
		 

    $(".proy").animate({ opacity:"1" }, 1); 
    $(".led1").animate({ opacity:"1" }, 1); 
    $(".led2").animate({ opacity:"1" }, 1); 
    $(".led3").animate({ opacity:"1" }, 1); 
    $(".ya1").animate({ opacity:"1" }, 1); 
    $(".ya2").animate({ opacity:"1" }, 1); 
    $(".list1").animate({ opacity:"1" }, 1); 
    $(".eco").animate({ opacity:"1" }, 1); 
    $(".sun").animate({ opacity:"0" }, 2000); 
	
	
			   $("html").animate({ opacity:"1" }, 2000); 
			 $("body").animate({ opacity:"1" }, 2000); 
	
	 $(window).load(function(){
		 
		         $('body').css({ background: "#165596" });  
 	$(".l1").animate({ opacity:"1" }, 1); 
		$(".l2").animate({ opacity:"1" }, 1); 
			$(".l3").animate({ opacity:"1" }, 1); 
				$(".l4").animate({ opacity:"1" }, 1); 
		
	 $("body").css({ overflow: "unset" }); 
	 $(".load").hide();
	 $(".open").animate({ opacity:"1" }, 1000); 
	 
	  $(".y1").animate({ opacity:"1" }, 1500); 
	   $(".y2").animate({ opacity:"1" }, 1500); 
	 $('.sm').addClass("ritm"); 
	 
	 $('.sm2').addClass("ritm"); 

	 
	 $('.ya1').addClass("gm_ya1"); 
	 $('.ya2').addClass("gm_ya1_2"); 
	 $('.list1').addClass("gm_ya2"); 
	 $('.led2').addClass("gm_ya2_1");  
	 $('.led1').addClass("gm_ya3"); 
	 $('.led3').addClass("gm_ya1_3"); 
	 $('.loador').addClass("woow"); 
	 $('.boom').addClass("bma"); 
	 
	 
	 
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
            CountUp();
            CountUpFlag = 1;
        }
    });
    function CountUp() {
	     // $('.product').children('.text').animate({ left:"0%" }, 1200); 
	     // $('.product').children('.pic').animate({ right:"0%" }, 1200); 
    }
	 
	 <?php } ?>

	 
	 
	 
	 
	   $( ".greder" ).hover(function(){
		    
	 $('.bled1').addClass("grade1"); 
	 $('.bled2').addClass("grade2"); 
	 $('.bled3').addClass("grade3"); 
	 $('.bfr5').addClass("grade4"); 
	 $('.bfr4').addClass("grade5"); 
	 $('.bfr3').addClass("grade6"); 
	 $('.bfr2').addClass("grade7"); 
	 $('.bfr1').addClass("grade8"); 
	 $('.bfr6').addClass("grade9"); 
	 
	 
	   });
	 
	     $(".l1").animate({ left:"-900px" }, 1200); 
    $(".l2").animate({ top:"-500px" }, 1200); 
    $(".l3").animate({ right:"-900px" }, 1200); 
    $(".l4").animate({ bottom:"-1000px" }, 1200);

  $(".l1").animate({ opacity:"0" }, 900);
  $(".l2").animate({ opacity:"0" }, 900);
  $(".l3").animate({ opacity:"0" }, 900);
  $(".l3").animate({ opacity:"0" }, 900);  
      });
 
  });
</script>
</body></html>