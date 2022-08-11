@extends('base.front')
@section('style')
@endsection
@section('body')
<div class="container" style="margin-top: 170px;">
    <div class="row">

        <div class="col-xs-12 col-sm-6">
            <div class="f-login-content">
                <div class="f-login-header">
                    <div class="f-login-title color-dr-dark-2">{{ __('generate.alreadyCustomer') }} ?</div>
                    <div class="f-login-desc color-grey">{{ __('generate.pleaseLogin') }}</div>
                </div>
                <form class="f-login-form" action="{{route('customer.login')}}" method="post">
                    @csrf
                    <div class="input-style-1 b-50 type-2 color-5">
                        <input type="text"  class="form-control {{ $errors->has('email') ? ' is-invalid' : '' }}"
                            value="{{old('email')}}"
                            name="email" placeholder="{{ __('generate.username') }}">
                        @if ($errors->has('email'))
                            <span class="invalid-feedback" role="alert" style="color: red">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                        @endif
                    </div>
                    <div class="input-style-1 b-50 type-2 color-5">
                        <input type="password" class="form-control {{ $errors->has('password') ? ' is-invalid' : '' }}"
                            value="{{ old('password')}}"
                            name="password" placeholder="{{ __('generate.password') }}">
                        @if ($errors->has('password'))
                            <span class="invalid-feedback" role="alert" style="color: red">
                                            <strong>{{ $errors->first('password') }}</strong>
                                        </span>
                        @endif
                    </div>
                    <div class="checkbox-group">

                        <div class="input-entry color-3">
                            <input class="checkbox-form" id="text-2" type="checkbox" name="checkbox" value="climat control">
                            <label class="clearfix" for="text-2">
                                <span class="sp-check"><i class="fa fa-check"></i></span>
                                <span class="checkbox-text">{{ __('generate.remember') }}</span>
                            </label>
                        </div>
                    </div>
                    <input type="submit" class="login-btn c-button full b-50 bg-dr-blue-2 hv-dr-blue-2-o" value="{{ __('generate.connectionLogin') }}">
                    <div class="row">
                        <div class="col-xs-12 col-sm-6">
                            <a href="{{ route('auth.socialite',['provider'=>'facebook']) }}" class="c-button full b-50 bg-blue-7 hv-blue-7-o"><i class="fa fa-facebook fa-lg"></i> <span>login via facebook</span></a>
                        </div>
                        <div class="col-xs-12 col-sm-6 buttons-wrap">
                            <a href="{{ route('auth.socialite',['provider'=>'google']) }}" class="c-button full b-50 bg-5"><i class="fa fa-google fa-lg"></i> <span>login via google</span></a>
                        </div>
                    </div>

                </form>
            </div>
        </div>

        <div class="col-xs-12 col-sm-6">
            <div class="f-login-content">
                <div class="f-login-header">
                    <div class="f-login-title color-dr-dark-2">{{ __('generate.new') }} {{ __('generate.customer') }} ?</div>
                    <div class="f-login-desc color-grey"> {{ __('generate.createUrs') }} {{ __('generate.now') }} ! </div>
                </div>

                <form  class="f-login-form" action="{{route('customer.created')}}" method="post">
                    @csrf
                    <div class="row">
                        <div class="col-xs-12 col-sm-6">
                            <div class="input-style-1 b-50 type-2 color-5">
                                <input type="text" placeholder="{{ __('generate.enter') }} {{ __('generate.firstname') }}"
                                    class="form-control {{ $errors->has('name') ? ' is-invalid' : '' }}"
                                        value="{{old('name')}}" name="name">
                                @if ($errors->has('name'))
                            <span class="invalid-feedback" role="alert" style="color: red">
                                            <strong>{{ $errors->first('name') }}</strong>
                                        </span>
                        @endif
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6">
                            <div class="input-style-1 b-50 type-2 color-5">
                                <input type="text" placeholder="{{ __('generate.enter') }} {{ __('generate.lastname') }}"
                                    class="form-control {{ $errors->has('lastName') ? ' is-invalid' : '' }}"
                                        value="{{old('lastName')}}" name="lastName">
                                @if ($errors->has('lastName'))
                                    <span class="invalid-feedback" role="alert" style="color: red">
                                            <strong>{{ $errors->first('lastName') }}</strong>
                                        </span>
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="input-style-1 b-50 type-2 color-5">
                        <input type="text" placeholder="{{ __('generate.enter') }} Email"
                            class="form-control {{ $errors->has('email') ? ' is-invalid' : '' }}"
                                value="{{old('email')}}" name="email">
                        @if ($errors->has('email'))
                            <span class="invalid-feedback" role="alert" style="color: red">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                        @endif
                    </div>

                    <div class="input-style-1 b-50 type-2 color-5">
                        <input type="password" placeholder="{{ __('generate.password') }}"
                            class="form-control {{ $errors->has('password') ? ' is-invalid' : '' }}"
                                value="{{old('password')}}" name="password">
                        @if ($errors->has('password'))
                            <span class="invalid-feedback" role="alert" style="color: red">
                                            <strong>{{ $errors->first('password') }}</strong>
                                        </span>
                        @endif
                    </div>
                    <div class="input-style-1 b-50 type-2 color-5">
                        <input type="text" placeholder="{{ __('generate.enter') }} {{ __('generate.phone') }}"
                            class="form-control {{ $errors->has('tel') ? ' is-invalid' : '' }}"
                                value="{{old('tel')}}" name="tel">
                        @if ($errors->has('tel'))
                            <span class="invalid-feedback" role="alert" style="color: red">
                                            <strong>{{ $errors->first('tel') }}</strong>
                                        </span>
                        @endif
                    </div>

                    <input type="submit" class="login-btn c-button full b-50 bg-dr-blue-2 hv-dr-blue-2-o" value="{{ __('generate.signUp') }}">
                    <div class="row">
                        <div class="col-xs-12 col-sm-6">
                            <a href="{{ route('auth.socialite',['provider'=>'facebook']) }}" class="c-button full b-50 bg-blue-7 hv-blue-7-o"><i class="fa fa-facebook fa-lg"></i> <span>login via facebook</span></a>
                        </div>
                        <div class="col-xs-12 col-sm-6 buttons-wrap">
                            <a href="{{ route('auth.socialite',['provider'=>'google']) }}" class="c-button full b-50 bg-5"><i class="fa fa-google fa-lg"></i> <span>login via google</span></a>
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>
@endsection
@section('js')

@endsection
