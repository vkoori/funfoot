$("#nav > li > a").click(function(e) {
	if (document.getElementById("toggle-nav").clientWidth > 0) {
		e.preventDefault(); // this prevents the standard link behaviour
		var li = $(this).parent();
		if (!li.hasClass('sub-nav-active')) {
			$("#nav > li.sub-nav-active").removeClass('sub-nav-active');
			li.addClass('sub-nav-active');
		}
	}
});
$("#toggle-nav").click(function() {
	$("#nav").toggleClass('show');
	$("header").toggleClass('fixed');
	var top = $("header").height();
	var vh = Math.max(document.documentElement.clientHeight || 0, window.innerHeight || 0);
	$("#nav").css({
		'top': top + "px",
		'height': (vh - top) + "px"
	});
});

$(document).ready(function() {
	var navbarHeight = $('header').outerHeight();
	$("body").css('padding-top', navbarHeight+'px');


	// Hide Header on on scroll down
	var last_scroll_top = window.pageYOffset || document.documentElement.scrollTop;

	window.addEventListener("scroll", function(){
		var st = window.pageYOffset || document.documentElement.scrollTop;
		if (st > last_scroll_top){
			// downscroll code
			if (st > navbarHeight && !$("header").hasClass('fixed'))
				$('header').removeClass('nav-down').addClass('nav-up');
		} else {
			// upscroll code
			$('header').removeClass('nav-up').addClass('nav-down');
		}
		last_scroll_top = st; // For Mobile or negative scrolling

	}, false);

});

function numberWithCommas(x) {
	return parseInt(x).toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
}

function star() {
    var stars = document.getElementsByClassName("full-stars");
    for (var i = 0; i < stars.length; i++) {
        var w = stars[i].getAttribute("data-width");
        stars[i].style.width = w + "%";
    }
}
star();

// lazy Load (yall.js)
var yall=function(){"use strict";return function(e){var n=(e=e||{}).lazyClass||"lazy",t=e.lazyBackgroundClass||"lazy-bg",o="idleLoadTimeout"in e?e.idleLoadTimeout:200,i=e.observeChanges||!1,r=e.events||{},a=e.noPolyfill||!1,s=window,c="requestIdleCallback",u="IntersectionObserver",l=u in s&&u+"Entry"in s,d=/baidu|(?:google|bing|yandex|duckduck)bot/i.test(navigator.userAgent),v=["srcset","src","poster"],f=[],queryDOM=function(e,o){return f.slice.call((o||document).querySelectorAll(e||"img."+n+",video."+n+",iframe."+n+",."+t))},yallLoad=function(n){var o=n.parentNode;"PICTURE"==o.nodeName&&yallApplyFn(queryDOM("source",o),yallFlipDataAttrs),"VIDEO"==n.nodeName&&yallApplyFn(queryDOM("source",n),yallFlipDataAttrs),yallFlipDataAttrs(n);var i=n.classList;i.contains(t)&&(i.remove(t),i.add(e.lazyBackgroundLoaded||"lazy-bg-loaded"))},yallBindEvents=function(e){for(var n in r)e.addEventListener(n,r[n].listener||r[n],r[n].options||void 0)},yallFlipDataAttrs=function(e){for(var t in v)if(v[t]in e.dataset){e.setAttribute(v[t],e.dataset[v[t]]);var o=e.parentNode;"SOURCE"===e.nodeName&&o.autoplay&&(o.load(),/Trident/.test(navigator.userAgent)&&o.play(),o.classList.remove(n)),e.classList.remove(n)}},yallApplyFn=function(e,n){for(var t=0;t<e.length;t++)s[u]&&n instanceof s[u]?n.observe(e[t]):n(e[t])},b=queryDOM();if(yallApplyFn(b,yallBindEvents),l&&!d){var g=new s[u]((function(e){yallApplyFn(e,(function(e){if(e.isIntersecting||e.intersectionRatio){var n=e.target;c in s&&o?s[c]((function(){yallLoad(n)}),{timeout:o}):yallLoad(n),g.unobserve(n),(b=b.filter((function(e){return e!=n}))).length||i||g.disconnect()}}))}),{rootMargin:("threshold"in e?e.threshold:200)+"px 0%"});yallApplyFn(b,g),i&&yallApplyFn(queryDOM(e.observeRootSelector||"body"),(function(n){new MutationObserver((function(){yallApplyFn(queryDOM(),(function(e){b.indexOf(e)<0&&(b.push(e),yallBindEvents(e),l&&!d?g.observe(e):(a||d)&&yallApplyFn(b,yallLoad))}))})).observe(n,e.mutationObserverOptions||{childList:!0,subtree:!0})}))}else(a||d)&&yallApplyFn(b,yallLoad)}}();
document.documentElement.classList.remove("no-js");
yall();