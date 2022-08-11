@section('js')
    <script src="{{asset('assets/ion-rangeSlider/ion.rangeSlider.js')}}"></script>
    <script src="{{asset('js/header-scroll.js')}}"></script>

    <script>
        $(document).ready(function () {
            $("#price-range").ionRangeSlider({
                type: "double",
                grid: true,
                min: parseInt('{{$minPrice*$currency}}'),
                max: parseInt('{{$maxPrice*$currency}}'),
                from: parseInt('{{request()->get('minimum_price')?request()->get('minimum_price'):$minPrice}}'),
                to: parseInt('{{request()->get('maximum_price')?request()->get('maximum_price'):$maxPrice}}'),
                postfix: " {{$currencytext}}",
                onFinish: function (data) {
                    $("#minimum_price").val(data["from"]);
                    $("#maximum_price").val(data["to"]);
                    $("#PackageForm").submit();
                }
            });

            $("#travel-days").ionRangeSlider({
                type: "double",
                grid: true,
                min: parseInt('{{$daysMin}}'),
                max: parseInt('{{$daysMax}}'),
                from: parseInt('{{request()->get('minDays')?request()->get('minDays'):$daysMin}}'),
                to: parseInt('{{request()->get('maxDays')?request()->get('maxDays'):$daysMax}}'),
                postfix: " jours",
                onFinish: function (data) {
                    $("#minDays").val(data["from"]);
                    $("#maxDays").val(data["to"]);
                    $("#PackageForm").submit();
                }
            });


            $(".custom-control-input").change(function () {
                $("#PackageForm").submit();
            });

        });
    </script>


@endsection
