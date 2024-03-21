@extends('layouts.admin1')

@section('title')
    Add Video Tutorial
@endsection

@section('content')

    {{-- <div class="dashboard-heading">
        <h2 class="dashboard-title font-weight-bolder">Add New Client</h2>

    </div> --}}

    <div class="row">
        <div class="col-md-12">
            @if ($errors->any())
                <div class="alert alert-danger">

                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <div class="card shadow border-0 p-3 mb-5"style="border-radius: 20px;">
                <div class="card-body ">
                    <form action="{{ route('tutorial.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Nama Author</label>
                                    <input type="text" name="author" value="{{ Auth::user()->name }}"
                                        class="form-control" required>

                                </div>
                                <div class="form-group">
                                    <label>Link Youtube</label>
                                    <input type="text" name="link" class="form-control"
                                        placeholder="Link harus berformat: https://www.youtube.com/watch?v=QOHOp_Aph68"
                                        required>

                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col text-right">
                                <button type="submit" class="btn btn-primary px-5">
                                    Save
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>



@endsection
