@extends('layouts.app')
@section('main')

    <div class="flex justify-center mt-6">
        {{-- card --}}
        <form action="{{ route("register") }}" method="post">
            @csrf
            <div class="card card-compact w-fit bg-white shadow-xl flex items-center text-center">
                <div class="card-body">
                    <h2 class="font-bold text-2xl">Register</h2>
                    <label class="label">
                        <span class="label-text">Enter Your Name</span>
                    </label>
                    <input type="text" name="name" id="name" placeholder="Name" class="input input-bordered input-primary w-96 max-w-xs" value="{{old('name')}}" />
                    @error('name')
                        <span class="text-red-500">
                            {{ $message }}
                        </span>
                    @enderror
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
                    
                    <label class="label">
                        <span class="label-text">Confirm Password</span>
                    </label>
                    <input type="password" name="password_confirmation" id="password_confirmation" placeholder="Confirm Password" class="input input-bordered input-primary w-96 max-w-xs" />
                    
                    
                    <button type="submit" class="btn btn-outline btn-success mt-3">Register</button>
                </div>
            </div>
        </form>
    </div>
@endsection