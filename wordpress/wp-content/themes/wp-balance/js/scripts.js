!function(){for(var e,o=function(){},s=["assert","clear","count","debug","dir","dirxml","error","exception","group","groupCollapsed","groupEnd","info","log","markTimeline","profile","profileEnd","table","time","timeEnd","timeline","timelineEnd","timeStamp","trace","warn"],a=s.length,i=window.console=window.console||{};a--;)e=s[a],i[e]||(i[e]=o)}(),"undefined"==typeof jQuery?console.warn("jQuery hasn't loaded"):console.log("jQuery has loaded"),jQuery(document).ready(function(){function e(){var e=$("header").height()+50;$(".section-1").css("padding-top",e+"px")}e(),jQuery(window).resize(function(){e()}),jQuery(".two-slides.owl-carousel").owlCarousel({lazyLoad:!0,slideSpeed:5e3,nav:!0,autoplay:!0,autoplayHoverPause:!0,loop:!0,dots:!1,smartSpeed:1e3,margin:0,navText:"",responsiveClass:!0,responsive:{0:{items:1},768:{items:2},992:{items:2}}}),jQuery(".four-slides.owl-carousel").owlCarousel({lazyLoad:!0,slideSpeed:5e3,nav:!0,autoplay:!0,autoplayHoverPause:!0,loop:!0,dots:!1,smartSpeed:1e3,margin:50,navText:"",responsiveClass:!0,responsive:{0:{items:2},768:{items:3},992:{items:4}}}),function(e){e(function(){e(".tabs .tabs__caption").on("click",".tab__label:not(.active)",function(){e(this).addClass("active").siblings().removeClass("active").closest("div.tabs").find("div.tabs__content").removeClass("active").eq(e(this).index()).addClass("active")})})}(jQuery)});
//# sourceMappingURL=maps/scripts.js.map
