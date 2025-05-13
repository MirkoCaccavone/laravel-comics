@php
    $linkFooter1 = [
        ['id' => 1, 'text' => 'DC COMICS'],  // Titolo della sezione
        ['id' => 2, 'text' => 'Characters'],
        ['id' => 3, 'text' => 'Comics'],
        ['id' => 4, 'text' => 'Movies'],
        ['id' => 5, 'text' => 'TV'],
        ['id' => 6, 'text' => 'Games'],
        ['id' => 7, 'text' => 'Videos'],
        ['id' => 8, 'text' => 'News'],
    ];

    $linkFooter2 = [
        ['id' => 1, 'text' => 'SHOP'],  // Titolo della sezione
        ['id' => 2, 'text' => 'Shop DC'],
        ['id' => 3, 'text' => 'Shop DC Collectibles'],
    ];

    $linkFooter3 = [
        ['id' => 1, 'text' => 'DC'],  // Titolo della sezione
        ['id' => 2, 'text' => 'Terms Of Use'],
        ['id' => 3, 'text' => 'Privacy policy (New)'],
        ['id' => 4, 'text' => 'Ad Choices'],
        ['id' => 5, 'text' => 'Advertising'],
        ['id' => 6, 'text' => 'Jobs'],
        ['id' => 7, 'text' => 'Subscriptions'],
        ['id' => 8, 'text' => 'Talent Workshop'],
        ['id' => 9, 'text' => 'CPSC Certificates'],
        ['id' => 10, 'text' => 'Ratings'],
        ['id' => 11, 'text' => 'Shop Help'],
        ['id' => 12, 'text' => 'Contact Us'],
    ];

    $linkFooter4 = [
        ['id' => 1, 'text' => 'SITES'],  // Titolo della sezione
        ['id' => 2, 'text' => 'DC'],
        ['id' => 3, 'text' => 'MAD Magazine'],
        ['id' => 4, 'text' => 'DC Magazine'],
        ['id' => 5, 'text' => 'DC Universe'],
        ['id' => 6, 'text' => 'DC Power Visa'],
    ];
@endphp

<footer>
    <div class="up-container-footer">
        
            <div class="sub-container-footer center-container">
                <div class="links-column">
                    <h3>DC COMICS</h3>
                    @include('partials.footer-links', ['linkCategory' => $linkFooter1])
                    
                    <h3>SHOP</h3>
                    @include('partials.footer-links', ['linkCategory' => $linkFooter2])
                </div>

                <div class="links-column">
                    <h3>DC</h3>
                    @include('partials.footer-links', ['linkCategory' => $linkFooter3])
                </div>

                <div class="links-column">
                    <h3>SITES</h3>
                    @include('partials.footer-links', ['linkCategory' => $linkFooter4])
                </div>
            

            <div class="image-container">
                <img src="{{ Vite::asset('resources/img/dc-logo-bg.png') }}" alt="DC Logo">
            </div>
        </div>
    </div>

    <div class="down-container-footer">
        <div class="center-container content-footer">
            <button class="sign-up-button">SIGN UP NOW!</button>
            
            <div class="social-content">
                <span class="follow-us">FOLLOW US</span>
                    <img src="{{ Vite::asset('resources/img/footer-facebook.png') }}" alt="Facebook">
                    <img src="{{ Vite::asset('resources/img/footer-twitter.png') }}" alt="Twitter">
                    <img src="{{ Vite::asset('resources/img/footer-youtube.png') }}" alt="YouTube">
                    <img src="{{ Vite::asset('resources/img/footer-pinterest.png') }}" alt="Pinterest">
                    <img src="{{ Vite::asset('resources/img/footer-periscope.png') }}" alt="Periscope">
            </div>
        </div>
    </div>
</footer>