@extends('layouts/master')


@section('contenuto')
    <div class="container my-5">
        <div class="row">
            <div class="col-md-4">
                <img src="{{ $comic['thumb'] }}" alt="{{ $comic['title'] }}" class="img-fluid">
            </div>
            <div class="col-md-8">
                <h1>{{ $comic['title'] }}</h1>
                <div class="price-box my-3 p-3 bg-success text-white">
                    <span>Price: {{ $comic['price'] }}</span>
                    <span class="ms-3">Available: {{ $comic['sale_date'] }}</span>
                </div>
                <p class="mt-3">{{ $comic['description'] }}</p>
            </div>
        </div>

        <div class="row mt-5">
            <div class="col-md-6">
                <h3>Artists</h3>
                <ul class="list-unstyled">
                    @foreach($comic['artists'] as $artist)
                        <li>{{ $artist }}</li>
                    @endforeach
                </ul>
            </div>
            <div class="col-md-6">
                <h3>Writers</h3>
                <ul class="list-unstyled">
                    @foreach($comic['writers'] as $writer)
                        <li>{{ $writer }}</li>
                    @endforeach
                </ul>
            </div>
        </div>

        <div class="row mt-4">
            <div class="col-12">
                <p><strong>Series:</strong> {{ $comic['series'] }}</p>
                <p><strong>Type:</strong> {{ $comic['type'] }}</p>
            </div>
        </div>
    </div>
@endsection