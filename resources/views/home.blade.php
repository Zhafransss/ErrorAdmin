@extends('layouts.app')

@section('content')


<link rel="shortcut icon" href="favicon.svg" type="image/svg+xml">

  <!-- 
    - custom css link
  -->
  <link rel="stylesheet" href="style.css">

  <!-- 
    - google font link
  -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Abril+Fatface&family=Comforter+Brush&family=Heebo:wght@400;500;600;700&display=swap"
    rel="stylesheet">

<main>
    <article>

      <!-- 
        - #HERO
      -->

      <section class="section hero"
        style="background-image: url('hero-bg-bottom.png') url('hero-bg-top.png')">
        <div class="container">

          <img src="shape-1.png" width="61" height="61" alt="Vector Shape" class="shape shape-1">

          <img src="shape-2.png" width="56" height="74" alt="Vector Shape" class="shape shape-2">

          <img src="shape-3.png" width="57" height="72" alt="Vector Shape" class="shape shape-3">

          <div class="hero-content">

            <p class="section-subtitle">Explore Your Travel</p>

            <h2 class="hero-title">relax on your trip </h2>

            <p class="hero-text">
              Siap melayani ke berbagai tempat tujuan yang anda inginkan dengan pelayanan ramah dan aman.
            </p>

            <div class="btn-group">
              <a href="https://wa.me/+6285173240443" class="btn btn-primary">Contact Us</a>

              <a href="#" class="btn btn-outline">Learn More</a>
            </div>

          </div>

          <figure class="hero-banner">
            <img src="hero-banner.png" width="686" height="812" loading="lazy" alt="hero banner"
              class="w-100">
          </figure>

        </div>
      </section>





      <!-- 
        - #DESTINATION
      -->

      
      <!-- 
        - #POPULAR
      -->

      <section class="section popular">
        <div class="container">

          <p class="section-subtitle">Pengiriman paket </p>

          <h2 class="h2 section-title">Anda ingin mengirim paket kemana? </h2>

          <ul class="popular-list">

            <li>
              <div class="popular-card">

                <figure class="card-banner">
                  <a href="#">
                    <img src="smg6.jpg" width="740" height="518" loading="lazy"
                      alt="Kuala Lumpur, Malaysia" class="img-cover">
                  </a>

                  <span class="card-badge">
                    <ion-icon name="time-outline"></ion-icon>

                    <time datetime="P12D">1 Days</time>
                  </span>
                </figure>

                <div class="card-content">

                  <div class="card-wrapper">
                    <div class="card-price">From Idr 30.000/Kg</div>

                    <div class="card-rating">
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star-outline"></ion-icon>

                      <data value="2">(4)</data>
                    </div>
                  </div>

                  <h3 class="card-title">
                    <a href="#">Kami Siap mengantarkan paket anda dengan aman dan terpercaya</a>
                  </h3>

                  <address class="card-location">Semarang</address>

                </div>

              </div>
            </li>

            <li>
              <div class="popular-card">

                <figure class="card-banner">
                  <a href="#">
                    <img src="jga2.jpg" width="740" height="58" loading="lazy"
                      alt="Kuala Lumpur, Malaysia" class="img-cover">
                  </a>

                  <span class="card-badge">
                    <ion-icon name="time-outline"></ion-icon>

                    <time datetime="P12D">1 Days</time>
                  </span>
                </figure>

                <div class="card-content">

                  <div class="card-wrapper">
                    <div class="card-price">From Idr 30.000/Kg</div>

                    <div class="card-rating">
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star-outline"></ion-icon>

                      <data value="2">(4)</data>
                    </div>
                  </div>

                  <h3 class="card-title">
                    <a href="#">Mengutamakan pelayanan yang terbaik untuk para konsumen </a>
                  </h3>

                  <address class="card-location">Jogjakarta</address>

                </div>

              </div>
            </li>

            <li>
              <div class="popular-card">

                <figure class="card-banner">
                  <a href="#">
                    <img src="solo.jpg" width="740" height="518" loading="lazy"
                      alt="Kuala Lumpur, Malaysia" class="img-cover">
                  </a>

                  <span class="card-badge">
                    <ion-icon name="time-outline"></ion-icon>

                    <time datetime="P12D">1 Days</time>
                  </span>
                </figure>

                <div class="card-content">

                  <div class="card-wrapper">
                    <div class="card-price">From Idr 30.000/Kg</div>

                    <div class="card-rating">
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star-outline"></ion-icon>

                      <data value="2">(4)</data>
                    </div>
                  </div>

                  <h3 class="card-title">
                    <a href="#">Mengatasi segala permasalahan dalam pengiriman paket </a>
                  </h3>

                  <address class="card-location">Solo Balapan</address>

                </div>

              </div>
            </li>


            <li>
              <div class="popular-card">

                <figure class="card-banner">
                  <a href="#">
                    <img src="mgl2.jpg" width="740" height="518" loading="lazy"
                      alt="Kuala Lumpur, Malaysia" class="img-cover">
                  </a>

                  <span class="card-badge">
                    <ion-icon name="time-outline"></ion-icon>

                    <time datetime="P12D">1 Days</time>
                  </span>
                </figure>

                <div class="card-content">

                  <div class="card-wrapper">
                    <div class="card-price">From Idr 25.000/Kg</div>

                    <div class="card-rating">
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star-outline"></ion-icon>

                      <data value="2">(4)</data>
                    </div>
                  </div>

                  <h3 class="card-title">
                    <a href="#">Kepuasan anda adalah tujuan kami</a>
                  </h3>

                  <address class="card-location">Magelang</address>

                </div>

              </div>
            </li>

            <li>
              <div class="popular-card">

                <figure class="card-banner">
                  <a href="#">
                    <img src="tmg.jpg" width="740" height="518" loading="lazy"
                      alt="Kuala Lumpur, Malaysia" class="img-cover">
                  </a>

                  <span class="card-badge">
                    <ion-icon name="time-outline"></ion-icon>

                    <time datetime="P12D">1 Days</time>
                  </span>
                </figure>

                <div class="card-content">

                  <div class="card-wrapper">
                    <div class="card-price">From Idr 15.000/Kg</div>

                    <div class="card-rating">
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star-outline"></ion-icon>

                      <data value="2">(4)</data>
                    </div>
                  </div>

                  <h3 class="card-title">
                    <a href="#">Mempermudah segala urusan</a>
                  </h3>

                  <address class="card-location">Temanggung</address>

                </div>

              </div>
            </li>

            <li>
              <div class="popular-card">

                <figure class="card-banner">
                  <a href="#">
                    <img src="slg.jpg" width="740" height="518" loading="lazy"
                      alt="Kuala Lumpur, Malaysia" class="img-cover">
                  </a>

                  <span class="card-badge">
                    <ion-icon name="time-outline"></ion-icon>

                    <time datetime="P12D">1 Days</time>
                  </span>
                </figure>

                <div class="card-content">

                  <div class="card-wrapper">
                    <div class="card-price">From Idr 15.000/Kg</div>

                    <div class="card-rating">
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star-outline"></ion-icon>

                      <data value="2">(4)</data>
                    </div>
                  </div>

                  <h3 class="card-title">
                    <a href="#">Tanpa Khawatir paket hilang</a>
                  </h3>

                  <address class="card-location">Salatiga</address>

                </div>

              </div>
            </li>

          </ul>

        </div>
      </section>





      <!-- 
        - #ABOUT
      -->

      <section class="section about">
        <div class="container">

          <div class="about-content">

            <p class="section-subtitle" id ="Aboutme">About Me</p>

            <h2 class="h2 section-title">Apa Itu JogloSemar ? </h2>

            <p class="about-text">
              JOGLOSEMAR Executive Shuttle Bus berdiri sejak awal tahun 2005 dan merupakan sarana transportasi umum dengan pelayanan berstandar pariwisata, terjadwal, dan mudah diakses oleh masyarakat.
            </p>
            <h2 class="h2 section-title">Kenapa Harus JogloSemar ? </h2>
            <ul class="about-list">

              <li class="about-item">

                <div class="">
                  <img src="aman.png" width="60" height="60">
                </div>

                <div class="about-item-content">
                  <h3 class="h3 about-item-title">Aman</h3>

                  <p class="about-item-text">
                    Memberikan pelayanan yang terbaik dan memberikan asuransi keamanan dalam perjalanan anda.
                  </p>
                </div>

              </li>

              <li class="about-item">

                <div class="">
                  <img src="nyaman.png" width="60" height="60">
                </div>

                <div class="about-item-content">
                  <h3 class="h3 about-item-title">Nyaman</h3>

                  <p class="about-item-text">
                    Memberikan Fasilitas yang terbaik agar menjadikan perjalanan anda terasa nyaman.
                  </p>
                </div>

              </li>

              <li class="about-item">

                <div class="">
                  <img src="ontime.png" width="60" height="60">
                </div>

                <div class="about-item-content">
                  <h3 class="h3 about-item-title">On Time</h3>

                  <p class="about-item-text">
                    Dengan ketepatan waktu yang sudah diperhitungkan, dan sudah terintegrasi dengan sistem menjadikan perjalanan anda tepat waktu.
                  </p>
                </div>

              </li>

            </ul>

            <a href="https://wa.me/+6285173240443" class="btn btn-primary">Booking Now</a>

          </div>

          <figure class="about-banner">
            <img src="about-banner.png" width="756" height="842" loading="lazy" alt="" class="w-100">
          </figure>

        </div>
      </section>





      <!-- 
        - #BLOG
      -->

      

    </article>
  </main>





  <!-- 
    - #FOOTER
  -->

  <footer class="footer" style="background-image: url('footer-bg.png')">
    <div class="container">

      <div class="footer-top">

        <ul class="footer-list">

          <li>
            <p class="footer-list-title">Kota Tujuan</p>
          </li>

          <li>
            <a href="#destinasi" class="footer-link">Semarang</a>
          </li>

          <li>
            <a href="#destinasi" class="footer-link">Solo</a>
          </li>

          <li>
            <a href="#destinasi" class="footer-link">Jogjakarta</a>
          </li>

          <li>
            <a href="#destinasi" class="footer-link">Wonosobo</a>
          </li>

          <li>
            <a href="#destinasi" class="footer-link">Purwokerto</a>
          </li>

        </ul>

        <ul class="footer-list">

          <li>
            <p class="footer-list-title">Categories</p>
          </li>

          <li>
            <a href="#" class="footer-link">Travel</a>
          </li>

          <li>
            <a href="#" class="footer-link">Package</a>
          </li>

          <li>
            <a href="#" class="footer-link">Education</a>
          </li>

          <li>
            <a href="#" class="footer-link">Food & Drink</a>
          </li>

        </ul>

        <ul class="footer-list">

          <li>
            <p class="footer-list-title">Quick links</p>
          </li>

          <li>
            <a href="#Aboutme" class="footer-link">About</a>
          </li>

          <li>
            <a href="https://wa.me/+6285173240443" class="footer-link">Contact</a>
          </li>

          <li>
            <a href="trayek" class="footer-link">Pesan Tiket</a>
          </li>

          <li>
            <a href="paket.html" class="footer-link">Lacak Paket</a>
          </li>

        </ul>

        <div class="footer-list">

          <p class="footer-list-title">Get a newsletter</p>

          <p class="newsletter-text">
            For the latest deals and tips, travel no further than your inbox
          </p>

          <form action="" class="newsletter-form">
            <input type="email" name="email" required placeholder="Email address" class="newsletter-input">

            <button type="submit" class="btn btn-primary">Subscribe</button>
          </form>

        </div>

      </div>

      <div class="footer-bottom">

        <a href="#" class="logo">JogloSemar</a>

        <p class="copyright">
          &copy; 2022 <a href="#" class="copyright-link">JogloSemar</a>. All Rights Reserved
        </p>

        <ul class="social-list">

          <li>
            <a href="#" class="social-link">
              <ion-icon name="logo-facebook"></ion-icon>
            </a>
          </li>

          <li>
            <a href="#" class="social-link">
              <ion-icon name="logo-twitter"></ion-icon>
            </a>
          </li>

          <li>
            <a href="#" class="social-link">
              <ion-icon name="logo-instagram"></ion-icon>
            </a>
          </li>

          <li>
            <a href="#" class="social-link">
              <ion-icon name="logo-linkedin"></ion-icon>
            </a>
          </li>

          <li>
            <a href="#" class="social-link">
              <ion-icon name="logo-google"></ion-icon>
            </a>
          </li>

        </ul>

      </div>

    </div>
  </footer>

@endsection


