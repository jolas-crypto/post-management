@extends('layouts.login')

@section('title')
    Post Management | Login
@endsection

@section('content')
    <div class="max-w-96 mx-auto mt-5">
        <div class="bg-white shadow-md rounded-md">
            <div class="p-6 bg-gray-100 border-b border-gray-200">Login</div>
            <div class="p-6">
                <form action="{{ route('login-submit') }}" method="post">
                    @csrf
                    <div class="mb-4">
                        <label for="email" class="block mb-1">Email Address</label>
                        <input 
                        type="email" 
                        id="email" 
                        name="email" 
                        value="{{ old('email') }}" 
                        class="login-input-class @error('email') border-red-500 @enderror">
                        @error('email')
                            <span class="text-red-500 text-sm">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-4">
                        <label for="password" class="block mb-1">Password</label>
                        <input 
                        type="password" 
                        id="password" 
                        name="password" 
                        class="login-input-class 
                        @error('password') border-red-500 @enderror">
                        @error('password')
                            <span class="text-red-500 text-sm">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-4">
                        <input type="submit" value="Login" class="login-button">
                        <a href="{{ route('google.login') }}" class="button">
                            <img src="https://developers.google.com/identity/images/btn_google_signin_dark_normal_web.png" alt="Sign up with Google" />
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection