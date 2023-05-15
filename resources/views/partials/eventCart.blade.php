<div class="eventCartPage">
    <a href="/eventDetail/{{ $event->id }}" class="custom-card">
        <div class="card">
            <div class="card-img" style="background-image: url({{ asset('/assets/img/gelang.png') }})"></div>
            {{-- <div class="card-img" style="background-image: url({{ asset('assets/img/{{ $event->image }}') }})"></div> --}}
            <div class="caption">
                <p>{{ $event->name }}</p>
                {{-- <p>{{ $event->name }}</p> --}}
                {{-- <p>{{ $tes['nama'] }}</p> --}}
            </div>
        </div>
    </a>
</div>
