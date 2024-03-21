@extends('layouts.admin1')

@section('title')
    Dashboard
@endsection

@section('content')
    {{-- <div class="dashboard-heading">
        <h2 class="dashboard-title font-weight-bolder">Admin Dashboard</h2>



    </div> --}}

    <div class="row">
        <div class="col-sm-4 grid-margin">
            <a href="{{ route('client.index') }}" class="text-decoration-none text-dark">

                <div class="card shadow border-0 card-list">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-8 col-sm-12 col-xl-8 my-auto">
                                <div class="d-flex d-sm-block d-md-flex align-items-center">
                                    <img src="/images/dashboard/client.svg" alt="client" class="logo-row">
                                    <h5 class="ml-3 my-auto">Client</h5>
                                </div>

                            </div>
                            <div class="col-4  my-auto">
                                <div class="d-flex d-sm-block d-md-flex align-items-center">
                                    <h1 class="mb-0">{{ $client }}</h1>
                                </div>
                            </div>
                        </div>
                        {{-- <div class="row mt-2">
                            <div class="col-8 col-sm-12 col-xl-12 my-auto">
                                <div class="d-flex d-sm-block d-md-flex align-items-center">
                                    <h2 class="mb-0">{{ $client }}</h2>
                                </div>
                            </div>

                        </div> --}}
                    </div>
                </div>
            </a>
        </div>

        <div class="col-sm-4 grid-margin">
            <a href="#" class="text-decoration-none text-dark">

                <div class="card shadow border-0 card-list">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-8  my-auto">
                                <div class="d-flex d-sm-block d-md-flex align-items-center">
                                    <img src="/images/dashboard/project.svg" alt="client" class="logo-row">
                                    <h5 class="ml-3 my-auto">Project</h5>
                                </div>
                            </div>
                            <div class="col-4  my-auto">
                                <div class="d-flex d-sm-block d-md-flex align-items-center">
                                    <h1 class="mb-0">{{ $project }}</h1>
                                </div>
                            </div>
                        </div>
                        {{-- <div class="row mt-2">
                            <div class="col-8 col-sm-12 col-xl-12 my-auto">
                                <div class="d-flex d-sm-block d-md-flex align-items-center">
                                    <h2 class="mb-0">{{ $project }}</h2>
                                </div>
                            </div>

                        </div> --}}
                    </div>
                </div>

            </a>
        </div>

        <div class="col-sm-4 grid-margin">
            <a href="#" class="text-decoration-none text-dark">
                <div class="card shadow border-0 card-list">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-8 col-sm-12 col-xl-8 my-auto">
                                <div class="d-flex d-sm-block d-md-flex align-items-center">
                                    <img src="/images/dashboard/admin.svg" alt="client" class="logo-row">
                                    <h5 class="ml-3 my-auto">Admin</h5>
                                </div>
                            </div>
                            <div class="col-4  my-auto">
                                <div class="d-flex d-sm-block d-md-flex align-items-center">
                                    <h1 class="mb-0">{{ $admin }}</h1>
                                </div>
                            </div>
                        </div>
                        {{-- <div class="row mt-2">
                            <div class="col-8 col-sm-12 col-xl-12 my-auto">
                                <div class="d-flex d-sm-block d-md-flex align-items-center">
                                    <h2 class="mb-0">{{ $admin }}</h2>
                                </div>
                            </div>

                        </div> --}}
                    </div>
                </div>
            </a>
        </div>
    </div>

    <div class="row mt-1">

        <div class="col-md-6">
            <div class="card shadow border-0 card-important bg-white mb-3 p-0">
                <div class="card-title p-3" style="background-color: #0560fd; border-radius: 10px 10px 0px 0px;">
                    {{-- <h5 class="m-0 font-weight-bold">Notifications</h5> --}}
                    <div class="container p-0 m-0">
                        <div class="row">
                            <div class="col-8 d-flex justify-content-start align-items-center">
                                <h5 class="m-0 font-weight-bold text-white">Recent Comments</h5>
                            </div>



                            <div class="col-4 d-flex justify-content-end  align-items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" height="20px" viewBox="0 0 512 512">
                                    <style>
                                        svg {
                                            fill: white
                                        }
                                    </style>
                                    <path
                                        d="M168.2 384.9c-15-5.4-31.7-3.1-44.6 6.4c-8.2 6-22.3 14.8-39.4 22.7c5.6-14.7 9.9-31.3 11.3-49.4c1-12.9-3.3-25.7-11.8-35.5C60.4 302.8 48 272 48 240c0-79.5 83.3-160 208-160s208 80.5 208 160s-83.3 160-208 160c-31.6 0-61.3-5.5-87.8-15.1zM26.3 423.8c-1.6 2.7-3.3 5.4-5.1 8.1l-.3 .5c-1.6 2.3-3.2 4.6-4.8 6.9c-3.5 4.7-7.3 9.3-11.3 13.5c-4.6 4.6-5.9 11.4-3.4 17.4c2.5 6 8.3 9.9 14.8 9.9c5.1 0 10.2-.3 15.3-.8l.7-.1c4.4-.5 8.8-1.1 13.2-1.9c.8-.1 1.6-.3 2.4-.5c17.8-3.5 34.9-9.5 50.1-16.1c22.9-10 42.4-21.9 54.3-30.6c31.8 11.5 67 17.9 104.1 17.9c141.4 0 256-93.1 256-208S397.4 32 256 32S0 125.1 0 240c0 45.1 17.7 86.8 47.7 120.9c-1.9 24.5-11.4 46.3-21.4 62.9zM144 272a32 32 0 1 0 0-64 32 32 0 1 0 0 64zm144-32a32 32 0 1 0 -64 0 32 32 0 1 0 64 0zm80 32a32 32 0 1 0 0-64 32 32 0 1 0 0 64z" />
                                </svg>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="card-body p-0">

                    @foreach ($recentnoti as $noti)
                        <div class="p-3 d-flex align-items-center border-0">

                            <div class="font-weight-bold mr-3">
                                <div class="text-truncate text-wrap">{{ $noti->guest_name }} has commented on
                                    {{ $noti->name }}
                                    project</div>
                                <div class="text-truncate font-weight-normal text-wrap">{{ $noti->comment }}</div>
                                <a href="/details/comments/{{ $noti->slug }}" target="_blank"
                                    class="btn btn-outline-success btn-sm mt-2 rounded-pill">View Comment</a>
                            </div>
                            <span class="ml-auto mb-auto">

                                <div class="text-right text-muted pt-1 text-wrap">
                                    {{ \Carbon\Carbon::parse($noti->created_at)->diffForHumans() }}
                                </div>
                            </span>
                        </div>
                    @endforeach

                </div>
            </div>

        </div>

        <div class="col-md-6">
            <div class="card shadow border-0 card-important bg-white mb-3 p-0">
                <div class="card-title p-3" style="background-color: #0560fd; border-radius: 10px 10px 0px 0px;">
                    {{-- <h5 class="m-0 font-weight-bold">Recent Clients</h5> --}}
                    <div class="container p-0 m-0">
                        <div class="row">
                            <div class="col-8 d-flex justify-content-start align-items-center">
                                <h5 class="m-0 font-weight-bold text-white">Recent Clients</h5>
                            </div>

                            <div class="col-4 d-flex justify-content-end align-items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 640 512">
                                    <style>
                                        svg {
                                            fill: #ffffff
                                        }
                                    </style>
                                    <path
                                        d="M144 0a80 80 0 1 1 0 160A80 80 0 1 1 144 0zM512 0a80 80 0 1 1 0 160A80 80 0 1 1 512 0zM0 298.7C0 239.8 47.8 192 106.7 192h42.7c15.9 0 31 3.5 44.6 9.7c-1.3 7.2-1.9 14.7-1.9 22.3c0 38.2 16.8 72.5 43.3 96c-.2 0-.4 0-.7 0H21.3C9.6 320 0 310.4 0 298.7zM405.3 320c-.2 0-.4 0-.7 0c26.6-23.5 43.3-57.8 43.3-96c0-7.6-.7-15-1.9-22.3c13.6-6.3 28.7-9.7 44.6-9.7h42.7C592.2 192 640 239.8 640 298.7c0 11.8-9.6 21.3-21.3 21.3H405.3zM224 224a96 96 0 1 1 192 0 96 96 0 1 1 -192 0zM128 485.3C128 411.7 187.7 352 261.3 352H378.7C452.3 352 512 411.7 512 485.3c0 14.7-11.9 26.7-26.7 26.7H154.7c-14.7 0-26.7-11.9-26.7-26.7z" />
                                </svg>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="card-body p-0">

                    @foreach ($recentclient as $recentclients)
                        <div class="p-3 border-0">
                            <div>
                                <div class="d-flex">
                                    <div class="font-weight-bold section-left-2 overflow-hidden" style="font-size: 18px;">
                                        {{ $recentclients->name }}
                                    </div>
                                    <div class="section-right-2 my-auto text-right  text-muted ">
                                        {{ \Carbon\Carbon::parse($recentclients->created_at)->diffForHumans() }}
                                    </div>
                                </div>
                                <div class="font-weight-bold mt-2">Slug : <a href="/details/{{ $recentclients->slug }}"
                                        target="_blank">
                                        {{ $recentclients->slug }}
                                    </a>
                                </div>
                                <div class="font-weight-bold">
                                    Password : {{ $recentclients->password }}
                                </div>

                            </div>

                        </div>
                    @endforeach

                </div>
            </div>

        </div>
    </div>

    {{-- <div class="dashboard-content mt-4">
        <div class="card col-12 p-3 border-0  shadow" style="border-radius: 20px;">
            <div class="row">

                <div class="col-md-4 ">
                    <a href="{{ route('client.index') }}" class="text-decoration-none text-dark">
                        <div class="card border-0">
                            <div class="card-body">
                                <div class="dashboard-card-title">
                                    <h6>Client</h6>
                                </div>
                                <div class="dashboard-card-subtitle">
                                    <h1><strong>{{ $client }}</strong></h1>
                                </div>
                            </div>
                        </div>
                    </a>

                </div>

                <div class="col-md-4 ">
                    <div class="card border-0">
                        <div class="card-body">
                            <div class="dashboard-card-title">
                                <h6>Project</h6>
                            </div>
                            <div class="dashboard-card-subtitle">
                                <h1><strong>{{ $project }}</strong></h1>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 ">
                    <div class="card border-0">
                        <div class="card-body">
                            <div class="dashboard-card-title">
                                <h6>Admin</h6>
                            </div>
                            <div class="dashboard-card-subtitle">
                                <h1><strong>{{ $admin }}</strong></h1>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>


        <div class="row mt-4">

            <div class="col-md-6">
                <div class="card shadow bg-white mb-3 border-0 p-3" style="border-radius: 20px;">
                    <div class="card-title border-0 p-3">
                        <h6 class="m-0">Notifications</h6>
                    </div>
                    <div class="card-body p-0">

                        @foreach ($recentnoti as $noti)
                            <div class="p-3 d-flex align-items-center border-0">

                                <div class="font-weight-bold mr-3">
                                    <div class="text-truncate text-wrap">{{ $noti->guest_name }} has commented on
                                        {{ $noti->name }}
                                        project</div>
                                    <div class="small">{{ $noti->comment }}</div>
                                    <a href="/details/{{ $noti->slug }}" target="_blank"
                                        class="btn btn-outline-success btn-sm mt-2">View Comment</a>
                                </div>
                                <span class="ml-auto mb-auto">

                                    <div class="text-right text-muted pt-1 text-wrap">
                                        {{ \Carbon\Carbon::parse($noti->created_at)->diffForHumans() }}
                                    </div>
                                </span>
                            </div>
                        @endforeach

                    </div>
                </div>

            </div>

            <div class="col-md-6">
                <div class="card shadow bg-white mb-3 border-0 p-3" style="border-radius: 20px;">
                    <div class="card-title border-0 p-3">
                        <h6 class="m-0">Recent Clients</h6>
                    </div>
                    <div class="card-body p-0">

                        @foreach ($recentclient as $recentclients)
                            <div class="p-3 d-flex align-items-center bg-white border-0 osahan-post-header">

                                <div class="font-weight-bold mr-3">
                                    <div class="text-truncate">{{ $recentclients->name }}</div>
                                    <div class="small">Slug : <a href="/details/{{ $recentclients->slug }}"
                                            target="_blank">{{ $recentclients->slug }}</a></div>
                                    <div class="small">Password : {{ $recentclients->password }}</div>
                                </div>
                                <span class="ml-auto mb-auto">

                                    <div class="text-right text-muted pt-1">
                                        {{ $recentclients->created_at->diffForHumans() }}</div>
                                </span>
                            </div>
                        @endforeach

                    </div>
                </div>

            </div>


        </div>

    </div> --}}
@endsection
