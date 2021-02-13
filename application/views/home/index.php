<nav class="navbar navbar-expand-lg navbar-light">
    <img src="https://www.posindonesia.co.id/img/logo-pos.svg" alt="Logo Pos Indonesia">
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <div class="navbar-nav mr-auto">
            <a class="nav-item nav-link active pr-3" href="#">Beranda <span class="sr-only">(current)</span></a>
            <a class="nav-item nav-link pr-3" href="#">Pengiriman</a>
            <a class="nav-item nav-link pr-3" href="#">Jasa Keuangan</a>
            <a class="nav-item nav-link pr-3" href="#">Solusi Bisnis</a>
            <a class="nav-item nav-link pr-3" href="#">Tentang Pos</a>
            <a class="nav-item nav-link pr-3" href="<?= base_url('auth'); ?>">Login</a>
        </div>
    </div>
</nav>

<!-- Gambar Slide -->
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img class="d-block w-100" src="http://localhost/pos/assets/img/header/36.JPG" alt="First slide">
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="http://localhost/pos/assets/img/header/37.JPG" alt="Second slide">
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="http://localhost/pos/assets/img/header/38.JPG" alt="Third slide">
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="http://localhost/pos/assets/img/header/39.JPG" alt="Third slide">
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="http://localhost/pos/assets/img/header/40.JPG" alt="Third slide">
        </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>

