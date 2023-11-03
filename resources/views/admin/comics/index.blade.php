@extends ('layouts.admin')

@section

@forelse ($comics as $comic)
    {{ comic->title }}
@empty
    <h1>Non ci sono Fumetti</h1>
@endforelse

@endsection
