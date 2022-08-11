<!-- <div class="main-wraper padd-90 background-block" style="background-image: url('{{asset('front/img/home_10/bg_1.jpg')}}');">
    <img class="center-image" src="{{asset('front/img/home_10/bg_1.jpg')}}" alt="" style="display: none;">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-8 col-sm-offset-2">
                <div class="second-title">
                    <h2 class="color-white">Inscription Newsletter</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12 col-sm-8 col-sm-offset-2">
                <form class="subscribe-form" id="report" action="{{route('addNewsLetter')}}">
                    @csrf
                    <div class="subscribe-input input-style-1 fl low-pad">
                        <input type="text" id="email" name="email" required="" placeholder="Enter your email">
                    </div>
                    <button type="submit" class="c-button b-60 bg-red-3 hv-red-3-o fr"><span>subscribe</span></button>
                </form>
            </div>
        </div>
    </div>
</div> -->

<!-- <style type="text/css">
    .subscribe-email {
    background-color: #ffdd00;
}
.footer-main {
    font-size: 12px;
    text-align: center;
    color: #8e8e8e;
    background-color: #121212;
    background-image: url(../images/background/bg-footer.jpg);
    background-repeat: repeat;
    background-attachment: fixed;
    background-position: center;
    -webkit-background-size: cover;
    background-size: cover;
}
.subscribe-email-wrapper .subscribe-email-left {
    float: left;
}
.subscribe-email-title {
    font-size: 20px;
    font-weight: 500;
    margin-bottom: 10px;
    color: #4d4d4d;
}
.subscribe-email-title .logo-text {
    font-size: 34px;
    font-weight: bold;
}
.subscribe-email-text {
    font-size: 16px;
    margin-bottom: 0;
    color: #666666;
}
.subscribe-email-wrapper .subscribe-email-right {
    float: right;
    margin-top: 15px;
}
.form-subscribe-email .form-control {
    height: 40px;
    padding-left: 20px;
    color: #ddeaf0;
    border: none;
    background-color: transparent;
    box-shadow: none;
}
</style> -->

<!-- <div class="subscribe-email" style="padding-top: 30px;padding-bottom: 30px">
                        <div class="container">
                            <div class="subscribe-email-wrapper">
                                <div class="subscribe-email-left">
                                    <p class="subscribe-email-title">Abonnez- vous à
                                        <span class="logo-text">Levoyageur.ma</span>&nbsp;pour recevoir les dernières offres </p>
                                    <p class="subscribe-email-text"> Inscrivez-vous à la Newsletter pour bénéficier d'offres spéciales, être informé des nouveautés..</p>
                                </div>
                                <div class="subscribe-email-right">
                                   <form class="subscribe-form" id="report" action="{{route('addNewsLetter')}}">
                    @csrf
                    <div class="subscribe-input input-style-1 fl low-pad">
                        <input type="text" id="email" name="email" required="" placeholder="Votre Adresse Email">
                    </div>
                    <button type="submit" class="c-button b-60 bg-red-3 hv-red-3-o fr"><span>S'inscrir</span></button>
                </form>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div> -->

<section >
    <div class="py-5 mt-5">
        <div class="container">
            <div class="row align-items-center">

                <section class="row lowcost" style="margin-right: 0px;">
                        <div class="col-md-6">
                            <div class="col-lg-12 content">
                                <h2 >@lang('generate.about2') <span  style="color: #07a9ca">Jambotours voyages</span></h2>
                                <p style="font-size:14px; font-weight:400; text-align: justify;"> <span style="font-size:17px">Jambotours.com @lang('generate.agenceIs')</span><br>
                                <br>
                                {{ config('app.name') }} @lang('generate.agenceIs2')</p>
                            </div>
                        </div>
                        <div class="col-md-6 visible-lg visible-md nopadding">
                           <h2 >@lang('generate.why') <span  style="color: #07a9ca">@lang('generate.chooseUs')?</span></h2>
                           <div class="row">
                              <div class=" col-md-6 pr-3">
                                <div>
                                  <span> <i class="far fa-smile"></i> </span>
                                  <span class="display-5 pl-1 bold"> @lang('generate.guaranteeBestPrice')</span>
                                  <p class="section-content-text align-left mbr-fonts-style display-10 pl-4 pt-1">
                                    @lang('generate.withBestPrice')
                                  </p>
                                </div>
                                <div>
                                  <span> <i class="fas fa-umbrella"></i> </span>
                                  <span class="display-5 pl-1 bold"> @lang('generate.stayChoice')</span>
                                  <p class="section-content-text align-left mbr-fonts-style display-10 pl-4 pt-1">
                                    @lang('generate.selectionOfHotels')
                                  </p>
                                </div>
                              </div>
                              <div class=" col-md-6 pl-4">
                                <div>
                                  <span> <i class="fas fa-gift"></i> </span>
                                  <span class="display-5 pl-1 bold"> @lang('generate.servicesOfQlt')</span>
                                  <p class="section-content-text align-left mbr-fonts-style display-10 pl-4 pt-1">
                                    @lang('generate.guaranteeOurServices')
                                  </p>
                                </div>
                                <div>
                                  <span> <i class="fas fa-star"></i> </span>
                                  <span class="display-5 pl-1 bold"> @lang('generate.travelQlt')</span>
                                  <p class="section-content-text align-left mbr-fonts-style display-10 pl-4 pt-1">
                                    @lang('generate.expertsAdviceU ')
                                  </p>
                                </div>
                              </div>
                            </div>
                        </div>
                </section>
            </div>

        </div>
    </div>
</section>
