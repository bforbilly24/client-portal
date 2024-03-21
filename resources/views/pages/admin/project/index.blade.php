@extends('layouts.admin1')

@section('title')
    Project {{ $client->name }}
@endsection

@section('content')
    {{-- <div class="dashboard-heading">
        <h2 class="dashboard-title font-weight-bolder">Client &raquo; {{ $client->name }} &raquo; Projects</h2>

    </div> --}}

    <div class="row">
        <div class="col-md-12">
            <div class="card shadow border-0 p-3" style="border-radius: 20px; max-width:90vw;">
                <div class="card-body">
                    <a href="{{ route('client.project.create', $client->id) }}" class="btn btn-primary mb-3">
                        + Tambah Project Baru
                    </a>
                    <div class="div table-responsive">
                        <table class="table table-hover scroll-horizontal-vertical w-100" id="crudTable">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Project</th>
                                    <th>Jenis Project</th>
                                    <th>Deadline</th>
                                    <th>Status</th>
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
                    data: 'name',
                    name: 'name'
                },
                {
                    data: 'jenis',
                    name: 'jenis'
                },
                {
                    data: 'deadline',
                    name: 'deadline'
                },
                {
                    data: 'status',
                    name: 'status'
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
