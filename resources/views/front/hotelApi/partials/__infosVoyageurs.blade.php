@php
    use Illuminate\Support\Str;
    $adults = 0;
    $children = 0;
    foreach ($rooms as $room) {
        $adults += $room["adults"];
        $children += $room["children"];
    }
@endphp


<div class="row">
    

    <div class="col-12 col-md ml-md-4 ml-0 mb-2 mt-2 mb-md-0 mt-md-0 bg-flight">
        
    </div>
</div>
