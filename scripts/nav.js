

$(document).ready( function(){

	var menuShown = false;

	$('#galleryBtn').click(function() {

		if (menuShown) {
			$('#sub-menu').slideUp('fast');
			$('#galleryBtn').css('background-color','rgb(34, 37, 34)');
			menuShown = false;
		} else {
			$('#sub-menu').slideDown('fast');
			$('#sub-menu').css('left', this.offsetLeft + 'px');
			$('#galleryBtn').css('background-color','rgba(98, 93, 95, 0.9)');
			menuShown = true;
		}

	});

});