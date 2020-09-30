<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Request Manager</title>

    <link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css" >
  </head>
  <body>
    @include('inc.navbar')
    @include('inc.messages')
    @yield('content')

  </body>
</html>
