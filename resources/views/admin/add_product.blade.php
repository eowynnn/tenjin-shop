<x-structure></x-structure>
    <x-contact></x-contact>
    <x-navbar></x-navbar>
    <x-profile></x-profile>
    <main>
      <section class="payment-section">
        <div class="pay-container">
            <div class="payment-wrapper">
                <div class="payment-right">
                    <form action="/dashboard/product-add" method="POST" class="payment-form" enctype="multipart/form-data">
                        @csrf
                        <h1 class="payment-title">Tambah Product</h1>
                        <div class="payment-form-group @error('name_product')
                        salah
                        @enderror">
                            <input type="text" placeholder=" " class="payment-form-control" id="name" name="name_product" required value="{{old('name_prodcut')}}">
                            <label for="name" class="payment-form-label payment-form-label-requierd">Nama Product</label>
                        </div>
                        <div class="payment-form-group @error('short_name')
                        salah
                        @enderror">
                            <input type="text" placeholder=" " class="payment-form-control" id="short" name="short_name" required value="{{old('short_name')}}">
                            <label for="short" class="payment-form-label payment-form-label-requierd">Nama Tampilan</label>
                        </div>
                        <div class="payment-form-group @error('slug')
                        salah
                        @enderror">
                            <input type="text" placeholder=" " class="payment-form-control" id="slugs" name="slug" required value="{{old('slug')}}">
                            <label for="slugs" class="payment-form-label payment-form-label-requierd">Slug</label>
                        </div>
                        <div class="payment-form-group @error('deskripsi')
                        salah
                        @enderror">
                            <input type="text" placeholder=" " class="payment-form-control" id="desk" name="deskripsi" required value="{{old('deskripsi')}}">
                            <label for="desk" class="payment-form-label payment-form-label-requierd">Deskripsi</label>
                        </div>
                        <div class="payment-form-group @error('image')
                        salah
                        @enderror">
                            <input type="file" placeholder=" " class="payment-form-control" id="imgs" name="image" required value="{{old('image')}}" onchange="priviewImage()">
                            <label for="imgs" class="payment-form-label payment-form-label-requierd">Gambar Tampilan</label>
                            </div>
                        <img class="img_priviews">
                        <div class="payment-form-group @error('price')
                        salah
                        @enderror">
                            <input type="number" placeholder=" " class="payment-form-control" id="price" name="price" required value="{{old('price')}}">
                            <label for="price" class="payment-form-label payment-form-label-requierd">Harga</label>
                        </div>
                        <div class="payment-form-group @error('stok')
                        salah
                        @enderror">
                            <input type="number" placeholder=" " class="payment-form-control" id="st" name="stok" required value="{{old('stok')}}">
                            <label for="st" class="payment-form-label payment-form-label-requierd">Stock</label>
                        </div>
                        @error('name_producr')
                            <p>{{$message}}</p>
                        @enderror
                        @error('short_name')
                            <p>{{$message}}</p>
                        @enderror
                        @error('deskripsi')
                            <p>{{$message}}</p>
                        @enderror
                        @error('slug')
                            <p>{{$message}}</p>
                        @enderror
                        @error('image')
                            <p>{{$message}}</p>
                        @enderror
                        @error('price')
                            <p>{{$message}}</p>
                        @enderror
                        @error('stok')
                            <p>{{$message}}</p>
                        @enderror
                        <button type="submit" class="payment-form-submit-button"><i class="ri-save-line"></i> Simpan</button>
                        <a href="/dashboard">Kembali ke dashboard</a>
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
        function priviewImage(){
            const image = document.querySelector('#imgs');
            const imgPriview = document.querySelector('.img_priviews');

            imgPriview.style.display = 'block';

            const oFReader = new FileReader();
            oFReader.readAsDataURL(image.files[0]);
            oFReader.onload = function(oFREvent){
                imgPriview.src = oFREvent.target.result;
            }
        }
    </script>
  </body>
</html>
