@extends('layouts.admin1')

@section('title')
    Video Tutorial
@endsection

@section('content')
    {{-- <div class="dashboard-heading">
                <h2 class="dashboard-title font-weight-bolder">Client Admin Dashboard</h2>
            </div> --}}


    <div class="row">
        <div class="col-md-12">
            <div class="card shadow border-0 p-3" style="border-radius: 20px; max-width:90vw;">
                <div class="card-body">
                    <a href="{{ route('tutorial.create') }}" class="btn btn-primary mb-3">
                        + Tambah Video Tutorial Baru
                    </a>
                    <div class="div table-responsive">
                        <table class="table table-hover scroll-horizontal-vertical w-100" id="crudTable">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Thumbnail</th>
                                    <th>Title</th>
                                    <th>Duration</th>
                                    <th>Author</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody></tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('addon-script')
    <script>
        var datatable = $('#crudTable').DataTable({
            processing: true,
            serverSide: true,
            ordering: true,
            ajax: {
                url: '{!! url()->current() !!}',
            },
            columns: [{
                    data: 'id',
                    name: 'id'
                },
                {
                    data: 'url_thumbnail',
                    name: 'url_thumbnail'
                },
                {
                    data: 'title',
                    name: 'title'
                },

                {
                    data: 'duration',
                    name: 'duration'
                },
                {
                    data: 'author',
                    name: 'author'
                },
                {
                    data: 'action',
                    name: 'action',
                    orderable: false,
                    searchable: false,
                    width: '20%',
                },
            ]
        });
    </script>
@endpush
