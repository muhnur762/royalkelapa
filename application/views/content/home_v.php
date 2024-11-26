<!-- tamplate header -->
<?php $this->load->view('tamplate/header_v'); ?>

<!-- hero -->
<section id="hero" class="position-relative">
    <div class="container h-100">
        <div class="row h-100">
            <div class="col-md-6 my-auto hero-content" data-aos="fade-up">
                <div class="mb-4 hero-tagline">
                    <!-- <h3>Royal Kelapa Catering</h3>
                    <h6>Weeding Planer & Event Organizer</h6> -->
                    <?= $home->caption; ?>

                </div>
                <div class="mb-4">
                    <p><?= $home->deskripsi; ?> </p>
                </div>
                <a href="<?= $waLink; ?>" target="_blank" class="btn btn-secondary text-light rounded rounded-pill py-2 px-4">Pesan Sekarang</a>
            </div>
        </div>
    </div>

    <div class="image-container">
        <img src="https://admin103.royalkelapacatering.com/upload/<?= $home->image; ?>" class="d-none d-lg-block" alt="<?= $home->image; ?>" />
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
                <h4 class="title text-secondary mb-3"><?= $dc1->title; ?></h4>
                <div class="text-justify">
                    <p><?= $dc1->deskripsi; ?></p>
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
                    <h4 class="title text-light mb-3"><?= $dc2->title; ?></h4>
                    <div class="text-justify text-light">
                        <p><?= $dc2->deskripsi; ?></p>
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
                <h3 class="title text-secondary"><?= $dc3->title; ?></h3>
                <p><?= $dc3->deskripsi; ?></p>
            </div>
        </div>
        <div class="swiper swiperProduk" data-aos="fade-up">
            <div class="swiper-wrapper">
                <?php foreach ($produk as $data) : ?>
                    <div class="swiper-slide">
                        <div class="produk-card">
                            <img src="https://admin103.royalkelapacatering.com/upload/produk/<?= $data->image; ?>" alt="<?= $data->image; ?>" class="card-image" alt="Lontong Cap Gomeh">
                            <div class="product-content">
                                <h6><?= $data->title; ?></h6>
                                <p class="text-justify mt-3"><?= $data->deskripsi; ?></p>
                            </div>
                        </div>
                    </div>
                <?php endforeach;  ?>
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
                <h3 class="title text-secondary"><?= $dc4->title; ?></h3>
                <img src="<?= base_url(); ?>/assets/images/row.png" alt="" width="100%">
                <p><?= $dc4->deskripsi; ?></p>

                <div class="nav-paket">
                    <?php
                    $counter = 0;
                    foreach ($phemat as $data):
                        $activeClass = ($counter === 0) ? 'active' : '';
                    ?>
                        <a href="#" class="<?= $activeClass ?>" data-target="#hemat<?= $data->id; ?>"><?= $data->title; ?></a>
                    <?php
                        $counter++;
                    endforeach;
                    ?>

                </div>
            </div>

        </div>
        <?php
        $counter = 0;
        foreach ($phemat as $data):

        ?>
            <div id="hemat<?= $data->id; ?>" class="tab-content <?= ($counter === 0) ? 'active' : ''; ?>">
                <div class="row">
                    <div class="col-md-6 d-flex align-items-center justify-content-center mb-4">
                        <div class="image-container">
                            <img src="https://admin103.royalkelapacatering.com/upload/paket_hemat/<?= $data->image; ?>" alt="<?= $data->image; ?>" />
                            <div class="arch-frame"></div>
                        </div>
                    </div>
                    <div class="col-md-6 px-4 px-lg-2">
                        <h3 class="subtitle"><?= $data->title; ?></h3>
                        <h4 class="fw-semibold">Rp.<?= $data->harga; ?>/pak</h4>
                        <p class="text-primary">Note : <?= $data->note; ?></p>

                        <div>
                            <?= $data->benefit; ?>
                        </div>

                        <a href="<?= $waLink; ?>" target="_blank" class="btn btn-primary text-light rounded rounded-pill px-4 mt-3">Pesan Sekarang</a>
                    </div>
                </div>

                <div class="row my-5 d-flex justify-content-center">
                    <?php
                    $detail = $this->db->where('pakethemat_id', $data->id)
                        ->get('tbl_detail_pakethemat')
                        ->result();

                    foreach ($detail as $detail):
                    ?>
                        <div class="col-6 col-md-3">
                            <div class="card border-0 rounded-0 bg-transparent">
                                <div class="card-img ">
                                    <img src="https://admin103.royalkelapacatering.com/upload/detail_paket_hemat/<?= $detail->image; ?>" alt="<?= $detail->image; ?>" class="my-auto rounded">
                                </div>
                                <p class="mt-3 fw-bold"><?= $detail->title; ?></p>
                                <p style="font-size: 12px;"><?= $detail->deskripsi; ?></p>
                            </div>
                        </div>
                    <?php endforeach;  ?>
                </div>
            </div>

        <?php
            $counter++;
        endforeach;
        ?>
    </div>
