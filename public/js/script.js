$(document).ready(function () {
	
	$(function (){

// просмотр фото в карточке лота
        CloudZoom.quickStart();

        // Initialize the slider.
        $(function(){
            $('#slider1').Thumbelina({
                $bwdBut:$('#slider1 .left'),
                $fwdBut:$('#slider1 .right')
            });
        });



// 		$('.bxslider').bxSlider({
// 			nextText: '',
//    			prevText: '',
// 			pagerCustom: '#bx-pager',   //нажатие на картинку снизу
// 			responsive: true            //адаптивность
// 		});
//
// 		//увеличительное стекло на 1 товаре
//
//          $('#zoom').elevateZoom({easing:true, tint:true,tintColour:'#999', tintOpacity:0.5, scrollZoom : false, borderColour:'#E4C7AD'});
//          $('#zoom1').elevateZoom({easing:true, tint:true,tintColour:'#999', tintOpacity:0.5, scrollZoom : false, borderColour:'#E4C7AD'});
//          $('#zoom2').elevateZoom({easing:true, tint:true,tintColour:'#999', tintOpacity:0.5, scrollZoom : false, borderColour:'#E4C7AD'});
//          $('#zoom3').elevateZoom({easing:true, tint:true,tintColour:'#999', tintOpacity:0.5, scrollZoom : false, borderColour:'#E4C7AD'});
//          $('#zoom4').elevateZoom({easing:true, tint:true,tintColour:'#999', tintOpacity:0.5, scrollZoom : false, borderColour:'#E4C7AD'});
//          $('#zoom5').elevateZoom({easing:true, tint:true,tintColour:'#999', tintOpacity:0.5, scrollZoom : false, borderColour:'#E4C7AD'});
//          $('#zoom6').elevateZoom({easing:true, tint:true,tintColour:'#999', tintOpacity:0.5, scrollZoom : false, borderColour:'#E4C7AD'});
//          $('#zoom7').elevateZoom({easing:true, tint:true,tintColour:'#999', tintOpacity:0.5, scrollZoom : false, borderColour:'#E4C7AD'});
//
// 		//карусель миниатюр в карточке лота
// 		var carousel = $(".carousel-min");
//
//             // Запускаем плагин карусели
//             //carousel.owlCarousel();
//             carousel.owlCarousel({
//                 // Точки под каруселью
//                 pagination: true,
//
//                 // Количество отображающихся блоков
//                 // в зависимости от устройства (ширины экрана)
//
//                 // Количество блоков на больших экранах
//                 items:             5,
//
//                 // 5 блоков на компьютерах (экран от 1400px до 901px)
//                 itemsDesktop:      [1400, 5],
//
//                 // 3 блока на маленьких компьютерах (экран от 900px до 601px)
//                 //itemsDesktopSmall: [991, 0],
//
//                 // 2 элемента на планшетах (экран от 600 до 480 пикселей)
//                // itemsTablet:       [600, 2],
//
//                 // Настройки для телефона отключены, в этом случае будут
//                 // использованы настройки планшета
//                 //itemsMobile:       false
//             });
//
//             // $('#js-prev').click(function () {
// 			//
//             //     // Запускаем перемотку влево
//             //     carousel.trigger('owl.prev');
// 			//
//             //     return false;
//             // });
//
// 			// Вперед
// 			// При клике на "Вперед"
//             // $('#js-next').click(function () {
// 			//
//             //     // Запускаем перемотку вправо
//             //     carousel.trigger('owl.next');
// 			//
//             //     return false;
//             // });
	});


// \просмотр фото в карточке лота

//просмотр изображений перед загрузкой
		window.preview = function (input) {
		    if (input.files && input.files[0]) {
		        $(input.files).each(function () {
		            var reader = new FileReader();
		            reader.readAsDataURL(this);
		            reader.onload = function (e) {
		                $("#previewImg").append("<img class='thumb' src='" + e.target.result + "'>");
		            }
		        });
		    }
		}

//jquery_ui
	$( function() {
    	// кабинет
    	$( ".accordion" ).accordion({
      		collapsible: true,
      		//active: false 
    	});

    	//главная
    	$( "#tabs" ).tabs();
		//карточка лота
        $( "#tabs1" ).tabs();
    	//часто задаваемые вопросы
        $( "#questions" ).accordion({
            collapsible: false
        });


  	});
//карусель рекламмы в категории
    $( function()  {
        $("#news-slider").owlCarousel({
            items:3,
            itemsDesktop:[1199,3],
            itemsDesktopSmall:[992,2],
            itemsMobile:[767,1],
            navigationText:false,
            stopOnHover:true,
            pagination:true,
            autoPlay:true
        });
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
			//console.log(prevprev);
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


//add_lot
//календарь
		$('#datetime').click(function(){
			event.cancelBubble=true;
		    $(this).select();
		    //$(this).lcs(this);
		});

//если цена с 1 грн, не активно поле ввода цены
		$('#switch').change(function(){
			if ($(this).prop('checked')==false)  {
				$('.left #price').prop('disabled',false);
			}
			else{
				$('#price').prop('disabled',true);
			}
		});

//если резервная цена не активна, поле ввода цены не активно
		$('#switch3').change(function(){
			if ($(this).prop('checked')==true)  {
				$('.left #reserve-price').prop('disabled',false);
			}
			else{
				$('#reserve-price').prop('disabled',true);
			}
		});

//в кабинете таб-переключатель между таблицами
    $('.card-user').click(function(){
    	var clas=$(this).attr( "class");
        var a = clas.split(' ')[1];
        $( "#basic > div").each( function( index, element) {
        	// var id=$( element).attr( "id");
        	if ($( element).attr( "id")==a){
                $(element).css('display','block');
			}
        	else {
                $(element).css('display','none');
			}
        });

    });

//в поиске фильтр по цене активация формы ручного ввода диапазона цен
    $('.sorting_price input').on('change', function() {
        var id_sorting=$('input[name=sorting_price]:checked', '.sorting_price').attr( "id");
        if (id_sorting=='sorting_price5'||id_sorting=='sorting_price55'){
        	console.log('log')
            $('.from').prop('disabled',false);
		}
		else{
            $('.from').prop('disabled',true);
		}
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