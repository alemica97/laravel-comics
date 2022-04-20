<!-- creo un array che contiene i link della navbar  -->
@php 
    $links = [
        [
            "href" => "#",
            "text" => "characters"
        ],
        [
            "href" => "#",
            "text" => "comics"
        ],
        [
            "href" => "#",
            "text" => "movies"
        ],
        [
            "href" => "#",
            "text" => "tv"
        ],
        [
            "href" => "#",
            "text" => "games"
        ],
        [
            "href" => "#",
            "text" => "collectibles"
        ],
        [
            "href" => "#",
            "text" => "videos"
        ],
        [
            "href" => "#",
            "text" => "fans"
        ],
        [
            "href" => "#",
            "text" => "news"
        ],
        [
            "href" => "#",
            "text" => "shop"
        ],
        [
            "href" => route('about.index'), //passo all'url il nome della rotta
            "text" => "about"
        ],
    ];
@endphp

<header>
    <div class="container">
        <figure class="main-logo">
            {{-- così cliccando sul logo principale, ritorno alla pagina con tutti i film --}}
            <a href="{{ route('movies.index') }}"> 
                <img src="{{asset('img/dc-logo.png')}}">
            </a>
        </figure>
        <nav class="navbar">
            <ul>
                @foreach($links as $link)
                    <li>
                        <a href="{{$link['href']}}">{{$link['text']}}</a>
                    </li>
                @endforeach
            </ul>
        </nav>
    </div>
</header>