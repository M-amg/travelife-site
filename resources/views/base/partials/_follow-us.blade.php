<section class="follow">
    <div class="container">
        <div class="row">
            <div class="offset-md-1 col-md-4 col-12 text-center text-md-right">
                <p class="px-4 mt-3">@lang('generate.followUs')</p> 
            </div>
            <div class="col-md-1 col-12 text-center pt-md-4">
                <span class="divider mt-2 pb-4 m-auto"></span>
            </div>
            <div class="col-md-5 col-12 text-center text-md-left">
                <ul class="list-unstyled list-inline">
                    @foreach($agency->tlMedias as $media)
                        <li class="social__item mr-3">
                            <a href="{{$media->url}}" target="_blank">
                                <i class="{{$media->tlNameMedia()->first()?$media->tlNameMedia()->first()->icone:""}}"></i>
                            </a>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</section>
