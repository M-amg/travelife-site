<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <title>Lfen.ma</title>

    <meta charset="utf-8">

    <meta name="apple-mobile-web-app-capable" content="yes"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
    <meta name="format-detection" content="telephone=no"/>
    <meta name="csrf-token" content="{{ csrf_token() }}">

    @php
        $seo = \App\models\marketing\TlSeo::first();
        $seoAnalytics = \App\models\marketing\TlSeoAnalytic::all();

        $agency=\App\models\agency\TlAgency::all()->first();
        $pages=\App\models\page\TlPage::all();
    @endphp


    <meta name="description" content="{{ $seo ? $seo->meta_description : ''}}">
    <meta name="keywords" content="{{ $seo ? $seo->meta_keywords : ''}}">

    @foreach($seoAnalytics as $seoAnalytic)
    <link rel="{{ $seoAnalytic->name }}" href="{{ $seoAnalytic->url }}">
    @endforeach

    <link rel="icon" type="image/png" href="#">

    <!-- bootstrap -->
    <link href="{{asset('assets/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <!-- Fonts -->
    <link rel='stylesheet' href='{{asset('assets/typicons.font/src/font/typicons.css')}}'/>
    <link rel='stylesheet' href='{{asset('assets/fontawesome/css/all.min.css')}}'/>
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@300&display=swap" rel="stylesheet">
    <link rel='stylesheet' href='{{asset('assets/daterangepicker/daterangepicker.css')}}'/>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css'/>

    <link rel="shortcut icon" type="image/x-icon" href="{{asset('img/favicon.png')}}">

    <!-- lightgallery -->
    <link href="https://cdn.rawgit.com/sachinchoolur/lightgallery.js/master/dist/css/lightgallery.css" rel="stylesheet">

    @yield('style')

    <link rel='stylesheet' href='{{asset('css/style-page.css')}}'/>
    <link rel='stylesheet' href='{{asset('css/style.css')}}'/>
    <link rel='stylesheet' href='{{asset('css/newsletter.css')}}'/>

    <!--version six now aviliable -->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <link rel="stylesheet" href="{{ asset('assets/sweetalert/sweetalert2.min.css') }}" />
    <script src="{{ asset('assets/sweetalert/sweetalert2.min.js') }}"></script>
</head>

<body data-color="theme-6" class="noborder" style="padding: 0">



