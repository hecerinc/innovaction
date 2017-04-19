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

    
    
    // $("header.video").background({
    //     source: {
    //         poster: "img/bg-mobile-fallback.jpg",
    //         mp4: "mp4/semanailast.mp4"
    //     }
        

    // });

    
});
$(function () {
    $('a[href="#search"]').on('click', function(event) {
        event.preventDefault();
        $('#search').addClass('open');
        $('#search > form > input[type="search"]').focus();
    });
    
    $('#search, #search button.close').on('click keyup', function(event) {
        if (event.target == this || event.target.className == 'close' || event.keyCode == 27) {
            $(this).removeClass('open');
        }
    });
});


