@extends('layouts.app')

@section('title')
    Client Portal Video Tutorial
@endsection

@section('content')
    {{-- <section class="">
        <div class="bg-tutorials">
            <div class="container">
                <p class="my-auto text-white title-tutorial font-weight-bold">Tutorial</p>
            </div>
        </div>

        @foreach ($tutorial as $tutorials)
            <div class="d-flex justify-content-center video mt-lg-3 mt-md-3 mt-sm-2">
                <div class="bg-tutorial">
                    <div class="d-flex justify-content-center">
                        <iframe src="{{ $tutorials->link }}" title="YouTube video player" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                            allowfullscreen></iframe>
                    </div>
                    <div class="ml-3 mt-2">
                        <h5 class="font-weight-normal font-title">{{ $tutorials->title }}</h5>
                        <p class="font-weight-light font-author">By {{ $tutorials->author }}</p>
                    </div>
                </div>

            </div>
        @endforeach
        <div class="d-flex justify-content-center video mt-lg-3 mt-md-3 mt-sm-2">
            <div class="bg-tutorial">
                <div class="d-flex justify-content-center">
                    <iframe src="https://www.youtube.com/embed/SKh50WHPxk0?si=IAR4cEpYnRDvPd8X" title="YouTube video player"
                        frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        allowfullscreen></iframe>
                </div>
                <div class="ml-3 mt-2">
                    <h5 class="font-weight-normal font-title">Tutorial tambah produk toko online</h5>
                    <p class="font-weight-light font-author">By admin</p>
                </div>
            </div>

        </div>
    </section> --}}

    <section class="bg-main-tutorial pb-4">
        <div class="bg-tutorials">
            <div class="container">
                <p class="my-auto text-white title-tutorial font-weight-bold">Tutorial</p>
            </div>
        </div>
        @foreach ($tutorial as $tutorials)
            <div class="d-flex justify-content-center video mt-lg-3 mt-md-3 mt-sm-2">
                <div class="bg-tutorial">
                    <div class="d-flex justify-content-center">
                        {{-- <iframe src="{{ $tutorials->embed_html }}" title="YouTube video player" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                            allowfullscreen></iframe> --}}
                        {!! $tutorials->embed_html !!}
                    </div>
                    <div class="ml-3 mt-2">
                        <h5 class="font-weight-normal font-title">{{ $tutorials->title }}</h5>
                        <p class="font-weight-light font-author">By {{ $tutorials->author }}</p>
                    </div>
                </div>

            </div>
        @endforeach
    </section>
@endsection
