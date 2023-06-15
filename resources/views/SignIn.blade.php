<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign In</title>

    {{-- bootstrap css --}}
    <link rel="stylesheet" href="/node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="/node_modules/bootstrap-icons/font/bootstrap-icons.css">
    <link rel="stylesheet" href="/node_modules/aos/dist/aos.css">
    <link rel="stylesheet" href="/node_modules/OwlCarousel2-2.3.4/dist/assets/owl.carousel.min.css">

    {{-- font style --}}
    <link href='https://fonts.googleapis.com/css?family=Ubuntu' rel='stylesheet'>

    {{-- main css --}}
    <link rel="stylesheet" href="assets/css/SignIn.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" />


</head>
<body>
    <div class="container">
        <div class="box-white d-flex flex-row align-items-center">
            <div class="image" style="background-image: url('assets/img/Charity-cuate 1.png')"></div>
            <div class="line"></div>
            <div class="content d-flex flex-column justify-content-center align-items-center">
                <p class="heading">Log In</p>

                <form id="form" class="needs-validation d-flex flex-column justify-content-center align-items-center" autocomplete="false" novalidate>
                    <div class="username">
                        <p>Username or Email</p>
                        <input type="text" id="username" class="form-control rounded" placeholder="Username or Email" required>
                        <div id="invalid-feedback1" class="invalid-feedback">
                            Please Input your Username or Email
                        </div>
                    </div>

                    <div class="password">
                        <p>Password</p>

                        <div class="eye-container d-flex justify-content-center align-items-center">
                            <i toggle="#password-field" class="fa fa-fw fa-eye field_icon toggle-password"></i>
                        </div>

                        <input id="pass_log_id" type="password" name="pass" class="form-control rounded" placeholder="Password" required>

                        <div id="invalid-feedback2" class="invalid-feedback">
                            Please Input your Password
                        </div>

                    </div>

                    <button type="submit" name="submit" value="Login">Login</button>

                    <div class="account d-flex flex-row">
                        <p>Don't have an account ?</p>
                        <a href="/signup">Sign Up</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
    {{-- bootstrap js --}}
    <script src="/node_modules/aos/dist/aos.js"></script>
    <script src="/node_modules/jquery/dist/jquery.min.js"></script>
    <script src="/node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="/node_modules/OwlCarousel2-2.3.4/dist/owl.carousel.min.js"></script>
    <script src="/node_modules/chart.js/dist/chart.umd.js"></script>
    <script src="/node_modules/chartjs-adapter-date-fns/dist/chartjs-adapter-date-fns.bundle.min.js"></script>
    <script src="assets/js/signIn.js"></script>
    <script>
        // script for bootstrap validation
        (function () {
            'use strict'

            var forms = document.querySelectorAll('.needs-validation')

            Array.prototype.slice.call(forms)
                .forEach(function(form) {
                    form.addEventListener('submit', function(event){
                if (!form.checkValidity()) {
                event.preventDefault()
                event.stopPropagation()
                }

                form.classList.add('was-validated')
            }, false)
            })
        })()
    </script>

</body>
</html>
