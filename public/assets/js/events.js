// function sleep(milliseconds) {
//     const date = Date.now();
//     let currentDate = null;
//     do {
//       currentDate = Date.now();
//     } while (currentDate - date < milliseconds);
// }

const myCarouselElement = document.querySelector('#carouselExample')

const Carousel = new bootstrap.Carousel(myCarouselElement, {
  interval: false
});



if(window.matchMedia("(min-width:576px)").matches){
    var carousel = $('.carousel-inner')[0].scrollWidth;
    var cardWidth = $('.carousel-item').width()*1.017;
    var bannerWidth = $('.banner-item').width();
    var bannerCount = $('.banner-item').length;
    var counter = 0;
    var scrollPosition = 0;
    var bannerPosition = 0;

    // $('.banner').on(true, function(){


    // });

    $('.carousel-control-next').on('click', function(){
        if(scrollPosition < (carousel-(cardWidth*5))){
            console.log('next');
            scrollPosition = scrollPosition + cardWidth;
            $('.carousel-inner').animate({scrollLeft: scrollPosition}, 500);
        }

    });

    $('.carousel-control-prev').on('click', function(){
        if(scrollPosition > 0){
            console.log('prev');
            scrollPosition = scrollPosition - cardWidth;
            $('.carousel-inner').animate({scrollLeft: scrollPosition}, 500);
        }
    });

//bingung

var interval = setInterval(function() {
    if(counter<bannerCount-1){
        bannerPosition = bannerPosition + bannerWidth;
        counter++;
        $('.banner-inner').animate({scrollLeft: bannerPosition}, 750);

        if(counter==bannerCount-1){
            $('.banner-inner').animate({scrollLeft: (-1)*bannerPosition}, 0);
            bannerPosition = 0;
            counter = 0;
        }
    }
 }, 5000);

//bingung

}else{
    $(myCarouselElement).addClass('slide');
}

// moreBtn = document.getElementById("myBtn");
// moreProducts = document.getElementById("more");

// moreBtn.addEventListener('click', function(){
//     moreProducts.style.display = "inline";
// })

$(document).ready(function(){
    // ketika keyword ditulis
    $(document).on('click', '#myBtn1', function(){
        // console.log("Hai");
        var searchValue = $('#search-event').val();
        var categoryValue = $('.bubble-box.purple-but').attr('value');
        var lim = $('#myBtn1').val();
        console.log(lim);
        $(this).fadeOut(100);
        loadFilteredContent(searchValue, categoryValue, lim);
    });

    $('#search-event').on('keyup', function(){
        var searchValue = $('#search-event').val();
        var categoryValue = $('.bubble-box.purple-but').attr('value');
        // var lim = $('#myBtn').val();
        var lim = 1;
        loadFilteredContent(searchValue, categoryValue, lim);
    });

    $('.bubble-box').on('click', function(){
        // perlu masukin value yang kepencet ke #category-event dengan input-hidden
        $('.bubble-box').removeClass('purple-but');
        $(this).addClass('purple-but');
        var searchValue = $('#search-event').val();
        var categoryValue = $(this).attr('value');
        // var lim = $('#myBtn').val();
        var lim = 1;
        loadFilteredContent(searchValue, categoryValue, lim);
    });

    function loadFilteredContent(searchValue, categoryValue, lim) {
        var url = '/events/result';
        var parameters = [];

        if(lim){
            parameters.push('pg=' + encodeURIComponent(lim));
        }
        if (searchValue) {
            parameters.push('search-event=' + encodeURIComponent(searchValue));
        }
        if (categoryValue && categoryValue !== 'All') {
            parameters.push('category-event=' + encodeURIComponent(categoryValue));
        }

        if (parameters.length > 0) {
            url += '?' + parameters.join('&');
        }
        console.log(url);
        $('#result-container').load(url);
    }

});
