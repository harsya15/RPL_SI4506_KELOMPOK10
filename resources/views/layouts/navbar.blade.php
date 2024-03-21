  <!-- Nav -->
  <nav class="navbar navbar-expand navbar-dark bg-danger">
    <div class="container py-2">
      <div class="navbar-nav justify-content-between w-100">
        <a class="nav-link active" href="/home" aria-current="page">Home</a>
        <div class="d-flex">
          <!-- <a class="nav-link" href="{{ route('admin.create') }}">Add</a>
          <a class="nav-link" href="{{ route('admin.index') }}">List</a> -->
          <li class="nav-item dropdown">
            <a class="nav-link text-white dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                @if(auth()->check())
                {{ auth()->user()->name }}  
                @endif
            </a>
            <ul class="dropdown-menu dropdown-menu-end">
              <li><a class="dropdown-item" href="{{ route('logout') }}">Logout</a></li>
            </ul>
          </li>
        </div>
      </div>
    </div>
  </nav>
  <!-- Nav End -->
