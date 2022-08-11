
<div class="main-wraper padd-90" style="padding: 50px">
    <div class="swiper-container" data-autoplay="0" data-loop="1" data-speed="1000" data-center="0" data-slides-per-view="responsive" data-mob-slides="1" data-xs-slides="2" data-sm-slides="3" data-md-slides="4" data-lg-slides="5" data-add-slides="6">
        <div class="swiper-wrapper">
            @foreach($carriers as $carrier)
            <div class="swiper-slide">
                <div class="partner-entry">
                    <a href="#"><img class="img-responsive" src="https://www.gstatic.com/flights/airline_logos/70px/{{$carrier->code}}.png" alt=""></a>
                </div>
            </div>
            @endforeach
        </div>
        <div class="pagination pagination-hidden"></div>
    </div>
</div> 