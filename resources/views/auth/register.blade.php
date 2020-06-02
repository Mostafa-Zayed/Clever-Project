@extends('layouts.main')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
               <br>
               <br>
                    <form method="POST" action="{{ route('register') }}" class='form-register'>
                        @csrf
                        <div class="form-group row">
                            <label for="full_name" class="col-md-2 col-form-label text-md-right">Full Name </label>

                            <div class="col-md-8">
                                <input id="full_name" type="text" class="form-control @error('full_name') is-invalid @enderror" name="full_name" value="{{ old('full_name') }}"  autocomplete="full_name" autofocus>

                                @error('full_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="email" class="col-md-2 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-8">
                                <input id="email" type="email" class="form-control single-input @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <br/>
                        <div class="form-group row">
                            <label for="password" class="col-md-2 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-8">
                                <input id="password" type="password" class="form-control single-input @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <br/>
                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-2 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-8">
                                <input id="password-confirm" type="password" class="form-control single-input" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-3 offset-md-8">
                                <button type="submit" class="genric-btn success circle arrow">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                        <div class='form-group row mb-0'>
                            <label class='col-md-3'>Or Register With</label>
                            <br>
                            <a  href="{{url('login/facebook')}}" class="genric-btn primary ">Facebook</a>
                            &nbsp; &nbsp;
                            <a  href="{{url('login/google')}}" class="genric-btn danger ">Google</a>
                            &nbsp; &nbsp;
                            <a  href="{{url('login/github')}}" class="genric-btn success ">GitHub</a>
                            &nbsp; &nbsp;
                            <a  href="{{url('login/twitter')}}" class="genric-btn warning ">Twitter</a>
                        </div>
                        <br>
                    </form>
        </div>
    </div>
</div>
@endsection
