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
    <link rel="stylesheet" href="assets/css/signup.css">
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

                <form action="/signup" method="POST" id="form" class="needs-validation d-flex flex-column justify-content-center align-items-center" novalidate>
                    @csrf
                    {{-- <div class="name d-flex flex-row">
                        <div class="firstname">
                            <p>First Name</p>
                            <input type="text" name="firstname" id="firstname" class="form-control rounded @error('firstname') is-invalid @enderror" placeholder="First Name" value="{{ old('firstname') }}" required>

                            @error('firstname')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="lastname">
                            <p>Last Name</p>
                            <input type="text" name="lastname" id="lastname" class="form-control rounded" placeholder="Last Name" value="{{ old('lastname') }}" required>

                        </div>
                    </div> --}}

                    <div class="name">
                        <p>Name</p>
                        <input type="text" name="name" id="name" class="form-control rounded @error('name') is-invalid @enderror" placeholder="Name" value="{{ old('name') }}" required>
                        @error('name')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="username">
                        <p>Username</p>
                        <input type="text" name="username" id="username" class="form-control rounded @error('username') is-invalid @enderror" placeholder="Username" value="{{ old('username') }}" required>
                        @error('username')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="email">
                        <p>Email</p>
                        <input type="email" name="email" id="email" class="form-control rounded @error('email') is-invalid @enderror" placeholder="Email" value="{{ old('email') }}" required>
                        @error('email')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="password">
                        <p>Password</p>

                        <div class="eye-container d-flex justify-content-center align-items-center">
                            <i toggle="#password-field" class="fa fa-fw fa-eye field_icon toggle-password"></i>
                        </div>

                        <input id="pass_log_id" type="password" name="password" class="form-control rounded @error('password') is-invalid @enderror" placeholder="Password" required>
                        @error('password')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="confirm-password">
                        <p>Confirm Password</p>

                        <div class="eye-container d-flex justify-content-center align-items-center">
                            <i toggle="#password-field2" class="fa fa-fw fa-eye field_icon toggle-password2"></i>
                        </div>

                        <input type="password" id="confirm-password" name="password_confirmation" class="form-control rounded @error('password_confirmation') is-invalid @enderror" placeholder="Confirm Password" required>
                        @error('password_confirmation')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>

                    <div class="phone">
                        <p>Phone</p>
                        <input type="text" name="phone" id="phone" class="form-control rounded @error('phone') is-invalid @enderror" placeholder="Phone" value="{{ old('phone') }}" required>
                        @error('phone')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="address">
                        <p>Address</p>
                        <textarea type="text" name="address" id="address" class="form-control rounded @error('address') is-invalid @enderror" placeholder="Address" required>{{ old('address') }}</textarea>
                        @error('address')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <button type="submit">Create Account</button>

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
    {{-- <script>
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

                // form.classList.add('was-validated')
            }, false)
            })
        })()
    </script> --}}

</body>
</html>
