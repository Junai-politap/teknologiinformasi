@section('profil')
<div class="app-user">
    <div class="media">
        <div class="media-left">
            <div class="avatar avatar-md avatar-circle">
                <a href="javascript:void(0)"><img class="img-responsive" src="{{ url("public/$mahasiswa->foto") }}" onerror="this.src='https://bootdey.com/img/Content/avatar/avatar7.png';"/></a>
            </div>
        </div>
        <div class="media-body">
            <div class="foldable">
                <h5><a href="javascript:void(0)" class="username">{{ $mahasiswa->nama }}</a></h5>
                <ul>
                    <li class="dropdown">
                        <a href="javascript:void(0)" class="dropdown-toggle usertitle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <small>Mahasiswa</small>
                            <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu animated flipInY">
                            <li>
                                <a class="text-color" href="{{ url('profil') }}">
                                    <span class="m-r-xs"><i class="fa fa-user"></i></span>
                                    <span>Profile</span>
                                </a>
                            </li>
                            
                            <li role="separator" class="divider"></li>
                            <li>
                                <a class="text-color" onclick="return confirm('Apakah Anda Yakin Ingin Keluar?')" href="{{ url('logout') }}">
                                    <span class="m-r-xs"><i class="fa fa-power-off"></i></span>
                                    <span>Logout</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
@endsection