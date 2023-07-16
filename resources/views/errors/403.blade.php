<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <style>
        .emptyCart{
            /* background-color: yellow; */
            /* height: 300px; */
            width: 100%;
        }

        .picture{
            /* width: 100%; */
            width: 450px;
            height: 300px;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            margin-top: 30px;
            margin-bottom: 10px;
            /* background-color: pink; */
        }

        .emptyText{
            width: 450px;
            /* background-color: pink; */
            margin-bottom: 30px;
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
            margin: auto;
            margin-bottom: 65px;
        }
    </style>
</head>
<body>
    <div class="emptyCart d-flex justify-content-center ">
        <div class="picture" style="background-image: url({{ asset('/assets/img/emptyCart.svg') }}"></div>
    </div>
    <div class="emptyText2 w-100 d-flex justify-content-center">
        <div class="emptyText">
            <p class="text-danger text1">Oops! Your cart is empty!</p>
            <p class="text2">Looks like you haven't added anything to your cart yet</p>
        </div>
    </div>
    <div class="btnDiv w-100">
        <a class="btn" href="/products">
            <p>Shop Now!</p>
        </a>
    </div>
</body>
</html>
