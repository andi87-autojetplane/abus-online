<div class="vertical-menu">

    <div data-simplebar class="h-100">

        {{-- <!-- User details -->
        <div class="user-profile text-center mt-3">
            <div class="">
                <img src="{{ asset('backend/assets/images/users/avatar-1.jpg') }}" alt="" class="avatar-md rounded-circle">
            </div>
            <div class="mt-3">
                <h4 class="font-size-16 mb-1">{{ Auth::user()->name }}</h4>
                <span class="text-muted"><i class="ri-record-circle-line align-middle font-size-14 text-success"></i> Online</span>
            </div>
        </div> --}}

        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu list-unstyled" id="side-menu">
                <li class="menu-title">Menu</li>

                <li>
                    <a href="{{ route('dashboard') }}" class="waves-effect">
                        <i class="ri-dashboard-line"></i>
                        <span>Dashboard</span>
                    </a>
                </li>
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="fas fa-user"></i>
                        <span>User</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{ route('admin.profile')}}">Index</a></li>
                        <li><a href="{{ route('admin.profile.show') }}">Lihat User</a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="ri-layout-3-line"></i>
                        <span>Frontend</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="true">
                        <li>
                            <a href="javascript: void(0);" class="has-arrow">Blog</a>
                            <ul class="sub-menu" aria-expanded="true">
                                <li><a href="{{ asset('backend/layouts-dark-sidebar.html') }}">Dark Sidebar</a></li>
                                <li><a href="{{ asset('backend/layouts-compact-sidebar.htm') }}l">Compact Sidebar</a></li>
                                <li><a href="{{ asset('backend/layouts-icon-sidebar.html') }}">Icon Sidebar</a></li>
                                <li><a href="{{ asset('backend/layouts-boxed.html') }}">Boxed Layout</a></li>
                                <li><a href="{{ asset('backend/layouts-preloader.html') }}">Preloader</a></li>
                                <li><a href="{{ asset('backend/layouts-colored-sidebar.html') }}">Colored Sidebar</a></li>
                            </ul>
                        </li>

                        <li>
                            <a href="javascript: void(0);" class="has-arrow">Layout</a>
                            <ul class="sub-menu" aria-expanded="true">
                                <li><a href="{{ route('hero')}}">Hero</a></li>
                                <li><a href="{{ asset('backend/layouts-hori-topbar-light.html') }}">Topbar light</a></li>
                                <li><a href="{{ asset('backend/layouts-hori-boxed-width.html') }}">Boxed width</a></li>
                                <li><a href="{{ asset('backend/layouts-hori-preloader.html') }}">Preloader</a></li>
                                <li><a href="{{ asset('backend/layouts-hori-colored-header.html') }}">Colored Header</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>

                <li class="menu-title">Pages</li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="ri-account-circle-line"></i>
                        <span>Authentication</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{ asset('backend/auth-login.html') }}">Login</a></li>
                        <li><a href="{{ asset('backend/auth-register.html') }}">Register</a></li>
                        <li><a href="{{ asset('backend/auth-recoverpw.html') }}">Recover Password</a></li>
                        <li><a href="{{ asset('backend/auth-lock-screen.html') }}">Lock Screen</a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="ri-profile-line"></i>
                        <span>Utility</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{ asset('backend/pages-starter.html') }}">Starter Page</a></li>
                        <li><a href="{{ asset('backend/pages-timeline.html') }}">Timeline</a></li>
                        <li><a href="{{ asset('backend/pages-directory.html') }}">Directory</a></li>
                        <li><a href="{{ asset('backend/pages-invoice.html') }}">Invoice</a></li>
                        <li><a href="{{ asset('backend/pages-404.html') }}">Error 404</a></li>
                        <li><a href="{{ asset('backend/pages-500.html') }}">Error 500</a></li>
                    </ul>
                </li>
            </ul>
        </div>
        <!-- Sidebar -->
    </div>
</div>
