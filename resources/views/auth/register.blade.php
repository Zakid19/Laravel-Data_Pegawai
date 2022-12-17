@extends('auth.auth-app')
<nav class="navbar navbar-expand-lg position-absolute top-0 z-index-3 w-100 shadow-none my-3 navbar-transparent mt-4">
    <div class="container">
      <a class="navbar-brand font-weight-bolder ms-lg-0 ms-3 text-white" href="../pages/dashboard.html">
        Zlaundry
      </a>
    </div>
  </nav>
@section('content')
<div class="page-header bg-primary align-items-start min-vh-50 pt-5 pb-11 m-3 border-radius-lg" ">
    <span class="mask bg-gradient-dark opacity-6"></span>
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-5 text-center mx-auto">
          <h1 class="text-white mb-2 mt-5">Welcome!</h1>
        </div>
      </div>
    </div>
  </div>
  <div class="container">
    <div class="row mt-lg-n10 mt-md-n11 mt-n10 justify-content-center">
      <div class="col-xl-4 col-lg-5 col-md-7 mx-auto">
        <div class="card z-index-0">
          <div class="card-header text-center pt-4">
            <h5>Register</h5>
          </div>
          <div class="card-body">
            <form action="{{ route('register.store') }}" method="post" enctype="multipart/form-data">
              @csrf
              <div class="mb-3">
                  <label for="">Username</label>
                <input type="text" id="username" class="form-control" name="username" placeholder="Username" aria-label="Name" value="{{ old('username') }}">
                @error('username')
                  <div class="mt-2 mb-3 text-xs text-danger">{{ $message }}!</div>
                @enderror
              </div>
              <div class="mb-3">
                  <label for="">Name</label>
                <input type="text" id="name" name="name" class="form-control" placeholder="Name" aria-label="Name" value="{{ old('name') }}">
                @error('name')
                  <div class="mt-2 mb-3 text-xs text-danger">{{ $message }}!</div>
                @enderror
              </div>
              <div class="mb-3">
                  <label for="">Email</label>
                <input type="email" id="email" name="email" class="form-control" placeholder="Email" aria-label="Email" value="{{ old('email') }}">
                @error('email')
                  <div class="mt-2 mb-3 text-xs text-danger">{{ $message }}!</div>
                @enderror
              </div>
              <div class="mb-3">
                  <label for="">Password</label>
                <input type="password" id="password" name="password" class="form-control" placeholder="Password" aria-label="Password">
                @error('password')
                  <div class="mt-2 mb-3 text-xs text-danger">{{ $message }}!</div>
                @enderror
              </div>
              <div class="text-center">
                <button type="submit" class="btn bg-gradient-dark w-100 my-4 mb-2">Sign up</button>
              </div>
              <p class="text-sm mt-3 mb-0">Already have an account? <a href="{{ route('login') }}" class="text-dark font-weight-bolder">Sign in</a></p>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
