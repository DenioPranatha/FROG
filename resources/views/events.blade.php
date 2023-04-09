<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Frog | Events</title>
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

    <div class="header">Popular Events</div>
    <div class="carousel-container">
        @for($i = 0; $i < 10; $i++)
            <div class="card-carousel">
                <img src="..." class="card-img">
                <div class="caption">
                    <p>RTB Chinese New Year Jualan</p>
                </div>
            </div>
        @endfor

        <br>
        <div class="search-row">
            <div class="form-group bubble-box">
                <input type="text" name="search-event" id="search-event" placeholder="Search Event or categories">
            </div>
            <div class="bubble-box">Cat1</div>
            <div class="bubble-box">Cat2</div>
            <div class="bubble-box">Cat3</div>
        </div>
        <br>

        @for($i = 0; $i < 25; $i++)
        <div class="card-carousel">
            <img src="..." class="card-img">
            <div class="caption">
                <p>RTB Chinese New Year Jualan</p>
            </div>
        </div>
        @endfor

    </div>




    

    {{-- bootstrap js --}}
    <script src="node_modules/aos/dist/aos.js"></script>
    <script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>

    {{-- script for animate on scroll --}}
    <script>
        AOS.init();
    </script>
</body>
</html>
