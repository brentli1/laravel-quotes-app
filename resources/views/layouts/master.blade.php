<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title></title>
  {{--  <script src="{{ URL::to('js/manifest.js') }}"></script>
  <script src="{{ URL::to('js/vendor.js') }}"></script>  --}}
  <script src="{{ URL::to('js/app.js') }}"></script>
  <link rel="stylesheet" href="{{ URL::to('css/app.css') }}">
</head>
<body>
  <div class="container">
    @yield('content')
  </div>
</body>
</html>