@section('css')
    <link rel="stylesheet" href="assets/css/myEvents.css">
@endsection

@extends('layouts.main')

@section('title', 'My Events')

@section('content')
    <div class="container">
        <h1 class="section-title">Your Ongoing Events</h1>

        <div class="card-container">
            @for ($i = 0; $i <2; $i++)

            <a href="myEventDetail" class="card-container">
                <div class="card">
                    <div class="card-image">
                        <div class="event-image" style="background-image: url({{ asset('assets/img/Event-image.png') }})"></div>
                    </div>
                    <div class="card-section-box d-flex align-items-center justify-content-end">
                        <div class="card-section-box-text d-flex align-items-center justify-content-center ">
                            <p>Your Ongoing Event</p>
                        </div>
                        <div class="card-section-box-icon d-flex align-items-center">
                            <a href="#">
                                <div class="card-section-box-icon1">
                                    {{-- <img src="assets/img/add-product 2.svg" alt=""> --}}
                                    <svg width="47" height="47" viewBox="0 0 47 47" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M9.79167 41.125C8.71459 41.125 7.79221 40.7412 7.02454 39.9735C6.25688 39.2058 5.8737 38.2841 5.875 37.2083V9.79167C5.875 8.71459 6.25884 7.79221 7.0265 7.02454C7.79417 6.25688 8.71589 5.8737 9.79167 5.875H37.2083C38.2854 5.875 39.2078 6.25884 39.9755 7.0265C40.7431 7.79417 41.1263 8.71589 41.125 9.79167V27.074C40.5375 26.7149 39.9174 26.4212 39.2646 26.1927C38.6118 25.9642 37.9264 25.7847 37.2083 25.6542V9.79167H9.79167V37.2083H23.5C23.5 37.8938 23.549 38.5629 23.6469 39.2156C23.7448 39.8684 23.908 40.5049 24.1365 41.125H9.79167ZM33.2917 45.0417V39.1667H27.4167V35.25H33.2917V29.375H37.2083V35.25H43.0833V39.1667H37.2083V45.0417H33.2917ZM15.6667 33.2917C16.2215 33.2917 16.687 33.1037 17.063 32.7277C17.439 32.3517 17.6263 31.8869 17.625 31.3333C17.625 30.7785 17.437 30.313 17.061 29.937C16.685 29.561 16.2202 29.3737 15.6667 29.375C15.1118 29.375 14.6464 29.563 14.2704 29.939C13.8944 30.315 13.707 30.7798 13.7083 31.3333C13.7083 31.8882 13.8963 32.3536 14.2723 32.7296C14.6483 33.1056 15.1131 33.293 15.6667 33.2917ZM15.6667 25.4583C16.2215 25.4583 16.687 25.2703 17.063 24.8943C17.439 24.5183 17.6263 24.0536 17.625 23.5C17.625 22.9451 17.437 22.4797 17.061 22.1037C16.685 21.7277 16.2202 21.5404 15.6667 21.5417C15.1118 21.5417 14.6464 21.7297 14.2704 22.1057C13.8944 22.4817 13.707 22.9464 13.7083 23.5C13.7083 24.0549 13.8963 24.5203 14.2723 24.8963C14.6483 25.2723 15.1131 25.4596 15.6667 25.4583ZM15.6667 17.625C16.2215 17.625 16.687 17.437 17.063 17.061C17.439 16.685 17.6263 16.2202 17.625 15.6667C17.625 15.1118 17.437 14.6464 17.061 14.2704C16.685 13.8944 16.2202 13.707 15.6667 13.7083C15.1118 13.7083 14.6464 13.8963 14.2704 14.2723C13.8944 14.6483 13.707 15.1131 13.7083 15.6667C13.7083 16.2215 13.8963 16.687 14.2723 17.063C14.6483 17.439 15.1131 17.6263 15.6667 17.625ZM21.5417 25.4583H33.2917V21.5417H21.5417V25.4583ZM21.5417 17.625H33.2917V13.7083H21.5417V17.625ZM21.5417 33.2917H24.1854C24.4465 32.541 24.7729 31.8392 25.1646 31.1865C25.5563 30.5337 26.0132 29.9299 26.5354 29.375H21.5417V33.2917Z" fill="#522E93"/>
                                    </svg>

                                </div>
                            </a>
                            <a href="#">
                                <div class="card-section-box-icon2">
                                    {{-- <img src="assets/img/pencil-square.svg" alt=""> --}}
                                    <svg width="44" height="44" viewBox="0 0 44 44" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M42.6305 5.33511C42.8874 5.59284 43.0317 5.94193 43.0317 6.30585C43.0317 6.66978 42.8874 7.01887 42.6305 7.2766L39.7622 10.1476L34.2622 4.64761L37.1305 1.7766C37.3883 1.51883 37.738 1.37402 38.1026 1.37402C38.4672 1.37402 38.8168 1.51883 39.0747 1.7766L42.6305 5.33236V5.33511ZM37.818 12.0891L32.318 6.5891L13.5822 25.3276C13.4308 25.4789 13.3169 25.6635 13.2495 25.8666L11.0357 32.5051C10.9956 32.6261 10.9899 32.7559 11.0192 32.88C11.0486 33.0041 11.1119 33.1175 11.2021 33.2077C11.2923 33.2979 11.4057 33.3612 11.5298 33.3906C11.6539 33.42 11.7837 33.4142 11.9047 33.3741L18.5432 31.1604C18.7461 31.0937 18.9306 30.9807 19.0822 30.8304L37.818 12.0891Z" fill="#522E93"/>
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M2.75 37.125C2.75 38.219 3.1846 39.2682 3.95818 40.0418C4.73177 40.8154 5.78098 41.25 6.875 41.25H37.125C38.219 41.25 39.2682 40.8154 40.0418 40.0418C40.8154 39.2682 41.25 38.219 41.25 37.125V20.625C41.25 20.2603 41.1051 19.9106 40.8473 19.6527C40.5894 19.3949 40.2397 19.25 39.875 19.25C39.5103 19.25 39.1606 19.3949 38.9027 19.6527C38.6449 19.9106 38.5 20.2603 38.5 20.625V37.125C38.5 37.4897 38.3551 37.8394 38.0973 38.0973C37.8394 38.3551 37.4897 38.5 37.125 38.5H6.875C6.51033 38.5 6.16059 38.3551 5.90273 38.0973C5.64487 37.8394 5.5 37.4897 5.5 37.125V6.875C5.5 6.51033 5.64487 6.16059 5.90273 5.90273C6.16059 5.64487 6.51033 5.5 6.875 5.5H24.75C25.1147 5.5 25.4644 5.35513 25.7223 5.09727C25.9801 4.83941 26.125 4.48967 26.125 4.125C26.125 3.76033 25.9801 3.41059 25.7223 3.15273C25.4644 2.89487 25.1147 2.75 24.75 2.75H6.875C5.78098 2.75 4.73177 3.1846 3.95818 3.95818C3.1846 4.73177 2.75 5.78098 2.75 6.875V37.125Z" fill="#522E93"/>
                                    </svg>

                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </a>
            @endfor
            <a href="myEventDetail" class="card-container">
                <div class="card-add">
                    <div class="card-section-box-add">
                        <a href="myEventDetail">
                            <div class="card-section-box-add-img">
                                {{-- <img src="assets/img/add-button.svg" alt="" width="100px" height="100px"> --}}
                                <svg width="84" height="71" viewBox="0 0 84 71" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M31.9773 3.74512C14.3168 3.74512 0 17.708 0 34.9317C0 52.1565 14.3168 66.1184 31.9773 66.1184C49.6387 66.1184 63.9545 52.1565 63.9545 34.9317C63.9545 17.708 49.6387 3.74512 31.9773 3.74512ZM31.9773 62.2814C16.5492 62.2814 3.99716 49.9783 3.99716 34.9316C3.99716 19.885 16.5492 7.64332 31.9773 7.64332C47.4053 7.64332 59.9574 19.8851 59.9574 34.9316C59.9574 49.9781 47.4053 62.2814 31.9773 62.2814ZM45.9673 32.9826H33.9759V21.2876C33.9759 20.2117 33.0805 19.3384 31.9773 19.3384C30.8741 19.3384 29.9787 20.2117 29.9787 21.2876V32.9826H17.9872C16.884 32.9826 15.9886 33.8558 15.9886 34.9317C15.9886 36.0077 16.884 36.8809 17.9872 36.8809H29.9787V48.5759C29.9787 49.6518 30.8741 50.5251 31.9773 50.5251C33.0805 50.5251 33.9759 49.6518 33.9759 48.5759V36.8809H45.9673C47.0705 36.8809 47.9659 36.0077 47.9659 34.9317C47.9659 33.8558 47.0705 32.9826 45.9673 32.9826Z" fill="#522E93"/>
                                </svg>

                            </div>
                        </a>
                    </div>
                </div>
            </a>
        </div>

        <h1 class="section-title-finished">Your Waiting Approval Events</h1>
        <div class="card-container">
            @for ($i = 0; $i < 2; $i++)
            <a href="myEventDetail" class="card-container">
                <div class="card">
                    <div class="card-image">
                        <div class="event-image" style="background-image: url({{ asset('assets/img/Event-image.png') }})"></div>
                    </div>
                    <div class="card-section-box-finished">
                        <div class="card-section-box-text-finished">
                            <p>Your Finished Event</p>
                        </div>
                    </div>
                </div>
            </a>
            @endfor
        </div>

        <h1 class="section-title-finished">Your Finished Events</h1>
        <div class="card-container">
            @for ($i = 0; $i < 2; $i++)
            <a href="myEventDetail" class="card-container">
                <div class="card">
                    <div class="card-image">
                        <div class="event-image" style="background-image: url({{ asset('assets/img/Event-image.png') }})"></div>
                    </div>
                    <div class="card-section-box-finished">
                        <div class="card-section-box-text-finished">
                            <p>Your Finished Event</p>
                        </div>
                    </div>
                </div>
            </a>
            @endfor
        </div>

        <h1 class="section-title-finished">Your Rejected Events</h1>
        <div class="card-container">
            @for ($i = 0; $i < 2; $i++)
            <a href="myEventDetail" class="card-container">
                <div class="card">
                    <div class="card-image">
                        <div class="event-image" style="background-image: url({{ asset('assets/img/Event-image.png') }})"></div>
                    </div>
                    <div class="card-section-box-finished">
                        <div class="card-section-box-text-finished">
                            <p>Your Finished Event</p>
                        </div>
                    </div>
                </div>
            </a>
            @endfor
        </div>
    </div>
@endsection

