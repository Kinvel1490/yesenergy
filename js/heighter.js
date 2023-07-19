var h = 0;
var w = 0;
var p, d;
d = d=>document.querySelector(d);

window.addEventListener('DOMContentLoaded', ()=>{
    var l = l => console.log(l);
    setHeader();
    setWidhtAndHeight();
    window.addEventListener('resize', ()=>{
        setHeader();
        setWidhtAndHeight();
    });
    callParalax();
});

function setHeader () {
    h = window.innerHeight;
    w = window.innerWidth;
    if(d('.bg-wrapper')) {
        if(w>h){
            $('.bg-wrapper').css('width', h);
            $('.bg-wrapper').css('height', '100%');
        } else {
            $('.bg-wrapper').css('height', w);
            $('.bg-wrapper').css('width', '100%');
        }
    }
}

function setWidhtAndHeight () {

    if (d('.product') && d('.pic') && d('.about')) {
        $('.product').css('min-height', d('.pic').clientHeight*.85);
    }
    if(d('.girl') && $('.girl').css('display') != "none"){
        let mt = (d('.girl').clientHeight - d('.otz>.wrapper').clientHeight)*.84;
        $('.otz>.wrapper').css('margin-top', mt)
    } else if (d('.girl') && $('.girl').css('display') == "none" && d('.iceberg').clientHeight > 0) {
        mt = d('.iceberg').clientHeight;
        $('.otz>.wrapper').css('margin-top', mt)
    } else if (d('.cloud')) {
    mt = d('.cloud').clientHeight*.7;
    $('.otz>.wrapper').css('margin-top', mt)
}
}

function callParalax () {
    if(d('.bg-wrapper')){
        p = new Parallax(d('.bg-wrapper', {
            relativeInput: true,
            clipRelativeInput: true,
        }));
        
    }    
}

$( ".greder" ).hover(function(){
    $('.bled1').animate({
        top: "31.61%",
        left: "15%",
    }, 200)
    $('.bled2').animate({
        top: "18%",
        left: "71%",
    }, 200)
    $('.bled3').animate({
        top: "75.05%",
        left: "62%",
    }, 200)
    $('.bfr6').animate({
        top: "63.81%",
        left: "66%",
    }, 200)
    $('.bfr1').animate({
        top: "65%",
        left: "26%",
    }, 200)
    $('.bfr5').animate({
        top: "58.67%",
        left: "50%",
    }, 200)
    $('.bfr3').animate({
        top: "55.89%",
        left: "13%",
    }, 200)
    $('.bfr4').animate({
        top: "70.19%",
        left: "74%",
    }, 200)
    $('.bfr2').animate({
        top: "81.81%",
        left: "20%",
    }, 200)
});