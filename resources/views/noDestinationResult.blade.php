<div class="charityDestDiv">
    <div class="section-title2">
        Popular Destination
    </div>
    <section id="slider">
        <div class="container">
            <div class="slider">
                <div class="owl-carousel">
                    @foreach ($popDestinations as $destination)
                        <a href="/destinationDetail/{{ $destination->id }}">
                            <div class="slider-card">
                                <div class="kotakLuar d-flex justify-content-center align-items-center mb-4">
                                    <div class="destImg" style="background-image: url({{ asset('/storage').'/'.$destination->image}} )"></div>
                                </div>
                                <h5 class="mb-0 text-center charityText"><b>{{ $destination->name }}</b></h5>
                                <div class="charityLoc pt-1 d-flex justify-content-center align-items-center">
                                    <i class="bi bi-geo-alt"></i>
                                    <p class="text-center">{{ $destination->location }}</p>
                                </div>
                            </div>
                        </a>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
</div>
<br>
<div class="section-title3">
    Destination Near You
</div>
<br>
<br>
<div class="container-all-card d-flex flex-wrap alig-items-left pt-2">
    @foreach($destinations as $destination)
        @include('partials.destinationCard', ['destination' => $destination])
    @endforeach
</div>
