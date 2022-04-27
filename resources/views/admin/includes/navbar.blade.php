<!-- navbar fashion -->
<nav class="navbar navbar-expand-lg fashion">
    <div class="container">
      <a class="navbar-brand me-5 text-light name" href="#">Fashion</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
        aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav ms-auto icon">
          <li class="nav-item">
            <a class="nav-link " aria-current="page" href="{{url('admin')}}">Dashboard</a>
          </li>
          <li class="nav-item">
            <a class="nav-link " aria-current="page" href="/">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('users.index')}}">Users</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('roles.index')}}">Roles</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('products.index')}}">categories</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Sales</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Blog</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- end navbar fashion -->