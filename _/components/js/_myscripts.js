$(function() {

	//hightlight the current nav
	$("#home a:contains('Home')").parent().addClass('active');
	$("#about a:contains('About')").parent().addClass('active');
	$("#clinical-trials a:contains('Clinical Trials')").parent().addClass('active');
	$("#services a:contains('Services')").parent().addClass('active');
	$("#volunteers a:contains('Volunteers')").parent().addClass('active');
	$("#sponsors a:contains('Sponsors')").parent().addClass('active');
	$("#resources a:contains('Resources')").parent().addClass('active');
	$("#contact a:contains('Contact Us')").parent().addClass('active');
	$("#career-opportunities a:contains('Career Opportunities')").parent().addClass('active');
	// highligths submenus
	$("#trials-overview a:contains('Trials Overview')").parent().addClass('active');
	$("#current-trials a:contains('Current Trials')").parent().addClass('active');
	$("#inform-concern a:contains('Inform Concern')").parent().addClass('active');





	// make menu dropdown automatically
	$('ul.nav li.dropdown').hover(function() {
		$('.dropdown-menu',this).fadeIn();
	},function() {
		$('.dropdown-menu',this).fadeOut('fast');
	});//hover
}); // jquery is loaded