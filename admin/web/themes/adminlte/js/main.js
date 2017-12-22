$(window).load(function() {
    // Animate loader off screen
    $(".loading").fadeOut("slow");

    
});


function loader(element, type){
    if(type === 'show'){
        $(element).css("position","relative");
        $(element).append('<div class="loading-box"></div>');
        $(element).find('.loading-box').fadeIn(500);
    }
    else if(type === 'hide'){
        $(element).find('.loading-box').fadeOut('slow');
        $(element).find('.loading-box').remove();
    }
}
