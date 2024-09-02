<div class="modal__profil" id="m__drp">
    <form action="/logout" method="POST">
        <div class="modal__item-prf">
            @csrf
            <button class="modal__btn-prf" type="submit">Logout <i class="ri-logout-box-line"></i></button>
            @can('admin')
            <a class="modal__btn-prf" href="/dashboard">Dashboard <i class="ri-dashboard-line"></i></a>
            @endcan
            <a href="#m__a" class="link-2 cls__btns"><i class="ri-close-line"></i></a>
        </div>
    </form>
</div>
</div>
