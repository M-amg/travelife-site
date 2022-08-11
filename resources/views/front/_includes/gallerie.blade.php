
<style>
    #gallerie .img-cover{
        height: 339px!important; 
        width: 600px!important;
        padding: 1px;
    }
    #gallerie .imgs{
        height: 169px!important; 
        width: 300px!important;
        padding-right: 2px;
        object-fit: cover;
    }
    #gallerie .box-count{
        background-color: rgba(0, 11, 38, 0.56); 
        color: #fff;
        border-radius: 8px; 
        width:100px;    
        height:36px; 
        font-size: 16px; 
        line-height: 20px; 
        padding: 8px 16px;
        position:absolute; 
        top: 290px;
        right: 5px;
        cursor:pointer;
    }


</style>



<div id="gallerie" class="row pointer mr-0">

    @isset($photos[0])
        <div class="col-12 col-md-6 px-0">
            <img src="@if('api.hotel'!=Route::current()->getName()) {{ config('services.pathImg') }}@endif{{$photos[0]}}" class="img-fluid img-cover w-100">
            @if((sizeof($photos) - 1)>0)
                <div id="gallerie" class="d-md-none d-block box-count">
                    <i class="far fa-images c-white fs-18"></i>
                        <strong>{{ sizeof($photos) - 1 }} +</strong>
                </div>
            @endif
        </div>
    @endisset

    <div class="col-12 col-md-3 pl-0 d-md-block d-none">
        @isset($photos[1])
            <img src="@if('api.hotel'!=Route::current()->getName()) {{ config('services.pathImg') }}@endif{{$photos[1]}}" class="imgs w-100">
        @endisset
        @isset($photos[2])
            <img src="@if('api.hotel'!=Route::current()->getName()) {{ config('services.pathImg') }}@endif{{$photos[2]}}" class="imgs w-100">
        @endisset
    </div>
    <div class="col-12 col-md-3 pl-0 d-md-block d-none">
        @isset($photos[3])
            <img src="@if('api.hotel'!=Route::current()->getName()) {{ config('services.pathImg') }}@endif{{$photos[3]}}" class="imgs w-100">
        @endisset 
        @isset($photos[4])
            <img src="@if('api.hotel'!=Route::current()->getName()) {{ config('services.pathImg') }}@endif{{$photos[4]}}" class="imgs w-100 position-relative">
            @if((sizeof($photos) - 5)>0)
                <div id="gallerieM" class="box-count">
                    <i class="far fa-images c-white fs-18"></i>
                        <strong>{{ sizeof($photos) - 5 }} +</strong>
                </div>
            @endif
        @endisset
    </div>

</div>


