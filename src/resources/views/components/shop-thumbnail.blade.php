<div>
    @if(empty($shop->filename))
        <img src="{{ asset('images/no_image.jpg') }}" alt="NoImage" />
    @else
        <img src="{{ asset("storage/shop/{$shop->filename}") }}" alt="ShopImage" />
    @endif
</div>
