@extends('layouts.app') @section('main')
<div class="flex w-full h-full justify-center items-center ">
    <div id="content"  class="w-[80%] pt-28 pb-28 pl-16 pr-16 border relative bg-base-100 rounded-xl top-20">

        <div class="flex flex-row justify-around w-[5rem] absolute top-5 left-5">
            <span class="h-4 w-4 bg-red-600 rounded-full" onclick="remove()"></span>
            <span class="h-4 w-4 bg-yellow-500 rounded-full"></span>
            <span class="h-4 w-4 bg-green-500 rounded-full"></span>
        </div>
        <h1 class="text-center font-semibold text-xl">
            @guest
                Welcome to Students Data App!
                @else
                Welcome to Students Data App, {{ Auth::user()->name }}!
            @endguest
        </h1>
        <a href="{{ url('/students') }}" class="flex items-center justify-center">
            <div
                class="text-center p-2 mt-5 w-[50%] rounded-3xl btn btn-outline"
            >
                @guest
                    Login
                    @else
                    Go to the App
                @endguest
            </div>
        </a>
    </div>
    <script>
        function remove() {
            document.getElementById('content').innerHTML = '<h1 class="text-center text-xl">Lets test the app!</h1>';
        }
    </script>
</div>
@endsection
