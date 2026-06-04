<div class="sidebar" id="sidebar">
    <div class="sidebar-logo">
        <div>
            <a href="index.html" class="logo logo-normal">
                <img src="{{ asset('assets/img/logo.svg') }}" alt="Logo">
            </a>
            <a href="index.html" class="logo-small">
                <img src="{{ asset('assets/img/logo-small.svg') }}" alt="Logo">
            </a>

            <a href="index.html" class="dark-logo">
                <img src="{{ asset('assets/img/logo-white.svg') }}" alt="Logo">
            </a>
        </div>
        <button class="sidenav-toggle-btn btn border-0 p-0 active" id="toggle_btn">
            <i class="ti ti-arrow-left text-body"></i>
        </button>

        <button class="sidebar-close">
            <i class="ti ti-x align-middle"></i>
        </button>
    </div>

    <div class="sidebar-inner" data-simplebar>
        <div id="sidebar-menu" class="sidebar-menu">
            <div class="sidebar-top shadow-sm p-2 rounded-1 mb-3 dropend">
                <a href="javascript:void(0);" class="drop-arrow-none" data-bs-toggle="dropdown"
                    data-bs-auto-close="outside" data-bs-offset="0,22" aria-haspopup="false" aria-expanded="false">
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="d-flex align-items-center">
                            <span class="avatar rounded-circle flex-shrink-0 p-2"><img
                                    src="{{ asset('assets/img/icons/trustcare.svg') }}" alt="img"></span>
                            <div class="ms-2">
                                <h6 class="fs-14 fw-semibold mb-0">{{ auth()->user()->name }}</h6>
                                <p class="fs-13 mb-0">{{ auth()->user()->getRoleNames()->first() }}</p>
                            </div>
                        </div>
                        <i class="ti ti-arrows-transfer-up"></i>
                    </div>
                </a>

            </div>
            <ul>
                <li class="menu-title"><span>Main Menu</span></li>
                <li>
                    <ul>
                        <li>
                            <a href="{{ route('dashboard') }}">
                                <i class="ti ti-layout-dashboard"></i><span>Dashbaord</span>
                            </a>
                        </li>
                        <li>
                            <a href="locations.html">
                                <i class="ti ti-layout-dashboard"></i><span>Role Management</span>
                            </a>
                        </li>
                        <li>
                            <a href="locations.html">
                                <i class="ti ti-layout-dashboard"></i><span>User Management</span>
                            </a>
                        </li>

                    </ul>
                </li>
                <li class="menu-title"><span>Clinic Management</span></li>
                <li>
                    <ul>
                        <li>
                            <a href="{{ route('patients.index') }}">
                                <i class="ti ti-users-group"></i><span>Patients</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('doctors.index') }}">
                                <i class="ti ti-users-group"></i><span>Doctors</span>
                            </a>
                        </li>
                    </ul>
                </li>

            </ul>
        </div>
    </div>
</div>
