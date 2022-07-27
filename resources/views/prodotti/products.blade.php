@php
$available = true;

@endphp


@extends('layouts.app')

@section('title_page', $prodotto['series'])
@section('content')
    @include('components/jumbotron')

    <div class="blue-line"></div>

    <div class="container">
        <div class="row">
            <div class="col-8">
                <div class="my-container pt-3">
                    <h3>{{ strtoupper($prodotto['title']) }}</h3>
                    <div class="d-flex price text-light">
                        <div class="p-2">
                            <span>U.S. Price {{ $prodotto['price'] }}</span>
                        </div>
                        <div class="flex-grow-1"></div>
                        @if ($available)
                            <div class="p-2">
                                <span class="d-inline-block flex-grow-1">AVAILABLE</span>
                            </div>
                        @else
                            <div>
                                <span>NOT AVAILABLE</span>
                            </div>
                        @endif
                        <div class="p-2">
                          <span >Check Availability</span>
                        </div>
                    </div>
                    <div>
                      <p class="pt-3">{{ $prodotto['description'] }}</p>
                    </div>
                </div>
            </div>
            <div class="col">
              <img class="pt-3" src="{{ asset("img/adv.jpg")}}" alt="">
            </div>
        </div>

    </div>
@endsection
