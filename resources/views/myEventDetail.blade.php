@section('css')
    <link rel="stylesheet" href="assets/css/myEventDetail.css">
@endsection

@extends('layouts.main')

@section('title', 'Event Detail')

@section('content')

    {{-- Content Main --}}
    <div id="main-content" class="container-maincontent">
        <div class="desc-container">
            <div class="pic">
                <div class="desc-img" style="background-image: url({{ asset('/assets/images/event').'/'.$event->image}} )"></div>
                <button id="change-view-button" class="donate" href="#section1">Edit Event</button>
            </div>
            <div class="desc">
                <?php
                    $passed = $start->diff($rn);
                    $passed = $passed->days;
                    $range = $start->diff($end);
                    $range = $range->days;
                    $per = 100*$passed/$range;
                ?>
                <div class="desc-headline">
                    <b>{{ $event->name }}</b>
                </div>
                <div class="purple">
                    Day {{ $passed }}
                </div>
                <div class="progress-container">
                    <div class="date">0</div>
                    <div class="progress">
                        <div class="progress-bar" role="progressbar" style="width: {{ $per }}%" aria-valuenow="{{ $per }}" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <div class="date">{{ $range }}</div>
                </div>
                <div class="desc-caption">
                    {{ $event->description }}
                </div>
                <div><b>Created By:</b> {{ $event->user->username }}</div>
                <div><b>Event Duration:</b> {{ $start->format("d M Y") }} - {{ $end->format("d M Y")}}</div>
                <div><b>Charity Destination:</b> {{ $event->destination->name }}</div>
                <div><b>Category:</b> {{ $event->destination->category->name }}</div>
            </div>
            </div>
        </div>
    </div>

    {{-- Edit content --}}
    <div id="edit-content" class="container-editcontent">

        <form action="">
            <div class="desc-container">
                <div class="pic">
                    <div class="edit-pic d-flex flex-row">
                        <div class="desc-img" style="background-image: url({{ asset('assets/img/rtb.webp') }})"></div>
                        <div class="edit-photo d-flex justify-content-center align-items-center">
                            <label for="file" style="cursor: pointer"><i class="bi bi-camera"></i></label>
                            <input type="file" accept=".jpg,.jpeg,.png" id="file" style="display:none; visibility:none;">
                        </div>
                    </div>
                    <button id="change-view-button-edit" class="donate" href="#section1">Save Changes</button>
                </div>
                <div class="desc">
                    <div class="desc-headline">
                        <textarea id="edit-title" placeholder="Input Your New Title" class="edit-title rounded"></textarea>
                        {{-- <b>RTB Chinese New Year Jualan</b> --}}
                    </div>
                    <div class="purple">
                        Day 15

        <form action="/myEventDetail/edit" method="POST">
            @csrf
            <div class="desc-container">
                <div class="pic">
                    <div class="desc-img" style="background-image: url({{ asset('/assets/images/event').'/'.$event->image}} )"></div>
                    <button type=submit id="change-view-button-edit" class="donate" href="#section1">Save Changes</button>
                </div>
                <div class="desc">
                    <div class="desc-headline">
                        <textarea name="new-name" rows="1" id="edit-title" placeholder="Input Your New Title" class="edit-title">{{ $event->name }}</textarea>
                    </div>
                    <div class="purple">
                        Day {{ $passed }}

                    </div>
                    <div class="progress-container">
                        <div class="date">0</div>
                        <div class="progress">

                            <div class="progress-bar" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <div class="date">30</div>
                    </div>
                    <div class="desc-caption">
                        <textarea id="edit-desc" placeholder="Input Your New Description" class="edit-desc rounded" style="height:10vw;"></textarea>
                        {{-- Lorem, ipsum dolor sit amet consectetur adipisicing elit. Id odit, aut aliquid sapiente tenetur sequi adipisci excepturi culpa maiores veniam deserunt praesentium voluptate suscipit, maxime hic! Totam impedit necessitatibus deserunt libero quisquam dolorem eius ullam accusamus nisi quia! Sed ab mollitia ex consequuntur consequatur amet dolore magni fugit, aperiam hic. Lorem, ipsum dolor sit amet consectetur adipisicing elit. Id odit, aut aliquid sapiente tenetur. --}}
                    </div>
                    <div class="desc-point"><b>Created By:</b> Lorem Ipsum</div>
                    <div class="desc-point"><b>Event Duration:</b> Lorem Ipsum - Lorem Ipsum</div>
                    <div class="desc-point"><b>Charity Destination:</b> Lorem Ipsum</div>
                    <div class="desc-point"><b>Category:</b> Lorem Ipsum</div>

                            <div class="progress-bar" role="progressbar" style="width: {{ $per }}%" aria-valuenow="{{ $per }}" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <div class="date">{{ $range }}</div>
                    </div>
                    <div class="desc-caption">
                        <textarea type="text" name="new-caption" id="edit-desc" placeholder="Input Your New Description" class="edit-desc">{{ $event->description }}</textarea>
                    </div>
                    <div><b>Created By:</b> {{ $event->user->username }}</div>
                    <div><b>Event Duration:</b> {{ $start->format("d M Y") }} - {{ $end->format("d M Y")}}</div>
                    <div><b>Charity Destination:</b> {{ $event->destination->name }}</div>
                    <div><b>Category:</b> {{ $event->destination->category->name }}</div>

                </div>
            </div>
        </form>
    </div>

    <div id="nav-cont" class="nav-cont nav nav-underline justify-content-center">
        <button class="nav-button carousel-control-prev nav-link nav-item active active2" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">Products</button>
        <button class="nav-button carousel-control-next nav-link nav-item" type="button" data-bs-target="#carouselExample" data-bs-slide="next">Statistics</button>
    </div>

    <hr class="nav-line">

    <div id="carouselExample" data-bs-spy="scroll" data-bs-target="#nav-cont" class="carousel" tabindex="0">
        <div class="slide">
            <div class="carousel-item">
                <section class="catalog-container" id="section1">
                    {{-- <a href="#" class="add-product">

                    </a> --}}
                    {{-- @for($i = 0; $i < 16; $i++)
                        @if ($i == 0) --}}
                            {{-- <a href="#" class="custom-card"> --}}
                                {{-- <div class="productCartPage">
                                    <a href="addProduct" class="custom-card">
                                        <div class="card">
                                            <div class="add-icon">
                                               <div class="add-img" style="background-image: url({{ asset('assets/img/add-button.svg') }})" ></div> <img class="add-img" src="assets/img/add-button.svg" alt="" style="width: 100px; height: 100px;">
                                            </div>
                                            <div class="caption-add">
                                                <p class="namaProduk">Add Product</p>
                                            </div>
                                        </div>
                                    </a>
                                </div> --}}
                            {{-- </a> --}}
                        {{-- @else
                            <a href="" class="custom-card">
                                @include('partials.productCart')
                            </a>
                        @endif
                    @endfor --}}

                    <div class="productCartPage">
                        <a href="addProduct" class="custom-card">
                            <div class="card">
                                <div class="add-icon">
                                   <div class="add-img" style="background-image: url({{ asset('assets/img/add-button.svg') }})" ></div> <img class="add-img" src="assets/img/add-button.svg" alt="" style="width: 100px; height: 100px;">
                                </div>
                                <div class="caption-add">
                                    <p class="namaProduk">Add Product</p>
                                </div>
                            </div>
                        </a>
                    </div>
                    @foreach ($products as $product)
                        <a href="" class="custom-card">
                            @include('partials.productCart', ['product' => $product])
                        </a>
                    @endforeach

                    <div class="more-products">
                        <div class="line1"></div>
                        <button class="more">More Products</button>
                        <div class="line1"></div>
                    </div>

                </section>
            </div>

            <div class="carousel-item">
                <section class="stat-container" id="section2">
                    <div class="stat-headline">Funds Collected</div>
                    <div class="stat-headline purple">Rp. {{ number_format(  $total->sum('total') - $total->sum('modal') , 0 , ' ' , ' ' ) }}</div>
                    <br>
                    <div class="stat-subheadline">Detail</div>
                    <div class="rincian-container">
                        <div class="rec">
                            <div class="stat-subheadline">Participants</div>
                            <div class="stat-subheadline purple">{{ $user_count->unique('user_id')->count() }} Person</div>
                        </div>
                        <div class="rec">
                            <div class="stat-subheadline">Modal</div>
                            <div class="stat-subheadline purple">Rp. {{ number_format( $total->sum('modal') , 0 , ' ' , ' ' ) }} </div>
                        </div>
                        <div class="rec">
                            <div class="stat-subheadline">Total Income</div>
                            <div class="stat-subheadline purple">Rp. {{ number_format( $total->sum('total') , 0 , ' ' , ' ' ) }}</div>
                        </div>
                        <div class="rec">
                            <div class="stat-subheadline">Best Seller</div>
                            <div class="stat-subheadline purple">{{ ($top ? "-" : $top->name) }}</div>
                        </div>
                    </div>
                    <br>
                    <div class="stat-subheadline">Income Graph</div>

                    <div class="grafik-time">
                        <div id="nav-cont1" class="nav-cont1 nav nav-underline justify-content-center">
                            <button class="nav-button1 carousel-control-prev1 nav-link nav-item active active1" type="button" data-bs-target="#carouselExample1" data-bs-slide="prev">Daily</button>
                            <button class="nav-button1 carousel-control-next1 nav-link nav-item" type="button" data-bs-target="#carouselExample1" data-bs-slide="next">Weekly</button>
                        </div>

                        <div id="carouselExample1" class="carousel1">
                            <div class="slide1">
                                <div class="carousel-item1">
                                    <div class="dropdown">
                                        <a class="btn purple-but dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                                          Date Range
                                        </a>
                                        <?php
                                            $datePrint = $start->format('Y-m-d');
                                            $datePrint = new DateTime($datePrint);
                                            $weekCount = 0;
                                        ?>

                                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                            @while($datePrint < $end)
                                                <?php
                                                    $temp = $datePrint->format("d M Y");
                                                    $temp1 = $datePrint->format("Y-m-d");
                                                    $datePrint->add(new DateInterval('P' . 6 . 'D'));
                                                    $datePrint = $datePrint->format('Y-m-d');
                                                    $datePrint = new DateTime($datePrint);
                                                ?>
                                                <li>
                                                    <input type="hidden" name="graph-date" id="graph-date" value="{{ $temp }}">
                                                    <button type="submit" class="dropdown-item" id="dropdown-item" href="#" value="{{ $temp1 }}">{{ $temp }} - {{ $datePrint->format("d M Y") }}</button>
                                                </li>

                                                <?php
                                                    $datePrint->add(new DateInterval('P' . 1 . 'D'));
                                                    $weekCount = $weekCount+1;
                                                ?>
                                            @endwhile
                                        </ul>
                                    </div>
                                    <section class="catalog-container" id="section3">
                                        @include('chartResult')
                                    </section>
                                </div>
                                <div class="carousel-item1">
                                    <div class="btn purple-but" href="#">
                                        Weeks of {{ $start->format("d M Y") }} - {{ $end->format("d M Y")}}
                                    </div>

                                    <section class="catalog-container" id="section4">
                                        <div class="chart-result">
                                            <canvas id="myChart1"></canvas>
                                        </div>
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

    <script>
    var button = document.querySelector("#change-view-button");

    button.addEventListener("click", function() {
        var mainPage = document.querySelector("#main-content");
        var subPage = document.querySelector("#edit-content");

        if (mainPage.style.display !== "none") {
            mainPage.style.display = "none";
            subPage.style.display = "block";
        }
        else{
            mainPage.style.display = "block";
            subPage.style.display = "none";
        }
    });

    var buttonedit = document.querySelector("#change-view-button-edit");

    buttonedit.addEventListener("click", function() {
        var mainPage2 = document.querySelector("#main-content");
        var subPage2 = document.querySelector("#edit-content");

        if (subPage2.style.display !== "none") {
            subPage2.style.display = "none";
            mainPage2.style.display = "block";
        }
        else{
            subPage2.style.display = "block";
            mainPage2.style.display = "none";
        }
    });
    </script>


@endsection

@section('js')
    <script type="text/javascript" src="{{URL::asset('assets/js/myeventdetail.js')}}"></script>
@endsection
