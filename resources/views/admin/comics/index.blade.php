@extends('layouts.admin')



@section('content')
    @include('partials.createform')

    <div class="container">
        <div class="card mb-3 mt-3">
            @forelse ($comics as $comic)
                <div class="row mb-2">

                    <div class="col-md-4">

                        <img src="{{ asset('storage/' . $comic->thumb) }}" class="img-fluid rounded-start" alt="...">
                    </div>
                    <div class="col-md-8 card ">

                        <a class="btn btn-primary w-25 mb-2" href="{{ route('comics.show', $comic) }}">Show</a>

                        <a class="btn btn-primary w-25" href="{{ route('comics.edit', $comic) }}">Update</a>


                        <button type="button" class="btn btn-danger w-25  mt-2" data-bs-toggle="modal"
                            data-bs-target="#modalId-{{ $comic->id }}">
                            Delete
                        </button>

                        <!-- Modal Body -->
                        <!-- if you want to close by clicking outside the modal, delete the last endpoint:data-bs-backdrop and data-bs-keyboard -->
                        <div class="modal fade" id="modalId-{{ $comic->id }}" tabindex="-1" data-bs-backdrop="static"
                            data-bs-keyboard="false" role="dialog" aria-labelledby="modalTitle-{{ $comic->id }}"
                            aria-hidden="true">
                            <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-sm"
                                role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="modalTitle-{{ $comic->id }}">Modal id:
                                            {{ $comic->id }}</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        Attention! This is a destructive operation that cannot be undone.
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                            data-bs-dismiss="modal">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <form action="{{ route('comics.destroy', $comic) }}" method="post">
                            @csrf
                            @method('DELETE')

                        </form>

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
