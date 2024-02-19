@extends('layouts.main')

@section('head')
<head>
    <title>Unit Layanan Psikologi - UIN Bandung</title>
    <meta charset="UTF-8" />
    <meta content="IE=Edge" http-equiv="X-UA-Compatible" />
    <meta content="" name="description" />
    <meta content="" name="keywords" />
    <meta content="Tooplate" name="author" />
    <meta
      content="width=device-width, initial-scale=1, maximum-scale=1"
      name="viewport"
    />
    <link href="css/bootstrap.min.css" rel="stylesheet" />
    <link href="css/font-awesome.min.css" rel="stylesheet" />
    <link href="css/animate.css" rel="stylesheet" />
    <link href="css/owl.carousel.css" rel="stylesheet" />
    <link href="css/owl.theme.default.min.css" rel="stylesheet" />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap"
      rel="stylesheet"
    />
    <link href="assets/style.css" rel="stylesheet" />
    <!-- Link to the external CSS file -->
    <!-- MAIN CSS -->
    <link href="css/tooplate-style.css" rel="stylesheet" />
  </head>
@endsection

@section('container')
@include('partials.navbar')
<!-- HOME -->
@include('landing_page.home')
<!-- ABOUT -->
@include('landing_page.about')
<!-- SERVICES -->
@include('landing_page.services')
<!-- ALUR -->
@include('landing_page.alur')
<!-- TEAM -->
@include('landing_page.teams')
@endsection