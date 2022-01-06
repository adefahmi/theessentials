@section('carousel')
<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselMain" data-slide-to="0" class="active"></li>
    <li data-target="#carouselMain" data-slide-to="1"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item main active" style="background-image: url({{asset('libs/carousel/slide3.jpg')}})">
      <div class="carousel-caption">

      </div>
    </div>

      <div class="carousel-item main" style="background-image: url({{asset('libs/carousel/slide4.jpg')}})">
        <div class="carousel-caption">

        </div>
      </div>

  </div>

  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
@stop
