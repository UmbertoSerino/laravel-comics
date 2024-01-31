@extends('layouts.home')
@section('main-content')

<section class="container-heros-cards">
    <article class="container-card">
        <div class="row">
            @foreach($heroCards as $heroCard)
            <div class="col-3">
                <h1>
                    {{ $heroCard['type'] }}
                </h1>
                <p>{{ $heroCard['price'] }}</p>
                <p>{{ $heroCard['series'] }}</p>
                <img src="{{ Vite::asset('resources/assets/img/logo.png') }}" alt="DC main logo">
            </div>
            @endforeach
        </div>
    </article>
</section>

@endsection