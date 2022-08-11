
@extends('base.front')
@section('style')

    <link rel='stylesheet' href='{{asset('assets/OwlCarousel/assets/owl.carousel.css')}}'/>
    <link rel='stylesheet' href='{{asset('assets/OwlCarousel/assets/owl.theme.default.min.css')}}'/>
    <!-- animation -->
    <link rel='stylesheet' href='{{asset('assets/animatecss/animate.css')}}'/>

    <link rel='stylesheet' href='{{asset('assets/daterangepicker/daterangepicker.css')}}'/>
    <link href="https://cdn.jsdelivr.net/npm/select2@4.0.12/dist/css/select2.min.css" rel="stylesheet"/>
@endsection
@section('body')

    <header class="position-relative">
        <div class="owl-carousel owl-theme owl-slid d-none d-md-block">

            @php($slides=\App\models\page\TlSlider::all()->where('property', 'espace-client')->where('status', 1)->take(3))

            @foreach($slides as $key => $slide)
                <div class="item">
                    <img class="item-{{$key}} img-fluid w-100" src="{{config('services.pathImg').$slide->picture}}" title="" style="height: 500px;"/>
                    <div class="container w-100 d-none d-md-block div-text-slider" style="margin-top: 80px;">
                        <h1 class="text-center w-80 pt-4 bold" style="color: white; margin-top: 100px">{{$slide->title}}</h1>
                    </div>
                </div>
            @endforeach

        </div>
    </header>
    <!--/header -->

    {{--inscrire form--}}
    <div id="user-new-compte" class="container mt-5">
        <div class="row">
            <div class="col-md-6">
                <h2 class="jBlue">Réinitialiser le mot de passe.</h2>
                <div class="new-compte my-4">
                    <form class="f-login-form" method="POST" action="{{ route('password.update') }}"  id="Frm_reset">
                        @csrf
                        <input type="hidden" name="token" value="{{ $token }}">
                        <div class="form-group">
                            <input type="text" placeholder="@lang('generate.adresse') e-mail"
                                   class="form-control {{ $errors->has('email') ? ' is-invalid' : '' }}"
                                   value="{{old('email')}}" name="email" id="email">
                            @if ($errors->has('email'))
                                <span class="invalid-feedback" role="alert" style="color: red">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                            @endif
                        </div>
                        <div class="form-group">
                            <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" placeholder="Mot de passe" required>
                            @if ($errors->has('password'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="form-group">
                            <input id="password-confirm" type="password" class="form-control{{ $errors->has('password-confirm') ? ' is-invalid' : '' }}" name="password_confirmation" placeholder="Confirmez votre mot de passe" required>
                            @if ($errors->has('password-confirm'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('password-confirm') }}</strong>
                                </span>
                            @endif
                        </div>

                        <div class="form-group">
                                <input type="submit" class="btn bg-my btn-block rounded-0 mb-2" value="Enregistrer">
                        </div>
                    </form>
                </div>
                <p class="d-flex justify-content-center align-items-center mb-4 mt-2">
                    @lang('generate.haveUanAcc')
                    {{-- <a href="#" id="newAccount"> <strong> Inscrivez-vous </strong></a> </p> --}}
                    <a href="{{ route('front.mon.compte') }}"> <strong> @lang('generate.login') </strong></a>
                </p>
                <p class="d-flex justify-content-center align-items-center mb-4 mt-2">
                    @lang('generate.dontHaveAccYet') ?
                     <a href="{{ route('front.new.compte') }}"> <strong>{{ ucfirst(strtolower(trans('generate.signUp'))) }} </strong></a>
                </p>
            </div>
            <div class="col-md-6">
                <h4 class="mt-5">@lang('generate.orChoice') : </h4>
                <div>
                    <a href="{{ route('auth.socialite',['provider'=>'google']) }}" class="btn btn-outline-warning">
                        <i class="fab fa-google fa-social"></i>
                        <span>@lang('generate.signIn') @lang('generate.with') Google</span>
                    </a>
                </div>
                <div>
                    <a href="{{route('auth.socialite',['provider'=>"facebook"])}}" class="btn btn-outline-warning">
                        <i class="fab fa-facebook-f fa-social"></i>
                        @lang('generate.signIn') @lang('generate.with') Facebook</a>
                </div>
            </div>
        </div>

    </div>
    {{--/inscrire form--}}
@endsection

@section('js')

    <script type="text/javascript">
        $(document).ready(function () {
            // - validation
            if ($('#Frm_reset').length > 0) {
                $('#Frm_reset').validate({
                    rules: {
                        email: {
                            remote: {
                                url: "{{url("customer-varifyEmail")}}",
                                type: "GET",
                                data: {
                                    email: function () {
                                        return $('#email').val();
                                    },
                                }
                            }
                        },
                        password: {
                            equalTo: "#password-confirm"
                        }
                    },
                    messages: {
                        email: {
                            remote: "Email id already registred"
                        },
                        password: {
                            equalTo: "Password is not equal"
                        }
                    },

                    submitHandler: function (form) {

                        form.submit();
                    },
                    errorPlacement: function (error, element) {
                        error.appendTo(element.parent());
                    }
                });
            }
        });
    </script>

@endsection

