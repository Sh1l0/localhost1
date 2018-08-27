$(document).ready(()=>{
$('.filter').on('mouseenter', ()=>{
	$('.filter').animate({backgroundColor: '#ffb94b'}, 200);
});
$('.filter').on('mouseleave', ()=>{
	$('.filter').animate({backgroundColor: '#f39c12'}, 200);
});
$('.filter').on('click', event => {

	$('.fSlide').slideToggle(300);
});
	var toggler = 0;
	$('#viewArrow').on('click', event=>{
	if (toggler === 0){
	

		$(event.currentTarget).find('img').attr('src', '../img/viewArrow1.png');
	
	toggler = 1;
		}
		
	else{
		$(event.currentTarget).find('img').attr('src', '../img/viewArrow.png');
		toggler = 0;
		}
	});
})