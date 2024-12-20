//*** Light & Dark action  ***//
$('.action-dark').click(function() {
    if ($("body").attr('data-bs-theme') === 'dark') {
       $("body").attr('data-bs-theme', 'light');
    }
    else {
       $("body").attr('data-bs-theme', 'dark');
    }
 });

//*** Sidebar Mode ***//
if ($(window).width() > 1200){
	if (sidebar_compact){
		document.body.classList.add("sidebar-compact");
	}
}
if (dark_mode){
	$("body").attr('data-bs-theme', 'dark');
}