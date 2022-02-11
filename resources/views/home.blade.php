@extends('layouts.app')

@section('page_title')
Lista Film
@endsection

@section('main_content')

<h1 class="list-title">Lista dei Film</h1>

<h3 class="sub-title">Clicca su un titolo per scoprire i dettagli</h3>

@foreach ($movies as $movie)

    <div>
        <ul>
            <li class="film">
                <a href="{{ route('movie', ['id' => $movie->id]) }}">
                    
                    {{ $movie->title }}
                    
                </a>
            </li>
        </ul>
    </div>

@endforeach

@endsection