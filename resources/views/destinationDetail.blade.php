@section('css')
    <link rel="stylesheet" href="assets/css/destinationDetail.css">
@endsection

@extends('layouts.main')

@section('title', 'Destination Detail')

@section('content')
<div class="padding">
    <div class="container d-flex flex-column justify-content-center align-items-center">
        <div class="destination-image" style="background-image: url({{ asset('/assets/img/PantiAsuhan.png') }})"></div>
        <div class="destination-name">
            Panti Asuhan Bhakti Kasih
        </div>
        <div class="destination-person d-flex flex-row align-items-center">
            <svg width="18" height="23" viewBox="0 0 21 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M14.7506 6.23077C14.7506 7.35283 14.3027 8.42895 13.5056 9.22237C12.7085 10.0158 11.6273 10.4615 10.5 10.4615C9.37268 10.4615 8.29153 10.0158 7.4944 9.22237C6.69726 8.42895 6.24943 7.35283 6.24943 6.23077C6.24943 5.1087 6.69726 4.03258 7.4944 3.23916C8.29153 2.44574 9.37268 2 10.5 2C11.6273 2 12.7085 2.44574 13.5056 3.23916C14.3027 4.03258 14.7506 5.1087 14.7506 6.23077ZM2 22.1588C2.03642 19.9388 2.94798 17.8221 4.53807 16.2651C6.12817 14.708 8.2694 13.8354 10.5 13.8354C12.7306 13.8354 14.8718 14.708 16.4619 16.2651C18.052 17.8221 18.9636 19.9388 19 22.1588C16.3334 23.3758 13.4336 24.0039 10.5 24C7.4668 24 4.58774 23.3411 2 22.1588Z" stroke="white" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
            <p><b>255 orang</b> penerima bantuan</p>
        </div>
        <div class="destination-location">
            <p>Bogor, Jawa Barat</p>
        </div>
        <div class="destination-desc">
            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a,</p>
        </div>
        <button class="d-flex flex-row align-items-center justify-content-center">
            <svg width="30" height="30" viewBox="0 0 39 39" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path opacity="0.1" fill-rule="evenodd" clip-rule="evenodd" d="M19.5 8.125C13.2178 8.125 8.125 13.2178 8.125 19.5C8.125 25.7823 13.2178 30.875 19.5 30.875C25.7823 30.875 30.875 25.7823 30.875 19.5C30.875 13.2178 25.7823 8.125 19.5 8.125ZM19.5 14.2188C16.5833 14.2188 14.2188 16.5833 14.2188 19.5C14.2188 22.4167 16.5833 24.7813 19.5 24.7813C22.4167 24.7813 24.7813 22.4167 24.7813 19.5C24.7813 16.5833 22.4167 14.2188 19.5 14.2188Z" fill="#522E93"/>
                <path d="M30.875 19.5C30.875 25.7823 25.7823 30.875 19.5 30.875C13.2178 30.875 8.125 25.7823 8.125 19.5C8.125 13.2178 13.2178 8.125 19.5 8.125C25.7823 8.125 30.875 13.2178 30.875 19.5Z" stroke="#522E93" stroke-width="2.5"/>
                <path d="M30.875 19.5H34.125" stroke="#522E93" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M4.875 19.5H8.125" stroke="#522E93" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M19.5 30.875V34.125" stroke="#522E93" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M19.5 4.875V8.125" stroke="#522E93" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M24.375 19.5C24.375 22.1925 22.1925 24.375 19.5 24.375C16.8075 24.375 14.625 22.1925 14.625 19.5C14.625 16.8075 16.8075 14.625 19.5 14.625C22.1925 14.625 24.375 16.8075 24.375 19.5Z" stroke="#522E93" stroke-width="2.5"/>
            </svg>
            Location
        </button>
    </div>
</div>
@endsection
