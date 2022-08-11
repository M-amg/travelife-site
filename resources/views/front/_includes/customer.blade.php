<!-- Coordonnées -->
<section class="box-shadow p-3 mb-5">
    <p class="title-card-flight">@lang('generate.enterInfo')</p>

    <div class="d-flex justify-content-start mb-2 mt-4">
        <span class="fw-normal mr-md-5 mr-0">@lang('generate.civility') *</span>
        <div class="custom-control custom-radio">
            <input type="radio" class="custom-control-input" checked id="mrCustomer"
                    name="civility" value="Mr">
            <label class="custom-control-label" for="mrCustomer">M.</label>
        </div>
        <div class="custom-control custom-radio">
            <input type="radio" class="custom-control-input" id="mmeCustomer"
                    name="civility" value="Mme">
            <label class="custom-control-label" for="mmeCustomer">Mme</label>
        </div>
        <div class="custom-control custom-radio">
            <input type="radio" class="custom-control-input" id="msCustomer"
                    name="civility" value="Mlle">
            <label class="custom-control-label" for="msCustomer">Mlle</label>
        </div>
    </div>
    <div class="row">
        <div class="form-group col-md col-12">
            <input type="text" required id="Prenom-passager-coordonne" placeholder="@lang('generate.firstname') *" autocomplete="off"
                class="form-control rounded-0 coord-firstName wizard-required"
                name="firstName"
                @if(Auth::guard("customer")->check())
                value="{{ Auth::guard('customer')->user()->firstName }}" @else value="" @endif
                >
        </div>
        <div class="form-group col-md col-12 pl-md-0">
            <input type="text" required id="nom-passager"
                class="form-control rounded-0 coord-lastName wizard-required" placeholder="@lang('generate.lastname') *" autocomplete="off"
                name="lastName"
                @if(Auth::guard("customer")->check())
                value="{{ Auth::guard('customer')->user()->lastName }}" @else value="" @endif>

        </div>
        <div class="form-group col-md col-12 pl-md-0">
            <input type="email" required id="email"
                class="form-control rounded-0 color-blue wizard-required"
                name="email" placeholder="E-mail *" autocomplete="off"
                @if(Auth::guard("customer")->check())
                value="{{ Auth::guard('customer')->user()->email }}" @else value="" @endif
                >
        </div>
        <div class="form-group col-md col-12 pl-md-0">
            <input type="tel" required id="tel" class="form-control rounded-0 color-blue wizard-required" name="tel" placeholder="Tél. *" autocomplete="off" 
            @if(Auth::guard("customer")->check())
                    value="{{ Auth::guard('customer')->user()->tel }}" @else value="" @endif>
        </div>
    </div>

    <div class="d-flex justify-content-between">
        <div>@lang('generate.forWho') ?</div>
        <div class="custom-control custom-radio">
            <input type="radio" class="custom-control-input principal" value="1" checked
                name="isPrincipalCustomer" id="principal">
            <label class="custom-control-label fw-normal color-blue" for="principal">
                @lang('generate.mainCustomer')</label>
        </div>
        <div class="custom-control custom-radio">
            <input type="radio" class="custom-control-input principal" value="2"
                name="isPrincipalCustomer" id="notPrincipal">
            <label class="custom-control-label fw-normal color-blue" for="notPrincipal">
                @lang('generate.forOther')</label>
        </div>
    </div>
</section>