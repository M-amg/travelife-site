<section class="box-shadow p-3 mb-5">
                    
    <input type="hidden" name="payment" id="payment" value="3">
    <div class="py-2  px-md-3  px-1">
        <p class="title-card-flight">@lang('generate.paymentWay')</p>

        @php($paymentListIcon=[3=>"fas fa-credit-card",2=>"fas fa-money-bill",1=>"fas fa-money-check-alt"])
        @php($payments = App\models\TlPayment::all())      
        <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
            @foreach($payments as $key=>$payment)
                @foreach($payment->tlModules()->get() as $key=>$model)
                    @if($model->name == $module)
                        <li class="nav-item listPayment">
                            <a class="nav-link {{$payment->id==3?"active":""}} fs-14 pay"
                                id="payment{{$payment->id}}"
                                data-toggle="pill" data-id="{{$payment->id}}"
                                href="#pills-{{$payment->id}}" role="tab"
                                aria-controls="pills-contact"
                                aria-selected="false">
                                    <i class="{{$paymentListIcon[$payment->id]}}"></i> {{$payment->titre}}
                            </a>
                        </li>
                    @endif
                @endforeach
            @endforeach
        </ul>
        <div class="tab-content" id="pills-tabContent">
            @foreach($payments as $key=>$payment)
                @foreach($payment->tlModules()->get() as $key=>$model)
                    @if($model->name == $module)
                        <div class="tab-pane fade {{$payment->id==3?"active show":""}} "
                                id="pills-{{$payment->id}}"
                                role="tabpanel"
                                style="text-align: justify;"
                                aria-labelledby="pills-contact-tab">
                            {!! $payment->description !!}
                        </div>
                    @endif
                @endforeach
            @endforeach
        </div>
    </div>

    <div class="d-flex justify-content-end">
        <button data-toggle="modal" data-target="#cancelBook" class="text-white btn btn-dark">
            @lang('generate.toCancel')
        </button>
        <button type="submit" id="resa" disabled class="btn bg-my ml-2 resa">@lang('generate.toBook') <i class="fa fa-check-circle"></i></button>
    </div>

    @include('front._includes.termsOfSales')

    @include('front._includes.cancelBook')

</section>

<script>
    $(".payment").click(function () {
         id = $(this).data("id");
         $("#payment").val(id);
     })
</script>