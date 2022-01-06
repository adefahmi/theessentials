@section('type-asri')
    <div id="type" class="section">
        <div class="container">
            <div data-aos="zoom-in" class="pb-40 title">
                <p class="text-center f-header"></p>
            </div>
            <div class="content">

                <div class="row">

                    <div data-aos="zoom-in" class="pb-40 col-lg-6">
                        <div class="text-center f-header title mb-20x">
                            Tipe Asri
                        </div>
                        <div class="pb-40 type-content content">
                            <p class="">
                                Desain yang apik dan compact, memastikan semua ruangan memiliki sirkulasi cahaya & udara yang cukup
                            </p>
                            <div class="table-content">
                                <table class="table type-table">
                                    <thead>

                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td class="limi-length">Spesifikasi</td>
                                    </tr>
                                    <tr>
                                        <td>Luas Tanah</td>
                                        <td>:</td>
                                        <td>72 m<sup>2</sup></td>
                                    </tr>
                                    <tr>
                                        <td>Luas Bangunan</td>
                                        <td>:</td>
                                        <td>28m<sup>2</sup>&nbsp dan &nbsp32m<sup>2</sup></td>
                                    </tr>
                                    </tbody>
                                </table>

                                <div class="spec-type">
                                    <div class="row">
                                        <div class="col-4">
                                            <div class="row">
                                                <div class="text-center col-lg-3">
                                                    <img height="40" class="" src="{{asset('libs/icon/kamar_mandi.svg')}}"/>
                                                </div>
                                                <div class="text-center col-lg-9 justify-content-center d-flex align-items-center">
                                                    1 Kamar Mandi
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-4">
                                            <div class="row">
                                                <div class="text-center col-lg-3">
                                                    <img height="40" class="" src="{{asset('libs/icon/kamar_tidur.svg')}}"/>
                                                </div>
                                                <div class="text-center col-lg-9 justify-content-center d-flex align-items-center">
                                                    2 Kamar Tidur
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-4">
                                            <div class="row">
                                                <div class="text-center col-lg-3">
                                                    <img height="40" class="" src="{{asset('libs/icon/tempat_parkir.svg')}}"/>
                                                </div>
                                                <div class="text-center col-lg-9 pr-20 justify-content-center d-flex align-items-center">
                                                    1 Garasi
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div data-aos="zoom-in" class="col-lg-6">
                        <div id="carouselIdAsri" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                                <li data-target="#carouselId" data-slide-to="0" class="active"></li>
                                <li data-target="#carouselId" data-slide-to="1"></li>
                                <li data-target="#carouselId" data-slide-to="2"></li>
                                <li data-target="#carouselId" data-slide-to="3"></li>

                            </ol>
                            <div class="carousel-inner" role="listbox">
                                <div class="carousel-item type active" style="background-image: url({{asset('libs/carousel/asri/1.jpg')}})">

                                </div>
                                <div class="carousel-item type" style="background-image: url({{asset('libs/carousel/asri/2.jpg')}})">

                                </div>
                                <div class="carousel-item type" style="background-image: url({{asset('libs/carousel/asri/3.jpg')}})">

                                </div>
                                <div class="carousel-item type" style="background-image: url({{asset('libs/carousel/asri/4.jpg')}})">

                                </div>
                            </div>
                            <a class="carousel-control-prev" href="#carouselIdAsri" role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#carouselIdAsri" role="button" data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div>
                </div>
                <br><br>
                <div class="row pt-6 mt-6">
                    <div class="col-lg-2">

                    </div>
                    <div class="col-lg-8  pt-6 mt-6" style="text-align: center">
                        <a href="https://wa.me/62818331515?/?text=Halo%20The%20Essential,%20saya%20ingin%20bertanya%20untuk%20tipe%20rumah%20asri." class="btn btn-success btn-lg active" role="button" aria-pressed="true"><i class="fa fa-whatsapp"></i> Hubungi Kami</a>
                    </div>
                    <div class="col-lg-2">

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
