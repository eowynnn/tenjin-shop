<div class="modal-container" id="m1-o">
    <form action="/contact" method="POST">
        <div class="modal">
            <h1 class="modal__title">Contact</h1>
            @csrf
            <h1 class="modal__text">Email</h1>
            <input type="email" class="input__modal" name="email">
            <h1 class="modal__text">Massage</h1>
            <input type="text" class="input__modal-msg" name="massage">
        </div>
        <button class="modal__btn" type="submit">Submit &rarr;</button>
        <a href="#m1-c" class="link-2 cls__btn"><i class="ri-close-line"></i></a>
    </form>
</div>
</div>
