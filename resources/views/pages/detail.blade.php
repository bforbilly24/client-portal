@extends('layouts.app')

@section('title')
    {{ $client->name }} - Portal Client
@endsection

@section('content')
    <!-- ADDING PROFILE -->
    <div class=" profile">

        <!-- Profile Section -->
        <div class="bg-profile d-lg-flex d-sm-inline-flex justify-content-between">

            <!-- Profile Picture and Details -->
            <div class="d-flex justify-content-center">
                <div class="circle-container rounded-circle overflow-hidden position-relative">
                    <img src="{{ Storage::url($client->photo) }}" alt="Image" class="circle-image w-100 h-100 ">
                </div>
                <div
                    class="circle-name d-flex justify-content-center align-items-center position-absolute overflow-hidden rounded-circle">
                    <p class="text-center m-0" id="initialName"></p>
                </div>
                <div class="ml-3 my-auto">
                    <h3 class="my-auto text-white text-name" id="fullName">Hello, {{ $client->name }}</h3>
                    <p class="my-auto text-welcome">Welcome to Client Portal Webcare</p>
                </div>
            </div>

            <!-- Jumlah Project Section -->
            <div class="d-flex justify-content-center text-center my-auto">
                <h5 class="text-white my-auto">Jumlah Projek</h5>
                <span class="text-white my-auto span-profile">|</span>
                <h1 class="text-white my-auto">{{ $projecttotal }}</h1>
            </div>


        </div>
    </div>

    <!-- Filter -->
    <!-- ADDING NEW BUTTON FILTER CATEGORY -->
    <div class=" d-flex justify-content-center bg-filter">
        <button class="btn px-lg-5 px-sm-4 text-filter-set" onclick="filterProjects('all')" data-category="all">All</button>
        <button class="btn px-lg-4 px-sm-4 ml-lg-4 ml-md-4 ml-sm-2 text-filter" onclick="filterProjects('On Going')"
            data-category="ongoing">Ongoing</button>
        <button class="btn px-lg-3 px-sm-4 ml-lg-4 ml-md-4 ml-sm-2 text-filter" onclick="filterProjects('Completed')"
            data-category="completed">Completed</button>
        <button class="btn px-lg-4 px-sm-4 ml-lg-4 ml-md-4 ml-sm-2 text-filter" onclick="filterProjects('Revision')"
            data-category="revision">Revision</button>
    </div>


    <!-- End Filter -->

    <!-- End Filter -->

    @foreach ($client->projects as $project)
        <!-- Modal -->
        <div class="modal fade" id="exampleModalCenter{{ $project->id }}" tabindex="-1" role="dialog"
            aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content p-3" style="border-radius: 20px;">
                    <div class="modal-header border-0">
                        <h5 class="modal-title" id="exampleModalCenterTitle">{{ $project->name }}</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="container">
                            <div class="card" style="border-radius: 20px;">
                                <div class="card-body">
                                    <p class="card-text"><strong>Jenis:</strong> <span
                                            id="keterangan">{{ $project->jenis }}</span></p>
                                    <p class="card-text"><strong>Keterangan:</strong> <span
                                            id="keterangan">{{ $project->keterangan }}</span></p>
                                    <p class="card-text"><strong>Deadline:</strong> <span
                                            id="deadline">{{ \Carbon\Carbon::parse($project->deadline)->toFormattedDateString() }}</span>
                                    </p>
                                    <p class="card-text"><strong>Status:</strong> <span
                                            id="status">{{ $project->status }}</span>
                                    </p>
                                    {{-- <p class="card-text"><strong>Progress:</strong> <span
                                                id="status">{{ $project->progress }}%</span>
                                        </p> --}}
                                    <p class="card-text"><strong>Masa Aktif:</strong> <span
                                            id="masaAktif">{{ \Carbon\Carbon::parse($project->masaaktif)->toFormattedDateString() }}</span>
                                    </p>
                                    <p class="card-text"><strong>Notes:</strong> <span
                                            id="masaAktif">{{ $project->notes }}</span>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer border-0">
                        {{-- <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button> --}}
                    </div>
                </div>
            </div>
        </div>
    @endforeach

    <!-- Page Content -->
    <div class="bg-content ">
        <div class="page-details">

            @foreach ($client->projects as $project)
                <div class="link-card" id="{{ $project->status }}">

                    <a href="#" class="mx-auto d-flex align-items-center text-decoration-none" data-toggle="modal"
                        data-target="#exampleModalCenter{{ $project->id }}">
                        <!-- Added 'mx-auto' class for horizontal centering -->
                        <div class="container">

                            <div class="text-white bg-white radius-client-project shadow-sm">
                                <div class="d-flex w-100">
                                    <div class="section-description-1 p-2 d-flex justify-content-center align-items-center">
                                        <img class="img-client" src="{{ Storage::url($project->photo) }}" alt="">
                                    </div>

                                    <div class="section-description-2 d-flex justify-content-between align-items-center">
                                        <div class="section-2-card-2">
                                            <p class="mb-0 font-title-project text-dark">
                                                {{ $project->name }}
                                            </p>
                                            <p class="font-subtitle-project">
                                                {{ $project->jenis }}
                                            </p>
                                            <div class="time d-flex justify-content-start align-items-center">
                                                <div class="time d-flex justify-content-start align-items-center">
                                                    <!-- adding new svg and class -->
                                                    <svg class="svg-deadline" width="20" height="20"
                                                        viewBox="0 0 20 20" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path opacity="0.5"
                                                            d="M18.3337 8.33332H1.66699V15.8333C1.66699 16.4964 1.93038 17.1322 2.39923 17.6011C2.86807 18.0699 3.50395 18.3333 4.16699 18.3333H15.8337C16.4967 18.3333 17.1326 18.0699 17.6014 17.6011C18.0703 17.1322 18.3337 16.4964 18.3337 15.8333V8.33332ZM5.83366 6.66666C5.61264 6.66666 5.40068 6.57886 5.2444 6.42258C5.08812 6.2663 5.00033 6.05434 5.00033 5.83332V2.49999C5.00033 2.27898 5.08812 2.06701 5.2444 1.91073C5.40068 1.75445 5.61264 1.66666 5.83366 1.66666C6.05467 1.66666 6.26663 1.75445 6.42291 1.91073C6.57919 2.06701 6.66699 2.27898 6.66699 2.49999V5.83332C6.66699 6.05434 6.57919 6.2663 6.42291 6.42258C6.26663 6.57886 6.05467 6.66666 5.83366 6.66666ZM14.167 6.66666C13.946 6.66666 13.734 6.57886 13.5777 6.42258C13.4215 6.2663 13.3337 6.05434 13.3337 5.83332V2.49999C13.3337 2.27898 13.4215 2.06701 13.5777 1.91073C13.734 1.75445 13.946 1.66666 14.167 1.66666C14.388 1.66666 14.6 1.75445 14.7562 1.91073C14.9125 2.06701 15.0003 2.27898 15.0003 2.49999V5.83332C15.0003 6.05434 14.9125 6.2663 14.7562 6.42258C14.6 6.57886 14.388 6.66666 14.167 6.66666Z"
                                                            fill="#8E98A8" />
                                                        <path
                                                            d="M15.8337 3.33334H15.0003V5.83334C15.0003 6.05436 14.9125 6.26632 14.7562 6.4226C14.6 6.57888 14.388 6.66668 14.167 6.66668C13.946 6.66668 13.734 6.57888 13.5777 6.4226C13.4215 6.26632 13.3337 6.05436 13.3337 5.83334V3.33334H6.66699V5.83334C6.66699 6.05436 6.57919 6.26632 6.42291 6.4226C6.26663 6.57888 6.05467 6.66668 5.83366 6.66668C5.61264 6.66668 5.40068 6.57888 5.2444 6.4226C5.08812 6.26632 5.00033 6.05436 5.00033 5.83334V3.33334H4.16699C3.50395 3.33334 2.86807 3.59674 2.39923 4.06558C1.93038 4.53442 1.66699 5.1703 1.66699 5.83334V8.33334H18.3337V5.83334C18.3337 5.1703 18.0703 4.53442 17.6014 4.06558C17.1326 3.59674 16.4967 3.33334 15.8337 3.33334Z"
                                                            fill="#8E98A8" />
                                                    </svg>

                                                    <p class="p-deadline ml-1 my-auto">
                                                        {{ \Carbon\Carbon::parse($project->deadline)->toFormattedDateString() }}
                                                    </p>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- ADDING PERCENTAGE CIRCLE RANGE -->
                                        <div class=" d-flex justify-content-center align-items-center percentage-circle">
                                            <svg class="percentage-svg ongoing" width="100px" height="100px"
                                                viewBox="-10 -10 120 120">

                                                <path class="circle-bg" d="M0,50 A50,50,0 1 1 100,50 A50,50,0 1 1 0,50" />
                                                <path class="circle" d="M0,50 A50,50,0 1 1 100,50 A50,50,0 1 1 0,50" />
                                                <text class="percentage" transform="rotate(-90 50 50)"
                                                    xml:space="preserve" y="59"
                                                    x="50">{{ $project->status == 'On Going' ? '35%' : ($project->status == 'Revision' ? '65%' : ($project->status == 'Completed' ? '100%' : '')) }}</text>
                                            </svg>
                                        </div>

                                    </div>

                                </div>
                            </div>

                        </div>
                    </a>
                </div>
            @endforeach
            <!-- ADDING ID -->
            {{-- <div class="link-card" id="ongoing">

                <a href="" class="mx-auto d-flex align-items-center">
                    <!-- Added 'mx-auto' class for horizontal centering -->
                    <div class="container">

                        <div class="text-white bg-white radius-client-project shadow-sm">
                            <div class="d-flex w-100">
                                <div class="section-description-1 p-2 d-flex justify-content-center align-items-center">
                                    <img class="img-client" src="/images/dashboard/project.svg" alt="">
                                </div>

                                <div class="section-description-2 d-flex justify-content-between align-items-center">
                                    <div class="section-2-card-2">
                                        <p class="mb-0 font-title-project text-dark">
                                            Ongoing
                                        </p>
                                        <p class="font-subtitle-project">
                                            Website Informasi PRO
                                        </p>
                                        <div class="time d-flex justify-content-start align-items-center">
                                            <div class="time d-flex justify-content-start align-items-center">
                                                <!-- adding new svg and class -->
                                                <svg class="svg-deadline" width="20" height="20"
                                                    viewBox="0 0 20 20" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path opacity="0.5"
                                                        d="M18.3337 8.33332H1.66699V15.8333C1.66699 16.4964 1.93038 17.1322 2.39923 17.6011C2.86807 18.0699 3.50395 18.3333 4.16699 18.3333H15.8337C16.4967 18.3333 17.1326 18.0699 17.6014 17.6011C18.0703 17.1322 18.3337 16.4964 18.3337 15.8333V8.33332ZM5.83366 6.66666C5.61264 6.66666 5.40068 6.57886 5.2444 6.42258C5.08812 6.2663 5.00033 6.05434 5.00033 5.83332V2.49999C5.00033 2.27898 5.08812 2.06701 5.2444 1.91073C5.40068 1.75445 5.61264 1.66666 5.83366 1.66666C6.05467 1.66666 6.26663 1.75445 6.42291 1.91073C6.57919 2.06701 6.66699 2.27898 6.66699 2.49999V5.83332C6.66699 6.05434 6.57919 6.2663 6.42291 6.42258C6.26663 6.57886 6.05467 6.66666 5.83366 6.66666ZM14.167 6.66666C13.946 6.66666 13.734 6.57886 13.5777 6.42258C13.4215 6.2663 13.3337 6.05434 13.3337 5.83332V2.49999C13.3337 2.27898 13.4215 2.06701 13.5777 1.91073C13.734 1.75445 13.946 1.66666 14.167 1.66666C14.388 1.66666 14.6 1.75445 14.7562 1.91073C14.9125 2.06701 15.0003 2.27898 15.0003 2.49999V5.83332C15.0003 6.05434 14.9125 6.2663 14.7562 6.42258C14.6 6.57886 14.388 6.66666 14.167 6.66666Z"
                                                        fill="#8E98A8" />
                                                    <path
                                                        d="M15.8337 3.33334H15.0003V5.83334C15.0003 6.05436 14.9125 6.26632 14.7562 6.4226C14.6 6.57888 14.388 6.66668 14.167 6.66668C13.946 6.66668 13.734 6.57888 13.5777 6.4226C13.4215 6.26632 13.3337 6.05436 13.3337 5.83334V3.33334H6.66699V5.83334C6.66699 6.05436 6.57919 6.26632 6.42291 6.4226C6.26663 6.57888 6.05467 6.66668 5.83366 6.66668C5.61264 6.66668 5.40068 6.57888 5.2444 6.4226C5.08812 6.26632 5.00033 6.05436 5.00033 5.83334V3.33334H4.16699C3.50395 3.33334 2.86807 3.59674 2.39923 4.06558C1.93038 4.53442 1.66699 5.1703 1.66699 5.83334V8.33334H18.3337V5.83334C18.3337 5.1703 18.0703 4.53442 17.6014 4.06558C17.1326 3.59674 16.4967 3.33334 15.8337 3.33334Z"
                                                        fill="#8E98A8" />
                                                </svg>

                                                <p class="p-deadline ml-1 my-auto">
                                                    23 Jan 2024
                                                </p>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- ADDING PERCENTAGE CIRCLE RANGE -->
                                    <div
                                        class="container d-flex justify-content-center align-items-center percentage-circle">
                                        <svg class="percentage-svg ongoing" width="100px" height="100px"
                                            viewBox="-10 -10 120 120">

                                            <path class="circle-bg" d="M0,50 A50,50,0 1 1 100,50 A50,50,0 1 1 0,50" />
                                            <path class="circle" d="M0,50 A50,50,0 1 1 100,50 A50,50,0 1 1 0,50" />
                                            <text class="percentage" transform="rotate(-90 50 50)" xml:space="preserve"
                                                y="59" x="50">0%</text>
                                        </svg>
                                    </div>

                                </div>

                            </div>
                        </div>

                    </div>
                </a>
            </div>


            <div class="link-card" id="completed">

                <a href="">
                    <div class="container">

                        <div class="text-white bg-white radius-client-project shadow-sm">
                            <div class="d-flex w-100">
                                <div class="section-description-1 p-2 d-flex justify-content-center align-items-center">
                                    <img class="img-client" src="images/dashboard/project.svg" alt="">
                                </div>

                                <div class="section-description-2 d-flex justify-content-between align-items-center">
                                    <div class="section-2-card-2">
                                        <p class="mb-0 font-title-project text-dark">
                                            Completed
                                        </p>
                                        <p class="font-subtitle-project">
                                            Website Informasi PRO
                                        </p>
                                        <div class="time d-flex justify-content-start align-items-center">
                                            <div class="time d-flex justify-content-start align-items-center">
                                                <!-- adding new svg and class -->
                                                <svg class="svg-deadline" width="20" height="20"
                                                    viewBox="0 0 20 20" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path opacity="0.5"
                                                        d="M18.3337 8.33332H1.66699V15.8333C1.66699 16.4964 1.93038 17.1322 2.39923 17.6011C2.86807 18.0699 3.50395 18.3333 4.16699 18.3333H15.8337C16.4967 18.3333 17.1326 18.0699 17.6014 17.6011C18.0703 17.1322 18.3337 16.4964 18.3337 15.8333V8.33332ZM5.83366 6.66666C5.61264 6.66666 5.40068 6.57886 5.2444 6.42258C5.08812 6.2663 5.00033 6.05434 5.00033 5.83332V2.49999C5.00033 2.27898 5.08812 2.06701 5.2444 1.91073C5.40068 1.75445 5.61264 1.66666 5.83366 1.66666C6.05467 1.66666 6.26663 1.75445 6.42291 1.91073C6.57919 2.06701 6.66699 2.27898 6.66699 2.49999V5.83332C6.66699 6.05434 6.57919 6.2663 6.42291 6.42258C6.26663 6.57886 6.05467 6.66666 5.83366 6.66666ZM14.167 6.66666C13.946 6.66666 13.734 6.57886 13.5777 6.42258C13.4215 6.2663 13.3337 6.05434 13.3337 5.83332V2.49999C13.3337 2.27898 13.4215 2.06701 13.5777 1.91073C13.734 1.75445 13.946 1.66666 14.167 1.66666C14.388 1.66666 14.6 1.75445 14.7562 1.91073C14.9125 2.06701 15.0003 2.27898 15.0003 2.49999V5.83332C15.0003 6.05434 14.9125 6.2663 14.7562 6.42258C14.6 6.57886 14.388 6.66666 14.167 6.66666Z"
                                                        fill="#8E98A8" />
                                                    <path
                                                        d="M15.8337 3.33334H15.0003V5.83334C15.0003 6.05436 14.9125 6.26632 14.7562 6.4226C14.6 6.57888 14.388 6.66668 14.167 6.66668C13.946 6.66668 13.734 6.57888 13.5777 6.4226C13.4215 6.26632 13.3337 6.05436 13.3337 5.83334V3.33334H6.66699V5.83334C6.66699 6.05436 6.57919 6.26632 6.42291 6.4226C6.26663 6.57888 6.05467 6.66668 5.83366 6.66668C5.61264 6.66668 5.40068 6.57888 5.2444 6.4226C5.08812 6.26632 5.00033 6.05436 5.00033 5.83334V3.33334H4.16699C3.50395 3.33334 2.86807 3.59674 2.39923 4.06558C1.93038 4.53442 1.66699 5.1703 1.66699 5.83334V8.33334H18.3337V5.83334C18.3337 5.1703 18.0703 4.53442 17.6014 4.06558C17.1326 3.59674 16.4967 3.33334 15.8337 3.33334Z"
                                                        fill="#8E98A8" />
                                                </svg>

                                                <p class="p-deadline ml-1 my-auto">
                                                    23 Jan 2024
                                                </p>
                                            </div>



                                        </div>
                                    </div>

                                    <!-- ADDING PERCENTAGE CIRCLE RANGE -->
                                    <div
                                        class="container d-flex justify-content-center align-items-center percentage-circle">
                                        <svg class="percentage-svg completed" width="100px" height="100px"
                                            viewBox="-10 -10 120 120">
                                            <path class="circle-bg" d="M0,50 A50,50,0 1 1 100,50 A50,50,0 1 1 0,50" />
                                            <path class="circle" d="M0,50 A50,50,0 1 1 100,50 A50,50,0 1 1 0,50" />
                                            <text class="percentage" transform="rotate(-90 50 50)" xml:space="preserve"
                                                y="59" x="50">100%</text>
                                        </svg>
                                    </div>

                                </div>
                            </div>

                        </div>
                    </div>
                </a>

            </div>

            <div class="link-card" id="revision">

                <a href="">
                    <div class="container">

                        <div class="text-white bg-white radius-client-project shadow-sm">
                            <div class="d-flex w-100">
                                <div class="section-description-1 p-2 d-flex justify-content-center align-items-center">
                                    <img class="img-client" src="images/dashboard/project.svg" alt="">
                                </div>

                                <div class="section-description-2 d-flex justify-content-between align-items-center">
                                    <div class="section-2-card-2">
                                        <p class="mb-0 font-title-project text-dark">
                                            Revision
                                        </p>
                                        <p class="font-subtitle-project">
                                            Website Informasi PRO
                                        </p>
                                        <div class="time d-flex justify-content-start align-items-center">
                                            <div class="time d-flex justify-content-start align-items-center">
                                                <!-- adding new svg and class -->
                                                <svg class="svg-deadline" width="20" height="20"
                                                    viewBox="0 0 20 20" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path opacity="0.5"
                                                        d="M18.3337 8.33332H1.66699V15.8333C1.66699 16.4964 1.93038 17.1322 2.39923 17.6011C2.86807 18.0699 3.50395 18.3333 4.16699 18.3333H15.8337C16.4967 18.3333 17.1326 18.0699 17.6014 17.6011C18.0703 17.1322 18.3337 16.4964 18.3337 15.8333V8.33332ZM5.83366 6.66666C5.61264 6.66666 5.40068 6.57886 5.2444 6.42258C5.08812 6.2663 5.00033 6.05434 5.00033 5.83332V2.49999C5.00033 2.27898 5.08812 2.06701 5.2444 1.91073C5.40068 1.75445 5.61264 1.66666 5.83366 1.66666C6.05467 1.66666 6.26663 1.75445 6.42291 1.91073C6.57919 2.06701 6.66699 2.27898 6.66699 2.49999V5.83332C6.66699 6.05434 6.57919 6.2663 6.42291 6.42258C6.26663 6.57886 6.05467 6.66666 5.83366 6.66666ZM14.167 6.66666C13.946 6.66666 13.734 6.57886 13.5777 6.42258C13.4215 6.2663 13.3337 6.05434 13.3337 5.83332V2.49999C13.3337 2.27898 13.4215 2.06701 13.5777 1.91073C13.734 1.75445 13.946 1.66666 14.167 1.66666C14.388 1.66666 14.6 1.75445 14.7562 1.91073C14.9125 2.06701 15.0003 2.27898 15.0003 2.49999V5.83332C15.0003 6.05434 14.9125 6.2663 14.7562 6.42258C14.6 6.57886 14.388 6.66666 14.167 6.66666Z"
                                                        fill="#8E98A8" />
                                                    <path
                                                        d="M15.8337 3.33334H15.0003V5.83334C15.0003 6.05436 14.9125 6.26632 14.7562 6.4226C14.6 6.57888 14.388 6.66668 14.167 6.66668C13.946 6.66668 13.734 6.57888 13.5777 6.4226C13.4215 6.26632 13.3337 6.05436 13.3337 5.83334V3.33334H6.66699V5.83334C6.66699 6.05436 6.57919 6.26632 6.42291 6.4226C6.26663 6.57888 6.05467 6.66668 5.83366 6.66668C5.61264 6.66668 5.40068 6.57888 5.2444 6.4226C5.08812 6.26632 5.00033 6.05436 5.00033 5.83334V3.33334H4.16699C3.50395 3.33334 2.86807 3.59674 2.39923 4.06558C1.93038 4.53442 1.66699 5.1703 1.66699 5.83334V8.33334H18.3337V5.83334C18.3337 5.1703 18.0703 4.53442 17.6014 4.06558C17.1326 3.59674 16.4967 3.33334 15.8337 3.33334Z"
                                                        fill="#8E98A8" />
                                                </svg>

                                                <p class="p-deadline ml-1 my-auto">
                                                    23 Jan 2024
                                                </p>
                                            </div>

                                        </div>
                                    </div>


                                    <!-- ADDING PERCENTAGE CIRCLE RANGE -->
                                    <div
                                        class="container d-flex justify-content-center align-items-center percentage-circle">
                                        <svg class="percentage-svg completed" width="100px" height="100px"
                                            viewBox="-10 -10 120 120">
                                            <path class="circle-bg" d="M0,50 A50,50,0 1 1 100,50 A50,50,0 1 1 0,50" />
                                            <path class="circle" d="M0,50 A50,50,0 1 1 100,50 A50,50,0 1 1 0,50" />
                                            <text class="percentage" transform="rotate(-90 50 50)" xml:space="preserve"
                                                y="59" x="50">40%</text>
                                        </svg>
                                    </div>

                                </div>
                            </div>

                        </div>
                    </div>
                </a>

            </div> --}}

        </div>


    </div>
    <!-- End Page Content -->
@endsection
