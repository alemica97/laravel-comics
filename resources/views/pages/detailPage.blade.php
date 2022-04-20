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
    </main>
    
@endsection