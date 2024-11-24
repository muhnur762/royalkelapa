<!-- tamplate header -->
<?php $this->load->view('tamplate/header_v'); ?>

<!-- hero -->
<section id="hero" class="position-relative">
    <div class="container h-100">
        <div class="row h-100">
            <div class="col-md-6 my-auto hero-content" data-aos="fade-up">
                <div class="mb-4">
                    <h3>Royal Kelapa Catering</h3>
                    <h6>Weeding Planer & Event Organizer</h6>
                </div>
                <div class="mb-4">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
                </div>
                <button class="btn btn-secondary text-light rounded rounded-pill py-2 px-4">Pesan Sekarang</button>
            </div>
        </div>
    </div>

    <div class="image-container">
        <img src="<?= base_url(); ?>/assets/images/heroimage.png" class="d-none d-lg-block" alt="Buffet Image" />
        <div class="arch-frame d-none d-lg-block"></div>
    </div>
</section>
<!-- end hero -->

<!-- tentang kami -->
<section id="tentangkami" class="h-100vh">
    <div class="container h-100">
        <div class="row h-100">
            <div class="col-md-6 my-auto text-center pb-3" data-aos="fade-up">
                <img src="<?= base_url(); ?>/assets/images/tentangkami.png" class="img-tentangkami" alt="Tentang kami" width="80%">
            </div>
            <div class="col-md-6 my-auto" data-aos="fade-up">
                <h4 class="title text-secondary mb-3">Tentang Kami</h4>
                <div class="text-justify">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end tentang kami -->

<!-- Kenapa kami -->
<section id="kenapakami" class=" position-relative overflow-hidden" style="z-index: 1; padding-bottom:50px">
    <div class="container-fluid h-100vh bg-primary">
        <div class="row h-100">
            <div class="col-md-6 h-100 p-0 d-none d-md-block">
                <img src="<?= base_url(); ?>/assets/images/kenapakami.png" alt="Kenapa kami" class="img-kenapakami">
            </div>
            <div class="col-md-6 h-100 position-relative p-0 kenapakami-content">
                <div class="kenapakami-body" style="padding-top: 110px;" data-aos="fade-up">
                    <h4 class="title text-light mb-3">Kenapa kami</h4>
                    <div class="text-justify text-light">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut </p>
                    </div>
                </div>
                <img src="<?= base_url(); ?>/assets/images/kenapakami-2.png" alt="Kenapa kami" class="position-absolute">
            </div>
        </div>
    </div>
</section>
<!-- end kenapa kami -->

<!-- produk -->
<section id="produkkami">
    <div class="container">
        <div class="row">
            <div class="col-md-6 mb-5" data-aos="fade-up">
                <h3 class="title text-secondary">Our Product</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veritatis, laudantium perferendis! Dolor modi quasi tempore alias ut a architecto neque eum quos fugiat, quisquam perspiciatis iusto tempora esse? Eum, iste.</p>
            </div>
        </div>
        <div class="swiper swiperProduk" data-aos="fade-up">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="produk-card">
                        <img src="<?= base_url(); ?>/assets/images/kenapakami-2.png" class="card-image" alt="Lontong Cap Gomeh">
                        <div class="product-content">
                            <h6>Lontong Cap Gomeh</h6>
                            <p class="text-justify mt-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis no</p>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="produk-card">
                        <img src="<?= base_url(); ?>/assets/images/kenapakami-2.png" class="card-image" alt="Lontong Cap Gomeh">
                        <div class="product-content">
                            <h6>Lontong Cap Gomeh</h6>
                            <p class="text-justify mt-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis no</p>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="produk-card">
                        <img src="<?= base_url(); ?>/assets/images/kenapakami-2.png" class="card-image" alt="Lontong Cap Gomeh">
                        <div class="product-content">
                            <h6>Lontong Cap Gomeh</h6>
                            <p class="text-justify mt-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis no</p>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="produk-card">
                        <img src="<?= base_url(); ?>/assets/images/kenapakami-2.png" class="card-image" alt="Lontong Cap Gomeh">
                        <div class="product-content">
                            <h6>Lontong Cap Gomeh</h6>
                            <p class="text-justify mt-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis no</p>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="produk-card">
                        <img src="<?= base_url(); ?>/assets/images/kenapakami-2.png" class="card-image" alt="Lontong Cap Gomeh">
                        <div class="product-content">
                            <h6>Lontong Cap Gomeh</h6>
                            <p class="text-justify mt-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis no</p>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="produk-card">
                        <img src="<?= base_url(); ?>/assets/images/kenapakami-2.png" class="card-image" alt="Lontong Cap Gomeh">
                        <div class="product-content">
                            <h6>Lontong Cap Gomeh</h6>
                            <p class="text-justify mt-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis no</p>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="produk-card">
                        <img src="<?= base_url(); ?>/assets/images/kenapakami-2.png" class="card-image" alt="Lontong Cap Gomeh">
                        <div class="product-content">
                            <h6>Lontong Cap Gomeh</h6>
                            <p class="text-justify mt-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis no</p>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="produk-card">
                        <img src="<?= base_url(); ?>/assets/images/kenapakami-2.png" class="card-image" alt="Lontong Cap Gomeh">
                        <div class="product-content">
                            <h6>Lontong Cap Gomeh</h6>
                            <p class="text-justify mt-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis no</p>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="produk-card">
                        <img src="<?= base_url(); ?>/assets/images/kenapakami-2.png" class="card-image" alt="Lontong Cap Gomeh">
                        <div class="product-content">
                            <h6>Lontong Cap Gomeh</h6>
                            <p class="text-justify mt-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis no</p>
                        </div>
                    </div>
                </div>

            </div>
            <div class="d-flex justify-content-center">
                <div>
                    <div class="custom-swiper-button swiper-next"><i class="bi bi-arrow-left-short"></i></div>
                    <div class="custom-swiper-button swiper-prev"><i class="bi bi-arrow-right-short"></i></div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end  produk-->

