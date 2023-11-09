@extends('layouts.landpage')

@section('content')
<div class="container">
    <div class="content">
        <div class="lqdi-content lqdi-grid">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group lqdi-grid__item">
                            <label for="name" class="lqdi-width--third col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="lqdi-width--half">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group lqdi-grid__item">
                            <label for="email" class="lqdi-width--third col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="lqdi-width--half">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group lqdi-grid__item">
                            <label for="password" class="lqdi-width--third col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="lqdi-width--half">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group lqdi-grid__item">
                            <label for="password-confirm" class="lqdi-width--third col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="lqdi-width--half">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group lqdi-grid__item mb-0">
                            <div class="lqdi-width--half offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
