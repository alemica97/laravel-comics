@php

$footer_list = [
                [
                  "title" => 'dc comics',
                  "listLink" => [
                        [
                          "text" => 'Characters',
                        ],
                        [
                          "text" => 'Comics',
                        ],
                        [
                          "text" => 'Movies',
                        ],
                        [
                          "text" => 'TV',
                        ],
                        [
                          "text" => 'Games',
                        ],
                        [
                          "text" => 'Videos',
                        ],
                        [
                          "text" => 'News',
                        ],
                    ],
                ],
                [
                  "title" => 'dc',
                  "listLink" => [
                        [
                          "text" => 'Term Of Use',
                        ],
                        [
                          "text" => 'Privacy polici (New)',
                        ],
                        [
                          "text" => 'Ad Choices',
                        ],
                        [
                          "text" => 'Advertising',
                        ],
                        [
                          "text" => 'Jobs',
                        ],
                        [
                          "text" => 'Subscription',
                        ],
                        [
                          "text" => 'Talent Workshops',
                        ],
                        [
                          "text" => 'CPSC Certificates',
                        ],
                        [
                          "text" => 'Ratings',
                        ],
                        [
                          "text" => 'Shop Help',
                        ],
                        [
                          "text" => 'Contact Us',
                        ],
                    ],
                ],
                [
                  "title" => 'sites',
                  "listLink" => [
                        [
                          "text" => 'DC',
                        ],
                        [
                          "text" => 'MAD Magazine',
                        ],
                        [
                          "text" => 'DC Kids',
                        ],
                        [
                          "text" => 'DC Universe',
                        ],
                        [
                          "text" => 'DC Power Visa',
                        ],
                    ],
                ],
                [
                  "title" => 'shop',
                  "listLink" => [
                        [
                         "text" => 'Shop DC',
                        ],
                        [
                         "text" => 'Shop DC Collectibles',
                        ],
                    ],
                ],
];

$social_icons = [
    [
      "image" => asset('img/footer-facebook.png'),
      "href" => '#',
    ],
    [
      "image" => asset('img/footer-twitter.png'),
      "href" => '#',
    ],
    [
      "image" => asset('img/footer-youtube.png'),
      "href" => '#',
    ],
    [
      "image" => asset('img/footer-pinterest.png'),
      "href" => '#',
    ],
    [
      "image" => asset('img/footer-periscope.png'),
      "href" => '#',
    ],
];
            



@endphp

<footer>
    <div class="footer-link">
        <div class="container">
            <div class="container-small">
                @foreach($footer_list as $element)

                    <ul >
                        <li class="list-title">
                            <h3>{{ $element['title'] }}</h3>
                        </li>
                        @foreach($element['listLink'] as $link)
                        <li class="list-item">
                            {{ $link['text'] }}
                        </li>
                        @endforeach
                    </ul>
                @endforeach
            </div>
        </div>
    </div>

    <div class="footer-social">
        <div class="container">
            <div>
                <button class="sign-up">
                    <span>sign-up now!</span>
                </button>
            </div>
            <div class="social-section">
                <button class="follow">
                    <span>follow us</span>
                </button>
                <ul>
                    @foreach($social_icons as $el)
                    <li class="social-icon">
                        <a href="{{ $el['href'] }}">
                            <img src="{{ $el['image'] }}" alt="">
                        </a>
                    </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</footer>