<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" href="assets/img/facicon.ico" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/3.5.0/remixicon.css" crossorigin="" />
    <link rel="stylesheet" href="assets/css/swiper-bundle.min.css" />
    <link rel="stylesheet" href="assets/css/styles.css" />
    <title>TENJIN</title>
</head>

<body>
    <div class="transition transition-2 is-active"></div>
    <div class="transition"></div>
    <x-navbar></x-navbar>
    <main>
        <section class="home">
            <div class="home__container container">
                <div class="home__data">
                    <h1 class="home__title">
                        Welcome <br />
                        to TENJIN <br />
                    </h1>
                    <p class="home__description">New in Tenjin?</p>
                    <a href="/login" class="home__button">Sign In</a>
                </div>
                <div class="home__images">
                    <div class="home__swiper">
                        <div class="swiper-wrapper">
                            <form action="/regist" method="POST" class="log__form">
                                @csrf
                                <div
                                    class="input-field @error('name')
                  salah
                  @enderror ">
                                    <i class="ri-user-line"></i>
                                    <input type="text" placeholder="Name" name="name" required
                                        value="{{ old('name') }}" />
                                </div>
                                <div
                                    class="input-field @error('username')
                  salah
                  @enderror">
                                    <i class="ri-user-line"></i>
                                    <input type="text" placeholder="Username" name="username" required
                                        value="{{ old('username') }}" />
                                </div>
                                <div
                                    class="input-field @error('email')
                  salah
                  @enderror">
                                    <i class="ri-at-line"></i>
                                    <input type="email" placeholder="Email" name="email" required
                                        value="{{ old('email') }}" />
                                </div>
                                <div
                                    class="input-field @error('password')
                  salah
                  @enderror">
                                    <i class="ri-lock-line"></i>
                                    <input type="password" placeholder="Password" name="password" required />
                                </div>
                                <input type="submit" value="Login" class="log__btn solid" />
                            </form>
                        </div>
                        @error('name')
                            <p>{{ $message }}</p>
                        @enderror
                        @error('username')
                            <p>{{ $message }}</p>
                        @enderror
                        @error('email')
                            <p>{{ $message }}</p>
                        @enderror
                        @error('password')
                            <p>{{ $message }}</p>
                        @enderror
                    </div>
                </div>
            </div>
        </section>
    </main>
    <script src="assets/js/swiper-bundle.min.js"></script>
    <script src="assets/js/main.js"></script>
</body>

</html>
