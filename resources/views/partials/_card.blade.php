<div class="card h-100" style="width: 18rem;">
    <img src="{{ $comic->thumb }}" class="card-img-top" alt="...">
    <div class="card-body">
        <h5 class="card-title">{{ $comic->title }}</h5>
        <p class="card-text"><strong>Prezzo: </strong>{{ $comic->price }}$</p>
        <p class="card-text"><strong>Rilascio: </strong>{{ $comic->sale_date }}$</p>
        <a href="#" class="btn btn-primary">Più informazioni</a>
    </div>
</div>
