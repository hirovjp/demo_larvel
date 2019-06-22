<ul class="sidebar navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="{{route('admin-home')}}">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span>
        </a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link" href="{{action('Admin\ProductController@index')}}">
          <i class="fas fa-hamburger"></i>
          <span>Products</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{action('Admin\CatalogController@index')}}">
          <i class="fa fa-bookmark"></i>
          <span>Catalogs</span></a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link" href="{{action('Admin\CustomerController@index')}}">
        <i class="fa fa-user"></i>
          <span>Customers</span>
        </a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link" href="{{action('Admin\OrderController@index')}}">
        <i class="fa fa-shopping-cart"></i>
          <span>Orders</span>
        </a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link" href="{{action('Admin\OrderController@index')}}">
        <i class="fas fa-users"></i>
          <span>Users</span>
        </a>
      </li>
    </ul>