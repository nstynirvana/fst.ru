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
                                    <a href="tel:+78652977446"><? $APPLICATION->IncludeFile($APPLICATION->GetTemplatePath("/include/area/mobile-phone.php"), array(), array("MODE" => "html")); ?></a>
                                    <a href="mailto:sales@fst-klinker.ru"><? $APPLICATION->IncludeFile($APPLICATION->GetTemplatePath("/include/area/email.php"), array(), array("MODE" => "html")); ?></a>
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
            <div class="contacts-adress"><span>АДРЕС</span> <? $APPLICATION->IncludeFile($APPLICATION->GetTemplatePath("/include/area/address.php"), array(), array("MODE" => "html")); ?></div>
            <div class="yandex-map">
                <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A58de9cdf03110dbf94771655f458e0674c72d08fc9cec8dd2cd1657d118409c2&amp;width=100%25&amp;height=350&amp;lang=ru_RU&amp;scroll=true"></script>
            </div>
        </div>
    </section>




<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>