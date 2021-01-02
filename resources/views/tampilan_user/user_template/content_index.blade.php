@extends('tampilan_user.index_user')

    @section('slider')    
    <!-- slider_area_start -->
    <div class="slider_area">
        <div class="slider_active owl-carousel">
            <div class="single_slider">
                <img src="{{url('regent_user/img/banner/background1.png')}}" style="max-width: 100%">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-xl-12 col-md-12">
                            <div class="slider_text text-center">
                                <a href="#" class="boxed-btn3">Explore Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- slider_area_end -->
    @endsection
    
    
    @section('togo')    
    <!-- where_togo_area_start  -->
    <div class="where_togo_area">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-3">
                    <div class="form_area">
                        <h3>MAU KEMANA ANDA?</h3>
                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="search_wrap">
                        <form class="search_form" action="#">
                            <div class="input_field">
                                <input type="text" placeholder="Where to go?">
                            </div>
                            <div class="input_field">
                                <input id="datepicker" placeholder="Date">
                            </div>
                            <div class="input_field">
                                <select>
                                    <option data-display="Travel type">Travel type</option>
                                    <option value="1">Some option</option>
                                    <option value="2">Another option</option>
                                </select>
                            </div>
                            <div class="search_btn">
                                <button class="boxed-btn4 " type="submit" >Search</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- where_togo_area_end  -->
    @endsection
    
    @section('popular')        
    <!-- popular_destination_area_start  -->
    <div class="popular_destination_area">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="section_title text-center mb_70">
                        <h3>LOCAL GUIDE</h3>
                        <p>Jangan lupa pilih local guide untuk memaksimalkan traveling</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="single_destination">
                        <div class="thumb">
                            <img src="{{ url('regent_user/img/destination/1.png') }}" alt="">
                        </div>
                        <div class="content">
                            <p class="d-flex align-items-center"><a href="#">NAMA</a></p>   
                            <p class="d-flex align-items-center ml-3">KOTA</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single_destination">
                        <div class="thumb">
                            <img src="{{ url('regent_user/img/destination/2.png') }}" alt="">
                        </div>
                        <div class="content">
                            <p class="d-flex align-items-center"><a href="#">NAMA</a></p>
                            <p class="d-flex align-items-center ml-3">KOTA</p>
                            
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single_destination">
                        <div class="thumb">
                            <img src="{{ url('regent_user/img/destination/3.png') }}" alt="">
                        </div>
                        <div class="content">
                            <p class="d-flex align-items-center"><a href="#">NAMA</a></p>
                            <p class="d-flex align-items-center ml-3">KOTA</p>
                            
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single_destination">
                        <div class="thumb">
                            <img src="{{ url('regent_user/img/destination/4.png') }}" alt="">
                        </div>
                        <div class="content">
                            <p class="d-flex align-items-center"><a href="#">NAMA</a></p>
                            <p class="d-flex align-items-center ml-3">KOTA</p>
                            
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single_destination">
                        <div class="thumb">
                            <img src="{{ url('regent_user/img/destination/5.png') }}" alt="">
                        </div>
                        <div class="content">
                            <p class="d-flex align-items-center"><a href="#">NAMA</a></p>
                            <p class="d-flex align-items-center ml-3">KOTA</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single_destination">
                        <div class="thumb">
                            <img src="{{ url('regent_user/img/destination/6.png') }}" alt="" aria-placeholder="aspal">
                        </div>
                        <div class="content">
                            <p class="d-flex align-items-center"><a href="#">NAMA</a></p>
                            <p class="d-flex align-items-center ml-3">KOTA</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- popular_destination_area_end  -->
    @endsection

    @section('places') 
    {{-- Popular Places --}}
    <div class="popular_places_area">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="section_title text-center mb_70">
                        <h3>DESTINASI WISATA</h3>
                        <p>Selalu menjadi impian seorang traveler untuk mengunjungi seluruh tempat wisata di mana mereka berada.</p>
                    </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="single_place">
                            <div class="thumb">
                                <img src="{{ url('/regent_user/img/place/pantailosari.jpg')}}" alt="">
                            </div>
                            <div class="place_info">
                                <a href="#"><h3>Losari Beach</h3></a>
                                <p>Indonesia</p>
                            </div>
                        </div>
                    </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="single_place">
                                <div class="thumb">
                                    <img src="{{ url('/regent_user/img/place/bira.jpg')}}" alt="">
                                </div>
                                <div class="place_info">
                                    <a href="#"><h3>Bira Beach</h3></a>
                                    <p>Indonesia</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="single_place">
                                <div class="thumb">
                                    <img src="{{ url('/regent_user/img/place/toraja.jpg')}}" alt="">
                                </div>
                                <div class="place_info">
                                    <a href="#"><h3>Tana Toraja</h3></a>
                                    <p>Indonesia</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="single_place">
                                <div class="thumb">
                                    <img src="{{ url('/regent_user/img/place/roterdam.jpg')}}" alt="">
                                </div>
                                <div class="place_info">
                                    <a href="#"><h3>Fort Rotterdam</h3></a>
                                    <p>Indonesia</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="single_place">
                                <div class="thumb">
                                    <img src="{{ url('/regent_user/img/place/lappalaona.jpg') }}" alt="">
                                </div>
                            <div class="place_info">
                                <a href="#"><h3>Lappa Laona</h3></a>
                                <p>Indonesia</p>
                                </div>
                            </div>
                        </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="single_place">
                            <div class="thumb">
                                <img src="{{ url('/regent_user/img/place/menarapisa.jpg') }}" alt="">
                            </div>
                            <div class="place_info">
                                <a href="#"><h3>Tower of Pisa</h3></a>
                                <p>Italy</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="more_place_btn text-center">
                            <a class="boxed-btn4" href="#">More Places</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    {{-- End Popular Places --}}
    @endsection


    @section('video')    
    {{-- Video Area  --}}
    <div class="video_area overlay">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="video_wrap text-center">
                        <h3>Enjoy Video</h3>
                        <div class="video_icon">
                            <a class="popup-video video_play_button" href="https://www.youtube.com/watch?v=x0p3Fx8-y3Q">
                                <i class="fa fa-play"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- End Video --}}
    @endsection
