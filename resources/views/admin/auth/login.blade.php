@extends('admin.layout.app')

@section('login-page')
    <section class="material-half-bg">
        <div class="cover"></div>
    </section>
    <section class="login-content">
        <div class="logo">
            <h1>Hello, Admin!</h1>
        </div>
        <div class="login-box">
            <form class="login-form" action="{{ url('/login') }}" method="POST">
                @csrf
                <h3 class="login-head"><i class="fa fa-lg fa-fw fa-user"></i>SIGN IN</h3>
                <div class="form-group">
                    <label class="control-label">USERNAME<span class="text-danger">*</span></label>
                    <input class="form-control" type="text" placeholder="Email" autofocus value="{{ old('email') }}" name="email">
                </div>
                <div class="form-group">
                    <label class="control-label">PASSWORD<span class="text-danger">*</span></label>
                    <input class="form-control" type="password" placeholder="Password" name="password">
                </div>
                <div class="form-group btn-container mt-4">
                    <button class="btn btn-primary btn-block" type="submit"><i class="fa fa-sign-in fa-lg fa-fw"></i>SIGN IN</button>
                </div>
            </form>
        </div>
    </section>
@endsection
