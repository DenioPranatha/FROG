@if(count($destinations) != 0)

    @if($isAdmin == 0)
        <div class="container-all-card d-flex flex-wrap alig-items-left pt-2">
            @foreach($destinations as $destination)
                @include('partials.destinationCard', ['destination' => $destination])
            @endforeach
        </div>
    @else
        <div class="container-all-card d-flex flex-wrap alig-items-left">
            <a href="/createDestinationAdmin" class="add">
                <div class="card d-flex flex-column align-items-center justify-content-center">
                    <svg width="91" height="91" viewBox="0 0 91 91" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M45.5 0.40625C20.636 0.40625 0.40625 20.636 0.40625 45.5C0.40625 70.364 20.636 90.5938 45.5 90.5938C70.364 90.5938 90.5938 70.364 90.5938 45.5C90.5938 20.636 70.364 0.40625 45.5 0.40625ZM45.5 7.34375C66.6143 7.34375 83.6562 24.3857 83.6562 45.5C83.6562 66.6143 66.6143 83.6562 45.5 83.6562C24.3857 83.6562 7.34375 66.6143 7.34375 45.5C7.34375 24.3857 24.3857 7.34375 45.5 7.34375ZM42.0312 24.6875V42.0312H24.6875V48.9688H42.0312V66.3125H48.9688V48.9688H66.3125V42.0312H48.9688V24.6875H42.0312Z" fill="#522E93"/>
                    </svg>
                    <p>Add Destination</p>
                </div>
            </a>
            @foreach ($destinations as $destination)
                @include('partials.destinationCardAdmin', ['destination' => $destination])
            @endforeach
        </div>
    @endif
@elseif(1 == $isAdmin)
    <div class="container-all-card d-flex flex-wrap alig-items-left">
        <a href="/createDestinationAdmin" class="add">
            <div class="card d-flex flex-column align-items-center justify-content-center">
                <svg width="91" height="91" viewBox="0 0 91 91" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M45.5 0.40625C20.636 0.40625 0.40625 20.636 0.40625 45.5C0.40625 70.364 20.636 90.5938 45.5 90.5938C70.364 90.5938 90.5938 70.364 90.5938 45.5C90.5938 20.636 70.364 0.40625 45.5 0.40625ZM45.5 7.34375C66.6143 7.34375 83.6562 24.3857 83.6562 45.5C83.6562 66.6143 66.6143 83.6562 45.5 83.6562C24.3857 83.6562 7.34375 66.6143 7.34375 45.5C7.34375 24.3857 24.3857 7.34375 45.5 7.34375ZM42.0312 24.6875V42.0312H24.6875V48.9688H42.0312V66.3125H48.9688V48.9688H66.3125V42.0312H48.9688V24.6875H42.0312Z" fill="#522E93"/>
                </svg>
                <p>Add Destination</p>
            </div>
        </a>
    </div>
@elseif(request('category-destination') && request('search-destination'))
<div class="not-found justify-content-center">Destination with keyword "{{ request('search-destination') }}" and category "{{ request('category-destination') }}" is not found</div>
@elseif(request('search-destination'))
<div class="not-found justify-content-center">Destination with keyword "{{ request('search-destination') }}" is not found</div>
@else
<div class="not-found justify-content-center">Destination with category "{{ request('category-destination') }}" is not found</div>
@endif

