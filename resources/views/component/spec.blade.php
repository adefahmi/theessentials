@section('spec')
    <div data-aos="fade-up" id="spec" class="section" data-bg="grey">
      <div class="container">
        <div class="pb-40 title">
          <p class="text-center f-header">Spesifikasi</p>
        </div>
        <div class="content">
          {{-- <div class="row">
            <div class="col-lg-6">
              <div class="mb-20x spesifikasi">
                <div class="spec-title">
                  <p class="f-content bold">Spesifikasi 1</p>
                </div>
                <div class="spec-content">
                  <span class="justify-text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</span>
                </div>
              </div>

              <div class="mb-20x spesifikasi">
                <div class="spec-title">
                  <p class="f-content bold">Spesifikasi 2</p>
                </div>
                <div class="spec-content">
                  <span class="justify-text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</span>
                </div>
              </div>

              <div class="mb-20x spesifikasi">
                <div class="spec-title">
                  <p class="f-content bold">Spesifikasi 3</p>
                </div>
                <div class="spec-content">
                  <span class="justify-text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</span>
                </div>
              </div>

              <div class="mb-20x spesifikasi">
                <div class="spec-title">
                  <p class="f-content bold">Spesifikasi 4</p>
                </div>
                <div class="spec-content">
                  <span class="justify-text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</span>
                </div>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="mb-20x spesifikasi">
                <div class="spec-title">
                  <p class="f-content bold">Spesifikasi 5</p>
                </div>
                <div class="spec-content">
                  <span class="justify-text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</span>
                </div>
              </div>

              <div class="mb-20x spesifikasi">
                <div class="spec-title">
                  <p class="f-content bold">Spesifikasi 6</p>
                </div>
                <div class="spec-content">
                  <span class="justify-text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</span>
                </div>
              </div>

              <div class="spesifikasi">
                <div class="spec-title">
                  <p class="f-content bold">Spesifikasi 7</p>
                </div>
                <div class="spec-content">
                  <span class="justify-text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</span>
                </div>
              </div>
            </div>
          </div> --}}

          <div class="row">
            <div class="col-6 col-lg-4">
              <div class="text-center spec-icon">
                <img class="img-spec" src="{{asset('libs/icon/lantai.svg')}}"/>
              </div>
              <div class="spec-name text-center">
                <h4 class="bold">Lantai</h4>
                <span><span class="bold b-color">*</span>Keramik</span>
              </div>
            </div>
            <div class="col-6 col-lg-4">
              <div class="text-center spec-icon">
                <img class="img-spec" src="{{asset('libs/icon/pintu.svg')}}"/>
              </div>
              <div class="spec-name text-center">
                <h4 class="bold">Pintu</h4>
                <span><span class="bold b-color">*</span>Kayu/Kayu Lapis<br></span>
                <span><span class="bold b-color">*</span>Aluminium</span>
              </div>
            </div>

            <div class="col-6 col-lg-4 pb-40 ">
              <div class="text-center spec-icon">
                <img class="img-spec" src="{{asset('libs/icon/icon_kamar_mandi.svg')}}"/>
              </div>
              <div class="spec-name text-center">
                <h4 class="bold">Kamar Mandi</h4>
                <span><span class="bold b-color">*</span>Keramik</span>
              </div>
            </div>

            

            <div class="col-6 col-lg-4">
              <div class="text-center spec-icon">
                <img class="img-spec" src="{{asset('libs/icon/dinding.svg')}}"/>
              </div>
              <div class="spec-name text-center">
                <h4 class="bold">Dinding</h4>
                <span><span class="bold b-color">*</span>Dinding Bata / Hebel<br></span>
                <span><span class="bold b-color">*</span>Cat</span>
              </div>
            </div>

            <div class="col-6 col-lg-4">
              <div class="text-center spec-icon">
                <img class="img-spec" src="{{asset('libs/icon/jendela.svg')}}"/>
              </div>
              <div class="spec-name text-center">
                <h4 class="bold">Jendela</h4>
                <span><span class="bold b-color">*</span>Kayu dan Kayu Lapis</span>
              </div>
            </div>

            <div class="col-6 col-lg-4">
              <div class="text-center spec-icon">
                <img class="img-spec" src="{{asset('libs/icon/listrik.svg')}}"/>
              </div>
              <div class="spec-name text-center">
                <h4 class="bold">Instalasi Listrik dan Air</h4>
                <span><span class="bold b-color">*</span>PLN 900 Watt<br></span>
                <span><span class="bold b-color">*</span>Instalasi Air Komunal</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
@endsection