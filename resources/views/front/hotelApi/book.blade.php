@extends('base.front')
@section('style')
<style>
    body{
        background-color: #f0f2f3!important;
    }
</style>
@endsection
@section('body')

    @php

    	use Illuminate\Support\Str;

        $checkIn=Carbon\Carbon::parse($booking['checkIn']);
        $checkOut=Carbon\Carbon::parse($booking['checkOut']);
    @endphp

    <div class="container">
       
        @include('front.hotelApi.partials._process')
    </div>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content" style="background: #E5E5E5;">
                <div class="py-0 pt-2 modal-header" style="border-bottom: none;">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>
                <div class="modal-body p-0">
                    @include('front._includes.authentication')
                </div>
            </div>
        </div>
    </div>

    <!-- Modal inscrire -->
    <div class="modal fade" id="inscrireModal" tabindex="-1" aria-labelledby="inscrireModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content" style="background: #E5E5E5;">
                <div class="modal-header py-0 pt-2" style="border-bottom: none;">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body p-0">
                    @include('front._includes.inscription')
                </div>
            </div>
        </div>
    </div>
@endsection
@include('front.hotelApi._bookjs')
