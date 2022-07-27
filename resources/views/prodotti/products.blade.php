@php
$available = true;

@endphp


@extends('layouts.app')

@section('title_page', $prodotto['series'])
@section('content')
    @include('components/jumbotron')

    <div class="blue-line"></div>

    <div class="container p-3">
        <div class="my-container pt-3">
            <div class="row pt-3">
                <div class="col-8">
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
                            <span>Check Availability</span>
                        </div>
                    </div>
                    <div>
                        <p class="pt-3">{{ $prodotto['description'] }}</p>
                    </div>
                </div>
                <div class="col">
                    <img class="pt-3" src="{{ asset('img/adv.jpg') }}" alt="">
                </div>
            </div>

        </div>
    </div>
    <div>
        <div class="container">
          <div class="my-container">
            <div class="row">
                <div class="col d-flex-column">
                    <h3 class="border-bottom">Talent</h3>
                    <div class="row border-bottom">
                        <div class="col">
                            <span>Art by</span>
                        </div>
                        <div class="col text-primary">
                            @foreach ($prodotto['artists'] as $item)
                                <span>{{ $item . ','}} </span>
                            @endforeach
                        </div>
                    </div>
                    <div class="row border-bottom pt-2">
                      <div class="col">Written by</div>
                      <div class="col text-primary border-bottom">
                        @foreach ($prodotto['writers'] as $item)
                                <span>{{ $item . ','}}</span>
                            @endforeach
                      </div>
                    </div>

                </div>
                <div class="col">
                  <h3 class="border-bottom">Specs</h3>
                  <div class="row border-bottom">
                    <div class="col ">
                      <span>Series:</span>
                    </div>
                    <div class="col text-primary">
                      {{strtoupper($prodotto["series"])}}
                    </div>
                  </div>
                  <div class="row border-bottom">
                    <div class="col">
                      <span>U.S. Price:</span>
                    </div>
                    <div class="col">
                      {{$prodotto['price']}}
                    </div>
                  </div>
                  <div class="row border-bottom">
                    <div class="col">
                      <span>On Sale Date:</span>
                    </div>
                    <div class="col">
                      {{$prodotto["sale_date"]}}
                    </div>
                  </div>
                </div>
            </div>
          </div>
        </div>
    </div>
@endsection
