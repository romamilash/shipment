<footer>
    <div class="top-footer">
        <div class="container d-flex justify-content-between align-items-center">
            <div class="top-footer__logo">
                <img src="<?=SITE_TEMPLATE_PATH?>/img/Logo-Footer.svg" alt="Спецметалл Трейд">
                <span>Комлексные поставки <br> металлопроката по РФ</span>
            </div>
            <div class="top-footer__email">
                <a href="mailto:info@smetall_trade">info@smetall_trade</a>
            </div>
            <div class="top-footer__phones">
                <div>
                    <a href="tel:8 (347) 225-10-20">8 (347) 225-10-20</a>
                    <span class="text-center">Ответим в течение 30 мин</span>
                </div>
                <div>
                    <a class="text-end" href="tel:8 800 55-11-208">8 800 55-11-208</a>
                    <span class="text-end">Бесплатно по РФ</span>
                </div>
            </div>
        </div>
        <div class="container d-flex justify-content-between">
            <div class="top-footer__menu">
                <h3>Каталог</h3>
                <ul>
                    <li>
                        <a href="#">Трубный прокат</a>
                    </li>
                    <li>
                        <a href="#">Нержавеющий прокат</a>
                    </li>
                    <li>
                        <a href="#">Листовой прокат</a>
                    </li>
                    <li>
                        <a href="#">Цветной прокат</a>
                    </li>
                    <li>
                        <a href="#">Металлопрокат</a>
                    </li>
                    <li>
                        <a href="#">Спецстали</a>
                    </li>
                    <li>
                        <a href="#">Спецпредложение</a>
                    </li>
                </ul>
            </div>
            <div class="top-footer__menu">
                <h3>Услуги</h3>
                <ul>
                    <li>
                        <a href="#">Абразивная резка</a>
                    </li>
                    <li>
                        <a href="#">Газовая резка</a>
                    </li>
                    <li>
                        <a href="#">Гибка металла</a>
                    </li>
                    <li>
                        <a href="#">Гидроабразивная резка</a>
                    </li>
                    <li>
                        <a href="#">Горячее цинкование</a>
                    </li>
                    <li>
                        <a href="#">Лазерная резка</a>
                    </li>
                    <li>
                        <a href="#">Металлообработка</a>
                    </li>
                </ul>
            </div>
            <div class="top-footer__menu">
                <h3>Компания</h3>
                <ul>
                    <li>
                        <a href="#">О компании</a>
                    </li>
                    <li>
                        <a href="#">Отрузки</a>
                    </li>
                    <li>
                        <a href="#">Доставка и оплата</a>
                    </li>
                    <li>
                        <a href="#">Контакты</a>
                    </li>
                    <li>
                        <a href="#">Пользовательское соглашение</a>
                    </li>
                </ul>
            </div>
            <div class="top-footer__menu">
                <h3>Контакты</h3>
                <p>ООО «Спецметалл-Трейд»</p>
                <h4>Ваш филиал:</h4>
                <span>г.Уфа</span>
                <h4>Адрес:</h4>
                <span>Республика Башкортостан, г. Уфа, <br> ул. Ленина, д. 70, 7 этаж, каб. 701</span>
            </div>
        </div>
    </div>
    <div class="bottom-footer">
        <div class="container bottom-footer">
            <p>(С) 2022 Спецметалл-Трейд</p>
            <p><a href="#">Сайткрафт</a> - маркетинг на промышленном рынке</p>
        </div>
    </div>
</footer>
</body>
<div class="mobile-menu" id="navbarNav">
    <ul class="navbar-nav">
        <li class="nav-item">
            <a href="/about">О компании</a>
        </li>
        <li class="nav-item">
            <a href="/services">Услуги</a>
        </li>
        <li class="nav-item">
            <a href="/shipment">Отгрузки</a>
        </li>
        <li class="nav-item">
            <a href="/delivery">Доставка и оплата</a>
        </li>
        <li class="nav-item">
            <a href="/contacts">Контакты</a>
        </li>
    </ul>
    <span id="close_menu">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-lg"
             viewBox="0 0 16 16">
            <path d="M2.146 2.854a.5.5 0 1 1 .708-.708L8 7.293l5.146-5.147a.5.5 0 0 1 .708.708L8.707 8l5.147 5.146a.5.5 0 0 1-.708.708L8 8.707l-5.146 5.147a.5.5 0 0 1-.708-.708L7.293 8 2.146 2.854Z"/>
        </svg>
    </span>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>

<script>
    const myCollapse = document.getElementById('navbarNav');
    const hideButton = document.getElementById('close_menu');

    hideButton.addEventListener('click', () => {
        myCollapse.classList.remove("show");
    })
</script>
</html>