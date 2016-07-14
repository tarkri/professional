<!DOCTYPE html>
<html lang="en">
<head>

    <!-- Basic Page Needs
    –––––––––––––––––––––––––––––––––––––––––––––––––– -->
    <meta charset="utf-8">
    <title>Tarun Designs</title>
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Mobile Specific Metas
    –––––––––––––––––––––––––––––––––––––––––––––––––– -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- FONT
    –––––––––––––––––––––––––––––––––––––––––––––––––– -->

    <!-- CSS
    –––––––––––––––––––––––––––––––––––––––––––––––––– -->
    <link rel="stylesheet" href="{{ URL::asset('library/css/style.css') }}">

    <!-- Scripts
    –––––––––––––––––––––––––––––––––––––––––––––––––– -->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

    <!-- Favicon
    –––––––––––––––––––––––––––––––––––––––––––––––––– -->
    <link rel="icon" type="image/png" href="../../dist/images/favicon.png">

    <!-- Typekit
    –––––––––––––––––––––––––––––––––––––––––––––––––– -->
    <script src="https://use.typekit.net/dgn3lct.js"></script>
    <script>try{Typekit.load({ async: true });}catch(e){}</script>

</head>
<body>

<!-- Primary Page Layout
–––––––––––––––––––––––––––––––––––––––––––––––––– -->

@yield('content')



<!-- End Document
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
<script src="{{ URL::asset('library/js/jquery.inview.min.js') }}"></script>
<script src="{{ URL::asset('library/js/site.js') }}"></script>
@yield('scripts')
</body>
</html>