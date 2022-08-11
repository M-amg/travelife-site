@section('js')
    <script src="{{ asset('js/condition-annulation.js') }}"></script>
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