<!-- paket irit -->
<section id="paketirit" class="tab-irit" data-aos="fade-up">
    <div class="container">
        <div class="row d-flex justify-content-center mb-5">
            <div class="col-md-8 text-center mb-4">
                <h3 class="title text-secondary">Pilihan Paket Irit dan Hemat</h3>
                <img src="<?= base_url(); ?>/assets/images/row.png" alt="" width="100%">
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Vel fugit nihil necessitatibus amet deserunt fugiat quaerat atque quae impedit praesentium aperiam maxime iste suscipit inventore, quo expedita minus beatae corrupti.</p>

                <div class="nav-paket">
                    <a href="#" data-target="#paket-irit">Paket Irit</a>
                    <a href="#" class="active" data-target="#pakethemata">Paket Hemat A</a>
                    <a href="#" data-target="#pakethematb">Paket Hemat B</a>
                    <a href="#" data-target="#pakethematc">Paket Hemat C</a>
                </div>
            </div>

        </div>

        <div id="pakethematb" class="tab-content">
            <div class="row">
                <div class="col-md-4 d-flex align-items-center justify-content-center mb-4">
                    <div class="image-container">
                        <img src="<?= base_url(); ?>/assets/images/heroimage.png" alt="Buffet Image" />
                        <div class="arch-frame "></div>
                    </div>
                </div>
                <div class="col-md-8 px-4 px-lg-2">
                    <h3 class="fw-bold">Paket Irit</h3>
                    <h4>Rp25.000/pak</h4>
                    <p>Note : Minimum order 200 pax</p>

                    <ul>
                        <li>Nasi Putih</li>
                        <li>Pilihan menu soup (soup kimlo, soup ayam bangsawan, soup sosis baso,soup baso ) </li>
                        <li>Pilihan menu ayam (ayam saus mentega , ayam saus padang , ayam rica rica , ayam kari , ayam opor)</li>
                        <li>Pilihan menu pendamping (karedok, mie goreng, kwetiau goreng, bihun goreng, capcay, chicken vegetable saute) </li>
                        <li>Kerupuk udang </li>
                        <li>Buah potong </li>
                        <li>Air mineral </li>
                    </ul>

                    <button class="btn btn-primary text-light rounded rounded-pill px-4 mt-3">Pesan Sekarang</button>
                </div>
            </div>
            <div class="swiper swiperIrit" style="margin-top: 40px;">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="card border-0 rounded-0">
                            <div class="card-img ">
                                <img src="<?= base_url(); ?>/assets/images/gubuk.png" class="my-auto rounded" alt="Image Card">
                            </div>
                            <p class="mt-3">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Modi, consequuntur.</p>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="card border-0 rounded-0">
                            <div class="card-img ">
                                <img src="<?= base_url(); ?>/assets/images/gubuk.png" class="my-auto rounded" alt="Image Card">
                            </div>
                            <p class="mt-3">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Modi, consequuntur.</p>

                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="card border-0 rounded-0">
                            <div class="card-img ">
                                <img src="<?= base_url(); ?>/assets/images/gubuk.png" class="my-auto rounded" alt="Image Card">
                            </div>
                            <p class="mt-3">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Modi, consequuntur.</p>

                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="card border-0 rounded-0">
                            <div class="card-img ">
                                <img src="<?= base_url(); ?>/assets/images/gubuk.png" class="my-auto rounded" alt="Image Card">
                            </div>
                            <p class="mt-3">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Modi, consequuntur.</p>

                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="card border-0 rounded-0">
                            <div class="card-img ">
                                <img src="<?= base_url(); ?>/assets/images/gubuk.png" class="my-auto rounded" alt="Image Card">
                            </div>
                            <p class="mt-3">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Modi, consequuntur.</p>

                        </div>
                    </div>
                </div>
                <div class="d-flex justify-content-center">
                    <div>
                        <div class="custom-swiper-button swiper-next"><i class="bi bi-arrow-left-short"></i></div>
                        <div class="custom-swiper-button swiper-prev"><i class="bi bi-arrow-right-short"></i></div>
                    </div>
                </div>
            </div>
        </div>
        <div id="pakethemata" class="tab-content active">
            <div class="row">
                <div class="col-md-4 d-flex align-items-center justify-content-center mb-4">
                    <div class="image-container">
                        <img src="<?= base_url(); ?>/assets/images/heroimage.png" alt="Buffet Image" />
                        <div class="arch-frame "></div>
                    </div>
                </div>
                <div class="col-md-8 px-4 px-lg-2">
                    <h3 class="fw-bold">Paket Hemat A</h3>
                    <h4>Rp30.000/pak</h4>
                    <p>Note : Minimum order 200 pax</p>

                    <ul>
                        <li>Nasi Putih</li>
                        <li>Pilihan menu soup (soup kimlo, soup ayam bangsawan, soup sosis baso,soup baso ) </li>
                        <li>Pilihan menu ayam (ayam saus mentega , ayam saus padang , ayam rica rica , ayam kari , ayam opor)</li>
                        <li>Pilihan menu pendamping (karedok, mie goreng, kwetiau goreng, bihun goreng, capcay, chicken vegetable saute) </li>
                        <li>Kerupuk udang </li>
                        <li>Buah potong </li>
                        <li>Air mineral </li>
                    </ul>

                    <button class="btn btn-primary text-light rounded rounded-pill px-4 mt-3">Pesan Sekarang</button>
                </div>
            </div>
            <div class="swiper swiperIrit" style="margin-top: 40px;">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="card border-0 rounded-0">
                            <div class="card-img ">
                                <img src="<?= base_url(); ?>/assets/images/gubuk.png" class="my-auto rounded" alt="Image Card">
                            </div>
                            <p class="mt-3">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Modi, consequuntur.</p>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="card border-0 rounded-0">
                            <div class="card-img ">
                                <img src="<?= base_url(); ?>/assets/images/gubuk.png" class="my-auto rounded" alt="Image Card">
                            </div>
                            <p class="mt-3">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Modi, consequuntur.</p>

                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="card border-0 rounded-0">
                            <div class="card-img ">
                                <img src="<?= base_url(); ?>/assets/images/gubuk.png" class="my-auto rounded" alt="Image Card">
                            </div>
                            <p class="mt-3">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Modi, consequuntur.</p>

                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="card border-0 rounded-0">
                            <div class="card-img ">
                                <img src="<?= base_url(); ?>/assets/images/gubuk.png" class="my-auto rounded" alt="Image Card">
                            </div>
                            <p class="mt-3">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Modi, consequuntur.</p>

                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="card border-0 rounded-0">
                            <div class="card-img ">
                                <img src="<?= base_url(); ?>/assets/images/gubuk.png" class="my-auto rounded" alt="Image Card">
                            </div>
                            <p class="mt-3">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Modi, consequuntur.</p>

                        </div>
                    </div>
                </div>
                <div class="d-flex justify-content-center">
                    <div>
                        <div class="custom-swiper-button swiper-next"><i class="bi bi-arrow-left-short"></i></div>
                        <div class="custom-swiper-button swiper-prev"><i class="bi bi-arrow-right-short"></i></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end paket irit -->

