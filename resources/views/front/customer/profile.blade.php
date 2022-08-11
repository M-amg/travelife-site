@extends('base.front')
@section('style')
@endsection
@section('body')

@include('front.customer.userheader')


    <div class="container mt-5" id="profiles">

        <div class="row">
            <div class="col-12">
                <div class="row">
                    <div class="col-md-4 py-4 mb-1 col bg-my  text-center">
                        <p class="m-0 d-flex justify-content-center align-items-center">
                            <i class="far fa-user-circle fa-3x mr-3"></i><strong>@lang('generate.my') @lang('generate.profile')</strong></p>
                    </div>
                    <div class="col-md-4 py-4 mb-1 col bg-lightgrey text-center text-dark">
                        <a class="text-dark" href="{{route('customer.reservationList')}}">
                            <p class="m-0 d-flex justify-content-center align-items-center">
                                <i class="fas fa-briefcase fa-3x mr-3"></i><strong>@lang('generate.mes') @lang('generate.reservations')</strong></p>
                        </a>
                    </div>
                    <div class="col-md-4 py-4 mb-1 col bg-lightgrey text-center">
                        <a class="text-dark" href="{{route('customer.logout')}}">
                        <p class="m-0 d-flex justify-content-center align-items-center">
                            <i class="fas fa-sign-out-alt fa-3x mr-3"></i><strong>@lang('generate.logout')</strong></p>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-12 mt-5 px-0">

                <div class="bg-white p-4 px-0 mb-5">
                    <form id="basic-form"
                          action="{{route('customer.updated',['id'=>Auth::guard('customer')->user()->id])}}"
                          method="post">
                        @csrf
                        <div>
                            <h5 class="modal-title">@lang('generate.editProfil')</h5>
                            <hr>
                            <section>

                                <div class="form-group row">
                                    <label class="col-lg-2 control-label " for="Civilite">@lang('generate.civility')
                                        *</label>
                                    <div class="col-lg-4">
                                        <select class="form-control border" id="Civilite"
                                                name="Civilite">
                                            <option value="">@lang('generate.selectCivility')...
                                            </option>
                                            <option value="Mr"
                                                @if(Auth::guard('customer')->user()->civility=="Mr") selected @endif >
                                                M.
                                            </option>
                                            <option value="Mme"
                                                @if(Auth::guard('customer')->user()->civility=="Mme") selected @endif >
                                                Mme
                                            </option>
                                            <option value="Mlle"
                                                @if(Auth::guard('customer')->user()->civility=="Mlle") selected @endif >
                                                Mlle
                                            </option>
                                        </select>
                                    </div>
                                    <label class="col-lg-2 control-label " for="address">@lang('generate.dob') *</label>
                                    <div class="col-lg-4">
                                        <input class="form-control border"
                                               name="dob" id="dob" type="date"
                                               @if(Auth::guard('customer')->user()->dob)
                                               value="{{ Auth::guard('customer')->user()->dob }}"
                                               @endif
                                               placeholder="ex-DD/MM/YYYY" required="">

                                    </div>

                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-2 control-label " for="firstName">@lang('generate.firstname')
                                        *</label>
                                    <div class="col-lg-4">
                                        <input class="form-control border required" id="firstName"
                                               name="firstName"
                                               value="{{ Auth::guard('customer')->user()->firstName }}"
                                               type="text">
                                    </div>
                                    <label class="col-lg-2 control-label " for="lastName">@lang('generate.lastname') *</label>
                                    <div class="col-lg-4">
                                        <input class="form-control border required" id="lastName"
                                               name="lastName"
                                               value="{{ Auth::guard('customer')->user()->lastName }}"
                                               type="text">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-2 control-label " for="address">@lang('generate.adresse')
                                        *</label>
                                    <div class="col-lg-10">
                                        <textarea id="address" name="address"
                                                  class="form-control  border">{{ Auth::guard('customer')->user()->address }}</textarea>
                                    </div>

                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-2 control-label" for="email">Email
                                        *</label>
                                    <div class="col-lg-10">
                                        <input id="email" name="email" type="text"
                                               value="{{ Auth::guard('customer')->user()->email }}"
                                               class="required border form-control">
                                    </div>
                                </div>
                                <div class="form-group row ">
                                    <label class="col-lg-2 control-label " for="password">
                                        @lang('generate.password2') *</label>
                                    <div class="col-lg-10">
                                        <input id="password" name="password" type="password"
                                               class="border form-control">

                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-lg-2 control-label" for="telCustomer">@lang('generate.phone')
                                        *</label>
                                    <div class="col-lg-10">
                                        <input id="telCustomer" name="tel" type="text"
                                               value="{{ Auth::guard('customer')->user()->tel }}"
                                               class="border form-control">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-2 control-label " for="telCustomer2">@lang('generate.phone')
                                        2</label>
                                    <div class="col-lg-10">
                                        <input id="telCustomer2" name="tel2" type="text"
                                               value="{{ Auth::guard('customer')->user()->tel2 }}"
                                               class="border form-control">
                                    </div>
                                </div>

                            </section>
                            <div class="text-right">
                                <input type="submit" class="btn bg-my rounded-0" style="color: #fff; padding: 8px 18px; font-size: 15px;" value="{{ __('generate.save') }}">
                            </div>

                        </div>
                    </form>


                </div><!-- end panel-body -->

            </div>
        </div>
    </div>
@endsection
@section('js')
    <script src="{{asset('assets/js/plugins/bootstrap-datepicker/bootstrap-datepicker.min.js')}}"></script>
    <script>
        $("#modifier").hide();
        $("#profile").show();
        $("#bottonModifier").click(function () {
            $("#modifier").show();
            $("#profile").hide();
        });
    </script>

@endsection
