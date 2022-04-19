<!-- estendo il layout standard alla pagina home  -->
@extends('layouts.standard')

@section('titolo','Home Comics')

@section('mainContent')
    <main>
        <div class="jumbo-wrapper">

        </div>

        <div class="card-wrapper">
            @foreach($cards as $card)
                <figure class="image-wrapper">
                    <img src="{{$card['thumb']}}" alt="">
                    <span class="price">{{ $card['price'] }}</span>
                </figure>
                <h3 class="card-par">{{ $card['series'] }}</h3>
            @endforeach
        </div>
    </main>
    jumbotron <br>
    elenco delle card
@endsection