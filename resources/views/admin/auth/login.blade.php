@extends('layouts.app')
@section('content')


<div class="col-12 col-lg-6 p-4 shadow p-3 mb-5 bg-body rounded top-0 mx-auto" style="">
    <h2 class="text-center mb-4">Login</h2>
    @if(session('status'))
        <p>{{ session('status') }}</p>
    @endif

    <form class=" g-3" method="POST" action="{{ route('admin.login') }}">
        @csrf

        <div class="form-group row">
            <label for="email" class="col-lg-2 col-form-label form-label">Email:</label>
            <div class="col-lg-10">
              <input type="email" name="email" id="email" class="form-control" required>
              <small class="form-text text-muted">
                Example block-level help text here
              </small>
            </div>
        </div>

        <div class="form-group row">
            <label for="password" class="col-lg-2 col-form-label form-label">Password:</label>
            <div class="col-lg-10">
              <input type="password" name="password" id="password" class="form-control" required>
            </div>
        </div>

        <div class="form-group row justify-content-end">
          <div class="col-lg-10">
            <div class="form-check">
              <input type="checkbox" name="remember" id="remember" class="form-check-input">
              <label for="remember" class="form-check-label">Remember Me</label>
            </div>
          </div>
        </div>

        <div class="form-group row justify-content-end">
          <div class="col-lg-10">
            <button type="submit" class="btn btn-primary">Login</button>
          </div>
        </div>


    </form>
</div>

@endsection
