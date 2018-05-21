@extends('layouts.app')

@section('content')
<div class="container ">
    <div class="row ">
        <div class="col-md-6 offset-6 ">
            <div class="card">
                <div class="card-header text-center"><h4>{{ __('Login') }}</h4></div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">

                            <div class="col-md-8 offset-2">
                                <input id="nim" type="text" class="form-control{{ $errors->has('nim') ? ' is-invalid' : '' }}" placeholder="NIM" name="nim" value="{{ old('nim') }}" required autofocus>

                                @if ($errors->has('nim'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('nim') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">

                            <div class="col-md-8 offset-2 ">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" placeholder="Password" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-8 offset-md-2">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0 text-center">
                            <div class="col-md-12">
                                <button type="submit" class="btn btn-primary btn-lg col-md-7">
                                    {{ __('Login') }}
                                </button>

                            </div>
                        </div>

                        <p class="text-center">Atau</p>

                        <div class="row mb-0 text-center">
                            <div class="col-md-12">
                                <a href="/register"><button class="btn btn-primary btn-lg col-md-7"> Register </button></a>
                            </div>
                        </div>
                </div>
                    </form>
            </div>
        </div>
    </div>
</div>
@endsection
