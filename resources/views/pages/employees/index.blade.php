@extends('layout.app')

@section('page-content')
    <div class="app-title">
        <div>
            <h1>Friends</h1>
            <p>All Friends Details Here</p>
        </div>
        <ul class="app-breadcrumb breadcrumb">
            <li class="breadcrumb-item"><a href="{{ url('/') }}"><i class="fa fa-home fa-lg"></i></a></li>
            <li class="breadcrumb-item">Friends</li>
        </ul>
    </div>

    <div class="row mb-4">
        <div class="col-md-12 d-flex justify-content-between align-items-center">
            <div>
                <h5 style="font-weight: normal;">All Friends</h5>
            </div>
            <div>
                <a href="{{ route('employees.export') }}" class="btn btn-sm btn-info mr-3"><i class="far fa-file-export"></i> Export as Excel</a>
                <a href="{{ route('employees.create') }}" class="btn btn-sm btn-primary"><i class="far fa-plus-circle"></i> Add Friend</a>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="tile">
                <div class="tile-body">
                    <div class="table-responsive">
                        <table class="table table-hover table-bordered text-center" id="datatable">
                            <thead>
                            <tr>
                                <th>Friend No</th>
                                <th>Name</th>
                                <th>Mobile</th>
                                <th>Email</th>
                                <th>Birth Date</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($employees as $key => $employee)
                                <tr>
                                    <td>{{ $key + 1 }}</td>
                                    <td>{{ $employee->name }}</td>
                                    <td>{{ $employee->phone }}</td>
                                    <td>{{ $employee->email }}</td>
                                    <td>{{ date('d-m-Y', strtotime($employee->birth_date)) }}</td>
                                    <td class="d-flex justify-content-center">
                                        <a class="btn btn-outline-info btn-sm mr-2" href="{{ route('employees.edit', $employee->id) }}">
                                            <i class="far fa-edit"></i> Edit
                                        </a>
                                        <form action="{{ route('employees.destroy', $employee->id) }}" method="POST">
                                            @csrf
                                            @method('delete')
                                            <button class="btn btn-outline-danger btn-sm" type="submit">
                                                <i class="far fa-trash"></i> Delete
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
