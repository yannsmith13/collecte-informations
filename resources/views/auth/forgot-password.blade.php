@extends('layouts.form')

@section('content')
<div class="text-center text-sm">
    Renseignez votre adresse email et nous vous y enverrons un lien pour réinitialiser votre mot de passe.
</div>



<form class="login-form" method="POST" action="{{ route('password.email') }}">
    @csrf

    <!-- Email Address -->
    <div class="form-group">
        <label for="email">Email:</label>

        <input type="email" required class="form-control">
    </div>

    <div class="container-btn mt-4 text-center">
        <button class="btn btn-dark">Envoyer le lien</button>
    </div>
</form>

@endsection

        
