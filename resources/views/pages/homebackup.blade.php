@extends('layouts.app')

@section('title')
    Client Portal
@endsection

@section('content')
    <!-- Page Content -->
    <div class="page-content page-details">

        <!-- Modal -->
        <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalCenterTitle">Webcareidn.com</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="container">
                            <div class="card">
                                <div class="card-body">
                                    <p class="card-text"><strong>Jenis:</strong> <span id="keterangan">Keterangan
                                            mengenai jenis
                                            project</span></p>
                                    <p class="card-text"><strong>Keterangan:</strong> <span id="keterangan">Keterangan
                                            mengenai
                                            project</span></p>
                                    <p class="card-text"><strong>Deadline:</strong> <span id="deadline">Tanggal
                                            Deadline</span></p>
                                    <p class="card-text"><strong>Status:</strong> <span id="status">Status Project
                                            (Contoh: Sedang
                                            Berlangsung)</span>
                                    </p>
                                    <p class="card-text"><strong>Masa Aktif:</strong> <span id="masaAktif">Tanggal Masa
                                            Aktif</span></p>
                                    <p class="card-text"><strong>Notes:</strong> <span id="masaAktif">Lorem ipsum dolor
                                            sit amet, ut qui
                                            commodo sensibus, id utinam inermis constituto
                                            vim. In nam dolorum interesset, per fierent ponderum ea. Eos aperiri feugiat
                                            democritum ne.</span>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="store-details-container" data-aos="fade-up">
            <section class="store-heading">
                <div class="container">
                    <div class="mobile-card-1 d-flex flex-row justify-content-between mb-3">
                        <div class="d-flex flex-row justify-content-between p-card-1 bg-light">
                            <div class="mobile-card-1 p-2 d-flex justify-content-center align-items-center">
                                <div>
                                    <h2 class="h2-contact">Halo Mr Smith</h2>
                                    <p class="p-contact mb-3">
                                        Selamat datang di Client Portal Webcare Indonesia
                                    </p>
                                    <button type="button" class="btn-contact btn btn-primary py-2 px-lg-3">
                                        <a href="" class="text-white font-contact">
                                            Contact Admin
                                        </a>
                                    </button>
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
                                <p class="font-number text-white h3">3</p>
                            </div>
                        </div>
                    </div>

                </div>
            </section>
            <section>
                <div class="container">


                    <div class="mt-4 bg-primary p-lg-3 text-white radius-client-project">

                        <div class="d-flex w-100">
                            <div class="section-description-1 p-2 d-flex justify-content-center align-items-center">
                                <img class="img-client" src="images/portal-client/project-client.png" alt="">
                            </div>
                            <div class="section-description-2 d-flex justify-content-start align-items-center">
                                <div class="section-2-card-2">
                                    <p class="font-title-project text-white">
                                        Webcareidn.com
                                    </p>
                                    <p class="font-subtitle-project">
                                        Website Informasi PRO
                                    </p>

                                    <div class="time d-flex justify-content-start align-items-center">
                                        <div class="time d-flex justify-content-start align-items-center">
                                            <svg class="svg-clock" xmlns="http://www.w3.org/2000/svg" height="1em"
                                                viewBox="0 0 512 512">
                                                <style>
                                                    svg {
                                                        fill: #ffffff;
                                                    }
                                                </style>
                                                <path
                                                    d="M256 0a256 256 0 1 1 0 512A256 256 0 1 1 256 0zM232 120V256c0 8 4 15.5 10.7 20l96 64c11 7.4 25.9 4.4 33.3-6.7s4.4-25.9-6.7-33.3L280 243.2V120c0-13.3-10.7-24-24-24s-24 10.7-24 24z" />
                                            </svg>
                                            <p class="p-deadline ml-1 text-white my-auto">
                                                31/08/2023
                                            </p>
                                        </div>
                                        <div class="ml-3 d-flex justify-content-start align-items-center">
                                            <svg class="svg-clock" xmlns="http://www.w3.org/2000/svg" height="1em"
                                                viewBox="0 0 512 512">
                                                <style>
                                                    svg {
                                                        fill: #ffffff;
                                                    }
                                                </style>
                                                <path
                                                    d="M256 0a256 256 0 1 1 0 512A256 256 0 1 1 256 0zM232 120V256c0 8 4 15.5 10.7 20l96 64c11 7.4 25.9 4.4 33.3-6.7s4.4-25.9-6.7-33.3L280 243.2V120c0-13.3-10.7-24-24-24s-24 10.7-24 24z" />
                                            </svg>
                                            <p class="p-status ml-1 text-white my-auto">
                                                Done </p>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-12">
                                            <div class="btn-details-mobile ">
                                                <!-- Button trigger modal -->
                                                <button type="button"
                                                    class="my-2 d-flex btn-details float-left mx-auto btn btn-light"
                                                    data-toggle="modal" data-target="#exampleModalCenter">Detail
                                                    Project</button>
                                            </div>
                                        </div>
                                    </div>


                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="mt-4 bg-danger p-lg-3 text-white radius-client-project">
                        <div class="d-flex w-100">
                            <div class="section-description-1 p-2 d-flex justify-content-center align-items-center">
                                <img class="img-client" src="images/portal-client/project-client.png" alt="">
                            </div>
                            <div class="section-description-2 d-flex justify-content-start align-items-center">
                                <div class="section-2-card-2">
                                    <p class="font-title-project text-white">
                                        Webcareidn.com
                                    </p>
                                    <p class="font-subtitle-project">
                                        Website Informasi PRO
                                    </p>
                                    <div class="time d-flex justify-content-start align-items-center">
                                        <div class="time d-flex justify-content-start align-items-center">
                                            <svg class="svg-clock" xmlns="http://www.w3.org/2000/svg" height="1em"
                                                viewBox="0 0 512 512">
                                                <style>
                                                    svg {
                                                        fill: #ffffff;
                                                    }
                                                </style>
                                                <path
                                                    d="M256 0a256 256 0 1 1 0 512A256 256 0 1 1 256 0zM232 120V256c0 8 4 15.5 10.7 20l96 64c11 7.4 25.9 4.4 33.3-6.7s4.4-25.9-6.7-33.3L280 243.2V120c0-13.3-10.7-24-24-24s-24 10.7-24 24z" />
                                            </svg>
                                            <p class="p-deadline ml-1 text-white my-auto">
                                                31/08/2023
                                            </p>
                                        </div>
                                        <div class="ml-3 d-flex justify-content-start align-items-center">
                                            <svg class="svg-clock" xmlns="http://www.w3.org/2000/svg" height="1em"
                                                viewBox="0 0 512 512">
                                                <style>
                                                    svg {
                                                        fill: #ffffff;
                                                    }
                                                </style>
                                                <path
                                                    d="M256 0a256 256 0 1 1 0 512A256 256 0 1 1 256 0zM232 120V256c0 8 4 15.5 10.7 20l96 64c11 7.4 25.9 4.4 33.3-6.7s4.4-25.9-6.7-33.3L280 243.2V120c0-13.3-10.7-24-24-24s-24 10.7-24 24z" />
                                            </svg>
                                            <p class="p-status ml-1 text-white my-auto">
                                                Done </p>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-12">
                                            <div class="btn-details-mobile ">
                                                <!-- Button trigger modal -->
                                                <button type="button"
                                                    class="my-2 d-flex btn-details float-left mx-auto btn btn-light"
                                                    data-toggle="modal" data-target="#exampleModalCenter">Detail
                                                    Project</button>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="mt-4 bg-dark p-lg-3 text-white radius-client-project">
                        <div class="d-flex w-100">
                            <div class="section-description-1 p-2 d-flex justify-content-center align-items-center">
                                <img class="img-client" src="images/portal-client/project-client.png" alt="">
                            </div>
                            <div class="section-description-2 d-flex justify-content-start align-items-center">
                                <div class="section-2-card-2">
                                    <p class="font-title-project text-white">
                                        Webcareidn.com
                                    </p>
                                    <p class="font-subtitle-project">
                                        Website Informasi PRO
                                    </p>
                                    <div class="time d-flex justify-content-start align-items-center">
                                        <div class="time d-flex justify-content-start align-items-center">
                                            <svg class="svg-clock" xmlns="http://www.w3.org/2000/svg" height="1em"
                                                viewBox="0 0 512 512">
                                                <style>
                                                    svg {
                                                        fill: #ffffff;
                                                    }
                                                </style>
                                                <path
                                                    d="M256 0a256 256 0 1 1 0 512A256 256 0 1 1 256 0zM232 120V256c0 8 4 15.5 10.7 20l96 64c11 7.4 25.9 4.4 33.3-6.7s4.4-25.9-6.7-33.3L280 243.2V120c0-13.3-10.7-24-24-24s-24 10.7-24 24z" />
                                            </svg>
                                            <p class="p-deadline ml-1 text-white my-auto">
                                                31/08/2023
                                            </p>
                                        </div>
                                        <div class="ml-3 d-flex justify-content-start align-items-center">
                                            <svg class="svg-clock" xmlns="http://www.w3.org/2000/svg" height="1em"
                                                viewBox="0 0 512 512">
                                                <style>
                                                    svg {
                                                        fill: #ffffff;
                                                    }
                                                </style>
                                                <path
                                                    d="M256 0a256 256 0 1 1 0 512A256 256 0 1 1 256 0zM232 120V256c0 8 4 15.5 10.7 20l96 64c11 7.4 25.9 4.4 33.3-6.7s4.4-25.9-6.7-33.3L280 243.2V120c0-13.3-10.7-24-24-24s-24 10.7-24 24z" />
                                            </svg>
                                            <p class="p-status ml-1 text-white my-auto">
                                                Done </p>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-12">
                                            <div class="btn-details-mobile ">
                                                <!-- Button trigger modal -->
                                                <button type="button"
                                                    class="my-2 d-flex btn-details float-left mx-auto btn btn-light"
                                                    data-toggle="modal" data-target="#exampleModalCenter">Detail
                                                    Project</button>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="mt-4 bg-warning p-lg-3 text-white radius-client-project">
                        <div class="d-flex w-100">
                            <div class="section-description-1 p-2 d-flex justify-content-center align-items-center">
                                <img class="img-client" src="images/portal-client/project-client.png" alt="">
                            </div>
                            <div class="section-description-2 d-flex justify-content-start align-items-center">
                                <div class="section-2-card-2">
                                    <p class="font-title-project text-white">
                                        Webcareidn.com
                                    </p>
                                    <p class="font-subtitle-project">
                                        Website Informasi PRO
                                    </p>
                                    <div class="time d-flex justify-content-start align-items-center">
                                        <div class="time d-flex justify-content-start align-items-center">
                                            <svg class="svg-clock" xmlns="http://www.w3.org/2000/svg" height="1em"
                                                viewBox="0 0 512 512">
                                                <style>
                                                    svg {
                                                        fill: #ffffff;
                                                    }
                                                </style>
                                                <path
                                                    d="M256 0a256 256 0 1 1 0 512A256 256 0 1 1 256 0zM232 120V256c0 8 4 15.5 10.7 20l96 64c11 7.4 25.9 4.4 33.3-6.7s4.4-25.9-6.7-33.3L280 243.2V120c0-13.3-10.7-24-24-24s-24 10.7-24 24z" />
                                            </svg>
                                            <p class="p-deadline ml-1 text-white my-auto">
                                                31/08/2023
                                            </p>
                                        </div>
                                        <div class="ml-3 d-flex justify-content-start align-items-center">
                                            <svg class="svg-clock" xmlns="http://www.w3.org/2000/svg" height="1em"
                                                viewBox="0 0 512 512">
                                                <style>
                                                    svg {
                                                        fill: #ffffff;
                                                    }
                                                </style>
                                                <path
                                                    d="M256 0a256 256 0 1 1 0 512A256 256 0 1 1 256 0zM232 120V256c0 8 4 15.5 10.7 20l96 64c11 7.4 25.9 4.4 33.3-6.7s4.4-25.9-6.7-33.3L280 243.2V120c0-13.3-10.7-24-24-24s-24 10.7-24 24z" />
                                            </svg>
                                            <p class="p-status ml-1 text-white my-auto">
                                                Done </p>
                                        </div>

                                    </div>

                                    <div class="row">
                                        <div class="col-12">
                                            <div class="btn-details-mobile ">
                                                <!-- Button trigger modal -->
                                                <button type="button"
                                                    class="my-2 d-flex btn-details float-left mx-auto btn btn-light"
                                                    data-toggle="modal" data-target="#exampleModalCenter">Detail
                                                    Project</button>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>

                        </div>
                    </div>

                </div>

            </section>

        </div>

        <div class="container mt-lg-5">

            <div class="app pt-5">

                <div class="col-md-10 col-lg-12 m-auto p-0">
                    <h1 class="h2 font-title-comments">Client: Comments Layout</h1>
                    <p class="lead mb-3 font-subtitle-comments">A comments for projects</p>
                    <hr>
                    <div class="pt-1 mb-5">

                        <div class="d-flex mb-5 align-items-center">
                            <div class="mr-3">8 Comments</div>
                            <!-- <div class="dropdown">
                        <button class="ml-3 sort-btn btn btn-secondary d-flex align-items-center py-1 px-2"
                          data-bs-toggle="dropdown" role="button" aria-expanded="false">
                          <span class="ski" style="font-size:1.5em;"><svg aria-hidden="true" class="svg-icon"
                              xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 -960 960 960">
                              <path d="M120-240v-60h240v60H120Zm0-210v-60h480v60H120Zm0-210v-60h720v60H120Z"></path>
                            </svg></span>
                          <span>Sort by</span>
                        </button>
                        <div class="dropdown-menu mt-1">
                          <div><a class="dropdown-item" href="#">Top comments</a></div>
                          <div><a class="dropdown-item" href="#">Newest first</a></div>
                        </div>
                      </div> -->
                        </div>

                        <!-- Comment #1 //-->
                        <div class="" style="--sk-icon-btn-size:1.25em;--sk-icon-btn-padding:.25rem;">

                            <!-- Comment #0 //-->
                            <div class="comment-box mb-4">

                                <div class="d-flex comment">
                                    <img class="rounded-circle d-flex comment-img"
                                        src="https://via.placeholder.com/128/fe669e/ffcbde.png?text=S" width="128"
                                        height="128">
                                    <div class="flex-grow-1 ml-3">
                                        <div class="form-floating comment-compose">
                                            <textarea class="form-control w-100" placeholder="Leave a comment here" id="my-comment-reply" style="height:4rem;"></textarea>
                                            <label for="my-comment-reply">Leave a comment here</label>
                                        </div>
                                        <div class="justify-content-end gap-1 mt-2">
                                            <button class="btn btn-sm btn-secondary rounded-pill">Cancel</button>
                                            <button class="btn btn-sm btn-primary rounded-pill">Comment</button>
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <!-- Comment #1 //-->
                            <div class="comment-box">

                                <div class="d-flex comment mb-2">
                                    <img class="rounded-circle comment-img"
                                        src="https://via.placeholder.com/128/fe669e/ffcbde.png?text=S" width="128"
                                        height="128">
                                    <div class="flex-grow-1 ml-3">
                                        <div class="mb-1"><a href="#"
                                                class="fw-bold link-body-emphasis me-1">Ray</a> <i class=""
                                                title="verified"></i> <span class="text-nowrap">2 days ago</span>
                                        </div>
                                        <div class="mb-1">Lorem ipsum dolor sit amet, ut qui commodo sensibus, id
                                            utinam inermis constituto
                                            vim. In nam dolorum interesset, per fierent ponderum ea. Eos aperiri feugiat
                                            democritum ne.</div>
                                        <div class=" align-items-center mb-0" style="margin-left:-.25rem;">
                                            <button class="btn btn-sm btn-secondary rounded-pill small">Reply</button>
                                            <button class="btn btn-sm btn-primary rounded-pill">

                                                3 replies
                                            </button>

                                        </div>

                                    </div>
                                </div>

                                <!-- Comment #1 Replies //-->
                                <div class="collapse show" id="collapse-comment001">
                                    <div class="gap-3 mt-1 p-3 rounded-3">

                                        <!-- Comment #1 Replies #1.1 //-->
                                        <div class="d-flex">
                                            <img class="rounded-circle comment-img"
                                                src="https://via.placeholder.com/128/cc99ff/7f00ff.png?text=S"
                                                width="128" height="128">
                                            <div class="flex-grow-1 ml-3">
                                                <div class="mb-1"><a href="#">Barracuda</a> <span
                                                        class="text-nowrap">1 day ago</span></div>
                                                <div class="mb-2">Disputando voluptatibus ei sit. Et veri deserunt
                                                    theophrastus pri, at mutat
                                                    choro eum.</div>
                                                <div class=" align-items-center" style="margin-left:-.25rem;">
                                                    <button
                                                        class="btn btn-sm btn-secondary rounded-pill small">Reply</button>
                                                </div>
                                            </div>
                                        </div>



                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>
@endsection
