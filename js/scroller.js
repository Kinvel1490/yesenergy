$( ()=>{
    var l = (l)=>console.log(l);
    var needScroll = window.matchMedia ("(min-width: 961px)").matches;
    
    // window.addEventListener('resize', l("!"));
    // $(window).on('resize', l("!"))
    
    // function checkMedia () {
    //     needScroll = window.matchMedia ("(min-width: 961px)").matches;
    //     console.log(needScroll)
    // }
    
    
    if (needScroll){
    var startTouchX = 0;
    var startTouchY = 0;
    
    var dt;
    var delay = 150;
    
    const debounce = (callback, time, e)=> {
        clearTimeout(dt);
        let ev = e;
        if (window.pageYOffset <= ($(".stop-scroll").offset().top-1)){
                e.preventDefault();
            }
        dt = setTimeout(()=>callback(ev), time);
    }
    
    document.addEventListener('mousedown', (e)=>{
        if (e.which === 2 || UIEvent.which === 2) {e.preventDefault();}
    });
    
    if (document.querySelectorAll('.screen').length > 1) {
    
    if('onwheel' in document) {
        document.addEventListener('wheel', (e)=>{debounce(scroll, delay, e)}, {passive:false});
    } else if ("onmousewheel" in document) {
        document.addEventListener('mousewheel', (e)=>{debounce(scroll, delay, e)}, {passive:false})
    } else {
        document.addEventListener('DOMMouseScroll', (e)=>{debounce(scroll, delay, e)}, {passive:false})
    }			
    
    document.addEventListener('touchmove', scroll, {passive:false});
    $(document).on('touchstart', (e)=>{
        startTouchX = e.originalEvent.changedTouches[0].clientX;
        startTouchY = e.originalEvent.changedTouches[0].clientY;
    });
    $(document).on('touchend', ()=>{
        if (deltaY != 0) {								
            if (pageYOffset <= ($(".stop-scroll").offset().top)){
                if (deltaY > 0) {num++}
                if (deltaY < 0) {num--}
                if(num > maxScroll) {num = maxScroll}
                if (num<1) {num = 1}
    
                scrollAnimation();
            }
        }
        deltaY = 0;
    });
    
    var num = 1;
    var scrolling = false;
    var maxScroll = document.querySelectorAll('.screen').length;
    var deltaY = 0;
    
    function scroll(event) {
        
        if(event.type != "touchmove") {
            if (pageYOffset <= ($(".stop-scroll").offset().top-1)){
                if (!scrolling) {
                    scrolling = true;
                    if (event.deltaY < 0 || event.detail < 0 || event.wheelDelta > 0 || event.deltaY < 0 /*|| event.wheelDeltaY < 0*/) {
                        num--;
                        if (num<1) {num = 1}
                    } 
                    if (event.deltaY > 0 || event.detail > 0 || event.wheelDelta < 0 || event.deltaY > 0 /*|| event.wheelDeltaY > 0*/) {
                        num++;
                        if(num > maxScroll) {num = maxScroll}
                    }
                        scrollAnimation();
                }
            }
        }
        if(event.type === "touchmove") {
            if (pageYOffset <= ($(".stop-scroll").offset().top-1)){
                event.preventDefault();
            }
            var endTouchX = event.changedTouches[0].clientX;
            var endTouchY = event.changedTouches[0].clientY;
            var deltaXMod = Math.abs(startTouchX -endTouchX);
            var deltaYMod = Math.abs(startTouchY - endTouchY);
            if (deltaYMod > deltaXMod ) {
                deltaY = startTouchY - endTouchY;
            } else {(deltaY = 0);}
        }
    }
    
    function scrollAnimation () {    
            $('html, body').animate({
                    scrollTop: $(".screen" + num).offset().top
                }, 500, "linear", ()=> {
                    scrolling = false;
            });
    }
    }
    }

    /*высота отступа от банки*/
    // $(window).on('load', ()=>{
    //     setMarginBot ();
    // window.addEventListener('resize', ()=>{
    //     setMarginBot();
        
    // });
    // });
    
    //   function setMarginBot () {
    // if (window.matchMedia ("(max-width: 960px)").matches && document.querySelector('body').contains(document.querySelector('.about'))){
    //     var h = $('.cloud').height()*.75;
    //     $('.about').css('margin', "0 0 "+h+"px 0");
    // } else if (window.matchMedia ("(max-width: 960px)").matches && document.querySelector('body').contains(document.querySelector('.nobos'))) {
    //     var h = $('.cloud').height()*.75;
    //     $('.optovik').css('margin', "0 0 "+h+"px 0");
    // } else ($('.about').css('margin', "inherit"));
    // }
});
