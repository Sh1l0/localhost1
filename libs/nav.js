
$(document).ready(()=>{
 

$(".nav-panel div").on('mouseenter', event =>{
		$(event.currentTarget).css({backgroundColor: '#303030'})
		
	});

$(".nav-panel div").on('mouseleave', event =>{
	
		$(event.currentTarget).css({backgroundColor: '#252525'});	
	

});

$("#log").on('click', ()=>{

	$('.login').slideDown(300);

});
$(".loginButton").on("click", ()=>{
	$('.login').slideUp(200);
});

	
})
