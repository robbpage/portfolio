// JavaScript Document


$(document).ready(function(){
	placeIT();
})
$(window).resize(function(){
	placeIT();
})

function placeIT(){
	var winHEIGHT = $(window).height();
	var winWIDTH  = $(window).width();
	var divHEIGHT = $("#nameSHELL").height();
	var divOFFSET = winHEIGHT/2 - divHEIGHT/2;
	$("#nameSHELL").css({'margin-top':divOFFSET});
	$("#proSHELL").css({'margin-top':(winHEIGHT - divOFFSET)});
}

function modIT(site){
	$("#"+site).css({'display':'block'}).html("test");
}

$(function () {
  $('[data-toggle="popover"]').popover()
})

function contSUB(){
	$("#contDMAL").attr('src','img/astronaut3.png');
}
