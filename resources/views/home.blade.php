@extends('layouts.app')

@section('title_page', 'Dc-Comics')


@section('content')
    <div class="jumbotron"></div>
    <div class="container">
        <div class="row row-cols-6 pt-3">
            @foreach ($products as $item)
                <div class="col">
                    <div class="img-card">
                        <img src="{{ $item['thumb'] }}" alt="">
                    </div>
                </div>
            @endforeach

        </div>
    </div>
@endsection