<div class="container">
    <div class="row tracking">
        <div class="col-md-4 wrapper border-grey">
            <form method="POST">
                <div class="row">
                    <input type="hidden">
                    <div class="col-md-offset-3 col-12 col-md-12 item">
                        <h5><i class="fa fa-search purple"></i> &nbsp;<b>Lacak Kiriman</b></h5>
                        <p>Lacak keberadaan paket anda dengan mengetik nomor resi dibawah ini</p>
                        <div class="form-group">
                            <div class="input-group">
                                <input type="text" class="form-control form-control-sm other" id="resi" name="resi" placeholder="Ketik nomor resi">
                            </div>
                            <br>
                            <div class="input-group" id="captcha-tracking" style="display:none">
                                <div class="g-recaptcha" data-sitekey="6LdPVasUAAAAAOmX3jw3u2WbDJoKeFj34uXzMcVu">
                                    <div style="width: 304px; height: 78px;">
                                        <div><iframe src="" width="304" height="78" role="presentation" name="a-s3dg74llu86f" frameborder="0" scrolling="no" sandbox="allow-forms allow-popups allow-same-origin allow-scripts allow-top-navigation allow-modals allow-popups-to-escape-sandbox"></iframe></div><textarea id="g-recaptcha-response" name="g-recaptcha-response" class="g-recaptcha-response" style="width: 250px; height: 40px; border: 1px solid rgb(193, 193, 193); margin: 10px 25px; padding: 0px; resize: none; display: none;"></textarea>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <button class="btn float-right global" id="btn-tracking" type="button">Tracking</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
        <div class="col-md-4 wrapper border-grey">
            <form method="POST" action="https://www.posindonesia.co.id/id/check-tarif-post" accept-charset="UTF-8" class="form-horizontal" id="form-checktarif"><input name="_token" type="hidden" value="ArdH7OqpcmdhMyQQPaoea22hPermG8TfuZngknRa">
                <div class="row">
                    <input type="hidden" value="0" id="count-checktarif">
                    <div class="col-md-offset-3 col-12 col-md-12 item">
                        <h5><i class="fa fa-calculator purple"></i> &nbsp;<b>Hitung Tarif Pengiriman</b></h5>
                        <div class="form-group row mt-4">
                            <label class="col-md-3">Dari</label>
                            <div class="col-md-9">
                                <select name="shipperzipcode" id="tariff-from" required="" class="form-control choose-dir select2-hidden-accessible" data-info="province" tabindex="-1" aria-hidden="true">
                                </select><span class="select2 select2-container select2-container--default" dir="ltr" style="width: 290.788px;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-labelledby="select2-tariff-from-container"><span class="select2-selection__rendered" id="select2-tariff-from-container"><span class="select2-selection__placeholder">Pilih Provinsi atau Negara</span></span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                            </div>
                        </div>
                        <div class="form-group row mt-3">
                            <label class="col-md-3">Ke</label>
                            <div class="col-md-9">
                                <select name="receiverzipcode" id="tariff-to" required="" class="form-control choose-dir select2-hidden-accessible" data-info="province" tabindex="-1" aria-hidden="true">
                                </select><span class="select2 select2-container select2-container--default" dir="ltr" style="width: 290.788px;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-labelledby="select2-tariff-to-container"><span class="select2-selection__rendered" id="select2-tariff-to-container"><span class="select2-selection__placeholder">Pilih Provinsi atau Negara</span></span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                            </div>
                        </div>
                        <div class="form-group row mt-3">
                            <label class="col-md-3">Berat</label>
                            <div class="col-md-9">
                                <div class="row">
                                    <div class="col-6 col-md-4">
                                        <input type="text" class="form-control form-control-sm other" value="1000" name="weight" id="weight" placeholder="Berat (Gram) *">
                                    </div>
                                    <div class="col-6 col-md-3 pt-3 text-muted">
                                        Gram
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row mt-3" id="captcha-checktarif" style="display:none">
                            <div class="col-md-12">
                                <div class="g-recaptcha" data-sitekey="6LdPVasUAAAAAOmX3jw3u2WbDJoKeFj34uXzMcVu">
                                    <div style="width: 304px; height: 78px;">
                                        <div><iframe src="https://www.google.com/recaptcha/api2/anchor?ar=2&amp;k=6LdPVasUAAAAAOmX3jw3u2WbDJoKeFj34uXzMcVu&amp;co=aHR0cHM6Ly93d3cucG9zaW5kb25lc2lhLmNvLmlkOjQ0Mw..&amp;hl=en&amp;v=Zy-zVXWdnDW6AUZkKlojAKGe&amp;size=normal&amp;cb=mhlqmwz1lqcc" width="304" height="78" role="presentation" name="a-nerrjej19c4" frameborder="0" scrolling="no" sandbox="allow-forms allow-popups allow-same-origin allow-scripts allow-top-navigation allow-modals allow-popups-to-escape-sandbox"></iframe></div><textarea id="g-recaptcha-response-1" name="g-recaptcha-response" class="g-recaptcha-response" style="width: 250px; height: 40px; border: 1px solid rgb(193, 193, 193); margin: 10px 25px; padding: 0px; resize: none; display: none;"></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <br>
                        <button class="btn float-right global" id="btn-checktarif" type="button">Cek Tarif</button>
                    </div>
                </div>
            </form>
        </div>
        <div class="col-md-4 wrapper">
            <form method="POST" action="https://www.posindonesia.co.id/id/direction-post" accept-charset="UTF-8" class="form-horizontal" id="form-direction"><input name="_token" type="hidden" value="ArdH7OqpcmdhMyQQPaoea22hPermG8TfuZngknRa">
                <div class="row">
                    <div class="col-md-offset-3 col-12 col-md-12 item">
                        <h5><i class="fa fa-map-signs purple"></i> &nbsp;<b>Kantor Pos Terdekat</b></h5>
                        <p>Cari kantor pos terdekat <br>di kota Anda</p>
                        <div class="form-group">
                            <input type="hidden" value="0" id="count-direction">
                            <div class="input-group">
                                <input type="text" name="city" class="form-control form-control-sm other" id="city" placeholder="Masukkan Kota" required="">
                            </div>
                            <br>
                            <div class="input-group" id="captcha-direction" style="display:none">
                                <div class="g-recaptcha" data-sitekey="6LdPVasUAAAAAOmX3jw3u2WbDJoKeFj34uXzMcVu">
                                    <div style="width: 304px; height: 78px;">
                                        <div><iframe src="https://www.google.com/recaptcha/api2/anchor?ar=2&amp;k=6LdPVasUAAAAAOmX3jw3u2WbDJoKeFj34uXzMcVu&amp;co=aHR0cHM6Ly93d3cucG9zaW5kb25lc2lhLmNvLmlkOjQ0Mw..&amp;hl=en&amp;v=Zy-zVXWdnDW6AUZkKlojAKGe&amp;size=normal&amp;cb=iwlzcrry70c" width="304" height="78" role="presentation" name="a-fqr8bfj5gtg8" frameborder="0" scrolling="no" sandbox="allow-forms allow-popups allow-same-origin allow-scripts allow-top-navigation allow-modals allow-popups-to-escape-sandbox"></iframe></div><textarea id="g-recaptcha-response-2" name="g-recaptcha-response" class="g-recaptcha-response" style="width: 250px; height: 40px; border: 1px solid rgb(193, 193, 193); margin: 10px 25px; padding: 0px; resize: none; display: none;"></textarea>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <button class="btn float-right global" id="btn-direction" type="button">
                                Cek Lokasi
                            </button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<div class="container">
    <div class="row footer bg-light">

        <div class="col-md-10">
            <div class="row">
                <div class="col-md-3 lg-light">
                    <h5>Tentang Pos</h5>
                    <p>
                        <a href="#">Tentang Kami</a>
                    </p>
                    <br>
                    <h5>
                        <a href="#">Kontak Pos</a>
                    </h5>
                    <p>
                        <a href="#">Permintaan Informasi</a>
                    </p>
                    <p>
                        <a href="#">Keluhan Pengiriman Pos</a>
                    </p>
                </div>
                <div class="col-md-3">
                    <h5>Produk Pos</h5>
                    <p>
                        <a href="#">Pengiriman</a>
                    </p>
                    <p>
                        <a href="#">Jasa Keuangan</a>
                    </p>
                    <p>
                        <a href="#">Solusi Bisnis</a>
                    </p>

                </div>
                <div class="col-md-3">
                    <h5>Berita</h5>
                    <p>
                        <a href="#">Kumpulan Berita</a>
                    </p>
                    <p>
                        <a href="#">Unduh</a>
                    </p>
                </div>
                <div class="col-md-3">
                    <h5>Tracking</h5>
                    <p>
                        <a href="#">Tracking</a>
                    </p>
                    <p>
                        <a href="<?= base_url('cari_pos'); ?>">Cari Kantor Pos Terdekat</a>
                    </p>
                    <p>
                        <a href="#">Hitung Ongkos Kirim</a>
                    </p>
                </div>
            </div>
        </div>
        <div class="col-md-2">
            <h5>Follow Us</h5>
            <p>
                <a href="#" target="_blank" rel="nofollow">Facebook</a>
            </p>
            <p>
                <a href="#" target="_blank" rel="nofollow">Twitter</a>
            </p>
            <p>
                <a href="#" target="_blank" rel="nofollow">Instagram</a>
            </p>
            <p>
                <a href="#" target="_blank" rel="nofollow">Youtube</a>
            </p>
            <p>
                <i class="fa fa-phone"></i>&nbsp; Halo Pos 161
            </p>
        </div>
    </div>
</div>
</div>