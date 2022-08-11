@extends('base.front')
@section('body')
    <iframe id="iframeCruiseSearcher" name="iframeCruiseSearcher" class="iframeCruiseBrowser" frameborder="0" width="100%" height="101%" onload="onloadiframe(this)" src="http://lasarenas.istinfor.com/inici.aspx?iframeid=iframeCruiseSearcher"></iframe>
@endsection
@section('js')
    <script src="http://lasarenas.istinfor.com/includes/jquery/jsparent.js" type="text/javascript"></script>
@endsection