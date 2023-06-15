@section('css')
    <link rel="stylesheet" href="/assets/css/events.css">
@endsection

@extends('layouts.main')
{{-- gimana cara back 1 directory --}}
@section('title', 'Event Detail')

@section('content')
    <div id="section-donate"></div>
    <div class="desc-container">
        <div class="pic">
            <div class="desc-img" style="background-image: url({{ asset('/assets/img/rtb.webp') }})"></div>
            <a class="donate" href="#section-donate">Donate now!</a>
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

    <div id="nav-cont" class="nav-cont nav nav-underline justify-content-center">
        <button class="nav-button carousel-control-prev nav-link nav-item active active2" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">Products</button>
        <button class="nav-button carousel-control-next nav-link nav-item" type="button" data-bs-target="#carouselExample" data-bs-slide="next">Statistics</button>
    </div>

    <hr class="nav-line">

    <div id="carouselExample" data-bs-spy="scroll" data-bs-target="#nav-cont" class="carousel" tabindex="0">
        <div class="slide">
            <div class="carousel-item">
                <section class="catalog-container" id="section1">
                    @foreach($products as $product)
                        @include('partials.productCart', ['product' => $product, 'event' => $event])
                    @endforeach

                    {{-- <span id="more">
                        <div class="catalog-container">
                            @for ( $i=0 ; $i<20 ; $i++)
                            <a href="" class="custom-card">
                                @include('partials.productCart')
                            </a>
                            @endfor
                        </div>
                    </span> --}}

                    <div class="more-products">
                        <div class="line1"></div>
                        <button class="more" id="myBtn">More Products</button>
                        <div class="line1"></div>
                    </div>

                </section>
            </div>

            <div class="carousel-item">
                <section class="stat-container"  id="section2">
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
                                        <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                                          Date Range
                                        </a>
                                        <?php
                                            $datePrint = $start->format('Y-m-d');
                                            $datePrint = new DateTime($datePrint);
                                        ?>

                                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                            @while($datePrint < $end)
                                                <?php
                                                    $temp = $datePrint->format("d M Y");
                                                    $datePrint->add(new DateInterval('P' . 7 . 'D'));
                                                    $datePrint = $datePrint->format('Y-m-d');
                                                    $datePrint = new DateTime($datePrint);
                                                ?>
                                                <li>
                                                    <input type="hidden" name="graph-date" id="graph-date" value="{{ $temp }}">
                                                    <button type="submit" class="dropdown-item" id="dropdown-item" href="#" value="{{ $temp }}">{{ $temp }} - {{ $datePrint->format("d M Y") }}</button>
                                                </li>
                                            @endwhile
                                        </ul>
                                    </div>
                                    <section class="catalog-container" id="section3">
                                        @include('chartResult');
                                    </section>
                                </div>
                                <div class="carousel-item1">
                                    <section class="catalog-container" id="section4">
                                        <canvas id="myChart" height="100px"></canvas>
                                    </section>
                                </div>
                            </div>
                        </div>
                    </div>

                </section>
            </div>
        </div>
    </div>

@endsection

@section('js')
    <script type="text/javascript" src="{{URL::asset('/assets/js/eventDetail.js')}}"></script>
    <script type="text/javascript">

        console.log('masuk sini');

        const ourData = @json($user_total);
        console.log(ourData);

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
                labels["Date"].push(x);
                //Jika ada item date yang == x, push value dari filtered data, selain itu
                let temp = ourData.filter(item => item.date === x);//
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
                                unit: 'day'
                            }
                        }
                    }
                }
            }]
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

    $(document).ready(function(){

        $('.dropdown-item').on('click', function(){
            var graphDate = $(this).attr('value');
            console.log(graphDate);

            const dateLabels1 = generateDateLabels(graphDate, labelCount);
            myChart.data.labels = dateLabels1["Date"];
            myChart.data.datasets[0].data = dateLabels1["Value"];
            console.log('masuk sini');
            // let id = @json($event->id);
            // var url = '/eventDetail/' + id.toString() + '/result';
            // var parameters = [];

            // parameters.push('graph-start=' + encodeURIComponent(graphDate));
            // url += '?' + parameters.join('&');
            // console.log(url);
            // $('#chart-result').load(url);
            myChart.update();

        });




    });

</script>


@endsection
