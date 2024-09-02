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
    <div class="transition transition-2 is-active"></div>
    <div class="transition"></div>
    <x-navbar></x-navbar>
    <main>
      <section class="home">
        <div class="home__container container">
          <div class="home__data">
            <!-- <h2 class="home__subtitle">TENJIN</h2> -->
            <h1 class="home__title">
              Welcome <br />
              Back <br />
            </h1>
            <p class="home__description">New in Tenjin?</p>
            <a href="/regist" class="home__button">Sign Up</a>
          </div>
          <div class="home__images">
            <div class="home__swiper">
              <div class="swiper-wrapper">
                  <form action="/login" method="POST" class="log__form">
                    @csrf
                  <h2 class="home__title">Sign In</h2>
                  <div class="input-field @error('username')
                  salah
                  @enderror">
                    <i class="ri-user-line"></i>
                    <input type="text" placeholder="Username" name="username" required value="{{ old('username') }}" autofocus/>
                  </div>
                  <div class="input-field @error('password')
                  salah
                  @enderror">
                    <i class="ri-lock-line"></i>
                    <input type="password" placeholder="Password" name="password" required/>
                  </div>
                  <input type="submit" value="Login" class="log__btn solid" />
                </form>
              </div>
            </div>
            <div class="swiper-pagination"></div>
          </div>
        </div>
      </section>
    </main>
    <script src="assets/js/swiper-bundle.min.js"></script>
    <script src="assets/js/main.js"></script>
  </body>
</html>
