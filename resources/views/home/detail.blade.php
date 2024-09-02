<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" href="{{ asset('assets/img/facicon.ico') }}" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/3.5.0/remixicon.css" crossorigin="" />
    <link rel="stylesheet" href="{{ url('/') }}/assets/css/swiper-bundle.min.css" />
    <link rel="stylesheet" href="{{ url('/') }}/assets/css/styles.css" />
    <title>TENJIN</title>
</head>

<body>
    <x-contact></x-contact>
    <x-profile></x-profile>
    <div class="transition transition-2 is-active"></div>
    <x-navbar></x-navbar>
    <main>
        <section class="detail">
            <div class="detail__container container">
                <ul class="detail-img__container">
                    <li class="detail__item">
                        <div class="detail__imgs">
                            <div class="detail__image card__image--fence">
                                <img src="{{ asset('storage/'.$product->image) }}" alt="" />
                            </div>
                            {{-- <div class="detail__image2 card__image--fence">
                                <img src="{{ url('/') }}/assets/img/new/{{ $product['mockup_1'] }}"
                                    alt="" />
                            </div>
                            <div class="detail__image3 card__image--fence">
                                <img src="{{ url('/') }}/assets/img/new/{{ $product['mockup_2'] }}"
                                    alt="" />
                            </div> --}}
                        </div>
                    </li>
                </ul>
                <div class="detail__data">
                    <h2 class="detail__subtitle">TENJIN STYLE & SCROLLWORKS</h2>
                    <h1 class="detail__title">
                        {{ $product['name_product'] }}
                    </h1>
                    <p class="detail__price">{{ $product['price'] }}.Rp</p>
                    <p class="detail__stock">Stock : {{ $product['stok'] }}</p>
                    <div class="detail__quantity">
                        {{-- <p>Jumlah</p>
                        <div class="quantity">
                            <button id="minus" type="button" class="minus qty_count qty-count--minus">
                                -
                            </button>
                            <input id="theInput" type="number" size="4" class="input-text qty__input"
                                min="0" max="10" value="1" step="1" />
                            <button id="plus" class="plus qty_count qty-count--plus" type="button">
                                +
                            </button>
                        </div> --}}
                    </div>
                    <div class="buy__btn">
                        <a href="/{{$product['slug']}}/payment">Beli sekarang</a>
                    </div>
                    <div class="detail__desk">
                        <p>
                            {{ $product['deskripsi'] }}
                        </p>
                    </div>
                    <div class="feature__detail">
                        <p>Fitur:</p>
                        <ul>
                            <li>90 x 40 x 0,4cm</li>
                            <li>Atasan kain halus</li>
                            <li>Tepi dijahit</li>
                            <li>Bagian bawah berbahan karet, anti slip</li>
                            <li>Permukaan kedap air</li>
                            <li>Sertifikat Keaslian (XXX/150)</li>
                            <li>Seasonal Sticker</li>
                            <li>Artistic Phone Wallpaper</li>
                        </ul>
                    </div>
                    <div class="detail__desk">
                        <p>
                            Penyusutan ±1-2cm masih dalam toleransi karena proses kain &
                            bahan. Produk sebenarnya mungkin memiliki sedikit perbedaan
                            tampilan karena kondisi pencahayaan dan variabel lainnya.
                        </p>
                    </div>
                </div>
            </div>
        </section>
        <section class="new section">
            <div class="community__banner">
                <img src="assets/img/com/ss4 (1).jpg" alt="" />
            </div>
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
    <script src="{{ url('/') }}/assets/js/swiper-bundle.min.js"></script>
    <script>
        var input = document.getElementById("theInput");
        document.getElementById("plus").onclick = function() {
            input.value = parseInt(input.value, 10) + 1;
        };
        document.getElementById("minus").onclick = function() {
            input.value = parseInt(input.value, 10) - 1;
        };
    </script>
    <script src="{{ url('/') }}/assets/js/main.js"></script>
</body>

</html>
