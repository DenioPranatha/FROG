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
    var current = document.getElementsByClassName("active2");
    var n = document.getElementsByClassName("carousel-control-next");
    var p = document.getElementsByClassName("carousel-control-prev");

    var a = $('.slide');
    a.scroll(function(){
        var str1 = p[0].className.toString();
        var str2 = n[0].className.toString();
        if(a.scrollLeft() >= 800){
            if(str1.includes(" active")){
                p[0].className = p[0].className.replace(" active active2", "");
                n[0].className += " active active2";
            }
        }
        if(a.scrollLeft() <= 100){
            if(str2.includes(" active")){
                n[0].className = n[0].className.replace(" active active2", "");
                p[0].className += " active active2";
            }
        }
    });

    $('.carousel-control-next').on('click', function(){
        if(scrollPosition < (carousel-(cardWidth))){
            scrollPosition = scrollPosition + cardWidth;
            $('.slide').animate({scrollLeft: scrollPosition}, 1000);
        }

        current[0].className = current[0].className.replace(" active active2", "");
        this.className += " active active2";

    });

    $('.carousel-control-prev').on('click', function(){
        if(scrollPosition > 0){
            scrollPosition = scrollPosition - cardWidth;
            $('.slide').animate({scrollLeft: scrollPosition}, 1000);
        }
        current[0].className = current[0].className.replace(" active active2", "");
        this.className += " active active2";

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

    var n1 = document.getElementsByClassName("carousel-control-next1");
    var p1 = document.getElementsByClassName("carousel-control-prev1");

    var a1 = $('.slide1');
    a1.scroll(function(){
        var str3 = p1[0].className.toString();
        var str4 = n1[0].className.toString();
        if(a1.scrollLeft() >= 750){
            if(str3.includes(" active")){
                p1[0].className = p1[0].className.replace(" active active1", "");
                n1[0].className += " active active1";
            }
        }
        if(a1.scrollLeft() <= 100){
            if(str4.includes(" active")){
                n1[0].className = n1[0].className.replace(" active active1", "");
                p1[0].className += " active active1";
            }
        }
    });

    $('.carousel-control-next1').on('click', function(){ //jika button next diklik
        if(scrollPosition1 < (carousel1-(cardWidth1))){
            scrollPosition1 = scrollPosition1 + cardWidth1;
            $('.slide1').animate({scrollLeft: scrollPosition1}, 1000);
        }

        console.log('prev')

        current1[0].className = current1[0].className.replace(" active active1", "");
        this.className += " active active1";

    });

    $('.carousel-control-prev1').on('click', function(){ //jika button prev diklik
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
