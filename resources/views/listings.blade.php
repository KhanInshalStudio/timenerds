@unless(count($listings) == 0)
    @foreach($listings as $listing)
        <a href="/listings/{{ $listing["id"] }}"><h2>{{ $listing["title"] }} by {{ $listing["brand_name"] }}</h2></a>
        <p>{{ $listing["description"] }}</p>
    @endforeach

    @else
        <p>No listings found.</p>
@endunless
