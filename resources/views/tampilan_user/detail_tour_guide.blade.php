<!DOCTYPE html>
<html lang="en">
<head>
    @include('tampilan_local.template.header')
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link href="local/css/aos.css" rel="stylesheet">
    <link href="local/css/bootstrap.min.css" rel="stylesheet">
    <link href="local/styles/main.css" rel="stylesheet">
</head>
<body>
    @include('tampilan_local.template.navbar')
    
    <div class="profile-page">
        <div class="wrapper">
          <div class="page-header page-header-small" filter-color="green">
            <div class="page-header-image" data-parallax="true" style="background-image: url({{url('/regent_user/img/banner/background3.png')}});"></div>
            <div class="container">
              <div class="content-center">
                <div class="cc-profile-image"><a href="#"><img src="{{url('local/images/anthony.jpg')}}" alt="Image"/></a></div>
                <div class="h2 title">NAMA</div>
                <p class="text-white">EXPLORE <a href="#" class="text-white">Domisili</a> Bersama NAMA</p>
                <a class="btn btn-primary smooth-scroll mr-2" href="#">HUBUNGI SAYA</a>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="section">
        <div class="container mb-5">
          <div class="card" data-aos="fade-up" data-aos-offset="10">
            <div class="row">
              <div class="col-lg-12 col-md-12">
                <div class="card-body">
                    <div class="h4 mt-0 title">KELILINGI KOTA BERSAMA NAMA</div>
                        <div class="row">
                            <div class="col-sm-4">
                                <p>Saya Akan Menunjukkan</p>
                            </div>
                            <div class="col-sm-8">
                                Deskripsi saya akan menujukkan
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-4">
                                <p>Aktivitas Touring</p>
                            </div>
                            <div class="col-sm-8">
                                Aktivitas Touring
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-4">
                                <p>BAHASA</p>
                            </div>
                            <div class="col-sm-8">
                                BAHASA
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-4">
                                <p>Tentang Saya</p>
                            </div>
                            <div class="col-sm-8">
                                Deskripsi Tentang Saya
                            </div>
                        </div>
                    </div>    
                </div>
            </div>
          </div>
        </div>
      </div>
       
    @include('tampilan_local.template.footer')
    @include('tampilan_local.template.js')
    <script src="{{ url('local/js/core/jquery.3.2.1.min.js')}}"></script>
    <script src="{{ url('local/js/core/popper.min.js')}}"></script>
    <script src="{{ url('local/js/core/bootstrap.min.js')}}"></script>
    <script src="{{ url('local/js/now-ui-kit.js?v=1.1.0')}}"></script>
    <script src="{{ url('local/js/aos.js')}}"></script>
    <script src="{{ url('local/scripts/main.js')}}"></script>
</body>
</html>