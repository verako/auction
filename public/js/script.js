$(document).ready(function () {
	// var str=$(".card-title").text();
	// consele.log('str');
	$(function (){
		var html = $('.del').hide();
		$('.login').hide();

		 //один товар
		$('.bxslider').bxSlider({
			nextText: '',
   			prevText: '',
			pagerCustom: '#bx-pager',   //нажатие на картинку снизу
			responsive: true            //адаптивность
		});

		//увеличительное стекло на 1 товаре

         $('#zoom').elevateZoom({easing:true, tint:true,tintColour:'#999', tintOpacity:0.5, scrollZoom : false, borderColour:'#E4C7AD'});
         $('#zoom1').elevateZoom({easing:true, tint:true,tintColour:'#999', tintOpacity:0.5, scrollZoom : false, borderColour:'#E4C7AD'});
         $('#zoom2').elevateZoom({easing:true, tint:true,tintColour:'#999', tintOpacity:0.5, scrollZoom : false, borderColour:'#E4C7AD'});
         $('#zoom3').elevateZoom({easing:true, tint:true,tintColour:'#999', tintOpacity:0.5, scrollZoom : false, borderColour:'#E4C7AD'});
         $('#zoom4').elevateZoom({easing:true, tint:true,tintColour:'#999', tintOpacity:0.5, scrollZoom : false, borderColour:'#E4C7AD'});
         $('#zoom5').elevateZoom({easing:true, tint:true,tintColour:'#999', tintOpacity:0.5, scrollZoom : false, borderColour:'#E4C7AD'});
         $('#zoom6').elevateZoom({easing:true, tint:true,tintColour:'#999', tintOpacity:0.5, scrollZoom : false, borderColour:'#E4C7AD'});
         $('#zoom7').elevateZoom({easing:true, tint:true,tintColour:'#999', tintOpacity:0.5, scrollZoom : false, borderColour:'#E4C7AD'});
	});
	$( function() {
    	// кабинет
    	$( ".accordion" ).accordion({
      		collapsible: true,
      		//active: false 
    	});

    	//карточка лота
    	$( "#tabs" ).tabs();
  	});


//дерево категорий
  	$('.anchor').deepcheckbox({
		readableListTarget: '.selected-readable',
		onChange: function(items, except) {
			$('.selected').html('[' + items.join(', ') + ']');
			$('.excepted').html('[' + except.join(', ') + ']');
		}
	});
		//сворачивать-разворачивать ul
		$('.ul').click(function(){
		    $(this).next('ul').toggleClass('open');
		    $(this).children('i').toggleClass('open');		    
		  });

		//при клике на любой чекбокс проверяем у соседних элементов атрибут checked
		$("input:checkbox").click(function(){
			var prevprev=$(this).parent('li').parent('ul').prev().prev().parent('li').parent('ul').prev().prev();
			var prev=$(this).parent('li').parent('ul').prev().prev();
			var child=prev.next('label').next('ul').children('li').children('input:checkbox');
			console.log(prevprev);
			child.each(function(i,elem) {
				if ($(this).prop("checked")==false) {
					prev.each(function(k,element){
						$(this).prop("checked",false);
						prevprev.prop("checked",false);
					});
					return false;
				} else {
					prev.each(function(k,element){
						$(this).prop("checked",true);

						//prevprev.prop("checked",true);					
					});
				};
			});
		});


		//календарь
		$('#datetime').click(function(){
			event.cancelBubble=true;
		    $(this).select();
		    //$(this).lcs(this);
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