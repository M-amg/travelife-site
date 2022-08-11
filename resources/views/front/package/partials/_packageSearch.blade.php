<form action="{{route('front.packages')}}" autocomplete="off" method="get">
    <div class="container py-3 booking-search">
        <div class="row mb-1 mt-3 px-2">
            <div class="form-group col-md col-12 px-2 pr-0">
                <select id="destination" class="form-control-new" name="destination">
                    <option value="" selected disabled style="margin-bottom: 5px;">Destination</option>
                    @foreach($destinations as $destination)
                        <option value="{{$destination["id"]}}">{{$destination["country"]}}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group col-md col-12 px-2 pr-0">
                <select id="Period" class="form-control-new newsearch" name="period">
                    <option value="" selected disabled style="margin-bottom: 5px;">
                        @lang('generate.travelDate')</option>
                    @foreach($periods as $period)
                        <option value="{{$period}}"> 
                            @lang('generate.'.substr($period, 0, -5))-{{ substr($period, -4, 5) }} </option>
                    @endforeach
                </select>
            </div>

            <div class="form-group col-md col-12 px-2 pr-0">
                <select id="minDays" class="form-control-new newsearch" name="minDays">
                    <option value="" selected disabled style="margin-bottom: 5px;">@lang('generate.traveltime')</option>
                    @foreach($duree as $dure)
                        <option value="{{$dure}}">{{$dure}} @lang('generate.days')</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group col-md col-12 px-2 pr-0">
                <select id="thematic" class="form-control-new newsearch" name="thematic[]">
                    <option value="" selected disabled style="margin-bottom: 5px;">@lang('generate.travelType')</option>
                    @foreach($thematics as $type)
                        <option value="{{$type->id}}">{{$type->title}}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group col-md col-12 px-2 pr-0">
                <button type="submit" class="btn bg-my btn-block rounded-0" style="height:  50px;">@lang('generate.searchFor')
                </button>
            </div>
        </div>
    </div>
</form>
