    <nav class="app-header navbar navbar-expand bg-body">
        <!--begin::Container-->
        <div class="container-fluid">
            <!--begin::Start Navbar Links-->
            <ul class="navbar-nav ms-auto">
                <!--begin::User Menu Dropdown-->
                <li class="nav-item dropdown user-menu">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                        <img src="{{ asset('AdminLTE/dist/assets/img/user2-160x160.jpg') }}"
                            class="user-image rounded-circle shadow" alt="User Image" />
                        <span class="d-none d-md-inline">{{ auth()->user()->nama }}</span>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-lg dropdown-menu-end">
                        <!--begin::User Image-->
                        <li class="user-header text-bg-primary">
                            <img src="{{ asset('AdminLTE/dist/assets/img/user2-160x160.jpg') }}"
                                class="rounded-circle shadow" alt="User Image" />
                            <p>
                                {{ auth()->user()->nama}} - {{ auth()->user()->email }}
                            </p>
                        </li>

                        <!--begin::Menu Footer-->
                        <li class="user-footer">
                            <a href="#" class="btn btn-default btn-flat">Profil</a>

                            <a href="#" class="btn btn-default btn-flat float-end"
                                onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Keluar</a>
                        </li>
                        <!--end::Menu Footer-->
                    </ul>
                </li>
                <!--end::User Menu Dropdown-->
            </ul>
            <!--end::End Navbar Links-->
        </div>
        <!--end::Container-->
    </nav>
    <!--end::Header-->

<form action="{{ route('logout') }}" method="post" id="logout-form" style="display: none;">
    @csrf
</form>