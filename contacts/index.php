<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetPageProperty("description", "Доставка по всей России. Площадь одного модуля 0,47 м². Площадь модулей в одной коробке 5,17 м². В одной коробке 11 модулей. До 24 коробок на одном европоддоне.");
$APPLICATION->SetTitle("Контакты — FST-KLINKER");
?>

    <section class="section section-content-page">
        <div class="wrapper-inside">
            <div class="content-page-container">
                <div class="content-page-left">
                    <div class="breadcrumbs-list">
                        <? include($_SERVER['DOCUMENT_ROOT'] . "/include/template/breadcrumb.php"); ?>
                    </div>
                    <div class="calculator-title"><h1>Контакты</h1></div>
                    <div class="separate-line"></div>
                    <div class="product-item-text">
                        <p><? $APPLICATION->IncludeFile($APPLICATION->GetTemplatePath("/include/area/about-us.php"), array(), array("MODE" => "html")); ?></p>
                    </div>
                    <div class="content-block-btn">
                        <a href="#application-form-classic" class="btn btn-form btn-primary">Связаться</a>
                    </div>
                </div>
                <div class="content-page-right">
                    <div class="content-text-block">

                        <div class="contacts-info">
                            <div class="contacts-info-block">
                                <div class="contacts-info-title">ГРАФИК РАБОТЫ</div>
                                <div class="contacts-info-desc">
                                    <? $APPLICATION->IncludeFile($APPLICATION->GetTemplatePath("/include/area/schedule.php"), array(), array("MODE" => "html")); ?>
                                </div>
                            </div>
                            <div class="contacts-info-block">
                                <div class="contacts-info-title">КОНТАКТЫ</div>
                                <div class="contacts-info-desc">
                                    <div class="diler__info">
                                        <img class="diler__icon" src="/img/phone-icon.png" alt="">
                                        <a href="tel:+78652977446"><? $APPLICATION->IncludeFile($APPLICATION->GetTemplatePath("/include/area/mobile-phone.php"), array(), array("MODE" => "html")); ?></a>
                                    </div>
                                    <div class="diler__info">
                                        <img class="diler__icon" src="/img/mail-icon.png" alt="">
                                        <a href="mailto:sales@fst-klinker.ru"><? $APPLICATION->IncludeFile($APPLICATION->GetTemplatePath("/include/area/email.php"), array(), array("MODE" => "html")); ?></a>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section section-contact-map">
        <div class="wrapper-inside">
            <div class="contacts-adress">
                <span>АДРЕС</span> <? $APPLICATION->IncludeFile($APPLICATION->GetTemplatePath("/include/area/address.php"), array(), array("MODE" => "html")); ?>
            </div>
            <div class="yandex-map">
                <script type="text/javascript" charset="utf-8" async
                        src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A58de9cdf03110dbf94771655f458e0674c72d08fc9cec8dd2cd1657d118409c2&amp;width=100%25&amp;height=350&amp;lang=ru_RU&amp;scroll=true"></script>
            </div>
        </div>
    </section>

    <section class="section dilers">
        <div class="wrapper-inside">
            <div class="dilers__title">Наши официальные дилеры в регионах:</div>
            <? $APPLICATION->IncludeComponent(
                "bitrix:news.list",
                "dilers-list",
                array(
                    "COMPONENT_TEMPLATE" => "dilers-list",
                    "IBLOCK_TYPE" => "infoblocks",
                    "IBLOCK_ID" => "6",
                    "NEWS_COUNT" => "20",
                    "SORT_BY1" => "ACTIVE_FROM",
                    "SORT_ORDER1" => "DESC",
                    "SORT_BY2" => "SORT",
                    "SORT_ORDER2" => "ASC",
                    "FILTER_NAME" => "",
                    "FIELD_CODE" => array(
                        0 => "",
                        1 => "",
                    ),
                    "PROPERTY_CODE" => array(
                        0 => "ADDRESS",
                        1 => "TOWN",
                        2 => "EMAIL",
                        3 => "NUMBER",
                        4 => "",
                    ),
                    "CHECK_DATES" => "Y",
                    "DETAIL_URL" => "",
                    "AJAX_MODE" => "N",
                    "AJAX_OPTION_JUMP" => "N",
                    "AJAX_OPTION_STYLE" => "Y",
                    "AJAX_OPTION_HISTORY" => "N",
                    "AJAX_OPTION_ADDITIONAL" => "",
                    "CACHE_TYPE" => "A",
                    "CACHE_TIME" => "36000000",
                    "CACHE_FILTER" => "N",
                    "CACHE_GROUPS" => "Y",
                    "PREVIEW_TRUNCATE_LEN" => "",
                    "ACTIVE_DATE_FORMAT" => "d.m.Y",
                    "SET_TITLE" => "N",
                    "SET_BROWSER_TITLE" => "N",
                    "SET_META_KEYWORDS" => "N",
                    "SET_META_DESCRIPTION" => "N",
                    "SET_LAST_MODIFIED" => "N",
                    "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
                    "ADD_SECTIONS_CHAIN" => "N",
                    "HIDE_LINK_WHEN_NO_DETAIL" => "N",
                    "PARENT_SECTION" => "",
                    "PARENT_SECTION_CODE" => "",
                    "INCLUDE_SUBSECTIONS" => "Y",
                    "STRICT_SECTION_CHECK" => "N",
                    "DISPLAY_DATE" => "Y",
                    "DISPLAY_NAME" => "Y",
                    "DISPLAY_PICTURE" => "Y",
                    "DISPLAY_PREVIEW_TEXT" => "Y",
                    "PAGER_TEMPLATE" => ".default",
                    "DISPLAY_TOP_PAGER" => "N",
                    "DISPLAY_BOTTOM_PAGER" => "Y",
                    "PAGER_TITLE" => "Новости",
                    "PAGER_SHOW_ALWAYS" => "N",
                    "PAGER_DESC_NUMBERING" => "N",
                    "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
                    "PAGER_SHOW_ALL" => "N",
                    "PAGER_BASE_LINK_ENABLE" => "N",
                    "SET_STATUS_404" => "N",
                    "SHOW_404" => "N",
                    "MESSAGE_404" => ""
                ),
                false
            ); ?>
        </div>
    </section>

    <section class="section section-feedback">
        <div class="wrapper-inside">
            <div class="feedback-container">
                <div class="feedback-picture">
                    <img src="/img/feedback-pic.jpg" class="lg-view" alt=""/>
                    <img src="/img/feedback-pic-mobile.jpg" class="xs-view" alt=""/>
                </div>
                <div id="feedback" class="feedback-form-container">
                    <div class="calculator-container">
                        <h2 class="calculator-title">напишите нам, если у вас остались вопросы</h2>
                        <div class="separate-line"></div>
                        <div class="calculator-container-desc">
                            Фасадные панели из гибкого кирпича под ваш<br/> бюджет со сроком службы от 30 лет
                        </div>
                        <div class="calculator">
                            <form name="form-type-question" data-formtype="form-type-question" class="ajax-form-send"
                                  id="questionForm" action="">
                                <input type="hidden" name="form-type-question" value=""/>
                                <input type="hidden" id="yandex-metrika-id" name="yandex-metrika-id" value="">
                                <div class="form-item-line">
                                    <div class="form-item-one width-100">
                                        <label>Имя и Фамилия</label>
                                        <input type="text" maxlength="30" name="name-lastname" id="name-lastname"
                                               required/>
                                    </div>
                                </div>
                                <div class="form-item-line">
                                    <div class="form-item-one width-100">
                                        <label>Номер телефона</label>
                                        <input class="phoneNumber" type="text" name="phone" id="phone" required/>
                                    </div>
                                </div>
                                <div class="form-item-line">
                                    <div class="form-item-one width-100">
                                        <label for="message">Сообщение</label>
                                        <textarea name="message" id="message" required></textarea>
                                    </div>
                                </div>
                                <div class="form-item-line">
                                    <div class="form-item-one width-100">
                                        <div class="pseudo-check">
                                            <label id="myCheckbox">
                                                <input type="checkbox" name="politica" required/>
                                                <span class="checkbox"></span>
                                                <span class="checkbox-text">
                                                        Соглашаюсь на обработку <a href="/confidentiality/">персональных данных</a>
                                                    </span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="calc-btn">
                                    <button type="submit" class="btn btn-primary"
                                            onclick="ym(53915065,'reachGoal','price-send'); return true;">Отправить
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>