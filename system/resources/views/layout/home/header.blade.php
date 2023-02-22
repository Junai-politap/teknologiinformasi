<section class="top-bar-area">
    <div class="container">
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12">
                <div class="top-bar clearfix">
                    <div class="top-left-content clearfix float-left">
                        <p><span class="fa fa-graduation-cap fa-lg"></span>Selamat Datang di Prodi Teknologi
                            Informasi

                        </p>
                    </div>
                    <div class="top-right-content clearfix float-right">
                        <div class="top-social-box">
                            <ul class="social-links">
                                <li><a href="https://www.youtube.com/@teknikinformatikapolitap9268/" target="_blank"
                                        title="Youtube Prodi"><span class="fa fa-youtube fa-lg" aria-hidden="true"></span></a></li>
                                <li><a href="https://www.instagram.com/informatika.politap/" target="_blank"
                                        title="Instagram Prodi"><span class="fa fa-instagram fa-lg" aria-hidden="true"></span></a>
                                </li>

                            </ul>
                        </div>

                        <div class="language-switcher float-right">
                            <div id="jam" style="color: white; font-size: 150%">

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<header class="header-area stricky">
    <div class="container">
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12">
                <div class="inner-content clearfix">
                    <div class="header-left float-left" style="width: 17%;">
                        <div class="logo">
                            <a href="{{ url('/') }}">
                                <img src="{{ url('public/home') }}/bg.png">
                            </a>
                        </div>
                    </div>
                    <div class="header-middle clearfix float-left">
                        <nav class="main-menu clearfix float-left">
                            <div class="navbar-header clearfix">
                                <button type="button" class="navbar-toggle" data-toggle="collapse"
                                    data-target=".navbar-collapse">
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                            </div>
                            <div class="navbar-collapse collapse clearfix">
                                <ul class="navigation clearfix">
                                    <li class="current" style="color: black"><a href="{{ url('/') }}">Dashboard</a>
                                    </li>

                                    <li class="dropdown"><a href="#">Profil</a>
                                        <ul>
                                            <li><a href="{{ url('profil-pimpinan') }}"> Pimpinan</a></li>
                                            <li><a href="{{ url('profil-dosen') }}"> Dosen</a></li>
                                            <li><a href="{{ url('profil-staff') }}"> Teknisi / Administrasi</a></li>
                                            <li><a href="{{ url('profil-lulusan') }}"> Profil Lulusan</a></li>
                                            <li><a href="{{ url('visi-misi') }}"> Visi & Misi</a></li>

                                        </ul>
                                    </li>
                                    <li class="dropdown"><a href="#">Akademik</a>
                                        <ul>
                                            <li><a href="{{ url('kurikulum') }}"> Kurikulum</a></li>
                                            <li><a href="{{ url('akreditasi') }}"> Akreditasi</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown"><a href="#">Pelayanan</a>
                                        <ul>
                                            @yield('menu')

                                            <li><a href="{{ url('pelayanan/survei') }}"> Survei Kepuasan</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown"><a href="#">Pedoman</a>
                                        <ul>
                                            @yield('pedoman')
                                        </ul>
                                    </li>
                                    <li class="dropdown"><a href="#">Fasilitas</a>
                                        <ul>
                                            @yield('fasilitas')
                                        </ul>
                                    </li>
                                    <li class="dropdown"><a href="#">Project</a>
                                        <ul>
                                            <li><a href="{{ url('project/pbl') }}"> PBL</a></li>
                                            <li><a href="{{ url('project/tugas-akhir') }}"> Tugas Akhir</a></li>
                                            <li><a href="{{ url('project/penelitian') }}"> Penelitian Dosen</a></li>
                                            <li><a href="{{ url('project/pengabdian') }}"> Pengabdian Dosen</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="{{ url('berita') }}">Berita</a></li>

                                </ul>
                            </div>
                        </nav>
                    </div>

                </div>
            </div>
        </div>
    </div>
</header>

<script type="text/javascript">
    window.onload = function() {
        jam();
    }

    function jam() {
        var e = document.getElementById('jam'),
            d = new Date(),
            h, m, s;
        h = d.getHours();
        m = set(d.getMinutes());
        s = set(d.getSeconds());

        e.innerHTML = h + ':' + m + ':' + s;

        setTimeout('jam()', 1000);
    }

    function set(e) {
        e = e < 10 ? '0' + e : e;
        return e;
    }
</script>
