@extends('base.front')

<style>
    .envelope:hover{
        color: #999;
    }
</style>
@section('body')
    @php $agency=\App\models\agency\TlAgency::all()->first(); @endphp

    <header class="position-relative">
        <div class="owl-carousel owl-theme owl-slid d-none d-md-block">

            @php($slides=\App\models\page\TlSlider::all()->where('property', 'contact')->where('status', 1)->take(3))

            @isset($slides)
                @foreach($slides as $key => $slide)
                    <div class="item">
                        <img class="item-{{$key}} img-fluid w-100" src="{{config('services.pathImg').$slide->picture}}" title=""
                        style="height: 500px;"/>
                        <div class="container w-100 d-none d-md-block div-text-slider" style="margin-top: 80px;">
                            <h1 class="text-center w-80 pt-4" style="color: white; margin-top: 100px; font-weight: bold;">{{$slide->title}}</h1>
                        </div>
                    </div>
                @endforeach
            @endisset

        </div>
    </header>

 

    <!-- CONTACT-FORM -->
    <div class="container contactPage">
        <div class="row">
            <div class="col-md-4 col-12 text-center pb-3">
                <p class="title">@lang('generate.horaire')</p>
                <ul class="list-unstyled">
                    <li>@lang('generate.oF') @lang('generate.Monday') @lang('generate.at') @lang('generate.Friday') <br> 
                        9h00 - 19h00</li>
                    <li>@lang('generate.Saturday') <br> 
                        9h00 - 12h00</li>
                </ul>
            </div>
            <div class="col-md-4 col-12 text-center pb-3">
                <p class="title">@lang('generate.adresse')</p>
                    <i class="fas fa-map-marker-alt"></i>
                    {{$agency->address}}
            </div>
            <div class="col-md-4 col-12 text-center pb-3">
                <p class="title">Contact</p>
                <p><i class="fa-solid fa-phone"></i>
                    {{$agency->phone}}</p>
                <p><i class="fas fa-envelope"></i>
                    <a href="mailto:{{$agency->email}}" class="envelope">{{$agency->email}} </a> </p>
            </div>
        </div>

        <div class="row my-5">
            <iframe frameborder="0" style="border:0;width: 100%;height: 550px"
                src="https://maps.google.com/maps?q={{ $agency->latitude ? $agency->latitude : '0' }},{{ $agency->longitude ? $agency->longitude : '0' }}&hl=es;z=14&amp;output=embed"
                allowfullscreen></iframe>
        </div>

        <div class="row form">
            <div class="col-md-8 col-12 offset-md-2">
                <h3>@lang('generate.ecrivez')</h3>
                <form class="contact-form" action="{{route('contact.email')}}" method="post">
                    @csrf
                    <div class="form-group">
                        <input type="text" required
                                name="firstName" placeholder="@lang('generate.firstname')">
                    </div>
                    <div class="form-group">
                        <input type="text" required name="lastName"
                                placeholder="@lang('generate.lastname')">
                    </div>
                    <div class="form-group">
                        <input type="email" required name="email"
                                placeholder="E-mail">
                    </div>
                    <div class="form-group">
                        <input type="hidden" name="demande" id="demande">
                        <select name="demande">
                            <option value="">@lang('generate.object')</option>
                            <option value="Hôtel">@lang('generate.hotel')</option>
                            <option value="Voyage">@lang('generate.travel')</option>
                            <option value="Billet d'avion">@lang('generate.planeTicket')</option>
                            <option value="Autre">@lang('generate.other')</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <textarea class="form-control" name="message" required
                                placeholder="Message" rows="6"></textarea>
                    </div>
                    <button type="submit">@lang('generate.send')</button>
                </form>
            </div>
        </div>
    
    </div>


@endsection

@section('js')
    <script>
        $(".select").click(function () {
            $("#demande").val($(this).data("val"));
        })
    </script>
@endsection
