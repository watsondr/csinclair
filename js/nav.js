/*

Creates mobile navigation

*/

$(document).ready(function() {
	$("#navToggle a").click(function(e) {
		
		// do not go to the link
		e.preventDefault();
		
		// instead show / hide
		$("header > nav").slideToggle();
		$("#logo").toggleClass("menuUp menuDown");
		
	});
	
	$(window).resize(function() {
    if($( window ).width() <= "1023") {
        $("header > nav").css("display", "block");
         
        if($("#logo").attr('class') == "menuDown") {
            $("#logo").toggleClass("menuUp menuDown");
        }
    }
    else {
        $("header > nav").css("display", "none");
    }
});
	
	$("header > nav > ul > li > a").click(function(e) {
    if($( window ).width() <= "1023") { 
			if($(this).siblings().size() > 0 ) {
            e.preventDefault();
            $(this).siblings().slideToggle("fast")
            $(this).children(".toggle").html($(this).children(".toggle").html() == 'close' ? 'expand' : 'close');
			}
		}
	});
	
});