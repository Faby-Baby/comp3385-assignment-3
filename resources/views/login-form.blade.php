@extends('layouts.app')

@section('content')
<h1 class="text-center">Login</h1>
    <form class="text-center" action="" method="post">
        @csrf

        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <div class="text-center form-group row mb-3">
            <label for="email" class="col-form-label col-lg-2" placeholder="johndoe@example.com" required>Email</label>
            <div class="col-auto">
                <input type="text" name="email" id="email" class="form-control">
            </div>
        </div>
        <div class="form-group row mb-3">
            <label for="email" class="form-label col-lg-2" required>Password</label>
            <div class="col-lg-4">
                <input type="password" class="form-control" name="password" placeholder="Password" id="password">
            </div>
            
        </div>
        <div class="form-group row col-lg-4">
            <button type="submit" class="btn btn-primary">Login</button>
        </div>
    </form>
@endsection