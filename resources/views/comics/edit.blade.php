@extends('layouts.app')

@section('title', 'Modifica ' . $comic->title)


@section('main-content')
    <div class="container mt-3">
        <h1>Modifica "{{ $comic->title }}"</h1>

        <form action="{{ route('comics.update', $comic->id) }}" method='POST'>
            @csrf
            @method('PUT')

            {{-- titolo --}}
            <div class="mb-3">
                <label for="title" class="form-label">Titolo</label>
                <input type="text" class="form-control" id="title" name="title" value='{{ $comic->title }}'>
            </div>

            {{-- descrizione --}}
            <div class="mb-3">
                <label for="description" class="form-label">Descrizione</label>
                <textarea class="form-control" id="description" name="description" rows="3">{{ $comic->description }}</textarea>
            </div>

            {{-- thumb --}}
            <div class="mb-3">
                <label for="thumb" class="form-label">Copertina URL</label>
                <input type="text" class="form-control" id="thumb" name="thumb" value="{{ $comic->thumb }}">
            </div>

            {{-- prezzo --}}
            <div class="input-group mb-3">
                <span class="input-group-text">$</span>
                <input type="text" class="form-control" name="price" aria-label="Amount (to the nearest dollar)"
                    value="{{ $comic->price }}">
                <span class="input-group-text">.00</span>
            </div>

            {{-- series --}}
            <div class="mb-3">
                <label for="series" class="form-label">Serie</label>
                <input type="text" class="form-control" id="series" name="series" value='{{ $comic->series }}'>
            </div>

            {{-- data vendita --}}
            <div class="form-group mb-3">
                <label class="active" for="dateStandard">Data vendita</label>
                <input type="date" id="dateStandard" name="date" value='{{ $comic->sale_date }}'>
            </div>

            {{-- tipo --}}
            <select class="form-select mb-3" aria-label="Default select example" name="type">
                <option @if ($comic->type == 'comic book') selected @endif value="comic book">Fumetto</option>
                <option @if ($comic->type == 'graphic novel') selected @endif value="graphic novel">Graphic
                    Novel</option>
            </select>


            <div class='col-3'>
                <button class="btn btn-primary">Salva</button>
            </div>
        </form>
    </div>
@endsection
