@extends('layouts.app')

@section('title', 'Aggiungi Fumetto')


@section('main-content')
    <div class="container mt-3">
        <h1>Aggiungi Fumetto</h1>

        <form action='{{ route('comics.store') }}' method='POST'>
            @csrf

            {{-- titolo --}}
            <div class="mb-3">
                <label for="title" class="form-label">Titolo</label>
                <input type="text" class="form-control" id="title" name="title" placeholder="Titolo fumetto...">
            </div>

            {{-- descrizione --}}
            <div class="mb-3">
                <label for="description" class="form-label">Descrizione</label>
                <textarea class="form-control" id="description" name="description" rows="3"></textarea>
            </div>

            {{-- thumb --}}
            <div class="mb-3">
                <label for="thumb" class="form-label">Copertina URL</label>
                <input type="text" class="form-control" id="thumb" name="thumb" placeholder="URL copertina...">
            </div>

            {{-- prezzo --}}
            <div class="input-group mb-3">
                <span class="input-group-text">$</span>
                <input type="text" class="form-control" name="price" aria-label="Amount (to the nearest dollar)">
                <span class="input-group-text">.00</span>
            </div>

            {{-- series --}}
            <div class="mb-3">
                <label for="series" class="form-label">Serie</label>
                <input type="text" class="form-control" id="series" name="series" placeholder="Serie fumetto...">
            </div>

            {{-- data vendita --}}
            <div class="form-group mb-3">
                <label class="active" for="dateStandard">Data vendita</label>
                <input type="date" id="dateStandard" name="date">
            </div>

            {{-- tipo --}}
            <select class="form-select mb-3" aria-label="Default select example" name="type">
                <option selected value="comic book">Fumetto</option>
                <option value="graphic novel">Graphic Novel</option>
            </select>


            <div class='col-3'>
                <button class="btn btn-primary">Salva</button>
            </div>
        </form>
    </div>
@endsection
