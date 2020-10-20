@extends('layout.app')

@section('page-content')
    <div class="app-title">
        <div>
            <h1>Dashboard</h1>
            <p>All Details Here</p>
        </div>
        <ul class="app-breadcrumb breadcrumb">
            <li class="breadcrumb-item"><a href="{{ url('/') }}"><i class="fa fa-home fa-lg"></i></a></li>
            <li class="breadcrumb-item">Dashboard</li>
        </ul>
    </div>
    <div class="row">
        <div class="col-md-8">
            <div class="tile">
                <div class="tile-title-w-btn">
                    <h3 class="title">Current Birthday Message</h3>
                    <div class="btn-group">
                        <a class="btn btn-primary" href="{{ route('messages.index') }}"><i class="far fa-lg fa-edit"></i> Edit</a>
                    </div>
                </div>
                <div class="tile-body">
                    <p class="lead">{{ \App\Models\Message::find(1)->birthday_message }}</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="widget-small primary coloured-icon"><i class="icon far fa-users fa-3x"></i>
                <div class="info">
                    <h4>Friends</h4>
                    <p><b>{{ \App\Models\Employee::count() }}</b></p>
                </div>
            </div>

            <div class="widget-small info coloured-icon"><i class="icon far fa-calendar-alt fa-3x"></i>
                <div class="info">
                    <h4>Today Is</h4>
                    <p><b>{{ \Carbon\Carbon::now()->format('l jS F Y') }}</b></p>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="tile">
                <div class="tile-title">
                    <h3>Upcoming Birthdays</h3>
                </div>
                <div class="tile-body">
                    <div class="table-responsive">
                        <table class="table table-hover table-striped text-center">
                            <thead>
                            <tr>
                                <th>Friend No</th>
                                <th>Name</th>
                                <th>Mobile</th>
                                <th>Email</th>
                                <th>Birth Date</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($employees as $key => $employee)
                                <tr>
                                    <td>{{ $key + 1 }}</td>
                                    <td>{{ $employee->name }}</td>
                                    <td>{{ $employee->phone }}</td>
                                    <td>{{ $employee->email }}</td>
                                    <td>{{ date('jS F', strtotime($employee->birth_date)) }}</td>
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
