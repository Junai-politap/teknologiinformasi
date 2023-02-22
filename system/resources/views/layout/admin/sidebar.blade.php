@php

function checkRouteActive($route)
{
    if (Route::current()->uri == $route) {
        return 'active';
    }
}
@endphp
<aside class="main-sidebar sidebar-dark-primary elevation-4">

    <a href="{{ url('page-admin') }}" class="brand-link">
        <img src="{{ url('public/admin') }}/logo.ico" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
            style="opacity: .8">
        <span class="brand-text font-weight-light">INFORMATIKA</span>
    </a>

    <div class="sidebar">
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{ url('public/admin') }}/logo.ico" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block"> Super Admin</a>
            </div>
        </div>

        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

                <li class="nav-item has-treeview menu-open">
                    <a href="{{ url('page-admin') }}" class="nav-link {{ checkRouteActive('page-admin') }}">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Dashboard
                        </p>
                    </a>
                </li>

                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fa fa-list"></i>
                        <p>
                            Master Data
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                                              
                        <li class="nav-item">
                            <a href="{{ url('page-pegawai') }}" class="nav-link {{ checkRouteActive('page-pegawai') }}">
                                <i class="fa fa-minus nav-icon"></i>
                                <p>Pegawai</p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="{{ url('page-mahasiswa') }}" class="nav-link {{ checkRouteActive('page-mahasiswa') }}">
                                <i class="fa fa-minus nav-icon"></i>
                                <p>
                                    Mahasiswa
                                </p>
                            </a>
        
                        </li>

                        <li class="nav-item">
                            <a href="{{ url('page-visi-misi') }}" class="nav-link {{ checkRouteActive('page-visi-misi') }}">
                                <i class="fa fa-minus nav-icon"></i>
                                <p>Visi & Misi</p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="{{ url('page-lulusan') }}" class="nav-link {{ checkRouteActive('page-lulusan') }}">
                                <i class="fa fa-minus nav-icon"></i>
                                <p>Profil Lulusan</p>
                            </a>
                        </li>
                       
                    </ul>
                </li>

                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fa fa-list"></i>
                        <p>
                            Akademik
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ url('page-kurikulum') }}" class="nav-link {{ checkRouteActive('page-kurikulum') }}">
                                <i class="fa fa-minus nav-icon"></i>
                                <p>Kurikulum</p>
                            </a>
                        </li>
                      
                        <li class="nav-item">
                            <a href="{{ url('page-akreditasi') }}" class="nav-link {{ checkRouteActive('page-akreditasi') }}">
                                <i class="fa fa-minus nav-icon"></i>
                                <p>Akreditasi</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('page-pedoman') }}" class="nav-link {{ checkRouteActive('page-pedoman') }}">
                                <i class="fa fa-minus nav-icon"></i>
                                <p>Pedoman</p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="{{ url('page-fasilitas') }}" class="nav-link {{ checkRouteActive('page-fasilitas') }}">
                                <i class="fa fa-minus nav-icon"></i>
                                <p>Fasilitas</p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="{{ url('page-pelayanan') }}" class="nav-link {{ checkRouteActive('page-pelayanan') }}">
                                <i class="fa fa-minus nav-icon"></i>
                                <p>Pelayanan</p>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fa fa-database"></i>
                        <p>
                            Project
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                                              
                        <li class="nav-item">
                            <a href="{{ url('page-pbl') }}" class="nav-link {{ checkRouteActive('page-pbl') }}">
                                <i class="fa fa-minus nav-icon"></i>
                                <p>PBL</p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="{{ url('page-tugas-akhir') }}" class="nav-link {{ checkRouteActive('page-tugas-akhir') }}">
                                <i class="fa fa-minus nav-icon"></i>
                                <p>
                                    Tugas Akhir
                                </p>
                            </a>
        
                        </li>

                        <li class="nav-item">
                            <a href="{{ url('page-penelitian') }}" class="nav-link {{ checkRouteActive('page-penelitian-dosen') }}">
                                <i class="fa fa-minus nav-icon"></i>
                                <p>Penelitian Dosen</p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="{{ url('page-pengabdian') }}" class="nav-link {{ checkRouteActive('page-pengabdian-dosen') }}">
                                <i class="fa fa-minus nav-icon"></i>
                                <p>Pengabdian Dosen</p>
                            </a>
                        </li>
                       
                    </ul>
                </li>

                {{-- <li class="nav-item has-treeview">
                    <a href="{{ url('page-prodi') }}" class="nav-link {{ checkRouteActive('page-prodi') }}">
                        <i class="nav-icon fa fa-university"></i>
                        <p>
                            Program Studi
                        </p>
                    </a>
                </li> --}}

                {{-- <li class="nav-item has-treeview">
                    <a href="{{ url('page-form') }}" class="nav-link {{ checkRouteActive('page-form') }}">
                        <i class="nav-icon fa fa-list"></i>
                        <p>
                            Form Bagaian
                        </p>
                    </a>
                </li> --}}

                <li class="nav-item has-treeview">
                    <a href="{{ url('page-form') }}" class="nav-link {{ checkRouteActive('page-form') }}">
                        <i class="nav-icon fa fa-industry"></i>
                        <p>
                            Tracer Study
                        </p>
                    </a>
                </li>

                <li class="nav-item has-treeview">
                    <a href="{{ url('page-survei') }}" class="nav-link {{ checkRouteActive('survei') }}">
                        <i class="nav-icon fa fa-file"></i>
                        <p>
                            Survei
                        </p>
                    </a>
                </li>

                <li class="nav-item has-treeview">
                    <a href="{{ url('page-berita') }}" class="nav-link {{ checkRouteActive('page-berita') }}">
                        <i class="nav-icon fa fa-newspaper"></i>
                        <p>
                            Berita
                        </p>
                    </a>

                </li>
                <li class="nav-item has-treeview">
                    <a href="{{ url('page-slide') }}" class="nav-link {{ checkRouteActive('page-slide') }}">
                        <i class="nav-icon fa fa-home"></i>
                        <p>
                            Home Base
                        </p>
                    </a>

                </li>

                <li class="nav-item has-treeview">
                    <a onclick="return confirm('Apakah Anda Yakin Ingin Keluar?')" href="{{ url('logout') }}"
                        class="nav-link {{ checkRouteActive('logout') }}">
                        <i class="nav-icon fa fa-arrow-circle-left"></i>
                        <p>
                            Loguot
                        </p>
                    </a>

                </li>
            </ul>
        </nav>
    </div>
</aside>
