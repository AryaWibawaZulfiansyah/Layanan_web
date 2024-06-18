<div id="sidebar" class='active'>
    <div class="sidebar-wrapper active">
        <div class="sidebar-header">
            <img src="{{ asset('templates/assets/images/logo-ppdb.png')}}" alt="" srcset="" width="180">
        </div>
        <div class="sidebar-menu">
            <ul class="menu">


                <li class='sidebar-title'>Home</li>



                <li class="sidebar-item active ">

                    <a href="{{route('adminDashboard')}}" class='sidebar-link'>
                        <i data-feather="home" width="20"></i>
                        <span>Dashboard</span>
                    </a>


                </li>

                <li class='sidebar-title'>Data</li>

                <li class="sidebar-item  ">
                    <a href="{{route('datasekolah')}}" class='sidebar-link'>
                        <i class="ri-school-line" width="20"></i>
                        <span>Data Sekolah</span>
                    </a>
                </li>

                <li class="sidebar-item  ">
                    <a href="{{route('datasiswa')}}" class='sidebar-link'>
                        <i data-feather="users" width="20"></i>
                        <span>Siswa</span>
                    </a>
                </li>

                <li class="sidebar-item  ">
                    <a href="{{route('datapendaftaran')}}" class='sidebar-link'>
                        <i class="ri-file-edit-line"></i>
                        <span>Pendaftaran</span>
                    </a>
                </li>
            </ul>
        </div>
        <button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
    </div>
</div>