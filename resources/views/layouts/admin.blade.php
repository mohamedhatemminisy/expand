<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="{{ app() -> getLocale() === 'ar' ? 'rtl' : 'ltr'}}">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
  <meta name="description" content="Modern admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities with bitcoin dashboard.">
  <meta name="keywords" content="admin template, modern admin template, dashboard template, flat admin template, responsive admin template, web app, crypto dashboard, bitcoin dashboard">
  <meta name="author" content="PIXINVENT">
  <title>Dashboard eCommerce - Modern Admin - Clean Bootstrap 4 Dashboard HTML Template
    + Bitcoin Dashboard</title>
  <link rel="apple-touch-icon" href="{{asset('assets/images/ico/apple-icon-120.png')}}">
  <link rel="shortcut icon" type="image/x-icon" href="{{asset('assets/images/ico/favicon.ico')}}">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Quicksand:300,400,500,700"
  rel="stylesheet">
  <link href="https://maxcdn.icons8.com/fonts/line-awesome/1.1/css/line-awesome.min.css"
  rel="stylesheet">
  <!-- BEGIN VENDOR CSS-->
  
  <link rel="stylesheet" type="text/css" href="{{asset('assets/css/jquery-ui.css')}}">

  <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.10/css/select2.min.css" rel="stylesheet"/>
          <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
          <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.10/js/select2.min.js"></script>
  <link rel="stylesheet" type="text/css" href="{{asset('assets/vendors/css/weather-icons/climacons.min.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('assets/fonts/meteocons/style.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('assets/vendors/css/charts/morris.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('assets/vendors/css/charts/chartist.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('assets/vendors/css/charts/chartist-plugin-tooltip.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('assets/css/custom.css')}}">

@if(app() -> getLocale() === 'ar')

  <link rel="stylesheet" type="text/css" href="{{asset('assets/css-rtl/vendors.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('assets/css-rtl/app.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('assets/css-rtl/custom-rtl.css')}}">
  <!-- END MODERN CSS-->
  <!-- BEGIN Page Level CSS-->
  <link rel="stylesheet" type="text/css" href="{{asset('assets/css-rtl/core/menu/menu-types/horizontal-menu.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('assets/css-rtl/core/colors/palette-gradient.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('assets/fonts/simple-line-icons/style.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('assets/css-rtl/core/colors/palette-gradient.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('assets/css-rtl/pages/timeline.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('assets/css-rtl/pages/dashboard-ecommerce.css')}}">
  <!-- END Page Level CSS-->
  <!-- BEGIN Custom CSS-->
  <link rel="stylesheet" type="text/css" href="{{asset('assets/css/style-rtl.css')}}">
  <!-- END Custom CSS-->

@elseif(app() -> getLocale() === 'en')
  <link rel="stylesheet" type="text/css" href="{{asset('assets/css/vendors.css')}}">

  <!-- END VENDOR CSS-->
  <!-- BEGIN MODERN CSS-->
  <link rel="stylesheet" type="text/css" href="{{asset('assets/css/app.css')}}">
  <!-- END MODERN CSS-->
  <!-- BEGIN Page Level CSS-->
  <link rel="stylesheet" type="text/css" href="{{asset('assets/css/core/menu/menu-types/horizontal-menu.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('assets/css/core/colors/palette-gradient.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('assets/fonts/simple-line-icons/style.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('assets/css/core/colors/palette-gradient.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('assets/css/pages/timeline.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('assets/css/pages/dashboard-ecommerce.css')}}">
  <!-- END Page Level CSS-->
  <!-- BEGIN Custom CSS-->
  <link rel="stylesheet" type="text/css" href="{{asset('assets/css/style.css')}}">
  <!-- END Custom CSS-->
@endif

</head>
<body class="horizontal-layout horizontal-menu horizontal-menu-padding 2-columns   menu-expanded"
data-open="click" data-menu="horizontal-menu" data-col="2-columns">
<!-- fixed-top-->

<!-- begin header -->
@include('dashboard.includes.header')
<!-- end header -->
<!-- begin sidebar -->
@include('dashboard.includes.navbar')

<!-- end sidebar -->
@yield('content')

<!-- begin footer html -->
@include('dashboard.includes.footer')

<!-- end footer -->
<script src="{{asset('assets/vendors/js/vendors.min.js')}}" type="text/javascript"></script>
  <!-- BEGIN VENDOR JS-->
  <!-- BEGIN PAGE VENDOR JS-->
  @yield('script')
  <script type="text/javascript" src="{{asset('assets/vendors/js/ui/jquery.sticky.js')}}"></script>
  <script src="{{asset('assets/vendors/js/charts/chartist.min.js')}}" type="text/javascript"></script>
  <script src="{{asset('assets/vendors/js/charts/chartist-plugin-tooltip.min.js')}}"
  type="text/javascript"></script>
  <script src="{{asset('assets/vendors/js/charts/raphael-min.js')}}" type="text/javascript"></script>
  <script src="{{asset('assets/vendors/js/charts/morris.min.js')}}" type="text/javascript"></script>
  <script src="{{asset('assets/vendors/js/timeline/horizontal-timeline.js')}}" type="text/javascript"></script>
  <!-- END PAGE VENDOR JS-->
  <!-- BEGIN MODERN JS-->
  <script src="{{asset('assets/js/core/app-menu.js')}}" type="text/javascript"></script>
  <script src="{{asset('assets/js/core/app.js')}}" type="text/javascript"></script>
  <script src="{{asset('assets/js/scripts/customizer.js')}}" type="text/javascript"></script>
  <!-- END MODERN JS-->
  <!-- BEGIN PAGE LEVEL JS-->
  <script src="{{asset('assets/js/scripts/pages/dashboard-ecommerce.js')}}" type="text/javascript"></script>
<script>
  $(document).ready(function() {
  $("#nav_hover").click(function() {

    if ( $('#nav_expanded_nav').css('display') == 'none' || $('#nav_expanded_nav').css("visibility") == "hidden"){
              $("#nav_expanded_nav").css("visibility", "visible");
    }else{
              $("#nav_expanded_nav").css("visibility", "hidden");
    }
     
  });
                                                            
});

</script>

  <!-- END PAGE LEVEL JS-->
</body>
</html>

