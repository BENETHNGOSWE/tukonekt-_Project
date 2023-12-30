<!doctype html>
<html lang="en">

<!-- Mirrored from uigaint.com/demo/html/anfra/kyc-2/kyc.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 04 Nov 2023 12:29:31 GMT -->

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <title>Tukonekt Dashboard</title>

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="{{ asset ('frontend/assets/css/bootstrap.min.css')}}">

  <!-- External Css -->
  <link rel="stylesheet" href="{{ asset ('frontend/assets/css/line-awesome.min.css')}}">

  <!-- Custom Css -->
  <link rel="stylesheet" type="text/css" href="{{ asset ('frontend/assets/css/main.css')}}">
  <link rel="stylesheet" type="text/css" href="{{ asset ('frontend/assets/css/kyc-2.css')}}">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&amp;display=swap" rel="stylesheet">

  <!-- Favicon -->
  <link rel="icon" href="{{ asset ('frontend/assets/images/favicon.png')}}">
  <link rel="apple-touch-icon" href="{{ asset ('frontend/assets/images/apple-touch-icon.png')}}">
  <link rel="apple-touch-icon" sizes="72x72" href="{{ asset ('frontend/assets/images/icon-72x72.png')}}">
  <link rel="apple-touch-icon" sizes="114x114" href="{{ asset ('frontend/assets/images/icon-114x114.png')}}">


</head>

<body>

  @include('frontendlayouts.header')
  @yield('content')

  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="{{ asset ('frontend/assets/js/jquery.min.js')}}"></script>
  <script src="{{ asset ('frontend/assets/js/popper.min.js')}}"></script>
  <script src="{{ asset ('frontend/assets/js/bootstrap.min.js')}}"></script>

  {{-- <!-- <script src="../{{ asset ('frontend/assets/js/owl.carousel.min.js"></script> -->
    <!-- <script src="../{{ asset ('frontend/assets/js/countrySelect.min.js"></script> --> --}}

  <script src="{{ asset ('frontend/assets/js/custom.js')}}"></script>
</body>

<!-- Mirrored from uigaint.com/demo/html/anfra/kyc-2/kyc.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 04 Nov 2023 12:29:49 GMT -->

</html>