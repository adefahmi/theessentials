<!doctype html>
<html lang="en">
  <head>
    <meta property="og:url"           content="https://theessential.co.id/" />
    <meta property="og:type"          content="website" />
    <meta property="og:title"         content="The Essential Daru" />
    <meta property="og:description"   content="Hunian Modern Terintegrasi KRL" />
    <meta property="og:image"         content="https://theessential.co.id/libs/image/meta.jpg" />

    <title>The Essentials @yield('title','')</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="{{asset('libs/image/logo_daru.png')}}"/>
    <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'>
    <!-- Bootstrap CSS -->
    <link rel="icon" href="{{asset('libs/nprogress/nprogress.css')}}"/>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">






    <link rel="stylesheet" href="{{asset('libs/custom/css/main.css')}}">
    <link rel="stylesheet" href="{{asset('libs/custom/css/meta.css')}}">
      <link rel="stylesheet" href="{{asset('libs/custom/css/video.css')}}">
      <link rel="stylesheet" href="{{asset('libs/custom/css/whatsapp.css')}}">
  </head>
  <body class="disable-scroll" id="home">

    <div id="preloader"></div>

    @yield("menu")

    @yield("carousel")

    @yield("header")

    @yield('zhouse')

    @yield('denah3d-asri')

    @yield('denah3d-nyaman')

    @yield("feature")

    @yield('banner-kontak')

    @yield('detail-tentang')

    @yield('danu')

    @yield("video")

    @yield("type")

    @yield("spec")

    @yield("gallery")

    @yield("akses")

    @yield("denah")

    @yield("tentang")

    @yield('button-download')

    @yield("kontak")

    @yield("kontak2")

    @yield('type-asri')

    @yield('type-nyaman')

    @yield('type-z-house')

    @yield('daru-type')

    @yield("footer2")

    @yield('whatsapp')

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    {{-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script> --}}

    <script src="{{asset('libs/plugin/jquery/jquery.js')}}"></script>
    <script src="{{asset('libs/nprogress/nprogress.js')}}"></script>
    <script src="{{asset('libs/nprogress/loader.js')}}"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="{{asset('libs/plugin/carousel/carousel.js')}}"></script>

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    <script src="{{asset('libs/custom/js/main.js')}}"></script>

  </body>
</html>
