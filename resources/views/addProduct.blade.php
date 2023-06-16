@section('css')
    <link rel="stylesheet" href="assets/css/addProduct.css">
@endsection

@extends('layouts.main')

@section('title', 'Profile')

@section('content')
    <div class="container">
        <div class="container-left">
            <p>Add image</p>
            <div class="img-container">
                <button id="input-label" class="button-img" onclick="document.getElementById('img-input').click()"><i class="bi bi-plus" style="font-size: 10vw; color:#673AB7;"></i></button>
                <input type="file" id="img-input" accept=".jpg,.jpeg,.png" onchange="showPreview(event)">
                {{-- <img id="img"> --}}
                <div id="img"></div>
            </div>
        </div>
        <div class="container-right">
            <p>Add Product</p>
            <form action="/addProduct" method="POST" id="form" class="needs-validation" novalidate>
                @csrf

                <div class="product-name-container">
                    <input class="form-control @error('name') is-invalid @enderror" placeholder="Product Name" type="text" name="name" id="product-name" required value="{{ old('name') }}">
                    @error('name')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="category-container">
                    <select name="category_id" id="product-category" class="form-control @error('category_id') is-invalid @enderror" required>
                        <option value="" disabled selected>Category</option>
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

                <div class="stock-container">
                    <input class="form-control @error('stock') is-invalid @enderror" type="number" name="stock" id="product-stock" placeholder="Stock" required value="{{ old('stock') }}">
                    @error('stock')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror

                </div>

                <div class="d-flex container-price">
                    <div class="rp-container d-flex justify-content-center align-items-center z-1 position-absolute">
                        <p>Rp</p>
                    </div>
                    <div class="product-price-container">
                        <input class="form-control price @error('price') is-invalid @enderror" type="number" name="price" id="product-price" placeholder="Price" required value="{{ old('price') }}">
                        @error('price')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>

                <div class="d-flex container-price">
                    <div class="rp-container d-flex justify-content-center align-items-center z-1 position-absolute">
                        <p>Rp</p>
                    </div>
                    <div class="product-modal-container">
                        <input class="form-control prod-modal @error('modal') is-invalid @enderror" type="number" name="modal" id="product-modal" placeholder="Modal" required value="{{ old('modal') }}">
                        @error('modal')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>

                <textarea class="form-control @error('description') is-invalid @enderror" name="description" id="product-desc" placeholder="Product Description" required>{{ old('description') }}</textarea>
                @error('description')
                    <div class="invalid-feedback m-0">
                        {{ $message }}
                    </div>
                @enderror

                <div class="d-flex justify-content-center align-items-center">
                    <input type="submit" name="submit" value="Add Product"/>
                </div>

            </form>
        </div>
    </div>
@endsection

@section('js')
    <script type="text/javascript" src="{{URL::asset('assets/js/addproduct.js')}}"></script>
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