<!-- paket premium -->
<section id="paketpremium" class="tab-premium">
    <div class="container">
        <div class="row d-flex justify-content-center mb-5" data-aos="fade-up">
            <div class="col-md-8 text-center mb-4">
                <img src="<?= base_url(); ?>/assets/images/row2.png" alt="" width="15%">
                <h3 class="title text-secondary">Pilihan Paket Premium</h3>
                <img src="<?= base_url(); ?>/assets/images/row3.png" alt="" width="25%">
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Vel fugit nihil necessitatibus amet deserunt fugiat quaerat atque quae impedit praesentium aperiam maxime iste suscipit inventore, quo expedita minus beatae corrupti.</p>



                <div class="nav-paket">
                    <a href="#" class="active" data-target="#premium-1">Paket Premium 1</a>
                    <a href="#" data-target="#premium-2">Paket Premium 2</a>
                    <a href="#" data-target="#paket3">Prasmanan Bangsawan I</a>
                    <a href="#" data-target="#paket4">Prasmanan Bangsawan II</a>
                </div>

            </div>
        </div>
        <div class="tab-content active" id="premium-1" data-aos="fade-up">

            <div class="row">
                <div class="col-md-4 d-flex align-items-center justify-content-center mb-4">
                    <div class="image-container">
                        <img src="<?= base_url(); ?>/assets/images/heroimage.png" alt="Buffet Image" />
                        <div class="arch-frame "></div>
                    </div>
                </div>
                <div class="col-md-8 px-4 px-lg-2">
                    <h3 class="fw-bold">Paket Premium 1</h3>
                    <h4>Rp25.000/pak</h4>
                    <p>Note : Minimum order 200 pax</p>

                    <ul>
                        <li>Nasi Putih</li>
                        <li>Pilihan menu soup (soup kimlo, soup ayam bangsawan, soup sosis baso,soup baso ) </li>
                        <li>Pilihan menu ayam (ayam saus mentega , ayam saus padang , ayam rica rica , ayam kari , ayam opor) </li>
                        <li>Pilihan menu pendamping (karedok, mie goreng, kwetiau goreng, bihun goreng, capcay, chicken vegetable saute) </li>
                        <li>Kerupuk udang </li>
                        <li>Buah potong </li>
                        <li>Air mineral </li>
                    </ul>

                    <button class="btn btn-primary text-light rounded rounded-pill px-4 mt-3">Pesan Sekarang</button>
                </div>
            </div>

            <div class="row my-5">
                <div class="col-6 col-md-3">
                    <div class="card border-0 rounded-0 bg-transparent">
                        <div class="card-img ">
                            <img src="<?= base_url(); ?>/assets/images/gubuk.png" class="my-auto rounded" alt="Image Card">
                        </div>
                        <p class="mt-3">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Modi, consequuntur.</p>
                    </div>
                </div>
                <div class="col-6 col-md-3">
                    <div class="card border-0 rounded-0 bg-transparent">
                        <div class="card-img ">
                            <img src="<?= base_url(); ?>/assets/images/gubuk.png" class="my-auto rounded" alt="Image Card">
                        </div>
                        <p class="mt-3">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Modi, consequuntur.</p>
                    </div>
                </div>
                <div class="col-6 col-md-3">
                    <div class="card border-0 rounded-0 bg-transparent">
                        <div class="card-img ">
                            <img src="<?= base_url(); ?>/assets/images/gubuk.png" class="my-auto rounded" alt="Image Card">
                        </div>
                        <p class="mt-3">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Modi, consequuntur.</p>
                    </div>
                </div>
                <div class="col-6 col-md-3">
                    <div class="card border-0 rounded-0 bg-transparent">
                        <div class="card-img ">
                            <img src="<?= base_url(); ?>/assets/images/gubuk.png" class="my-auto rounded" alt="Image Card">
                        </div>
                        <p class="mt-3">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Modi, consequuntur.</p>
                    </div>
                </div>
                <div class="col-6 col-md-3">
                    <div class="card border-0 rounded-0 bg-transparent">
                        <div class="card-img ">
                            <img src="<?= base_url(); ?>/assets/images/gubuk.png" class="my-auto rounded" alt="Image Card">
                        </div>
                        <p class="mt-3">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Modi, consequuntur.</p>
                    </div>
                </div>
                <div class="col-6 col-md-3">
                    <div class="card border-0 rounded-0 bg-transparent">
                        <div class="card-img ">
                            <img src="<?= base_url(); ?>/assets/images/gubuk.png" class="my-auto rounded" alt="Image Card">
                        </div>
                        <p class="mt-3">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Modi, consequuntur.</p>
                    </div>
                </div>
                <div class="col-6 col-md-3">
                    <div class="card border-0 rounded-0 bg-transparent">
                        <div class="card-img ">
                            <img src="<?= base_url(); ?>/assets/images/gubuk.png" class="my-auto rounded" alt="Image Card">
                        </div>
                        <p class="mt-3">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Modi, consequuntur.</p>
                    </div>
                </div>
                <div class="col-6 col-md-3">
                    <div class="card border-0 rounded-0 bg-transparent">
                        <div class="card-img ">
                            <img src="<?= base_url(); ?>/assets/images/gubuk.png" class="my-auto rounded" alt="Image Card">
                        </div>
                        <p class="mt-3">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Modi, consequuntur.</p>
                    </div>
                </div>
            </div>

        </div>
        <div class="tab-content" id="premium-2" data-aos="fade-up">

            <div class="row">
                <div class="col-md-4 d-flex align-items-center justify-content-center mb-4">
                    <div class="image-container">
                        <img src="<?= base_url(); ?>/assets/images/heroimage.png" alt="Buffet Image" />
                        <div class="arch-frame "></div>
                    </div>
                </div>
                <div class="col-md-8 px-4 px-lg-2">
                    <h3 class="fw-bold">Paket Premium 2</h3>
                    <h4>Rp50.000/pak</h4>
                    <p>Note : Minimum order 200 pax</p>

                    <ul>
                        <li>Nasi Putih</li>
                        <li>Pilihan menu soup (soup kimlo, soup ayam bangsawan, soup sosis baso,soup baso ) </li>
                        <li>Pilihan menu ayam (ayam saus mentega , ayam saus padang , ayam rica rica , ayam kari , ayam opor) </li>
                        <li>Pilihan menu pendamping (karedok, mie goreng, kwetiau goreng, bihun goreng, capcay, chicken vegetable saute) </li>
                        <li>Kerupuk udang </li>
                        <li>Buah potong </li>
                        <li>Air mineral </li>
                    </ul>

                    <button class="btn btn-primary text-light rounded rounded-pill px-4 mt-3">Pesan Sekarang</button>
                </div>
            </div>

            <div class="row my-5">
                <div class="col-6 col-md-3">
                    <div class="card border-0 rounded-0 bg-transparent">
                        <div class="card-img ">
                            <img src="<?= base_url(); ?>/assets/images/gubuk.png" class="my-auto rounded" alt="Image Card">
                        </div>
                        <p class="mt-3">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Modi, consequuntur.</p>
                    </div>
                </div>
                <div class="col-6 col-md-3">
                    <div class="card border-0 rounded-0 bg-transparent">
                        <div class="card-img ">
                            <img src="<?= base_url(); ?>/assets/images/gubuk.png" class="my-auto rounded" alt="Image Card">
                        </div>
                        <p class="mt-3">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Modi, consequuntur.</p>
                    </div>
                </div>
                <div class="col-6 col-md-3">
                    <div class="card border-0 rounded-0 bg-transparent">
                        <div class="card-img ">
                            <img src="<?= base_url(); ?>/assets/images/gubuk.png" class="my-auto rounded" alt="Image Card">
                        </div>
                        <p class="mt-3">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Modi, consequuntur.</p>
                    </div>
                </div>
                <div class="col-6 col-md-3">
                    <div class="card border-0 rounded-0 bg-transparent">
                        <div class="card-img ">
                            <img src="<?= base_url(); ?>/assets/images/gubuk.png" class="my-auto rounded" alt="Image Card">
                        </div>
                        <p class="mt-3">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Modi, consequuntur.</p>
                    </div>
                </div>
                <div class="col-6 col-md-3">
                    <div class="card border-0 rounded-0 bg-transparent">
                        <div class="card-img ">
                            <img src="<?= base_url(); ?>/assets/images/gubuk.png" class="my-auto rounded" alt="Image Card">
                        </div>
                        <p class="mt-3">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Modi, consequuntur.</p>
                    </div>
                </div>
                <div class="col-6 col-md-3">
                    <div class="card border-0 rounded-0 bg-transparent">
                        <div class="card-img ">
                            <img src="<?= base_url(); ?>/assets/images/gubuk.png" class="my-auto rounded" alt="Image Card">
                        </div>
                        <p class="mt-3">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Modi, consequuntur.</p>
                    </div>
                </div>
                <div class="col-6 col-md-3">
                    <div class="card border-0 rounded-0 bg-transparent">
                        <div class="card-img ">
                            <img src="<?= base_url(); ?>/assets/images/gubuk.png" class="my-auto rounded" alt="Image Card">
                        </div>
                        <p class="mt-3">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Modi, consequuntur.</p>
                    </div>
                </div>
                <div class="col-6 col-md-3">
                    <div class="card border-0 rounded-0 bg-transparent">
                        <div class="card-img ">
                            <img src="<?= base_url(); ?>/assets/images/gubuk.png" class="my-auto rounded" alt="Image Card">
                        </div>
                        <p class="mt-3">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Modi, consequuntur.</p>
                    </div>
                </div>
            </div>

        </div>

    </div>
