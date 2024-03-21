@extends('layouts.app')

@section('title')
    Client Portal Comments - {{ $client->name }}
@endsection

@section('content')
    <!-- Page Content -->
    {{-- <div class="page-content page-details">




        <div class="store-details-container" data-aos="fade-up">
            <section class="store-heading">
                <div class="container">
                    <div class="mobile-card-1 d-flex flex-row justify-content-between mb-3">
                        <div class="d-flex flex-row justify-content-between p-card-1 bg-light">
                            <div class="mobile-card-1 p-2 d-flex justify-content-center align-items-center">
                                <div>
                                    <h2 class="h2-contact">Halo {{ $client->name }}</h2>
                                    <p class="p-contact mb-3">
                                        Selamat datang di Client Portal Webcare Indonesia
                                    </p>

                                    <a href="/details/{{ $client->slug }}"
                                        class="text-white font-contact btn-contact btn btn-primary py-2 px-lg-3">
                                        Back
                                    </a>


                                </div>
                            </div>

                            <div class="section-2-card-1 d-none">
                                <div class="d-flex justify-content-center">
                                    <img class="w-image-card" src="images/portal-client/card-section-1.png"
                                        alt="" />
                                </div>
                            </div>
                        </div>

                        <div class="d-flex flex-row justify-content-between p-card-2 bg-primary">
                            <div class="section-1-card-2 p-2 d-flex justify-content-center align-items-center">
                                <p class="font-project text-white h3">Number of Projects</p>
                            </div>
                            <div class="section-2-card-2 d-flex justify-content-center align-items-center">
                                <p class="font-number text-white h3">{{ $projecttotal }}</p>
                            </div>
                        </div>
                    </div>

                </div>
            </section>


        </div>

        <div class="container mt-lg-5">

            <div class="app pt-5">

                <div class="col-md-10 col-lg-12 m-auto p-0">
                    <h1 class="h2 font-title-comments">Comments</h1>
                    <p class="lead mb-3 font-subtitle-comments">Comments for projects</p>
                    <hr>
                    @comments(['model' => $client])


                </div>

            </div>

        </div>

    </div> --}}

    {{-- <section class="">
        <div class="bg-comments bg-transparent" style="margin-top: 5vh; ">
            <div class="container">
                <p class="my-auto text-dark title-comment font-weight-bold">Comment</p>
            </div>
            <div class="container" style="margin-top: 5vh;">
                @comments(['model' => $client])
            </div>

        </div>

        <div class="bg-comment">
            <div class="coloumn-send">
                <div>

                </div>

            </div>
        </div>

    </section> --}}

    <section class="">
        <div class="bg-comments">
            <div class="container">
                <p class="my-auto text-dark title-comment font-weight-bold">Comment</p>
            </div>
        </div>

        <!-- ADDING COMMENT -->
        <div class="bg-comment container pt-5">

            @comments(['model' => $client])
        </div>


    </section>
@endsection
