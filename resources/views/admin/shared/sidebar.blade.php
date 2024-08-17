<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
    <div class="py-4">
        @include('admin.shared.logo')
    </div>
    <div class="menu-inner-shadow"></div>

    <ul class="menu-inner py-1">
        <!-- Dashboards -->
        <li class="menu-item {{ Route::is('panel.dashboard') ? 'active' : '' }}">
            <a href="{{ route('panel.dashboard') }}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-collection"></i>
                <div class="text-truncate" data-i18n="Dashboards">Dashboard</div>
            </a>
        </li>
        <li class="menu-header small text-uppercase">
            <span class="menu-header-text">Content Management</span>
        </li>
        <li
            class="menu-item {{ Route::is('panel.infoPage.index') || Route::is('panel.infoPage.create') || Route::is('panel.infoPage.edit') ? 'active' : '' }}">
            <a href="{{ route('panel.infoPage.index') }}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-book-content"></i>
                <div class="text-truncate" data-i18n="Info Pages">Info Pages</div>
            </a>
        </li>
        <li
            class="menu-item {{ Route::is('panel.slider.index') || Route::is('panel.slider.create') || Route::is('panel.slider.edit') ? 'active' : '' }}">
            <a href="{{ route('panel.slider.index') }}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-book-content"></i>
                <div class="text-truncate" data-i18n="Home Silder">Home Silder</div>
            </a>
        </li>
        <li
            class="menu-item {{ Route::is('panel.newsEvent.index') || Route::is('panel.newsEvent.create') || Route::is('panel.newsEvent.edit') ? 'active' : '' }}">
            <a href="{{ route('panel.newsEvent.index') }}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-news"></i>
                <div class="text-truncate" data-i18n="News and Event">News and Event</div>
            </a>
        </li>
        <li
            class="menu-item {{ Route::is('panel.project.index') || Route::is('panel.project.create') || Route::is('panel.project.edit') ? 'active' : '' }}">
            <a href="{{ route('panel.project.index') }}" class="menu-link">
                <i class="menu-icon tf-icons bx bxs-buildings"></i>
                <div class="text-truncate" data-i18n="Projects">Projects</div>
            </a>
        </li>
        {{-- //jobs --}}
        <li
            class="menu-item {{ Route::is('panel.job.index') || Route::is('panel.job.create') || Route::is('panel.job.edit') ? 'active' : '' }}">
            <a href="{{ route('panel.job.index') }}" class="menu-link">
                <i class="menu-icon tf-icons bx bxs-briefcase"></i>
                <div class="text-truncate" data-i18n="Jobs">Jobs</div>
            </a>
        </li>
        <li
            class="menu-item">
            <a href="" class="menu-link">
                <i class="menu-icon tf-icons bx bxs-briefcase"></i>
                <div class="text-truncate" data-i18n="Jobs">Landowners</div>
            </a>
        </li>
        <li
            class="menu-item">
            <a href="" class="menu-link">
                <i class="menu-icon tf-icons bx bxs-briefcase"></i>
                <div class="text-truncate" data-i18n="Jobs">Buyers</div>
            </a>
        </li>
        <li
            class="menu-item">
            <a href="" class="menu-link">
                <i class="menu-icon tf-icons bx bxs-briefcase"></i>
                <div class="text-truncate" data-i18n="Jobs">Contact Us</div>
            </a>
        </li>
        <li
            class="menu-item">
            <a href="{{ route('panel.team.index') }}" class="menu-link">
                <i class="menu-icon tf-icons bx bxs-briefcase"></i>
                <div class="text-truncate" data-i18n="Jobs">Team</div>
            </a>
        </li>
        <li
            class="menu-item">
            <a href="" class="menu-link">
                <i class="menu-icon tf-icons bx bxs-briefcase"></i>
                <div class="text-truncate" data-i18n="Jobs">Clients</div>
            </a>
        </li>
        <!-- Pages -->
        <li class="menu-item {{ request()->routeIs('panel.account*') ? 'active open' : '' }}">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-dock-top"></i>
                <div class="text-truncate" data-i18n="Account Settings">Account Settings</div>
            </a>
            <ul class="menu-sub">
                <li class="menu-item {{ request()->routeIs('panel.account.edit') ? 'active' : '' }}">
                    <a href="{{ route('panel.account.edit') }}" class="menu-link">
                        <div class="text-truncate" data-i18n="Account">Account</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="#" class="menu-link">
                        <div class="text-truncate" data-i18n="Notifications">Users List</div>
                    </a>
                </li>
            </ul>
        </li>
    </ul>
</aside>
