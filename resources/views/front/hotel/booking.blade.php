@extends('base.front')
@section('style')
    <style>
        body{
            background-color: #f0f2f3!important;
        }
    </style>
@endsection
@section('body')

    @php

    	use Illuminate\Support\Str;

        $checkIn=Carbon\Carbon::parse($book['checkIn']);
        $checkOut=Carbon\Carbon::parse($book['checkOut']);
        setlocale(LC_TIME, 'fr_FR.utf8','fra');
    @endphp


    <div class="container">
        @include('front.hotel.partials._process')
    </div>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content" style="background: #E5E5E5;">
                <div class="py-0 pt-2 modal-header" style="border-bottom: none;">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body p-0">
                    @include('front._includes.authentication')
                </div>
            </div>
        </div>
    </div>

    <!-- Modal inscrire -->
    <div class="modal fade" id="inscrireModal" tabindex="-1" aria-labelledby="inscrireModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content" style="background: #E5E5E5;">
                <div class="modal-header py-0 pt-2" style="border-bottom: none;">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body p-0">
                    @include('front._includes.inscription')
                </div>
            </div>
        </div>
    </div>


@endsection
@section('js')


    <script src="{{ asset('js/condition-annulation.js') }}"></script>

    <script>
        $(document).on("click", "#submit", function () {
            let formHotelApi = $("#formHotelApi");
            let data = formHotelApi.serialize();
            // let route = formHotelApi.attr('action');
            $.ajax({
                type: 'post',
                url: "{{route('api.hotel.booking')}}",
                data: data,
                dataType: 'json',
                success: function (data) {
                    // start lading

                    console.log(data)
                    //window.location.replace(data);

                }, error: function (data) {
                    console.log(data)
                }
            })
            // $("#formPackage").submit();
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

        $(document).ready(function () {
            let scrollTop = 0;
            let lastScrollTop = 0;
            $('.web').addClass('bg-header-blue');
            $(document).scroll(function (event) {
                let scrolltop = $(this).scrollTop();
                if (scrolltop > lastScrollTop) {

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
            if ($('input:radio[name="isPrincipalCustomer"]').val() !== "1") {
                let prenomPassager = null;
                $('.firstName-passager00').val(prenomPassager);
            }
            if ($('input:radio[name="isPrincipalCustomer"]').val() == "1") {
                let prenomPassager = $('.coord-firstName').val();
                $('.firstName-passager00').val(prenomPassager);
            }
        });

        $('.coord-lastName').keyup(function (e) {
            if ($('input:radio[name="isPrincipalCustomer"]').val() !== "1") {
                let nomPassager = null;
                $('.lastName-passager00').val(nomPassager);
            }
            if ($('input:radio[name="isPrincipalCustomer"]').val() == "1") {
                let nomPassager = $('.coord-lastName').val();
                $('.lastName-passager00').val(nomPassager);
            }
        });


        $(".principal").change(function () {

            if ($(this).val() == "1") {
                $('.coord-firstName').keyup(function (e) {
                    let prenomPassager = $('.coord-firstName').val();
                    $('.firstName-passager00').val(prenomPassager);
                });
                $('.coord-lastName').keyup(function (e) {
                    let nomPassager = $('.coord-lastName').val();
                    $('.lastName-passager00').val(nomPassager);
                });
            }

            if ($(this).val() == "2") {
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
