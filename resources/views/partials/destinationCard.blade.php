<a href="/destinationDetail/{{ $destination->id }}" class="kotak">
    <div class="container-card d-flex flex-row justify-content-center">
        <div class="card d-flex flex-row align-items-end" style="background-image: url({{ asset('/assets/images/destination').'/'.$destination->image}} )"></div>

        <div class="shadow d-flex align-items-end justify-content-center">
            <div class="text">
                <p class="head text-center">{{ $destination->name }}</p>
                <div class="bawah d-flex justify-content-center align-items-center">
                    <i class="bi bi-geo-alt"></i>
                    <p class="sub text-center">{{ $destination->location }}</p>
                </div>
            </div>
        </div>
    </div>
</a>
