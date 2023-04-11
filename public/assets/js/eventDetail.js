const myCarouselElement = document.querySelector('#carouselExample')

const Carousel = new bootstrap.Carousel(myCarouselElement, {
  interval: false
});

var btnContainer = document.getElementById("nav-cont");
var btns = btnContainer.getElementsByClassName("nav-button");

if(window.matchMedia("(min-width:576px)").matches){
    var carousel = $('.slide')[0].scrollWidth;
    var cardWidth = $('.carousel-item').width();
    var scrollPosition = 0;
    var current = document.getElementsByClassName("active");

    $('.carousel-control-next').on('click', function(){
        if(scrollPosition < (carousel-(cardWidth))){
            scrollPosition = scrollPosition + cardWidth;
            $('.slide').animate({scrollLeft: scrollPosition}, 1000);
        }

        console.log('prev')

        current[0].className = current[0].className.replace(" active", "");
        this.className += " active";

    });

    $('.carousel-control-prev').on('click', function(){
        if(scrollPosition > 0){
            scrollPosition = scrollPosition - cardWidth;
            $('.slide').animate({scrollLeft: scrollPosition}, 1000);
        }

        console.log('next')

        current[0].className = current[0].className.replace(" active", "");
        this.className += " active";

    });
}else{
    $(myCarouselElement).addClass('slide');
}


const myCarouselElement1 = document.querySelector('#carouselExample1')

const Carousel1 = new bootstrap.Carousel(myCarouselElement1, {
  interval: false
});

var btnContainer1 = document.getElementById("nav-cont1");
var btns1 = btnContainer.getElementsByClassName("nav-button1");

if(window.matchMedia("(min-width:576px)").matches){
    var carousel1 = $('.slide1')[0].scrollWidth;
    var cardWidth1 = $('.carousel-item1').width();
    var scrollPosition1 = 0;
    var current1 = document.getElementsByClassName("active1");

    $('.carousel-control-next1').on('click', function(){
        if(scrollPosition1 < (carousel1-(cardWidth1))){
            scrollPosition1 = scrollPosition1 + cardWidth1;
            $('.slide1').animate({scrollLeft: scrollPosition1}, 1000);
        }

        console.log('prev')

        current1[0].className = current1[0].className.replace(" active active1", "");
        this.className += " active active1";

    });

    $('.carousel-control-prev1').on('click', function(){
        if(scrollPosition1 > 0){
            scrollPosition1 = scrollPosition1 - cardWidth1;
            $('.slide1').animate({scrollLeft: scrollPosition1}, 1000);
        }

        console.log('next')

        current1[0].className = current1[0].className.replace(" active active1", "");
        this.className += " active active1";

    });
}else{
    $(myCarouselElement1).addClass('slide');
}
