<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registrasi</title>

    <link href="{{ url('public/home') }}/img/ti.png" rel="icon">
    <!-- Font Icon -->
    <link rel="stylesheet"
        href="{{ url('public/registrasi') }}/fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="{{ url('public/registrasi') }}/css/style.css">


    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
</head>

<body>

    <div class="main">


        <section class="sign-in">
            <div class="container">
                <div class="signin-content">
                    <div class="signin-image"
                        style="object-fit: cover; position: static; width: 100%; height: 100%; border-radius: 10px;">
                        <figure><img src="{{ url('public/registrasi') }}/img/bg.png">
                        </figure><br>
                        <h1 style="color: black">Selamat Datang!</h1>
                        <p style="color: black">Jika Anda Sudah Memiliki Akun Silahkan Login</p>
                        <a href="{{ url('login') }}" class="btn btn-primary"><i class="zmdi zmdi-sign-in"></i> Login
                        </a>
                    </div>

                    <div class="signin-form">
                        <h2 class="form-title">Registrasi Si Karir</h2>
                        <form action="{{ url('storeregister') }}" method="POST" role="form"
                            enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="your_name"><i class="zmdi zmdi-balance material-icons-name"></i></label>
                                <input type="text" name="nama_perusahaan"" placeholder=" Nama Perusahaan" />
                            </div>

                            <div class="form-group">
                                <label for="your_name"><i class="zmdi zmdi-pin-drop material-icons-name"></i></label>
                                <input type="text" name="alamat"" placeholder=" Alamat Perusahaan" />
                            </div>

                            <div class="form-group">
                                <label for="your_name"><i class="zmdi zmdi-email material-icons-name"></i></label>
                                <input type="text" name="email"" placeholder=" Email Perusahaan" />
                            </div>

                            <div class="form-group">
                                <label for="your_pass"><i class="zmdi zmdi-lock"></i></label>
                                <input type="password" name="password" placeholder="Password" />
                            </div>

                            <div class="form-group">
                                <label for="your_pass"><i class="zmdi zmdi-lock"></i></label>
                                <input type="password" name="confirm_pass" placeholder="Confirmasi Password" />
                            </div>

                            <div class="form-group">
                                <label for="your_name"><i
                                        class="zmdi zmdi-accounts-add material-icons-name"></i></label>
                                <input type="text" name="nama_pemegang_akses"" placeholder=" Nama Pemegang Akses" />
                            </div>

                            <div class="form-group">
                                <label for="your_name"><i class="zmdi zmdi-phone material-icons-name"></i></label>
                                <input type="text" name="no_telp"" placeholder=" Nomor Handphone" />
                            </div>


                            <div class="form-group" style="margin-top: -5px;">
                                <div class="custom-file mt-4">
                                    <input type="file" name="poto" accept=".jpg, .png, .jpeg" class="custom-file-input">
                                    <label class="custom-file-label" for="inputGroupFile03">Upload Logo
                                        Perusahaan</label>
                                </div>
                            </div>
                            <hr style="margin-top: -8%;">
                            <div class="form-group" style="margin-top: -10px;">
                                <div class="custom-file mt-4">
                                    <input type="file" name="mou" accept=".jpg, .png, .jpeg" class="custom-file-input">
                                    <label class="custom-file-label">Upload Bukti MoU</label>
                                </div>
                            </div>

                            <div class="form-group form-button">
                                <button class="btn btn-success"> Simpan <span class="zmdi zmdi-upload"></span> </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>

    </div>

    <!-- JS -->
    <script src="{{ url('public/registrasi') }}/vendor/jquery/jquery.min.js"></script>
    <script src="{{ url('public/registrasi') }}/js/main.js"></script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>
