@extends('template.home')
@section('title', 'Profil Prodi - ')
@section('content')
    @include('layout.home.page-title', [
        'page_title' => 'Profil Prodi',
    ])
    @include('section.menu')
    <div class="">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 p-5">
                    <p class="section-title-underline">
                        <span class="lead ">
                            Profil Program Studi
                        </span>
                    </p>
                    <p class="text-justify" id="programmer-top">
                        Lulusan program studi Teknik Informatika Politeknik Nege ri Ketapang dibekali dengan pengetahuan
                        teoritis dan pengalaman praktek sehingga siap masuk ke dunia kerja. Lulusan dikategorikan sebagai
                        Informatic-workers yaitu profesional yang bekerja dibidang informatika atau bidang lain yang
                        berbasis teknologi informatika sebagai operator, programmer, atau analis dan designer. Profil
                        lulusan prodi Teknik Informatika adalah sebagai berikut:
                    <ol>
                        <li class="h5" id="programmer">Programmer</li>
                        <p class="text-justify" id="system-analiyst-top">Lulusan Ahli Madya Komputer mampu mengkonversikan
                            spesifikasi dan problem statement beserta prosedur suatu proyek menjadi logical flow yang detil
                            sehingga siap dicoding dalam bahasa pemrograman <br><br></p>
                        <li class="h5" id="system-analiyst">System Analyst</li>
                        <p class="text-justify" id="network-administrator-top">Lulusan ahli madya komputer mampu
                            menganalisis kebutuhan secara kritis, merancang, mengkoordinasikan, merekomendasikan dan
                            melakukan evaluasi terhadap perangkat lunak atau sistem yang sesuai dengan kebutuhan organisasi
                            bisnis atau perusahaan <br> <br></p>
                        <li class="h5" id="network-administrator">Network Administrator</li>
                        <p class="text-justify" id="technopreneur-top">Lulusan mampu melakukan perancangan arsitektur dan
                            pembangunan jaringan selain itu dapat memelihara teknologi jaringan, dan dapat mengelola
                            internet di lingkungan industri, pemerintahan, perbankkan dan pada bidang-bidang pekerjaan
                            lainnya <br><br></p>
                        <li class="h5" id="technopreneur">Technopreneur</li>
                        <p class="text-justify">Lulusan Ahli Madya Komputer mampu berinovasi dan memiliki keterampilan
                            Technopreneur dalam menghasilkan jasa dan produk di bidang Teknik Informatika. <br><br></p>
                    </ol>
                    </p>
                    <p>
                        Berdasarkan Profil Lulusan di atas maka lulusan Program Studi Teknik Informatika akan mampu bekerja
                        pada bidang, misalnya seperti :
                    <ol>
                        <li>Pengembangan Perangkat Lunak dan aplikasinya</li>
                        <li>Konsultan Industri Teknologi Informasi</li>
                        <li>Pemeliharaan Teknologi Jaringan</li>
                        <li>Menciptakan lapangan pekerjaan di bidang Teknik Informatika</li>
                    </ol>
                    </p>
                </div>
            </div>
        </div>
    </div>
@endsection
