<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="SHIELD - Free Bootstrap 3 Theme">
    <meta name="author" content="Carlos Alvarez - Alvarez.is - blacktie.co">
    <link rel="shortcut icon" href="assets/ico/favicon.png">

    <title>Absensi Kelas</title>

    <!-- Bootstrap core CSS -->
    <link href="/assets/frontend/assets/css/bootstrap.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="/assets/frontend/assets/css/main.css" rel="stylesheet">
    <link rel="stylesheet" href="/assets/frontend/assets/css/icomoon.css">
    <link href="/assets/frontend/assets/css/animate-custom.css" rel="stylesheet">


    
    <link href='http://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,300,700' rel='stylesheet' type='text/css'>
    
    <script src="/assets/frontend/assets/js/jquery.min.js"></script>
    <script type="text/javascript" src="/assets/frontend/assets/js/modernizr.custom.js"></script>
      <!-- Bootstrap core CSS -->
    <link href="/assets/admin/assets/css/bootstrap.css" rel="stylesheet">
    <!--external css-->
    <link href="/assets/admin/assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="/assets/admin/assets/css/zabuto_calendar.css">
    <link rel="stylesheet" type="text/css" href="/assets/admin/assets/js/gritter/css/jquery.gritter.css" />
    <link rel="stylesheet" type="text/css" href="/assets/admin/assets/lineicons/style.css">    
    
    <!-- Custom styles for this template -->
    <link href="/assets/admin/assets/css/style.css" rel="stylesheet">
    <link href="/assets/admin/assets/css/style-responsive.css" rel="stylesheet">
   

    <script src="/assets/admin/assets/js/chart-master/Chart.js"></script>
   
     <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="assets/js/html5shiv.js"></script>
      <script src="assets/js/respond.min.js"></script>
    <![endif]-->
  </head>

  <body data-spy="scroll" data-offset="0" data-target="#navbar-main">
  
  
    <div id="navbar-main">
      <!-- Fixed navbar -->
  @include('partials3.nav')
    </div>

  
  
        <!-- ==== HEADERWRAP ==== -->
        <div id="headerwrap" id="home" name="home">
            <header class="clearfix">
                    <h1><span class="icon icon-shield"></span></h1>
                    <p>Absensi Kelas</p>
                   
            </header>       
        </div><!-- /headerwrap -->

        <!-- ==== GREYWRAP ==== -->
        <div id="greywrap">
            @include('partials3.grey')
        </div><!-- greywrap -->
        
        <!-- ==== ABOUT ==== -->
        <!-- container -->
        
        <!-- ==== SECTION DIVIDER1 -->
      <!-- section -->
        
        
        <!-- ==== SERVICES ==== -->
        <!-- container -->
        

        <!-- ==== SECTION DIVIDER2 -->
        <!-- section -->

<!-- ==== TEAM MEMBERS ==== -->
        <div class="container" id="team" name="team">
        <br>
           @include('partials3.tm')<!-- row -->
        </div><!-- container -->

        <!-- ==== TEAM MEMBERS ==== -->
        <div class="container" id="team2" name="team2">
        <br>
           @include('partials3.tm2')<!-- row -->
        </div><!-- container -->

        <!-- ==== GREYWRAP ==== -->
       <!-- greywrap -->
        
        <!-- ==== SECTION DIVIDER3 -->
        <!-- section -->
        
        <!-- ==== PORTFOLIO ==== -->
       <!-- /container -->

        <!-- ==== SECTION DIVIDER4 ==== -->
        <!-- section -->
        
        <!-- ==== BLOG ==== -->
       <!-- /container -->

        
        <!-- ==== SECTION DIVIDER6 ==== -->
        <!-- section -->
        
        <!-- container -->

        <div id="footerwrap">
            <div class="container">
                <h4>Created by <a href="http://blacktie.co">BlackTie.co</a> - Copyright 2014</h4>
            </div>
        </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
        

    <script type="text/javascript" src="/assets/frontend/assets/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="/assets/frontend/assets/js/retina.js"></script>
    <script type="text/javascript" src="/assets/frontend/assets/js/jquery.easing.1.3.js"></script>
    <script type="text/javascript" src="/assets/frontend/assets/js/smoothscroll.js"></script>
    <script type="text/javascript" src="/assets/frontend/assets/js/jquery-func.js"></script>
     <script src="{{ asset('js/app.js') }}"></script>
 @yield('js')
  </body>
</html>
