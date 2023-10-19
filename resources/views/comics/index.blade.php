@extends('layouts.app')

@section('title', 'Fumetti')

@section('main-content')
    <div class="container">
        <div class="row g-3">

            @forelse ($comics as $comic)
                <div class="col-3">@include('partials._card')</div>
            @empty
                <h2>Nessun fumetto disponibile.</h2>
            @endforelse

        </div>
    </div>
@endsection
