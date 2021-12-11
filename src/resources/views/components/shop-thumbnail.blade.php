<div>
    @if(empty($filename))
        <img src="{{ asset('images/no_image.jpg') }}" alt="NoImage" />
    @else
        <img src="{{ asset("storage/shops/{$filename}") }}" alt="ShopImage" />
    @endif
</div>
