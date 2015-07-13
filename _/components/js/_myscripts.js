$(function() {

	// make menu dropdown automatically
	$('ul.nav li.dropdown').hover(function() {
		$('.dropdown-menu',this).fadeIn();
	},function() {
		$('.dropdown-menu',this).fadeOut('fast');
	});//hover
}); // jquery is loaded