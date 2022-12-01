@extends('layouts.app')
@section('content')
<div class="container d-flex justify-content-center">

                    <form method="POST" action="{{ route('login') }}">     
                        @csrf
                        <h1>Login</h1>
                        <div class="row mb-3">
                            <input placeholder="Email" type="text" class="@error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="row mb-3">
                            <input placeholder="Password" type="password" class="@error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <button type="submit" class="btn btn-primary">Login</button>
                    </form>

                        
</div>
@endsection
