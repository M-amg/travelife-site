
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

    <div id="user-login" class="container mt-5">
        <div class="row">
            <div class="col-md-6">
                <h2 class="jBlue">@lang('generate.my') @lang('generate.acc')</h2>
                <div class="mon-compte my-4">
                    <form action="{{route('customer.login')}}" method="post">
                        @csrf
                        <div class="form-group">
                            <input type="text"
                                   class="form-control {{ $errors->has('email') ? ' is-invalid' : '' }}"
                                   value="{{old('email')}}"
                                   name="email" placeholder="Identifiant ou e-mail">

                        </div>
                        <div class="form-group">
                            <input type="password"
                                   class="form-control {{ $errors->has('password') ? ' is-invalid' : '' }}"
                                   value="{{ old('password')}}"
                                   name="password" placeholder="@lang('generate.password2')">
                        </div>

                        <div class="form-group">
                            <div class="d-flex justify-content-between">
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="souvenirMoi">

                                    <label class="custom-control-label" for="souvenirMoi" style="font-size: 14px; font-weight: 400; line-height: 25px;">
                                        @lang('generate.remember')
                                    </label>
                                </div>
                                <div>
                                    <a href="{{ route('front.reset.pwd') }}" style="text-decoration: underline;">@lang('generate.forgotPassword') ?</a>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <input type="submit" class="btn bg-my btn-block rounded-0 mb-2"
                                   value="Se connecter">
                        </div>
                    </form>
                </div>
                <p class="d-flex justify-content-center align-items-center mb-4 mt-2">
                    @lang('generate.dontHaveAccYet') ?
                    <a href="{{ route('front.new.compte') }}"> <strong> {{ ucfirst(strtolower(trans('generate.signUp'))) }} </strong></a> </p>
            </div>
            <div class="col-md-6">
                <h4 class="mt-5">@lang('generate.orChoice') :</h4>
                <div>
                    <a href="{{ route('auth.socialite',['provider'=>'google']) }}"  class="btn btn-outline-warning">
                        <i class="fab fa-google fa-social"></i>
                        <span>@lang('generate.login') @lang('generate.with') Google</span>
                    </a>
                </div>

                <div>
                    <a href="{{route('auth.socialite',['provider'=>"facebook"])}}" class="btn btn-outline-warning">
                        <i class="fab fa-facebook-f fa-social"></i>
                        @lang('generate.login') @lang('generate.with') Facebook</a>
                </div>
            </div>
        </div>

    </div>



    {{--connection form--}}
<div class="modal fade user-login animate" data-backdrop="true" tabindex="-1" role="dialog"
aria-labelledby="myLargeModalLabel" aria-hidden="true">
<div class="modal-dialog modal-lg">
   <div class="modal-content">
       <div class="modal-header">
           <h5 class="modal-title">@lang('generate.haveUanAcc')</h5>
           <button type="button" class="close" data-dismiss="modal" aria-label="Close">
               <span aria-hidden="true">&times;</span>
           </button>
       </div>
       <div class="modal-body">
           <div class="container">
               <h4> @lang('generate.login') !</h4>
               <form action="{{route('customer.login')}}" method="post">
                   @csrf
                   <div class="form-group">
                       <input type="text"
                              class="form-control border border-dark{{ $errors->has('email') ? ' is-invalid' : '' }}"
                              value="{{old('email')}}"
                              name="email" placeholder="{{ __('generate.username') }}">

                   </div>
                   <div class="form-group">
                       <input type="password"
                              class="form-control border border-dark{{ $errors->has('password') ? ' is-invalid' : '' }}"
                              value="{{ old('password')}}"
                              name="password" placeholder="{{ __('generate.password') }}">

                   </div>

                   <div class="form-group">
                       <div class="custom-control custom-checkbox ">
                           <input type="checkbox" class="custom-control-input" id="SansEscale">
                           <label class="custom-control-label" for="SansEscale">{{ __('generate.remember')
                               }}</label>
                       </div>
                   </div>
                   <div class="form-group">
                       <input type="submit" class="btn bg-my btn-block rounded-0 mb-2"
                              value="Connexion">
                   </div>
                   <div class="form-group">
                       <a href="{{route('auth.socialite',['provider'=>"facebook"])}}"
                          class="btn btn-fb btn-block rounded-0 mb-2"
                          style="margin-top: 25px;    padding: 10px 25px 11px; font-size: 14px !important"><i
                                   class="fa fa-facebook-official" aria-hidden="true"></i>
                           <span style="text-transform: initial;"> Facebook</span></a>
                   </div>
                   <p class="d-flex justify-content-center align-items-center mb-0"> @lang('generate.new') @lang('generate.on') jambotours.com ?
                       <a href="#" id="newAccount" class="btn btn-link p-0"> <strong> @lang('generate.createUrs')</strong></a>
               </form>
           </div>
       </div>
   </div>
</div>
</div>
{{--/connection form--}}





@endsection




