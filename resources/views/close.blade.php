<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>{{ $data->website_title }}</title>
    <link rel="stylesheet" href="{{ asset('waiting-list/front/style.css') }}" />
  </head>
  <body>
    <section class="page2" style="    background-image: url({{ $data->background_closed }});">

      <div class="header">
        <div class="logo">
          <img src="{{ $data->logo }}" />
        </div>
      </div>
      <div class="content">
        <p class="sub_title">
        {!! $data->close_message !!}  
        
        {!! $data->close_message_en !!} <br> 


        </p>
      </div>
    </section>
  </body>
</html>
