<header class="{{ Request::is('/') ? 'header headerLarge' : 'headerMin'}}">
    <div class="container">

        @if(Request::is('/'))
            <h1 class="logo"><a href="/">Rocket Promo</a></h1>
        @else
            <div class="logoMin">
                <a href="/">
                    <img src="/images/logoMin.png" alt="Rocket Promo">
                </a>
            </div>
        @endif

        <nav class="nav">
            <button class="mobileButton">
                <span class="buttonFirstLine"></span>
                <span class="buttonSecondLine"></span>
                <span class="buttonThirdLine"></span>
            </button>
            <ul class="mainNavList">
                <li><a href="/">главная</a></li>
                <li><a href="/blog">блог</a></li>
                <li><a href="/about">о нас</a></li>
                <li><a href="/">реклама</a></li>
                <li><a href="/contacts">контакты</a></li>
            </ul>
        </nav>
    </div>
</header>