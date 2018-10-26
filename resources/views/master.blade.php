<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicons Icon -->
    <link rel="icon" href="http://demo.magikthemes.com/skin/frontend/base/default/favicon.ico" type="image/x-icon" />
    <link rel="shortcut icon" href="http://demo.magikthemes.com/skin/frontend/base/default/favicon.ico" type="image/x-icon" />
    <title>YumYum</title>
    <!-- Mobile Specific -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <!-- CSS Style -->
    <base href="{{ asset('') }}" >
    @include('layout._head')
    <!-- Google Fonts -->
    <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,500,300,700,900' rel='stylesheet' type='text/css'>
</head>
<body class="cms-index-index cms-home-page">
    <div id="page"> 
        <!-- Header -->
        @include('layout.header')
        <!-- Slider -->
        @yield('content')
        <!-- Footer -->
        @include('layout.footer')
    </div>
    <!-- End Footer --> 
    <!-- JavaScript --> 
    <base href="{{ asset('') }}" >
    @include('layout/scripts')
</body>
</html>
