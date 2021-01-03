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
                                    <img src="{{url('regent_user/img/Rlogo.png')}}" alt="" width="150px" height="30px">
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