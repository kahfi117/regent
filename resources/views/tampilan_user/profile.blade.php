<!DOCTYPE html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>REGENT</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- <link rel="manifest" href="site.webmanifest"> -->
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.png">
    <!-- Place favicon.ico in the root directory -->

    <!-- CSS here -->
    <link rel="stylesheet" href="regent_user/css/bootstrap2.min.css">
    <link rel="stylesheet" href="regent_user/css/owl.carousel2.min.css">
    <link rel="stylesheet" href="regent_user/css/magnific-popup2.css">
    <link rel="stylesheet" href="regent_user/css/font-awesome2.min.css">
    <link rel="stylesheet" href="regent_user/css/themify-icons2.css">
    <link rel="stylesheet" href="regent_user/css/nice-select2.css">
    <link rel="stylesheet" href="regent_user/css/flaticon2.css">
    <link rel="stylesheet" href="regent_user/css/gijgo2.css">
    <link rel="stylesheet" href="regent_user/css/animate2.css">
    <link rel="stylesheet" href="regent_user/css/slick2.css">
    <link rel="stylesheet" href="regent_user/css/slicknav2.css">
    <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/themes/smoothness/jquery-ui.css">

    <link rel="stylesheet" href="regent_user/css/style2.css">
    <!-- <link rel="stylesheet" href="css/responsive.css"> -->
</head>
<body>
    <!-- header-start -->
    <header>
        <div class="header-area ">
            <div id="sticky-header" class="main-header-area">
                <div class="container-fluid">
                    <div class="header_bottom_border">
                        <div class="row align-items-center">
                            <div class="col-xl-1 col-lg-2">
                                <div class="logo">
                                    <a href="{{route('user')}}">
                                        <img src="{{url('regent_user/img/Rlogo.png')}}" alt="" style="max-width: 100%">
                                    </a>
                                </div>
                            </div>
                            <div class="col-xl-11 col-lg-10">
                                <div class="main-menu  d-none d-lg-block float-sm-right">
                                    <nav>
                                        <ul id="navigation">
                                        <li><a class="active" href="{{ route('user')}}">HOME</a></li>
                                        <li><a href="{{ route('tourGuide')}}">TOUR GUIDE</a></li>
                                        <li><a href="{{ route('destinasi')}}">DESTINASI</a></li>
                                        <li><a href="{{ route('profile')}}">AKUN</a></li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="mobile_menu d-block d-lg-none"></div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </header>
    <!-- header-end -->
    {{-- @yield('slider') --}}
    @yield('profile')
    @yield('content')

    
    @include('tampilan_local.template.footer')

<!-- JS here -->
    <script src="{{ url('regent_user/js/vendor/modernizr-3.5.0.min.js')}}"></script>
    <script src="{{ url('regent_user/js/vendor/jquery-1.12.4.min.js')}}"></script>
    <script src="{{ url('regent_user/js/popper.min.js')}}"></script>
    <script src="{{ url('regent_user/js/bootstrap.min.js')}}"></script>
    <script src="{{ url('regent_user/js/owl.carousel.min.js')}}"></script>
    <script src="{{ url('regent_user/js/isotope.pkgd.min.js')}}"></script>
    <script src="{{ url('regent_user/js/ajax-form.js')}}"></script>
    <script src="{{ url('regent_user/js/waypoints.min.js')}}"></script>
    <script src="{{ url('regent_user/js/jquery.counterup.min.js')}}"></script>
    <script src="{{ url('regent_user/js/imagesloaded.pkgd.min.js')}}"></script>
    <script src="{{ url('regent_user/js/scrollIt.js')}}"></script>
    <script src="{{ url('regent_user/js/jquery.scrollUp.min.js')}}"></script>
    <script src="{{ url('regent_user/js/wow.min.js')}}"></script>
    <script src="{{ url('regent_user/js/nice-select.min.js')}}"></script>
    <script src="{{ url('regent_user/js/jquery.slicknav.min.js')}}"></script>
    <script src="{{ url('regent_user/js/jquery.magnific-popup.min.js')}}"></script>
    <script src="{{ url('regent_user/js/plugins.js')}}"></script>
    <script src="{{ url('regent_user/js/gijgo.min.js')}}"></script>
    
    <!--contact js-->
    <script src="{{ url('regent_user/js/contact.js')}}"></script>
    <script src="{{ url('regent_user/js/jquery.ajaxchimp.min.js')}}"></script>
    <script src="{{ url('regent_user/js/jquery.form.js')}}"></script>
    <script src="{{ url('regent_user/js/jquery.validate.min.js')}}"></script>
    <script src="{{ url('regent_user/js/mail-script.js')}}"></script>
    
    <script src="{{ url('regent_user/js/main.js')}}"></script>
    <script>
        $('#datepicker').datepicker({
            iconsLibrary: 'fontawesome',
            icons: {
            rightIcon: '<span class="fa fa-caret-down"></span>'
          }
        });
        $('#datepicker2').datepicker({
            iconsLibrary: 'fontawesome',
            icons: {
            rightIcon: '<span class="fa fa-caret-down"></span>'
          }
    
        });
    </script>
<!-- End JS here -->


</body>
</html>