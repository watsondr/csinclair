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
	/* Bug fix August 2018 - menu disappearing when re-sized.
	
	Needs to be looked at with media calls revamp branch now.
	Was previously setting the "header > nav" element to display: none
		in situations where the window was resized beyond 1023px width
		as part of else statment. Now reverses the mobile response.
	*/
    if($( window ).width() > "1023" ) $("header > nav").css("display","");
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