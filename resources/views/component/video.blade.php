@section('video')
    <div id="video" class="section">
      <div class="container">
        <div class="row">
          <div data-aos="zoom-in" class="col-lg-6">
            <div class="title">
              <p class="bold f-header">Welcome to<br>Milenial Housing</p>
            </div>
            <div class="pb-40 f-content content">
              Hunian yang mengusung konsep Transit Oriented Development. Kami dari PT ESENSI PRIMA CIPTA menawarkan tempat tinggal yang Nyaman & Modern, dengan pilihan mode akses transportasi yang beragam. Anda juga dapat memiliki hunian dengan harga terjangkau didukung pilihan cara bayar yang fleksibel.
            </div>
          </div>
          <div data-aos="zoom-in" class="col-lg-6">
              <video width="560" height="315" controls>
                  <source src="{{url('libs/video/1.mov')}}" type="video/mp4">
                  Your browser does not support the video tag.
              </video>
          </div>
        </div>
      </div>
    </div>
@endsection
