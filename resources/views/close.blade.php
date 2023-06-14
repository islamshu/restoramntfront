<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>{{ $data->website_title }}</title>
    <link rel="stylesheet" href="{{ asset('front/style.css') }}" />
  </head>
  <body>
    <section class="page2" style="    background-image: url({{ $data->background_closed }});">

      <div class="header">
        <div class="logo">
          <img src="{{ $item->logo }}" />
        </div>
      </div>
      <div class="content">
        <h4 class="title">In Queue</h4>
        <p class="sub_title">
        {!! $data->close_message !!}
        </p>
      </div>
    </section>
  </body>
</html>
