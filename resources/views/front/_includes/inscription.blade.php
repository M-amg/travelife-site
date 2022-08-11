
<!--New Account-->
<div class="px-3">

        <div id="user-login">

            <div class="mon-compte my-2">
                <form class="f-login-form" action="{{route('customer.created')}}" method="post">
                    @csrf
                    <div class="form-group">

                        <input type="text" required id="name"
                               class="form-control"
                               name="name" placeholder="@lang('generate.lastname')">
                    </div>
                    <div class="form-group">

                        <input type="text" required id="lastName"
                               class="form-control"
                               name="lastName" placeholder="@lang('generate.firstname')">
                    </div>

                    <div class="form-group">

                        <input type="email" required id="email"
                               class="form-control"
                               name="email"  placeholder="E-mail">
                    </div>
                    <div class="form-group">

                        <input type="password" required id="password"
                               class="form-control"
                               name="password"  placeholder="@lang('generate.password2')">
                    </div>
                    <div class="form-group">

                        <input type="password" required id="password"
                               class="form-control"
                               name="password"  placeholder="@lang('generate.confirmPassword')">
                    </div>
                    <div class="form-group">
                        <input type="submit" class="btn bg-my btn-block rounded-0 mb-2"
                               value="Créer un compte">
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
                @lang('generate.haveUanAcc')
                {{-- <a href="#" id="newAccount"> <strong> @lang('generate.inscrivez-vous') </strong></a> </p> --}}
                <a  data-toggle="modal" data-target="#inscrireModal"> <strong style="cursor: pointer;"> @lang('generate.login')</strong></a> </p>
        </div>


</div>
<!--/New Account-->

