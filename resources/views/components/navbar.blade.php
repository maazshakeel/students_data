<div class="navbar bg-white sticky top-0 z-20">
  <div class="navbar-start">
    <a href="{{ url('/students') }}" class="btn btn-ghost normal-case text-xl">Students Data</a>
  </div>
  <div class="navbar-end gap-3">
    @guest
    <a href="{{ route('register') }}" class="btn btn-outline btn-warning mr-2">Register</a>
    <a href="{{ route('login') }}" class="btn btn-outline btn-primary mr-5">Login</a>
    @else
    @if (Auth::user()->role == 'admin')
      <a href="{{ url('/notes/user-list') }}" class="btn btn-primary">User List</a>
    @endif
      <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('form-logout').submit()" class="btn btn-outline btn-error mr-5">Logout</a>
      <form action="{{route('logout')}}" method="post" id="form-logout">@csrf</form>
    @endguest
  </div>
</div>