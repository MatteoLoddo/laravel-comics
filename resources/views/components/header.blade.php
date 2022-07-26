@php

$navbarItems = [
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


<header class="container m-auto">
    <div class="d-flex justify-content-between">
        <div class="img-container">
            <img src="../img/dc-logo.png" alt="">
        </div>
        <div class="d-flex align-items-center">
            <ul class="list-unstyled d-flex justify-content-end ">
                @foreach ($navbarItems as $item)
                    <li class="d-flex align-self-center"><a class="fw-bold text-decoration-none p-2 align-self-center" href="{{ $item['link'] }}">{{ strtoupper($item['title']) }}</a></li>
                @endforeach
            </ul>
        </div>
    </div>
</header>