</section>
<!-- end paket premiun -->

<!-- gubukan -->
<section id="gubuk-reguler">
    <div class="container">
        <div class="row">
            <div class="col-md-6 d-flex align-items-center" data-aos="fade-up">
                <div>
                    <h3 class="title text-secondary">Tersedia Juga Gubukan Reguler</h3>
                    <div class="mt-3">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid autem dolorum illo voluptas ut sunt dignissimos suscipit, officia, deserunt repellendus pariatur cupiditate qui assumenda explicabo quasi provident quia? Sapiente, aliquid.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 text-center text-md-end" data-aos="fade-up">
                <img src="<?= base_url(); ?>/assets/images/kenapakami-2.png" alt="Lontong Cap Gomeh" width="80%">
            </div>
        </div>
        <div class="row gubuk-content mt-5" data-aos="fade-up">
            <div class="col-md-6 mb-4">
                <img src="<?= base_url(); ?>/assets/images/kenapakami-2.png" alt="Lontong Cap Gomeh" width="30%">
                <h5 class="mt-3">Spaghetti</h5>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec ac nibh eu lacus finibus pellentesque in vel nisl. Proin ac fringilla arcu. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Curabitur scelerisque neque ut mattis venenatis.</p>
            </div>
            <div class="col-md-6 mb-4">
                <img src="<?= base_url(); ?>/assets/images/kenapakami-2.png" alt="Lontong Cap Gomeh" width="30%">
                <h5 class="mt-3">Spaghetti</h5>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec ac nibh eu lacus finibus pellentesque in vel nisl. Proin ac fringilla arcu. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Curabitur scelerisque neque ut mattis venenatis.</p>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col text-center">
                <button onclick="" class="btn btn-primary text-light rounded rounded-pill px-4">Pesan Sekarang</button>
            </div>
        </div>
    </div>
