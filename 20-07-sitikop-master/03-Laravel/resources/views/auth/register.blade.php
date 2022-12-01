@extends('layouts.app')
@section('content')
<div class="container d-flex justify-content-center">
            <form method="POST" action="{{ route('register') }}">
                @csrf
                <h1 class="text-bold">Register</h1>
                <div class="row mb-3 mt-4">
                    <input placeholder="Username" type="text" class="@error('name') is-invalid @enderror" name="name"
                    value="{{ old('name') }}" required autocomplete="name" autofocus>
                    @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                <div class="row mb-3">
                    <input placeholder="Email" type="text" class="@error('email') is-invalid @enderror" name="email"
                    value="{{ old('email') }}" required autocomplete="email">
                    @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                
                <div class="row mb-3">
                    <input placeholder="No Handphone" type="text" class=" @error('phone_number') is-invalid @enderror"
                    name="phone_number" value="{{ old('phone_number') }}" required autocomplete="phone_number">
                    @error('phone_number')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                <div class="row mb-3">
                    <input placeholder="Password" type="password" class=" @error('password') is-invalid @enderror"
                    name="password" required autocomplete="new-password">
                    @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
            <button type="submit" class="btn btn-primary">Register</button>
        </form>

</div>
@endsection
