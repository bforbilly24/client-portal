@extends('layouts.admin1')

@section('title')
    Edit Password {{ $item->name }}
@endsection

@section('content')

    {{-- <div class="dashboard-heading">
        <h2 class="dashboard-title font-weight-bolder">Edit Client</h2>

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
                <div class="card-body">
                    <form action="/admin/user/editpassword/{{ $item->id }}" method="POST" enctype="multipart/form-data">

                        @method('PUT')
                        @csrf
                        <div class="row">
                            <div class="col-md-12">

                                <div class="form-group">
                                    <label>Edit Password</label>
                                    <input type="password" name="password" class="form-control" required>

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
