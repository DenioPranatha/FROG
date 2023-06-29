const myCarouselElement = document.querySelector('#carouselExample')

const Carousel = new bootstrap.Carousel(myCarouselElement, {
  interval: false
});
if(window.matchMedia("(min-width:576px)").matches){
    var carousel = $('.recommendDiv .carousel-inner')[0].scrollWidth;
    // var cardWidth = $('.recommendDiv .carousel-item').width()*1.017;
    var cardWidth = $('.recommendDiv .carousel-item').width()*1;

    var scrollPosition = 0;

    // $('.carousel-control-next').on('click', function(){
    //     if(scrollPosition < (carousel-(cardWidth*5))){
    //         console.log('next');
    //         scrollPosition = scrollPosition + cardWidth;
    //         $('.recommendDiv .carousel-inner').animate({scrollLeft: scrollPosition},500);
    //     }

    // });

    // $('.carousel-control-prev').on('click', function(){
    //     if(scrollPosition > 0){
    //         console.log('prev');
    //         scrollPosition = scrollPosition - cardWidth;
    //         $('.recommendDiv .carousel-inner').animate({scrollLeft: scrollPosition},500);
    //     }
    // });

    $('.recommend-next').on('click', function(){
        if(scrollPosition < (carousel-(cardWidth*5))){
            console.log('next');
            scrollPosition = scrollPosition + cardWidth;
            $('.recommendDiv .carousel-inner').animate({scrollLeft: scrollPosition},500);
        }

    });

    $('.recommend-prev').on('click', function(){
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
// $(document).ready(function(){
//     // ketika see more diclick
//     $(document).on('click', '#myBtn1', function(){
//         //input dari kolom search
//         var searchValue = $('#searchBox').val();
//         var lim = $('#myBtn1').val();
//         $(this).fadeOut(100);
//         //Masukin ke function penggabung
//         loadFilteredContent(searchValue, lim);
//     });

//     //ketika kolom search diisi
//     $('#searchBox').on('keyup', function(){
//         //input dari kolom search
//         var searchValue = $('#searchBox').val();
//         var lim = 1;
//         loadFilteredContent(searchValue, lim);
//     });

//     function loadFilteredContent(searchValue, lim) {
//         var url = '/indexResult';
//         var parameters = [];
//         if(lim){
//             parameters.push('pg=' + encodeURIComponent(lim));
//         }
//         if (searchValue) {
//             parameters.push('search-event=' + encodeURIComponent(searchValue));
//         }
//         if (parameters.length > 0) {
//             url += '?' + parameters.join('&');
//         }
//         console.log(url);
//         $('#search-result').load(url);
//     }

// });

// page number for carousel banner
var totalItems = $('.item').length;
var currentIndex = $('div.item.active').index() + 1;

var down_index = 1;
$('.num').html(''+currentIndex+''+'/'+''+totalItems+'');

    $(".next").click(function(){
        currentIndex_active = $('div.item.active').index() + 2
    if (totalItems >= currentIndex_active)
    {
        down_index= $('div.item.active').index() + 2;
        $('.num').html(''+currentIndex_active+''+'/'+''+totalItems+'');
    } else if (currentIndex_active > totalItems){
        currentIndex_active = $('div.item.active').index() - 2;
        down_index= $('div.item.active').index() - 2;
        $('.num').html(''+currentIndex_active+''+'/'+''+totalItems+'');
    }
});

    $(".prev").click(function(){
    if (down_index > 1 )
    {
        down_index=down_index-1;
        $('.num').html(''+down_index+''+'/'+''+totalItems+'');
    } else if (down_index <= 1)
    {
        down_index=totalItems;
        $('.num').html(''+down_index+''+'/'+''+totalItems+'')
    }
});


$("#carouselExampleFade").on('slide.bs.carousel',function(e){
    var data_slide = $('.carousel-fade .active').data('id') + 1;
    if(data_slide < 5){
        $('.num').html(''+data_slide+''+'/'+''+totalItems+'');
    } else{
        $('.num').html(''+(data_slide-4)+''+'/'+''+totalItems+'');
    }
    // alert(data_slide)
})
