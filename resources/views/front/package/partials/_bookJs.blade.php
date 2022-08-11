@section('js')

    <script src="{{ asset('js/condition-annulation.js') }}"></script>


    

    <script>
        $("#continuerPaiement").click(function () {
            $('.verify').removeClass('show');
            $('.payment').addClass("show");
        });
    </script>

    <script>
        $(document).ready(function () {
            currency = parseFloat("{{$currency}}");
            currencyText = "{{$currencyText}}";
            $(".benefit").change(function () {
                id = $(this).data('benefit');
                price = parseInt($(this).data('price'));
                nb = parseInt($(this).val());
                total = price * nb;
                if (price == 0) {
                    $("#priceBenefit" + id).html('Gratuite');
                    $("#priceBenefit" + id).data('price', 0)
                } else {
                    $("#priceBenefit" + id).html(total > 0 ? total + currencyText : '');
                    $("#priceBenefit" + id).data('price', total)
                }
                if (nb > 0)
                    $("#benefit" + id).val(id);
                else
                    $("#benefit" + id).val('');

                totalText = $("#total");
                totalPrice=0;
                $('.benefitPrice').each(function (key, val) {
                    totalPrice+=parseFloat($(this).data('price'));
                })
                totalPrice += parseFloat(totalText.data('price'));
                totalText.html(`Total : ${totalPrice} ${currencyText}`);
            });

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
        });
        $("#submitCreate").click(function () {
            var email = $('#email').val();
            var password = $('#password').val();
            var name = $('#name').val();
            var lastname = $('#lastName').val();
            $.ajax({
                url: "{{route("customer.CreatedByAjax")}}",
                type: "POST",
                data: {
                    "name": name,
                    "lastName": lastname,
                    "email": email,
                    'password': password,
                    '_token': '{{csrf_token()}}'
                },
                dataType: 'json',
                success: function (data) {
                    if (data == 'success') {
                        location.reload();
                    } else {
                        toastr.error(data, 'Error');
                    }

                }, error: function (data) {
                    $.each(data.responseJSON.errors, function (key, val) {
                        toastr.error(val, key);
                    });
                }
            })
        });

        $(".pay").click(function () {
            id = $(this).data("id");
            $("#payment").val(id);
        })

    </script>

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
@endsection
