@section('gallery')
    <div id="gallery" class="section">
      <div class="">
        <div data-aos="zoom-in" class="pb-40 title">
          <p class="text-center f-header">Gallery</p>
        </div>
        <div data-aos="fade-up" class="content">

          <div class="wrapper">

            <div class="jcarousel-wrapper">
                <div class="jcarousel">
                    <ul>
                        @for($i=8;$i<=21;$i++)

                        <li><img src="{{asset('libs/carousel/gallery/'.$i.'.jpg')}}" width="600" height="400" alt=""></li>
                        @endfor
                    </ul>
                </div>

                <a href="#" class="control-carousel jcarousel-control-prev">&lsaquo;</a>
                <a href="#" class="control-carousel jcarousel-control-next">&rsaquo;</a>

                <p class="jcarousel-pagination">

                </p>
            </div>
        </div>



        </div>
      </div>
    </div>
@endsection
