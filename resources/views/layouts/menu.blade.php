<li class="nav-item">
    <a href="{{ route('users.index') }}"
       class="nav-link {{ Request::is('users*') ? 'active' : '' }}">
        <p>Users</p>
    </a>
</li>


<li class="nav-item">
    <a href="{{ route('plans.index') }}"
       class="nav-link {{ Request::is('plans*') ? 'active' : '' }}">
        <p>Plans</p>
    </a>
</li>


