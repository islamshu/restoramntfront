<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>{{ $data->website_title }}</title>
    <link rel="stylesheet" href="{{ asset('front/style.css') }}" />
</head>

<body>
    <section class="form-section" style="    background-image: url({{ $data->background_watting }});">

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
                <input type="number" min="1" required  name="guest">
                

                <label for="details">الملاحظات</label>
                <textarea id="details" name="note" rows="4" placeholder="الملاحظات"></textarea>
                <button type="submit" style="    padding: 10px;
                text-align: center;
                margin-right: 39%;" > ارسل</button>
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

                $.ajax({
                    url: "{{ route('send_form_post') }}",
                    type: "POST",
                    data: formData,
                    success: function(response) {
                        if(response.status == 'success'){
                            $("form").trigger("reset");

                            Swal.fire({
                            icon: 'success',
                            title: 'Oops...',
                            text: 'تم الارسال بنجاح',
                        });

                        }else{
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
        });
    </script>
</body>

</html>
