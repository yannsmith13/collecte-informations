@extends('layouts.form')

@section('content')
    <form method="POST" action="{{ route('login') }}" class="login-form">
        @csrf

        <!-- Email Address -->
        <div class="form-group mb-4">
            <label for="email">Email:</label>
            <input class="form-control" type="email" name="email" value="{{ old('email') }}" required>
            @error('email')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <!-- Password -->
        <div class="form-group">
            <label for="password">Mot de passe:</label>
            <input type="password" class="form-control" name="password" required>
            @error('email')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>


        <div class="container-btn mt-4 text-center">
            <button class="btn btn-dark">Se connecter</button>
        </div>

        @if (Route::has('password.request'))
            <div class="text-center text-sm mt-4">
                <a href="{{ route('password.request') }}">
                    {{ __('Mot de passe oublié ?') }}
                </a>
            </div>
        @endif

        </div>
    </form>
@endsection
