@section('css')
    <link rel="stylesheet" href="/assets/css/myEventDetail.css">
@endsection

@extends('layouts.main')

@section('title', 'Event Detail')

@section('content')

    {{-- Content Main --}}
    <div id="main-content" class="container-maincontent" style="display: {{ $isEdit == 0 ? 'block' : 'none' }}">
        <div class="desc-container">
            <div class="pic">
                @if(file_exists(public_path('assets/images/event/' . $event->image)))
                    <div class="desc-img" style="background-image: url({{ asset('/assets/images/event').'/'.$event->image}} )"></div>
                @else
                    <div class="desc-img" style="background-image: url({{ asset('/storage') . '/' . $event->image }} )"></div>
                @endif
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
    <div id="edit-content" class="container-editcontent" style="display: {{ $isEdit == 1 ? 'block' : 'none' }}">

        <form action="/myEventDetail/{{ $event->id }}/edit" method="POST">
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
                    <div class="productsDiv">
                        @include('productsResult')
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

                    <div class="purchase-history">
                        <div class="purchase-history-headline">
                            {{-- <div class="purchasehistory-subheadline">Purchase History</div>
                            <div class="see-all">
                                <a href="allHistory">
                                    See All
                                </a>
                            </div> --}}
                        </div>
                        <div class="card-container d-flex flex-wrap">
                            {{-- @foreach ($histories as $history)
                                @include('partials.historyCard', ['history' => $history])
                            @endforeach --}}
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
    <script type="text/javascript">
    const ourData = @json($user_total);

//fungsi untuk masukin tanggal dan hasil di masing masing tanggal tsb
function generateDateLabels(startDate, count) {
    var labels = [];
    labels["Date"] = [];
    labels["Value"] = [];

    //buat startdate
    const currentDate = new Date(startDate);

    for (let i = 0; i < count; i++) {
        //masukkin start date ke format ISO
        const x = currentDate.toISOString().split('T')[0];
        //masukin ISO date ke label
        // labels["Date"].push(currentDate);
        const formattedDate = currentDate.toLocaleDateString('en-US', {
            month: 'short',
            day: 'numeric',
        });
        labels["Date"].push(formattedDate);
        //Jika ada item date yang == x, push value dari filtered data, selain itu
        let temp = ourData.filter(item => item.date === x);
        if(Object.keys(temp).length){
            //If, ada item date yang == x, masukin item total ke filtered data
            const filteredData = temp.map(item => item.total);
            labels["Value"].push(filteredData);
        }else{
            labels["Value"].push(0);
        }
                //++ di date
                currentDate.setDate(currentDate.getDate() + 1);
            }
            return labels;
        }

        const labelCount = 7; //Number of date labels to generate
        const dateLabels = generateDateLabels(@json($start->format("Y-m-d")), labelCount);
        // console.log(@json($start->format("Y-m-d")));
        // var dte =  @json($user_total->pluck('date')->toArray());
        // var total =  @json($user_total->pluck('total')->toArray());
        //buat graph

        const data = {
            labels: dateLabels["Date"],
            datasets: [{
                label: 'Daily Sale',
                backgroundColor: 'rgb(82, 46, 147)',
                borderColor: 'rgb(255, 255, 255)',
                data: dateLabels["Value"],
                options: {
                    scales: {
                        x: {
                            type: 'time',
                            time: {
                                unit: 'day',
                                displayFormats: {
                                    day: 'MMM D',
                                },
                            },
                        },
                    },
                },
            }],
        };

        const config = {
            type: 'bar',
            data: data,
            options: {}
        };

        const myChart = new Chart(
            document.getElementById('myChart'),
            config
            );

        //fungsi untuk masukin tanggal dan hasil di masing masing tanggal tsb
        function generateWeekLabels(startDate) {
            var labels1 = [];
            labels1["Week"] = [];
            labels1["Value"] = [];
            var currentDate = new Date(startDate);
            var cnt = @json($weekCount);
            cnt = parseInt(cnt);

            for (let i = 1; i <= cnt; i++) {
                //masukkin nama week
                const y = "Week " + i.toString();
                console.log(y);
                //masukin week ke label
                labels1["Week"].push(y);

                var res = 0;

                for(let j = 1; j<=7; j++){
                    const x = currentDate.toISOString().split('T')[0];
                    let temp = ourData.filter(item => item.date === x);//
                    if(Object.keys(temp).length){
                        //If, ada item date yang == x, masukin item total ke filtered data
                        const filteredData = temp.map(item => item.total);
                        res = res + parseInt(filteredData);
                    }
                    //++ di date
                    currentDate.setDate(currentDate.getDate() + 1);
                }

                labels1["Value"].push(res);

            }
            return labels1;
        }

            const weekLabels = generateWeekLabels(@json($start->format("Y-m-d")));

            const data1 = {
                labels: weekLabels["Week"],
                datasets: [{
                    label: 'Weekly Sale',
                    backgroundColor: 'rgb(82, 46, 147)',
                    borderColor: 'rgb(255, 255, 255)',
                    data: weekLabels["Value"],
                    options: {
                        scales: {
                                x: {
                                    type: 'time',
                                    time: {
                                            unit: 'day'
                                        }
                                    }
                                }
                            }
                        }]
                    };

        const config1 = {
            type: 'bar',
            data: data1,
            options: {}
        };

        const myChart1 = new Chart(
            document.getElementById('myChart1'),
            config1
        );
        console.log("halo1");

    $(document).ready(function(){
        $('.dropdown-item').on('click', function(){
            var graphDate = $(this).attr('value');
            console.log(graphDate);
            const dateLabels1 = generateDateLabels(graphDate, labelCount);
            myChart.data.labels = dateLabels1["Date"];
            myChart.data.datasets[0].data = dateLabels1["Value"];
            myChart.update();
        });
    });

    $(document).on('click', '#myBtn1', function(){
            //input berapa batch see more yg harus keload di kondisi sekarang
            var lim = $('#myBtn1').val();
            $(this).fadeOut(100);
            var eventId = @json($event->id);
            var url = '/myEventDetail/' + eventId + '/0/result';
            var parameters = [];
            if(lim){
                parameters.push('pg=' + encodeURIComponent(lim));
            }
            url += '?' + parameters.join('&');

            //load secara live, tapi yang diload satu container aja, yaitu result container
            //jadi hasil livesearch itu intinya harus ada dalam 1 container, bukan semua page nya yang berubah
            //cari di eventsResult.blade.php
            console.log(url);
            $('.productsDiv').load(url);

        });
    </script>
@endsection
