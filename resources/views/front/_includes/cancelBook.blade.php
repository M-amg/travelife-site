<div class="modal fade" id="cancelBook" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content" style="border: none;">
            <div class="block block-themed block-transparent remove-margin-b">
                <div class="block-header">
                    <h3 class="block-title"
                        style="padding: 15px;background: #23272b;color: #fff; font-size: 16px;">@lang('generate.confirmCancelation')</h3>
                </div>
                <div class="block-content" style="">
                    <div class="row">
                        <div class="col-sm-12 col-xs-12">
                            <div class="block" style="padding: 30px;">
                                <p style="font-size: 20px">@lang('generate.confirmCancelationBooking') ?</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button class="btn btn-sm btn-light" type="button"
                        data-dismiss="modal">@lang('generate.n')
                </button>
                <a href="{{route('cancelBook')}}" class="btn btn-sm bg-my"
                    style="margin: 0;padding: 5px 12px;"
                    type="submit">Annuler</a>
            </div>
        </div>
    </div>
</div>