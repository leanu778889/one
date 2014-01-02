
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
function muoverPic(id){
	var img = document.getElementById(id);
	img.className = 'pic_border_lan';
}

function muoutPic(id){
	var img = document.getElementById(id);
	img.className = 'pic_border_ccc';
}

function closeLay(){

	$('.webox').animate({
		opacity: 'toggle'
	}, 1000);
	$('.background').animate({
		opacity: 'toggle'
	}, 1000);
	
}

function editAvaOn(url){
	var edit_ava = document.getElementById('edit_ava');
	edit_ava.src=url+'edit_on.gif';
}
function editAvaOut(url){
	var edit_ava = document.getElementById('edit_ava');
	edit_ava.src=url+'edit.gif';
}