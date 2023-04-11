<!-- Sto estendendo il layout creato in "app.blade.php" -->
@extends('layouts.app');

<!-- Sto creando il contenuto da mettere dentro il segnaposto 'content' ereditato da layout in App -->
@section('content')

<div class="container text-center">
    <h1>Movies</h1>
</div>

<div class="container py-4">
    <div class="row row-cols-5">

        @foreach ($movies as $movie)
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">{{ $movie->title }}</h5>
                    <p class="card-text"> {{ $movie->original_title }} </p>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item"> {{ $movie->nationality }} </li>
                    <li class="list-group-item"> {{ $movie->date }} </li>
                    <li class="list-group-item">{{ $movie->vote }}</li>
                </ul>
            </div>
        </div>
        @endforeach

    </div>

</div>


@endsection