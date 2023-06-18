<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>{{ $data->website_title }}</title>
    <link rel="stylesheet" href="{{ asset('waiting-list/front/style.css') }}" />
</head>

<body>
    <section class="form-section" style="    background-image: url({{ $data->background_watting }});">
        <div id="notificationPopup" style="display: none;">
            <h2>Order Status Update</h2>
            <p id="notificationText"></p>
        </div>
        <div class="header">
            <div class="logo">
                <a href="/">
                    <img src="{{ $data->logo }}" />
                </a>
            </div>
        </div>
        <div class="form-container responsive_box">
            <form id="myForm">
                @csrf
                <label for="name">الاسم</label>
                <input type="text" id="name" name="name" required placeholder="الإسم" />

                <label for="phone">رقم الجوال</label>
                <input type="text" id="phone" name="phone" required placeholder="رقم الجوال" />
                <label for="place">مكان الانتظار</label>
                <select id="place" required name="table_type">
                    <option value="" selected disabled>مكان الانتظار</option>
                    <option value="Public">عام</option>
                    <option value="External">خارجي</option>
                    <option value="Internal">داخلي</option>

                </select>

                <label for="pepole_num">عدد الأشخاص</label>
                <select  required name="guest">
                    <option value="" selected disabled>عدد الاشخاص </option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>


                </select>


                <label for="details">الملاحظات</label>
                <textarea id="details" name="note" rows="4" placeholder="الملاحظات"></textarea>
                <button type="submit"
                    style="    padding: 10px;
                text-align: center;
                margin-right: 39%;
                width: 22%;
                border-radius: 11px;">
                    ارسال</button>
            </form>
        </div>
    </section>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script>
        $(document).ready(function() {
            $('#myForm').submit(function(e) {
                e.preventDefault();

                var formData = $(this).serialize();
                var request; // Variable to store the AJAX request object

                request = $.ajax({
                    url: "{{ route('send_form_post') }}",
                    type: "POST",
                    data: formData,
                    success: function(response) {
                        if (response.status == 'success') {
                            $("form").trigger("reset");

                            Swal.fire({
                                icon: 'success',
                                text: 'تم الارسال بنجاح',
                            });

                            startUpdates(response.orderId);


                        } else {
                            Swal.fire({
                                icon: 'error',
                                title: 'Oops...',
                                text: 'حدث خطأ ما يرجى المحاولة لاحقا',
                            });
                        }

                    },
                    error: function(xhr) {
                        // Handle the error response here
                        console.log(xhr.responseText);
                    }
                });
            });


            function startUpdates(orderId) {
                var intervalId = setInterval(function() {
                    request = $.ajax({
                        url: 'https://dashboard.primecut.me/api/get_status/' + orderId,
                        method: 'GET',
                        success: function(response) {
                            // Handle successful status update
                            console.log('Order status updated:', response.status);

                            if (response.status === 1) {
                                clearInterval(intervalId); // Stop further requests
                                request.abort(); // Abort the current request
                                showNotificationPopup('Order Accepted');
                            } else if (response.status === 3) {
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
                    title: "تم قبول الطلب",
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
