@extends('admin.template')

@section('content')
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Staff members</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="{{ route('control-panel') }}">Control Panel</a></li>
                <li class="breadcrumb-item active">Staff members</li>
            </ol>
            {{-- <div class="card mb-4">
                <div class="card-body">
                    DataTables is a third party plugin that is used to generate the demo table below. For more information
                    about DataTables, please visit the
                    <a target="_blank" href="https://datatables.net/">official DataTables documentation</a>
                    .
                </div>
            </div> --}}

            <div class="card mb-4">
                <div class="card-header">
                    <i class="fas fa-table me-1"></i>
                    List of Staff Members
                    <a href="{{ route('new.staff') }}" class="btn btn-success " style="float: right;">
                        <i class="fas fa-user-plus"></i> Add member</a>
                </div>
                <div class="card-body">
                    <table id="datatablesSimple">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th class="text-center">Photo</th>
                                <th>Type</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th class="text-center">
                                    Photo
                                </th>
                                <th>Type</th>
                                <th>Actions</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            <tr class="bg-warning">
                                <td>
                                    Manager
                                </td>
                                <td>
                                    manager@emag.com
                                </td>
                                <td>
                                    0777 888 999
                                </td>
                                <td class="text-center">
                                    <img src="{{ asset('admin/images/manager.jpg') }}" width="60" alt="">
                                </td>
                                <td>
                                    manager
                                </td>
                                <td>
                                    No actions for this staff member
                                </td>
                            </tr>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </main>
@endsection
