@extends('layouts.standard')

@section('titolo',$card['title'])

@section('mainContent')

    <main>
        <section class="detail-jumbo">
            <div class="blue-stripe">

            </div>
            <div class="container-medium">
                <figure class="thumb-image">
                    <img src="{{ $card['thumb'] }}" alt="">
                </figure>
            </div>
        </section>
        <section class="container-medium description">
            <div class="movie-info">
                <div class="title">
                    <h1>{{ $card['title'] }}</h1>
                </div>
                <div class="green-info">
                    <div class="gi-left">
                        <span>U.S. Price:</span><span>{{ $card['price'] }}</span>
                        <span>Available</span>
                    </div>
                    <div class="gi-right">
                        <span>Check Availability<i class="fa-solid fa-caret-down"></i></span>
                    </div>
                </div>
                <div class="movie-description">
                    <p>{{ $card['description'] }}</p>
                </div>
            </div>
            <div class="advertisement">
                <span>advertisement</span>
                <figure class="thumb-image">
                    <img src="{{ asset('img/adv.jpg') }}" alt="">
                </figure>
            </div>
        </section>
    </main>
    
@endsection