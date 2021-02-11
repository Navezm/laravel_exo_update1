<h1 class="text-center">Add Animal</h1>
<form action="/addAnimal" method="POST">
    @csrf
    <div class="form-group">
      <label>Animal Race</label>
      <input type="text" name="race" class="form-control">
    </div>
    <div class="form-group">
        <label>Age</label>
        <input type="number" name="age" class="form-control">
    </div>
    <div class="form-group">
        <label>Image Link</label>
        <input type="text" name="src" class="form-control">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>