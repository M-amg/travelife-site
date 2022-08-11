@section('js')
    <script src="https://cdn.jsdelivr.net/npm/select2@4.0.12/dist/js/select2.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/lodash@4.17.21/lodash.min.js" integrity="sha256-qXBd/EfAdjOA2FGrGAG+b3YBn2tn5A6bhz+LSgYD96k=" crossorigin="anonymous"></script>
    <script src="{{asset('js/header-scroll2.js')}}"></script>

    <script>

        function split(val) {
            return val.split(/,\s*/);
        }

        function extractLast(term) {
            return split(term).pop();
        }

        $(document).on('click', '.city-item', function () {
            data = $(this).data('val');
            id = $(this).data('id');
            name = $(this).data('name');
            $("#" + id).val(name);
            $("#" + id + "ID").val(data);
            $("#" + id + "_data").html("")
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


    {{-- Load more pagination --}}
    <script>
        hotels = [];
        hotelsUnfiltered = [];
        hotelsContract = [];
        hotelsUnfilteredContract = [];
        lowestRate = 0;
        highestRate = 0;

        $(document).ready(function () {
            rawhotels = {!! json_encode($data['hotels']) !!};
            currency = parseFloat("{{$currency}}");
            currencyText = "{{$currencyText}}";
            hotels = Object.values(rawhotels);
            hotelsUnfiltered = hotels;
            console.log('hotels',hotels)
            rawhotelsContract = {!! json_encode($hotelLocal['list']) !!};

            hotelsContract = Object.values(rawhotelsContract);
            hotelsUnfilteredContract = hotelsContract;
            console.log('hotelsContract',hotelsContract)
            lowestRate = hotels[0]['hotelRates']['minRate'];
            highestRate = hotels[hotels.length - 1]['hotelRates']['minRate'];

        })

        $(document).on('click', '#load-more', function (e) {
            showEntries(1);
        });


        const formatPrice = (n) => {
            return new Intl.NumberFormat('fr-FR').format(n);
        }
        const capitalize = (sentence) => {

            const words = sentence.split(" ");

            const output = words.map((word) => {
                if (word[0]) {
                    return word[0].toUpperCase() + word.substring(1).toLowerCase();
                }
            }).join(" ");

            return output;

        }

        function buildhtml_hotelContract(hotel) {

            stars = '';
            $discount = ``;
            for (var i = 0; i < 5; i++) {
                if (i < hotel['category'])
                    stars += '<i class="fas fa-star c-dore"></i>';
            }
            check_date = "{{$checkin_date->format('d/m/Y')}}  - {{$checkout_date->format('d/m/Y')}} / {{$checkin_date->diffInDays($checkout_date)}}";
            img = "{{config('services.pathImg')}}" + hotel['img'];
            nuits = "{{!empty($dateDepart)?$dateDepart->diffInDays($dateReturn):''}}";
            urlPost = "{{route('front.hotel',['name'=>''])}}/" + hotel['name'] + `?id=${hotel['id']}&chickIn=${hotel['chickIn']}&chickOut=${hotel['chickOut']}`+"{{ $query }}";
            if(hotel['promo'] == true){
                if(hotel['typePromo'] == 1){
                    $typeP = `- ${hotel['discount']} %`;
                }else{
                    $typeP = `- ${hotel['discount']} ${currencyText}`;
                }
                $discount = `<div style="background: red;color: #fff;position: absolute;padding: 5px 20px;border-radius: 0 3px 3px 0;margin: 43px 0;">
                                    ${$typeP}
                                </div>`;
                $price = `<div class="col-md-7" style="margin-left: -25px;">
                                    <h2 class="c-txt-or font-weight-bold float-right mr-6">
                                        <span style="font-size: 10px; color: red;"><strike> ${ formatPrice(hotel['price'])} ${currencyText}</strike></span> &nbsp; ${ formatPrice(hotel['priceDiscount'])} ${currencyText} <br>
                                        <span class="float-right mr-4 fs-10 c-blue">pour ${nuits} ${nuits > 1 ? " nuits" : " nuit"}</span>
                                    </h2></div>`;
            }else{
                $price = `<div class="col-md-7"><h2 class="c-txt-or font-weight-bold float-right mr-4">
                                     ${ formatPrice(hotel['price'])} ${currencyText} <br>
                                        <span class="float-right mr-4 fs-10 c-blue">pour ${nuits} ${nuits > 1 ? " nuits" : " nuit"}</span>
                                    </h2> </div>`;
            }
            hotel_result_html = `
                 <div class="bg-white mt-5 d-none d-md-flex" style="border: none !important;">
                        <div class="">
                            <div class="position-relative">
                                <div style="background: #2fed0cb0;color: #fff;position: absolute;padding: 5px 20px;border-radius: 0 3px 3px 0;margin: 10px 0;">
                                    Recommandé
                                </div>

                                <a href="${urlPost}" target="_blank">
                                    <img src="${img}" alt="" style="width: 290px; height: 172px">
                                </a>
                            </div>
                        </div>
                        <div class="flex-grow-1 pb-0 d-flex flex-column">
                            <h5 class="px-2 pt-2">
                                <a href="${urlPost}" target="_blank" class="title-hotel" title="${capitalize(hotel['name'])}">
                                ${capitalize(hotel['name']).substr(0, 25)}</a>
                             </h5>
                            <p class="fs-12 mb-2 px-2 c-dore"> ${stars}</p>
                            <p class="fs-12 mb-2 px-2 " style="color: #2e7ead; font-weight: bold;">
                                <i class="fas fa-map-marker-alt" ></i> <span>${capitalize(hotel['address'])}</span>
                            </p>
                            <div class="row mt-4">
                                <div class="col-md-5">
                                    <a href="${urlPost}" target="_blank" class="btn-cet-hotel">Voir cet hôtel</a>
                                </div>
                                    ${$price}
                            </div>
                        </div>
                    </div>

                 <div class="bg-white mt-5 d-block d-md-none position-relative">
                        <div class="">
                                <div style="background: #2fed0cb0;color: #fff;position: absolute;padding: 5px 20px;border-radius: 0 3px 3px 0;margin: 10px 0;">
                                    Recommandé
                                </div>

                                <img src="${img}" alt="" style="max-height: 172px!important;"
                                    class="img-fluid w-100 h-100">
                        </div>
                        <div class="px-2 pt-2 pb-0 d-flex flex-column title-phone">
                            <h5 class="title-hotel mb-1" style="color: white;">${hotel['name'] }</h5>
                            <small class="mb-1"> ${stars}</small>
                        </div>
                        <div class="d-flex justify-content-between">
                            <div class="p-2 mt-2 c-blue">
                                <h6 class="fs-12">à partir de <strong class="c-blue fs-18">${hotel['price']} ${currencyText}</strong> </h6>
                            </div>
                            <div class="p-2">
                                <a href="${urlPost}" class="btn bg-my btn-sm rounded-0">Voir l'hôtel</a>
                            </div>
                        </div>
                    </div>

                `;

            return hotel_result_html;
        }

        function buildhtml_hotel(hotel) {
            stars = '';
            for (var i = 0; i < 5; i++) {
                if (i < hotel['starRating'])
                    stars += '<i class="fas fa-star c-dore"></i>';
            }
            if (hotel['description'] != undefined && hotel['description'] != '' && hotel['description'] != null) {
                description = hotel['description'].substr(0, 250);
            }
            check_date = "{{$checkin_date->format('d/m/Y')}}  - {{$checkout_date->format('d/m/Y')}} / {{$checkin_date->diffInDays($checkout_date)}}";
            img = hotel['pictureUrl'];
            if (hotel['providerId'] === 3) {
                $.ajax({
                    url: '{{route('api.hotel.info')}}',
                    type: 'get',
                    async: false,
                    cache: false,
                    timeout: 30000,
                    data: {
                        hotelCode: hotel['code'],
                        p: 3,
                    },
                    dataType: 'JSON',
                    success: function (data) {
                          if (data['description'] != undefined && data['description'] != '' && data['description'] != null) {
                              description = data['description'].substr(0, 250);
                          }
                        if (data['pictureUrl']) {
                            img = data['pictureUrl'];
                        }

                    }
                });
            }
            hotel_result_html = `
                            <div class="list-item-entry">
                                <div class="hotel-item style-3 bg-white">
                                    <div class="table-view">
                                        <div class="radius-top cell-view">
                                            <a href="${hotel['route']}&cityName={{ request()->query('cityName') }}&city={{ request()->query('city') }}&period={{ request()->query('period') }}{{ $query }}" target="_blank">
                                                <img src="${img}" alt="" style="width: 290px; height: 172px">
                                            </a>
                                        </div>
                                        <div class="title hotel-middle clearfix cell-view">
                                        <div class="date"><strong>${check_date}</strong> Nuits
                                            </div>
                                            <h4>

                                                <a href="${hotel['route']}&cityName={{ request()->query('cityName') }}&city={{ request()->query('city') }}&period={{ request()->query('period') }}{{ $query }}" target="_blank" class="title-hotel">
                                                    <b>${capitalize(hotel['hotelName'])}</b></a>
                                                </h4>
                                            <div class="rate-wrap">
                                                <div class="rate c-dore">
                                                    ${stars}
                                                </div>
                                            </div>

                                        </div>
                                        <div class="row mt-4">
                                            <div class="col-md-6">
                                                <a href="${hotel['route']}&cityName={{ request()->query('cityName') }}&city={{ request()->query('city') }}&period={{ request()->query('period') }}{{ $query }}" target="_blank" class="btn-cet-hotel">Voir cet hôtel</a>
                                            </div>
                                            <div class="col-md-6">
                                                <h2 class="c-txt-or font-weight-bold float-right mr-4">
                                                    ${ formatPrice(hotel['hotelRates']['minRate'])} ${currencyText} <br>
                                                    <span class="float-right mr-4" class="fs-10 c-blue">pour {{!empty($dateDepart)?$dateDepart->diffInDays($dateReturn):''}}
                                                    {{str_plural('nuit', $dateDepart->diffInDays($dateReturn))}}
                                                    </span>
                                                </h2>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                `;

            hotel_result_html = `
                <div class="bg-white mt-5 d-none d-md-flex" style="border: none !important;">
                <div class="">
                    <a href="${hotel['route']}&cityName={{ request()->query('cityName') }}&city={{ request()->query('city') }}&period={{ request()->query('period') }}{{ $query }}" target="_blank">
                        <img src="${img}" alt="" style="width: 290px; height: 172px">
                    </a>
                </div>
                <div class="flex-grow-1 pb-0 d-flex flex-column">
                                <h5 class="px-2 pt-2">
                                    <a href="${hotel['route']}&cityName={{ request()->query('cityName') }}&city={{ request()->query('city') }}&period={{ request()->query('period') }}{{ $query }}" target="_blank" class="title-hotel">${capitalize(hotel['hotelName'])}</a>
                                 </h5>
                                <p class="fs-12 mb-2 px-2 c-dore"> ${stars}</p>
                                <p class="fs-12 mb-2 px-2 " style="color: #2e7ead; font-weight: bold;">
                                    <i class="fas fa-map-marker-alt" ></i> <span>${capitalize(hotel['address'])}</span>
                                </p>
                                <div class="row mt-4">
                                    <div class="col-md-6">
                                        <a href="${hotel['route']}&cityName={{ request()->query('cityName') }}&city={{ request()->query('city') }}&period={{ request()->query('period') }}{{ $query }}" target="_blank" class="btn-cet-hotel">Voir cet hôtel</a>
                                    </div>
                                    <div class="col-md-6">
                                        <h2 class="c-txt-or font-weight-bold float-right mr-4">
                                            ${ formatPrice(hotel['hotelRates']['minRate'])} ${currencyText} <br>
                                            <span class="float-right mr-4" class="fs-10 c-blue">pour {{!empty($dateDepart)?$dateDepart->diffInDays($dateReturn):''}}  {{ str_plural('nuit', !empty($dateDepart)?$dateDepart->diffInDays($dateReturn):0 ) }} </span>

                                            </h2>


                                    </div>
                                </div>


                </div>
                </div>

                    <div class="bg-white mt-5 d-block d-md-none position-relative">
                            <div class="">
                                <img src="${img}" alt="" style="max-height: 172px!important;"
                                    class="img-fluid w-100 h-100">
                            </div>
                            <div class="px-2 pt-2 pb-0 d-flex flex-column title-phone">
                                <h5 class="title-hotel mb-1" style="color: white;">${hotel['hotelName'] }</h5>
                                <small class="mb-1"> ${stars}
                </small>
            </div>
            <div class="d-flex justify-content-between">
                <div class="p-2 mt-2"><h6 style="font-size: 12px;">à partir de
                        <strong class="c-blue fs-18">${hotel['hotelRates']['minRate']} ${currencyText}</strong>
                                    </h6></div>
                                <div class="p-2">
                                    <a href="${hotel['route']}&cityName={{ request()->query('cityName') }}&city={{ request()->query('city') }}&period={{ request()->query('period') }}{{ $query }}"
                                    class="btn bg-my btn-sm rounded-0">Voir l'hôtel</a></div>
                            </div>
                        </div>
                `;

            return hotel_result_html;
        }

        // Filter
        $(document).ready(function () {
            $("#price-filter").click(function () {
                startPrice = $("#amount-start-0").val();
                endPrice = $("#amount-end-0").val();
                startPrice = startPrice.substring(0, startPrice.length - 3);
                endPrice = endPrice.substring(0, endPrice.length - 3);
                hotels = applyFilter({priceFrom: startPrice, priceTo: endPrice});
                hotelsContract = applyFilterContract({priceFrom: startPrice, priceTo: endPrice});

                showEntries();

            });
            showEntries();
            $("input[name='starFilter']").on('change', function (event) {
                filters.stars = {};
                $("input[name='starFilter']:checked").each(function () {
                    stars = $(this).data('stars');
                    filters.stars[stars] = this.checked;
                });

                hotelsContract = applyFilterContract();
                hotels = applyFilter();
                showEntries();
            });
            $("input[name='pension']").on('change', function (event) {
                filters.boardCategoryCode = {};
                $("input[name='pension']:checked").each(function () {
                    board = $(this).data('board');
                    filters.boardCategoryCode[board] = this.checked;
                });
                hotelsContract = applyFilterContract();
                hotels = applyFilter();
                showEntries();
            });
            $('#hotelNameInput').on('keyup', function (event) {
                hotelsContract = applyFilterContract({hotelName: event.target.value});
                hotels = applyFilter({hotelName: event.target.value});
                showEntries();
            });
        });

        filters = {
            stars: {1: true, 2: true, 3: true, 4: true, 5: true,},
            boardCategoryCode: {"AI": true, "FB": true, "HB": true, "BB": true, "RO": true}
        };

        function applyFilter(moreFilters = {}) {
            $.extend(filters, moreFilters);
            hotels = hotelsUnfiltered;
            console.log('hotels1',hotels);
            if (filters.priceFrom != undefined && filters.priceTo != undefined) {
                hotels = hotels.filter(function (x) {
                    return x['hotelRates']['minRate'] >= filters.priceFrom &&
                        x['hotelRates']['minRate'] <= filters.priceTo;
                });
            }

            if (filters.stars != undefined) {
                hotels = hotels.filter(function (x) {
                    return filters.stars[x['starRating']];
                });
            }
            if (filters.boardCategoryCode != undefined) {
                hotels = hotels.filter(function (x) {
                    return filters.boardCategoryCode[x['boardCategoryCode']];
                });
            }
            if (filters.hotelName != undefined && filters.hotelName != '') {
                filters.hotelName = filters.hotelName.trim().toLowerCase();
                re = RegExp('.*' + filters.hotelName + '.*')
                hotels = hotels.filter(function (x) {
                    return re.test(x['hotelName'].toLowerCase());
                });
            }
            console.log('hotels2',hotels);
            return hotels;
        }

        function applyFilterContract(moreFilters = {}) {
            $.extend(filters, moreFilters);

            hotelsContract = hotelsUnfilteredContract;
            console.log('hotelsContract1',hotelsContract);
            if (filters.boardCategoryCode != undefined) {
                hotelsContract = hotelsContract.filter(function (x) {
                    return filters.boardCategoryCode[x['boardCategoryCode']];
                });
            }

            if (filters.stars != undefined) {
                hotelsContract = hotelsContract.filter(function (x) {
                    return filters.stars[x['category']];
                });
            }

            if (filters.hotelName != undefined && filters.hotelName != '') {
                filters.hotelName = filters.hotelName.trim().toLowerCase();
                re = RegExp('.*' + filters.hotelName + '.*')
                hotelsContract = hotelsContract.filter(function (x) {
                    return re.test(x['name'].toLowerCase());
                });
            }
            console.log('hotelsContract2',hotelsContract);
            return hotelsContract;
        }


        function showEntries(page = 0) {
            if (page === 0) {
                $('#load-more').data('page', 0)
            }
            var results = $('#hotel-results');
            var page = $('#load-more').data('page');
            var html_result = '';


            for (var i = (page * 10); i < (page * 10) + 10 && i < hotelsContract.length; i++) {
                html_result += buildhtml_hotelContract(hotelsContract[i]);
            }
            for (var i = (page * 10); i < (page * 10) + 10 && i < hotels.length; i++) {
                html_result += buildhtml_hotel(hotels[i]);
            }
            if (hotels.length - 1 <= i)
                $('#load-more').hide();
            else
                $('#load-more').show();

            if (page === 0) {
                results.html(html_result);
            } else {
                results.append(html_result);
            }
            $('#load-more').data('page', page + 1);

        }
    </script>

    {{-- Sort results --}}
    {{--info hotel ajax--}}
    <script>

        loadHotelInfo();

        function loadHotelInfo() {

            $(".hotelbeds").each(function (key, val) {
                code = $(this).data("code");
                p = $(this).data("p");

                $.ajax({
                    url: '{{route('api.hotel.info')}}',
                    type: 'get',
                    async: false,
                    cache: false,
                    timeout: 30000,
                    data: {
                        hotelCode: code,
                        p: p,
                    },
                    dataType: 'JSON',
                    success: function (data) {
                        $("#description-" + code).html(data['description']);
                        $("#address-" + code).html(data['address']);
                        if (data['pictureUrl']) {
                            $("#img-" + code).attr('src', data['pictureUrl']);
                        }

                    }
                });
            })

        }

    </script>



@endsection
