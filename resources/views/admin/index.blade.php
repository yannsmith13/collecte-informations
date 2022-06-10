@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <div class="container d-flex justify-content-between">
        <h1>Dashboard</h1>
        <form action="" method="post">
            @csrf
            <button type="submit" class="btn btn-primary">Nouveau formulaire client</button>
        </form>
    </div>
@stop

@section('content')
    <div class="container">
        @if (Session::has('infos'))
            <div>
                {{ Session::get('infos') }}
            </div>
        @endif
    </div>
@stop

@section('css')
    {{-- <link rel="stylesheet" href="/css/admin_custom.css"> --}}
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop