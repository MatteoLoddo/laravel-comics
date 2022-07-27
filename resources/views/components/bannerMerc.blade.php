@php
$listMerc = [
    [
        'title' => 'digital comics',
        'img' => 'img/buy-comics-digital-comics.png',
    ],
    [
        'title' => 'dc merchandise',
        'img' => 'img/buy-comics-merchandise.png',
    ],
    [
        'title' => 'subscription',
        'img' => 'img/buy-comics-subscriptions.png',
    ],
    [
        'title' => 'comic shop locator',
        'img' => 'img/buy-comics-shop-locator.png',
    ],
    [
        'title' => 'dc power visa',
        'img' => 'img/buy-dc-power-visa.svg',
    ],
];
@endphp




<div class="my-bg-secondary">
    <div class="container p-2">
        <div class="d-flex justify-content-between">
            @foreach ($listMerc as $item)
                <div>
                    <img class="img-merc" src="{{ asset($item['img']) }}" alt="">
                    <span class="text-nowrap text-light">{{ strtoupper($item['title']) }}</span>
                </div>
            @endforeach

        </div>
    </div>

</div>
