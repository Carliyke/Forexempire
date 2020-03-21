<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
<meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <meta property="og:site_name" content="forexempire">
  <meta property="og:type" content="article">
  <meta property="og:title" content="forexempire">

  <meta property="og:url" content="http://http://forexempire.ltd/">
  <meta property="og:description" content="Forex Empire is a non-custodial instant cryptocurrency exchange company Located at 108 Lumb Lane, Bradford, United Kingdom, BD8 7RS, with branch in argentina. Forex Empire acts as an intermediary between crypto exchanges and users who wish to make profit through active investment, offering access to 140+ cryptocurrencies. ">

  <link rel="alternate" media="only screen and (max-width: 640px)" href="http://forexempire.ltd">

  <title>
    @yield('title')
  </title>

    <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
  <!-- CSS Files -->
  
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.3.0/animate.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <link href="../assets/css/bootstrap.min.css" rel="stylesheet" />
  <link href="../assets/css/now-ui-dashboard.css?v=1.5.0" rel="stylesheet" />
  
  <!-- Custom CSS-->
  <link href="../assets/css/custom.css" rel="stylesheet" />
</head>
<body>
    @include('inc.navbar')
    @include('inc.messages')
    @yield('content')


    <!-- JAVASCRIPT -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.js"></script>
    
    <!-- CERTIFICATION TICKER-->
    <script src="../assets/js/jquery-latest.pack.js"></script>
    <script src="../assets/js/jcarousellite_1.0.1.pack.js"></script>
    <script src="../assets/js/jcarousellite_1.0.1c4.js"></script>

     
    <script type="text/javascript">
      
      new WOW().init();
  
      $(document).ready(function () {

        // For Hover Dropdown Menu Items
        $(".dropdown, .btn-group").hover(function(){
            var dropdownMenu = $(this).children(".dropdown-menu");
            if(dropdownMenu.is(":visible")){
                dropdownMenu.parent().toggleClass("open");
            }
        });

    
        // Get the elements with class="column"
        var elements = document.getElementsByClassName("column");

        // Declare a loop variable
        var i;

        // Full-width images
        function one() {
            for (i = 0; i < elements.length; i++) {
            elements[i].style.msFlex = "75%";  // IE10
            elements[i].style.flex = "75%";
          }
        }

        // Two images side by side
        function two() {
          for (i = 0; i < elements.length; i++) {
              elements[i].style.msFlex = "50%";  // IE10
              elements[i].style.flex = "50%";
          }
        }

        // Four images side by side
        function four() {
          for (i = 0; i < elements.length; i++) {
              elements[i].style.msFlex = "25%";  // IE10
              elements[i].style.flex = "25%";
          }
        }    

      });

      // For CERTIFICATION TICKER
      $(function() {
        $(".newsticker-jcarousellite").jCarouselLite({
          vertical: true,
          hoverPause:true,
          visible: 1,
          auto:3500,
          speed:1000
        });
      });
  
    </script>
    <!-- JAVASCRIPT -->
</body>
@include('inc.footer')
</html>
