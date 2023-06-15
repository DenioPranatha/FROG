<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign Up</title>

    {{-- bootstrap css --}}
    <link rel="stylesheet" href="/node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="/node_modules/bootstrap-icons/font/bootstrap-icons.css">
    <link rel="stylesheet" href="/node_modules/aos/dist/aos.css">
    <link rel="stylesheet" href="/node_modules/OwlCarousel2-2.3.4/dist/assets/owl.carousel.min.css">

    {{-- font style --}}
    <link href='https://fonts.googleapis.com/css?family=Ubuntu' rel='stylesheet'>

    {{-- main css --}}
    <link rel="stylesheet" href="assets/css/SignUp.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" />


</head>
<body>
    <div class="container">
        <div class="box-white d-flex flex-row align-items-center">
            <div class="image" style="background-image: url('assets/img/Charity-pana 1.png')"></div>
            <div class="line"></div>
            <div class="content d-flex flex-column justify-content-center align-items-center">

                <p class="heading">Create Your Account</p>

                <form id="form" class="needs-validation d-flex flex-column justify-content-center align-items-center" novalidate>
                    <div class="name d-flex flex-row">
                        <div class="firstname">
                            <p>First Name</p>

                            <input type="text" id="firstname" class="form-control rounded" placeholder="First Name" required minlength="3" maxlength="25">

                            <div id="invalid-feedback1" class="invalid-feedback">
                                Please Input your First Name
                            </div>
                        </div>

                        <div class="lastname">
                            <p>Last Name</p>

                            <input type="text" id="lastname" class="form-control rounded" placeholder="Last Name" required minlength="3" maxlength="25">

                            <div id="invalid-feedback2" class="invalid-feedback">
                                Please Input your Last Name
                            </div>
                        </div>
                    </div>

                    <div class="username">
                        <p>Username</p>

                        <input type="text" id="username" class="form-control rounded" placeholder="Username " required minlength="3" maxlength="25">

                        <div id="invalid-feedback3" class="invalid-feedback">
                            Please Input your Username
                        </div>
                    </div>

                    <div class="email">
                        <p>Email</p>

                        <input type="email"  id="email" class="form-control rounded" placeholder="Email" required maxlength="254" >

                        <div id="invalid-feedback4" class="invalid-feedback">
                            Please Input your Email
                        </div>
                    </div>

                    <div class="password">
                        <p>Password</p>

                        <div class="eye-container d-flex justify-content-center align-items-center">
                            <i toggle="#password-field" class="fa fa-fw fa-eye field_icon toggle-password"></i>
                        </div>

                        <input id="pass_log_id" type="password" name="pass" class="form-control rounded" placeholder="Password" required>

                        <div id="invalid-feedback5" class="invalid-feedback">
                            Please Input your Password
                        </div>
                    </div>

                    <div class="confirm-password">
                        <p>Confirm Password</p>

                        <div class="eye-container d-flex justify-content-center align-items-center">
                            <i toggle="#password-field2" class="fa fa-fw fa-eye field_icon toggle-password2"></i>
                        </div>

                        <input type="password" id="confirm-password" class="form-control rounded" placeholder="Confirm Password" required>

                        <div id="invalid-feedback6" class="invalid-feedback">
                            Please Confirm your Password
                        </div>
                    </div>

                    <div class="address">
                        <p>Address</p>

                        <textarea type="text" id="address" class="form-control rounded" placeholder="Address" required minlength="10" maxlength="100"></textarea>

                        <div id="invalid-feedback7" class="invalid-feedback errormsg">
                            Please Input your address
                        </div>
                    </div>

                    <button type="submit" name="submit" value="SignUp">Create Account</button>

                    <div class="account d-flex flex-row">
                        <p>Already Have an Account ?</p>

                        <a href="/signin">Sign In</a>
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

    <script src="assets/js/signUp.js"></script>
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
