$(document).ready(function(){function o(){n.hasClass("open")?(n.removeClass("open"),n.addClass("close")):n.hasClass("close")&&(n.removeClass("close"),n.addClass("open"))}$(function(){var o=$(window).height();$(".home .content").css({"margin-top":o});var s=$(".home .content").offset().top,n=function(){var n=$(window).scrollTop();n>s-79?($(".top-bar").css({background:"#359412"}),$(".logo-top").css({opacity:"1"})):($(".top-bar").css({background:"transparent"}),$(".logo-top").css({opacity:"0"}));var c=1-(n-s+o)/(.7*o),e=n/5+"px";$(".home-info").css({opacity:c}),$(".home-info-content").css({transform:"translateY(-"+e+")"}),c>"1"?$(".home-info").css({opacity:1}):c<"0"&&$(".home-info").css({opacity:0})};n(),$(window).on("resize scroll",function(){n()}).resize()});var s=$("#trigger-overlay"),n=$("div.overlay"),c=$(".overlay button.overlay-close");s.click(function(){return o(),!1}),c.click(function(){return o(),!1})});