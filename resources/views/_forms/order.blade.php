<div class="popupFormMask"></div>
<div class="popupForm">
    <button class="popupFormClose"></button>
    <h3 class="titlePop">ТАРИФНЫЙ ПАКЕТ "СТАНДАРТ"</h3>

    @if (session('error'))
        <div class="alert alert-danger">
            {{session('error')}}
        </div>
    @endif

    @if (session('success'))
        <div class="alert alert-success">
            form submitted successfully
        </div>
    @endif

    <form method="post" action="/inquiry">
        @csrf
        <input type="hidden" class="hidden-title">
        <input type="text" name="name" placeholder="Ваше имя">
        <input type="text" name="phone" placeholder="Ваш телефон">
        <input type="submit" value="заказать" >
    </form>
</div>

<div class="thanksPopup">
    <button class="popupFormClose"></button>
    <span>Спасибо за заказ!</span>
</div>