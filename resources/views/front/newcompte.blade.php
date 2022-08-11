
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

            @isset($slides)
            @foreach($slides as $key => $slide)
                <div class="item">
                    <img class="item-{{$key}} img-fluid w-100" src="{{config('services.pathImg').$slide->picture}}" title="" style="height: 500px;"/>
                    <div class="container w-100 d-none d-md-block div-text-slider" style="margin-top: 80px;">
                        <h1 class="text-center w-80 pt-4 bold" style="color: white; margin-top: 100px">{{$slide->title}}</h1>
                    </div>
                </div>
            @endforeach
            @endisset

        </div>
    </header>
    <!--/header -->

    {{--inscrire form--}}
    <div id="user-new-compte" class="container mt-5">
        <div class="row">
            <div class="col-md-6">
                <h2 class="jBlue">@lang('generate.createUrs')</h2>
                <div class="new-compte my-4">
                    <form class="f-login-form" action="{{route('customer.created')}}" method="post">
                        @csrf
                        <div class="row">
                            <div class="form-group col-md-6">
                                <input type="text"
                                       placeholder="Prénom"
                                       class="form-control {{ $errors->has('name') ? ' is-invalid' : '' }}"
                                       value="{{old('name')}}" name="name">
                                @if ($errors->has('name'))
                                    <span class="invalid-feedback" role="alert" style="color: red">
                                    <strong>{{ $errors->first('name') }}</strong>
                                </span>
                                @endif
                            </div>
                            <div class="form-group col-md-6">
                                <input type="text"
                                       placeholder="@lang('generate.lastname')"
                                       class="form-control {{ $errors->has('name') ? ' is-invalid' : '' }}"
                                       value="{{old('name')}}" name="lastName">
                                @if ($errors->has('name'))
                                    <span class="invalid-feedback" role="alert" style="color: red">
                                    <strong>{{ $errors->first('name') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <input type="text" placeholder="@lang('generate.adresse') e-mail"
                                   class="form-control {{ $errors->has('email') ? ' is-invalid' : '' }}"
                                   value="{{old('email')}}" name="email">
                            @if ($errors->has('email'))
                                <span class="invalid-feedback" role="alert" style="color: red">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                            @endif
                        </div>

                        <div class="form-group">
                            <input type="password"
                                   class="form-control {{ $errors->has('password') ? ' is-invalid' : '' }}"
                                   value="{{ old('password')}}"
                                   name="password" placeholder="Mot de passe">
                        </div>

                        <div class="form-group">
                            <input type="password"
                                   class="form-control {{ $errors->has('password') ? ' is-invalid' : '' }}"
                                   value="{{ old('password')}}"
                                   name="password" placeholder="Confirmez votre mot de passe">
                        </div>



                        <div class="form-group">
                            <input type="submit" class="btn bg-my btn-block rounded-0 mb-2"
                                   value="Créer un compte">
                        </div>
                    </form>
                </div>
                <p class="d-flex justify-content-center align-items-center mb-4 mt-2">
                    @lang('generate.haveUanAcc')
                    {{-- <a href="#" id="newAccount"> <strong> Inscrivez-vous </strong></a> </p> --}}
                    <a href="{{ route('front.mon.compte') }}"> <strong> @lang('generate.login') </strong></a> </p>

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




