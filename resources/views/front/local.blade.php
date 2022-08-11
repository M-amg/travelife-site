@extends('base.front')
@section('style')
@endsection
@section('body')

    <div class="main-wraper  padd-90" style="margin-top: 60px">
        <div class="container m-t-30">
            <div class="row m-b-30 m-t-30" >
            @foreach($branches as $branch)

                    <div class="col-md-6 col-xs-12">
                        <div class="contact-info" style="border: 1px solid #ddd;padding: 10px 15px;border-radius: 5px;">
                            <h4 class="color-dark-2"><strong>{{$branch->name}}</strong></h4>
                            <div class="contact-line color-grey-3" style="margin-bottom: 7px;font-size: 12px;"><img src="{{asset("front/img/phone_icon_2_dark.png")}}" alt="">Téléphone: <a class="color-dark-2" href="tel:{{$branch->phone}}">{{$branch->phone}}</a></div>
                            <div class="contact-line color-grey-3" style="margin-bottom: 7px;font-size: 12px;"><img src="{{asset("front/img/mail_icon_b_dark.png")}}" alt="">Email us: <a class="color-dark-2 tt" href="mail:{{$branch->email}}">{{$branch->email}}</a></div>
                            <div class="contact-line color-grey-3" style="margin-bottom: 7px;font-size: 12px;"><img src="{{asset("front/img/loc_icon_dark.png")}}" alt="">@lang('generate.adresse'): <span class="color-dark-2 tt">{{$branch->address}}</span></div>
                        </div>
                    </div>

            @endforeach
            </div>
        </div>
    </div>
@endsection
@section('js')

@endsection
