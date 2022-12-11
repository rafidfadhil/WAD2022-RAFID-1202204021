  <!-- Nav -->
  <nav class="navbar navbar-expand navbar-dark bg-primary">
    <div class="container py-2">
        {{-- check if user is logged in --}}
        @auth
            <div class="navbar-nav">
                <a class="nav-link" style="color: white;" href="{{ '/' }}">Home</a>
                <a class="nav-link" href="{{ '/list' }}">MyCar</a>
            </div>
            <div class="d-flex">
                <a href="{{ '/add' }}" class="btn btn-light text-black" role="button">Add Car</a>
                <div class="dropdown ms-4">
                    <button class="btn btn-light dropdown-toggle text-" type="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        {{ auth()->user()->name }}
                    </button>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item text-black" href="{{ '/profile/'.auth()->user()->id }}">Profile</a></li>
                        {{-- Logout --}}
                        <li>
                            <form action="{{ url('/logout') }}" method="POST">
                                @csrf
                                <button type="submit" class="dropdown-item text-">Logout</button>
                            </form>
                        </li>
                    </ul>
                </div>
            </div>
        @else
            <div class="navbar-nav w-100 d-flex justify-content-between">
                <a class="nav-link active" aria-current="page" href="{{ 'home' }}">Home</a>
                <a class="nav-link" href="{{ 'login' }}">Login</a>
            </div>
        @endauth

    </div>
</nav>
<!-- Nav End -->
