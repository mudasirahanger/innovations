<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<title>Home 
    @if(isset($title) && $title != '')    
     :: {{ $title }}
    @endif</title>
<!-- Fav Icon -->
<link rel="icon" href="{{ URL::asset('public/images') }}/favicon.png" type="image/x-icon">

<!-- Google Fonts -->
<link href="https://fonts.googleapis.com/css?family=Titillium+Web:300,300i,400,400i,600,600i,700,700i,900&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i&display=swap" rel="stylesheet">

<!-- Stylesheets -->
<link href="{{ URL::asset('public/assets') }}/css/font-awesome-all.css" rel="stylesheet">
<link href="{{ URL::asset('public/assets') }}/css/flaticon.css" rel="stylesheet">
<link href="{{ URL::asset('public/assets') }}/css/owl.css" rel="stylesheet">
<link href="{{ URL::asset('public/assets') }}/css/bootstrap.css" rel="stylesheet">
<link href="{{ URL::asset('public/assets') }}/css/jquery.fancybox.min.css" rel="stylesheet">
<link href="{{ URL::asset('public/assets') }}/css/animate.css" rel="stylesheet">
<link href="{{ URL::asset('public/assets') }}/css/color/theme-color.css" id="jssDefault" rel="stylesheet">
<link href="{{ URL::asset('public/assets') }}/css/switcher-style.css" rel="stylesheet">
<link href="{{ URL::asset('public/assets') }}/css/style.css" rel="stylesheet">
<link href="{{ URL::asset('public/assets') }}/css/responsive.css" rel="stylesheet">
</head>
<body class="boxed_wrapper">
@include('components.head')
@if (request()->routeIs('home'))
@include('components.sliders')
@endif