<nav class="navbar navbar-expand-lg main-navbar">
    <form class="form-inline mr-auto">
        <ul class="navbar-nav mr-3">
            <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i class="fas fa-bars"></i></a></li>
            <li><a href="#" data-toggle="search" class="nav-link nav-link-lg d-sm-none"><i
                        class="fas fa-search"></i></a></li>
        </ul>

    </form>
    <ul class="navbar-nav navbar-right">

        <li class="dropdown"><a href="#" data-toggle="dropdown"
                class="nav-link dropdown-toggle nav-link-lg nav-link-user">
                <img alt="image" src="{{ asset(auth()->guard('admin')->user()->image) }}" class="rounded-circle mr-1">
                <div class="d-sm-none d-lg-inline-block">Hi, {{ auth()->guard('admin')->user()->name }}</div>
            </a>
            <div class="dropdown-menu dropdown-menu-right">

                <a href="" class="dropdown-item has-icon">
                    <i class="far fa-user"></i> Profile
                </a>
                <a href="" class="dropdown-item has-icon">
                    <i class="fas fa-cog"></i> Settings
                </a>
                <div class="dropdown-divider"></div>
                <form method="POST" action="{{ route('admin.logout') }}">
                    @csrf

                    <a href="{{ route('admin.logout') }}"
                        onclick="event.preventDefault();
                    this.closest('form').submit();"
                        class="dropdown-item has-icon text-danger">
                        <i class="fas fa-sign-out-alt"></i> Logout
                    </a>
                </form>

            </div>
        </li>
    </ul>
</nav>

