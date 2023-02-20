@extends('layouts.app')
@section('main')

    <div class="flex justify-center mt-6">
        {{-- card --}}
        <form action="{{ route("login") }}" method="post">
            @csrf
            <div class="card card-compact w-fit bg-white shadow-xl flex items-center text-center">
                <div class="card-body">
                    <h2 class="font-bold text-2xl">Login</h2>
                    <label class="label">
                        <span class="label-text">Enter Email</span>
                    </label>
                    <input type="email" name="email" id="email" placeholder="Email" class="input input-bordered input-primary w-96 max-w-xs" value="{{old('email')}}" />
                    @error('email')
                        <span class="text-red-500">
                            {{ $message }}
                        </span>
                    @enderror

                    <label class="label">
                        <span class="label-text">Enter Password</span>
                    </label>
                    <input type="password" name="password" id="password" placeholder="Password" class="input input-bordered input-primary w-96 max-w-xs" value="{{old('password')}}" />
                    @error('password')
                        <span class="text-red-500">
                            {{ $message }}
                        </span>
                    @enderror

                    <div class="flex flex-row justify-between">

                        <a href="{{ route('register') }}" class="underline text-warning">Don't have an account?</a>

                        <a href="{{ route('password.request') }}" class="underline text-error mt-1">Forgot Password?</a>
                    </div>
                    
                    <button type="submit" class="btn btn-outline btn-success mt-3">Login</button>
                </div>
            </div>
        </form>
    </div>
@endsection