@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-5">
            <div class="card">

                <div class="card-body px-lg-5">
                    <h4 class="card-title mt-3">Login</h4>
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="md-form">
                            <input type="email" id="email" class="form-control @error('email') is-invalid @enderror"
                                name="email" value="{{ old('email') }}" required autocomplete="email">
                            <label for="email">E-Mail Address</label>
                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                        <div class="md-form">
                            <input type="password" id="password" class="form-control" name="password" required
                                autocomplete="current-password">
                            <label for="password">Password</label>
                        </div>


                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" name="remember" id="remember"
                                {{ old('remember') ? 'checked' : '' }}>
                            <label class="form-check-label" for="materialLoginFormRemember">Remember me</label>
                        </div>


                        <button type="submit" class="btn btn-primary btn-block waves-effect mt-4">Log in</button>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
