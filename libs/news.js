
$(document).ready(()=>{
 
 
var toggler = 0;


$('.more').on('click', event =>{
	
		
		if (toggler === 0){
			$(event.currentTarget).parent().find('#full').slideDown();
		$(event.currentTarget).find('img').attr('src', '../img/more1.png');
		$(event.currentTarget).parent().find('#short').fadeOut();
		$(event.currentTarget).parent().find('#newsPhoto').animate({marginLeft: '315px'}, 400);
		toggler = 1;
		}
		else{
			$(event.currentTarget).parent().find('#full').slideUp();
		$(event.currentTarget).find('img').attr('src', '../img/more.png');	
		$(event.currentTarget).parent().find('#short').fadeIn();
		$(event.currentTarget).parent().find('#newsPhoto').animate({marginLeft: '10px'}, 400);
		toggler = 0;
		}
	
		


});


$(".more0").on( 'mouseenter', event => {

	$(event.currentTarget).animate({backgroundColor: '#bf443a'}, 200);
	
});
$(".more0").on('mouseleave', event => {


	$(event.currentTarget).animate({backgroundColor: '#e24f43'}, 200);
	
});
$(".more1").on( 'mouseenter', event => {

	$(event.currentTarget).animate({backgroundColor: '#209551'}, 200);
	
});
$(".more1").on('mouseleave', event => {


	$(event.currentTarget).animate({backgroundColor: '#27ae60'}, 200);
	
});
$(".more2").on( 'mouseenter', event => {

	$(event.currentTarget).animate({backgroundColor: '#dc8c0d'}, 200);
	
});
$(".more2").on('mouseleave', event => {


	$(event.currentTarget).animate({backgroundColor: '#f39c12'}, 200);
	
});


})