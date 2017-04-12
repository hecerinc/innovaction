$( document ).ready(function() {
    
    
    $(window).scroll(function() {
        var nav = $('#navbarMain');
        var top = 500;
        if ($(window).scrollTop() >= top) {
    
            nav.addClass('bg-primary');
    
        } else {
            nav.removeClass('bg-primary');
        }
    });
    
    
    
    
    $("header.video").background({
        source: {
            poster: "img/bg-mobile-fallback.jpg",
            mp4: "mp4/semanailast.mp4"
        }
        

    });

    
});

