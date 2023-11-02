<?php
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Отгрузки");
?>

    <nav class="navigation">
        <div class="container">
            <ul class="breadcrumbs">
                <li>
                    <a href="/">Главная</a>
                </li>
                <li>
                    <span>Отгрузки</span>
                </li>
            </ul>
            <h2>Отгрузки</h2>
        </div>
    </nav>
    <main>
        <div class="container">

            <?$APPLICATION->IncludeComponent("bitrix:news", "shipment-news", Array(
                "ADD_ELEMENT_CHAIN" => "N",	// Включать название элемента в цепочку навигации
                "ADD_SECTIONS_CHAIN" => "Y",	// Включать раздел в цепочку навигации
                "AJAX_MODE" => "N",	// Включить режим AJAX
                "AJAX_OPTION_ADDITIONAL" => "",	// Дополнительный идентификатор
                "AJAX_OPTION_HISTORY" => "N",	// Включить эмуляцию навигации браузера
                "AJAX_OPTION_JUMP" => "N",	// Включить прокрутку к началу компонента
                "AJAX_OPTION_STYLE" => "Y",	// Включить подгрузку стилей
                "BROWSER_TITLE" => "-",	// Установить заголовок окна браузера из свойства
                "CACHE_FILTER" => "N",	// Кешировать при установленном фильтре
                "CACHE_GROUPS" => "Y",	// Учитывать права доступа
                "CACHE_TIME" => "36000000",	// Время кеширования (сек.)
                "CACHE_TYPE" => "A",	// Тип кеширования
                "CHECK_DATES" => "Y",	// Показывать только активные на данный момент элементы
                "DETAIL_ACTIVE_DATE_FORMAT" => "d.m.Y",	// Формат показа даты
                "DETAIL_DISPLAY_BOTTOM_PAGER" => "Y",	// Выводить под списком
                "DETAIL_DISPLAY_TOP_PAGER" => "N",	// Выводить над списком
                "DETAIL_FIELD_CODE" => array(	// Поля
                    0 => "",
                    1 => "",
                ),
                "DETAIL_PAGER_SHOW_ALL" => "Y",	// Показывать ссылку "Все"
                "DETAIL_PAGER_TEMPLATE" => "",	// Название шаблона
                "DETAIL_PAGER_TITLE" => "Страница",	// Название категорий
                "DETAIL_PROPERTY_CODE" => array(	// Свойства
                    0 => "",
                    1 => "",
                ),
                "DETAIL_SET_CANONICAL_URL" => "N",	// Устанавливать канонический URL
                "DISPLAY_BOTTOM_PAGER" => "Y",	// Выводить под списком
                "DISPLAY_DATE" => "Y",	// Выводить дату элемента
                "DISPLAY_NAME" => "Y",	// Выводить название элемента
                "DISPLAY_PICTURE" => "Y",	// Выводить изображение для анонса
                "DISPLAY_PREVIEW_TEXT" => "Y",	// Выводить текст анонса
                "DISPLAY_TOP_PAGER" => "N",	// Выводить над списком
                "HIDE_LINK_WHEN_NO_DETAIL" => "N",	// Скрывать ссылку, если нет детального описания
                "IBLOCK_ID" => "9",	// Инфоблок
                "IBLOCK_TYPE" => "news",	// Тип инфоблока
                "INCLUDE_IBLOCK_INTO_CHAIN" => "Y",	// Включать инфоблок в цепочку навигации
                "LIST_ACTIVE_DATE_FORMAT" => "d.m.Y",	// Формат показа даты
                "LIST_FIELD_CODE" => array(	// Поля
                    0 => "",
                    1 => "",
                ),
                "LIST_PROPERTY_CODE" => array(	// Свойства
                    0 => "",
                    1 => "",
                ),
                "MESSAGE_404" => "",	// Сообщение для показа (по умолчанию из компонента)
                "META_DESCRIPTION" => "-",	// Установить описание страницы из свойства
                "META_KEYWORDS" => "-",	// Установить ключевые слова страницы из свойства
                "NEWS_COUNT" => "20",	// Количество новостей на странице
                "PAGER_BASE_LINK_ENABLE" => "N",	// Включить обработку ссылок
                "PAGER_DESC_NUMBERING" => "N",	// Использовать обратную навигацию
                "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",	// Время кеширования страниц для обратной навигации
                "PAGER_SHOW_ALL" => "N",	// Показывать ссылку "Все"
                "PAGER_SHOW_ALWAYS" => "N",	// Выводить всегда
                "PAGER_TEMPLATE" => ".default",	// Шаблон постраничной навигации
                "PAGER_TITLE" => "Новости",	// Название категорий
                "PREVIEW_TRUNCATE_LEN" => "",	// Максимальная длина анонса для вывода (только для типа текст)
                "SEF_MODE" => "N",	// Включить поддержку ЧПУ
                "SET_LAST_MODIFIED" => "N",	// Устанавливать в заголовках ответа время модификации страницы
                "SET_STATUS_404" => "N",	// Устанавливать статус 404
                "SET_TITLE" => "Y",	// Устанавливать заголовок страницы
                "SHOW_404" => "N",	// Показ специальной страницы
                "SORT_BY1" => "ACTIVE_FROM",	// Поле для первой сортировки новостей
                "SORT_BY2" => "SORT",	// Поле для второй сортировки новостей
                "SORT_ORDER1" => "DESC",	// Направление для первой сортировки новостей
                "SORT_ORDER2" => "ASC",	// Направление для второй сортировки новостей
                "STRICT_SECTION_CHECK" => "N",	// Строгая проверка раздела
                "USE_CATEGORIES" => "N",	// Выводить материалы по теме
                "USE_FILTER" => "N",	// Показывать фильтр
                "USE_PERMISSIONS" => "N",	// Использовать дополнительное ограничение доступа
                "USE_RATING" => "N",	// Разрешить голосование
                "USE_REVIEW" => "N",	// Разрешить отзывы
                "USE_RSS" => "N",	// Разрешить RSS
                "USE_SEARCH" => "N",	// Разрешить поиск
                "USE_SHARE" => "N",	// Отображать панель соц. закладок
                "VARIABLE_ALIASES" => array(
                    "ELEMENT_ID" => "ELEMENT_ID",
                    "SECTION_ID" => "SECTION_ID",
                )
            ),
                false
            );?>

            <section class="customers">
                <div class="d-flex justify-content-between align-items-center">
                    <h2>Наши заказчики</h2>
                    <a href="#">
                        Все заказчики
                        <svg width="28" height="16" viewBox="0 0 28 16" fill="#FB4726" xmlns="http://www.w3.org/2000/svg">
                            <path d="M1 8H25" stroke="#FB4726" stroke-width="1.5" stroke-linecap="square" stroke-linejoin="round"/>
                            <path d="M21.3334 4L25.3334 8L21.3334 12" stroke="#FB4726" stroke-width="2" stroke-linecap="square" stroke-linejoin="round"/>
                        </svg>
                    </a>
                </div>
                <div class="customers-logo">
                    <img src="<?=SITE_TEMPLATE_PATH?>/img/logo_kalashnikov_koncern%202.jpg" alt="kalashnikov">
                    <img src="<?=SITE_TEMPLATE_PATH?>/img/logo_sukhoi%202.jpg" alt="sukhoi">
                    <img src="<?=SITE_TEMPLATE_PATH?>/img/logo_zio-podolsk%202.jpg" alt="zio-podolsk">
                    <img src="<?=SITE_TEMPLATE_PATH?>/img/logo_soedinitel%202.jpg" alt="soedinitel">
                    <img src="<?=SITE_TEMPLATE_PATH?>/img/logo_mig%202.jpg" alt="mig">
                    <img src="<?=SITE_TEMPLATE_PATH?>/img/logo_termodinamika%202.jpg" alt="termodinamika">
                    <img src="<?=SITE_TEMPLATE_PATH?>/img/logo_ural_ximmash%202.jpg" alt="ural_ximmash">
                    <img src="<?=SITE_TEMPLATE_PATH?>/img/logo_alabuga_volokno%202.jpg" alt="alabuga_volokno">
                    <img src="<?=SITE_TEMPLATE_PATH?>/img/logo_uomz%202.jpg" alt="uomz">
                    <img src="<?=SITE_TEMPLATE_PATH?>/img/logo_sukhoi%202.jpg" alt="sukhoi">
                </div>
            </section>
        </div>
        <section class="commercial-offer">
            <div class="container">
                <h2>Получить коммерческое предложение</h2>
                <div class="commercial-offer-form">
                    <div class="commercial-offer-form__left">
                        <p>Наш менеджер перезвонит в течение 30 минут <br> и предложит Вам лучший вариант.</p>
                        <ol>
                            <li>
                                <img src="<?=SITE_TEMPLATE_PATH?>/img/list.svg" alt="Подберем продукцию под Вашу заявку">
                                <span>Подберем продукцию под Вашу заявку</span>
                            </li>
                            <li>
                                <img src="<?=SITE_TEMPLATE_PATH?>/img/credit-card.svg" alt="Предложим оптимальные варианты доставки и оплаты">
                                <span>Предложим оптимальные варианты доставки и оплаты</span>
                            </li>
                            <li>
                                <img src="<?=SITE_TEMPLATE_PATH?>/img/edit-3.svg" alt="Произведем резку продукции согласно требованиям">
                                <span>Произведем резку продукции согласно требованиям</span>
                            </li>
                            <li>
                                <img src="<?=SITE_TEMPLATE_PATH?>/img/info.svg" alt="Постоянно информируем о ходе выполнения заявки">
                                <span>Постоянно информируем о ходе выполнения заявки</span>
                            </li>
                        </ol>
                    </div>
                    <form action="/" class="commercial-offer-form__right" enctype="multipart/form-data">
                        <input class="name" type="text" placeholder="Как к вам обращаться">
                        <input class="email" type="text" placeholder="Ваша почта">
                        <input class="phone" type="text" placeholder="Ваш телефон">
                        <textarea class="message" placeholder="Ваше сообщение"></textarea>
                        <a class="attachment" href="#">Прикрепить файл</a>
                        <button class="submit" type="submit">получить КП</button>
                    </form>
                </div>
            </div>
        </section>
    </main>


<?php
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>