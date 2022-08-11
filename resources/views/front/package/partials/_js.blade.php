@section('js')
    <script src="{{asset('assets/OwlCarousel/owl.carousel.min.js')}}"></script>

    <script>
        window.addEventListener("pageshow", function (event) {
            var historyTraversal = event.persisted || ( typeof window.performance != "undefined" && window.performance.navigation.type === 2 );
            if (historyTraversal) {
                window.location.reload();
            }
        });
    </script>

    <script>
        $('.owl-img').owlCarousel({
            items: 1,
            lazyLoad: true,
            loop: true,
            nav: true,
            autoplay: true,
            animateOut: 'fadeOut',
            animateIn: 'fadeIn',
            autoplayTimeout: 4000,
            pagination: false,
            dots: false,
            margin: 10
        });


        $(".h-more").click(function () {
            event.preventDefault();
            id = $(this).data("val");
            nb = $(this).data("nb");
            $(".h-other-" + id).toggleClass('d-none');
            if ($(this).html() === nb + " autres hôtel...")
                $(this).html("cacher");
            else
                $(this).html(nb + " autres hôtel...");
        })

    </script>

    <script>

        $(document).ready(function () {
            currency = parseFloat("{{$currency}}");
            currencyText = "{{$currencyText}}";
            // tarif();

            $(document).on('click', '.find', function () {
                idTravel = $(this).attr('id');

                availabaleRoom(idTravel);

                console.log('idTravel', idTravel);

                tarif(idTravel);

                $(".collapse").removeClass("show");
                $("#collapseExample"+idTravel).toggleClass('show');

                cityDepart = $('#cityDepart'+idTravel).attr('title');

            })


            function availabaleRoom(id) {
                $.ajax({
                    url: '{{route('front.package.getAvailableRoom')}}',
                    type: 'get',
                    async: false,
                    data: {
                        "package": "{{$package->id}}",
                        "travel": id
                    },
                    dataType: 'JSON',
                    success: function (data) {
                        roomAvailabale = [];
                        console.log(data);
                        $.each(data, function (key, val) {
                            if (roomAvailabale.indexOf(val.capacity) === -1)
                                roomAvailabale.push(val.capacity);
                        })
                        optionselect = ``
                        if (roomAvailabale.indexOf(1) !== -1)
                            optionselect += `<option value="1">@lang("generate.individual")</option>`;
                        if (roomAvailabale.indexOf(2) !== -1)
                            optionselect += `<option value="2">@lang("generate.double")</option>`;
                        if (roomAvailabale.indexOf(3) !== -1)
                            optionselect += `<option value="3">@lang("generate.triple")</option>`;
                        if (roomAvailabale.indexOf(4) !== -1)
                            optionselect += `<option value="4">@lang("generate.quadruple")</option>`;

                        $("#room"+id).html(optionselect);

                    }
                })
                tarif(id);
            }

            function tarif(travelId) {
                var values = {};
                typeRoom = $("#Flight-passenger-input"+travelId).find(".passengers-text").text();
                nbAdult = $("#adult"+travelId).val();
                switch (typeRoom) {
                    case 'Individuelle':
                        values["room"] = "1";
                        break;
                    case 'Triple':
                        values["room"] = "3";
                        break;
                    case 'Quadruple':
                        values["room"] = "4";
                        break;
                    default:
                        values["room"] = "2";
                        nbAdult =  $("#adult"+travelId).val(2);
                        $("#Flight-passenger-input"+travelId).find(".passengers-text").html("Double");
                        $("#room"+travelId).val(2).trigger('change');
                }

                console.log("values",values["room"]);
                nbAdult = $("#adult"+travelId).val();
                nbInfant = 0;
                nbBebe = 0;
                nbMinor = 0;
                inputInfant = ``;
                @foreach($package->tlPoliticAgeEnfantPackages as $ageEnfant)
                    enfant = parseInt($("#{{$ageEnfant->TypeEnfant}}-"+travelId).val());
                values["{{$ageEnfant->TypeEnfant}}"] = enfant;
                inputInfant += `<input type="hidden" name="{{$ageEnfant->TypeEnfant}}" value="${enfant}">`
                if ("{{$ageEnfant->TypeEnfant}}" === "Child")
                    nbInfant += parseInt($("#{{$ageEnfant->TypeEnfant}}-"+travelId).val());
                else if ("{{$ageEnfant->TypeEnfant}}" === "Minor")
                    nbMinor += parseInt($("#{{$ageEnfant->TypeEnfant}}-"+travelId).val());
                else
                    nbBebe += parseInt($("#{{$ageEnfant->TypeEnfant}}-"+travelId).val());
                @endforeach
                values["adults"] = nbAdult;
                values["travel"] = travelId;
                values["package"] = "{{$package->id}}";
                infantText = nbAdult + " Adulte(s) ";
                if (nbInfant > 0)
                    infantText += nbInfant + " Enfants ";
                if (nbBebe > 0)
                    infantText += nbBebe + " Bébés ";
                if (nbMinor > 0)
                    infantText += nbMinor + " Mineure ";
                enf=nbInfant+nbBebe+nbMinor;
                // infantText += "Chambre " + $("#room option:selected").html();
                if(enf>parseInt("{{$package->maxInfant}}")){
                    $("#InfantMsg"+travelId).show();
                    $("#formulaData"+travelId).html("");
                }else{
                    $("#InfantMsg"+travelId).hide();
                    $.ajax({
                        url: '{{route('front.package.getLodgingFormula')}}',
                        type: 'get',
                        data: values,
                        dataType: 'JSON',
                        success: function (data) {

                            let formula = '';
                            //    data = sorting(data);
                            $.each(data, function (key, val) {

                                $hotel = '';
                                $k = 0;
                                $.each(val.hotels, function (i, htl) {

                                    $stars = "";
                                    typeLodging = htl.typeLodging == "man" ? "hommes" : "femmes";
                                    for ($i = 0; $i < htl.category; $i++) {
                                        $stars += `<span class= "fa fa-star color-yellow" style="font-size: 10px;color: #ffc80f;"> </span>`
                                    }
                                    $hotel += `<div class="col-12 color-blue"> <div class="row">
                                    <div class="col-md-4 color-blue"><i class='fa fa-h-square color-blue'></i>
                                    <strong>${htl.hotel}</strong> ${$stars} à <strong>  ${htl.city}</strong> </div>
                                    <div class="col-md-4 color-blue"><i class='fa fa-bed color-blue'></i> Chambre  ${htl.room} </div>
                                    <div class="col-md-4 color-blue">@lang('generate.oF') : ${htl.checkIn} @lang('generate.at')  ${htl.checkOut}</div>`
                                    ;

                                    if (htl.isOpen === 1)
                                        $hotel += `<div class="col-md-12 color-blue">Vous pouvez partager cette chambre avec un(e) ou des ${typeLodging}</div>`;
                                    else
                                        $hotel += `<div class="col-md-12 color-blue"> Valable pour ${htl.capacity} personnes </div>`;

                                    $hotel += `</div></div><hr class="bordure-center"> `;


                                });


                                formula += `
                                    <div class="col-10 offset-1 pt-2 pb-0 px-3 p-3 border"  style="background-color: #f3f3f3" >
                                        <div class="row bd-highlight">
                                            <div class="col-md-3 text-center color-blue bold border-right">
                                                ${val.name}
                                                <p style="line-height: 1;font-size: 9px;">   <a titre="Voir les détails" style="font-size: 9px;" class="pc seeTarif" id="${val.id}"><i class="fa fa-plus-circle"></i> Voir les détails</a> </p>
                                            </div>
                                            <div class="col-md-3 text-center color-blue border-right">
                                                ${infantText}
                                            </div>

                                            <div class="col-md-3 text-center bold border-right" style="color: #db1018; font-size: 17px;">
                                                ${val.price} ${currencyText}
                                            </div>
                                            <div class="col-md text-center mr-1">
                                                <form action="{{route('front.package.book')}}" method="post">
                                                @csrf
                                                ${inputInfant}
                                                    <input type="hidden" name="depart" value="${cityDepart}">
                                                    <input type="hidden" name="formula" value="${val.id}">
                                                    <button type="submit" class="btn bg-my rounded-30"> Je réserve <i class="fas fa-angle-right"></i></button>

                                                </form>
                                            </div>

                                            <div class="col-12 border-top border-darck py-2 mt-2  align-items-center justify-content-between tarif" id="tarif-${val.id}">
                                                                                        ${$hotel}

                                            </div>
                                        </div>
                                    </div>
                                    `;

                            });

                            $("#formulaData"+travelId).html(formula);


                        }
                    })
                }

                // $('html, body').animate({
                //     scrollTop: $("#formulaData").offset().top - 150
                // }, 1000);
            }
        });
        $(document).on('click', '.seeTarif', function () {
            id = $(this).attr('id');
            $("#tarif-" + id).toggleClass('tarif');
        })
    </script>


<script>
    paths = [];

    $(document).ready(function () {
        $(".box-count").click(function () {
            paths = {!! json_encode($photos) !!};
            pathImg = {!! json_encode($pathImg) !!};

            var genEls = function(arr)
            {
                var els = [];
                for(i = 0; i <= (arr.length - 1); i++)
                {
                    els.push({
                        'src': pathImg + arr[i],
                    });
                }
                return els;
            }

            lightGallery(this, {
                dynamic: true,
                dynamicEl: genEls(paths)
            })

        });

    })
</script>

@endsection
