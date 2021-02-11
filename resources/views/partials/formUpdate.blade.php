<h1 class="text-center">{{$show->race}}</h1>
<form action="/updateAnimal/{{$show->id}}" method="POST">
    @csrf
    <div class="form-group">
      <label>Animal Race</label>
      <input type="text" name="race" class="form-control" value="{{$show->race}}">
    </div>
    <div class="form-group">
        <label>Age</label>
        <input type="number" name="age" class="form-control" value="{{$show->age}}">
    </div>
    <div class="form-group">
        <label>Image Link</label>
        <input type="text" name="src" class="form-control" value="{{$show->src}}">
    </div>
    <button type="submit" class="btn btn-primary">Update</button>
</form>