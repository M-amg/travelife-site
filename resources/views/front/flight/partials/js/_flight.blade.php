@section('js')

    <script src="{{ asset('js/condition-annulation.js') }}"></script>

    <script src="{{asset('assets/daterangepicker/moment.min.js')}}"></script>
    <script src="{{asset('assets/daterangepicker/daterangepicker.js')}}"></script>
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

        // change form

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
                                $('.' + val).html(element.CityName);
                                $('.' + val + "-name").html(element.AirportName)
                            }
                        })
                    });
                }
            });
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

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


    <script>


        $('.coord-firstName').keyup(function (e) {
            if ($('input:radio[name="isPrincipalCustomer"]').val() !== "1"){
                let prenomPassager = null;
                $('.firstName-passager0').val(prenomPassager);
            }
            if ($('input:radio[name="isPrincipalCustomer"]').val() == "1"){
                let prenomPassager = $('.coord-firstName').val();
                $('.firstName-passager0').val(prenomPassager);
            }
        });

        $('.coord-lastName').keyup(function (e) {
            if ($('input:radio[name="isPrincipalCustomer"]').val() !== "1"){
                let nomPassager = null;
                $('.lastName-passager0').val(nomPassager);
            }
            if ($('input:radio[name="isPrincipalCustomer"]').val() == "1"){
                let nomPassager = $('.coord-lastName').val();
                $('.lastName-passager0').val(nomPassager);
            }
        });



        $(".principal").change(function () {

            if ($(this).val()  == "1") {
                $('.coord-firstName').keyup(function (e) {
                    let prenomPassager = $('.coord-firstName').val();
                    $('.firstName-passager0').val(prenomPassager);
                });
                $('.coord-lastName').keyup(function (e) {
                    let nomPassager = $('.coord-lastName').val();
                    $('.lastName-passager0').val(nomPassager);
                });
            }

            if($(this).val() == "2") {
                $('.firstName-passager0').val(null);
                $('.lastName-passager0').val(null);
                $('.coord-firstName').keyup(function (e) {
                    let prenomPassager = null;
                    $('.firstName-passager0').val(prenomPassager);
                });
                $('.coord-lastName').keyup(function (e) {
                    let nomPassager = null;
                    $('.lastName-passager0').val(nomPassager);
                });
            }

        });


    </script>

<script>
    $(document).ready(function () {


        $(".detaliPan1").hide();
        $(".detaliPan2").hide();
        last1 = $("#last1").val();
        last2 = $("#last2").val();

        if(last1 == 0 && last2 == 0)
            $(".btnPan").hide();

        $(".btnPan").click(function () {
            if (last1 != 0)
                $('.detaliPan1').slideToggle(500);
            if (last2 != 0)
                $('.detaliPan2').slideToggle(500);
        });

    })
</script>

@endsection
