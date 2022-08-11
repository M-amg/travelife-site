<style>
  .modal-body p {
    text-align: justify;
  }
</style>
<div class="form-group clearfix ml-3 mb-4">
    
    <label for="accept" class="color-blue">
      <input id="accept" type="checkbox" class="acceptation" style="height: 16px!important; position: relative;
      top: 2px;">
      &nbsp; @lang('generate.confirmAcce')
        <a style="color: #db1018!important;" data-toggle="modal" data-target="#termsOfSales">
            @lang('generate.generalConditionSell')
        </a>
    </label>
</div>

@php($termsOfSales_page = App\models\page\TlPage::all()->where('alias', 'Conditions-generales-de-vente')->first())
@if(!empty($termsOfSales_page))
  @php($termsOfSales_articles = App\models\page\TlArticle::all()->where('tl_page_id', $termsOfSales_page->id))

<!-- Modal -->
<div class="modal fade" id="termsOfSales" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="exampleModalLongTitle">{{ $termsOfSales_page->title }}</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body mt-2 px-5">
        @foreach($termsOfSales_articles as $article)
          <h4 class="mt-5 mb-4">{!! $article->title !!}</h4>
          <div>{!! $article->description !!}</div>
        @endforeach
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-sm btn-light" data-dismiss="modal">@lang('generate.close')</button>
      </div>
    </div>
  </div>
</div>
<!--/Modal-->
@endif
