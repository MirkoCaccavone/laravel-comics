{{-- richiamiamo il layout "master" --}}
@extends('layouts/master')

@php
    $cards = config('comics');
    // dd($cards);
@endphp

{{-- inseriamo la section col nome che abbiamo dato allo yield nel layout --}}
@section('contenuto')
    <main>
        <x-jumbo></x-jumbo>

        <div class="up-container-main">

            <div class="center-container content-main">

                @foreach($cards as $index => $card)
    <x-cards>
        <x-slot:immagine>{{$card['thumb']}}</x-slot:immagine>
        <x-slot:titolo>{{ $card['series'] }}</x-slot>
        <x-slot:id>{{ $index }}</x-slot>
    </x-cards>
@endforeach
            
                <div class = "current-series">
                    <a href="">CURRENT SERIES</a>
                </div>

                <div class="load-more">
                    <a href="">LOAD MORE</a>
                </div>

            </div>
        </div>


        <div class="down-container-main">
            <div class="center-container content-card">

                <section>
                    <img src="{{ Vite::asset('resources/img/buy-comics-digital-comics.png') }}" alt="Digital Comics" />
                    <span>DIGITAL COMICS</span>
                </section>
                
                <section>
                    <img src="{{ Vite::asset('resources/img/buy-comics-merchandise.png') }}" alt="DC Merchandise" />
                    <span>DC MERCHANDISE</span>
                </section>
                
                <section>
                    <img src="{{ Vite::asset('resources/img/buy-comics-subscriptions.png') }}" alt="Subscription" />
                    <span>SUBSCRIPTION</span>
                </section>
                
                <section>
                    <img src="{{ Vite::asset('resources/img/buy-comics-shop-locator.png') }}" alt="Comic Shop Locator" />
                    <span>COMIC SHOP LOCATOR</span>
                </section>
                
                <section>
                    <img src="{{ Vite::asset('resources/img/buy-dc-power-visa.svg') }}" alt="DC Power Visa" />
                    <span>DC POWER VISA</span>
                </section>
            </div>

        </div>
    </main>
    
@endsection


    
