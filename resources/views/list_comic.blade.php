@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="card mb-3 mt-3">
            @forelse ($comics as $comic)
                <div class="row mb-2">
                    <div class="col-md-4">
                        <img src="{{ asset('storage/' . $comic->thumb) }}" class="img-fluid rounded-start" alt="...">
                    </div>
                    <div class="col-md-8 card ">
                        <div class="card-body">
                            <h5 class="card-title">{{ $comic->title }}</h5>
                            <p class="card-text">{{ $comic->description }}</p>
                            <p class="card-text text-body-secondary">{{ $comic->price }}</p>
                            <p class="card-text text-body-secondary">{{ $comic->sale_date }}</p>
                            <p class="card-text text-body-secondary">{{ $comic->type }}</p>
                            <p class="card-text text-body-secondary">{{ $comic->artists }}</p>
                            <p class="card-text text-body-secondary">{{ $comic->writers }}</p>
                        </div>
                    </div>


                </div>

            @empty
            @endforelse
        </div>

    </div>
@endsection
