
$(document).ready(()=>{
 

$(".nav-panel div").on('mouseenter', event =>{
		$(event.currentTarget).animate({backgroundColor: '#202020'}, 150)
		
	});

$(".nav-panel div").on('mouseleave', event =>{
	
		$(event.currentTarget).animate({backgroundColor: '#000000'}, 150);	
	

});

$("#log").on('click', ()=>{
	$("#log").css({backgroundColor: '#202020'});
	$('.login').slideToggle(300);

});

})
