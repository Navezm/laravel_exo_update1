<div class="jumbotron">
    <h1 class="display-4">Race : {{$show->race}}</h1>
    <p class="lead">Age : {{$show->age}}</p>
    <hr class="my-4">
    <div class="d-flex">
        <a class="btn btn-primary btn-lg mr-2" href="/editAnimal/{{$show->id}}" role="button">Edit</a>
        <form action="/deleteAnimal/{{$show->id}}" method="POST">
            @csrf
            <button class="btn btn-danger btn-lg" type="submit">Delete</button>
        </form>
    </div>
</div>