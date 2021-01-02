<!DOCTYPE html>
<html lang="en">
<head>
    @include('tampilan_local.template.header')
</head>
<body>

    @include('tampilan_local.template.navbar')

    {{-- Content Start --}}
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2 class="contact-title">Gabung Menjadi Local Guide</h2>
            </div>
            <div class="col-lg-12">
                <form class="form-contact contact_form" action="#" method="post">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group">
                                <div class="row g-2 align-items-center">
                                    <div class="col-3">
                                        <label class="text-dark" for="nama">NAMA LENGKAP</label>
                                    </div>
                                    <div class="col-9">
                                        <input class="form-control valid" name="" id="nama" type="text" placeholder="Nama">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group">
                                <div class="row g-2 align-items-center">
                                    <div class="col-3">
                                        <label class="text-dark" for="domisili">DOMISILI KOTA/KABUPATEN</label>
                                    </div>
                                    <div class="col-9">
                                        <select name="" id="domisili" class="form-control" >
                                            <option value="">Kab. Bantaeng</option>
                                            <option value="">Kab. Barru</option>
                                            <option value="">Kab. Bone</option>
                                            <option value="">Kab. Bulukumba</option>
                                            <option value="">Kab. Enrekang</option>
                                            <option value="">Kab. Gowa</option>
                                            <option value="">Kab. Jeneponto</option>
                                            <option value="">Kab. Kepulauan Selayar</option>
                                            <option value="">Kab. Luwu</option>
                                            <option value="">Kab. Luwu Timur</option>
                                            <option value="">Kab. Luwu Utara</option>
                                            <option value="">Kab. Maros</option>
                                            <option value="">Kab. Pangkajene dan Kepulauan</option>
                                            <option value="">Kab. Pinrang</option>
                                            <option value="">Kab. Sidenreng Rappang</option>
                                            <option value="">Kab. Sinjai</option>
                                            <option value="">Kab. Soppeng</option>
                                            <option value="">Kab. Takalar</option>
                                            <option value="">Kab. Tana Toraja</option>
                                            <option value="">Kab. Tana Toraja Utara</option>
                                            <option value="">Kab. Wajo</option>
                                            <option value="">Kota Makassar</option>
                                            <option value="">Kota Pare-pare</option>
                                            <option value="">Kota Palopo</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group">
                                <div class="row g-2 align-items-center">
                                    <div class="col-3">
                                        <label class="text-dark" for="bahasa">BAHASA</label>
                                    </div>
                                    <div class="col-9">
                                        <input class="form-control valid" name="" id="bahasa" type="text" placeholder="Bahasa yang dikuasai. ex. Indonesia, Bugis, Inggris, etc.">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group">
                                <div class="row g-2 align-items-center">
                                    <div class="col-3">
                                        <label class="text-dark" for="aktifitas">AKTIFITAS HARIAN</label>
                                    </div>
                                    <div class="col-9">
                                        <input class="form-control valid" name="" id="aktifitas" type="text" placeholder="ex. Mahasiswa, Bermain Musik, etc.">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group">
                                <div class="row g-2 align-items-center">
                                    <div class="col-3">
                                        <label class="text-dark" for="tentang-saya">SAYA AKAN MENUJUKKAN</label>
                                    </div>
                                    <div class="col-9">
                                        <textarea class="form-control w-100" name="" id="tentang-saya" cols="15" rows="5" placeholder="Deskrisikan hal yang akan anda tunjukkan kepada pariwisata jika berkeliling bersama anda"></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group">
                                <div class="row g-2 align-items-center">
                                    <div class="col-3">
                                        <label class="text-dark" for="tentang-saya">TENTANG SAYA</label>
                                    </div>
                                    <div class="col-9">
                                        <textarea class="form-control w-100" name="" id="tentang-saya" cols="15" rows="5" placeholder="Ceritakan Singkat tentang anda"></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group mt-3">
                        <button type="submit" class="button button-contactForm boxed-btn">Selesai</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    
    
    
    
    @include('tampilan_local.template.footer')
    @include('tampilan_local.template.js')

    
</body>
</html>