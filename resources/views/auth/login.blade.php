@extends('layouts.app')

@section('title', __('messages.login'))

@section('content')
<div class="login-container">
    <div class="login-card">
        <div class="card">
            <div class="card-header bg-primary text-white">
                <h4 class="mb-0">{{ __('messages.login_to_account') }}</h4>
            </div>
            <div class="card-body">
                <p class="text-muted">{{ __('messages.enter_credentials') }}</p>

                <form method="POST" action="{{ route('login.post') }}">
                    @csrf

                    <!-- Email Field -->
                    <div class="mb-3">
                        <label for="email" class="form-label">{{ __('messages.email') }}</label>
                        <input type="text"
                               class="form-control @error('email') is-invalid @enderror"
                               id="email"
                               name="email"
                               value="{{ old('email') }}"
                               required
                               autofocus>
                        @error('email')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <!-- Password Field -->
                    <div class="mb-3">
                        <label for="password" class="form-label">{{ __('messages.password') }}</label>
                        <input type="password"
                               class="form-control @error('password') is-invalid @enderror"
                               id="password"
                               name="password"
                               required>
                        @error('password')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <!-- Remember Me Checkbox -->
                    <div class="mb-3 form-check">
                        <input type="checkbox"
                               class="form-check-input"
                               id="remember"
                               name="remember">
                        <label class="form-check-label" for="remember">
                            {{ __('messages.remember_me') }}
                        </label>
                    </div>

                    <!-- Submit Button -->
                    <div class="d-grid">
                        <button type="submit" class="btn btn-primary">
                            {{ __('messages.login') }}
                        </button>
                    </div>
                </form>
            </div>
        </div>

        <!-- Test Credentials Info -->
        <div class="alert alert-info mt-3">
            <strong>Test prisijungimo duomenys:</strong><br>
            Admin: admintest / admintest<br>
            Svečias: usertest / usertest
        </div>
    </div>
</div>
@endsection
