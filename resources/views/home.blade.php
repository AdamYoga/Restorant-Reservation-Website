@extends('layout.main')
@section('content')


  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">
    

    <?php 
    if(isset($nama)) {
      if (!empty($nama)) { 
        if (Auth::user()->name == $nama) { 
          if (isset($kirimStatus)) {
            if ($kirimStatus == 'Not Accepted') {
            ?>
              {{-- Notifikasi --}}
              <div class="container position-absolute rounded-3 py-2 text-center" style="width: 50%; background-color: rgb(149, 127, 27); z-index: 1; left: 24%; top: 15%;">Meja Reservasi Anda Sedang Diproses</div> 
              {{-- Notifikasi --}}
            <?php
            }
            else { ?>
              {{-- Notifikasi --}}
              <div class="container position-absolute rounded-3 py-2 text-center" style="width: 50%; background-color: rgb(149, 127, 27); z-index: 1; left: 24%; top: 15%;">Meja Reservasi {{$nama}} Telah Dipesan</div> 
              {{-- Notifikasi --}}
            <?php
            }
          }
        }
      }
    }
    ?>
    

    <div class="container position-relative text-center text-lg-start" data-aos="zoom-in" data-aos-delay="100">
      <div class="row">
        <div class="col-lg-8">
          <h1><p>Selamat Datang di</p>
             <span>The Jaguar Cafe & Resto</span>
          </h1>
          <h2>Menyediakan makanan yang bikin kalian ketagihan!</h2>

          <div class="btns">
            <a href="#menu" class="btn-menu animated fadeInUp scrollto">Menu</a>
            <?php 
              if(isset($nama)) {
                if (!empty($nama)) { 
                  if (Auth::user()->name == $nama) {} 
                  else { ?>
                    <a href="{{ route('pesan')}}" class="btn-book animated fadeInUp scrollto">Pesan</a>
                  <?php
                  }
                }
              }
            ?>
            <a href="{{ route('pesan')}}" class="btn-book animated fadeInUp scrollto">Pesan</a>

          </div>
        </div>
        <div class="col-lg-4 d-flex align-items-center justify-content-center position-relative" data-aos="zoom-in" data-aos-delay="200">
          <a href="https://www.youtube.com/watch?v=Afs06u8_Pxg" class="glightbox play-btn"></a>
        </div>

      </div>
    </div>
  </section><!-- End Hero -->

  
  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="row">
          <div class="col-lg-6 order-1 order-lg-2" data-aos="zoom-in" data-aos-delay="100">
            <div class="about-img">
              <img src="assets/img/about.jpg" alt="">
            </div>
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content">
            <h3>The Jaguar Cafe & Resto</h3>
            <p class="fst-italic">
              Cafe & Resto yang memiliki view bawah laut dan memiliki kesan luxury yang pastinya akan menguras kantong kalian :) tetapi tenang saja.. kalian tidak akan kecewa :D Karena :
            </p>
            <ul>
              <li><i class="bi bi-check-circle"></i> Memiliki view yang memanjakan mata</li>
              <li><i class="bi bi-check-circle"></i> Pelayanan cepat</li>
              <li><i class="bi bi-check-circle"></i> Menu yang enak dari bahan premium</li>
            </ul>
            <p>
              Yukkk.. langsung aja booking! Siapa cepat dia dapat, karena sangat limited. Kalian beruntung kalau bisa booking :)
            </p>
          </div>
        </div>

      </div>
    </section><!-- End About Section -->

    <!-- ======= Why Us Section ======= -->
    <section id="why-us" class="why-us">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Why Us</h2>
          <p>Why Choose Our Restaurant</p>
        </div>

        <div class="row">

          <div class="col-lg-4">
            <div class="box" data-aos="zoom-in" data-aos-delay="100">
              <span>01</span>
              <h4>Tempat Strategis</h4>
              <p>Berada di tempat yang strategis</p>
            </div>
          </div>

          <div class="col-lg-4 mt-4 mt-lg-0">
            <div class="box" data-aos="zoom-in" data-aos-delay="200">
              <span>02</span>
              <h4>Dua Jenis View</h4>
              <p>Terdapat 2 jenis view di The Jaguar Cafe & Resto</p>
            </div>
          </div>

          <div class="col-lg-4 mt-4 mt-lg-0">
            <div class="box" data-aos="zoom-in" data-aos-delay="300">
              <span>03</span>
              <h4> Limited</h4>
              <p>Tidak semua orang bisa booking cafe & resto ini karena resto & cafe ini gak nyata!! hehehe Tapi.. bismillahirrahmanirrahim semoga bisa nyata aamiin</p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Why Us Section -->

    <!-- ======= Menu Section ======= -->
    <section id="menu" class="menu section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Menu</h2>
          <p>Check Our Tasty Menu</p>
        </div>

        <div class="row" data-aos="fade-up" data-aos-delay="100">
          <div class="col-lg-12 d-flex justify-content-center">
            <ul id="menu-flters">
              <li data-filter="*" class="filter-active">All</li>
              <li data-filter=".filter-appetizer">Appetizer</li>
              <li data-filter=".filter-main">Main Course</li>
              <li data-filter=".filter-dessert">Dessert</li>
            </ul>
          </div>
        </div>

        <div class="row menu-container" data-aos="fade-up" data-aos-delay="200">

          <div class="col-lg-6 menu-item filter-appetizer">
            <img src="assets/img/menu/classic-bruschetta.jpg" class="menu-img" alt="">
            <div class="menu-content">
              <a href="#">Classic Bruschetta</a><span>Rp105.000</span>
            </div>
            <div class="menu-ingredients">
            Roti panggang dengan bawang putih, minyak zaitun, garam, dan lada,
            </div>
          </div>

          <div class="col-lg-6 menu-item filter-dessert">
            <img src="assets/img/menu/creme-brulee.jpg" class="menu-img" alt="">
            <div class="menu-content">
              <a href="#">Crème Brûlée</a><span>Rp70.000</span>
            </div>
            <div class="menu-ingredients">
            Krim bakar atau krim Trinity yang terdiri dari dasar custard yang kaya dengan lapisan gula karamel yang dikeraskan
            </div>
          </div>

          <div class="col-lg-6 menu-item filter-appetizer">
            <img src="assets/img/menu/canape.jpg" class="menu-img" alt="">
            <div class="menu-content">
              <a href="#">Canapé</a><span>Rp65.000</span>
            </div>
            <div class="menu-ingredients">
            Roti bakar atau biskuit dengan berbagai macam topping : keju slice, telur rebus, ikan, udang, daging, sayur, buah, dan kacang
            </div>
          </div>

          <div class="col-lg-6 menu-item filter-appetizer">
            <img src="assets/img/menu/caesar.jpg" class="menu-img" alt="">
            <div class="menu-content">
              <a href="#">Caesar Salad</a><span>Rp80.000</span>
            </div>
            <div class="menu-ingredients">
              Selada, tomat, potongan daging ayam panggang, lemon, olive oil
            </div>
          </div>

          <div class="col-lg-6 menu-item filter-appetizer">
            <img src="assets/img/menu/salad pasta.jpg" class="menu-img" alt="">
            <div class="menu-content">
              <a href="#">Pasta Salad</a><span>Rp70.000</span>
            </div>
            <div class="menu-ingredients">
              Campuran pasta, rebusan brokoli, wortel, dan tomat segar dengan cream sauce, lada hitam, dan keju
            </div>
          </div>

          <div class="col-lg-6 menu-item filter-dessert">
            <img src="assets/img/menu/belgian-waffle.jpg" class="menu-img" alt="">
            <div class="menu-content">
              <a href="#">Belgian Waffle</a><span>Rp55.000</span>
            </div>
            <div class="menu-ingredients">
            Variasi waffel dengan adonan yang lebih ringan, kotak yang lebih besar, dan kantong yang lebih dalam daripada wafel lainnya dengan topping berupa gula kristal yang renyah atau stroberi, whipped cream, es krim
            </div>
          </div>

          <div class="col-lg-6 menu-item filter-main">
            <img src="assets/img/menu/chicken-parmigiana.jpg" class="menu-img" alt="">
            <div class="menu-content">
              <a href="#">Chicken Parmigiana</a><span>Rp80.000</span>
            </div>
            <div class="menu-ingredients">
            Dada ayam dilapisi tepung roti yang dilumuri saus tomat dan keju mozzarella, parmesan, atau keju provolone
            </div>
          </div>

          <div class="col-lg-6 menu-item filter-main">
            <img src="assets/img/menu/pan-seared-salmon.jpg" class="menu-img" alt="">
            <div class="menu-content">
              <a href="#">Pan Seared Salmon</a><span>Rp110.000</span>
            </div>
            <div class="menu-ingredients">
            Pan Seared Salmon dengan saus mentega lemon bawang putih
            </div>
          </div>

          <div class="col-lg-6 menu-item filter-main">
            <img src="assets/img/menu/lasagna.jpg" class="menu-img" alt="">
            <div class="menu-content">
              <a href="#">Lasagna</a><span>Rp95.000</span>
            </div>
            <div class="menu-ingredients">
            Pasta panggang dengan banyak isian seperti daging, sayur-sayuran, ayam, makanan laut dan sebagainya sesuai selera
            </div>
          </div>

          <div class="col-lg-6 menu-item filter-main">
            <img src="assets/img/menu/tortellini.jpg" class="menu-img" alt="">
            <div class="menu-content">
              <a href="#">Tortellini</a><span>Rp80.000</span>
            </div>
            <div class="menu-ingredients">
            Pasta dengan bentuk seperti cincin atau pusar yang diisi campuran daging atau keju dan disajikan dalam sup dengan isi daging sapi, ayam, atau keduanya
            </div>
          </div>

          <div class="col-lg-6 menu-item filter-dessert">
            <img src="assets/img/menu/banoffee-pie.jpg" class="menu-img" alt="">
            <div class="menu-content">
              <a href="#">Banoffee Pie</a><span>Rp50.000</span>
            </div>
            <div class="menu-ingredients">
              Pie yang berbahan dasar pisang, krim, dan karamel
            </div>
          </div>

          <div class="col-lg-6 menu-item filter-dessert">
            <img src="assets/img/menu/mango-sticky-rice.jpg" class="menu-img" alt="">
            <div class="menu-content">
              <a href="#">Mango Sticky Rice</a><span>Rp60.000</span>
            </div>
            <div class="menu-ingredients">
              Dessert yang berbahan dasar beras ketan, mangga, dan krim santan manis
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Menu Section -->

     <!-- ======= Events Section ======= -->
    <section id="events" class="events">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Event</h2>
          <p>Atur Event Kamu di Cafe & Resto Kami</p>
        </div>

        <div class="events-slider swiper" data-aos="fade-up" data-aos-delay="100">
          <div class="swiper-wrapper">

            <div class="swiper-slide">
              <div class="row event-item">
                <div class="col-lg-6">
                  <img src="assets/img/event-birthday.jpg" class="img-fluid" alt="">
                </div>
                <div class="col-lg-6 pt-4 pt-lg-0 content">
                  <h3>Birthday Party</h3>
                  <div class="price">
                    <p><span>Rp5.500.000</span></p>
                  </div>
                  <p class="fst-italic">
                    Mengapa memilih mengadakan pesta ulang tahun di The Jaguar Cafe & Resto?
                  </p>
                  <ul>
                    <li><i class="bi bi-check-circle-fill"></i> Pesta dikelola dengan baik dan karyawan ramah.</li>
                    <li><i class="bi bi-check-circle-fill"></i> Apapun yang dibutuhkan, pasti langsung disediakan.</li>
                    <li><i class="bi bi-check-circle-fill"></i> Yang pasti.. menu di sini ga ada yang mengecewakan</li>
                  </ul>
                  <p>
                    Merencanakan pesta ulang tahun sendiri memakan banyak waktu, pasti kalian akan stres sendiri nanti.. Kami paham betul mengenai permasalahan itu.. jadii langsung aja rencanakan pesta ulang tahun anda, anak anda, kerabat anda di The Jaguar Cafe & Resto
                  </p>
                </div>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="row event-item">
                <div class="col-lg-6">
                  <img src="assets/img/event-private.jpg" class="img-fluid" alt="">
                </div>
                <div class="col-lg-6 pt-4 pt-lg-0 content">
                  <h3>Private Party</h3>
                  <div class="price">
                    <p><span>Rp15.000.000</span></p>
                  </div>
                  <p class="fst-italic">
                    Mengapa memilih mengadakan pesta private di The Jaguar Cafe & Resto?
                  </p>
                  <ul>
                    <li><i class="bi bi-check-circle-fill"></i> Karena di cafe & resto ini terjamin keamanannya.</li>
                    <li><i class="bi bi-check-circle-fill"></i> Harga tergolong murah untuk private party.</li>
                    <li><i class="bi bi-check-circle-fill"></i> Segala hal terorganisir dengan baik.</li>
                  </ul>
                  <p>
                    Mau mengadakan private party??? Kami, The Jaguar Cafe & Resto, siap membantu kalian. Apapun yang kalian butuhkan dan inginkan, kami siap melayani.. di cafe & resto ini, dijamin semua beresss
                  </p>
                </div>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="row event-item">
                <div class="col-lg-6">
                  <img src="assets/img/event-custom.jpg" class="img-fluid" alt="">
                </div>
                <div class="col-lg-6 pt-4 pt-lg-0 content">
                  <h3>Custom Party</h3>
                  <div class="price">
                    <p><span>Rp7.500.000</span></p>
                  </div>
                  <p class="fst-italic">
                    Mengapa memilih mengadakan custom party di The Jaguar Cafe & Resto?
                  </p>
                  <ul>
                    <li><i class="bi bi-check-circle-fill"></i> Mereka benar-benar mendengarkan semua keinginan customer.</li>
                    <li><i class="bi bi-check-circle-fill"></i> Karyawan dengan cepat mengatasi setiap permasalahan.</li>
                    <li><i class="bi bi-check-circle-fill"></i> Pelaksaan selalu on time.</li>
                  </ul>
                  <p>
                  Kamu sedang merencanakan acara? Jangan khawatir! Biar kami yang mengurus semuanya. Kami siap memberikan pengalaman acara yang tak terlupakan!
                  </p>
                </div>
              </div>
            </div><!-- End testimonial item -->

          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section><!-- End Events Section -->

    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Testimonial</h2>
          <p>Apa kata mereka tentang kami</p>
        </div>

        <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
          <div class="swiper-wrapper">

            <div class="swiper-slide">
              <div class="testimonial-item">
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Saya sebagai pecinta pemandangan bawah laut, benar-benar puas dengan adanya cafe & resto ini. Selain itu, all the menu is delicious.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
                <img src="assets/img/testimonials/testimoni-1.jpg" class="testimonial-img" alt="">
                <h3>Gem</h3>
                <h4>Ceo &amp; Founder</h4>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Saya sangat suka dengan cafe & resto ini, karena desain interiornya itu sangat menarik dan ga membosankan, apalagi dengan menu-menu yang tersedia. Cafe & resto ini terbaik menurut saya.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
                <img src="assets/img/testimonials/testimoni-2.jpg" class="testimonial-img" alt="">
                <h3>Rosy Zhao</h3>
                <h4>Designer</h4>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Restoran mewah dengan pelayanan yang ramah, selain itu makanannya juga enak-enak, setiap ada event pasti booking restoran ini.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
                <img src="assets/img/testimonials/testimoni-3.jpg" class="testimonial-img" alt="">
                <h3>Bai</h3>
                <h4>Store Owner</h4>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Setiap saya datang ke Cafe & Resto ini bersama teman-teman saya, kita serasa healing dan mendapat banyak inspirasi untuk kerjaan saya.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
                <img src="assets/img/testimonials/testimoni-4.jpg" class="testimonial-img" alt="">
                <h3>Ethan Lee</h3>
                <h4>Freelancer</h4>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  View bawah lautnya benar-benar memanjakan mata, makanan nya sangat bervariasi, servicenya numero uno..recommend untuk meeting lunch dan coorporate meeting.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
                <img src="assets/img/testimonials/testimoni-5.jpg" class="testimonial-img" alt="">
                <h3>Chen</h3>
                <h4>Entrepreneur</h4>
              </div>
            </div><!-- End testimonial item -->

          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section><!-- End Testimonials Section -->

    <!-- ======= Gallery Section ======= -->
    <section id="gallery" class="gallery">

      <div class="container" data-aos="fade-up">
        <div class="section-title">
          <h2>Gallery</h2>
          <p>Dokumentasi dari Cafe & Resto Kami</p>
        </div>
      </div>

      <div class="container-fluid" data-aos="fade-up" data-aos-delay="100">

        <div class="row g-0">

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="assets/img/gallery/gallery-1.jpg" class="gallery-lightbox" data-gall="gallery-item">
                <img src="assets/img/gallery/gallery-1.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="assets/img/gallery/gallery-2.jpg" class="gallery-lightbox" data-gall="gallery-item">
                <img src="assets/img/gallery/gallery-2.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="assets/img/gallery/gallery-3.jpg" class="gallery-lightbox" data-gall="gallery-item">
                <img src="assets/img/gallery/gallery-3.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="assets/img/gallery/gallery-4.jpg" class="gallery-lightbox" data-gall="gallery-item">
                <img src="assets/img/gallery/gallery-4.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="assets/img/gallery/gallery-5.jpg" class="gallery-lightbox" data-gall="gallery-item">
                <img src="assets/img/gallery/gallery-5.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="assets/img/gallery/gallery-6.jpg" class="gallery-lightbox" data-gall="gallery-item">
                <img src="assets/img/gallery/gallery-6.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="assets/img/gallery/gallery-7.jpg" class="gallery-lightbox" data-gall="gallery-item">
                <img src="assets/img/gallery/gallery-7.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="assets/img/gallery/gallery-8.jpg" class="gallery-lightbox" data-gall="gallery-item">
                <img src="assets/img/gallery/gallery-8.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Gallery Section -->

    
    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Kontak</h2>
          <p>Kontak Kami</p>
        </div>
      </div>

      <div data-aos="fade-up">
        <iframe style="border:0; width: 100%; height: 350px;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7932.547982533055!2d106.80417928481924!3d-6.227561559468478!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f1505c76d775%3A0xe8503eecf84be674!2sSudirman%20Central%20Busines%20District!5e0!3m2!1sid!2sid!4v1687265439790!5m2!1sid!2sid" frameborder="0" allowfullscreen></iframe>
      </div>

      <div class="container" data-aos="fade-up">

        <div class="row mt-5">

          <div class="col-lg-4">
            <div class="info">
              <div class="address">
                <i class="bi bi-geo-alt"></i>
                <h4>Lokasi:</h4>
                <p>Jl. Jend. sudirman kav 52-53 No.Kav 52-53, DIY, 12190</p>
              </div>

              <div class="open-hours">
                <i class="bi bi-clock"></i>
                <h4>Jam Buka:</h4>
                <p>
                  Senin-Sabtu:<br>
                  11:00 AM - 23:00 PM
                </p>
              </div>

              <div class="email">
                <i class="bi bi-envelope"></i>
                <h4>Email:</h4>
                <p>jaguar@gmail.com</p>
              </div>

              <div class="phone">
                <i class="bi bi-phone"></i>
                <h4>Telp:</h4>
                <p>(+62) 876 6543 8765</p>
              </div>

            </div>

          </div>

          <!-- <div class="col-lg-8 mt-5 mt-lg-0">

            <form action="forms/contact.php" method="post" role="form" class="php-email-form">
              <div class="row">
                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Nama" required>
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Email" required>
                </div>
              </div>
              <div class="form-group mt-3">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
              </div>
              <div class="form-group mt-3">
                <textarea class="form-control" name="message" rows="8" placeholder="Pesan" required></textarea>
              </div>
              <div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Pesan kamu telah terkirim. Terima Ksih!</div>
              </div>
              <div class="text-center"><button type="submit">Kirim Pesan</button></div>
            </form>

          </div> -->

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->


  @endsection