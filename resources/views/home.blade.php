<h1>Lista dei Film</h1>

<h3>Clicca su un titolo per scoprire i dettagli</h3>

@foreach ($movies as $movie)

    <div>
        <h2>
            <a href="{{ route('movie', ['id' => $movie->id]) }}">
                
                {{ $movie->title }}
                
            </a>
        </h2>
       
    </div>

@endforeach