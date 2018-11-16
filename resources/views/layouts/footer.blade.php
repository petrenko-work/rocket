<footer>
    <div class="container">
        <div class="footer-content">
            <p class="copyright">Copyright © 2014. <a target="_blank" href="/">rocketpromo.com.ua</a><span>{{ $settings->copyright }}</span><span>Дизайн и разработка <a target="_blank" href="http://imagineering.studio/">imagineering.studio</a></span></p>
            <div class="footer-contacts">
                <a href="tel:{{ $settings->phone }}" class="tel-footer">{{ $settings->phone }}</a>
                <a name="RocketPromo" class="address-footer">{{ $settings->address }}</a>
            </div>
            <ul class="social-footer">
                <li><a href="viber://chat?number=+38{{ $settings->phone }}" class="viber"></a></li>
                <li><a href="whatsapp://send?phone=+38{{ $settings->phone }}" class="whatsapp"></a></li>
            </ul>
        </div>
    </div>
</footer>
