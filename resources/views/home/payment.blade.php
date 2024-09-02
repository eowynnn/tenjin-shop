<x-structure></x-structure>
    <x-contact></x-contact>
    <x-navbar></x-navbar>
    <x-profile></x-profile>
    <main>
      <section class="payment-section">
        <div class="pay-container">
            <div class="payment-wrapper">
                {{-- <div class="payment-left">
                    <div class="payment-header">
                        <div class="payment-header-icon"><img src="{{ asset('assets/img/facicon.ico') }}" alt=""></i></div>
                        <div class="payment-header-title">Tenjin Order</div>
                        <p class="payment-header-description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi unde laudantium tempora cum. Vero.</p>
                    </div>
                    <div class="payment-content">
                        <div class="payment-body">
                            <div class="payment-plan">
                                <img src="{{ asset('assets/img/new/new1.jpg') }}" alt="" class="payment-plan-type">
                                <div class="payment-plan-info">
                                    <div class="payment-plant-info-name">Battle of Queen</div>
                                    <div class="payment-plant-info-price">400000.Rp per Item</div>
                                </div>
                            </div>
                            <div class="payment-summary">
                                <div class="payment-summary-item">
                                    <div class="payment-summary-name">Quantity</div>
                                    <div class="payment-summary-price">3</div>
                                </div>
                                <div class="payment-summary-devider"></div>
                                <div class="payment-summary-item payment-summary-total">
                                    <div class="payment-summary-name">Total</div>
                                    <div class="payment-summary-price">400000.Rp</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> --}}
                <div class="payment-right">
                    <form action="/{{$product['slug']}}/payment" method="POST" class="payment-form">
                        @csrf
                        <input type="text" value="{{ $product['name_product'] }}" class="ilang" name="product">
                        <h1 class="payment-title">Payment Methode</h1>
                        <div class="payment-method">
                            <input type="radio" name="payment_method" id="method-1" name="method_payment" value="dana">
                            <label for="method-1" class="payment-method-item">
                                <img src="{{ asset('assets/img/payment/1200px-Logo_dana_blue.svg.png') }}" alt="">
                            </label>
                            <input type="radio" name="payment_method" id="method-2" name="method_payment" value="gopay">
                            <label for="method-2" class="payment-method-item">
                                <img src="{{ asset('assets/img/payment/logo-gopay-vector.png') }}" alt="">
                            </label>
                        </div>
                        <div class="payment-form-group">
                            <input type="text" placeholder=" " class="payment-form-control" id="name" name="name" required>
                            <label for="name" class="payment-form-label payment-form-label-requierd">Nama Lengkap</label>
                        </div>
                        <div class="payment-form-group">
                            <input type="number" placeholder=" " class="payment-form-control" id="telfon" name="no_hp" required>
                            <label for="telfon" class="payment-form-label payment-form-label-requierd">No Telepon</label>
                        </div>
                        <div class="payment-form-group">
                            <input type="text" placeholder=" " class="payment-form-control" id="alamat" name="alamat" required>
                            <label for="alamat" class="payment-form-label payment-form-label-requierd">Alamat</label>
                        </div>
                        <div class="payment-form-group">
                            <h1 style="color: black;">Jumlah</h1>
                            <div class="quantity">
                                <button id="minus" type="button" class="minus qty_count qty-count--minus">
                                    -
                                </button>
                                <input id="theInput" type="number" class="input-text qty__input"
                                    min="0" max="10" value="1" step="1" name="jumlah"/>
                                <button id="plus" class="plus qty_count qty-count--plus" type="button">
                                    +
                                </button>
                            </div>
                        </div>
                        <button type="submit" class="payment-form-submit-button"><i class="ri-wallet-line"></i> Order</button>
                    </form>
                </div>
            </div>
        </div>
      </section>
    </main>
    <script src="assets/js/swiper-bundle.min.js"></script>
    <script src="assets/js/main.js"></script>
    <script>
        var input = document.getElementById("theInput");
        document.getElementById("plus").onclick = function() {
            input.value = parseInt(input.value, 10) + 1;
        };
        document.getElementById("minus").onclick = function() {
            input.value = parseInt(input.value, 10) - 1;
        };
    </script>
  </body>
</html>
