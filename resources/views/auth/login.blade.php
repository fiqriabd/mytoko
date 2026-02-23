@extends('layouts.auth')

@section('login')
<div class="login-box">
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
      <div class="login-logo">
        <a href="{{ url('/') }}">
          <img src="{{ asset('imagez/my-toko-logo.svg') }}" alt="my-toko-logo.svg">
        </a>
      </div>
      <form action="{{ route('login') }}" method="post">
        @csrf
        <div class="input-group mb-3">
          <input type="email" name="email" class="form-control @error('email') is-invalid @enderror"
          placeholder="Email" required value="{{ old('email') }}">
          <div class="input-group-text"><span class="bi bi-envelope"></span></div>
          @error('email')
          <div class="invalid-feedback">{{ $message }} </div>
          @enderror
        </div>
        <div class="input-group mb-3">
          <input type="password" name="password" class="form-control @error('password') is-invalid @enderror"
          placeholder="Password" required>
          <div class="input-group-text"><span class="bi bi-lock-fill"></span></div>
          @error('password')
          <div class="invalid-feedback">{{ $message }} </div>
          @enderror
        </div>
        <!--begin::Row-->
        <div class="row">
          <div class="col-8">
            <div class="form-check">
              <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" />
              <label class="form-check-label" for="flexCheckDefault"> Remember Me </label>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-4">
            <div class="d-grid gap-2">
              <button type="submit" class="btn btn-primary">Sign In</button>
            </div>
          </div>
          <!-- /.col -->
        </div>
        <!--end::Row-->
      </form>
      <!-- /.social-auth-links -->

    </div>
    <!-- /.login-card-body -->
  </div>
</div>
@endsection