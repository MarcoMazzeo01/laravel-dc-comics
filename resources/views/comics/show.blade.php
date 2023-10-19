@extends('layouts.app')

@section('title', $comic->title)


@section('main-content')
    <div class="container mt-3">
        <div class="card mb-3" style="max-width: 100%;">
            <div class="row g-0">
                <div class="col-md-4">
                    <img src="{{ $comic->thumb }}" class="img-fluid rounded-start" alt="...">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title">{{ $comic->title }}</h5>
                        <p class="card-text">{{ $comic->description }} <br> <strong>Prezzo: </strong>{{ $comic->price }}$
                        </p>
                        <p class="card-text"><small class="text-muted">{{ $comic->sale_date }}</small></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
