<!-- estendo il layout standard alla pagina home  -->
@extends('layouts.standard')

@section('titolo','Home Comics')

@section('mainContent')
    <main>
        <div class="jumbo-wrapper">

        </div>

        <section class="grid-section">
            <div class="container">
                <!-- <button class="jumbo-button">current series</button> -->
                <!-- componente ciclato -->
                <div class="grid-wrapper">
                        @foreach($cards as $card)
                        <div class="card-wrapper">
                            <figure class="image-wrapper">
                                <img src="{{$card['thumb']}}" alt="">
                                <span class="price">{{ $card['price'] }}</span>
                            </figure>
                            <h3 class="card-par">{{ $card['series'] }}</h3>
                        </div>
                        @endforeach
                </div>
            </div>
            <button class="load-btn">load more</button>
        </section>
        
    </main>
    jumbotron <br>
    elenco delle card
@endsection