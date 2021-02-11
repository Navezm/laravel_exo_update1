<table class="table table-striped">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Race</th>
        <th scope="col">Age</th>
        <th scope="col">Img</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($animals as $item)
        <tr>
            <th scope="row">{{$item->id}}</th>
            <td>{{$item->race}}</td>
            <td>{{$item->age}}</td>
            <td>{{$item->src}}</td>
        </tr>
      @endforeach
    </tbody>
</table>