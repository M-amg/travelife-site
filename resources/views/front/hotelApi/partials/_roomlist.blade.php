<div class="container detail-hotel__rooms pb-3">
    <h2 style="font-size: 22px;">@lang('generate.room')s</h2>
    @foreach ($hotel['rates'] as $rate_key => $rate)
        <div class="mb-3 p-3 bg-white" style="border: 1px solid rgb(221, 223, 226);">
            <form method="post" action="{{ route('api.hotel.book') }}">
                @csrf
                <div class="row">

                    <div class="col-md-5">
                        <div class="row">
                            @foreach ($rate['rooms'] as $key => $room)
                                <input type="hidden" name="confirmedRooms[{{$key}}][roomCode]"
                                       value="{{$room['roomCode']}}"/>
                                <input type="hidden" name="confirmedRooms[{{$key}}][boardId]"
                                       value="{{$room['includedBoard']['boardId']}}"/>
                                <div class="col-md-6 col-12" style="font-weight: bold; font-size: 14px;">
                                    {{ $room['description'] }}
                                </div>
                                <div class="col-md-2">
                                    @for($i = 0; $i < $room['adults']; $i++)
                                        <i class="fa fa-user fa-lg" aria-hidden="true"></i>
                                    @endfor
                                    @for($i = 0; $i < $room['children']; $i++)
                                        <i class="fa fa-user" aria-hidden="true"></i>
                                    @endfor
                                </div>
                                <div class="col-md-4" style="text-transform: lowercase;">
                                    {{ $room['includedBoard']['description']}}
                                </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="col-md-3">


                        <a href="#" data-toggle="modal" class="cancel-conditions"
                           data-target="#cancel_conditions_{{$rate_key}}">@lang('generate.conditionOfCancel')</a>
                        <!-- Modal -->
                        <div class="modal fade" id="cancel_conditions_{{$rate_key}}"
                             tabindex="-1" role="dialog"
                             aria-labelledby="cancel_conditions_{{$rate_key}}_Label"
                             aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-body">
                                        <table width="100%">
                                            <tr>
                                                <th class="text-center bold text-blue" style="padding-top: 0; padding-bottom: 15px;">@lang('generate.conditionOfCancel')</th>
                                            </tr>
                                            <br>
                                            @foreach($rate['cancelPolicies'] as $policy)
                                                <tr>
                                                    <td>@lang('generate.forCancelation') : <b>{{$policy['cancelTime'] ? (new \DateTime($policy['cancelTime']))->format('d/m/Y') : ''}}</b>,
                                                        @lang('generate.beBilled') <b>
                                                            @if($policy['type'] === 'amount')

                                                                @if($policy['amount'])
                                                                    @php($ratio_to_price = $policy['amount'] * 100 / $rate['totalPrice'])
                                                                    @if($ratio_to_price >= 90 && $ratio_to_price <= 100)
                                                                        @php($policy['amount'] = $rate['totalPrice'])
                                                                    @endif
                                                                @else
                                                                    @php($policy['amount'] = '')
                                                                @endif


                                                                {{$policy['amount']}}<br>
                                                            @else
                                                                {{$policy['amount']}}%
                                                        </b> @lang('generate.TotalAmountB')<br>
                                                        @endif
                                                        {{$policy['cancellationPolicy'] ?? ''}}
                                                    </td>
                                                </tr>
                                            @endforeach

                                        </table>
                                        <br>
                                        <span style="color: #db1018; font-weight:bold">@lang('generate.freeCancelation'). </span>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn bg-my"
                                                data-dismiss="modal">OK
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        @if($rate['refund'] == 'RFN')
                            <span class="badge badge-success">Annulation gratuite</span>
                        @endif

                    </div>

                    <div class="col-md-2" style="text-align: center;">
                        <span style="color: #db1018;; font-weight: bold; font-size: 17px;">
                            {{ number_format($rate['totalPrice']*$currency, 0, ',', ' ') }} {{$currencyText }}</span> <br>
                        <div class="p-2"><span class="mb-2">pour</span>
                            <span class="mb-2 mx-1 font-weight-bold"> {{$searchParameters['stayDuration'] ?? ''}} {{str_plural('nuit', $searchParameters['stayDuration'])}} </span>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <button class="btn bg-my rounded-0 btn-block"
                                type="submit">@lang('generate.toBook')</button>
                        <input type="hidden" name="rate" value="{{$rate['rateCode']}}"/>
                        <input type="hidden" name="hotel" value="{{$hotel['code']}}"/>

                        <input type="hidden" name="result_id" value="{{$search_session_id}}"/>
                        <input type="hidden" name="rate_id" value="{{$rate_key}}"/>
                        <input type="hidden" name="p" value="{{app('request')->input('p')}}"/>
                    </div>

                </div>
            </form>
        </div>
    @endforeach
</div>
