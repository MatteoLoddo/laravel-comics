@php

$navbarItems = [
    [
        'title' => 'characters',
        'link' => route('characters'),
    ],
    [
        'title' => 'comics',
        'link' => route('comics'),
    ],
    [
        'title' => 'characters',
        'link' => route('characters'),
    ],
    [
        'title' => 'characters',
        'link' => route('characters'),
    ],
    [
        'title' => 'characters',
        'link' => route('characters'),
    ],
    [
        'title' => 'characters',
        'link' => route('characters'),
    ],
    [
        'title' => 'characters',
        'link' => route('characters'),
    ],
];
@endphp


<header class="container">
    <div class="d-flex justify-content-between">
        <div class="img-container">
            <img src="{{ asset('images/dc-logo.png') }}" alt="">
        </div>
        <ul class="list-unstyled d-flex justify-content-end m-0 ">
            @foreach ($navbarItems as $item)
                <li class="d-flex align-self-center my-border"><a class="fw-bold text-decoration-none p-2 align-self-center"
                        href="{{ $item['link'] }}">{{ strtoupper($item['title']) }}</a></li>
            @endforeach
        </ul>
    </div>
</header>
