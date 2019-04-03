<!DOCTYPE html>
<html>
    
<!-- Mirrored from mannatthemes.com/annex/vertical/pages-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 01 Dec 2018 03:48:12 GMT -->
<head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
        <title>Admin Login</title>
        <meta content="Admin Dashboard" name="description" />
        <meta content="Mannatthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <link rel="shortcut icon" href="assets_back/images/favicon.ico">

        <link href="assets_back/css/bootstrap.min.css" rel="stylesheet" type="text/css">
        <link href="assets_back/css/icons.css" rel="stylesheet" type="text/css">
        <link href="assets_back/css/style.css" rel="stylesheet" type="text/css">

    </head>


    <body class="fixed-left">

        <!-- Begin page -->
        <div class="accountbg"></div>
        <div class="wrapper-page">

            <div class="card">
                <div class="card-body">

                    <h3 class="text-center mt-0 m-b-15">
                        <a href="index.html" class="logo logo-admin"><img src="assets_back/images/logo2.svg" height="80" width="80" alt="logo"><br>ashiap store</a>
                    </h3>

                    <div class="p-3">
                        <form class="form-horizontal m-t-20" method="POST" action="{{ route('admin.login.submit') }}">
                            @csrf

                            <div class="form-group row">
                                <div class="col-md-12">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fa fa-user"></i></span>
                                        </div>
                                        <input type="text" id="username" class="form-control{{ $errors->has('username') ? ' is-invalid' : '' }}" name="username" value="{{ old('username') }}" placeholder="Username" autofocus>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-md-12">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fa fa-lock"></i></span>
                                        </div>
                                        <input type="password" id="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" value="{{ old('password') }}" placeholder="Password" data-parsley-minlength="8">
                                    </div>
                                </div>
                            </div>

                            <div class="form-group text-center row m-t-20">
                                <div class="col-12">
                                    <button class="btn btn-danger btn-block waves-effect waves-light" type="submit">Log In</button>
                                </div>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>


        <!-- jQuery  -->
        <script src="assets_back/js/jquery.min.js"></script>
        <script src="assets_back/js/popper.min.js"></script>
        <script src="assets_back/js/bootstrap.min.js"></script>
        <script src="assets_back/js/modernizr.min.js"></script>
        <script src="assets_back/js/detect.js"></script>
        <script src="assets_back/js/fastclick.js"></script>
        <script src="assets_back/js/jquery.slimscroll.js"></script>
        <script src="assets_back/js/jquery.blockUI.js"></script>
        <script src="assets_back/js/waves.js"></script>
        <script src="assets_back/js/jquery.nicescroll.js"></script>
        <script src="assets_back/js/jquery.scrollTo.min.js"></script>

        <!-- Parsley js -->
        <script type="text/javascript" src="assets_back/plugins/parsleyjs/parsley.min.js"></script>

        <script type="text/javascript">
            $(document).ready(function() {
                $('form').parsley();
            });
        </script>

        <!-- App js -->
        <script src="assets_back/js/app.js"></script>

    </body>

<!-- Mirrored from mannatthemes.com/annex/vertical/pages-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 01 Dec 2018 03:48:12 GMT -->
</html>