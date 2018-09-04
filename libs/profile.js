$(document).ready(()=>{
	var profileSwitcher = false;
	var oBOn=false;
	var pubsOn=false;
	var likedOn=false;
	$('#oB').on('click', event =>{
		$('.oB').fadeIn(200);
		$('.Pubs').fadeOut(200);
		$('.liked').fadeOut(200);
		$("#oB").css({backgroundColor:"#e24f43"});
		$("#publications").css({backgroundColor:"#252525"});
		$("#liked").css({backgroundColor:"#252525"});

		
	});
		$('#publications').on('click', event =>{
			$('.Pubs').fadeIn(200);
			$('.oB').fadeOut(200);
			$('.liked').fadeOut(200);
			$("#oB").css({backgroundColor:"#252525"});
			$("#publications").css({backgroundColor:"#e24f43"});
		$("#liked").css({backgroundColor:"#252525"});
	});
		$('#liked').on('click', event =>{
			$('.liked').fadeIn(200);
			$('.oB').fadeOut(200);
			$('.Pubs').fadeOut(200);
			$("#oB").css({backgroundColor:"#252525"});
			$("#publications").css({backgroundColor:"#252525"});
			$("#liked").css({backgroundColor:"#e24f43"});
	});
		$('.changePhoto').on('click', ()=>{
			$('.flown').fadeIn(200);
			$('#backgr').fadeIn(200);
		});
	$('#backgr').on('click', () =>{
			$('.flown').fadeOut(200);
			$('#backgr').fadeOut(200);
});

});	