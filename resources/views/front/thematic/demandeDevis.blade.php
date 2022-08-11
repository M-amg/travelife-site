@extends('base.front')
@section('style')


@endsection


@section('body')

<header class="position-relative">
    <div class="owl-carousel owl-theme owl-slid d-none d-md-block">

        @php($slide=\App\models\page\TlSlider::all()->where('property', 'devis')->where('status', 1)->first())

        @isset($slide)
            <div class="item" style="max-height: 500px; height: 500px;
                background-image: url({{config('services.pathImg').$slide->picture}});
                background-size: cover; background-repeat: no-repeat; background-position: center;">

                <div class="container w-100 d-none d-md-block div-text-slider" style="margin-top: 80px;">
                    <h1 class="text-center w-80 pt-4 bold c-white" style="margin-top: 100px">{{$slide->title}}</h1>
                </div>
            </div>
        @endisset

    </div>
</header>


    <div class="demandeDevis bg-w">

    <section>
        <div class="container p-5">
            <p class="color-blue text-center fs-16 px-5 py-5">
                @lang('generate.partOfProject')
            </p>
            <form action="{{ route('contact.devis') }}" method="post">
                @csrf
                <div class="row">
                    <div class="col-md col-12">
                        <h2 class="bold color-blue fs-18 mb-4">@lang('generate.urPrTravel')</h2>
                        <div class="mb-3">
                            <label for="destination" class="form-label color-blue fs-14">Destination *</label>
                            <input type="text" class="form-control" id="destination" placeholder="@lang('generate.toChoice')"
                                name="destination">
                        </div>
                        <div class="mb-3">
                            <label for="duree" class="form-label color-blue fs-14">@lang('generate.duration') @lang('generate.in') {{ lcfirst(trans('generate.days')) }} *</label>
                            <input type="text" class="form-control" id="duree" placeholder="Exemple : 15"
                            name="duree">
                        </div>
                        <div class="mb-3">
                            <label for="villeDepart" class="form-label color-blue fs-14">@lang('generate.departCity') *</label>
                            <input type="text" class="form-control" id="villeDepart" placeholder="Exemple : Casablanca"
                            name="villeDepart">
                        </div>
                        <div class="mb-3">
                            <label for="prenom" class="form-label color-blue fs-14">@lang('generate.firstname') *</label>
                            <input type="text" class="form-control" id="prenom" placeholder="@lang('generate.enter') @lang('generate.firstname')"
                            name="prenom">
                        </div>
                        <div class="mb-3">
                            <label for="tel" class="form-label color-blue fs-14">@lang('generate.phone') *</label>
                            <input type="text" class="form-control" id="tel" placeholder="Exemple : 0522942828"
                            name="tel">
                        </div>
                        <div class="mb-3">
                            <label for="nbrAdulte" class="form-label color-blue fs-14">@lang('generate.nbAdult') *</label>
                            <input type="text" class="form-control" id="nbrAdulte" placeholder="Exemple : 2"
                            name="nbrAdulte">
                        </div>
                    </div>
                    <div class="col-md col-12">
                        <h2 class="bold color-blue fs-18"></h2>
                        <div class="mb-3" style="margin-top: 45px;">
                            <label for="dateDepart" class="form-label color-blue fs-14">@lang('generate.dateDepart') *</label>
                            <input type="text" class="form-control" id="dateDepart" placeholder="Même approximative"
                            name="dateDepart">
                        </div>
                        <div class="mb-3">
                            <label for="budget" class="form-label color-blue fs-14">
                                Budget @lang('generate.in') {{ $currencyText }} (@lang('generate.Perperson')) *</label>
                            <input type="text" class="form-control" id="budget" placeholder="Exemple : 3 000"
                            name="budget">
                        </div>
                        <div class="mb-3">
                            <label for="pays" class="form-label color-blue fs-14">@lang('generate.residenceCoutry') *</label>
                            <input type="text" class="form-control" id="pays" placeholder="Exemple : Maroc"
                            name="pays">
                        </div>
                        <div class="mb-3">
                            <label for="nom" class="form-label color-blue fs-14">
                                @lang('generate.lastname') *</label>
                            <input type="text" class="form-control" id="nom" placeholder="@lang('generate.enter') @lang('generate.lastname')"
                            name="nom">
                        </div>
                        <div class="mb-3">
                            <label for="emailadress" class="form-label color-blue fs-14">
                                E-mail *</label>
                            <input type="text" class="form-control" id="emailadress" placeholder="@lang('generate.enter') e-mail"
                            name="emailadress">
                        </div>
                        <div class="mb-3">
                            <label for="nbrEnfant" class="form-label color-blue fs-14">
                                @lang('generate.nbChild') *</label>
                            <input type="text" class="form-control" id="nbrEnfant" placeholder="Exemple : 2"
                            name="nbrEnfant">
                        </div>
                    </div>

                    @include('front.thematic._authentificationDevis')

                </div>
                <div class="mb-3 mt-5">
                    <label for="description" class="form-label color-blue fs-14">
                        @lang('generate.describeProject') *
                    </label>
                    <textarea class="form-control" id="description" rows="12"  name="description"
                    placeholder="Faites-nous part de ce qui est important pour vous : votre style de voyage, vos envies, les étapes de voyage que vous aimeriez faire, si vous souhaitez combiner plusieurs destinations ... &#10;Plus votre description est précise, mieux nous pourrons cerner votre profil voyageur et vous conseiller afin de créer ensemble le voyage qui vous ressemble."></textarea>
                </div>
                <div class="d-flex justify-content-center">
                    <input type="submit" value="Demander un devis" class="btn bg-my text-white rounded-0 my-5"
                    style="width: 280px;">
                </div>
            </form>


            <p class="mb-5 pb-1" style="color: #c3c3c3;">* @lang('generate.fieldO')</p>


        </div>
    </section>

</div>



@endsection

@section('js')

<script src="{{asset('js/header-scroll.js')}}"></script>
<script>
           $("#submitLogin").click(function () {
            var email = $('#emailLogin').val();
            var password = $('#passwordLogin').val();
            console.log(email);
            $.ajax({
                url: "{{route("customer.loginReservation")}}",
                type: "POST",
                data: {"email": email, 'password': password, '_token': '{{csrf_token()}}'},
                dataType: 'json',
                success: function (data) {
                    console.log(data)
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


@endsection
