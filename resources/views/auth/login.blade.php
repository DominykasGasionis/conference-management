@extends('layouts.app')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-5">
        <div class="card shadow-sm">
            <div class="card-body p-5">
                <h2 class="text-center mb-4">{{ __('auth.login') }}</h2>
                <p class="text-center text-muted mb-4">{{ __('auth.login_to_continue') }}</p>

                <form method="POST" action="{{ route('login.post') }}">
                    @csrf

                    <!-- Email -->
                    <div class="mb-3">
                        <label for="email" class="form-label">{{ __('auth.email') }}</label>
                        <input
                            type="email"
                            class="form-control @error('email') is-invalid @enderror"
                            id="email"
                            name="email"
                            value="{{ old('email') }}"
                            required
                            autofocus
                        >
                        @error('email')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <!-- Password -->
                    <div class="mb-3">
                        <label for="password" class="form-label">{{ __('auth.password') }}</label>
                        <input
                            type="password"
                            class="form-control @error('password') is-invalid @enderror"
                            id="password"
                            name="password"
                            required
                        >
                        @error('password')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <!-- Remember Me -->
                    <div class="mb-3 form-check">
                        <input
                            type="checkbox"
                            class="form-check-input"
                            id="remember"
                            name="remember"
                        >
                        <label class="form-check-label" for="remember">
                            {{ __('auth.remember_me') }}
                        </label>
                    </div>

                    <!-- Submit Button -->
                    <div class="d-grid">
                        <button type="submit" class="btn btn-primary">
                            {{ __('auth.login') }}
                        </button>
                    </div>
                </form>

                <!-- Register Link -->
                <p class="text-center mt-4 text-muted">
                    {{ __('auth.no_account') }}
                    <a href="{{ route('register') }}">{{ __('auth.register') }}</a>
                </p>
            </div>
        </div>
    </div>
</div>
@endsection
