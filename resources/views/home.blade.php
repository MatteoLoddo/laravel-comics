@extends('layouts.app')

@section('title_page', 'Dc-Comics')


@section('content')
    @include('components/jumbotron')
    <div class="my-bg-dark p-3">
        <div class="container mt-3 position-relative">
					<h4 class="text-light text-uppercase title-main d-inline p-2">current series</h4>
            <div class="row row-cols-6 g-3">
                @foreach ($products as $item)
                    <div class="col">
                        <div class="">
                            <div class="my-img-card m-auto">
                                <img src="{{ $item['thumb'] }}" alt="">
                            </div>
                            <div>
                                <span class="text-light d-block pt-2 pb-2">{{ strtoupper($item['series']) }}</span>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </div>
		@include('components/bannerMerc')
@endsection
