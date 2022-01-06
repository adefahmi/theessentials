@section('kontak')
    <div data-aos="zoom-in" id="kontak" class="section">
      <div class="container">
        <div class="pb-40 title">
          <p class="f-header text-center">Berminat ? Hubungi Kami</p>
        </div>
        <div class="content">
          <div class="row">
            <div class="col-lg-4">
              <div class="mb-20x contact">
                <div class="icon-contact">
                  {{-- <img class="svg-contact" src="{{asset('libs/icon/kamar_mandi.svg')}}"/> --}}
                  <i class="fa fa-phone fa-3x" aria-hidden="true"></i>
                </div>
                <div class="content-contact">
                  <div data-contact>
                    <p class="f-content bold">No. Telepon</p>
                    <span>+6221 739 2300<br></span>
                    <span><a href="https://wa.me/62818331515" style="text-decoration: none; color:black !important;">+62818 331 515 (Erry Situmorang)</a></span>
                  </div>
                </div>
              </div>

              <div class="mb-20x contact">
                <div class="icon-contact">
                  {{-- <img class="svg-contact" src="{{asset('libs/icon/kamar_mandi.svg')}}"/> --}}
                 <i class="fa fa-envelope-o fa-3x" aria-hidden="true"></i>
                </div>
                <div class="content-contact">
                  <div data-contact>
                    <p class="f-content bold">Email</p>
                    <span>essential.daru@gmail.com</span>
                  </div>
                </div>
              </div>

              <div class="mb-20x contact">
                <div class="icon-contact">
                  {{-- <img class="svg-contact" src="{{asset('libs/icon/kamar_mandi.svg')}}"/> --}}
                 <i class="fa fa-instagram fa-3x" aria-hidden="true"></i>
                </div>
                <div class="content-contact">
                  <div data-contact>
                    <p class="f-content bold">Instagram</p>
                    <span class="link-href"><a target="_blank" href="#">@the.essential.daru</a></span>
                  </div>
                </div>
              </div>

              <div class="d-none d-lg-block">
                <h3 class="">Didukung Oleh</h3>
                <div class="row d-flex">
                  <div class="col-4">
                     <a href='https://www.ethis.co.id/' target='_blank'><img class="img-footer img-fluid" src="{{asset('libs/image/logo_ethis.png')}}"/></a>
                  </div>
                  <div class="col-4 align-self-center">
                    <img class="img-footer img-fluid" src="{{asset('libs/image/logo_dana.png')}}"/>
                  </div>
                    <div class="col-4">
                        <img class="img-fluid" src="{{asset('libs/image/logo_bsi.png')}}"/>
                    </div>
                </div>
                  <div class="row">

                  </div>
              </div>
            </div>
            <div class="col-lg-8">
              <iframe class="frame" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d126902.84144698469!2d106.74512565321926!3d-6.3012868796831185!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f1405cefedbf%3A0x60e55c624eaf79d2!2sWalking%20Drums!5e0!3m2!1sid!2sid!4v1597042317359!5m2!1sid!2sid" width="100%" height="350" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="d-block d-lg-none">
      <div class="container section" data-bg="footer">
        <div class="title">
          <p class="f-header text-center text-white">Didukung Oleh</p>
        </div>
        <div class="">
          <div class="row d-flex">
            <div class="text-center col-6">
              <a href='https://www.ethis.co.id/' target='_blank'><img class="img-footer img-final img-fluid" src="{{asset('libs/image/logo_ethis.png')}}"/></a>
            </div>
            <div class="text-center col-6 align-self-center">
              <img class="img-footer img-final bni img-fluid" src="{{asset('libs/image/logo_bni.png')}}"/>
            </div>
          </div>
        </div>
      </div>
    </div>

@endsection
