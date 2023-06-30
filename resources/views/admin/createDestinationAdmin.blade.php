@section('css')
    <link rel="stylesheet" href="assets/css/createDestination.css">
@endsection

@extends('admin.mainAdmin')

@section('title', 'Create Destination')

@section('content')
<div class="container">
        <form action="/createDestinationAdmin" method="post" id="form" class="needs-validation" novalidate enctype="multipart/form-data">
            @csrf
            <div class="container-left" data-aos="fade-right">
                <div class="img-container">
                    <label for="file" id="input-label" class="button-img" onclick="document.getElementById('img-input').click()" style="cursor: pointer">
                        <i class="bi bi-plus" style="font-size: 10vw; color:#673AB7;"></i>
                    </label>
                    <input class="@error('image') is-invalid @enderror" name="image" type="file" id="img-input" accept=".jpg,.jpeg,.png" id="file" style="visibility:none;" onchange="showPreview(event)">
                    @error('image')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                    <div class="container-preview" id="preview-container">
                        <label for="file" id="input-label" class="button-img" onclick="document.getElementById('img-input').click()">
                        </label>
                        <img id="img" class="img">
                    </div>
                </div>
                <p>Add Destination Image</p>
            </div>
            <div class="container-right" data-aos="fade-left">

                <p>Create Destination</p>

                <div class="destination-name-container">
                    <input value="{{ old('name') }}" class="form-control @error('name') is-invalid @enderror" placeholder="Destination Name" type="text" name="name" id="destination-name" required />
                    @error('name')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="contact-container">
                    <input value="{{ old('contact') }}" class="form-control @error('contact') is-invalid @enderror" placeholder="Contact Person" type='tel' name="contact" id="contact" onkeypress="return onlyNumberKey(event)"  required />
                    @error('contact')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="person-container">
                    <input value="{{ old('person_count') }}" class="form-control @error('person_count') is-invalid @enderror" placeholder="Person Count" type="number" name="person_count" id="person-name" onkeyup=imposeMinMax(this) required />
                    @error('person_count')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="category-container">
                    <select name="category_id" id="product-category" class="form-control @error('category_id') is-invalid @enderror" required>
                        <option value="" disabled selected>Destination Category</option>
                        @foreach ($categories as $category)
                            @if (old('category_id') == $category->id)
                                <option value="{{ $category->id }}" selected>{{ $category->name }}</option>
                            @else
                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                            @endif
                        @endforeach
                    </select>
                    @error('category_id')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="location-container">
                    <input value="{{ old('location') }}" class="form-control @error('location') is-invalid @enderror" placeholder="Destination Location" type="text" name="location" id="location-name" required />
                    @error('location')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="maps-container">
                    <input value="{{ old('link') }}" class="form-control @error('link') is-invalid @enderror" placeholder="Link Maps Location" type="text" name="link" id="maps-name" required />
                    @error('link')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <textarea class="form-control @error('description') is-invalid @enderror" name="description" id="product-desc" placeholder="Destination Description" required >{{ old('description') }}</textarea>
                @error('description')
                    <div class="invalid-feedback m-0 msg-desc">
                        {{ $message }}
                    </div>
                @enderror

                <div class="d-flex justify-content-center align-items-center">
                    <button type="submit" class="px-3 fs-6">Add Destination</button>
                </div>
            </div>
        </form>
    </div>
@endsection

@section('js')
    <script type="text/javascript" src="{{URL::asset('assets/js/createDestination.js')}}"></script>
    {{-- <script>
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
    </script> --}}
@endsection
