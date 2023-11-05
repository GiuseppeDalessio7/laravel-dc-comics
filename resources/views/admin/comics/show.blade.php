@extends('layouts.admin')



@section('content')
    <div class="row align-items-md-stretch">
        <div class="col-md-6">
            <div class="h-100 p-5 text-dark border rounded-3">

                <h2>{{ $comic->title }}</h2>
                <img src="{{ $comic->thumb }}" alt="">
                <p>{{ $comic->description }}</p>
                <p>{{ $comic->price }}</p>
                <p>{{ $comic->series }}</p>
                <p>{{ $comic->sale_date }}</p>
                <p>{{ $comic->type }}</p>
                <p>{{ $comic->artists }}</p>
                <p>{{ $comic->writers }}</p>

            </div>
        </div>

    </div>
@endsection
