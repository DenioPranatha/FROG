<a href="/myEventDetail/{{ $myEvent->id }}/0" class="card-container">
    <div class="card">
        <div class="card-image">
        @if(file_exists(public_path('assets/images/event/' . $myEvent->image)))
            <div class="event-image" style="background-image: url({{ asset('/assets/images/event').'/'.$myEvent->image}} )"></div>
        @else
            <div class="event-image" style="background-image: url({{ asset('/storage') . '/' . $myEvent->image }} )"></div>
        @endif
        </div>
        <div class="card-section-box-finished">
            <div class="card-section-box-text-finished">
                <p>{{ $myEvent->name }}</p>
            </div>
        </div>
    </div>
</a>

