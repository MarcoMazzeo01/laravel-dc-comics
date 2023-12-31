<div class="card h-100" style="width: 18rem;">
    <img src="{{ $comic->thumb }}" class="card-img-top" alt="...">
    <div class="card-body">
        <h5 class="card-title">{{ $comic->title }}</h5>
        <p class="card-text"><strong>Prezzo: </strong>{{ $comic->price }}$</p>
        <p class="card-text"><strong>Rilascio: </strong>{{ $comic->sale_date }}$</p>

        <div class="btn-group" role="group" aria-label="Basic mixed styles example">
            <a href="{{ route('comics.show', $comic) }}" class="btn btn-primary">Visualizza</a>
            <a href="{{ route('comics.edit', $comic) }}" class="btn btn-warning">Modifica</a>

            <form action="{{ route('comics.destroy', $comic) }}" method="POST">
                @csrf
                @method('DELETE')
                <button href="#" class="btn btn-danger">Cancella</button>
            </form>

        </div>
    </div>
</div>
