@extends('layout.app')

@section('page-content')
    <div class="app-title">
        <div>
            <h1>Friend - Create</h1>
            <p>Friend Functionality Here</p>
        </div>
        <ul class="app-breadcrumb breadcrumb">
            <li class="breadcrumb-item"><a href="{{ url('/') }}"><i class="fa fa-home fa-lg"></i></a></li>
            <li class="breadcrumb-item"><a href="{{ route('employees.index') }}">Friends</a></li>
            <li class="breadcrumb-item">Create</li>
        </ul>
    </div>
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="tile">
                @include('includes.alert')
                <h3 class="tile-title">Add Friend</h3>
                <form action="{{ route('employees.store') }}" method="POST">
                    @csrf
                    <div class="tile-body">
                        <div class="form-group">
                            <label class="control-label" for="name">Name <span class="text-danger">*</span></label>
                            <input id="name" class="form-control" type="text" placeholder="Enter name" name="name" value="{{ old('name') }}">
                        </div>

                        <div class="form-group">
                            <label class="control-label" for="email">Email <span class="text-danger">*</span></label>
                            <input id="email" class="form-control" type="email" placeholder="Enter email" name="email" value="{{ old('email') }}">
                        </div>

                        <div class="form-group">
                            <label class="control-label" for="phone">Mobile <span class="text-danger">*</span></label>
                            <input id="phone" class="form-control" type="text" placeholder="Enter mobile number" name="phone" value="{{ old('phone') }}">
                        </div>

                        <div class="form-group">
                            <label class="control-label" for="birth_date">Birth Date <span class="text-danger">*</span></label>
                            <input id="birth_date" class="form-control" type="date" placeholder="Enter birth date" name="birth_date" value="{{ old('birth_date') }}">
                        </div>

                    </div>
                    <div class="tile-footer d-flex justify-content-end">
                        <button class="btn btn-primary" type="submit"><i class="fa fa-fw fa-lg fa-check-circle"></i>Create Friend</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
