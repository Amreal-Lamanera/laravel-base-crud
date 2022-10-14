<header class="container">
    <a href="{{ route('home') }}">
        <div class="logo">
            <img src="{{ asset('./assets/dc-logo.png')}}" alt="DC Logo">
        </div>
    </a>

    @php
        $headerWidg = [
            [
                'title' => 'home',
                'routeName' => 'home',
            ],
            [
                'title' => 'comics',
                'routeName' => 'comics.index',
            ],
            [
                'title' => 'movies',
                'routeName' => 'movies',
            ],
            [
                'title' => 'tv',
                'routeName' => 'tv',
            ],
            [
                'title' => 'games',
                'routeName' => 'games',
            ],
            [
                'title' => 'collectibles',
                'routeName' => 'collectibles',
            ],
            [
                'title' => 'videos',
                'routeName' => 'videos',
            ],
            [
                'title' => 'fans',
                'routeName' => 'fans',
            ],
            [
                'title' => 'news',
                'routeName' => 'news',
            ],
            [
                'title' => 'shop',
                'routeName' => 'shop',
            ]
        ];
    @endphp

    <nav class="main-nav">

        <ul class="nav__list">

            @foreach($headerWidg as $item)
            <li class="nav__list__item {{ str_contains(Route::currentRouteName(), explode('.', $item['title'])[0]) ? 'active' : '' }}">
                <a href="{{ isset($item['routeName']) ? route($item['routeName']) : '/' }}">
                    {{ $item['title'] }}
                </a>
            </li>
            @endforeach
        </ul>

    </nav>
  </header>