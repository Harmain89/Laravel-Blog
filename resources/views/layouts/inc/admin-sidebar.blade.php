<div id="layoutSidenav_nav">
    <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
        <div class="pl-4 sb-sidenav-menu">
            <div class="nav">
                <div class="sb-sidenav-menu-heading">Core</div>
                    <a class="nav-link {{ Request::is('admin/dashboard') ? 'active' : '' }} " href="{{ url('/admin/dashboard') }}">
                        <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                        Dashboard
                    </a>
                
                <div class="sb-sidenav-menu-heading">Interface</div>
                
                <!-- Start category Section -->

                <a class="nav-link {{ Request::is('admin/category') || Request::is('admin/add-category') ? 'collapse active' : 'collapsed' }}" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                    <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                    Categories
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>

                <div class="collapse {{ Request::is('admin/category') || Request::is('admin/add-category') ? 'show' : '' }}" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav">
                        <a class="nav-link {{ Request::is('admin/add-category') ? 'active' : '' }}" href="{{ url('admin/add-category') }}">Add Category</a>
                        <a class="nav-link {{ Request::is('admin/category') ? 'active' : '' }}" href="{{ url('admin/category') }}">view Category</a>
                    </nav>
                </div>
                <!-- End Category Section -->

                
                <!-- Posts Section -->
                <a class="nav-link {{ Request::is('admin/posts') || Request::is('admin/add-post') ? 'collapse active' : 'collapsed' }}" href="#" data-bs-toggle="collapse" data-bs-target="#collapsePosts" aria-expanded="false" aria-controls="collapsePosts">
                    <div class="sb-nav-link-icon"><i class="fas fa-blog"></i></div>
                    Posts
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <div class="collapse {{ Request::is('admin/posts') || Request::is('admin/add-post') ? 'show' : '' }}" id="collapsePosts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav">
                        <a class="nav-link {{ Request::is('admin/add-post') ? 'active' : '' }}" href="{{ url('admin/add-post') }}">Add Post</a>
                        <a class="nav-link {{ Request::is('admin/posts') ? 'active' : '' }}" href="{{ url('admin/posts') }}">view Posts</a>
                    </nav>
                </div>
                <!-- End Posts Section -->


                <!-- Start User Section -->

                <a class="nav-link {{ Request::is('admin/users') || Request::is('admin/add-user') ? 'collapse active' : 'collapsed' }}" href="#" data-bs-toggle="collapse" data-bs-target="#collapseUsers" aria-expanded="false" aria-controls="collapseUsers">
                    <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                    Users
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>

                <div class="collapse {{ Request::is('admin/users') || Request::is('admin/add-user') ? 'show' : '' }}" id="collapseUsers" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav">
                        <a class="nav-link {{ Request::is('admin/add-user') ? 'active' : '' }}" href="{{ url('admin/add-user') }}">Add User</a>
                        <a class="nav-link {{ Request::is('admin/users') ? 'active' : '' }}" href="{{ url('admin/users') }}">view Users</a>
                    </nav>
                </div>
                <!-- End User Section -->
                
                
                <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapsePages" aria-expanded="false" aria-controls="collapsePages">
                    <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                    Pages
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <div class="collapse" id="collapsePages" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                        <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#pagesCollapseAuth" aria-expanded="false" aria-controls="pagesCollapseAuth">
                            Authentication
                            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                        </a>
                        <div class="collapse" id="pagesCollapseAuth" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordionPages">
                            <nav class="sb-sidenav-menu-nested nav">
                                <a class="nav-link" href="login.html">Login</a>
                                <a class="nav-link" href="register.html">Register</a>
                                <a class="nav-link" href="password.html">Forgot Password</a>
                            </nav>
                        </div>
                        <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#pagesCollapseError" aria-expanded="false" aria-controls="pagesCollapseError">
                            Error
                            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                        </a>
                        <div class="collapse" id="pagesCollapseError" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordionPages">
                            <nav class="sb-sidenav-menu-nested nav">
                                <a class="nav-link" href="401.html">401 Page</a>
                                <a class="nav-link" href="404.html">404 Page</a>
                                <a class="nav-link" href="500.html">500 Page</a>
                            </nav>
                        </div>
                    </nav>
                </div>
                
                <!-- Posts links in sidebar -->
                <a class="nav-link" href="{{ url('admin/posts') }}">
                    <div class="sb-nav-link-icon"><i class="fas fa-blog"></i></div>
                    Posts
                </a>
                
                
                <div class="sb-sidenav-menu-heading">Addons</div>
                <a class="nav-link" href="charts.html">
                    <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                    Charts
                </a>
                <a class="nav-link" href="tables.html">
                    <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                    Tables
                </a>
            </div>
        </div>
        <div class="sb-sidenav-footer">
            <div class="small">
                Logged in as: <strong class="text-info">{{ Auth::user()->name }}</strong>
            </div>
            Start Bootstrap
        </div>
    </nav>
</div>