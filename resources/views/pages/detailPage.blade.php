@php

    $logo_array = [
        [
            "title" => 'DIGITAL COMICS',
            "image" => asset('img/cta-icons.png')
        ],
        [
            "title" => 'SHOP DC',
            "image" => asset('img/cta-icons.png')
        ],
        [
            "title" => 'COMIC SHOP LOCATOR',
            "image" => asset('img/cta-icons.png')
        ],
        [
            "title" => 'SUBSCRIPTIONS',
            "image" => asset('img/cta-icons.png')
        ]
    ];

@endphp

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

        <section>
            <div class="container-medium description">
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
            </div>
        </section>

        <section class="talent-specs-section">
            <div class="container-medium detail-talent">
                <div class="talent">
                    <h3>Talent</h3>
                    <div class="detailed-info">
                        <div class="col-4">
                            <span>Art by:</span>
                        </div>
                        <div class="col-8">
                            @foreach($card['artists'] as $artist)
                            <span>{{ $artist }},</span>
                            @endforeach
                        </div>
                    </div>
                    <div class="detailed-info">
                        <div class="col-4">
                            <span>Written by:</span>
                        </div>
                        <div class="col-8">
                            @foreach($card['writers'] as $writer)
                            <span>{{ $writer }},</span>
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="specs">
                    <h3>Specs</h3>
                    <div class="detailed-info">
                        <div class="col-4">
                            <span>Series:</span>
                        </div>
                        <div class="col-8">
                            <span>{{ $card['series'] }}</span>
                        </div>
                    </div>
                    <div class="detailed-info">
                        <div class="col-4">
                            <span>U.S. Price:</span>
                        </div>
                        <div class="col-8">
                            <span>{{ $card['price'] }}</span>
                        </div>
                    </div>
                    <div class="detailed-info">
                        <div class="col-4">
                            <span>On Sale Date:</span>
                        </div>
                        <div class="col-8">
                            <span>{{ $card['sale_date'] }}</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="logos-section">
            <div class="container-medium logos">
                @foreach($logo_array as $logo)
                <div class="col-3">
                    <span>{{ $logo['title'] }}</span>
                    <figure>
                        <img src="{{ $logo['image'] }}" alt="">
                    </figure>
                </div>
                @endforeach
            </div>
        </section>
    </main>
    
@endsection