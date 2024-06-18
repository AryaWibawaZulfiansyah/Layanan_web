<div id="main">
    <nav class="navbar navbar-header navbar-expand navbar-light">
        <a class="sidebar-toggler" href="#"><span class="navbar-toggler-icon"></span></a>
        <button class="btn navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav d-flex align-items-center navbar-light ms-auto">
                <li class="dropdown nav-icon me-2">
                    <div class="dropdown-menu dropdown-menu-end">
                        <a class="dropdown-item" href="#"><i data-feather="user"></i> Account</a>
                        <a class="dropdown-item active" href="#"><i data-feather="mail"></i> Messages</a>
                        <a class="dropdown-item" href="#"><i data-feather="settings"></i> Settings</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#"><i data-feather="log-out"></i> Logout</a>
                    </div>
                </li>
                <li class="dropdown">
                    <a href="#" data-bs-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user">
                        <div class="avatar me-1">
                            <img src="{{ asset('templates/assets/images/avatar/avatar-s-1.png')}}" alt="" srcset="">
                        </div>
                        <div class="d-none d-md-block d-lg-inline-block">{{auth()->user()->name}}</div>
                    </a>
                    <div class="dropdown-menu dropdown-menu-end">
                        <a class="dropdown-item" href="#"><i data-feather="user"></i> Account</a>
                        <a class="dropdown-item active" href="#"><i data-feather="mail"></i> Messages</a>
                        <a class="dropdown-item" href="#"><i data-feather="settings"></i> Settings</a>
                        <div class="dropdown-divider"></div>
                        <!-- <a class="dropdown-item" href="#"><i data-feather="log-out"></i>
                        </a> -->
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <x-dropdown-link :href="route('logout')" onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                {{ __('Log Out') }}
                            </x-dropdown-link>
                        </form>
                    </div>
                </li>
            </ul>
        </div>
    </nav>

    <div class="main-content container-fluid">
        <div class="page-title">
            <h3>Dashboard</h3>
            <p class="text-subtitle text-muted">
                <a href="">Home ></a><a href=""> Dashboard</a>
            </p>
        </div>
        <section class="section">
            <div class="row mb-2">
                <div class="col-12 col-md-4">
                    <div class="card card-statistic">
                        <div class="card-body p-0">
                            <div class="d-flex flex-column">
                                <div class='px-3 py-3 bg-white'>
                                    <!-- <h3 class='card-title'>Tahun Angkatan 2024</h3> -->
                                    <h5 style="color:5C5F77">Tahun Angkatan 2024</h5>
                                    <p style="color:5C5F77">Pendaftaran Gelombang Ke-1 telah di buka <br>dengan kouta 100 Peserta</p>
                                    <div class=" d-flex justify-content-end">
                                        <a href="{{ route('pendaftaran')}}"><button class="btn btn-primary"> Daftar Sekarang</button></a>
                                    </div>

                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mb-4">
                <div class="col-md-4">
                    <div class="card ">
                    </div>
                </div>
            </div>
        </section>
    </div>
    @include('include.footer')
</div>