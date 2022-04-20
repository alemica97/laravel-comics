@php

$merch_link_array = [
                [
                  "image" => asset('img/buy-comics-digital-comics.png'),
                  "href" => '#',
                  "text" => 'digital comics',
                ],
                [
                  "image" => asset('img/buy-comics-merchandise.png'),
                  "href" => '#',
                  "text" => 'dc merchandise',
                ],
                [
                  "image" => asset('img/buy-comics-subscriptions.png'),
                  "href" => '#',
                  "text" => 'subscription',
                ],
                [
                  "image" => asset('img/buy-comics-shop-locator.png'),
                  "href" => '#',
                  "text" => 'comic shop locator',
                ],
                [
                  "image" => asset('img/buy-dc-power-visa.svg'),
                  "href" => '#',
                  "text" => 'dc power visa',
                ],
];

@endphp

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
                        @foreach($cards as $index => $card)
                        {{-- passo un parametro alla rotta che si chiama movies.show per mostrare il film specifico --}}
                        <a href="{{ route( 'movies.show', ['id' => $index]) }}" class="card-wrapper">
                            <figure class="image-wrapper">
                                <img src="{{$card['thumb']}}" alt="">
                                <span class="price">{{ $card['price'] }}</span>
                            </figure>
                            <h3 class="card-par">{{ $card['series'] }}</h3>
                        </a>
                        @endforeach
                </div>
            </div>
            <button class="load-btn">load more</button>
        </section>

        <section>
            <div class="footer-header">
                <div class="container">
                  <ul>
                        @foreach($merch_link_array as $el)
                        <li class="merch-link">
                        <figure>
                            <img src="{{ $el['image'] }}" alt="">
                        </figure>
                        <a href="{{ $el['href'] }}">{{ $el['text'] }}</a>
                        </li>
                        @endforeach
                  </ul>
                </div>
              </div>
        </section>
        
    </main>

@endsection