</section>
<!-- end Gubukan -->

<!-- gubukan rakyat -->
<section id="gubuk-rakyat">
    <div class="container">
        <div class="row d-flex justify-content-center mt-3" data-aos="fade-up">
            <div class="col-md-8 text-center mb-4">
                <h3 class="title text-secondary">Tersedia Juga Gubukan Rakyat</h3>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Architecto nisi amet deleniti vitae ullam laboriosam dolorum. Facilis qui, autem velit dignissimos itaque dolorum inventore delectus saepe voluptates corporis ab maiores.</p>
            </div>
        </div>
        <div class="swiper swiperRakyat" data-aos="fade-up">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="card border-0 rounded-0">
                        <div class="card-img ">
                            <img src="<?= base_url(); ?>/assets/images/gubuk.png" class="my-auto rounded" alt="Image Card">
                        </div>
                        <h6 class="fw-bold mt-3">Bakso Rakyat</h6>
                        <p> 12.000 ( bakso rasa rakyat 5 pcs + mie )</p>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="card border-0 rounded-0">
                        <div class="card-img ">
                            <img src="<?= base_url(); ?>/assets/images/gubuk.png" class="my-auto rounded" alt="Image Card">
                        </div>
                        <h6 class="fw-bold mt-3">Bakso Rakyat</h6>
                        <p> 12.000 ( bakso rasa rakyat 5 pcs + mie )</p>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="card border-0 rounded-0">
                        <div class="card-img ">
                            <img src="<?= base_url(); ?>/assets/images/gubuk.png" class="my-auto rounded" alt="Image Card">
                        </div>
                        <h6 class="fw-bold mt-3">Bakso Rakyat</h6>
                        <p> 12.000 ( bakso rasa rakyat 5 pcs + mie )</p>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="card border-0 rounded-0">
                        <div class="card-img ">
                            <img src="<?= base_url(); ?>/assets/images/gubuk.png" class="my-auto rounded" alt="Image Card">
                        </div>
                        <h6 class="fw-bold mt-3">Bakso Rakyat</h6>
                        <p> 12.000 ( bakso rasa rakyat 5 pcs + mie )</p>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="card border-0 rounded-0">
                        <div class="card-img ">
                            <img src="<?= base_url(); ?>/assets/images/gubuk.png" class="my-auto rounded" alt="Image Card">
                        </div>
                        <h6 class="fw-bold mt-3">Bakso Rakyat</h6>
                        <p> 12.000 ( bakso rasa rakyat 5 pcs + mie )</p>
                    </div>
                </div>
            </div>
            <div class="d-flex justify-content-center">
                <div>
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                </div>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col text-center">
                <button onclick="" class="btn btn-primary text-light rounded rounded-pill px-4">Pesan Sekarang</button>
            </div>
        </div>
    </div>
</section>
<!-- end gubukan rakyat -->

