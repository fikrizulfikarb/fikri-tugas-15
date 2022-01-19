<!DOCTYPE html>
<html lang="en">

<head>
    <!-- basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- mobile metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <!-- site metas -->
    <title>pomato</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- bootstrap css -->
    <link rel="stylesheet" href="{{ url('public/shop') }}/css/bootstrap.min.css">
    <!-- style css -->
    <link rel="stylesheet" href="{{ url('public/shop') }}/css/style.css">
    <!-- Responsive-->
    <link rel="stylesheet" href="{{ url('public/shop') }}/css/responsive.css">
    <!-- fevicon -->
    <link rel="icon" href="{{ url('public/shop') }}/images/fevicon.png" type="image/gif" />
    <!-- Scrollbar Custom CSS -->
    <link rel="stylesheet" href="{{ url('public/shop') }}/css/jquery.mCustomScrollbar.min.css">
    <!-- Tweaks for older IEs-->
    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
    <!-- owl stylesheets -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{ url('public/shop') }}/css/owl.carousel.min.css">
    <link rel="stylesheet" href="{{ url('public/shop') }}/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">

    
    <link rel="stylesheet" href="{{ asset('/public/assets/css/templatemo.css') }}">
    <link rel="stylesheet" href="{{ asset('/public/assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/public/assets/css/custom.css') }}">

    <!-- Load fonts style after rendering the layout styles -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;200;300;400;500;700;900&display=swap">
    <link rel="stylesheet" href="{{ asset('/public/assets/css/fontawesome.min.css') }}">
    @stack('style')
<!--
    
TemplateMo 559 Zay Shop

https://templatemo.com/tm-559-zay-shop

-->
</head>
<!-- body -->

<body class="main-layout ">
    <!-- loader  -->
  
    <!-- end loader -->
    <!-- header -->
        @include ('client.section.navbar')
    <!-- end header -->

    <!-- about -->
    
    <!-- end about -->

    <!-- brand -->

    <!-- end brand -->
        @yield ('content')
    <!-- clients -->
   
    <!-- end clients -->

    <!-- contact -->
    
    <!-- end contact -->

    <!-- footer -->
        @include ('client.section.footer')
    <!-- end footer -->
    @stack('script')
    <!-- Start Script -->
    <script src="{{ asset('/public/assets/js/jquery-1.11.0.min.js') }}"></script>
    <script src="{{ asset('/public/assets/js/jquery-migrate-1.2.1.min.js') }}"></script>
    <script src="{{ asset('/public/assets/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('/public/assets/js/templatemo.js') }}"></script>
    <script src="{{ asset('/public/assets/js/custom.js') }}"></script>
    <!-- End Script -->
    <script>
        $(".table-datatable").DataTable();
    </script>
    <!-- Javascript files-->
    <script src="{{ url('public/shop') }}/js/jquery.min.js"></script>
    <script src="{{ url('public/shop') }}/js/popper.min.js"></script>

    <script src="{{ url('public/shop') }}/js/plugin.js"></script>
    <!-- sidebar -->
    <script src="{{ url('public/shop') }}/js/jquery.mCustomScrollbar.concat.min.js"></script>

    <!-- javascript -->
    <script src="{{ url('public/shop') }}/js/owl.carousel.js"></script>
    <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>

</body>

</html>