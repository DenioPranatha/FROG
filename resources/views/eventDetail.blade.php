@section('css')
    <link rel="stylesheet" href="assets/css/events.css">
@endsection

@extends('layouts.main')

@section('title', 'Profile')

@section('content')

    <div class="desc-container">
        <div class="pic">
            <img src="{{ asset('assets/img/rtb.webp') }}" class="desc-img" alt="">
            <a class="donate" href="#section1">Donate now!</a>
        </div>
        <div class="desc">
            <div class="desc-headline">
                <b>RTB Chinese New Year Jualan</b>
            </div>
            <div class="progress-container">
                <div class="date">April 14 2023</div>
                <div class="progress">
                    <div class="progress-bar" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <div class="date">April 28 2023</div>
            </div>
            <div class="desc-caption">
                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Id odit, aut aliquid sapiente tenetur sequi adipisci excepturi culpa maiores veniam deserunt praesentium voluptate suscipit, maxime hic! Totam impedit necessitatibus deserunt libero quisquam dolorem eius ullam accusamus nisi quia! Sed ab mollitia ex consequuntur consequatur amet dolore magni fugit, aperiam hic. Lorem, ipsum dolor sit amet consectetur adipisicing elit. Id odit, aut aliquid sapiente tenetur.
            </div>
            <div class="owner"><b>Penyelenggara:</b> Lorem Ipsum</div>
            <div class="destination"><b>Tujuan Penggalangan Dana:</b> Lorem Ipsum</div>
            <div class="category"><b>Kategori:</b> Lorem Ipsum</div>
        </div>
    </div>

    <div id="nav-cont" class="nav-cont nav nav-underline justify-content-center">
        <button class="nav-button carousel-control-prev nav-link nav-item active" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">Products</button>
        <button class="nav-button carousel-control-next nav-link nav-item" type="button" data-bs-target="#carouselExample" data-bs-slide="next">Statistics</button>
    </div>

    <hr class="nav-line">

    <div id="carouselExample" data-bs-spy="scroll" data-bs-target="#nav-cont" class="carousel" tabindex="0">
        <div class="slide">
            <div class="carousel-item">
                <section class="catalog-container" id="section1">
                    @for($i = 0; $i < 25; $i++)
                    <a href="" class="custom-card">
                        <div class="card1">
                            <img src="{{ asset('assets/img/rtb.webp') }}" class="card-img">
                            <div class="caption1">
                                <div><b>Basreng Pedas</b></div>
                                <a class="purple small">Event RTB 1</a>
                                <div class="purple">Rp. 1000</div>
                                <div class="small">Stock: 21</div>
                            </div>
                        </div>
                    </a>
                    @endfor

                    <div class="more-products">
                        <div class="line1"></div>
                        <button class="more">More Products</button>
                        <div class="line1"></div>
                    </div>

                </section>
            </div>

            <div class="carousel-item">
                <section class="stat-container"  id="section2">
                    <div class="stat-headline">Total Dana Terkumpul</div>
                    <div class="stat-headline purple">Rp. 100.000,00</div>
                    <br>
                    <div class="stat-subheadline">Rincian</div>
                    <div class="rincian-container">
                        <div class="rec">
                            <div class="stat-subheadline">Partisipan</div>
                            <div class="stat-subheadline purple">1000 Orang</div>
                        </div>
                        <div class="rec">
                            <div class="stat-subheadline">Modal</div>
                            <div class="stat-subheadline purple">Rp. 123.000,00 </div>
                        </div>
                        <div class="rec">
                            <div class="stat-subheadline">Total Penjualan</div>
                            <div class="stat-subheadline purple">Rp. 123.000,00</div>
                        </div>
                        <div class="rec">
                            <div class="stat-subheadline">Dana Tersalurkan</div>
                            <div class="stat-subheadline purple">Rp. 123.000,00</div>
                        </div>
                    </div>
                    <br>
                    <div class="stat-subheadline">Grafik Penjualan</div>

                    <div class="grafik-time">
                        <div id="nav-cont1" class="nav-cont1 nav nav-underline justify-content-center">
                            <button class="nav-button1 carousel-control-prev1 nav-link nav-item active active1" type="button" data-bs-target="#carouselExample1" data-bs-slide="prev">Harian</button>
                            <button class="nav-button1 carousel-control-next1 nav-link nav-item" type="button" data-bs-target="#carouselExample1" data-bs-slide="next">Bulanan</button>
                        </div>

                        <div id="carouselExample1" class="carousel1">
                            <div class="slide1">
                                <div class="carousel-item1">
                                    <section class="catalog-container" id="section3">
                                        <img src="{{ asset('assets/img/grafik.svg') }}" alt="">
                                    </section>
                                </div>
                                <div class="carousel-item1">
                                    <section class="catalog-container" id="section4">
                                        <img src="{{ asset('assets/img/rtb.webp') }}" alt="">
                                    </section>
                                </div>
                            </div>
                        </div>

                    </div>

                </section>
            </div>
        </div>
    </div>

    <div class="invisible">

    </div>

@endsection

@section('js')
    <script type="text/javascript" src="{{URL::asset('assets/js/eventDetail.js')}}"></script>
@endsection
