
//fire script once ready
jQuery(document).ready(function() {

	
	// set the light option
	lightbox.option({
		'resizeDuration': 200,   //set duration to 2 sec
		'wrapAround': true,  //set  true, when a user reaches the last image in a set, 
							//the right navigation arrow will appear and they will be to 
							//continue moving forward which will take them back to the 
							//first image in the set.
		'alwaysShowNavOnTouchDevices': true //the left and right navigation arrows which appear on mouse hover when viewing image 
	})


	//this event will show 
	$("#btn-get-text").on("click",function() {
		var name = $("#txtname").val();
		alert(name);
	});


	//this set the hello world in the input
	$("#btn-set-text").on("click",function() {
		$("#txtname").val("Hello World");
	});

	//this clear the input
	$("#btn-clear-text").on("click",function() {
		$("#txtname").val("");
	});

	//hide the the panel sugar
	$("#btnhide").click(function() {
		$("#sugar").hide();
	});

	//show the the panel sugar
	$("#btnshow").click(function() {
		$("#sugar").show();
	});

	//toggle the panel
	$("#btntoggle").click(function() {
		$("#sugar").toggle();
	});

	//show the panel with fade in animation 
	$("#btnfadein").click(function() {
		$("#sugar").fadeIn(2000);
	});

	//hide the panel with fade out animation 
	$("#btnfadeout").click(function() {
		$("#sugar").fadeOut(2000);
	});

	//fade in then fade out
	$("#btnprogram").click(function() {
		$("#sugar").fadeIn(2000).fadeOut(2000);
	});

})
