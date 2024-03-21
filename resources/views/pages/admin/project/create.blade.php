@extends('layouts.admin1')

@section('title')
    Project {{ $client->name }}
@endsection

@section('content')

    {{-- <div class="dashboard-heading">
                <h2 class="dashboard-title font-weight-bolder">Client &raquo; {{ $client->name }} &raquo; Projects &raquo;
                    Add New Projects </h2>

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
            <div class="card shadow border-0 p-3 mb-5" style="border-radius: 20px;">
                <div class="card-body">
                    <form action="{{ route('client.project.store', $client->id) }}" method="post"
                        enctype="multipart/form-data">
                        {{ method_field('post') }}
                        @csrf
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Nama Project</label>
                                    <input type="text" name="name" class="form-control" required>

                                </div>
                                <div class="form-group">
                                    <label>Jenis Project</label>
                                    <select class="form-control" name="jenis" required>
                                        <option value="Website Informasi (BASIC)">Website Informasi (BASIC)
                                        </option>
                                        <option value="Website Informasi (PRO)">Website Informasi (PRO)</option>
                                        <option value="Website Bisnis (BASIC)">Website Bisnis (BASIC)
                                        </option>
                                        <option value="Website Bisnis (PRO)">Website Bisnis (PRO)</option>
                                        <option value="Landing Page">Landing Page</option>
                                        <option value="" disabled selected>Pilih Project</option>
                                    </select>

                                </div>
                                <div class="form-group">
                                    <label>Keterangan</label>
                                    <textarea type="text" rows="5" name="keterangan" class="form-control h-10" required></textarea>
                                </div>

                                <div class="form-group">
                                    <label>Deadline</label>
                                    <input type="datetime-local" name="deadline" class="form-control" required>
                                </div>

                                <div class="form-group">
                                    <label>Status</label>
                                    <select class="form-control" name="status" required>
                                        <option value="" disabled selected> PILIH STATUS </option>
                                        <option value="On Going">On Going</option>
                                        <option value="Revision">Revision</option>
                                        <option value="Completed">Completed</option>
                                    </select>
                                </div>

                                {{-- <div class="form-group">
                                    <label>Progress</label>
                                    <div class="input-group">
                                        <input type="number" name="progress" class="form-control" required min="1"
                                            max="100">
                                        <div class="input-group-append">
                                            <span class="input-group-text">%</span>
                                        </div>
                                    </div>
                                </div> --}}
                                <div class="form-group">
                                    <label>Masa Aktif</label>
                                    <input type="datetime-local" name="masaaktif" class="form-control" required>
                                </div>

                                <div class="form-group">
                                    <label>Notes</label>

                                    <input type="text" name="notes" class="form-control" required>

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
