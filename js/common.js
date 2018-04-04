$(function(){

	/*Эфекты*/

	$("#btn1").on("click",function(){
			$("#bounce").effect("bounce", {
				times: 7,
				distance: 100,
				direction: "right"
			},1000);
	});


$("#btn2").on("click",function(){
			$("#explode").effect("explode", {
				pieces: 4,
				
			},1000, function(){
				$("#explode").effect("explode", {
				pieces: 4,
				mode:"show"
			},1000,)

			});
	});


$("#btn3").on("click",function(){
			$("#puff").effect("puff",{
				percent: 4,
				
			},1000, function(){
				$("#puff").effect("puff", {
				mode:"show"
			},1000,)

			});
	});

/*Функции show/hide*/


$(".btn4").on("click",function(){
			$("#pic1").hide("bounce",1000);
	});

$(".btn5").on("click",function(){
			$("#pic2").show("bounce",1000);
	});


/*Функции Add/remove Class*/


$("#btn6").on("click",function(){
			$("#radius").addClass("addrad",1000);
	});



$("#btn7").on("click",function(){
			$("#radius1").removeClass("addrad",1000);
	});

$("#btn8").on("click",function(){
			$("#swich").switchClass("swich","swich1",1000);
	}); 


$("#btn9").on("click",function(){
			$("#anim1").animate({
				"color":"white",
				"backgroundColor":"red"
			});
	}); 

/*Виджет Аккардион*/

$("#accord1").accordion({
	active:false,
	collapsible:true,
	heightStyle:"content"
});

/*Виджет ТАБС*/

$("#tabs1").tabs({
	collapsible:true,
	event: 'mouseover'
});
/*Виджет Меню*/

$("#menu").menu({
	
});


/*Виджет Кнопка*/

$("#butt").button();


$("#date, #calendar").datepicker({
   	changeYear: true,
   	changeMonth: true,
   	yearRange: '1940:2028',
   	showWeek: true
   });
   //Виджет слайдер
   $("#slider").slider({
   	min: 10,
   	max: 200,
   	values: [20, 60],
   	range: true,
   	 slide: function( event, ui ) {
        $( "#amount" ).val( "$" + ui.values[ 0 ] + " - $" + ui.values[ 1 ] );
      }
    });
    $( "#amount" ).val( "$" + $( "#slider" ).slider( "values", 0 ) +
      " - $" + $( "#slider" ).slider( "values", 1 ) );
   
/*Виджет диалог ПОПАП МОдальное окно*/

$("#opdialog").on("click", function(){
	$("#dialog").dialog({
		minWidth:400,
		buttons: [
    {
      text: "Ok",
      icon: "ui-icon-heart",
      click: function() {
        $( this ).dialog( "close" );
      }
 
      // Uncommenting the following line would hide the text,
      // resulting in the label being used as a tooltip
      //showText: false
    }
  ],
  modal:true,
   hide: { effect: "explode", duration: 1000 },
   show: { effect: "blind", duration: 800 }
	});
});

/*виджет список Selectmenu*/
$("#spisok").selectmenu();

/*перетаскивание*/


$("#drag1,#drag2,#drag3").draggable({
	revert: true,
	helper:'clone',
	opacity: 0.5,
	zIndex:300
});

$("#gallery img").draggable({
revert:"invalid",
start:function(event,ui){
	ui.helper.css('tranform','rotate(5deg) scaler(1.5)');
},
stop:function(event,ui){
	ui.helper.css('tranform','rotate05deg) scaler(1)');
},
zIndex:100
});
$("#trash").droppable({
activeClass:'highlight',
drop:function(event,ui){
	ui.helper.hide('explode');
	$(this).attr('src','img/trashcan-full-icon.png');
}

});


/*Сортируемые элементы*/

$("#sort1").sortable({
	connectWith:'#sort2',
	helper:'clone',
	opacity: 0.5,

});

$("#sort2").sortable({
	connectWith:'#sort1',
	helper:'clone',
	opacity: 0.5,
	});


/*Меню супер Фиш*/

$("ul.sf-menu").superfish();

/*галерея колор бокс ColorBox*/

$("a.gal").colorbox({
	rel:'gal',
	transition:'fade',
	speed: 500,
	width: 500,
	height: 500,
	opacity: 0.5,
	slideshow: true,
	slideshowSpeed: 2000,
	slideshowAuto: false,
	current:"Фото {current} из {total}",
	slideshowStart: "Слайд шоу пуск",
	slideshowStop:"Стоп Слайд",
});

$("a.inline").colorbox({
inline:true,
width: 700,

});


$("div.slider").bxSlider({
	mode:'horizontal',
	minSlides:3,
	maxSlides:3,
	moveSlides:3,
	sliderWidth:200,
	slideMargin:10

});


});


