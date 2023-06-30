<a href="/destinationDetailAdmin/{{ $destination->id }}">
    <div class="container-card d-flex flex-row">
        <div class="card d-flex flex-row align-items-end" style="background-image: url({{ asset('/assets/images/destination').'/'.$destination->image}} )"></div>

        <div class="shadow d-flex flex-row align-items-end">
            <div class="text">
                <p class="head">{{ $destination->name }}</p>
                <p class="sub">{{ $destination->location }}</p>
            </div>
            <div class="trash">
                <form action="/destinationDelete" method="post">
                    @csrf
                    <input type="hidden" name="id" value="{{ $destination->id }}">
                    <button type="submit">
                        <svg width="29" height="29" viewBox="0 0 29 29" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M17.625 13.1111V21.4444M11.375 13.1111V21.4444M5.125 7.55556V24.2222C5.125 24.9589 5.45424 25.6655 6.04029 26.1864C6.62634 26.7073 7.4212 27 8.25 27H20.75C21.5788 27 22.3737 26.7073 22.9597 26.1864C23.5458 25.6655 23.875 24.9589 23.875 24.2222V7.55556M2 7.55556H27M6.6875 7.55556L9.8125 2H19.1875L22.3125 7.55556" stroke="white" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </button>
                </form>
            </div>
        </div>
    </div>
</a>
