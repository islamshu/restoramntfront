<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>{{ $data->website_title }}</title>
    <link rel="stylesheet" href="{{ asset('waiting-list/front/style.css') }}" />
    {{-- <link rel="stylesheet" href="{{ asset('front/style.css') }}" /> --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.9.3/css/bulma.min.css">

    <script src="https://cdn.jsdelivr.net/npm/bulma-modal-fx/dist/js/modal-fx.min.js"></script>
    <!-- CSS -->

</head>
<style>
    .circle {
        display: flex;
        justify-content: center;
        align-items: center;
        width: 34%;
        height: 120px;
        border-radius: 50%;
        background-color: black;
        color: #ffffff;
        font-size: 60px;
        font-weight: bold;
        margin-left: 35%;
        text-align: center;
    }

    .my-button {
        display: inline-block;
        padding: 10px 20px;
        background-color: #121913;
        color: #ffffff;
        border: none;
        text-align: center;
        text-decoration: none;
        font-size: 16px;
        cursor: pointer;
        border-radius: 4px;
    }

    .my-button:hover {
        background-color: #45a049;
    }

    .my-button:focus {
        outline: none;
    }
</style>

<body>
    <main>

        <section class="reservations" style="    background-image: url({{ $data->background }});">

            <div class="header">
                <div class="logo">
                    <img src="{{ $data->logo }}" />

                </div>
            </div>
            <div class="container">
                <div class="content-box responsive_box">
                    <h2 class="title">{{ $data->first_welcom_content }}</h2>
                    <div class="sub_title">
                        <h3>{!! $data->secand_welcom_content !!}</h3>

                    </div>
                    <div>
                        <a href="{{ route('send_form') }}" class="btn">waiting list</a>
                        <a href="{{ $data->menu_url }}" class="btn"> Digital Menu</a>
                    </div>

                    <div class="social_icons">
                        @if ($data->instagram != null)
                            <div class="icon_wrapper">
                                <a href="{{ $data->instagram }}">
                                    <span class="icon">

                                        <svg data-bbox="33 33 133.333 133.325" viewBox="0 0 200 200" height="200"
                                            width="200" xmlns="http://www.w3.org/2000/svg" data-type="shape">
                                            <g>
                                                <path
                                                    d="M135.258 56.075c4.409 0 8 3.583 8 8s-3.591 8-8 8c-4.416 0-8.008-3.583-8.008-8s3.592-8 8.008-8ZM99.667 77.442c-12.275 0-22.217 9.95-22.217 22.216 0 12.275 9.942 22.225 22.217 22.225 12.275 0 22.225-9.95 22.225-22.225 0-12.266-9.95-22.216-22.225-22.216Zm0-12.009c18.908 0 34.233 15.317 34.233 34.225 0 18.917-15.325 34.242-34.233 34.242-18.909 0-34.234-15.325-34.234-34.242 0-18.908 15.325-34.225 34.234-34.225Zm5.975-20.425h-11.95c-7.692.017-11.542.05-14.817.142l-1.475.05c-1.467.05-2.917.117-4.675.2-6.492.292-10.025 1.375-12.375 2.292-3.108 1.208-5.333 2.658-7.667 4.983-2.333 2.342-3.775 4.558-4.991 7.667-.909 2.35-1.992 5.883-2.292 12.383-.083 1.75-.142 3.208-.2 4.675l-.05 1.475c-.083 3.275-.125 7.117-.133 14.808v11.959c.008 7.691.05 11.541.133 14.808l.05 1.483c.058 1.459.117 2.909.2 4.667.3 6.5 1.383 10.033 2.292 12.383 1.216 3.109 2.666 5.334 4.991 7.667 2.334 2.325 4.559 3.775 7.667 4.983 2.35.917 5.883 2 12.375 2.3 1.467.059 2.717.117 3.942.167l1.475.05c3.441.108 7.266.15 15.55.167h11.95c7.7-.009 11.541-.05 14.816-.15l1.475-.042c1.467-.05 2.917-.117 4.675-.192 6.5-.3 10.025-1.383 12.375-2.3 3.109-1.208 5.334-2.658 7.667-4.983 2.333-2.333 3.775-4.558 4.992-7.667.908-2.35 1.991-5.883 2.291-12.383.084-1.758.15-3.208.2-4.667l.05-1.483c.084-3.267.125-7.117.134-14.808V93.683c-.009-7.691-.05-11.533-.134-14.808l-.05-1.475a332.99 332.99 0 0 0-.2-4.675c-.3-6.5-1.383-10.033-2.291-12.383-1.217-3.109-2.659-5.325-4.992-7.667-2.333-2.325-4.558-3.775-7.667-4.983-2.35-.917-5.875-2-12.375-2.292-1.758-.083-3.208-.15-4.675-.2l-1.475-.05c-3.275-.092-7.116-.125-14.816-.142ZM107.5 33c7.258.017 10.883.067 14.15.167l2.258.091c1.009.042 2.067.084 3.242.142 7.1.317 11.95 1.45 16.192 3.092 4.375 1.708 8.091 3.983 11.808 7.691 3.7 3.709 5.975 7.425 7.692 11.809 1.641 4.241 2.775 9.091 3.091 16.183.067 1.483.125 2.75.167 4l.058 1.5c.109 3.275.159 6.9.175 14.158v15.659c-.016 7.258-.066 10.883-.175 14.158l-.058 1.5c-.042 1.25-.1 2.517-.167 4-.316 7.092-1.45 11.942-3.091 16.183-1.717 4.384-3.992 8.1-7.692 11.809-3.717 3.708-7.433 5.983-11.808 7.691-4.242 1.642-9.092 2.775-16.192 3.1-1.475.059-2.75.117-3.992.167l-1.508.05c-3.267.108-6.892.158-14.15.175H91.842c-7.259-.017-10.892-.067-14.159-.175l-1.5-.05c-1.25-.05-2.525-.108-4-.167-7.1-.325-11.941-1.458-16.191-3.1-4.375-1.708-8.092-3.983-11.809-7.691-3.7-3.709-5.975-7.425-7.683-11.809-1.65-4.241-2.775-9.091-3.1-16.183-.05-1.183-.1-2.233-.142-3.25l-.083-2.25c-.108-3.275-.158-6.9-.175-14.158V91.833c.017-7.258.067-10.883.175-14.158l.083-2.25c.042-1.017.092-2.067.142-3.25.325-7.092 1.45-11.942 3.1-16.183 1.708-4.384 3.983-8.1 7.683-11.809 3.717-3.708 7.434-5.983 11.809-7.691 4.25-1.642 9.091-2.775 16.191-3.092 1.184-.058 2.234-.1 3.242-.142l2.258-.091c3.267-.1 6.9-.15 14.159-.167H107.5Z"
                                                    fill-rule="evenodd"></path>
                                            </g>
                                        </svg>
                                    </span>
                                </a>
                            </div>
                        @endif
                        @if ($data->facebook != null)
                            <div class="icon_wrapper">
                                <a href="{{ $data->facebook }}">
                                    <span class="icon">
                                        <svg data-bbox="0 0 371.168 511.2" viewBox="0 0 371.2 511"
                                            xmlns="http://www.w3.org/2000/svg" data-type="shape">
                                            <g>
                                                <path
                                                    d="M8 511c-5.7-2.6-7.5-7.6-7.9-13.4-.1-2.1-.1-4.2-.1-6.4V33.7C0 11.6 11.5 0 33.4 0h309.8c10.7 0 19.7 2.8 25.2 12.7 3.5 6.4 3.3 13.1 1.5 19.9-8.2 31.5-16.3 63-24.6 94.5-1.9 7.2-4.9 9.3-13.1 9.3H176c-12.8 0-21.6 5.4-25.4 15.5-5.9 15.6 4.7 32.1 21.4 32.9 10.5.5 20.9.2 31.4.2h109.8c12.4 0 16 4.5 13 16.4-9.6 37-19.2 73.9-28.8 110.9-2.2 8.5-4.7 10.4-13.7 10.4-36.4 0-72.8 0-109.3-.1-3.3 0-5.4 1-7.6 3.6C118 385.9 69 445.6 20.1 505.2c-1.9 2.4-4.7 4-7.1 6l-5-.2zm319.9-394.2c7.5-28.9 14.9-57.2 22.3-85.5 2.8-10.8 2-11.9-9-11.9H32.8c-10.1 0-13.3 3.3-13.4 13.5v434.6c0 2 .2 4 .3 6.9 1.5-1.7 2.2-2.4 2.8-3.2 44-53.6 88-107.2 131.8-160.9 4.2-5.1 8.8-7.3 15.4-7.2 34.9.2 69.9 0 104.8.2 3.9 0 5.3-1.1 6.3-4.9 5-20.1 10.4-40.2 15.6-60.3 2.9-11 5.7-22.1 8.7-33.6H180.2c-4.3 0-8.7-.1-12.9-.8-18.8-2.9-30.7-13.8-36.3-31.9-4.6-15.1 1.3-33.8 13.6-44.3 9.1-7.7 19.6-10.8 31.3-10.8h145.7c2.1.1 4.1.1 6.3.1z">
                                                </path>
                                            </g>
                                        </svg>
                                    </span>
                                </a>
                            </div>
                        @endif

                        @if ($data->map != null)
                            <div class="icon_wrapper">
                                <a href="{{ $data->map }}">
                                    <span class="icon">
                                        <svg data-bbox="34 20 132 160" viewBox="0 0 200 200" height="200"
                                            width="200" xmlns="http://www.w3.org/2000/svg" data-type="shape">
                                            <g>
                                                <path
                                                    d="M99.999 180a4.463 4.463 0 0 1-2.486-.756c-.644-.432-15.978-10.766-31.525-27.246C44.762 129.501 34 107.388 34 86.272 34 49.729 63.608 20 99.999 20 136.392 20 166 49.729 166 86.272c0 21.116-10.762 43.228-31.987 65.726-15.549 16.48-30.884 26.814-31.529 27.246a4.458 4.458 0 0 1-2.485.756zm0-151.002c-31.451 0-57.038 25.694-57.038 57.274 0 39.699 45.757 75.501 57.038 83.723 11.283-8.221 57.04-44.024 57.04-83.723 0-31.58-25.587-57.274-57.04-57.274z">
                                                </path>
                                                <path
                                                    d="M99.999 111.363c-13.777 0-24.985-11.256-24.985-25.09s11.208-25.09 24.985-25.09c13.779 0 24.987 11.256 24.987 25.09s-11.208 25.09-24.987 25.09zm0-41.183c-8.835 0-16.024 7.219-16.024 16.092s7.189 16.092 16.024 16.092c8.837 0 16.026-7.219 16.026-16.092S108.836 70.18 99.999 70.18z">
                                                </path>
                                            </g>
                                        </svg>
                                    </span>
                                </a>
                            </div>
                        @endif


                    </div>
                    <div class="time">
                        <span class="icon">
                            <svg fill="#ffffff" viewBox="0 0 32 32" version="1.1" xmlns="http://www.w3.org/2000/svg">
                                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                <g id="SVGRepo_iconCarrier">
                                    <path
                                        d="M16 0c-8.836 0-16 7.163-16 16s7.163 16 16 16c8.837 0 16-7.163 16-16s-7.163-16-16-16zM16 30.032c-7.72 0-14-6.312-14-14.032s6.28-14 14-14 14 6.28 14 14-6.28 14.032-14 14.032zM17 15.594v-9.594c0-0.552-0.448-1-1-1s-1 0.448-1 1v10c0 0.283 0.118 0.537 0.308 0.719 0.017 0.020 0.030 0.041 0.048 0.059l4.949 4.95c0.39 0.39 1.023 0.39 1.414 0s0.39-1.024 0-1.415z">
                                    </path>
                                </g>
                            </svg>
                        </span>
                        {{-- <span class="the_time">From {{ $data->start_at }} to {{ $data->end_at }}</span>
                         <br> --}}
                        <span class="the_time">From {{ $data->start_at_new }} to {{ $data->end_at_new }}</span>

                    </div>


                </div>
            </div>
        </section>
        <div id="myModal" class="modal modal-fx-3dFlipVertical">
            <div class="modal-background"></div>
            <div class="modal-content">
                <div class="box" style="text-align: center">
                    {{-- <img src="https://static.thenounproject.com/png/2931154-200.png" width="100"
                        height="60" alt=""> --}}
                    <h2 class="title" style="text-align: center">مرحبا يا . <span id="user_name"></span></h2>
                    <p class="content" style="color: black">دورك </p>
                    <h1 id="queue_number" class="circle"></h1>
                    <br>
                    <p class="content" style="color: black">في الطابور </p>

                    <a href="{{ route('send_form') }}" class="btn btn-dark my-button">طلب دور من جديد</a>

                    <a href="{{ $data->menu_url }}" class="btn btn-dark my-button">تصفح قائمة الطعام</a>


                </div>
            </div>
            <button class="modal-close is-large" aria-label="close"></button>
        </div>
    </main>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script>
        $(document).ready(function() {
            const urlParams = new URLSearchParams(window.location.search);
            const param_x = urlParams.get('code');
            if (param_x != null) {
                startUpdates(param_x);
            }

            function startUpdates(orderId) {
                var intervalId = setInterval(function() {
                    request = $.ajax({
                        url: 'https://dashboard.primecut.me/api/get_status/' + orderId,
                        method: 'GET',
                        success: function(response) {
                            // Handle successful status update
                            console.log('Order status updated:', response.status);
                            $('#myModal').addClass('is-active');
                            $('#queue_number').text(response.number_queue);
                            $('#user_name').text(response.user_name);


                            if (response.status === 1) {
                                $('#myModal').removeClass('is-active');

                                clearInterval(intervalId); // Stop further requests
                                request.abort(); // Abort the current request
                                showNotificationPopup('Order Accepted');

                            } else if (response.status === 3) {
                                $('#myModal').removeClass('is-active');
                                clearInterval(intervalId); // Stop further requests
                                request.abort(); // Abort the current request
                                showNotificationPopupcansel('Order rejected');
                            }
                        },
                        error: function() {
                            // Handle error
                            console.error('Failed to get order status.');
                        }
                    });
                }, 5000); // Check status every 5 seconds
            }


            function showNotificationPopup(message) {

                Swal.fire({
                    icon: 'success',
                    title: "تم تاكيد الحجز",
                    type: "success"
                });

            }

            function showNotificationPopupcansel(message) {

                Swal.fire({
                    icon: 'error',
                    title: "تم رفض طلبك يرجى المعاودة لاحقا",
                    type: "error"
                });

            }
        });
    </script>
</body>

</html>
