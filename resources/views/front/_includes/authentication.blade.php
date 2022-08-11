
    <!--New Account-->
    <div class="py-2 px-3">
        <form id="sign-in">

            <div id="user-login">

                <div class="mon-compte my-2">
                    <form id="sign-in">
                        @csrf
                        <div class="form-group">
                            <input type="email"
                                    value="{{old('emailLogin')}}" required id="emailLogin"
                                    class="form-control {{ $errors->has('email') ? ' is-invalid' : '' }}"
                                    name="email" placeholder="Identifiant ou e-mail">
                        </div>

                        <div class="form-group">
                            <input type="password" required id="passwordLogin"
                                    class="form-control {{ $errors->has('password') ? ' is-invalid' : '' }}"
                                    value="{{ old('password')}}"
                                    name="password" placeholder="Mot de passe">
                        </div>



                        <div class="form-group">
                            <div class="row">
                                <div class="col-md col-12 pl-4">
                                    <div class="custom-control custom-checkbox ">
                                        <input type="checkbox" class="custom-control-input" id="SansEscale">
                                        {{-- <label class="custom-control-label" for="SansEscale">
                                            @lang('generate.remember')
                                        </label> --}}
                                        <label class="custom-control-label" for="SansEscale" style="font-size: 14px; font-weight: 400; line-height: 25px;">
                                            @lang('generate.remember')
                                        </label>
                                    </div>
                                </div>
                                <div class="col-md col-12 pr-4" style="text-align: right;">
                                    <a href="#" style="text-decoration: underline;">@lang('generate.forgotPassword') ?</a>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <input type="submit" class="btn bg-my btn-block rounded-0 mb-2"
                                    value="Se connecter">
                        </div>

                        <div class="form-group">
                            <a href="{{route('auth.socialite',['provider'=>"facebook"])}}"
                                class="btn btn-block rounded-0 mb-2"
                                style="padding: 7px 25px; background: #4267b2; color: white;"><i class="fab fa-facebook-f"></i>
                                <span style="text-transform: initial;">Facebook</span></a>
                        </div>
                    </form>
                </div>
                <p class="d-flex justify-content-center align-items-center mb-4 mt-2">
                    @lang('generate.dontHaveAccYet') ?
                    {{-- <a href="#" id="newAccount"> <strong> @lang('generate.inscrivez-vous') </strong></a> </p> --}}
                    <a  data-toggle="modal" data-target="#inscrireModal"> <strong style="cursor:pointer;"> @lang('generate.register')</strong></a> </p>

            </div>

        </form>

        <form id="sign-up" method="post" class="d-none">


            <div class="row">
                <div class="form-group col-md col-12">
                    <label class="text-dark" for="nom">@lang('generate.lastname')</label>
                    <input type="text" required id="name"
                           class=" border-dark form-control rounded-0"
                           name="name">
                </div>
                <div class="form-group col-md col-12">
                    <label class="text-dark" for="Prenom">@lang('generate.firstname')</label>
                    <input type="text" required id="lastName"
                           class=" border-dark form-control rounded-0"
                           name="lastName">
                </div>
            </div>
            <div class="row">
                <div class="form-group col-md col-12">
                    <label class="text-dark" for="email-in">Email</label>
                    <input type="email" required id="email"
                           class="border-dark form-control rounded-0"
                           name="email">
                </div>
                <div class="form-group col-md col-12">
                    <label class="text-dark" for="password-in">@lang('generate.password2')</label>
                    <input type="password" required id="password"
                           class=" border-dark form-control rounded-0" name="password">
                </div>
            </div>
            <div class=" row mb-3 ">
                <div class="col-12 col-md">
                    <button type="button" id="submitCreate" class="btn bg-my rounded-0 fs-14">@lang('generate.createAcc')
                    </button>
                </div>
                <div class="col-12 col-md">
                    <a href="{{route('auth.socialite',['provider'=>"facebook"])}}"
                       class="btn btn-fb rounded-0 fs-14"
                       style="padding: 7px 25px;"><i class="fab fa-facebook-f"></i>
                        <span style="text-transform: initial;"> Facebook</span></a>
                </div>
                <div class="col-12 col-md text-right">
                    <a href="#" class="btn btn-link rounded-0 account fs-14">@lang('generate.signIn')</a>
                </div>


            </div>
        </form>
    </div>
    <!--/New Account-->

