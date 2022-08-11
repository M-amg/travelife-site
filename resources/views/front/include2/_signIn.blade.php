
@if(!Auth::guard("customer")->check())
    <div class="d-flex justify-content-around align-items-center mb-5" 
        style="background-color: #484f56; padding: 18px; border-radius: 3px;color: white;">
        <div>
            <p class="mx-auto my-auto text-center">{{ucfirst(strtolower(trans('generate.connectionLogin')))}}</p>
        </div>
        <div>
            <button type="button" class="btn bg-my btn-info-full btn-block" data-toggle="modal" data-target="#exampleModal">
                @lang('generate.signIn')
            </button>
        </div>
    </div>
@endif