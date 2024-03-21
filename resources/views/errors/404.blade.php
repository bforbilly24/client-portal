@extends('layouts.homeapp')

@section('title')
    Portal Client
@endsection

@section('content')
    <!-- Page Content -->
    <div class="size-404">
        <main>
            <div class="container">
                <div class="row">
                    <div class="col-md-6 align-self-center  justify-content-center d-flex">
                        <img src="/images/404/404-lamp.svg" class="svg-404" alt="" srcset="">
                    </div>
                    <div class="col-md-6 align-self-center">
                        <h1 class="h1-404">404</h1>
                        <h2 class="h2-404">UH OH! You're lost.</h2>
                        <p class="p-404">The page you are looking for does not exist.
                            How you got here is a mystery. But you can click the button below
                            to go back to the homepage.
                        </p>
                        <a class="a-404" href="https://webcareidn.com/">
                            <button class="btn-404 dark">HOME</button>
                        </a>
                    </div>
                </div>
            </div>
        </main>
    </div>
@endsection
