
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
    const initialContent = $('#destinationResult').html();
    var timer;
    //ketika kolom search diisi
    $('#searchBox').on('keyup', function(){
        clearTimeout(timer);
        var ms = 200; // milliseconds
        var val = this.value;
        timer = setTimeout(function() {
            lookup(val);
        }, ms);
        //input dari kolom search
        var searchValue = $('#searchBox').val();
        var categoryValue = $('.categoriesCard.purple-but').attr('value');
        loadFilteredContent(searchValue, categoryValue);
    });

    // ketika category diklik
    $('.categoriesCard').on('click', function(){
        $('.categoriesCard').removeClass('purple-but');
        $(this).addClass('purple-but');
        var categoryValue = $(this).attr('value');
        var searchValue = $('#searchBox').val();

        loadFilteredContent(searchValue, categoryValue);
    });

    function loadFilteredContent(searchValue, categoryValue) {
        var url = '/destinationResult';
        var parameters = [];
        if (categoryValue && categoryValue != '0') {
            parameters.push('category-destination=' + encodeURIComponent(categoryValue));
        }
        if (searchValue) {
            parameters.push('search-destination=' + encodeURIComponent(searchValue));
        }
        if (parameters.length > 0) {
            url += '?' + parameters.join('&');
        }

        console.log(url);
        if(url == '/destinationResult'){
            $('#destinationResult').empty();
            $('#destinationResult').html(initialContent);
        }else{
            $('#destinationResult').load(url);
        }

    }

});
