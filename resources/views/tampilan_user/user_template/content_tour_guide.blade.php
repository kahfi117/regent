@extends('tampilan_user.tour_guide')
    

    @section('slider_area')    
    <!-- slider_area_start -->
    <div class="slider_area">
        <div class="slider_active owl-carousel">
            <div class="single_slider">
                <img src="{{url('regent_user/img/banner/background2.png')}}" style="max-width: 100%">
            </div>
        </div>
    </div>
    <!-- slider_area_end -->
    @endsection

    @section('tour_guide') 
    {{-- Popular Places --}}
    <div class="popular_places_area">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="section_title text-center mb_70">
                        <h3>PEMANDU WISATA</h3>
                        <p>Temukan seseorang yang akan menemani perjalanmu</p>
                    </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="single_place">
                            <div class="thumb">
                                <img src="{{ url('/regent_user/img/team/1.png') }}" alt="" style="max-width: 10cm" >
                            </div>
                            <div class="place_info">
                                <a href="#"><h3>NAMA</h3>
                                <p>KOTA</p></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="single_place">
                            <div class="thumb">
                                <img src="{{ url('/regent_user/img/banner/background1.png') }}" alt="max-width: 10cm">
                            </div>
                            <div class="place_info">
                                <a href="#"><h3>NAMA</h3>
                                <p>KOTA</p></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    
                </div>
            </div>
        </div>
    {{-- End Popular Places --}}
    @endsection