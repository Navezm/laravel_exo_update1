<div class="row">
    @foreach ($animals as $item)
    <div class="card col-4" style="width: 18rem;">
        <a href="/showAnimal/{{$item->id}}"><img src="{{$item->src}}" class="card-img-top" alt=""></a>
        <div class="card-body">
        <h5 class="card-title">{{$item->race}}</h5>
        </div>
    </div>
    @if ($loop->iteration % 3 == 0)
    </div>
    <div class="row">
    @endif
    @endforeach
</div>