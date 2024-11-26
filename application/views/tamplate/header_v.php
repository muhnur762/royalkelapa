<!doctype html>
<html lang="en">

<head>

    <?php
    $segment1 = $web->metaTitle;
    $metaKey = $web->metaKeywords;
    $metaDes = $web->metaDescription;
    ?>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= $segment1; ?></title>
    <meta name="keywords" content="<?= $metaKey; ?>">
    <meta name="description" content="<?= $metaDes; ?>">
    <meta property="og:type" content="website" />
    <meta property="og:title" content="<?= $segment1; ?>" />
    <meta property="og:url" content="<?= base_url(); ?>" />
    <meta property="og:image" content="<?= base_url('assets/images/300x200.png'); ?>">
    <meta property="og:image:width" content="300">
    <meta property="og:image:height" content="200">
    <link href="<?= base_url('assets/images/48x48.png'); ?>" sizes="32x32" rel="icon">



    <!-- cusstom bootstrap -->
    <link href="<?= base_url('assets/css/custom.css?' . time()); ?>" rel="stylesheet">
    <link href="<?= base_url('assets/css/style.css?' . time()); ?>" rel="stylesheet">

    <!-- mycss -->
    <link href="<?= base_url() ?>assets/css/whatsapp_chat.css?<?= time() ?>" rel="stylesheet">
    <link href="<?= base_url() ?>assets/css/animate.min.css?<?= time() ?>" rel="stylesheet">

    <!-- Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400..900;1,400..900&family=Poppins&display=swap" rel="stylesheet">

    <!-- Icont -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" rel="stylesheet">

    <!-- jquery -->
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.css" rel="stylesheet">

    <!-- sweeper -->
    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

    <!-- aos -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
</head>

<body>
    <!-- sosial media -->
    <section id="sosmed" class="bg-primary py-2 m-0">
        <div class="container text-end">
            <div class="d-inline-block">
                <?php foreach ($sosmed as $data):  ?>
                    <a href="<?= $data->link; ?>" target="_blank" class="icon-circle">
                        <i class="<?= $data->icon; ?>"></i>
                    </a>
                <?php endforeach;  ?>
            </div>
        </div>
    </section>
    <!-- end sosial media s -->
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg bg-body-tertiary sticky-top">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="<?= base_url(); ?>/assets/images/logo.png" alt="Logo">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav ms-auto">
                    <a class="nav-link" href="#sosmed">Beranda</a>
                    <a class="nav-link" href="#tentangkami">Tentang Kami</a>
                    <a class="nav-link" href="#kenapakami">Kenapa Kami</a>
                    <a class="nav-link" href="#produkkami">Produk Kami</a>
                    <a class="nav-link" href="#testimoni">Testimoni</a>
                    <a class="nav-link" href="#kontak">Kontak</a>
                    <a class="btn btn-primary rounded rounded-pill text-light" <?= $web->companyProfile != '' ? "href='https://admin103.royalkelapacatering.com/upload/$web->companyProfile' target='_blank'" : "href='#'" ?>>Download Menu</a>
                </div>
            </div>
        </div>
    </nav>
    <!-- end navbar -->