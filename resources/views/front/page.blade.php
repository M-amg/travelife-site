@extends('base.front')
@section('style')
@endsection
@section('body')
    <!-- INNER-BANNER -->

    @if (!empty($page->icone))
        <div class="flexslider slider item img-fluid"  id="slider-1" style="background: url({{config('services.pathImg').$page->icone}}); height: 500px; background-size: 100% 100%; background-repeat: no-repeat; display: flex; justify-content: center; align-items: center">
            <h1 class="bold c-white">
                {{$page->name}}
            </h1>
        </div>
    @endif

    <div id="form-revendeur" class="modal fade animate" data-backdrop="true" tabindex="-1" role="dialog"
        aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">@lang('generate.Contactez-nous') !</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="container">
                        <form action="{{ route('contact.professionnels') }}" method="POST" id="formContactProfessionnels">
                            @csrf

                            <div class="form-group d-flex">
                                <div class="col-md-4"><label class="form-label" for="email">Email *</label></div>
                                <div class="col-md-8">
                                    <input type="email" required
                                    class="form-input border {{ $errors->has('email') ? ' is-invalid' : '' }}"
                                    value="{{old('email')}}" id="email"
                                    name="email" placeholder="Email">
                                </div>
                            </div>
                            <div class="form-group d-flex">
                                <div class="col-md-4"><label for="prenom">@lang('generate.firstname') *</label></div>
                                <div class="col-md-8">
                                    <input type="text" required
                                    class="form-input border {{ $errors->has('prenom') ? ' is-invalid' : '' }}"
                                    value="{{old('prenom')}}" id="prenom"
                                    name="prenom" placeholder="@lang('generate.firstname')">
                                </div>
                            </div>
                            <div class="form-group d-flex">
                                <div class="col-md-4"><label for="nom">@lang('generate.lastname') *</label></div>
                                <div class="col-md-8">
                                    <input type="text" required
                                    class="form-input border {{ $errors->has('nom') ? ' is-invalid' : '' }}"
                                    value="{{old('nom')}}" id="nom"
                                    name="nom" placeholder="@lang('generate.lastname')">
                                </div>
                            </div>
                            <div class="form-group d-flex">
                                <div class="col-md-4"><label for="entreprise">Entreprise *</label></div>
                                <div class="col-md-8">
                                    <input type="text" required
                                    class="form-input border {{ $errors->has('entreprise') ? ' is-invalid' : '' }}"
                                    value="{{old('entreprise')}}" id="entreprise"
                                    name="entreprise" placeholder="Entreprise">
                                </div>
                            </div>
                            <div class="form-group d-flex">
                                <div class="col-md-4"><label for="tel">@lang('generate.phone') *</label></div>
                                <div class="col-md-8">
                                    <input type="text" required
                                    class="form-input border {{ $errors->has('tel') ? ' is-invalid' : '' }}"
                                    value="{{old('tel')}}" id="tel"
                                    name="tel" placeholder="Ex : +212661234567">
                                </div>
                            </div>
                            <div class="form-group d-flex">
                                <div class="col-md-4"><label for="budget">@lang('generate.travelBudget') *</label></div>
                                <div class="col-md-8">
                                    <input type="text" required
                                    class="form-input border {{ $errors->has('budget') ? ' is-invalid' : '' }}"
                                    value="{{old('budget')}}" id="budget"
                                    name="budget" placeholder="Montant en {{ $currencyText }}">
                                </div>
                            </div>
                            <div class="form-group d-flex">
                                <div class="col-md-4"><label for="duree">@lang('generate.traveltime') *</label></div>
                                <div class="col-md-8">
                                    <input type="text" required
                                    class="form-input border {{ $errors->has('duree') ? ' is-invalid' : '' }}"
                                    value="{{old('duree')}}" id="duree"
                                    name="duree" placeholder="Durée en jours">
                                </div>
                            </div>
                            <div class="form-group d-flex">
                                <div class="col-md-4"><label for="period">@lang('generate.travelPeriod') *</label></div>
                                <div class="col-md-8">
                                    <input type="text" required
                                    class="form-input border {{ $errors->has('period') ? ' is-invalid' : '' }}"
                                    value="{{old('period')}}" id="period"
                                    name="period" placeholder="Ex : 01/01/2022 - 05/01/2022">
                                </div>
                            </div>
                            <div class="form-group d-flex">
                                <div class="col-md-4"><label for="objet">@lang('generate.object') *</label></div>
                                <div class="col-md-8">
                                    <input type="text" required
                                    class="form-input border {{ $errors->has('objet') ? ' is-invalid' : '' }}"
                                    value="{{old('objet')}}" id="objet"
                                    name="objet" placeholder="Ex : Séminaire atypique">
                                </div>
                            </div>
                            <div class="form-group d-flex">
                                <div class="col-md-4"><label for="msg">Message *</label></div>
                                <div class="col-md-8">
                                    <textarea class="form-input border" name="msg" required rows="5" id="msg"
                                    placeholder="Veuillez nous décrire votre projet le plus précisément possible : ce qui est important pour vous, vos envies, vos attentes, le contexte de l’événement ..."></textarea>
                                </div>
                            </div>

                            <div class="form-group d-flex">
                                <div class="col-md-4"></div>
                                <div class="col-md-4">
                                    <input type="submit" class="btn bg-my btn-block rounded-0 mb-2"
                                    value="Envoyer">
                                </div>
                                <div class="col-md-4"></div>
                            </div>
                            <p>@lang('generate.fieldObligatoire')</p>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="main-wraper  padd-90 m-t-30 mt-5">
        <div class="container">

            @foreach($page->tlArticles as $article)
                <div class="row m-b-30" >
                    <div class="col-md-12">
                        {!! $article->description !!}
                    </div>
                    <!-- <div class="col-md-4">
                        @if($article->icone)
                            <img src="{{config('services.pathImg').$article->icone}}" style="width: 100%">
                        @endif
                    </div> -->
                </div>
            @endforeach
        </div>
    </div>
@endsection
@section('js')




<script>


if ($(".flexslider")[0]){
    console.log('flexslider exist');
    // Do something if class exists

} else {
    // Do something if class does not exist
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
}

</script>

@endsection
