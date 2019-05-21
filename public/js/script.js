$(document).ready(function () {
	// var str=$(".card-title").text();
	// consele.log('str');
	$(function (){
		var html = $('.del').hide();
		$('.login').hide();

		 //один товар
		$('.bxslider').bxSlider({
			pagerCustom: '#bx-pager'
		});

		//увеличительное стекло на 1 товаре

         $('#zoom').elevateZoom({easing:true, tint:true,tintColour:'#999', tintOpacity:0.5, scrollZoom : false, borderColour:'#E4C7AD'});
         $('#zoom1').elevateZoom({easing:true, tint:true,tintColour:'#999', tintOpacity:0.5, scrollZoom : false, borderColour:'#E4C7AD'});
         $('#zoom2').elevateZoom({easing:true, tint:true,tintColour:'#999', tintOpacity:0.5, scrollZoom : false, borderColour:'#E4C7AD'});
	});
	$( function() {
    	// кабинет
    	$( ".accordion" ).accordion({
      		collapsible: true,
      		//active: false 
    	});
  	});

  


	//наверх кнопка
  	$('.top').click(function(){
			//для разных браузеров либо html либо body анимируется
			$('html, body').animate({
				scrollTop:0//устанавливаем top:0
			},3000)
			return false;
		});

});