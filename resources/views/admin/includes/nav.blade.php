<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="javascript:void(0)">Admin</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link {{ route('admin.dashboard') == url()->current() ? 'active' : '' }}" href="{{ route('admin.dashboard') }}">Dashboard</a>
      </li>

      <li class="nav-item">
        <a class="nav-link {{ route('admin.products') == url()->current() ? 'active' : '' }}" href="{{ route('admin.products') }}">Products</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="">Orders</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="">Payments</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="">Customers</a>
      </li>
      <li class="nav-item">
        <a href="{{ route('logout') }}" class="nav-link">Logout</a>
      </li>

    </ul>


  </div>
</nav>