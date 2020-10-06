@extends('layout.app')

@section('page-content')
    <div class="app-title">
        <div>
            <h1>Birthday Message</h1>
            <p>Message Functionality Here</p>
        </div>
        <ul class="app-breadcrumb breadcrumb">
            <li class="breadcrumb-item"><a href="{{ url('/') }}"><i class="fa fa-home fa-lg"></i></a></li>
            <li class="breadcrumb-item">Birthday Message</li>
        </ul>
    </div>
    <div class="row justify-content-center">
        <div class="col-md-9">
            <div class="tile">
                @include('includes.alert')
                <h3 class="tile-title">Birthday Message</h3>
                <form action="{{ route('messages.update', $message->id) }}" method="POST">
                    @csrf
                    @method('put')
                    <div class="tile-body">
                        <div class="form-group">
                            <label class="control-label" for="birthday_message">Birthday Message <span class="text-danger">*</span></label>
                            <textarea name="birthday_message" id="birthday_message" rows="8" class="form-control" placeholder="Enter birthday message here">{{ $message->birthday_message }}</textarea>
                        </div>
                    </div>
                    <div class="tile-footer d-flex justify-content-end">
                        <button class="btn btn-primary" type="submit"><i class="fa fa-fw fa-lg fa-check-circle"></i>Save Message</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
