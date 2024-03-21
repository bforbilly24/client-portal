@extends('layouts.admin1')

@section('title')
    Add User
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
                    <form action="{{ route('user.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Nama User</label>
                                    <input type="text" name="name" class="form-control" required>

                                </div>
                                <div class="form-group">
                                    <label>Email</label>
                                    <input type="email" name="email" class="form-control" required>

                                </div>
                                <div class="form-group">
                                    <label>Password</label>
                                    <input type="text" name="password" class="form-control" required>

                                </div>
                                <div class="form-group">
                                    <label>Roles</label>
                                    <select class="form-control" name="roles" required>
                                        <option value="" disabled selected>Pilih Roles</option>
                                        <option value="USER">USER
                                        </option>
                                        <option value="ADMIN">ADMIN</option>


                                    </select>

                                </div>

                                <div class="form-group">
                                    <label>Img Project</label>
                                    <input type="file" name="photo" class="form-control" required>
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
