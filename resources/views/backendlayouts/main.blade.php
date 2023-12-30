<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from dashui.codescandy.com/dashuipro/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 06 Nov 2023 16:53:36 GMT -->
<head>
    <!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="author" content="Codescandy">

 <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-M8S4MT3EYG"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());
    
      gtag('config', 'G-M8S4MT3EYG');
 </script>


<!-- Favicon icon-->
<link rel="shortcut icon" type="image/x-icon" href="assets/images/favicon/favicon.ico">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">



<!-- Libs CSS -->
<link href="{{ asset ('backend/assets/libs/bootstrap-icons/font/bootstrap-icons.css')}}" rel="stylesheet">
<link href="{{ asset ('backend/assets/libs/%40mdi/font/css/materialdesignicons.min.css')}}" rel="stylesheet">
<link href="{{ asset ('backend/assets/libs/simplebar/dist/simplebar.min.css')}}" rel="stylesheet">



<!-- Theme CSS -->
<link rel="stylesheet" href="{{ asset ('backend/assets/css/theme.min.css')}}">
    <title>Tukonekt Dashboard</title>
</head>

<body>
    
    @include('backendlayouts.header')
    @yield('content')


<script src="{{ asset ('backend/assets/libs/jquery/dist/jquery.min.js')}}"></script>
<script src="{{ asset ('backend/assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{ asset ('backend/assets/libs/feather-icons/dist/feather.min.js')}}"></script>
<script src="{{ asset ('backend/assets/libs/simplebar/dist/simplebar.min.js')}}"></script>

<!-- Theme JS -->
<script src="{{ asset ('backend/assets/js/theme.min.js')}}"></script>
    <script src="{{ asset ('backend/assets/libs/apexcharts/dist/apexcharts.min.js')}}"></script>
    <script src="{{ asset ('backend/assets/js/vendors/chart.js')}}"></script>


</body>
</html>