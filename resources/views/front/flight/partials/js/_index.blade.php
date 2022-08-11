@section('js')

    <script src="{{asset("assets/OwlCarousel/owl.carousel.min.js")}}"></script>
    <script src="{{asset("assets/daterangepicker/moment.min.js")}}"></script>
    <script src="{{asset("assets/daterangepicker/daterangepicker.js")}}"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.0.12/dist/js/select2.min.js"></script>
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

    </script>


@endsection