<!-- dessert -->
<section id="dessert" class="bg-secondary overflow-hidden">

    <img src="<?= base_url(); ?>/assets/images/batik.png" alt="overlay" class="position-absolute top-0" width="100%" style="z-index: 1;">

    <div class="container position-relative" style="z-index: 2;" data-aos="fade-up">
        <div class="row d-flex justify-content-center">
            <div class="col-md-8 text-center mb-4">
                <h3 class="title text-light"> Dessert Stall</h3>
                <p class="text-light">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Architecto nisi amet deleniti vitae ullam laboriosam dolorum. Facilis qui, autem velit dignissimos itaque dolorum inventore delectus saepe voluptates corporis ab maiores.</p>
            </div>
        </div>
        <div class="row my-3  d-flex justify-content-center" data-aos="fade-up">
            <div class="col-lg-4 col-md-6 mb-3">
                <div class="card text-center card-dessert">
                    <div class="card-body">
                        <h5 class="my-4">
                            Silver
                        </h5>
                        <h1 class="my-3 text-primary">Rp 1.600K<span class="fs-5 fw-normal">/50pax</span></h1>
                        <div class="text-start w-75 mx-auto my-5 ketentuan">
                            <ul>
                                <li>Aneka chockolate</li>
                                <li>Mini Cake</li>
                                <li>Puding</li>
                                <li>Aneka buah dessert stall</li>
                                <li>Jajanan pasar </li>
                                <li>Juice concentrate</li>
                                <li>Aneka candy / Lolypop</li>
                            </ul>
                        </div>
                        <a href="" target="_blank" class="btn btn-outline-primary rounded-pill w-75 mb-4">Pesan Sekarang</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-3">
                <div class="card text-center card-dessert">
                    <div class="card-body">
                        <h5 class="my-4">
                            Silver
                        </h5>
                        <h1 class="my-3 text-primary">Rp 1.600K<span class="fs-5 fw-normal">/50pax</span></h1>
                        <div class="text-start w-75 mx-auto my-5 ketentuan">
                            <ul>
                                <li>Aneka chockolate</li>
                                <li>Mini Cake</li>
                                <li>Puding</li>
                                <li>Aneka buah dessert stall</li>
                                <li>Jajanan pasar </li>
                                <li>Juice concentrate</li>
                                <li>Aneka candy / Lolypop</li>
                            </ul>
                        </div>
                        <a href="" target="_blank" class="btn btn-outline-primary rounded-pill w-75 mb-4">Pesan Sekarang</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-3">
                <div class="card text-center card-dessert">
                    <div class="card-body">
                        <h5 class="my-4">
                            Silver
                        </h5>
                        <h1 class="my-3 text-primary">Rp 1.600K<span class="fs-5 fw-normal">/50pax</span></h1>
                        <div class="text-start w-75 mx-auto my-5 ketentuan">
                            <ul>
                                <li>Aneka chockolate</li>
                                <li>Mini Cake</li>
                                <li>Puding</li>
                                <li>Aneka buah dessert stall</li>
                                <li>Jajanan pasar </li>
                                <li>Juice concentrate</li>
                                <li>Aneka candy / Lolypop</li>
                            </ul>
                        </div>
                        <a href="" target="_blank" class="btn btn-outline-primary rounded-pill w-75 mb-4">Pesan Sekarang</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end dessert -->

<!-- dessert2 -->
<section id="dessert2">
    <div class="overlay"></div>
    <div class="container position-relative">
        <div class="row d-flex justify-content-center" data-aos="fade-up">
            <div class="col-md-8 text-center mb-4">
                <h3 class="title text-light">Dessert / Snack Stall</h3>
                <p class="text-light">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Architecto nisi amet deleniti vitae ullam laboriosam dolorum. Facilis qui, autem velit dignissimos itaque dolorum inventore delectus saepe voluptates corporis ab maiores.</p>
            </div>
        </div>
        <div class="row d-flex justify-content-center" data-aos="fade-up">
            <div class="col-md-9">
                <div class="bg-secondary rounded-4 p-4 card-menu">
                    <table class="text-light tabel-dessert">
                        <tr>
                            <td>Puding Spesial (3 layers / regal / fruit)</td>
                            <td>Rp 120.000 / Loyang</td>
                        </tr>
                        <tr>
                            <td>Puding Spesial (3 layers / regal / fruit)</td>
                            <td>Rp 120.000 / Loyang</td>
                        </tr>
                        <tr>
                            <td>Puding Spesial (3 layers / regal / fruit)</td>
                            <td>Rp 120.000 / Loyang</td>
                        </tr>
                        <tr>
                            <td>Puding Spesial (3 layers / regal / fruit)</td>
                            <td>Rp 120.000 / Loyang</td>
                        </tr>
                        <tr>
                            <td>Puding Spesial (3 layers / regal / fruit)</td>
                            <td>Rp 120.000 / Loyang</td>
                        </tr>
                        <tr>
                            <td>Puding Spesial (3 layers / regal / fruit)</td>
                            <td>Rp 120.000 / Loyang</td>
                        </tr>
                        <tr>
                            <td>Puding Spesial (3 layers / regal / fruit)</td>
                            <td>Rp 120.000 / Loyang</td>
                        </tr>
                        <tr>
                            <td>Puding Spesial (3 layers / regal / fruit)</td>
                            <td>Rp 120.000 / Loyang</td>
                        </tr>
                        <tr>
                            <td>Puding Spesial (3 layers / regal / fruit)</td>
                            <td>Rp 120.000 / Loyang</td>
                        </tr>
                        <tr>
                            <td>Puding Spesial (3 layers / regal / fruit)</td>
                            <td>Rp 120.000 / Loyang</td>
                        </tr>
                        <tr>
                            <td>Puding Spesial (3 layers / regal / fruit)</td>
                            <td>Rp 120.000 / Loyang</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end dessert2 -->

