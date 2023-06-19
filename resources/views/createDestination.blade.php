@section('css')
    <link rel="stylesheet" href="assets/css/createDestination.css">
@endsection

@extends('layouts.main')

@section('title', 'Create Destination')

@section('content')
<div class="container">
        <form id="form" class="needs-validation" novalidate>
            <div class="container-left">
                <div class="img-container">
                    {{-- <button id="input-label" class="button-img" onclick="document.getElementById('img-input').click()"><i class="bi bi-plus" style="font-size: 10vw; color:#673AB7;"></i></button>
                    <input type="file" id="img-input" accept=".jpg,.jpeg,.png" onchange="showPreview(event)"> --}}
                    {{-- <img id="img"> --}}
                    {{-- <label for="file" id="input-label" class="button-img" onclick="document.getElementById('img-input').click()" style="cursor: pointer"><i class="bi bi-plus" style="font-size: 10vw; color:#673AB7;"></i></label>
                    <input type="file" accept=".jpg,.jpeg,.png" id="file" style="display:none; visibility:none;" onchange="showPreview(event)">
                    <div id="img"></div> --}}
                    <label for="file" id="input-label" class="button-img" onclick="document.getElementById('img-input').click()" style="cursor: pointer">
                        <i class="bi bi-plus" style="font-size: 10vw; color:#673AB7;"></i>
                    </label>
                    <input type="file" id="img-input" accept=".jpg,.jpeg,.png" id="file" style="visibility:none;" onchange="showPreview(event)">
                    <div class="container-preview" id="preview-container">
                        <label for="file" id="input-label" class="button-img" onclick="document.getElementById('img-input').click()">
                        </label>
                        <img id="img" class="img">
                    </div>
                </div>
                <p>Add Destination Image</p>
            </div>
            <div class="container-right">
                <p>Create Destination</p>
                <div class="destination-name-container">
                    <input class="form-control" placeholder="Destination Name" type="text" name="destination-name" id="destination-name" minlength="3" maxlength="15" required />
                    <div id="invalid-feedback1" class="invalid-feedback">
                        Please Input your Product Name
                    </div>
                </div>
                <div class="contact-container">
                    <input class="form-control" placeholder="Contact Person" type='tel' name="contact-name" id="contact" onkeypress="return onlyNumberKey(event)"  required />
                    <div id="invalid-feedback1" class="invalid-feedback">
                        Please Input your Product Name
                    </div>
                </div>
                <div class="person-container">
                    <input class="form-control" placeholder="Person Count" type="number" name="person-name" id="person-name" min=1 max=28 onkeyup=imposeMinMax(this) required />
                    <div id="invalid-feedback1" class="invalid-feedback">
                        Please Input your Product Name
                    </div>
                </div>
                <div class="category-container">
                    <select  name="product-category" id="product-category" class="form-control" required>
                        <option value="" disabled selected>Destination Category</option>
                        <option value="Category1">Category1</option>
                        <option value="Category2">Category2</option>
                        <option value="Category3">Category3</option>
                        <option value="Category4">Category4</option>
                        <option value="/destination">See All Description</option>
                    </select>
                    {{-- <i class="bi bi-caret-down-fill"></i> --}}
                    <div class="invalid-feedback">
                        Please Select your Category
                    </div>
                </div>
                <div class="location-container">
                    <input class="form-control" placeholder="Destination Location" type="text" name="location-name" id="location-name" minlength="3" maxlength="15" required />
                    <div id="invalid-feedback1" class="invalid-feedback">
                        Please Input your Product Name
                    </div>
                </div>
                <div class="maps-container">
                    <input class="form-control" placeholder="Link Maps Location" type="text" name="maps-name" id="maps-name" minlength="3" maxlength="15" required />
                    <div id="invalid-feedback1" class="invalid-feedback">
                        Please Input your Product Name
                    </div>
                </div>
                <textarea class="form-control" name="product-desc" id="product-desc" placeholder="Destination Description" maxlength="450" required ></textarea>
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

@section('js')
    <script type="text/javascript" src="{{URL::asset('assets/js/createDestination.js')}}"></script>
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
