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

     var swiper2 = new Swiper(".swiperIrit", {
         slidesPerView: 1,
         spaceBetween: 30,
         freeMode: true,
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
 </script>


 </body>

 </html>