<!-- styarat -->
<section id="syarat" style="z-index: 1;">
    <div class="container-fluid h-100">
        <div class="row d-flex justify-content-center mb-5" data-aos="fade-up">
            <div class="col-md-8 text-center mb-4">
                <h3 class="title text-primary">Syarat & Ketentuan</h3>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Architecto nisi amet deleniti vitae ullam laboriosam dolorum. Facilis qui, autem velit dignissimos itaque dolorum inventore delectus saepe voluptates corporis ab maiores.</p>
            </div>
        </div>
        <div class="row h-100 d-flex align-items-center">
            <div class="col-md-4 h-100 p-0">
                <img src="<?= base_url(); ?>/assets/images/syarat.png" alt="Kenapa kami" class="img-syarat">
            </div>
            <div class="col-md-8 h-100 position-relative p-0" data-aos="fade-up">
                <div class="px-2 px-md-5">
                    <ul>
                        <li>Down Payment (DP): 30% dari total biaya.</li>
                        <li>Opsi Booking Fee: Rp 2.000.000 dengan deadline pelunasan 7 hari dari tanggal transfer booking fee.</li>
                        <li>Pelunasan H-21 sebelum acara.</li>
                        <li>Minimal order sesuai ketentuan yang tertera di setiap paket.</li>
                        <li>Harga belum termasuk biaya transportasi.</li>
                        <li>Cancel sepihak: uang DP dianggap hangus.</li>
                        <li>Reschedule tanggal acara diperbolehkan maksimal H-30 hari dari tanggal awal acara.</li>
                        <li>Pembayaran hanya ke BCA 4740549273 a.n SARINAH.</li>
                        <li>
                            Waktu serving prasmanan adalah 7 jam acara, bila overtime berlaku charge tambahan.
                        </li>
                        <li>
                            Menu yang bukan dari Royal Kelapa Catering tidak boleh disajikan di atas alat prasmanan Royal Kelapa atau akan dikenakan charge tambahan.
                        </li>
                        <li>
                            Kerusakan makanan akibat faktor alam (seperti hujan atau terik matahari di venue outdoor) bukan tanggung jawab Royal Kelapa.
                        </li>
                        <li>
                            Pengiriman test food ke rumah klien: ongkir ditanggung oleh klien.
                        </li>
                        <li>
                            Kerusakan barang fatal (tidak bisa diperbaiki) milik Royal Kelapa oleh tamu acara atau panitia non-internal Royal Kelapa, serta segala kehilangan barang di acara adalah tanggung jawab klien untuk mengganti kerugian.
                        </li>
                        <li>
                            Apabila di waktu yang ditentukan belum ada pelunasan, maka dianggap batal sepihak atau dapat diselesaikan secara kekeluargaan dengan keputusan akhir di pihak Royal Kelapa Wedding.
                        </li>
                        <li>
                            Apabila menu tidak diturunkan H-14, maka pihak Royal Kelapa Wedding berhak memilih menu secara sepihak dengan menu random best seller.
                        </li>
                    </ul>

                </div>
                <!-- <img src="<?= base_url(); ?>/assets/images/kenapakami-2.png" alt="Kenapa kami" class="position-absolute" width="120%" style="right: -35%; z-index:1;"> -->
            </div>
        </div>
    </div>
</section>
<!-- end syarat -->

<!-- testimoni -->
<section id="testimoni" data-aos="fade-up">
    <div class="container h-100">
        <div class="row my-3 h-100">
            <div class="col text-center">
                <h1 class="title mb-3 text-secondary">Testimoni</h1>
            </div>
        </div>
        <div class="row testimoni-content">
            <div class="col">
                <div class="swiper swiperTesti">
                    <div class="swiper-wrapper d-flex align-items-stretch py-2">
                        <div class="swiper-slide px-auto">
                            <div class="card card-testi h-100">
                                <div class="card-body">
                                    <div class="text-center">
                                        <img src="<?= base_url(); ?>/assets/images/syarat.png" width="50" height="50" class="rounded-circle object-fit-cover">
                                        <h5 class="mb-0">Lorem Ipsum</h5>
                                        <div class="card-star text-warning">
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                        </div>
                                    </div>
                                    <hr class="my-3">
                                    <div style="height: 300px;" class="overflow-y-hidden p-3">
                                        <span class="fw-bold">"</span>
                                        <span class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias explicabo, inventore culpa quisquam eaque placeat aliquam consequuntur, cupiditate mollitia perferendis sapiente nulla accusantium maiores perspiciatis nam error, et illum. Eaque.</span><span class="fw-bold">"</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="swiper-slide px-auto">
                            <div class="card card-testi h-100">
                                <div class="card-body">
                                    <div class="text-center">
                                        <img src="" width="50" height="50" class="rounded-circle object-fit-cover">
                                        <h5 class="mb-0">Lorem Ipsum</h5>
                                        <div class="card-star text-warning">
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                        </div>
                                    </div>
                                    <hr class="my-3">
                                    <div style="height: 300px;" class="overflow-y-hidden p-3">
                                        <span class="fw-bold">"</span>
                                        <span class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias explicabo, inventore culpa quisquam eaque placeat aliquam consequuntur, cupiditate mollitia perferendis sapiente nulla accusantium maiores perspiciatis nam error, et illum. Eaque.</span><span class="fw-bold">"</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="swiper-slide px-auto">
                            <div class="card card-testi h-100">
                                <div class="card-body">
                                    <div class="text-center">
                                        <img src="" width="50" height="50" class="rounded-circle object-fit-cover">
                                        <h5 class="mb-0">Lorem Ipsum</h5>
                                        <div class="card-star text-warning">
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                        </div>
                                    </div>
                                    <hr class="my-3">
                                    <div style="height: 300px;" class="overflow-y-hidden p-3">
                                        <span class="fw-bold">"</span>
                                        <span class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias explicabo, inventore culpa quisquam eaque placeat aliquam consequuntur, cupiditate mollitia perferendis sapiente nulla accusantium maiores perspiciatis nam error, et illum. Eaque.</span><span class="fw-bold">"</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="swiper-slide px-auto">
                            <div class="card card-testi h-100">
                                <div class="card-body">
                                    <div class="text-center">
                                        <img src="" width="50" height="50" class="rounded-circle object-fit-cover">
                                        <h5 class="mb-0">Lorem Ipsum</h5>
                                        <div class="card-star text-warning">
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                        </div>
                                    </div>
                                    <hr class="my-3">
                                    <div style="height: 300px;" class="overflow-y-hidden p-3">
                                        <span class="fw-bold">"</span>
                                        <span class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias explicabo, inventore culpa quisquam eaque placeat aliquam consequuntur, cupiditate mollitia perferendis sapiente nulla accusantium maiores perspiciatis nam error, et illum. Eaque.</span><span class="fw-bold">"</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <!-- Tombol panah -->
                    <div class="d-flex justify-content-center mt-4">
                        <div>
                            <div class="custom-swiper-button swiper-next"><i class="bi bi-arrow-left-short"></i></div>
                            <div class="custom-swiper-button swiper-prev"><i class="bi bi-arrow-right-short"></i></div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>
