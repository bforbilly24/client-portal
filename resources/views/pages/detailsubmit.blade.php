@extends('layouts.apprevamp')

@section('title')
    {{ $client->name }} - Portal Client
@endsection

@section('content')
    <!-- Page Content -->
    <div class="page-content page-details">
        <div class="store-details-container" data-aos="fade-up">
            <section class="store-heading">
                <div class="container">
                    <div class="mobile-card-1 d-flex flex-row justify-content-between "
                        style="margin-top: 25vh;margin-bottom: 25vh;">
                        <div class="d-flex flex-row justify-content-between p-card-1 bg-transparent">
                            <div class="mobile-card-1 p-2 d-flex justify-content-center align-items-center">
                                <div>
                                    <h2 class="h2-contact">Hello, {{ $client->name }}</h2>
                                    <p class="p-contact mb-3">
                                        Masukkan password yang sudah diberikan admin
                                    </p>
                                    @if (session('error'))
                                        <div class="alert alert-danger">
                                            {{ session('error') }}
                                        </div>
                                    @endif

                                    <form action="/details/{{ $client->slug }}" method="POST"
                                        enctype="multipart/form-data">
                                        @csrf
                                        <div class="row">
                                            <div class="col-md-12">

                                                <div class="form-group">

                                                    <input type="password" name="password" class="form-control" required>

                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col text-left">
                                                <button type="submit" class="btn btn-primary px-5">
                                                    Submit
                                                </button>
                                            </div>
                                        </div>
                                    </form>

                                </div>
                            </div>
                        </div>

                        <div class="d-flex flex-row justify-content-between p-card-2 bg-primary">
                            <div class="section-1-card-2 p-2 d-flex justify-content-center align-items-center">
                                <p class="font-project text-white h3">Jumlah Projek</p>
                            </div>
                            <div class="section-2-card-2 d-flex justify-content-center align-items-center">
                                <p class="font-number text-white h3">{{ $projecttotal }}</p>
                            </div>
                        </div>
                    </div>

                </div>
            </section>


        </div>



    </div>
@endsection
