<div class="eventCartPage">
    <a href="/eventDetail/{{ $event->id }}" class="custom-card">
        <div class="card">
            @if(file_exists(public_path('assets/images/event/' . $event->image)))
                <div class="card-img" style="background-image: url({{ asset('/assets/images/event').'/'.$event->image}} )"></div>
            @else
                <div class="card-img" style="background-image: url({{ asset('/storage') . '/' . $event->image }} )"></div>
            @endif
            <div class="caption">
                <p>{{ $event->name }}</p>
            </div>
        </div>
    </a>
</div>
