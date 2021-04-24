<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Responsive Bootstrap 5 Admin &amp; Dashboard Template">
    <meta name="author" content="Bootlab">

    <title>Bug Report Atsoft</title>

    <link rel="canonical" href="https://appstack.bootlab.io/dashboard-default.html" />
    <link rel="shortcut icon" href="{{asset('img/favicon.ico')}}">

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500&display=swap" rel="stylesheet">

    <!-- Choose your prefered color scheme -->
    <link href="{{asset('css/light.css')}}" rel="stylesheet">
    <!-- <link href="css/dark.css" rel="stylesheet"> -->


</head>
<!--
  HOW TO USE: 
  data-theme: default (default), dark, light
  data-layout: fluid (default), boxed
  data-sidebar-position: left (default), right
  data-sidebar-behavior: sticky (default), fixed, compact
-->
<body data-theme="default" data-layout="fluid" data-sidebar-position="left" data-sidebar-behavior="sticky">
@yield('content')
<script src="{{asset('js/app.js')}}"></script>

</body>

</html>