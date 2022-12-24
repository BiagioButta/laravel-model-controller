
@extends('layout.app')

@section('content')
<div class="container">
    <div class="row row-cols-3">
        @foreach ($movies as $key => $movie)
        <div class="col">
            <div class="card" style="width: 18rem;">
                <img src="{{$movie->image}}" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">{{$movie->title}}</h5>
                  <p class="card-text">{{$movie->original_title}}</p>
                  <p class="card-text">Data di uscita {{$movie->date}}</p>
                  <p class="card-text">Voto: {{$movie->vote}}</p>
                  <p class="card-text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Itaque, quam? Excepturi tenetur doloremque delectus neque molestiae unde quam amet at?</p>
                </div>
              </div>
        </div>
        @endforeach
    </div>
</div>
@endsection