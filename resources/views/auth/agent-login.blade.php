<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
    <meta name="author" content="Coderthemes">

    <!-- App favicon -->
    <link rel="shortcut icon" href="assets/images/favicon.ico">
    <!-- App title -->
    <title> @lang('generate.management')-{{ config('APP_NAME', 'TravelLife2') }}</title>

    <!-- App css -->
    <link href="{{asset('gestion/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('gestion/css/core.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('gestion/css/components.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('gestion/css/icons.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('gestion/css/pages.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('gestion/css/menu.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('gestion/css/responsive.css')}}" rel="stylesheet" type="text/css" />

    <!-- HTML5 Shiv and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->

    <script src="{{asset('gestion/js/modernizr.min.js')}}"></script>

</head>


<body class="bg-transparent">

<!-- HOME -->
<section>
    <div class="container-alt">
        <div class="row">
            <div class="col-sm-12">

                <div class="wrapper-page">

                    <div class="m-t-40 account-pages">
                        <div class="text-center account-logo-box">
                            <h2 class="text-uppercase">
                                <a href="/" class="text-success">
                                    <span><img src="{{asset('front/img/logo-travelife.png')}}" alt="" height="36"></span>
                                </a>
                            </h2>
                            <!--<h4 class="text-uppercase font-bold m-b-0">Sign In</h4>-->
                        </div>
                        <div class="account-content">
                            <form class="form-horizontal" action="{{ route('manage.login') }}" method="post">
                                @csrf
                                <div class="form-group ">
                                    <div class="col-xs-12">
                                        <input class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" type="email"
                                               name="email" value="{{ old('email') }}" required autofocus  placeholder="Email">
                                    </div>
                                    @if ($errors->has('email'))
                                        <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('email') }}</strong>
                                            </span>
                                    @endif
                                </div>

                                <div class="form-group">
                                    <div class="col-xs-12">
                                        <input class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" type="password" placeholder="password" name="password" required>
                                    </div>
                                    @if ($errors->has('password'))
                                        <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('password') }}</strong>
                                            </span>
                                    @endif
                                </div>

                                <div class="form-group ">
                                    <div class="col-xs-12">
                                        <div class="checkbox checkbox-success">
                                            <input id="checkbox-signup" type="checkbox" {{ old('remember') ? 'checked' : '' }} name="remember">
                                            <label for="checkbox-signup">
                                                @lang('generate.remember')
                                            </label>
                                        </div>

                                    </div>
                                </div>

                                <div class="form-group text-center m-t-30">
                                    <div class="col-sm-12">
                                        <a  class="text-muted" href="{{ route('password.request') }}"><i class="fa fa-lock m-r-5"></i> @lang('generate.forgotPassword')?</a>
                                    </div>
                                </div>

                                <div class="form-group account-btn text-center m-t-10">
                                    <div class="col-xs-12">
                                        <button class="btn w-md btn-bordered btn-danger waves-effect waves-light" type="submit">@lang('generate.signIn')</button>
                                    </div>
                                </div>

                            </form>

                            <div class="clearfix"></div>

                        </div>
                    </div>
                    <!-- end card-box-->


                </div>
                <!-- end wrapper -->

            </div>
        </div>
    </div>
</section>
<!-- END HOME -->

<script>
    var resizefunc = [];
</script>

<!-- jQuery  -->
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/detect.js"></script>
<script src="assets/js/fastclick.js"></script>
<script src="assets/js/jquery.blockUI.js"></script>
<script src="assets/js/waves.js"></script>
<script src="assets/js/jquery.slimscroll.js"></script>
<script src="assets/js/jquery.scrollTo.min.js"></script>

<!-- App js -->
<script src="assets/js/jquery.core.js"></script>
<script src="assets/js/jquery.app.js"></script>

</body>
</html>
