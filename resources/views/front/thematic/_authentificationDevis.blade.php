 <!-- authentification -->
 <div class="col-md col-12 p-3 mx-md-4 mx-auto" style="background-color: #f3f2ed">
    <h2 class="text-center bold color-blue fs-14 mb-4 mt-2">@lang('generate.alreadyMembre') ?</h2>
    <p class="color-blue fs-12">
        @lang('generate.contactAndwin')
    </p>

    <div>

        <div class="form-group">
            <input type="text" id="emailLogin"
                class="form-control {{ $errors->has('email') ? ' is-invalid' : '' }}"
                value="{{old('email')}}"
                name="email" placeholder="Identifiant ou e-mail">

        </div>
        <div class="form-group">
            <input type="password" id="passwordLogin"
                class="form-control {{ $errors->has('password') ? ' is-invalid' : '' }}"
                value="{{ old('password')}}"
                name="password" placeholder="Mot de passe">
        </div>
        <div class="form-group">
            <input type="button" class="btn bg-my btn-block rounded-0 mb-2" id="submitLogin"
                value="Se connecter">
        </div>

        <div class="custom-control custom-checkbox ">
            <input type="checkbox" class="custom-control-input" id="souvenirMoi">
            <label class="custom-control-label fs-14 color-blue" for="souvenirMoi" style="font-weight: 400; line-height: 25px;">
                @lang('generate.remember')
            </label>
        </div>

        <div class="mt-4">
            <a href="#" style="text-decoration: underline;" class="color-blue fs-14">
                @lang('generate.forgotPassword') ?
            </a>
        </div>

    </div>

    <p class="color-blue fs-12 text-center" style="margin-top: 25px">
        @lang('generate.contactWith') :
    </p>
    <div>
        <a href="{{route('auth.socialite',['provider'=>"facebook"])}}" class="btn bg-blue btn-block rounded-0 mb-2" style="color: white">
            <i class="fab fa-facebook-f fa-social pr-2"></i> Facebook </a>
    </div>
    <div>
        <a href="{{ route('auth.socialite',['provider'=>'google']) }}" class="btn bg-blue btn-block rounded-0 mb-2" style="color: white">
            <i class="fab fa-google fa-social pr-2" style="position: relative; left: -10px;"></i> <span  style="position: relative; left: -12px">Google</span> </a>
    </div>


</div>
<!-- /authentification -->
