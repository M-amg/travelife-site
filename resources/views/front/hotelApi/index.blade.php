@extends('base.front')
@section('style')
    <link rel='stylesheet' href='{{asset('assets/OwlCarousel/assets/owl.carousel.css')}}'/>
    <link rel='stylesheet' href='{{asset('assets/OwlCarousel/assets/owl.theme.default.min.css')}}'/>
    <!-- animation -->
    <link rel='stylesheet' href='{{asset('assets/animatecss/animate.css')}}'/>
    <link href="https://cdn.jsdelivr.net/npm/select2@4.0.12/dist/css/select2.min.css" rel="stylesheet"/>

    <style>
        body{
            background: white;
        }
    </style>

@endsection
@section('body')
    <header class="position-relative">
        @php($slides=\App\models\page\TlSlider::all()->where('property', 'hotel')->where('status', 1)->take(3))
        @isset($slides)
            <div class="owl-carousel owl-theme owl-slid d-none d-md-block">
                @foreach($slides as $key => $slide)
                    <div class="item">
                        <img class="item-{{$key}}" src="{{config('services.pathImg').$slide->picture}}" title="" style="height: 500px; margin-bottom: 60px;"/>
                        <div class="container w-100 d-none d-md-block div-text-slider" style="margin-top: 80px;">
                            <h1 class="text-center w-80 pt-4 bold" style="color: white">{{$slide->title}}</h1>
                        </div>
                    </div>
                @endforeach
            </div>
        @endisset
        <div class="container motor-search-web">
            <div class="row" style="padding-top: 22px">
                <div class="w-100 col-md-12">
                    <div class="tab-content" id="nav-tabContent" style="margin-top: 270px;">
                        <div class="py-3 booking-search tab-pane fade show active" id="vol" role="tabpanel" aria-labelledby="nav-contact-tab">
                            @include('front.hotelApi.partials._hotelApiSearch')
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Popular  -->

@endsection
@section('js')
    <script src="{{asset("assets/OwlCarousel/owl.carousel.min.js")}}"></script>
    <script src="{{asset("js/select2.min.js")}}"></script>
    <script src="https://cdn.jsdelivr.net/npm/lodash@4.17.21/lodash.min.js" integrity="sha256-qXBd/EfAdjOA2FGrGAG+b3YBn2tn5A6bhz+LSgYD96k=" crossorigin="anonymous"></script>
    <script src="{{asset('js/header-scroll.js')}}"></script>
    <script>

        $('.owl-slid').owlCarousel({
            animateOut: 'slideOutDown',
            animateIn: 'flipInX',
            items: 1,
            smartSpeed: 450,
            autoplay: true,
            loop: true,
        });

    </script>
    <script>
        function split(val) {
            return val.split(/,\s*/);
        }
        function extractLast(term) {

            return split(term).pop();
        }

        $(document).on('click','.city-item',function () {
            data=$(this).data('val');
            id=$(this).data('id');
            name=$(this).data('name');
            $("#"+id).val(name);
            $("#"+id+"ID").val(data);
            $("#"+id+"_data").html("")
        });
        $(window).click(function () {
            $(".city-list").hide();
        })

        $(".hotel").keyup(_.debounce(function () {
            const value = $(this).val();
            if ( typeof value !== "string" ||  value.length < 3)
                return;

            var idH = $(this).attr('id');
            if (idH == "HvilleD") {
                $("#HvilleR_data").html("")
            } else {
                $("#HvilleD_data").html("")
            }

            const settings = {
                "async": true,
                "crossDomain": true,
                "url": "{{ route("cities") }}?value=" + value,
                "method": "GET",
            };

            $.ajax(settings).done(function (response) {
                let dropDown = "<ul class='city-list'>";
                $.each(response.features, function (key, val) {
                    id = val.center[1] + "," + val.center[0];
                    name = val.place_name;
                    icon = "<i class='mdi mdi-map-marker-radius'></i>";
                    dropDown += "<li class='city-item' data-id='" + idH + "' data-name='" + name + "' data-val='" + id + "'>" + icon + " " + name + "</li>";
                });
                dropDown += "</ul>";

                $("#" + idH + "_data").html(dropDown)
            });
        }, 400));

        $(".submit").click(function () {
            $("#loading-wrapper").show();
            id = $(this).data("submit");
            $("#" + id).submit();
        });
    </script>


@endsection