{{--inscrire form--}}
<div class="modal fade user-new animate" data-backdrop="true" tabindex="-1" role="dialog"
     aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">@lang('generate.new') @lang('generate.customer') ?</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="container">
                    <h4> @lang('generate.createUrs') @lang('generate.now') !</h4>
                    <form class="f-login-form" action="{{route('customer.created')}}" method="post">
                        @csrf
                        <div class="row">
                            <div class="col-xs-12 col-sm-6">
                                <div class="form-group">
                                    <input type="text"
                                           placeholder="{{ __('generate.enter') }} {{ __('generate.firstname') }}"
                                           class="form-control border border-dark{{ $errors->has('name') ? ' is-invalid' : '' }}"
                                           value="{{old('name')}}" name="name">
                                    @if ($errors->has('name'))
                                        <span class="invalid-feedback" role="alert" style="color: red">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-6">
                                <div class="form-group">
                                    <input type="text"
                                           placeholder="{{ __('generate.enter') }} {{ __('generate.lastname') }}"
                                           class="form-control border border-dark{{ $errors->has('lastName') ? ' is-invalid' : '' }}"
                                           value="{{old('lastName')}}" name="lastName">
                                    @if ($errors->has('lastName'))
                                        <span class="invalid-feedback" role="alert" style="color: red">
                                        <strong>{{ $errors->first('lastName') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <input type="text" placeholder="{{ __('generate.enter') }} Email"
                                   class="form-control border border-dark{{ $errors->has('email') ? ' is-invalid' : '' }}"
                                   value="{{old('email')}}" name="email">
                            @if ($errors->has('email'))
                                <span class="invalid-feedback" role="alert" style="color: red">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                            @endif
                        </div>

                        <div class="form-group">
                            <input type="password" placeholder="{{ __('generate.password') }}"
                                   class="form-control border border-dark{{ $errors->has('password') ? ' is-invalid' : '' }}"
                                   value="{{old('password')}}" name="password">
                            @if ($errors->has('password'))
                                <span class="invalid-feedback" role="alert" style="color: red">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                            @endif
                        </div>
                        <div class="form-group">
                            <input type="text" placeholder="{{ __('generate.enter') }} {{ __('generate.phone') }}"
                                   class="form-control border border-dark{{ $errors->has('tel') ? ' is-invalid' : '' }}"
                                   value="{{old('tel')}}" name="tel">
                            @if ($errors->has('tel'))
                                <span class="invalid-feedback" role="alert" style="color: red">
                                        <strong>{{ $errors->first('tel') }}</strong>
                                    </span>
                            @endif
                        </div>

                        <input type="submit" class="btn bg-my btn-block rounded-0 mb-2"
                               value="{{ __('generate.signUp') }}">


                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
{{--/inscrire form--}}



@include('base.partials._header')


@yield('body')


@include('base.partials._contact-us')


@include('base.partials._newsletter')

@include('base.partials._follow-us')

@include('base.partials._footer')







<!-- jquery -->
<script src="https://code.jquery.com/jquery-3.1.0.js" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" crossorigin="anonymous"></script>

<!-- Bootstrap -->
<script src="{{asset('assets/bootstrap/js/bootstrap.min.js')}}"></script>
<!--daterangepicker-->
<script src="{{asset('assets/daterangepicker/moment.min.js')}}"></script>
<script src="{{asset('assets/daterangepicker/daterangepicker.js')}}"></script>
@yield('js')

<!-- script -->
<script src="{{asset('js/script.js')}}"></script>
<script src="{{asset('js/header-scroll.js')}}"></script>

<script>
    @if(session()->has('alert'))
        toastr.error('{{session()->get('alert')}}', 'Error');
    @endif

    @if(session()->has('success'))
        toastr.success('{{session()->get('success')}}', 'Success');
    @endif

    @if ($errors->has('email'))
        toastr.error('{{$errors->first('email')}}', 'Error');
    @endif

    /* DatePecker */
    d = new Date();
    var year = d.getFullYear();
    var month = d.getMonth();
    var day = d.getDate();
    maxDate = getFormatDate(new Date(year + 1, month, day));

    jQuery('.date-as').daterangepicker({
        "singleDatePicker": true,
        "showDropdowns": true,
        "autoApply": true,
        "opens": "center",
        "minDate": new Date(),
        maxDate: maxDate,

        "locale": {
            "format": "DD/MM/YYYY",
            "customRangeLabel": "Custom",
            "weekLabel": "W",
            "daysOfWeek": [
                "{{ __('generate.Su') }}",
                "{{ __('generate.Mo') }}",
                "{{ __('generate.Tu') }}",
                "{{ __('generate.We') }}",
                "{{ __('generate.Th') }}",
                "{{ __('generate.Fr') }}",
                "{{ __('generate.Sa') }}"
            ],
            "monthNames": [
                "{{ __('generate.January') }}",
                "{{ __('generate.February') }}",
                "{{ __('generate.March') }}",
                "{{ __('generate.April') }}",
                "{{ __('generate.May') }}",
                "{{ __('generate.June') }}",
                "{{ __('generate.July') }}",
                "{{ __('generate.August') }}",
                "{{ __('generate.September') }}",
                "{{ __('generate.October') }}",
                "{{ __('generate.November') }}",
                "{{ __('generate.December') }}"
            ],
            "firstDay": 1
        },
    });

    function getFormatDate(d) {
        return d.getDate() + '/' + d.getMonth() + 1 + '/' + d.getFullYear()
    }

    $(".date-ar").daterangepicker({
        "showDropdowns": true,
        "autoApply": true,
        "minDate": new Date(),
        maxDate: maxDate,
        minSpan: {
            days: 2
        },
        /*moment($('.date-ar').val(), "MMMM D, YYYY").add(1, 'd')*/
        "locale": {
            "format": "DD/MM/YYYY",
            "separator": " - ",
            "fromLabel": "From",
            "toLabel": "To",
            "customRangeLabel": "Custom",
            "weekLabel": "W",
            "daysOfWeek": [
                "{{ __('generate.Su') }}",
                "{{ __('generate.Mo') }}",
                "{{ __('generate.Tu') }}",
                "{{ __('generate.We') }}",
                "{{ __('generate.Th') }}",
                "{{ __('generate.Fr') }}",
                "{{ __('generate.Sa') }}"
            ],
            "monthNames": [
                "{{ __('generate.January') }}",
                "{{ __('generate.February') }}",
                "{{ __('generate.March') }}",
                "{{ __('generate.April') }}",
                "{{ __('generate.May') }}",
                "{{ __('generate.June') }}",
                "{{ __('generate.July') }}",
                "{{ __('generate.August') }}",
                "{{ __('generate.September') }}",
                "{{ __('generate.October') }}",
                "{{ __('generate.November') }}",
                "{{ __('generate.December') }}"
            ],
            "firstDay": 1
        },
        "showCustomRangeLabel": false,
        "opens": "center"
    });

    $(".date-ar-flight").daterangepicker({
        "showDropdowns": true,
        "autoApply": true,
        "minDate": new Date(),
        maxDate: maxDate,
        minSpan: {
            days: 1
        },
        "locale": {
            "format": "DD/MM/YYYY",
            "separator": " - ",
            "fromLabel": "From",
            "toLabel": "To",
            "customRangeLabel": "Custom",
            "weekLabel": "W",
            "daysOfWeek": [
                "{{ __('generate.Su') }}",
                "{{ __('generate.Mo') }}",
                "{{ __('generate.Tu') }}",
                "{{ __('generate.We') }}",
                "{{ __('generate.Th') }}",
                "{{ __('generate.Fr') }}",
                "{{ __('generate.Sa') }}"
            ],
            "monthNames": [
                "{{ __('generate.January') }}",
                "{{ __('generate.February') }}",
                "{{ __('generate.March') }}",
                "{{ __('generate.April') }}",
                "{{ __('generate.May') }}",
                "{{ __('generate.June') }}",
                "{{ __('generate.July') }}",
                "{{ __('generate.August') }}",
                "{{ __('generate.September') }}",
                "{{ __('generate.October') }}",
                "{{ __('generate.November') }}",
                "{{ __('generate.December') }}"
            ],
            "firstDay": 1
        },
        "showCustomRangeLabel": false,
        "opens": "center"
    });

    $("#newAccount").click(function () {
        $(".user-login").modal('hide');
        $(".user-new").modal();
    })
    $(".submit").click(function () {
        $(".btn").attr("disabled", true);
        id = $(this).data("submit");
        $("#" + id).submit();
    });
</script>

<!-- lightgallery -->
<script src="{{ asset('js/lightgallery.js')}}"></script>
<script> lightGallery(document.getElementById('lightgallery')) </script>

<!-- end Section-->

</body>
</html>
