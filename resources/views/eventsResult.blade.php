@if(count($events) != 0)

    <div class="catalog-container">
        @foreach($events as $event)
            @include('partials.eventCart', ['event' => $event])
        @endforeach
    </div>

    {{-- buat variabel i (next batch) --}}
    <?php $i = $pg + 1; ?>

    @if ($pg != -1)
        <div class="more-products">
            <div class="line1"></div>
            {{-- masukkin next batch berapa ketika klik button --}}
            <button class="more" id="myBtn1" value={{ $i }}>More Events</button>
            <div class="line1"></div>
        </div>
    @else

    @endif

    <div class="finished-header">Finished Events</div>

    {{-- <div class="finished" data-aos="fade-up"> --}}
    <div class="catalog-container">
        @foreach($finisheds as $finished)
            @include('partials.eventCart', ['event' => $finished])
        @endforeach
    </div>
    {{-- </div> --}}
    <div class="gap"></div>
    <div class="gap"></div>

@elseif(request('category-event') && request('search-event'))
    <div class="not-found justify-content-center">Event with keyword "{{ request('search-event') }}" and category "{{ request('category-event') }}" is not found</div>
@elseif(request('search-event'))
    <div class="not-found justify-content-center">Event with keyword "{{ request('search-event') }}" is not found</div>
@else
    <div class="not-found justify-content-center">Event with category "{{ request('category-event') }}" is not found</div>
@endif

