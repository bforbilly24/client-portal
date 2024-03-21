@extends('layouts.admin1')

@section('title')
    Edit Client {{ $item->name }}
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
                    <form action="{{ route('client.update', $item->id) }}" method="POST" enctype="multipart/form-data">

                        @method('PUT')
                        @csrf
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Nama Client</label>
                                    <input type="text" name="name" class="form-control" value="{{ $item->name }}"
                                        required>

                                </div>
                                <div class="form-group">
                                    <label>Slug</label>
                                    <input type="text" name="slug" class="form-control" value="{{ $item->slug }}"
                                        required>

                                </div>
                                <div class="form-group">
                                    <label>Password</label>
                                    <input type="text" name="password" class="form-control" value="{{ $item->password }}"
                                        required>

                                </div>

                                <div class="form-group">
                                    <label>Img Profil Client</label>
                                    <input type="file" name="photo" class="form-control">
                                    <img src="{{ Storage::url($item->photo) }}" height="250px" width="200"
                                        style="object-fit: contain;">
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
