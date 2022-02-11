@extends('layouts.app')

@section('page_title')
Dettagli Film
@endsection

@section('main_content')
<h1 class="single-title">Dettaglio Film</h1>

<div class="details">
    <ul>
        <li>
            Titolo: {{ $movie->title }}
        </li>
        <li>
            Titolo Originale: {{ $movie->original_title }}
        </li>
        <li>
            Nazionalità: {{ $movie->nationality }}
        </li>
        <li>
            Data: {{ $movie->date }}
        </li>
        <li>
            Voto: {{ $movie->vote }}
        </li>
    </ul>
</div>

@endsection