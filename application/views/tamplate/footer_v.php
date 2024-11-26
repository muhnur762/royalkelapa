<a id="scrollUpBtn" class="btn btn-primary text-light shadow fs-4" href="#sosmed"><i class="bi bi-arrow-up-short"></i></a>


<!-- whatsapp -->
<?php
date_default_timezone_set('ASIA/JAKARTA');
$curr_time     = date('H:i:s');
?>
<div class="whatsapp-chat-section">
    <div class="icon-section">
        <img src="<?= base_url(); ?>assets/whatsapp/ic_whatsapp.png" id="whatsapp_chat" onclick="chatWhatsApp();">
    </div>
    <div id="whatsapp-chat-popup" class="animated bounceOutDown" style="z-index: 999999; display: none;">
        <div id="list-chat-section" class="list-chat-section animated fadeIn" style="display: block;">
            <div class="header-section bg-primary">
                <img class="close-chat-section" src="<?= base_url(); ?>assets/whatsapp/ic_close_btn.png"
                    onclick="closechatWhatsApp();">
                <div class="header-avatar-section">
                    <?php foreach ($this->db->query("SELECT * FROM tbl_chat_wa order by id asc")->result() as $sec1) { ?>
                        <div class="avatar">
                            <img class="avatar"
                                style="position: relative; display: inline-block; vertical-align: middle; height: 60px; width: 60px; border-radius: 60px;"
                                src="https://admin103.royalkelapacatering.com/upload/wa_image/<?= $sec1->image; ?>">
                        </div>
                    <?php } ?>
                </div>
                <div class="header-desc-section" style="margin-top: 15px;">
                    <p>Kami siap membantu Anda, Silahkan chat dengan customer service kami. </p>
                </div>
            </div>
            <div class="chat-section">
                <?php foreach ($this->db->query("SELECT * FROM tbl_chat_wa")->result() as $sec2) { ?>
                    <div class="cs-section" onclick="chatCustomer(<?= $sec2->id; ?>);">
                        <div class="avatar">
                            <img class="avatar" src="https://admin103.royalkelapacatering.com/upload/wa_image/<?= $sec2->image; ?>">
                        </div>
                        <div class="profile">
                            <p class="position">Customer Service </p>
                            <h3 class="name"><?= strtoupper($sec2->nama); ?></h3>
                            <?php if (($curr_time >= $sec2->startOnline) && ($curr_time < $sec2->endOnline)) { ?>
                                <small class="status">Online <span class="online"><i class="fa fa-circle "></i></span>
                                </small>
                            <?php } else { ?>
                                <small class="status">Offline <span class="offline"><i class="fa fa-circle "></i></span>
                                </small>
                            <?php } ?>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
        <?php foreach ($this->db->query("SELECT * FROM tbl_chat_wa")->result() as $sec3) { ?>
            <div class="chat-section animated fadeIn" id="customer_chat_<?= $sec3->id; ?>" style="display: none;">
                <div class="header-section bg-primary">
                    <img class="back-chat-section" src="<?= base_url(); ?>assets/whatsapp/ic_back_btn.png"
                        onclick="backListChat(<?= $sec3->id; ?>);">
                    <div class="header-avatar-section">
                        <div class="avatar">
                            <img class="avatar"
                                style="position: relative; display: inline-block; vertical-align: middle; height: 60px; width: 60px; border-radius: 60px;"
                                src="https://admin103.royalkelapacatering.com/upload/wa_image/<?= $sec3->image; ?>">
                        </div>
                    </div>
                    <div class="header-desc-section">
                        <h3><?= $sec3->nama; ?></h3>
                        <?php
                        $phone_split = implode(" ", str_split('+62' . $sec3->phone, 4)) . " ";
                        ?>
                        <p><i class="fa fa-phone"></i> <?php echo $phone_split; ?></p>
                    </div>
                </div>
                <div class="inside-chat-section">
                    <div class="chat">
                        <div class="inside-chat">
                            <span>Halo saya <?= ucwords(strtolower($sec3->nama)); ?>, dari <?= $this->db->get('tbl_website')->row()->name; ?></span>
                        </div>
                        <div class="time">
                            <span><?php echo date('H:i'); ?><img
                                    src="<?= base_url(); ?>assets/whatsapp/ic_check_wa.png"></span>
                        </div>
                    </div>
                    <div class="chat">
                        <div class="inside-chat">
                            <span>Ada yang bisa saya bantu ?</span>
                        </div>
                        <div class="time">
                            <span><?php echo date('H:i'); ?><img
                                    src="<?= base_url(); ?>assets/whatsapp/ic_check_wa.png"></span>
                        </div>
                    </div>
                </div>
                <div class="box-chat-section">
                    <div class="text">
                        <input type="hidden" id="telp_wa_<?= $sec3->id; ?>" name="telp_wa_<?= $sec3->id; ?>"
                            value="<?= $sec3->phone; ?>">
                        <input type="text" class="input-message-whatsapp" id="chat_wa_<?= $sec3->id; ?>"
                            name="chat_wa_<?= $sec3->id; ?>" onchange="textChatWhatsapp(<?= $sec3->id; ?>);"
                            onclick="textChatWhatsapp(<?= $sec3->id; ?>);"
                            onmouseover="textChatWhatsapp(<?= $sec3->id; ?>);"
                            onmouseout="textChatWhatsapp(<?= $sec3->id; ?>);"
                            onkeydown="textChatWhatsapp(<?= $sec3->id; ?>);" value="" placeholder="Type a message">
                    </div>
                    <div class="button-send">
                        <a href="" id="btn_wa_<?= $sec3->id; ?>" target="_blank"><img
                                src="<?= base_url(); ?>assets/whatsapp/ic_send_message.png"></a>
                    </div>
                </div>
            </div>
        <?php } ?>
    </div>
</div>


<!-- jquery -->
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

<!-- bootstrap -->
<script src="<?= base_url('node_modules/bootstrap/dist/js/bootstrap.bundle.min.js'); ?>"></script>

<!-- swipeer -->
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

<!-- aos -->
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
    AOS.init({
        duration: 1000,
        once: true,
        offset: 100,

    });
</script>

<script>
    var swiper = new Swiper(".swiperProduk", {
        slidesPerView: 1,
        grid: {
            rows: 2,
            fill: "row",
        },
        spaceBetween: 30,
        navigation: {
            nextEl: ".swiper-next",
            prevEl: ".swiper-prev",
        },
        breakpoints: {
            574: {
                slidesPerView: 2,
                grid: {
                    rows: 2,
                },
            },
            992: {
                slidesPerView: 4,
                grid: {
                    rows: 2,
                },
            },
        },
        autoplay: {
            delay: 5000,
            disableOnInteraction: false,
        },
    });


    var swiper2 = new Swiper(".swiperRakyat", {
        slidesPerView: 1,
        spaceBetween: 30,
        freeMode: true,
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
        breakpoints: {
            574: {
                slidesPerView: 2,
            },
            992: {
                slidesPerView: 4,
            },
        },
        loop: true,
    });


    var swiper = new Swiper(".swiperTesti", {
        slidesPerView: 1,
        spaceBetween: 30,
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
        navigation: {
            nextEl: ".swiper-next",
            prevEl: ".swiper-prev",
        },
        breakpoints: {
            574: {
                slidesPerView: 2,
            },
            992: {
                slidesPerView: 3,
            },
        },
        autoplay: {
            delay: 5000,
            disableOnInteraction: false,
        },
        //
        loop: true,
    });


    // Fungsi untuk menangani navigasi tab
    function initTabs(wrapperSelector) {
        const wrapper = document.querySelector(wrapperSelector);

        if (wrapper) {
            wrapper.querySelectorAll(".nav-paket a").forEach(link => {
                link.addEventListener("click", function(e) {
                    e.preventDefault();

                    // Hapus class active pada semua link di dalam grup
                    wrapper.querySelectorAll(".nav-paket a").forEach(nav => nav.classList.remove("active"));

                    // Hapus class active pada semua tab di dalam grup
                    wrapper.querySelectorAll(".tab-content").forEach(tab => tab.classList.remove("active"));

                    // Tambahkan class active pada link yang diklik
                    this.classList.add("active");

                    // Aktifkan tab konten terkait
                    const target = this.getAttribute("data-target");
                    wrapper.querySelector(target).classList.add("active");
                });
            });
        }
    }

    // Inisialisasi tab untuk masing-masing grup
    initTabs(".tab-premium");
    initTabs(".tab-irit");

    document.addEventListener("DOMContentLoaded", function() {
        const sections = document.querySelectorAll("section");
        const navLinks = document.querySelectorAll(".nav-link");

        const observerOptions = {
            root: null,
            rootMargin: "0px",
            threshold: 0.6, // 60% of the section must be visible to trigger
        };

        const observer = new IntersectionObserver((entries) => {
            entries.forEach((entry) => {
                if (entry.isIntersecting) {
                    // Remove active class from all links
                    navLinks.forEach((link) => link.classList.remove("active"));

                    // Add active class to the corresponding link
                    const activeLink = document.querySelector(
                        `.nav-link[href="#${entry.target.id}"]`
                    );
                    if (activeLink) {
                        activeLink.classList.add("active");
                    }
                }
            });
        }, observerOptions);

        sections.forEach((section) => observer.observe(section));
    });


    // Menampilkan tombol saat menggulir halaman
    window.onscroll = function() {
        const scrollUpBtn = document.getElementById("scrollUpBtn");
        if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100) {
            scrollUpBtn.style.display = "block"; // Menampilkan tombol saat scroll
        } else {
            scrollUpBtn.style.display = "none"; // Menyembunyikan tombol di bagian atas
        }
    };


    function chatWhatsApp() {
        var cek_class = document.getElementById('whatsapp-chat-popup');
        if (cek_class.classList.contains('bounceOutDown')) {
            cek_class.classList.remove("bounceOutDown");
            cek_class.classList.add("bounceInUp");
            cek_class.style.display = "block";
        } else {
            cek_class.classList.remove("bounceInUp");
            cek_class.classList.add("bounceOutDown");
        }
    }

    function chatCustomer(id) {
        var list_chat = document.getElementById("list-chat-section");
        var chat = document.getElementById('customer_chat_' + id);

        if (id != 0 && id != '') {
            list_chat.style.display = "none";
            chat.style.display = "block";
        }
    }

    function closechatWhatsApp() {
        var cek_class = document.getElementById('whatsapp-chat-popup');
        if (cek_class.classList.contains('bounceInUp')) {
            cek_class.classList.remove("bounceInUp");
            cek_class.classList.add("bounceOutDown");
        }
    }


    function backListChat(id) {
        var list_chat = document.getElementById("list-chat-section");
        var chat = document.getElementById('customer_chat_' + id);
        if (id != 0 && id != '') {
            chat.style.display = "none";
            list_chat.style.display = "block";
            $("#chat_wa_" + id).val('');
        }
    }


    function textChatWhatsapp(id) {
        var link_wa = 'https://api.whatsapp.com/send?';
        if (id != 0 && id != '') {
            var telp = $("#telp_wa_" + id).val();
            var chat = $("#chat_wa_" + id).val();
            var link = 'https://api.whatsapp.com/send?phone=62' + telp + '&text=' + chat;
            var btn = document.getElementById("btn_wa_" + id);
            btn.setAttribute("href", link);
        }
    }

    base_url = '<?= base_url(); ?>';

    $("#help").submit(function(event) {
        event.preventDefault(); // Mencegah form submit secara default
        $("#submit").attr("disabled", true);


        var data = {
            nama: $("#name").val(),
            email: $("#email").val(),
            telp: $("#telp").val(),
            pesan: $("#pesan").val(),
        }

        $.ajax({
            type: "POST",
            url: base_url + "bantuan",
            data: data,

            success: function(response) {
                $('.success').fadeIn(1000);
                $("#help #submit").attr("disabled", false);
                setTimeout(function() {
                    alert("Terima Kasih, Pesan anda akan kami proses secepatnya.");
                    window.location = base_url;
                }, 1000);
            },
            error: function() {
                $(".error").fadeIn(1000);
                $("#help #submit").attr("disabled", false);
            }
        });
    });
</script>


</body>

</html>