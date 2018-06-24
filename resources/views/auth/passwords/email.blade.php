<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>Reset Password</title>

    <!-- Fontfaces CSS-->
     <link href="/assets/user/css/font-face.css" rel="stylesheet" media="all">
    <link href="/assets/user/vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="/assets/user/vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="/assets/user/vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="/assets/user/vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="/assets/user/vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="/assets/user/vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="/assets/user/vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="/assets/user/vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="/assets/user/vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="/assets/user/vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="/assets/user/vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="/assets/user/css/theme.css" rel="stylesheet" media="all">


</head>

<body class="animsition">
    <div class="page-wrapper">
        <div class="page-content--bge5">
            <div class="container">
                <div class="login-wrap">
                    <div class="login-content">
                       
                              <center><img src="/assets/user/images/icon/index.png"></center>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form class="form-horizontal" method="POST" action="{{ route('password.email') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <div class="col-md-10">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="E-Mail Address" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Send Password Reset Link
                                </button>
                            </div>
                       </div>
                            </form>
                           
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- Jquery JS-->
    <script src="/assets/user/vendor/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap JS-->
    <script src="/assets/user/vendor/bootstrap-4.1/popper.min.js"></script>
    <script src="/assets/user/vendor/bootstrap-4.1/bootstrap.min.js"></script>
    <!-- Vendor JS       -->
    <script src="/assets/user/vendor/slick/slick.min.js">
    </script>
    <script src="/assets/user/vendor/wow/wow.min.js"></script>
    <script src="/assets/user/vendor/animsition/animsition.min.js"></script>
    <script src="/assets/user/vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
    </script>
    <script src="/assets/user/vendor/counter-up/jquery.waypoints.min.js"></script>
    <script src="/assets/user/vendor/counter-up/jquery.counterup.min.js">
    </script>
    <script src="/assets/user/vendor/circle-progress/circle-progress.min.js"></script>
    <script src="/assets/user/vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="/assets/user/vendor/chartjs/Chart.bundle.min.js"></script>
    <script src="/assets/user/vendor/select2/select2.min.js">
    </script>

    <!-- Main JS-->
    <script src="/assets/user/js/main.js"></script>


</body>

</html>
<!-- end document-->