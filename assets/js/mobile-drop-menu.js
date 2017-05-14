jQuery(document).ready( function($) {

    var body = $('body');
    var button = $('.mobile-drop-menu');
    var header = $('body > header');
    var nav = $('body > header nav');
    var max = 991;
    var mobile = $(window).width() <= max;
    var hidden;

    if(mobile){
        nav.addClass('hidden-nonimp');
        hidden = true;
        header.addClass('max-height');
    }
    else{
        header.removeClass('max-height');
        nav.removeClass('hidden-nonimp');
        hidden = false;
    }

    console.log(hidden);

    $(window).resize(function() {
        if(!mobile && $(window).width() <= max){
            nav.addClass('hidden-nonimp');
            nav.css('display', 'none');
            header.addClass('max-height');
            hidden = true;
            mobile = true;
        }
        else if(mobile && $(window).width() > max){
            header.removeClass('max-height');
            nav.removeClass('hidden-nonimp');
            nav.css('display', 'block');
            hidden = false;
            mobile = false;
        }
    });

    button.click(function(){
        if(hidden){
            header.removeClass('max-height');
            nav.slideDown(function(){
                nav.removeClass('hidden-nonimp')
            });
            hidden = false;
        }
        else{
            nav.slideUp(function(){
                header.addClass('max-height');
                nav.addClass('hidden-nonimp');
            });
            hidden = true;
        }
    });
});
