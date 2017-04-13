<!DOCTYPE html>
<html lang="en">
<head>
@include('partials._header')
</head>
<body>
@include('partials._nav')
@include('partials._modal')
@yield('content')
@include('partials._footer')
@include('partials._js')
  </body>
</html>
