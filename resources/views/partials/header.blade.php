<!-- creo un array che contiene i link della navbar  -->
@php 
    $links = [
        [
            "name" => 'characters.index',
            "href" => "characters/",
            "text" => "characters"
        ],
        [
            "name" => 'comics.index',
            "href" => "comics/",
            "text" => "comics"
        ],
        [
            "name" => 'movies.index',
            "href" => route('movies.index'),
            "text" => "movies"
        ],
        [
            "name" => 'tv.index',
            "href" => "tv/",
            "text" => "tv"
        ],
        [
            "name" => 'games.index',
            "href" => "games/",
            "text" => "games"
        ],
        [
            "name" => 'collectibles.index',
            "href" => "collectibles/",
            "text" => "collectibles"
        ],
        [
            "name" => 'videos.index',
            "href" => "videos/",
            "text" => "videos"
        ],
        [
            "name" => 'fans.index',
            "href" => "fans/",
            "text" => "fans"
        ],
        [
            "name" => 'news.index',
            "href" => "news/",
            "text" => "news"
        ],
        [
            "name" => 'shop.index',
            "href" => "shop/",
            "text" => "shop"
        ],
        [
            "name" => 'about.index',
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
            @dump( Request::route()->getName() )
            <ul>
                @foreach($links as $link)
                    <li class="{{ Request::route()->getName() == $link['name'] ? 'navbar-items active' : 'navbar-items'}}">
                        <a href="{{$link['href']}}">{{$link['text']}}</a>
                    </li>
                @endforeach
            </ul>
        </nav>
    </div>
</header>