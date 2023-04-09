<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Frog | Events</title>
    <link rel="shortcut icon" href="img/frg.ico" >
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="node_modules/bootstrap-icons/font/bootstrap-icons.css">
    <link rel="stylesheet" href="node_modules/aos/dist/aos.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=M+PLUS+Rounded+1c&family=Righteous&family=Ubuntu&display=swap');
    </style>

    <link rel="stylesheet" href="css/style.css">

</head>
<body>
    <div class="banner">
        <img src="..." class="img-fluid" alt="Responsive image">
    </div>
    <div class="header" data-aos="fade-up" data-aos-duration="1000">Popular Events</div>

    <div id="carouselExample" class="carousel">
        <div class="carousel-inner">
            @for($i = 0; $i < 10; $i++)
            <div class="carousel-item">
                <a href="" class="custom-card">
                <div class="card" data-aos="flip-left" data-aos-duration="1000" data-aos-delay="1000" data-aos-once="true">
                    <img src="img/rtb.webp" class="card-img">
                    <div class="caption">
                        <p>RTB Chinese New Year Jualan</p>
                    </div>
                </div>
                </a>
            </div>
            @endfor
        </div>

        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
    </div>

    <br>
    <div class="search-row">
        <div class="form-group bubble-box">
            <input type="text" name="search-event" id="search-event" placeholder="Search Event or categories" class="no-outline">
            <button class="search-button">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="search">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z" />
                </svg>
            </button>
        </div>
        <a href="" class="custom-card">
            <div class="bubble-box">Category 1</div>
        </a>
        <a href="" class="custom-card">
            <div class="bubble-box">Category 2</div>
        </a>
        <a href="" class="custom-card">
            <div class="bubble-box">Category 3</div>
        </a>
    </div>
    <br>

    <div class="catalog-container">
        @for($i = 0; $i < 25; $i++)
        <a href="" class="custom-card">
            <div class="card" data-aos="flip-left" data-aos-duration="1000" data-aos-once="true">
                <img src="img/rtb.webp" class="card-img">
                <div class="caption">
                    <p>RTB Chinese New Year Jualan</p>
                </div>
            </div>
        </a>
        @endfor
    </div>




    <div class="pagination-container">
        <div class="prev">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5L8.25 12l7.5-7.5" />
            </svg>
        </div>
        @for($i = 1; $i<=6; $i++)
        <a class="page-num">{{ $i }}</a>
        @endfor
        <div class="next">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
            </svg>
        </div>
    </div>


    <script src="https://code.jquery.com/jquery-3.6.4.min.js" integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script>
    {{-- bootstrap js --}}
    <script src="node_modules/aos/dist/aos.js"></script>
    <script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="js/script.js"></script>
    {{-- script for animate on scroll --}}
    <script>
        AOS.init();
    </script>
</body>
</html>
