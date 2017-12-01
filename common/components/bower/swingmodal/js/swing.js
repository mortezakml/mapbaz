$( ".open" ).click(function() {
	$(".swing-modal").removeClass("out");
	$(".swing-modal").addClass("in");
	setTimeout(function() {
    $(".swing-modal").css("z-index", "1000");
		$(".swing-modal").css("height", "auto");
		$(".swing-modal").css("width", "550px");
		$(".swing-modal").css("padding", "20px");
	}, 700);
	setTimeout(function() {
		$(".swing-modal-container").fadeIn("slow");
	}, 900);
	$(".circle").addClass("circle-active");
	setTimeout(function() {
		$(".circle").removeClass("circle-active");
		$(".circle").addClass("circle-hide");
	}, 800);
});

$( ".close" ).click(function() {
	$(".swing-modal-container").fadeOut("fast");
	$(".circle").removeClass("circle-hide");
	setTimeout(function() {
		$(".swing-modal").removeClass("in");
		$(".swing-modal").addClass("out");
	}, 150);
	setTimeout(function() {
    $(".swing-modal").css("z-index", "0");
		$(".swing-modal").css("height", "0");
		$(".swing-modal").css("width", "0");
		$(".swing-modal").css("padding", "0");
	}, 150);
});



function SwingModal(type)
{
    if(type == 'show'){
        $(".swing-modal").removeClass("out");
            $(".swing-modal").addClass("in");
            setTimeout(function() {
        $(".swing-modal").css("z-index", "1000");
		$(".swing-modal").css("height", "auto");
		$(".swing-modal").css("width", "550px");
		$(".swing-modal").css("padding", "20px");
	}, 700);
	setTimeout(function() {
		$(".swing-modal-container").fadeIn("slow");
	}, 900);
	$(".circle").addClass("circle-active");
	setTimeout(function() {
		$(".circle").removeClass("circle-active");
		$(".circle").addClass("circle-hide");
	}, 800);
    }
    else if(type == 'hide')
    {
        $(".swing-modal-container").fadeOut("fast");
	$(".circle").removeClass("circle-hide");
	setTimeout(function() {
		$(".swing-modal").removeClass("in");
		$(".swing-modal").addClass("out");
	}, 150);
	setTimeout(function() {
        $(".swing-modal").css("z-index", "0");
		$(".swing-modal").css("height", "0");
		$(".swing-modal").css("width", "0");
		$(".swing-modal").css("padding", "0");
	}, 150);
    }
}