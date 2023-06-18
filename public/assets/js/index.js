const myCarouselElement = document.querySelector('#carouselExample')

const Carousel = new bootstrap.Carousel(myCarouselElement, {
  interval: false
});
if(window.matchMedia("(min-width:576px)").matches){
    var carousel = $('.recommendDiv .carousel-inner')[0].scrollWidth;
    // var cardWidth = $('.recommendDiv .carousel-item').width()*1.017;
    var cardWidth = $('.recommendDiv .carousel-item').width()*1;

    var scrollPosition = 0;

    $('.carousel-control-next').on('click', function(){
        if(scrollPosition < (carousel-(cardWidth*5))){
            console.log('next');
            scrollPosition = scrollPosition + cardWidth;
            $('.recommendDiv .carousel-inner').animate({scrollLeft: scrollPosition},500);
        }

    });

    $('.carousel-control-prev').on('click', function(){
        if(scrollPosition > 0){
            console.log('prev');
            scrollPosition = scrollPosition - cardWidth;
            $('.recommendDiv .carousel-inner').animate({scrollLeft: scrollPosition},500);
        }
    });
}else{
    $(myCarouselElement).addClass('slide2');
}

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

// jquery untuk searching
$(document).ready(function(){
    console.log('hai');
    // ketika see more diclick
    $(document).on('click', '#myBtn1', function(){
        //input dari kolom search
        var searchValue = $('#searchBox').val();
        //input dari cat sekarang
        // var categoryValue = $('.bubble-box.purple-but').attr('value');
        //input berapa batch see more yg harus keload di kondisi sekarang
        var lim = $('#myBtn1').val();
        $(this).fadeOut(100);

        //Masukin ke function penggabung
        loadFilteredContent(searchValue, lim);
    });

    //ketika kolom search diisi
    $('#searchBox').on('keyup', function(){
        //input dari kolom search
        var searchValue = $('#searchBox').val();
        //input dari cat sekarang
        // var categoryValue = $('.bubble-box.purple-but').attr('value');
        //input berapa batch see more yg harus keload
        var lim = 1;

        //Masukin ke function penggabung
        loadFilteredContent(searchValue, lim);
    });

    // //ketika category diklik
    // $('.bubble-box').on('click', function(){

    //     //pindahin warna purple
    //     $('.bubble-box').removeClass('purple-but');
    //     $(this).addClass('purple-but');

    //     //input dari kolom search
    //     var searchValue = $('#search-event').val();
    //     //input dari cat sekarang
    //     var categoryValue = $(this).attr('value');
    //     //input berapa batch see more yg harus keload
    //     var lim = 1;
    //     loadFilteredContent(searchValue, categoryValue, lim);
    // });

    function loadFilteredContent(searchValue, lim) {
        var url = '/index/result';
        var parameters = [];

        //periksa apakah lim, searchValue, dan categoryValue dimasukin di fungsi di atas
        //Kalo iya, tambah di get ?search-event=banjir
        if(lim){
            parameters.push('pg=' + encodeURIComponent(lim));
        }
        if (searchValue) {
            parameters.push('search-event=' + encodeURIComponent(searchValue));
        }
        // if (categoryValue && categoryValue !== 'All') {
        //     parameters.push('category-event=' + encodeURIComponent(categoryValue));
        // }

        if (parameters.length > 0) {
            url += '?' + parameters.join('&');
        }
        // console.log(url);
        //load secara live, tapi yang diload satu container aja, yaitu result container
        //jadi hasil livesearch itu intinya harus ada dalam 1 container, bukan semua page nya yang berubah
        //cari di eventsResult.blade.php
        $('#result-container').load(url);
    }

});
