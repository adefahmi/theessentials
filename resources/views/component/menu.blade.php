@section("menu")
    <nav class="navbar navbar-expand-sm fixed-top navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="{{url('/')}}"><img class='' height="50" src="{{asset('libs/image/logo_daru.png')}}" alt=""/></a>
            <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId"
                    aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="collapsibleNavId">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a data-div='home' class="menu-link nav-link" href="{{url('/')}}">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a data-div='home' class="menu-link nav-link" href="{{url('/tentang-kami')}}">Tentang Kami</a>
                    </li>
                    <li class="nav-item">
                        <a data-div='home' class="menu-link nav-link" href="{{url('/daru')}}">Daru</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#/" id="dropdownId" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Tipe hunian</a>
                        <div class="dropdown-menu" aria-labelledby="dropdownId">
                            <a data-div='feature' class="menu-link dropdown-item" href="{{url('/daru/asri')}}">Tipe Asri</a>
                            <a data-div="type" class="menu-link dropdown-item" href="{{url('/daru/nyaman')}}">Tipe Nyaman</a>
                            <a data-div="zhouse" class="menu-link dropdown-item" href="{{url('/daru/zhouse')}}">Tipe Z House</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a data-div='home' class="menu-link nav-link" href="{{url('/hubungi-kami')}}">Hubungi Kami</a>
                    </li>
                    {{--

                    <li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle" href="#" id="dropdownId" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Akses</a>
                      <div class="dropdown-menu" aria-labelledby="dropdownId">
                        <a data-div="denah" class="menu-link dropdown-item" href="#/">Lokasi</a>
                        <a data-div="akses" class="menu-link dropdown-item" href="#/">Akses</a>
                      </div>
                    </li>

                    <li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle" href="#" id="dropdownId" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Hubungi Kami</a>
                      <div class="dropdown-menu" aria-labelledby="dropdownId">
                        <a data-div="tentang" class="menu-link dropdown-item" href="#/">Tentang Kami</a>
                        <a data-div="kontak" class="menu-link dropdown-item" href="#/">Hubungi Kami</a>
                      </div>
                    </li>--}}

                </ul>
            </div>
        </div>
    </nav>

@stop
