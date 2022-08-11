@extends('base.front')
@section('style')

    <!-- slide -->
    <link rel='stylesheet' href='{{asset('assets/OwlCarousel/assets/owl.carousel.css')}}'/>
    <link rel='stylesheet' href='{{asset('assets/OwlCarousel/assets/owl.theme.default.min.css')}}'/>

    <!-- animation -->
    <link rel='stylesheet' href='{{asset('assets/animatecss/animate.css')}}'/>

    <link href="https://cdn.jsdelivr.net/npm/select2@4.0.12/dist/css/select2.min.css" rel="stylesheet"/>

    <!-- CSS Carousel -->
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>



@endsection

@section('body')

    <!-- header -->
        @include('front._includes.home.headerHome')
    <!--end header -->
    
    <!-- Thematics -->
    @include('front._includes.cityHotels')
    <!-- end Thematics -->

    <!-- Hôtels -->
    @include('front._includes.home.hotelHome')
    <!-- end Hôtels -->

    <!-- Packages - Tours -->
    @include('front._includes.home.toursHome')
    <!-- end Packages - Tours -->
    
@endsection

@section('js')
    <script src="{{asset("assets/OwlCarousel/owl.carousel.min.js")}}"></script>
    <script src="{{asset("js/select2.min.js")}}"></script>
    <script src="https://cdn.jsdelivr.net/npm/lodash@4.17.21/lodash.min.js" integrity="sha256-qXBd/EfAdjOA2FGrGAG+b3YBn2tn5A6bhz+LSgYD96k=" crossorigin="anonymous"></script>




    <script>
        $('.owl-slid').owlCarousel({
            animateOut: 'slideOutDown',
            // animateIn: 'flipInX',
            animateOut: 'fadeOut',
            items: 1,
            smartSpeed: 450,
            autoplay: true,
            loop: true,
        });
        $('.owl-hotel').owlCarousel({
            loop: true,
            margin: 10,
            responsiveClass: true,
            items: 1,
            smartSpeed: 450,
            autoplay: true,
            responsive: {
                0: {
                    items: 1,
                    nav: true
                },
                600: {
                    items: 3,
                    nav: false
                },
                1000: {
                    items: 4,
                    nav: true,
                    loop: false
                }
            }
        })


        $(".submit").click(function () {
            $("#loading-wrapper").show();
            id = $(this).data("submit");
            $("#" + id).submit();
        });
    </script>
    <script>
        function split(val) {
            return val.split(/,\s*/);
        }

        function extractLast(term) {

            return split(term).pop();
        }

        $(".ville").keyup(function () {
            var idH = $(this).attr('id');
            if (idH == "villeD") {
                $("#villeR_data").html("");
                icon = "<i class='fas fa-plane-arrival'></i>";
            } else {
                $("#villeD_data").html("")
                icon = "<i class='fas fa-plane-departure'></i>";
            }
            $.getJSON("{{route('getAirport')}}", {
                term: extractLast($(this).val())
            }, function (data) {
                let dropDown = "<ul class='city-list'>";
                $.each(data, function (key, val) {

                    id = val.AirportCode;
                    name = val.CityName + " ( " + val.AirportCode + " - " + val.AirportName + " ) ";
                    name2 = "<strong>" + val.CityName + "</strong>" + "<br>" + val.AirportCode + " - " + val.AirportName ;

                    dropDown += "<li class='city-item' data-id='" + idH + "' data-name='" + name + "' data-val='" + id + "'>" + icon + " " + name2 + "</li>";
                })
                dropDown += "</ul>";

                $("#" + idH + "_data").html(dropDown)

            });
        });

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

    </script>
     {{-- <script>
         getDestinationOfType($("#type").val(),"#destination");
         getDestinationOfType($("#typeOmra").val(),"#destinationOmra");

         $("#type").change(function () {
             getDestinationOfType($(this).val(),"#destination");
         })
         $("#typeOmra").change(function () {
             getDestinationOfType($(this).val(),"#destinationOmra");
         })
         function getDestinationOfType(id,selectId) {
             $.ajax({
                 type:'get',
                 url:'{{route('ajax.getDestinationType')}}',
                 data:{'id':id},
                 success:function (data) {
                     $options=``;
                     $.each(data,function (key, val) {
                         $options+=`<option value="${val.id}">${val.name}</option>`
                     });
                     $(selectId).html($options)
                 }
             })
         }
     </script> --}}


    <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

    <script>
        /* carousel box-thematic */
        $('.carousel').slick({
                slidesToShow: 6,
                slidesToScroll: 1,
                arrows: true,
                prevArrow:"<button type='button' class='slick-prev pull-left' style='background: transparent;border:none;font-size: 31px;color: black;opacity: 0.35;outline:none; width: 71px; height: 60px; margin-right: 10px; position: absolute; top: 45px;right: 1077px'><i class='fa fa-chevron-left' aria-hidden='true'></i></button>",
                nextArrow:"<button type='button' class='slick-next pull-right' style='background: transparent;border:none;font-size: 31px;color: black;opacity: 0.35;outline:none; width: 71px; height: 60px; position: absolute; top: 45px;left: 1085px;'><i class='fa fa-chevron-right' aria-hidden='true'></i></button>",


                centerMode: false,
                infinite:true,
                autoplaySpeed: 2000,
                responsive: [
                {
                breakpoint: 991,
                settings: {
                slidesToShow: 1,
                slidesToScroll: 1
                }
                },
            {
                breakpoint: 700,
                settings: {
                slidesToShow:2 ,
                slidesToScroll: 1
                }
            },
            {
                breakpoint: 480,
                settings: {
                slidesToShow: 1,
                slidesToScroll: 1
                }
            }
            ]
    });
    </script>

@endsection
