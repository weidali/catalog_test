<!-- need to remove -->
<li class="nav-item">
    <a href="{{ route('dashboard.main') }}" class="nav-link {{ Request::routeIs('dashboard.main') ? 'active' : '' }}">
        <i class="nav-icon fas fa-tachometer-alt"></i>
        <p>Dashboard</p>
    </a>
</li>
<li class="nav-item">
    <a href="{{ route('dashboard.customer.index') }}" class="nav-link {{ Request::routeIs('dashboard.customer.*') ? 'active' : '' }}">
        <i class="nav-icon fas fa-address-card"></i>
        <p>Customers</p>
    </a>
</li>
<li class="nav-item">
    <a href="{{ route('dashboard.product.index') }}" class="nav-link {{ Request::routeIs('dashboard.product.*') ? 'active' : '' }}">
        <i class="nav-icon fas fa-table"></i>
        <p>Products</p>
    </a>
</li>
<li class="nav-item">
    <a href="{{ route('dashboard.order.index') }}" class="nav-link {{ Request::routeIs('dashboard.order.*') ? 'active' : '' }}">
        <i class="nav-icon fas fa-file"></i>
        <p>Orders</p>
    </a>
</li>
<li class="nav-header">ADMIN</li>
<li class="nav-item">
    <a href="{{ route('users') }}" class="nav-link {{ Request::routeIs('users') ? 'active' : '' }}">
        <i class="nav-icon fas fa-users "></i>
        <p>Users</p>
    </a>
</li>
