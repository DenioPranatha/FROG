// Owlcarousel
$(document).ready(function(){
    $(".owl-carousel").owlCarousel({
        loop:true,
        margin:10,
        nav:true,
        autoplay:true,
        autoplayTimeout:3000,
        autoplayHoverPause:true,
        center: true,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:1
            },
            1000:{
                items:3
            }
        },
    });
});

// window.onload = (event) => {
//     console.log("page is fully loaded");
//   };

$(document).ready(function(){
    // ketika see more diclick
    // $(document).on('click', '#myBtn1', function(){
    //     //input dari kolom search
    //     var searchValue = $('#searchBox').val();
    //     var lim = $('#myBtn1').val();
    //     $(this).fadeOut(100);
    //     //Masukin ke function penggabung
    //     loadFilteredContent(searchValue, lim);
    // });

    //ketika kolom search diisi
    $('#searchBox').on('keyup', function(){
        //input dari kolom search
        var searchValue = $('#searchBox').val();
        loadFilteredContent(searchValue);
    });

    function loadFilteredContent(searchValue) {
        var url = '/destinationResult';
        var parameters = [];
        if (searchValue) {
            parameters.push('search-event=' + encodeURIComponent(searchValue));
        }
        if (parameters.length > 0) {
            url += '?' + parameters.join('&');
        }
        console.log(url);
        $('#destinationResult').load(url);
    }

});