</section>
<!-- end paket irit -->

<!-- paket premium -->
<section id="paketpremium" class="tab-premium">
    <div class="container">
        <div class="row d-flex justify-content-center mb-5" data-aos="fade-up">
            <div class="col-md-8 text-center mb-4">
                <img src="<?= base_url(); ?>/assets/images/row2.png" alt="" width="15%">
                <h3 class="title text-secondary"><?= $dc5->title; ?></h3>
                <img src="<?= base_url(); ?>/assets/images/row3.png" alt="" width="25%">
                <p><?= $dc5->deskripsi; ?>
                </p>



                <div class="nav-paket">
                    <?php
                    $counter = 0;
                    foreach ($ppremium as $data):
                        $activeClass = ($counter === 0) ? 'active' : '';
                    ?>
                        <a href="#" class="<?= $activeClass ?>" data-target="#premium<?= $data->id; ?>"><?= $data->title; ?></a>
                    <?php
                        $counter++;
                    endforeach;
                    ?>

                </div>

            </div>
        </div>

        <?php
        $counter = 0;
        foreach ($ppremium as $data):

        ?>
            <div id="premium<?= $data->id; ?>" class="tab-content <?= ($counter === 0) ? 'active' : ''; ?>">

                <div class="row">
                    <div class="col-md-6 d-flex align-items-center justify-content-center mb-4">
                        <div class="image-container">
                            <img src="https://admin103.royalkelapacatering.com/upload/paket_premium/<?= $data->image; ?>" alt="<?= $data->image; ?>" alt="Buffet Image" />
                            <div class="arch-frame "></div>
                        </div>
                    </div>
                    <div class="col-md-6 px-4 px-lg-2">
                        <h3 class="subtitle"><?= $data->title; ?></h3>
                        <h4 class="fw-semibold">Rp.<?= $data->harga; ?>/pak</h4>
                        <p class="text-primary">Note : <?= $data->note; ?></p>

                        <div>
                            <?= $data->benefit; ?>
                        </div>

                        <a href="<?= $waLink; ?>" target="_blank" class="btn btn-primary text-light rounded rounded-pill px-4 mt-3">Pesan Sekarang</a>
                    </div>
                </div>

                <div class="row my-5 d-flex justify-content-center">
                    <?php
                    $detail = $this->db->where('pakethemat_id', $data->id)
                        ->get('tbl_detail_paketpremium')
                        ->result();

                    foreach ($detail as $detail):
                    ?>
                        <div class="col-6 col-md-3">
                            <div class="card border-0 rounded-0 bg-transparent">
                                <div class="card-img ">
                                    <img src="https://admin103.royalkelapacatering.com/upload/detail_paket_premium/<?= $detail->image; ?>" alt="<?= $detail->image; ?>" class="my-auto rounded">
                                </div>
                                <p class="mt-3 fw-bold"><?= $detail->title; ?></p>
                                <p style="font-size: 12px;"><?= $detail->deskripsi; ?></p>
                            </div>
                        </div>
                    <?php endforeach;  ?>
                </div>

            </div>
        <?php
            $counter++;

        endforeach;  ?>

    </div>
</section>
<!-- end paket premiun -->

