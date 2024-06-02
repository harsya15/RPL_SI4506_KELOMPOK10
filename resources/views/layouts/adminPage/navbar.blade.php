  <!-- Nav -->
  <nav class="navbar navbar-expand navbar-dark bg-danger">
    <div class="container py-2">
      <div class="navbar-nav justify-content-between w-100">
        <a class="nav-link active" href="{{ route('userAccess') }}" aria-current="page">Home</a>
        <div class="d-flex">
          <li class="nav-item dropdown">
            <a class="nav-link text-white dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              {{ Auth::user()->name }}
            </a>
            <ul class="dropdown-menu dropdown-menu-end">
              <li><a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a></li>
              <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
              </form>
            </ul>
          </li>
        </div>
      </div>
    </div>
  </nav>
  <!-- Nav End -->
