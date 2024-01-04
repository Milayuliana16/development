@extends('layouts.app')

@section('content')

<div class="container">

    <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-6 col-md-6 d-flex flex-column align-items-center justify-content-center">

            <div class="card mb-3">

              <div class="card-body">

                <div class="pt-4 pb-2">
                  <h5 class="card-title text-center pb-0 fs-4">Digital Guest Book</h5>
                </div>

                <form method="POST" action="{{ route('login') }}">
                    @csrf

                    <div class="row">
                        <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                        <div class="col-12">
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="row">
                        <label for="password" class="col-md-4 col-form-label ">{{ __('Password') }}</label>

                        <div class="col-12">
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <br>
                    <div class="col-12">
                        <button type="submit" class="btn btn-primary w-100">
                            {{ __('Login') }}
                        </button>
                    </div>
                </form>

              </div>
            </div>

          </div>
        </div>
      </div>

    </section>

  </div>
@endsection
