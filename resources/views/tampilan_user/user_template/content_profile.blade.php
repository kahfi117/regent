@extends('tampilan_user.profile')

    @section('slider')
    <!-- slider_area_start -->
            <div class="single_slider">
                <img src="{{url('regent_user/img/banner/background1.png')}}" style="max-width: 100%">
            </div>
    <!-- slider_area_end -->
    @endsection

    @section('profile')
        <div class="container">
            <div class="row">
                <div class="col-lg-12 mt-5">
                    <div class="story_heading">
                        <h3>PROFILE</h3>
                    </div>
                    <div class="row">
                        <div class="col-lg-12 mb-5">
                            <div class="story_thumb">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <div class="card">
                                            <div class="card-body">
                                                <center>
                                                    <img src="{{url('regent_user/img/team/1.png')}}" style="width : 80%; height : 80%; border-radius: 10%; display: inline-block;"> <br><br>    
                                                    <button type="button" data-toggle="modal" data-target="#EditProfile" class="btn btn-outline-success">EDIT PROFILE</button>
                                                </center>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-8 ">
                                        <div class="card">
                                            <div class="card-body">
                                                <center>
                                                    <h2 class="card-title"></h2>     
                                                </center>
                                                <table class="table table-borderless">
                                                    <tbody>
                                                        <tr>
                                                            <th scope="row">NAMA</th>
                                                            <td>NAMANYA</td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">TTL</th>
                                                            <td>Tempat, DD-MM-YYYY</td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">ALAMAT</th>
                                                            <td>JALAN</td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">EMAIL</th>
                                                            <td>EMAIL</td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">NO HP</th>
                                                            <td>08112211233</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal Pilih Unit -->
        <div id="EditProfile" class="modal fade" role="dialog">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <form method="post" action="">
                        <div class="modal-header">
                                <h3 class="modal-title">EDIT</h3>
                        </div>
                        <div class="modal-body">
                            <div class="row g-2 align-items-center">
                                <div class="col-4">
                                  <label for="" class="col-form-label">NAMA</label>
                                </div>
                                <div class="col-8">
                                  <input type="text" id="" class="form-control">
                                </div>
                            </div><br>
                            <div class="row g-2 align-items-center">
                                <div class="col-4">
                                  <label for="" class="col-form-label">Tempat Lahir</label>
                                </div>
                                <div class="col-8">
                                  <input type="text" id="" class="form-control">
                                </div>
                            </div><br>
                            <div class="row g-2 align-items-center">
                                <div class="col-4">
                                  <label for="" class="col-form-label">Tanggal Lahir</label>
                                </div>
                                <div class="col-8">
                                  <input type="text" id="" class="form-control">
                                </div>
                            </div><br>
                            <div class="row g-2 align-items-center">
                                <div class="col-4">
                                  <label for="" class="col-form-label">Alamat</label>
                                </div>
                                <div class="col-8">
                                  <input type="text" id="" class="form-control">
                                </div>
                            </div><br>
                            <div class="row g-2 align-items-center">
                                <div class="col-4">
                                  <label for="" class="col-form-label">Foto</label>
                                </div>
                                <div class="col-8">
                                  <input type="file" id="" class="form-control">
                                </div>
                            </div>
                        </div>

                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
                        </div>
                </div>
            </div>
        </div>
    

    @endsection