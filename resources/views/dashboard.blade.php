@extends('layouts.app')

@section('content')

    <h1 class="display-5 fw-bold text-body-emphasis">Dashboard</h1>
    @if (session()->has('success'))
        <div class="alert alert-success">
            {{ session()->get('success') }}
        </div>
    @endif
    <p class="lead">Welcome to your dashboard. Here you can manage your account, your clients and much more.</p>
@endsection
