@section('js')

    <!-- slide -->
    <script src="{{asset('assets/ion-rangeSlider/ion.rangeSlider.js')}}"></script>
    <script src="{{asset('https://cdn.jsdelivr.net/npm/select2@4.0.12/dist/js/select2.min.js')}}"></script>

    <script>
        $(document).ready(function(){
            let scrollTop = 0;
            let lastScrollTop = 0;
            $('.web').addClass('bg-header-blue');
            $(document).scroll(function(event){
                let scrolltop = $(this).scrollTop();
                if (scrolltop > lastScrollTop){
                    $('.web').addClass('bg-header-scroll').removeClass('bg-header-blue');
                    $('.web').css({'boxShadow': '0 0 20px rgba(0, 0, 0, .1)'});
                    $('.web').css({'transition': '.2s'});
                    $('#logo-jmb').css({'width': '95px'});
                    $('#logo-jmb').css({'height': '95px'});
                    $('#logo-jmb').css({'transition': '.2s'});
                } else {
                    /*au début*/
                    $('.web').addClass('bg-header-blue').removeClass('bg-header-scroll');
                    $('.web').css({'boxShadow': 'none'});
                    $('#logo-jmb').css({'width': '120px'});
                    $('#logo-jmb').css({'height': '120px'});
                }
            });
        });

    </script>

    <script>
        $(".airport").select2({
            minimumInputLength: 2,
            ajax: {
                url: "{{route('getAirport')}}",
                type: "GET",
                dataType: 'json',
                quietMillis: 50,
                data: function (term) {
                    return {
                        term: term
                    };
                },
                processResults: function (data) {
                    return {
                        results: $.map(data, function (item) {
                            return {
                                text: "[" + item.AirportCode + "] " + item.AirportName + " - " + item.CityName,
                                id: item.AirportCode
                            }
                        })
                    };
                }
            }
        });


        $(document).ready(function () {

            $.ajax({
                url: '{{route('getAirports')}}',
                type: 'get',
                dataType: 'JSON',
                success: function (data) {
                    dataVille = [];
                    $(".airportCode").each(function (key, val) {
                        code = val.value;
                        if (dataVille.indexOf(code) === -1) {
                            dataVille.push(code);
                        }
                    });
                    $.each(dataVille, function (key, val) {
                        $.each(data, function (k, element) {
                            if (val == element.AirportCode) {
                                $('.' + val).html(element.CityName)
                                $('.' + val+'-name').html(element.AirportName)
                            }
                        })
                    });
                }
            });
        });
        var Carrier = [];
        $(".classRadio").change(function () {
            $("#formFilter").submit();
        });

        //Escal
        $(".escaleFilter").change(function () {
            filtr()
        });

        //Carrier
        $(".carrierFilter").change(function () {
            filtrCarrier()
        });
        filtrCarrier()
        filtr();

        function filtrCarrier() {

            $('.carrierFilter').click(function () {
                let id = $(this).attr('id');

                if ($("#"+id).is(":checked")) {
                    Carrier.push($(this).val());
                } else {
                   const index = Carrier.indexOf($(this).val());
                    if (index > -1) {
                        Carrier.splice(index, 1);
                    }
                }
            });

            $(".prix").each(function (index, val) {

                id = val.id;
                $("#vol-" + id).hide();
                carrierAller = ($("#carrier-aller-" + id).val());
                carrierRetour = ($("#carrier-retour-" + id).val());
                $.each(Carrier,function(index,obj)
                {

                    if (obj === carrierAller || obj === carrierRetour) {

                        $("#vol-" + id).show();
                    } else {

                    }

                });

            });
            if (Carrier.length === 0) {
                $(".volFilter").show();
             }
        }

        function filtr() {

            SansEscale = -1;
            Escale = -1;
            Escales = -1;

            if ($("#SansEscale").is(":checked")) {
                SansEscale = $("#SansEscale").val();
            } else {
                SansEscale = -1;
            }

            if ($("#Escale").is(":checked")) {
                Escale = $("#Escale").val();
            } else {
                Escale = -1;
            }

            if ($("#Escales").is(":checked")) {
                Escales = $("#Escales").val();
            } else {
                Escales = -1;
            }

            findByEscale = true;

            s = parseInt(SansEscale) + parseInt(Escale) + parseInt(Escales);

            $(".prix").each(function (index, val) {
                if (s !== -3) {
                    findByEscale = false;
                }

                id = val.id;

                escale = parseFloat($("#escale-" + id).val()) + 1;

                if (SansEscale == escale || Escale == escale || escale == Escales) {
                    findByEscale = true;
                }

                if (findByEscale) {
                    $("#vol-" + id).show();
                } else {
                    $("#vol-" + id).hide();
                }

            });

        }

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