<!-- end testimoni -->

<!-- footer -->
<section id="kontak" class="bg-primary">
    <div class="container">
        <div class="row d-flex justify-content-center mb-5" data-aos="fade-up">
            <div class="col-md-8 text-center mb-4">
                <h3 class="title text-light">Kontak kami</h3>
                <p class="text-light">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Architecto nisi amet deleniti vitae ullam laboriosam dolorum. Facilis qui, autem velit dignissimos itaque dolorum inventore delectus saepe voluptates corporis ab maiores.</p>
            </div>
        </div>

        <div class="row">
            <div class="col-md-8 text-light form-pesan mb-5">
                <form method="post" id="help">
                    <div class="row mb-4">
                        <div class="col">
                            <div class=" mb-3">
                                <label for="floatingInput">Nama Lengkap</label>
                                <input type="name" class="form-control" id="name" name="name" placeholder="Nama Lengkap" required>
                            </div>
                        </div>
                    </div>
                    <div class="row mb-4">
                        <div class="col-md-6">
                            <div class=" mb-3">
                                <label for="floatingInput">Email</label>
                                <input type="email" class="form-control" id="email" name="email" placeholder="Email" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class=" mb-3">
                                <label for="floatingInput">No. Telepon</label>
                                <input type="text" class="form-control" id="telp" name="telp" placeholder="Telp" required>
                            </div>
                        </div>
                    </div>
                    <div class="row mb-4">
                        <div class="col">
                            <div class="">
                                <label for="floatingTextarea">Pesan</label>
                                <textarea class="form-control" placeholder="Message" id="pesan" name="pesan" required style="height: 50px"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn btn-light px-5 rounded rounded-pill fw-bold">Kirim</button>
                    </div>
                </form>
            </div>
            <div class="col-md-4 text-light ps-2 p-md-5">
                <div>
                    <h5 class="fw-semibold">Call Us</h5>
                    <a href="" class="d-block text-light text-decoration-none fw-light">083841111155</a>
                    <a href="" class="d-block text-light text-decoration-none fw-light">083841111155 </a>
                </div>
                <div class="mt-4">
                    <h5 class="fw-semibold">Email Us</h5>
                    <a href="" class="d-block text-light text-decoration-none fw-light">lorem@gmail.com</a>
                </div>
                <div class="mt-4">
                    <h5 class="fw-semibold">Follow Us</h5>
                    <div class="d-inline-block sosmed-footer">
                        <a href="#" target="_blank" class="icon-circle">
                            <i class="fa-brands fa-instagram"></i>
                        </a>
                        <a href="#" target="_blank" class="icon-circle">
                            <i class="fa-brands fa-facebook"></i>
                        </a>
                        <a href="#" target="_blank" class="icon-circle">
                            <i class="fa-brands fa-twitter"></i>
                        </a>
                    </div>
                </div>
                <div class="mt-4">
                    <h5 class="fw-semibold">Vissit Us</h5>
                    <a href="" class="d-block text-light text-decoration-none fw-light">Jl. Lorem Ipsum Dolor sit amet</a>
                </div>
            </div>
        </div>
    </div>
    <div class="text-light text-center py-5 mt-0 mt-md-5" style="font-size:14px">
        <div class="box-copyright">Copyright © 2024 - <a class="text-decoration-none text-light"
                href="https://progimedia.com//" target="_blank">PROGIMEDIA</a> All Rights
            Reserved. <br>
            Powered by <a class="text-decoration-none text-light" href="https://digitalindo.co.id/"
                target="_blank">Digitalindo</a></div>
    </div>
</section>
<!-- end footer -->




<!-- tamplaete footer -->
<?php $this->load->view('tamplate/footer_v'); ?>