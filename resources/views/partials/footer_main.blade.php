<div class="footer-main">
    <div class="container">

        @php
            $footerWidget = 
            [
                [
                    'title' => 'dc comics',
                    'widgets' =>
                    [
                        'Characters',
                        'Comics',
                        'Movies',
                        'TV',
                        'Games',
                        'Videos',
                        'News',
                    ]
                ],
                [
                    'title' => 'shop',
                    'widgets' =>
                    [
                        'Shop DC',
                        'Shop DC Collectables',
                    ]
                ],
                [
                    'title' => 'dc',
                    'widgets' =>
                    [
                        'Terms Of Use',
                        'Privacy policy(New)',
                        'Ad Choice',
                        'Advertising',
                        'Jobs',
                        'Subscription',
                        'Talent Workshops',
                        'CPSC Certificates',
                        'Rating',
                        'Shop Help',
                        'Contact Us',
                    ]
                ],
                [
                    'title' => 'sites',
                    'widgets' =>
                    [
                        'DC',
                        'MAD Magazine',
                        'DC Kids',
                        'DC Universe',
                        'DC Power Visa',
                    ]
                ]
            ]
        @endphp
        <div>
            <div class="lists-wrapper">

                <ul class="list">
        
                    <li class="list-title">
                        <h3>
                            {{ $footerWidget[0]['title'] }}
                        </h3>
                    </li>
                    
                    @foreach ($footerWidget[0]['widgets'] as $widget)
                        
                    <li>
                        <a href="#nogo">
                            {{ $widget }}
                        </a>
                    </li>

                    @endforeach
                </ul>
        
            </div>
            <div class="lists-wrapper">

                <ul class="list">
        
                    <li class="list-title">
                        <h3>
                            {{ $footerWidget[1]['title'] }}
                        </h3>
                    </li>
                    
                    @foreach ($footerWidget[1]['widgets'] as $widget)
                        
                    <li>
                        <a href="#nogo">
                            {{ $widget }}
                        </a>
                    </li>
                    
                    @endforeach
                </ul>
        
            </div>
        </div>
        <div class="lists-wrapper">

            <ul class="list">
    
                <li class="list-title">
                    <h3>
                        {{ $footerWidget[2]['title'] }}
                    </h3>
                </li>
                
                @foreach ($footerWidget[2]['widgets'] as $widget)
                    
                <li>
                    <a href="#nogo">
                        {{ $widget }}
                    </a>
                </li>
                
                @endforeach
            </ul>
    
        </div>

        <div class="lists-wrapper">

            <ul class="list">
    
                <li class="list-title">
                    <h3>
                        {{ $footerWidget[3]['title'] }}
                    </h3>
                </li>
                
                @foreach ($footerWidget[3]['widgets'] as $widget)
                    
                <li>
                    <a href="#nogo">
                        {{ $widget }}
                    </a>
                </li>
                
                @endforeach
            </ul>
    
        </div>
    </div>
  </div>