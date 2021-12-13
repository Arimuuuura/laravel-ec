@php
if ($type === "shops") {
    $path = "storage/shops/";
}
if ($type === "products") {
    $path = "storage/products/";
}
@endphp

<div>
    @if(empty($filename))
        <img src="{{ asset('images/no_image.jpg') }}" alt="NoImage" />
    @else
        <img src="{{ asset("{$path}{$filename}") }}" alt="ShopImage" />
    @endif
</div>
