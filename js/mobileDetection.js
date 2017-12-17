/*

Written 08/11/2017
Campbell Sinclair

This function tells me if I shoud load the mobile phone footer page.

Note: When mobile site is considerably different I may wish to re-program this to direct to m/index.php 

*/

$(document).ready(function() {
	if (screen.width <= 1023) {
	$('#footerWrapper').load('/m/footer.php');
} else {
	$('#footerWrapper').load('footer.php');
};
});
