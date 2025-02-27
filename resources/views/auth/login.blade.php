@extends('layouts.app')

@section('content')
<div class="auth-wrapper">

      <!-- Form starts -->
      <form action="{{ route('login') }}" method="POST">
      @csrf
        <!-- Authbox starts -->
        <div class="auth-box">

          <!-- Logo starts -->
          <a href="home" class="auth-logo mb-4">
            <img src="assets/images/logo.svg" alt="Bootstrap Gallery" />
          </a>
          <!-- Logo ends -->

          <h4 class="mb-4">Login</h4>

          <div class="mb-2">
            <label class="form-label" for="email">Username <span class="text-danger">*</span></label>
            <input type="text" id="email" name="email" class="form-control  @error('email') is-invalid @enderror" placeholder="Enter username">
            @error('password')
                    <span class="invalid-feedback" role="alertj">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
          </div>

          <div class="mb-2">
            <label class="form-label" for="password">Password <span class="text-danger">*</span></label>
            <div class="input-group">
              <input type="password" id="password" name="password" class="form-control  @error('password') is-invalid @enderror" placeholder="Enter password">
                @error('password')
                    <span class="invalid-feedback" role="alertn">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
              <!-- <button class="btn btn-outline-secondary" type="button">
                <i class="bi bi-eye"></i>
              </button> -->
            </div>
          </div>

          <div class="d-flex justify-content-between mb-4">
            <div class="form-check m-0">
              <input class="form-check-input" type="checkbox" value="yes" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
              <label class="form-check-label small" for="rememberPassword">Remember</label>
            </div>
                @if (Route::has('password.request'))
                    <a href="{{ route('password.request') }}" class="text-decoration-underline small">{{ __('Forgot Your Password?') }}</a>
                @endif
            </div>

          <div class="d-grid gap-2">
            <button type="submit" class="btn btn-danger">Login</button>
            <a href="{{ route('register') }}" class="btn btn-outline-dark">Not registered? Signup</a>
          </div>

        </div>
        <!-- Authbox ends -->

      </form>
      <!-- Form ends -->

    </div>
@endsection
