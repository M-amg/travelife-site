<div id="search">
    <form action="{{route('front.packages')}}" method="get">
        <div class="container py-3 booking-search">
            <div class="row mb-1 mt-3 px-2">
                <div class="form-group col-md col-sm-12 pl-1 pr-0">
                    <select id="destination" class="form-control-new " name="category">
                        <option value="" disabled style="margin-bottom: 5px;">Destination</option>
                        @foreach($destinations as $destination)
                            <option @if(request()->get('destination')==$destination["id"])  selected @endif 
                                value="{{$destination["id"]}}">{{$destination["country"]}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group col-md col-sm-12 pl-1 pr-0">
                    <select id="Period" class="form-control-new newsearch" name="period">
                        <option value="" selected disabled style="margin-bottom: 5px;">@lang('generate.travelDate')</option>
                        @foreach($periods as $period)
                            <option @if(request()->get('period')==$period)  selected @endif value="{{$period}}">{{$period}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group col-md col-sm-12 pl-1 pr-0">
                    <select id="minDays" class="form-control-new newsearch" name="minDays">
                        <option value="" selected disabled style="margin-bottom: 5px;">@lang('generate.traveltime')</option>
                        @foreach($duree as $dure)
                            <option  @if(request()->get('minDays')==$dure)  selected @endif value="{{$dure}}">{{$dure}} Jours</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group col-md col-sm-12 pl-1 pr-0">
                    <select id="thematic" class="form-control-new newsearch" name="thematic[]">
                        <option value="" selected disabled style="margin-bottom: 5px;">@lang('generate.travelType') </option>
                        @foreach($thematics as $key =>$thematic)
                            <option @if(request()->input("thematic.$key")==$thematic->id) selected @endif value="{{$thematic->id}}">
                                {{$thematic->title}}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group col-md col-sm-12 pl-1 pr-0">
                    <button type="submit" style="height:50px;" class="btn bg-my btn-block text-white w-100 rounded-0">
                        @lang('generate.searchFor')
                    </button>
                </div>
            </div>
        </div>
    </form>
</div>
