@section('danu')

    <div class="row pt-3 mt-3" >
        <div class="col">
          {{--  <div class="container">
                <div class="row pb-6">
                    <div class="col" style="text-align: center">
                        <h1>Overall</h1>
                    </div>
                </div>
                <div class="row pt-3" style="height: 10vh">
                    <div class="col-3" >
                        <img src="{{asset('libs/icon/location.png')}}" alt="" height="30%">
                    </div>

                    <div class="col-3">
                        <img src="{{asset('libs/icon/luas-lahan.png')}}" alt="" height="30%">
                    </div>

                    <div class="col-3">
                        <img src="{{asset('libs/icon/unit.png')}}" alt="" height="30%" >
                    </div>

                    <div class="col-3">
                        <img src="{{asset('libs/icon/fasilitas.png')}}" alt="" height="30%">
                    </div>

                </div>
                <div class="row pt-3">
                    <div class="col-3">
                        <h3>Location</h3>
                    </div>

                    <div class="col-3">
                        <h3>Luas Lahan</h3>
                    </div>

                    <div class="col-3">
                        <h3>Unit</h3>
                    </div>

                    <div class="col-3">
                        <h3>Facilities</h3>
                    </div>

                </div>
                <div class="row pt-6">
                    <div class="col-3">
                        <p>
                            Daru, Tangerang 50 m from daru Station
                        </p>
                    </div>

                    <div class="col-3">
                        <p>
                            10 HA
                        </p>
                    </div>

                    <div class="col-3">
                        <div class="row">
                            <div class="col"><p style="font-size: 1.2rem">890 Rumah & 7 ruko</p></div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <p>Tipe nyaman / asri (72/32) - 150 Unit</p>
                                <p>Tipe Nyaman / asri (72/28 - 340 Unit</p>
                                <p>Tipe 65/30 - 400 Unit</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-3">
                        <p>Masjid, Lapangan Olahraga, Taman Bermain, Klinik</p>
                    </div>

                </div>
            </div>--}}
            <div class="container-fluid">
                <div class="row mt-4 mb-4">
                    <div class="col" style="text-align: center">
                        <h1>Overall</h1>
                    </div>
                </div>
                <div class="row mt-4 mb-4">
                    <div class="col" style="text-align: center;">
                        <img src="{{asset('libs/image/overall2.jpg')}}" alt="" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row" style="background-color: #eff2f7">
        <div class="col">
            <div class="container-fluid">
                <div class="row mt-4 mb-4">
                    <div class="col" style="text-align: center">
                        <h1>Location</h1>
                    </div>
                </div>
                <div class="row mt-4 mb-4">
                    <div class="col" style="text-align: center;">
                        <img src="{{asset('libs/image/legend.jpg')}}" alt="" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row" >
        <div class="col">
            <div class="container-fluid">
                <div class="row mt-4 mb-4">
                    <div class="col" style="text-align: center">
                        <h1>Akses</h1>
                    </div>
                </div>
                <div class="row mt-4 mb-4">
                    <div class="col" style="text-align: center;">
                        <img src="{{asset('libs/image/akses2.jpg')}}" alt="" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row" style="background-color: #eff2f7">
        <div class="col">
            <div class="container-fluid">
                <div class="row mt-4 mb-4">
                    <div class="col" style="text-align: center">
                        <h1>Legend</h1>
                    </div>
                </div>
                <div class="row mt-4 mb-4">
                    <div class="col" style="text-align: center;">
                        <img src="{{asset('libs/image/legend2.jpg')}}" alt="" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <div class="container-fluid">
                <div class="row mt-4 mb-4">
                    <div class="col" style="text-align: center">
                        <h1>Site Plan</h1>
                    </div>
                </div>
                <div class="row mt-4 mb-4 pb-6">
                    <div class="col" style="text-align: center;">
                        <img src="{{asset('libs/image/site-plan3.jpg')}}" alt="" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row pt-4 mt-4 pb-4 mb-4">
        <div class="col">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4">
                        <a href="{{url('/daru/asri')}}"><img src="{{url('libs/image/type-asri.jpg')}}" alt="" class="img-fluid shadowfied"></a>
                    </div>
                    <div class="col-lg-4">
                        <a href="{{url('/daru/nyaman')}}"><img src="{{url('libs/image/type-nyaman.jpg')}}" alt="" class="img-fluid shadowfied"></a>
                    </div>
                    <div class="col-lg-4">
                        <a href="{{url('/daru/zhouse')}}"><img src="{{url('libs/image/type-zhouse.jpg')}}" alt="" class="img-fluid shadowfied"></a>
                    </div>
                </div>
            </div>
        </div>

    </div>
@stop
