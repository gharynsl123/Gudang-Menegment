@extends('layouts.app')

@section('auth')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-floating mb-3">
                                    <input class="form-control" name="name"
                                        id="inputName" type="text" autocomplete="off" placeholder="your name" />
                                    <label for="inputName">Name</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating mb-3">
                                    <input class="form-control" name="username"
                                        id="inputUsername" type="text" autocomplete="off" placeholder="your user" />
                                    <label for="inputUsername">Username</label>
                                </div>
                            </div>
                        </div>

                        <div class="form-floating mb-3">
                            <input class="form-control @error('email') is-invalid @enderror" name="email"
                            id="inputEmail" type="email" autocomplete="off" placeholder="name@example.com" />
                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                            <label for="inputEmail">Email address</label>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-floating mb-3">
                                    <input class="form-control @error('password') is-invalid @enderror" name="password"
                                        id="password" type="password" required autocomplete="off" placeholder="your name" />
                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                    <label for="password">Password</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating mb-3">
                                    <input class="form-control @error('password') is-invalid @enderror" name="password_confirmation"
                                        id="password-confirm" type="password" required autocomplete="off" placeholder="your user" />
                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                    <label for="password-confirm">Confirm Password</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row mb-0">
                            <div >
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection