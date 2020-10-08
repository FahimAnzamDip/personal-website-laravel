@extends('admin.layout.app')

@section('page-content')
    <div class="app-title mb-0">
        <div>
            <h1>Profile</h1>
            <p>All Profile Details Here</p>
        </div>
        <ul class="app-breadcrumb breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}"><i class="fa fa-home fa-lg"></i></a></li>
            <li class="breadcrumb-item">Profile</li>
        </ul>
    </div>
    <div class="row user">
        <div class="col-md-3">
            <div class="tile p-0">
                <ul class="nav flex-column nav-tabs user-tabs">
                    <li class="nav-item"><a class="nav-link active" href="#user-details" data-toggle="tab">About Me</a></li>
                    <li class="nav-item"><a class="nav-link" href="#user-contact" data-toggle="tab">Contact Details</a></li>
                    <li class="nav-item"><a class="nav-link" href="#user-settings" data-toggle="tab">Change Password</a></li>
                </ul>
            </div>
        </div>
        <div class="col-md-9">
            @include('admin.includes.alert')
            <div class="tab-content">
                <div class="tab-pane active" id="user-details">
                    <div class="tile user-settings">
                        <h4 class="line-head">About Me</h4>
                    </div>
                </div>
                <div class="tab-pane" id="user-contact">
                    <div class="tile user-settings">
                        <h4 class="line-head">Contact Details</h4>
                    </div>
                </div>
                <div class="tab-pane fade" id="user-settings">
                    <div class="tile user-settings">
                        <h4 class="line-head">Change Password</h4>
                        <form action="{{ route('user-password.update') }}" method="POST">
                            @csrf
                            @method('put')
                            <div class="form-group">
                                <label for="current_password">Current Password <span class="text danger">*</span></label>
                                <input id="current_password" type="password" name="current_password" class="form-control" placeholder="Enter current password">
                            </div>
                            <div class="form-group">
                                <label for="password">New Password <span class="text danger">*</span></label>
                                <input id="password" type="password" name="password" class="form-control" placeholder="Enter new password">
                            </div>
                            <div class="form-group">
                                <label for="password_confirmation">Confirm Password <span class="text danger">*</span></label>
                                <input id="password_confirmation" type="password" name="password_confirmation" class="form-control" placeholder="Confirm password">
                            </div>

                            <div class="form-group">
                                <button class="btn btn-primary" type="submit"><i class="fa fa-fw fa-lg fa-check-circle"></i> Change</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
