<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
    <div class="position-sticky pt-3">
        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link {{ ((Route::currentRouteName() == 'admin.dashboard') ? 'active' : '') }}" aria-current="page" href="{{route('admin.dashboard')}}">
                    <span data-feather="home"></span>
                    Dashboard
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ ((Route::currentRouteName() == 'admin.news.index') ? 'active' : '') }}" href="{{route('admin.news.index')}}">
                    <span data-feather="file-text"></span>
                    News
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ ((Route::currentRouteName() == 'admin.categories.index') ? 'active' : '') }}" href="{{route('admin.categories.index')}}">
                    <span data-feather="list"></span>
                    Categories
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">
                    <span data-feather="users"></span>
                    Users
                </a>
            </li>
        </ul>

    </div>
</nav>
