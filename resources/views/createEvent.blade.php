@section('css')
    <link rel="stylesheet" href="assets/css/createEvent.css">
@endsection

@extends('layouts.main')

@section('title', 'Create Event')

@section('content')
<div class="all-contain">
    <div class="container">
            <form id="form" class="needs-validation" novalidate>
                <div class="container-left">
                    <div class="img-container">
                        {{-- <button id="input-label" class="button-img" onclick="document.getElementById('img-input').click()"><i class="bi bi-plus" style="font-size: 10vw; color:#673AB7;"></i></button>
                        <input type="file" id="img-input" accept=".jpg,.jpeg,.png" onchange="showPreview(event)"> --}}
                        {{-- <img id="img"> --}}
                        <label for="file" id="input-label" class="button-img" onclick="document.getElementById('img-input').click()" style="cursor: pointer"><i class="bi bi-plus" style="font-size: 10vw; color:#673AB7;"></i></label>
                        <input type="file" accept=".jpg,.jpeg,.png" id="file" style="display:none; visibility:none;" onchange="showPreview(event)">
                        <div id="img"></div>
                    </div>
                    <p>Add Event Image</p>
                </div>
                <div class="container-right">
                    <p>Add Event</p>
                    <div class="event-name-container">
                        <input class="form-control" placeholder="Event Name" type="text" name="event-name" id="event-name" minlength="3" maxlength="40" required />
                        <div id="invalid-feedback1" class="invalid-feedback">
                            Please Input your Product Name
                        </div>
                    </div>
                    <div class="duration-name-container">
                        <input class="form-control" placeholder="Duration" type="number" name="duration" id="duration" min='1' max="28" onkeyup=imposeMinMax(this) required />
                        <div id="invalid-feedback2" class="invalid-feedback">
                            Please Input your Product Name
                        </div>
                    </div>
                    <div class="destination-container">
                        <select  name="destination-category" id="destination-category" class="form-control" required>
                            <option value="" disabled selected>Choose Destination</option>
                            <option value="Panti Asuhan1">Panti Asuhan1</option>
                            <option value="Panti Asuhan2">Panti Asuhan2</option>
                            <option value="Panti Asuhan3">Panti Asuhan3</option>
                            <option value="Panti Asuhan4">Panti Asuhan4</option>
                            <option value="/destination">See All Description</option>
                        </select>
                        {{-- <i class="bi bi-caret-down-fill"></i> --}}
                        <div class="invalid-feedback">
                            Please Select your Category
                        </div>
                    </div>
                    <textarea class="form-control" name="product-desc" id="product-desc" placeholder="Event Description" maxlength="450" required ></textarea>
                    <div class="invalid-feedback desc-invalid">
                        Please Input your Description
                    </div>
                    <div class="d-flex justify-content-center align-items-center">
                        {{-- <input type="submit" name="submit" value="Add Event"/> --}}
                        <button type="submit" name="submit" value="Add Event">Add Event</button>
                    </div>
                </div>
            </form>
        </div>
    @endsection
</div>

@section('js')
    <script type="text/javascript" src="{{URL::asset('assets/js/createEvent.js')}}"></script>
    <script>
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
@endsection
