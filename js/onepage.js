$(function(){
	$("#bs-example-navbar-collapse-1 li:first-child a").addClass("selected");
	$("nav li a").click(changePage);
});

function changePage(){
	$("nav a").removeClass("selected");
	$(this).addClass("selected");
	var container = $(this).attr("href");

	$("html, body").animate({
		scrollTop:$(container).offset().top -50
	}, 600);

	return false;
}