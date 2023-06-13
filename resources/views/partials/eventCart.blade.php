<div class="eventCartPage">
    <a href="/eventDetail/{{ $event->id }}" class="custom-card">
        <div class="card">
            <div class="card-img" style="background-image: url({{ asset('/assets/images/event').'/'.$event->image}} )"></div>
            <div class="caption">
                <p>{{ $event->name }}</p>
            </div>
        </div>
    </a>
</div>
