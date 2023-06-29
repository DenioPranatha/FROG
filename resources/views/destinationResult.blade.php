@if(count($destinations) != 0)

    <div class="container-all-card d-flex flex-wrap alig-items-left pt-2">
        @foreach($destinations as $destination)
            @include('partials.destinationCard', ['destination' => $destination])
        @endforeach
    </div>


@elseif(request('category-destination') && request('search-destination'))
<div class="not-found justify-content-center">Destination with keyword "{{ request('search-destination') }}" and category "{{ request('category-destination') }}" is not found</div>
@elseif(request('search-destination'))
<div class="not-found justify-content-center">Destination with keyword "{{ request('search-destination') }}" is not found</div>
@else
<div class="not-found justify-content-center">Destination with category "{{ request('category-destination') }}" is not found</div>
@endif

