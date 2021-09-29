<!-- need to remove -->
<li class="nav-item">
    <a href="{{ route('dashboard.main') }}" class="nav-link {{ Request::routeIs('dashboard.main') ? 'active' : '' }}">
        <i class="nav-icon fas fa-tachometer-alt"></i>
        <p>Dashboard</p>
    </a>
</li>
<li>
    <a href="{{ route('dashboard.customers.index') }}" class="nav-link {{ Request::routeIs('dashboard.customers.*') ? 'active' : '' }}">
        <i class="nav-icon fas fa-address-card"></i>
        <p>Customers</p>
    </a>
</li>
<li>
    <a href="{{ route('products') }}" class="nav-link {{ Request::routeIs('products') ? 'active' : '' }}">
        <i class="nav-icon fas fa-table"></i>
        <p>Products</p>
    </a>
</li>
<li class="nav-header">ADMIN</li>
<li>
    <a href="{{ route('users') }}" class="nav-link {{ Request::routeIs('users') ? 'active' : '' }}">
        <i class="nav-icon fas fa-users "></i>
        <p>Users</p>
    </a>
</li>