<!-- gubukan -->
<section id="gubuk-reguler">
    <div class="container">
        <div class="row">
            <div class="col-md-6 d-flex align-items-center" data-aos="fade-up">
                <div>
                    <h3 class="title text-secondary"><?= $dc6->title; ?></h3>
                    <div class="mt-3">
                        <p><?= $dc6->deskripsi; ?></p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 text-center text-md-end gubuk-reguler-img" data-aos="fade-up">
                <img src="<?= base_url(); ?>/assets/images/kenapakami-2.png" alt="Lontong Cap Gomeh" width="80%">
            </div>
        </div>
        <div class="row gubuk-content mt-5 d-flex justify-content-center" data-aos="fade-up">
            <?php foreach ($greguler as $data) : ?>
                <div class="col-md-6 mb-4">
                    <img src="https://admin103.royalkelapacatering.com/upload/gubuk_reguler/<?= $data->image; ?>" alt="<?= $data->image; ?>" width="30%">
                    <h5 class="mt-3"><?= $data->titile; ?></h5>
                    <p><?= $data->deskripsi; ?></p>
                </div>
            <?php endforeach;  ?>
        </div>
        <div class="row mt-3">
            <div class="col text-center">
                <a href="<?= $waLink; ?>" target="_blank" class="btn btn-primary text-light rounded rounded-pill px-4">Pesan Sekarang</a>
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
                <h3 class="title text-secondary"><?= $dc7->title; ?></h3>
                <p><?= $dc7->deskripsi; ?></p>
            </div>
        </div>
        <div class="swiper swiperRakyat" data-aos="fade-up">
            <div class="swiper-wrapper">
                <?php foreach ($grakyat as $data):  ?>
                    <div class="swiper-slide">
                        <div class="card border-0 rounded-0">
                            <div class="card-img ">
                                <img src="https://admin103.royalkelapacatering.com/upload/gubuk_rakyat/<?= $data->image; ?>" alt="<?= $data->image; ?>">
                            </div>
                            <h6 class="fw-bold mt-3" style="font-size: 12px;"><?= $data->title; ?></h6>
                            <p><?= $data->deskripsi; ?></p>
                        </div>
                    </div>
                <?php endforeach;  ?>
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
                <a href="<?= $waLink; ?>" target="_blank" class="btn btn-primary text-light rounded rounded-pill px-4">Pesan Sekarang</a>
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
                <h3 class="title text-light"><?= $dc8->title; ?></h3>
                <p class="text-light"><?= $dc8->deskripsi; ?></p>
            </div>
        </div>
        <div class="row my-3 d-flex justify-content-center align-items-stretch" data-aos="fade-up">
            <?php foreach ($dessert as $data):  ?>
                <div class="col-lg-4 col-md-6 mb-3 px-auto">
                    <div class="card text-center card-dessert h-100">
                        <div class="card-body">
                            <h5 class="my-4">
                                <?= $data->title; ?>
                            </h5>
                            <h2 class="my-3 text-primary fw-bold">Rp<?= $data->harga; ?><span class="fs-5 fw-normal">/<?= $data->jumlah; ?>pax</span></h2>
                            <div class="text-start w-75 mx-auto ketentuan">
                                <?= $data->deskripsi; ?>
                                <span class="text-primary">note: <?= $data->note; ?></span>
                            </div>
                            <a href="<?= $waLink; ?>" target="_blank" class="btn btn-outline-primary rounded-pill w-75 mb-4">Pesan Sekarang</a>
                        </div>
                    </div>
                </div>
            <?php endforeach;  ?>
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
                <h3 class="title text-light"><?= $dc9->title; ?></h3>
                <p class="text-light"><?= $dc9->deskripsi; ?></p>
            </div>
        </div>
        <div class="row d-flex justify-content-center" data-aos="fade-up">
            <div class="col-md-9">
                <div class="bg-secondary rounded-4 p-4 card-menu">
                    <table class="text-light tabel-dessert">
                        <?php
                        foreach ($snack as $data):
                        ?>
                            <tr>
                                <td><?= $data->title; ?></td>
                                <td><?= $data->harga; ?></td>
                            </tr>
                        <?php
                        endforeach;
                        ?>
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
                <h3 class="title text-secondary"><?= $dc10->title; ?></h3>
                <p><?= $dc10->deskripsi; ?></p>
            </div>
        </div>
        <div class="row h-100 d-flex align-items-center">
            <div class="col-md-4 h-100 p-0">
                <img src="<?= base_url(); ?>/assets/images/syarat.png" alt="Kenapa kami" class="img-syarat">
            </div>
            <div class="col-md-8 h-100 position-relative p-0" data-aos="fade-up">
                <div class="px-2 px-md-5">
                    <?= $syarat->deskripsi; ?>

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
        <div class="row d-flex justify-content-center mb-5" data-aos="fade-up">
            <div class="col-md-8 text-center mb-4">
                <h3 class="title text-secondary"><?= $dc11->title; ?></h3>
                <p><?= $dc11->deskripsi; ?></p>
            </div>
        </div>
        <div class="row testimoni-content">
            <div class="col">
                <div class="swiper swiperTesti">
                    <div class="swiper-wrapper d-flex align-items-stretch py-2">
                        <?php foreach ($testimoni as $data) :
                        ?>

                            <div class="swiper-slide px-auto">
                                <div class="card card-testi h-100">
                                    <div class="card-body">
                                        <div class="text-center">
                                            <img src="https://admin103.royalkelapacatering.com/upload/testimoni/<?= $data->image; ?>" width="50" height="50" class="rounded-circle object-fit-cover">
                                            <h5 class="mb-0"><?= $data->nama; ?></h5>
                                            <div class="card-star text-warning">
                                                <?php if ($data->rating == 5) { ?>
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                <?php  } else if ($data->rating == 4) { ?>
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-regular fa-star"></i>
                                                <?php  } else if ($data->rating == 3) { ?>
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-regular fa-star"></i>
                                                    <i class="fa-regular fa-star"></i>
                                                <?php  } else if ($data->rating == 2) { ?>
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-regular fa-star"></i>
                                                    <i class="fa-regular fa-star"></i>
                                                    <i class="fa-regular fa-star"></i>
                                                <?php  } else if ($data->rating == 2) { ?>
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-regular fa-star"></i>
                                                    <i class="fa-regular fa-star"></i>
                                                    <i class="fa-regular fa-star"></i>
                                                    <i class="fa-regular fa-star"></i>
                                                <?php } else { ?>
                                                    <i class="fa-regular fa-star"></i>
                                                    <i class="fa-regular fa-star"></i>
                                                    <i class="fa-regular fa-star"></i>
                                                    <i class="fa-regular fa-star"></i>
                                                    <i class="fa-regular fa-star"></i>
                                                <?php } ?>
                                            </div>
                                        </div>
                                        <hr class="my-3">
                                        <div style="height: 300px;" class="overflow-y-hidden p-3">
                                            <span class="fw-bold">"</span>
                                            <span class="card-text"><?= $data->deskripsi ?></span><span class="fw-bold">"</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach;  ?>

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
                <h3 class="title text-light"><?= $dc12->title; ?></h3>
                <p class="text-light"><?= $dc12->deskripsi; ?></p>
            </div>
        </div>

        <div class="row">
            <div class="col-md-8 text-light form-pesan mb-5">
                <form method="post" id="help">
                    <div class="row mb-4">
                        <div class="col">
                            <div class=" mb-3">
                                <label for="floatingInput">Nama Lengkap</label>
                                <input type="text" class="form-control" id="name" name="name" placeholder="Nama Lengkap" required>
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
                        <!-- <button type="submit" id="submit" class="btn btn-light px-5 rounded rounded-pill fw-bold">Kirim</button> -->
                        <input type="submit" value="Kirim" id="submit" class="btn btn-light rounded-pill fw-bold" style="width: 200px;">
                    </div>
                </form>
            </div>
            <div class="col-md-4 text-light ps-2 p-md-5 text-center text-md-start">
                <div>
                    <h5 class="fw-semibold">Call Us</h5>
                    <a href="" class="d-block text-light text-decoration-none fw-light"><?= $web->phone; ?></a>
                    <a href="" class="d-block text-light text-decoration-none fw-light"><?= $web->fax; ?></a>
                </div>
                <div class="mt-4">
                    <h5 class="fw-semibold">Email Us</h5>
                    <a href="" class="d-block text-light text-decoration-none fw-light"><?= $web->email; ?></a>
                </div>
                <div class="mt-4">
                    <h5 class="fw-semibold">Follow Us</h5>
                    <div class="d-inline-block sosmed-footer">
                        <?php foreach ($sosmed as $data):  ?>
                            <a href="<?= $data->link; ?>" target="_blank" class="icon-circle">
                                <i class="<?= $data->icon; ?>"></i>
                            </a>
                        <?php endforeach;  ?>
                    </div>
                </div>
                <div class="mt-4">
                    <h5 class="fw-semibold">Vissit Us</h5>
                    <a href="" class="d-block text-light text-decoration-none fw-light"><?= $web->address; ?></a>
                </div>
            </div>
        </div>
    </div>
    <div class="text-light text-center py-5 mt-0 mt-md-5 px-1" style="font-size:14px">
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