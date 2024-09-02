<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" href="assets/img/facicon.ico" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/3.5.0/remixicon.css"
      crossorigin=""
    />
    <link rel="stylesheet" href="assets/css/swiper-bundle.min.css" />
    <link rel="stylesheet" href="assets/css/styles.css" />
    <title>TENJIN</title>
  </head>
  <body>
    <x-contact></x-contact>
    <x-profile></x-profile>
    <div class="transition transition-3 is-active"></div>
    <x-navbar></x-navbar>
    <main>
      <section class="home">
        <div class="home__container container">
          <div class="home__data">
            <h2 class="home__subtitle">Selamat Datang</h2>
            <h1 class="home__title">
              TENJIN <br />
              INDONESIA <br />
            </h1>
            <p class="home__description">
              Merek gaya hidup yang terinspirasi dari Jepang yang lahir dari
              kehebatan kolaboratif dan aspirasi yang membara. Kami bertujuan
              untuk menghadirkan pilihan barang-barang yang dibuat dengan indah
              untuk membantu penampilan Anda sehari-hari.
            </p>
            <a
              href="https://www.tenjin.style/"
              target="_blank"
              class="home__button"
              >Situs Resmi</a
            >
          </div>
          <div class="home__images">
            <div class="home__swiper swiper">
              <div class="swiper-wrapper">
                <article class="home__article swiper-slide">
                  <img src="assets/img/1.jpg" alt="" class="home__banner" />
                </article>
                <article class="home__article swiper-slide">
                  <img src="assets/img/2.jpg" alt="" class="home__banner" />
                </article>
              </div>
            </div>
            <div class="swiper-pagination"></div>
          </div>
          <div class="home__social">
            <a
              href="https://discord.com/invite/Dm2wYjWbvH"
              target="_blank"
              class="home__social-link"
            >
              <i class="ri-discord-line"></i>
            </a>
            <a
              href="https://www.instagram.com/tenjin.scrollworks/" target="_blank"
              class="home__social-link"
            >
              <i class="ri-instagram-line"></i>
            </a>
            <a
              href="https://www.youtube.com/@tenjinscrollworks"
              target="_blank"
              class="home__social-link"
            >
              <i class="ri-youtube-line"></i>
            </a>
          </div>
        </div>
      </section>
      <section class="new section" id="new">
        <h2 class="section__title">Terbaru</h2>
        <ul class="cards-new__container">
            @foreach ($products as $pr)
            <a class="cards__item" href="/product/{{$pr['slug']}}">
              <div class="card">
                <div class="card__image card__image--fence">
                  <img src="{{ asset('storage/'.$pr->image) }}" alt="">
                </div>
                <div class="card__content">
                  <div class="card__title">{{$pr['short_name']}}</div>
                  <p class="card__price">
                    {{$pr['price']}}.Rp
                  </p>
                </div>
              </div>
            </a>
            @endforeach
        </ul>
        <div class="btn__view-all">
          <a href="/all-product">View All</a>
        </div>
      </section>
      <section class="new section">
        <div class="community__banner">
          <img src="assets/img/com/ss4 (1).jpg" alt="">
        </div>
      </section>
      <x-footer></x-footer>
    </main>
    <script src="assets/js/swiper-bundle.min.js"></script>
    <script src="assets/js/main.js"></script>
  </body>
</html>