<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="index.html">Stisla</a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="index.html">St</a>
        </div>
        <ul class="sidebar-menu">
            <li class="menu-header">Dashboard</li>

            <li class="{{ setSidebarActive(['admin.dashboard']) }}">
                <a href="{{ route('admin.dashboard') }}" class="nav-link"><i class="fas fa-fire"></i><span>Dashboard</span></a>

            </li>
            <li class="menu-header">Starter</li>

            <li class="{{ setSidebarActive(['admin.orders.*']) }}"><a class="nav-link" href=""><i class="fas fa-cart-plus"></i> <span>Orders</span></a></li>

            <li class="{{ setSidebarActive(['admin.job-categories.*']) }}"><a class="nav-link" href=""><i class="fas fa-list"></i> <span>Job Category</span></a></li>

            <li class="{{ setSidebarActive(['admin.jobs.*']) }}"><a class="nav-link" href=""><i class="fas fa-briefcase"></i> <span>Job Post</span></a></li>

            <li class="{{ setSidebarActive(['admin.job-roles.*']) }}"><a class="nav-link" href=""><i class="fas fa-user-md"></i> <span>Job Roles</span></a></li>


            <li class="dropdown {{ setSidebarActive(
                ['admin.industry-types.*',
                'admin.organization-types.*',
                'admin.languages.*',
                'admin.professions.*',
                'admin.skills.*',
                'admin.educations.*',
                'admin.job-types.*',
                'admin.salary-types.*',
                'admin.tags.*',
                'admin.job-experiences.*'] ) }}">
                <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-columns"></i>
                    <span>Attributes</span></a>
                <ul class="dropdown-menu">
                    <li class="{{ setSidebarActive(['admin.industry-types.*']) }}"><a class="nav-link" href="">Industry Type</a></li>
                    <li class="{{ setSidebarActive(['admin.organization-types.*']) }}"><a class="nav-link" href="">Orginization Type</a></li>

                    <li class="{{ setSidebarActive(['admin.languages.*']) }}"><a class="nav-link" href="">Languages</a></li>

                    <li class="{{ setSidebarActive(['admin.professions.*']) }}"><a class="nav-link" href="">Professions</a></li>

                    <li class="{{ setSidebarActive(['admin.skills.*']) }}"><a class="nav-link" href="">Skills</a></li>
                    <li class="{{ setSidebarActive(['admin.educations.*']) }}"><a class="nav-link" href="">Educations</a></li>
                    <li class="{{ setSidebarActive(['admin.job-types.*']) }}"><a class="nav-link" href="">Job Types</a></li>
                    <li class="{{ setSidebarActive(['admin.salary-types.*']) }}"><a class="nav-link" href="">Salary Types</a></li>
                    <li class="{{ setSidebarActive(['admin.tags.*']) }}"><a class="nav-link" href="">Tags</a></li>
                    <li class="{{ setSidebarActive(['admin.job-experiences.*']) }}"><a class="nav-link" href="">Experiences</a></li>
                </ul>
            </li>

            <li class="dropdown {{ setSidebarActive(['admin.countries.*', 'admin.states.*', 'admin.cities.*']) }}">
                <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="far fa-map"></i>
                    <span>Locations</span></a>
                <ul class="dropdown-menu">
                    <li class="{{ setSidebarActive(['admin.countries.*']) }}"><a class="nav-link" href="">Countries</a></li>
                    <li class="{{ setSidebarActive(['admin.states.*']) }}"><a class="nav-link" href="">States</a></li>
                    <li class="{{ setSidebarActive(['admin.cities.*']) }}"><a class="nav-link" href="">Cities</a></li>


                </ul>
            </li>

            <li class="dropdown {{ setSidebarActive([
                'admin.hero.index',
                'admin.why-choose-us.index',
                'admin.learn-more.*',
                'admin.counter.*',
                'admin.job-location.*',
                'admin.reviews.*',
                ]) }}">
                <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-puzzle-piece"></i>
                    <span>Sections</span></a>
                <ul class="dropdown-menu">
                    <li class="{{ setSidebarActive(['admin.hero.index']) }}"><a class="nav-link" href="">Hero</a></li>
                    <li class="{{ setSidebarActive(['admin.why-choose-us.*']) }}"><a class="nav-link" href="">Why Choose Us</a></li>
                    <li class="{{ setSidebarActive(['admin.learn-more.*']) }}"><a class="nav-link" href="">Learn More</a></li>
                    <li class="{{ setSidebarActive(['admin.counter.*']) }}"><a class="nav-link" href="">Counter</a></li>
                    <li class="{{ setSidebarActive(['admin.job-location.*']) }}"><a class="nav-link" href="">Job Locations</a></li>
                    <li class="{{ setSidebarActive(['admin.reviews.*']) }}"><a class="nav-link" href="">Reviews</a></li>
                </ul>
            </li>

            <li class="dropdown {{ setSidebarActive(['admin.about-us.*', 'admin.page-builder.*']) }}">
                <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-file"></i>
                    <span>Pages</span></a>
                <ul class="dropdown-menu">
                    <li class="{{ setSidebarActive(['admin.about-us.*']) }}"><a class="nav-link" href="">About us</a></li>
                    <li class="{{ setSidebarActive(['admin.page-builder.*']) }}"><a class="nav-link" href="">Page Builder</a></li>

                </ul>
            </li>

            <li class="dropdown {{ setSidebarActive(['admin.footer.*', 'admin.social-icon.*']) }}">
                <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-shoe-prints"></i>
                    <span>Footer</span></a>
                <ul class="dropdown-menu">
                    <li class="{{ setSidebarActive(['admin.footer.*']) }}"><a class="nav-link" href="">Footer Details</a></li>

                    <li class="{{ setSidebarActive(['admin.social-icon.*']) }}"><a class="nav-link" href="">Social Icons</a></li>
                </ul>
            </li>

            <li class="{{ setSidebarActive(['admin.blogs.*']) }}"><a class="nav-link" href=""><i class="fab fa-blogger-b"></i> <span>Blogs</span></a></li>

            <li class="{{ setSidebarActive(['admin.plans.*']) }}"><a class="nav-link" href=""><i class="fas fa-box"></i> <span>Price Plan</span></a></li>

            <li class="{{ setSidebarActive(['admin.newsletter.*']) }}"><a class="nav-link" href=""><i class="fas fa-mail-bulk"></i> <span>Newsletter</span></a></li>

            <li class="{{ setSidebarActive(['admin.menu-builder.*']) }}"><a class="nav-link" href=""><i class="fas fa-shapes"></i> <span>Menu Builder</span></a></li>

            <li class="dropdown {{ setSidebarActive(['admin.role-user.*', 'admin.role.*']) }}">
                <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-user-shield"></i>
                    <span>Access Management</span></a>
                <ul class="dropdown-menu">
                    <li class="{{ setSidebarActive(['admin.role-user.*']) }}"><a class="nav-link" href="">Role Users</a></li>
                    <li class="{{ setSidebarActive(['admin.role.*']) }}"><a class="nav-link" href="">Roles</a></li>
                </ul>
            </li>

            <li class="{{ setSidebarActive(['admin.payment-settings.index']) }}"><a class="nav-link" href=""><i class="fas fa-wrench"></i> <span>Payment Settings</span></a></li>


            <li class="{{ setSidebarActive(['admin.payment-settings.index']) }}"><a class="nav-link" href=""><i class="fas fa-cog"></i> <span>Site Settings</span></a></li>

            <li class="{{ setSidebarActive(['admin.clear-database.index']) }}"><a class="nav-link" href=""><i class="fas fa-skull-crossbones"></i> <span>Clear Database</span></a></li>
            

        </ul>
    </aside>
</div>
