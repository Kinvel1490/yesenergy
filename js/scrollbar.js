!function(l,s){"function"==typeof define&&define.amd?define(["jquery"],s):s(l.jQuery)}(this,function(l){"use strict";var s={data:{index:0,name:"scrollbar"},macosx:/mac/i.test(navigator.platform),mobile:/android|webos|iphone|ipad|ipod|blackberry/i.test(navigator.userAgent),overlay:null,scroll:null,scrolls:[],webkit:/webkit/i.test(navigator.userAgent)&&!/edge\/\d+/i.test(navigator.userAgent)};s.scrolls.add=function(l){this.remove(l).push(l)},s.scrolls.remove=function(s){for(;l.inArray(s,this)>=0;)this.splice(l.inArray(s,this),1);return this};var e={autoScrollSize:!0,autoUpdate:!0,debug:!1,disableBodyScroll:!1,duration:200,ignoreMobile:!1,ignoreOverlay:!1,scrollStep:30,showArrows:!1,stepScrolling:!0,scrollx:null,scrolly:null,onDestroy:null,onInit:null,onScroll:null,onUpdate:null},o=function(o){var r;s.scroll||(s.overlay=(r=n(!0),!(r.height||r.width)),s.scroll=n(),c(),l(window).resize(function(){var l=!1;if(s.scroll&&(s.scroll.height||s.scroll.width)){var e=n();(e.height!==s.scroll.height||e.width!==s.scroll.width)&&(s.scroll=e,l=!0)}c(l)})),this.container=o,this.namespace=".scrollbar_"+s.data.index++,this.options=l.extend({},e,window.jQueryScrollbarOptions||{}),this.scrollTo=null,this.scrollx={},this.scrolly={},o.data(s.data.name,this),s.scrolls.add(this)};o.prototype={destroy:function(){if(this.wrapper){this.container.removeData(s.data.name),s.scrolls.remove(this);var e=this.container.scrollLeft(),o=this.container.scrollTop();this.container.insertBefore(this.wrapper).css({height:"",margin:"","max-height":""}).removeClass("scroll-content scroll-scrollx_visible scroll-scrolly_visible").off(this.namespace).scrollLeft(e).scrollTop(o),this.scrollx.scroll.removeClass("scroll-scrollx_visible").find("div").andSelf().off(this.namespace),this.scrolly.scroll.removeClass("scroll-scrolly_visible").find("div").andSelf().off(this.namespace),this.wrapper.remove(),l(document).add("body").off(this.namespace),l.isFunction(this.options.onDestroy)&&this.options.onDestroy.apply(this,[this.container])}},init:function(e){var o=this,r=this.container,i=this.containerWrapper||r,t=this.namespace,c=l.extend(this.options,e||{}),n={x:this.scrollx,y:this.scrolly},d=this.wrapper,h={scrollLeft:r.scrollLeft(),scrollTop:r.scrollTop()};if(s.mobile&&c.ignoreMobile||s.overlay&&c.ignoreOverlay||s.macosx&&!s.webkit)return!1;if(d)i.css({height:"auto","margin-bottom":-1*s.scroll.height+"px","margin-right":-1*s.scroll.width+"px","max-height":""});else{if(this.wrapper=d=l("<div>").addClass("scroll-wrapper").addClass(r.attr("class")).css("position","absolute"==r.css("position")?"absolute":"relative").insertBefore(r).append(r),r.is("textarea")&&(this.containerWrapper=i=l("<div>").insertBefore(r).append(r),d.addClass("scroll-textarea")),i.addClass("scroll-content").css({height:"auto","margin-bottom":-1*s.scroll.height+"px","margin-right":-1*s.scroll.width+"px","max-height":""}),r.on("scroll"+t,function(s){l.isFunction(c.onScroll)&&c.onScroll.call(o,{maxScroll:n.y.maxScrollOffset,scroll:r.scrollTop(),size:n.y.size,visible:n.y.visible},{maxScroll:n.x.maxScrollOffset,scroll:r.scrollLeft(),size:n.x.size,visible:n.x.visible}),n.x.isVisible&&n.x.scroll.bar.css("left",r.scrollLeft()*n.x.kx+"px"),n.y.isVisible&&n.y.scroll.bar.css("top",r.scrollTop()*n.y.kx+"px")}),d.on("scroll"+t,function(){d.scrollTop(0).scrollLeft(0)}),c.disableBodyScroll){var p=function(l){a(l)?n.y.isVisible&&n.y.mousewheel(l):n.x.isVisible&&n.x.mousewheel(l)};d.on("MozMousePixelScroll"+t,p),d.on("mousewheel"+t,p),s.mobile&&d.on("touchstart"+t,function(s){var e=s.originalEvent.touches&&s.originalEvent.touches[0]||s,o={pageX:e.pageX,pageY:e.pageY},i={left:r.scrollLeft(),top:r.scrollTop()};l(document).on("touchmove"+t,function(l){var s=l.originalEvent.targetTouches&&l.originalEvent.targetTouches[0]||l;r.scrollLeft(i.left+o.pageX-s.pageX),r.scrollTop(i.top+o.pageY-s.pageY),l.preventDefault()}),l(document).on("touchend"+t,function(){l(document).off(t)})})}l.isFunction(c.onInit)&&c.onInit.apply(this,[r])}l.each(n,function(s,e){var i=null,d=1,h="x"===s?"scrollLeft":"scrollTop",p=c.scrollStep,f=function(){var l=r[h]();r[h](l+p),1==d&&l+p>=u&&(l=r[h]()),-1==d&&l+p<=u&&(l=r[h]()),r[h]()==l&&i&&i()},u=0;e.scroll||(e.scroll=o._getScroll(c["scroll"+s]).addClass("scroll-"+s),c.showArrows&&e.scroll.addClass("scroll-element_arrows_visible"),e.mousewheel=function(l){if(!e.isVisible||"x"===s&&a(l))return!0;if("y"===s&&!a(l))return n.x.mousewheel(l),!0;var i=-1*l.originalEvent.wheelDelta||l.originalEvent.detail,t=e.size-e.visible-e.offset;return(i>0&&u<t||i<0&&u>0)&&((u+=i)<0&&(u=0),u>t&&(u=t),o.scrollTo=o.scrollTo||{},o.scrollTo[h]=u,setTimeout(function(){o.scrollTo&&(r.stop().animate(o.scrollTo,240,"linear",function(){u=r[h]()}),o.scrollTo=null)},1)),l.preventDefault(),!1},e.scroll.on("MozMousePixelScroll"+t,e.mousewheel).on("mousewheel"+t,e.mousewheel).on("mouseenter"+t,function(){u=r[h]()}),e.scroll.find(".scroll-arrow, .scroll-element_track").on("mousedown"+t,function(t){if(1!=t.which)return!0;d=1;var n={eventOffset:t["x"===s?"pageX":"pageY"],maxScrollValue:e.size-e.visible-e.offset,scrollbarOffset:e.scroll.bar.offset()["x"===s?"left":"top"],scrollbarSize:e.scroll.bar["x"===s?"outerWidth":"outerHeight"]()},a=0,v=0;return l(this).hasClass("scroll-arrow")?(d=l(this).hasClass("scroll-arrow_more")?1:-1,p=c.scrollStep*d,u=d>0?n.maxScrollValue:0):(d=n.eventOffset>n.scrollbarOffset+n.scrollbarSize?1:n.eventOffset<n.scrollbarOffset?-1:0,p=Math.round(.75*e.visible)*d,u=n.eventOffset-n.scrollbarOffset-(c.stepScrolling?1==d?n.scrollbarSize:0:Math.round(n.scrollbarSize/2)),u=r[h]()+u/e.kx),o.scrollTo=o.scrollTo||{},o.scrollTo[h]=c.stepScrolling?r[h]()+p:u,c.stepScrolling&&(i=function(){u=r[h](),clearInterval(v),clearTimeout(a),a=0,v=0},a=setTimeout(function(){v=setInterval(f,40)},c.duration+100)),setTimeout(function(){o.scrollTo&&(r.animate(o.scrollTo,c.duration),o.scrollTo=null)},1),o._handleMouseDown(i,t)}),e.scroll.bar.on("mousedown"+t,function(i){if(1!=i.which)return!0;var c=i["x"===s?"pageX":"pageY"],n=r[h]();return e.scroll.addClass("scroll-draggable"),l(document).on("mousemove"+t,function(l){var o=parseInt((l["x"===s?"pageX":"pageY"]-c)/e.kx,10);r[h](n+o)}),o._handleMouseDown(function(){e.scroll.removeClass("scroll-draggable"),u=r[h]()},i)}))}),l.each(n,function(l,s){var e="scroll-scroll"+l+"_visible",o="x"==l?n.y:n.x;s.scroll.removeClass(e),o.scroll.removeClass(e),i.removeClass(e)}),l.each(n,function(s,e){l.extend(e,"x"==s?{offset:parseInt(r.css("left"),10)||0,size:r.prop("scrollWidth"),visible:d.width()}:{offset:parseInt(r.css("top"),10)||0,size:r.prop("scrollHeight"),visible:d.height()})}),this._updateScroll("x",this.scrollx),this._updateScroll("y",this.scrolly),l.isFunction(c.onUpdate)&&c.onUpdate.apply(this,[r]),l.each(n,function(l,s){var e="x"===l?"left":"top",o="x"===l?"outerWidth":"outerHeight",i=parseInt(r.css(e),10)||0,t=s.size,n=s.visible+i,a=s.scroll.size[o]()+(parseInt(s.scroll.size.css(e),10)||0);c.autoScrollSize&&(s.scrollbarSize=parseInt(a*n/t,10),s.scroll.bar.css("x"===l?"width":"height",s.scrollbarSize+"px")),s.scrollbarSize=s.scroll.bar[o](),s.kx=(a-s.scrollbarSize)/(t-n)||1,s.maxScrollOffset=t-n}),r.scrollLeft(h.scrollLeft).scrollTop(h.scrollTop).trigger("scroll")},_getScroll:function(s){var e={advanced:'<div class="scroll-element"><div class="scroll-element_corner"></div><div class="scroll-arrow scroll-arrow_less"></div><div class="scroll-arrow scroll-arrow_more"></div><div class="scroll-element_outer"><div class="scroll-element_size"></div><div class="scroll-element_inner-wrapper"><div class="scroll-element_inner scroll-element_track"><div class="scroll-element_inner-bottom"></div></div></div><div class="scroll-bar"><div class="scroll-bar_body"><div class="scroll-bar_body-inner"></div></div><div class="scroll-bar_bottom"></div><div class="scroll-bar_center"></div></div></div></div>',simple:'<div class="scroll-element"><div class="scroll-element_outer"><div class="scroll-element_size"></div><div class="scroll-element_track"></div><div class="scroll-bar"></div></div></div>'};return e[s]&&(s=e[s]),s||(s=e.simple),s="string"==typeof s?l(s).appendTo(this.wrapper):l(s),l.extend(s,{bar:s.find(".scroll-bar"),size:s.find(".scroll-element_size"),track:s.find(".scroll-element_track")}),s},_handleMouseDown:function(s,e){var o=this.namespace;return l(document).on("blur"+o,function(){l(document).add("body").off(o),s&&s()}),l(document).on("dragstart"+o,function(l){return l.preventDefault(),!1}),l(document).on("mouseup"+o,function(){l(document).add("body").off(o),s&&s()}),l("body").on("selectstart"+o,function(l){return l.preventDefault(),!1}),e&&e.preventDefault(),!1},_updateScroll:function(e,o){var r=this.container,i=this.containerWrapper||r,t="scroll-scroll"+e+"_visible",c="x"===e?this.scrolly:this.scrollx,n=parseInt(this.container.css("x"===e?"left":"top"),10)||0,a=this.wrapper,d=o.size,h=o.visible+n;o.isVisible=d-h>1,o.isVisible?(o.scroll.addClass(t),c.scroll.addClass(t),i.addClass(t)):(o.scroll.removeClass(t),c.scroll.removeClass(t),i.removeClass(t)),"y"===e&&(r.is("textarea")||d<h?i.css({height:h+s.scroll.height+"px","max-height":"none"}):i.css({"max-height":h+s.scroll.height+"px"})),(o.size!=r.prop("scrollWidth")||c.size!=r.prop("scrollHeight")||o.visible!=a.width()||c.visible!=a.height()||o.offset!=(parseInt(r.css("left"),10)||0)||c.offset!=(parseInt(r.css("top"),10)||0))&&(l.extend(this.scrollx,{offset:parseInt(r.css("left"),10)||0,size:r.prop("scrollWidth"),visible:a.width()}),l.extend(this.scrolly,{offset:parseInt(r.css("top"),10)||0,size:this.container.prop("scrollHeight"),visible:a.height()}),this._updateScroll("x"===e?"y":"x",c))}};var r,i,t=o;l.fn.scrollbar=function(e,o){return"string"!=typeof e&&(o=e,e="init"),void 0===o&&(o=[]),l.isArray(o)||(o=[o]),this.not("body, .scroll-wrapper").each(function(){var r=l(this),i=r.data(s.data.name);(i||"init"===e)&&(i||(i=new t(r)),i[e]&&i[e].apply(i,o))}),this},l.fn.scrollbar.options=e;var c=(r=0,i=0,function(l){var e,o,t,n,a,d,h;for(e=0;e<s.scrolls.length;e++)o=(n=s.scrolls[e]).container,t=n.options,a=n.wrapper,d=n.scrollx,h=n.scrolly,(l||t.autoUpdate&&a&&a.is(":visible")&&(o.prop("scrollWidth")!=d.size||o.prop("scrollHeight")!=h.size||a.width()!=d.visible||a.height()!=h.visible))&&(n.init(),t.debug&&(window.console&&console.log({scrollHeight:o.prop("scrollHeight")+":"+n.scrolly.size,scrollWidth:o.prop("scrollWidth")+":"+n.scrollx.size,visibleHeight:a.height()+":"+n.scrolly.visible,visibleWidth:a.width()+":"+n.scrollx.visible},!0),i++));clearTimeout(r),r=setTimeout(c,300)});function n(e){if(s.webkit&&!e)return{height:0,width:0};if(!s.data.outer){var o={border:"none","box-sizing":"content-box",height:"200px",margin:"0",padding:"0",width:"200px"};s.data.inner=l("<div>").css(l.extend({},o)),s.data.outer=l("<div>").css(l.extend({left:"-1000px",overflow:"scroll",position:"absolute",top:"-1000px"},o)).append(s.data.inner).appendTo("body")}return s.data.outer.scrollLeft(1e3).scrollTop(1e3),{height:Math.ceil(s.data.outer.offset().top-s.data.inner.offset().top||0),width:Math.ceil(s.data.outer.offset().left-s.data.inner.offset().left||0)}}function a(l){var s=l.originalEvent;return(!s.axis||s.axis!==s.HORIZONTAL_AXIS)&&!s.wheelDeltaX}window.angular&&function(l){l.module("jQueryScrollbar",[]).provider("jQueryScrollbar",function(){var s=e;return{setOptions:function(e){l.extend(s,e)},$get:function(){return{options:l.copy(s)}}}}).directive("jqueryScrollbar",["jQueryScrollbar","$parse",function(l,s){return{restrict:"AC",link:function(e,o,r){var i=s(r.jqueryScrollbar)(e);o.scrollbar(i||l.options).on("$destroy",function(){o.scrollbar("destroy")})}}}])}(window.angular)});