<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>

    <link rel="stylesheet" href="{{ asset('node_modules/bootstrap/dist/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('node_modules/bootstrap-icons/font/bootstrap-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('node_modules/aos/dist/aos.css') }}">
    <link rel="stylesheet" href="{{ asset('node_modules/OwlCarousel2-2.3.4/dist/assets/owl.carousel.min.css') }}">

    <style>
        .forbiddenPage{
            /* background-color: yellow; */
            font-family: 'Poppins';
        }

        .emptyCart{
            /* background-color: pink; */
            /* height: 300px; */
            width: 100%;
        }

        .picture{
            /* width: 100%; */
            width: 360px;
            height: 360px;
            /* height: 300px; */
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            margin-top: 30px;
            /* margin-bottom: 10px; */
            /* background-color: pink; */
        }

        .emptyText{
            width: 450px;
            /* background-color: pink; */
            margin-bottom: 20px;
            text-align: center;
            font-family: 'Poppins';
        }

        .text1{
            font-size: 20px;
            font-weight: bold;
            margin-bottom: 15px;
        }

        .text2{
            font-size: 16px;
        }

        .btn{
            background-color: #522E93;
            color: #FFFFFF;
            /* box-shadow: 4px 3px 6px rgba(0, 0, 0, 0.25); */
            /* border-radius: 25px; */
            width: 200px;
            height: 45px;
            font-family: 'Ubuntu';
            font-style: normal;
            font-weight: 700;
            font-size: 18px;
            line-height: 23px;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;

            border: 1px solid #522E93;
            box-shadow: 4px 4px 8px #CDCDCD;
            border-radius: 20px;

            transition: .2s all ease-in-out;
        }

        .btn:hover{
            background-color: #673AB7;
            color: #FFFFFF;
            /* box-shadow: 4px 3px 6px rgba(0, 0, 0, 0.25); */
            /* border-radius: 25px; */
            width: 200px;
            height: 45px;
            font-family: 'Ubuntu';
            font-style: normal;
            font-weight: 700;
            font-size: 18px;
            line-height: 23px;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;

            box-shadow: 4px 4px 8px #CDCDCD;
            border-radius: 20px;
            transform: scale(1.04);
        }

        a.btn:focus{
            background-color: #673AB7;
            color: #FFFFFF;
            /* box-shadow: 4px 3px 6px rgba(0, 0, 0, 0.25); */
            /* border-radius: 25px; */
            width: 200px;
            height: 45px;
            font-family: 'Ubuntu';
            font-style: normal;
            font-weight: 700;
            font-size: 18px;
            line-height: 23px;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;

            box-shadow: 4px 4px 8px #CDCDCD;
            border-radius: 20px;
        }

        .btn{
            margin: auto;
            /* margin-bottom: 65px; */
            /* background-color: yellow */
        }

        .textt{
            font-family: 'Poppins';
            margin-top: 15px;
        }

    </style>
</head>
<body>
    <div class="forbiddenPage w-100">
        <div class="emptyCart d-flex justify-content-center align-items-center">
            <div class="picture" style="background-image: url({{ asset('/assets/img/error.svg') }}"></div>
        </div>
        <div class="emptyText2 w-100 d-flex justify-content-center">
            <div class="emptyText">
                <p class="text-danger text1">Oops! Your can't access this page!</p>
                <p class="text2">Please come back to home page</p>
            </div>
        </div>
        <div class="btnDiv w-100">
            <a class="btn" href="/index">
                <p class="textt">Home</p>
            </a>
        </div>
    </div>
</body>
</html>
