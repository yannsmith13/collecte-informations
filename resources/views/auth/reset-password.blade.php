@extends('layouts.form')

@section('content')
<div class="text-center text-sm">
    Réinitialisation du mot de passe
</div>


    <form method="POST" action="{{ route('password.update') }}">
        @csrf

        <!-- Password Reset Token -->
        <input type="hidden" name="token" value="{{ $request->route('token') }}">

        <!-- Email Address -->
        <div class="form-group">
            <label for="email">Email:</label>
    
            <input type="email" required class="form-control">
            @error('email')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <!-- Password -->
        <div class="form-group">
            <label for="password">Mot de passe:</label>
            <input type="password" class="form-control" name="password" required>
            @error('password')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <!-- Confirm Password -->
        <div class="form-group">
            <label for="password_confirmation">Mot de passe:</label>
            <input type="password" class="form-control" name="password_confirmation" required>
            @error('password_confirmation')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        

        <div class="container-btn mt-4 text-center">
            <button class="btn btn-dark">Réinitialiser</button>
        </div>
    </form>
@endsection
