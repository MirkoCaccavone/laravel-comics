<ul>
    @foreach ($linkCategory as $link)
        <li>{{ $link['text'] }}</li>
    @endforeach
</ul>