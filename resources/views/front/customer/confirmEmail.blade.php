@extends('base.front')
@section('style')
    <link rel='stylesheet' href='{{asset('css/customer.css')}}'/>
@endsection
@section('body')
    @php($agency=\App\models\agency\TlAgency::all()->first())

    <!-- DETAIL WRAPPER -->
    <div class="detail-wrapper">
        <div class="container">
            <div class="container">
                <div class="row padd-90">
                    <div class="col-xs-12 col-md-12">
                        <div class="detail-content-block" style="margin-top: 80px">
                            <h3 class="small-title">Confirmez votre adresse email</h3>
                            <div class="confirm-label bg-dr-blue-2 radius-5">
                                <img class="confirm-img" src="{{asset('assets/img/thx_icon.png')}}" alt="">
                                <div class="confirm-title color-white">Pour continuer à utiliser {{$agency->name}}, vous devez confirmer votre adresse e-mail.
                                </div>
                                <div class="confirm-text color-white-light">Comme vous vous êtes inscrit avec {{$customer->email}}, vous pouvez le faire automatiquement via Votre Boite Mail.
                                </div>
                                <a href="{{route('home')}}" class="confirm-print c-button b-40 bg-white hv-white-o">Retour à l'accueil</a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
