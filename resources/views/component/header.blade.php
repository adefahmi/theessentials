@section('header')
 {{--<div class="position-relative overflow-hidden text-center bg-light" style="background-image: url({{url($data['header_background'])}}); padding-top: 3rem;margin-top: 3rem;height: 40vh;">
    <div class="col-md-5 p-lg-5 mx-auto my-5">
        <h1 class="display-4 font-weight-normal">{{$data['header_title']}}</h1>
     --}}{{-- <p class="lead font-weight-normal">And an even wittier subheading to boot. Jumpstart your marketing efforts with this example based on Apple's marketing pages.</p>
        <a class="btn btn-outline-secondary" href="#">Coming soon</a>--}}{{--
        </div>
<div class="product-device box-shadow d-none d-md-block"></div>
        <div class="product-device product-device-2 box-shadow d-none d-md-block"></div>
    </div>--}}
 {{--<div class="jumbotron jumbotron-fluid pt-6" style="background-image:
        url({{url($data['header_background'])}});
     background-size: cover;">
     <div class="container">
         <h1 class="display-4"></h1>
         <p class="lead"></p>
     </div>
 </div>
    --}}

 <div class="row container-fluid">
     <div class="col">
         <img src="{{url($data['header_background'])}}" alt="" class="img-fluid">
     </div>
 </div>


    @stop
