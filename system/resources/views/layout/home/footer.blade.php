<footer class="footer-area">
    <div class="container">
        <div class="row">
            <div class="col-sm-4">
                <div class="single-footer-widget">
                    <div class="our-info">
                        <div class="footer-logo">
                            <img src="{{ url('public/home') }}/ti.png" alt="Awesome Logo" style="width: 40%; height:50%">
                        </div>
                        <div class="text" style="margin-top: -9%; font-size: 80%">
                            <p>
                                Prodi Teknologi Informasi Politeknik Negeri Ketapang
                            </p>
                            <p>
                                Jalan Rangge Sentap, Dalong, Sukaharja, Kec. Delta Pawan, Kabupaten Ketapang, Kalimantan Barat 78112
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-sm-2">
                <div class="single-footer-widget pdtop-50">
                    <div class="title">
                        <h3>Our Campus</h3>
                        <div class="decor thm-bg-clr"></div>
                    </div>
                    <ul class="recent-post">
                        <li style="font-size: 70%"><a href="{{ url('profil-lulusan') }}">Profil Prodi</a></li>
                        <li style="font-size: 70%"><a href="{{ url('visi-misi') }}">Visi Misi</a></li>
                        <li style="font-size: 70%"><a href="{{ url('profil-dosen') }}">Profil Dosen</a></li>
                        <li style="font-size: 70%"><a href="{{ url('tracer') }}">Tracer Study</a></li>
                    </ul>
                </div>
            </div>
            
            <div class="col-sm-3">
                <div class="single-footer-widget pdtop-50">
                    <div class="title">
                        <h3>Our Service</h3>
                        <div class="decor thm-bg-clr"></div>
                    </div>
                    <ul class="recent-post">
                        <li><a href="{{ url('project/penelitian') }}"> Penelitian Dosen</a></li>      
                        <li><a href="{{ url('project/pengabdian') }}">Pengabdian Kepada Masyarakat</a></li>
                        <li><a href="http://himip.informatikapolitap.org">Himpunan Mahasiswa</a></li>      
                        <li><a href="{{ url('login') }}">Login</a></li>   
                    </ul>    
                </div>
            </div>

            <div class="col-sm-3">
                <div class="single-footer-widget pdtop-50">
                    <div class="title">
                        <h3>Links</h3>
                        <div class="decor thm-bg-clr"></div>
                    </div>
                    <ul class="recent-post">
                        <li><a href="http://politap.ac.id" target="_blank">Politap</a></li>
                        <li><a href="http://siakad.politap.ac.id" target="_blank">Siakad Politap</a></li>
                        <li><a href="https://simadu.politap.ac.id/" target="_blank">SIMADU </a></li>
                        <li><a href="https://simadu.politap.ac.id/simasbro" target="_blank">SIMASBRO</a></li>    
                    </ul>    
                </div>
            </div>
            
            
        </div>
    </div>
</footer>   

<section class="footer-bottom-area">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="footer-bottom">
                    <div class="copyright-text pull-left">
                        Copyright &copy; {{ date('Y') >= 2019 ? date('Y') : '2019 - ' . date('Y') }} All rights
                        reserved
                    </div>
                    <div class="footer-social-links pull-right">
                        <a href="https://informatika.politap.ac.id/organisasi" target="_blank">Tim IT Teknik informatika</a>
                    </div>
                </div>    
            </div>
        </div>
    </div>    
</section> 

</div>  

<!--Scroll to top-->
<div class="scroll-to-top scroll-to-target thm-bg-clr" data-target="html"><span class="fa fa-angle-up"></span></div>
<!-- Color Palate / Color Switcher -->
<div class="color-palate">
    <div class="color-trigger">
        <i class="fa fa-gear"></i>
    </div>
    <div class="color-palate-head">
        <h6>Choose Your Color</h6>
    </div>
    <div class="various-color clearfix">
        <div class="colors-list">
            <span class="palate default-color active" data-theme-file="css/color-themes/default-theme.css"></span>
            <span class="palate teal-color" data-theme-file="css/color-themes/teal-theme.css"></span>
            <span class="palate navy-color" data-theme-file="css/color-themes/navy-theme.css"></span>
            <span class="palate yellow-color" data-theme-file="css/color-themes/yellow-theme.css"></span>
            <span class="palate blue-color" data-theme-file="css/color-themes/blue-theme.css"></span>
            <span class="palate purple-color" data-theme-file="css/color-themes/purple-theme.css"></span>
            <span class="palate olive-color" data-theme-file="css/color-themes/olive-theme.css"></span>
            <span class="palate red-color" data-theme-file="css/color-themes/red-theme.css"></span>
        </div>
    </div>

    <div class="palate-foo">
        <span>You can easily change and switch the colors.</span>
    </div>

</div> 