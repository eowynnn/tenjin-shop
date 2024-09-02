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
    <div class="transition transition-2 is-active"></div>
    <x-navbar></x-navbar>
    <main>
      <section class="products section" id="new">
        <h2 class="products__title" id="deskmat">Semua Products</h2>
        <hr>
        <ul class="cards-new__container">
            @foreach ($products as $pr)
            <a class="cards__item" href="/product/{{$pr['slug']}}">
              <div class="card">
                <div class="card__image card__image--fence">
                  <img src="{{ asset('storage/'.$pr->image) }}" alt="" />
                </div>
                <div class="card__content">
                  <div class="card__title">{{$pr['short_name']}}</div>
                  <p class="card__price">{{$pr['price']}}.Rp</p>
                </div>
              </div>
            </a>
            @endforeach
        </ul>
        <hr>
        </ul>
      </section>
      <footer id="contact">
        <div class="footer__home">
          <p>&copy; 2024,
            <a href="https://www.tenjin.style/" target="_blank">Tenjin Style & Scrollworks</a> ,
            <a href="https://www.instagram.com/rxdan._/" target="_blank">rxdan</a>
          </p>
        </div>
      </footer>
    </main>
    <script src="assets/js/swiper-bundle.min.js"></script>
    <script src="assets/js/main.js"></script>
  </body>
</html>
