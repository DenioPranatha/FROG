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
                <img id="img">
            </div>
        </div>
        <div class="container-right">
            <p>Add Product</p>
            <form id="form" class="needs-validation" novalidate>
                <div class="product-name-container">
                    <input class="form-control" placeholder="Product Name" type="text" name="product-name" id="product-name" minlength="3" maxlength="15" required />
                    <div id="invalid-feedback1" class="invalid-feedback">
                        Please Input your Product Name
                    </div>
                </div>
                <div class="category-container">
                    <select name="product-category" id="product-category" class="form-control" required>
                        <option value="" disabled selected>Category</option>
                        <option value="makanan-ringan">Makanan Ringan</option>
                        <option value="minuman">Minuman</option>
                        <option value="baju">Baju</option>
                        <option value="aksesoris">Aksesoris</option>
                    </select>
                    <div class="invalid-feedback">
                        Please Select your Category
                    </div>
                </div>
                <div class="stock-container">
                    <input class="form-control" type="number" name="product-stock" id="product-stock" placeholder="Stock" min="0" required>
                    <div id="invalid-feedback1" class="invalid-feedback">
                        Please Input your Stock
                    </div>
                </div>
                <div class="d-flex container-price">
                    <div class="rp-container d-flex justify-content-center align-items-center z-1 position-absolute">
                        <p>Rp</p>
                    </div>
                    <div class="product-price-container">
                        <input class="form-control price" type="number" name="product-price" id="product-price" placeholder="Price" required>
                        <div class="invalid-feedback">
                            Please Input your Price
                        </div>
                    </div>
                </div>
                <div class="d-flex container-price">
                    <div class="rp-container d-flex justify-content-center align-items-center z-1 position-absolute">
                        <p>Rp</p>
                    </div>
                    <div class="product-modal-container">
                        <input class="form-control prod-modal" type="number" name="product-modal" id="product-modal" placeholder="Modal" required>
                        <div class="invalid-feedback">
                            Please Input your Modal
                        </div>
                    </div>
                </div>
                <textarea class="form-control" name="product-desc" id="product-desc" placeholder="Product Description" maxlength="450" required ></textarea>
                <div class="invalid-feedback desc-invalid">
                    Please Input your Description
                </div>
                <div class="d-flex justify-content-center align-items-center">
                    <input type="submit" name="submit" value="Add Product"/>
                </div>
            </form>
        </div>
    </div>
@endsection

@section('js')
    <script type="text/javascript" src="{{URL::asset('assets/js/addproduct.js')}}"></script>
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
