@section('js')
    <script src="{{ asset('js/condition-annulation.js') }}"></script>
    <script src="{{asset('js/header-scroll2.js')}}"></script>
	<script>
        $(document).on("click", "#submit", function () {
            let formHotelApi = $("#formHotelApi");
            let data = formHotelApi.serialize();
            $.ajax({
                type:'post',
                url: "{{route('api.hotel.booking')}}",
                data:  data,
                dataType: 'json',
                success: function (data) {
                }, error: function (data) {
                }
            })
        })
    </script>
    
    <script>
        $("#submitLogin").click(function () {
            var email = $('#emailLogin').val();
            var password = $('#passwordLogin').val();
            $.ajax({
                url: "{{route("customer.loginReservation")}}",
                type: "POST",
                data: {"email": email, 'password': password, '_token': '{{csrf_token()}}'},
                dataType: 'json',
                success: function (data) {
                    if (data == 'success') {
                        location.reload();
                    } else {
                        toastr.error(data, 'Error');
                    }
                }, error: function (data) {
                    toastr.error('email ou mot de passe est incorecte', 'Error');

                }
            })
        })
    </script>

    <script>
        $('.coord-firstName').keyup(function (e) {
            if ($('input:radio[name="isPrincipalCustomer"]').val() !== "1"){
                let prenomPassager = null;
                $('.firstName-passager00').val(prenomPassager);
            }
            if ($('input:radio[name="isPrincipalCustomer"]').val() == "1"){
                let prenomPassager = $('.coord-firstName').val();
                $('.firstName-passager00').val(prenomPassager);
            }
        });

        $('.coord-lastName').keyup(function (e) {
            if ($('input:radio[name="isPrincipalCustomer"]').val() !== "1"){
                let nomPassager = null;
                $('.lastName-passager00').val(nomPassager);
            }
            if ($('input:radio[name="isPrincipalCustomer"]').val() == "1"){
                let nomPassager = $('.coord-lastName').val();
                $('.lastName-passager00').val(nomPassager);
            }
        });

        $(".principal").change(function () {
            if ($(this).val()  == "1") {
                $('.coord-firstName').keyup(function (e) {
                    let prenomPassager = $('.coord-firstName').val();
                    $('.firstName-passager00').val(prenomPassager);
                });
                $('.coord-lastName').keyup(function (e) {
                    let nomPassager = $('.coord-lastName').val();
                    $('.lastName-passager00').val(nomPassager);
                });
            }
            if($(this).val() == "2") {
                $('.firstName-passager00').val(null);
                $('.lastName-passager00').val(null);
                $('.coord-firstName').keyup(function (e) {
                    let prenomPassager = null;
                    $('.firstName-passager00').val(prenomPassager);
                });
                $('.coord-lastName').keyup(function (e) {
                    let nomPassager = null;
                    $('.lastName-passager00').val(nomPassager);
                });
            }

        });
    </script>
@endsection

