<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetPageProperty("description", "Доставка по всей России. Площадь одного модуля 0,47 м². Площадь модулей в одной коробке 5,17 м². В одной коробке 11 модулей. До 24 коробок на одном европоддоне.");
$APPLICATION->SetTitle("Доставка — FST-KLINKER");
?>

    <section class="section section-content-page">
        <div class="wrapper-inside">
            <div class="content-page-container">
                <div class="content-page-left content-page-left_delivery">
                    <div class="breadcrumbs-list">
                        <? include($_SERVER['DOCUMENT_ROOT'] . "/include/template/breadcrumb.php"); ?>
                    </div>
                    <div class="calculator-title"><h1><? $APPLICATION->IncludeFile($APPLICATION->GetTemplatePath("/include/area/delivery-title.php"), array(), array("MODE" => "html")); ?></h1></div>
                    <div class="separate-line"></div>
                    <div class="product-item-text">
                        <p><? $APPLICATION->IncludeFile($APPLICATION->GetTemplatePath("/include/area/delivery-about.php"), array(), array("MODE" => "html")); ?></p>
                    </div>
                    <div class="content-block-btn lg-view">
                        <a href="#deliveryForm" class="btn btn-primary">Рассчитать стоимость</a>
                    </div>
                </div>
                <div class="content-page-right">
                    <div class="content-picture-block">
                        <div class="picture-block">
                            <img src="/img/delivery-page-pic.jpg" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <div class="content-block-btn xs-view">
                <a href="#deliveryForm" class="btn btn-primary">Рассчитать стоимость</a>
            </div>
        </div>
    </section>

    <section class="section section-delivery">
        <div class="wrapper-inside">
            <div class="delivery-block-container">
                <div class="delivery-block-left">
                    <? $APPLICATION->IncludeFile($APPLICATION->GetTemplatePath("/include/area/delivery-list.php"), array(), array("MODE" => "html")); ?>
                </div>
                <div class="delivery-block-right">
                    <ul>
                        <? $APPLICATION->IncludeFile($APPLICATION->GetTemplatePath("/include/area/delivery-info.php"), array(), array("MODE" => "html")); ?>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section class="section section-feedback">
        <div class="wrapper-inside">
            <div class="feedback-container">
                <div class="feedback-picture">
                    <img src="/img/feedback-pic-3.jpg" class="lg-view" alt="" />
                    <img src="/img/feedback-pic-mobile-3.jpg" class="xs-view" alt="" />
                </div>
                <div class="feedback-form-container">
                    <div class="calculator-container">
                        <div class="calculator-title">рассчитайте доставку</div>
                        <div class="separate-line"></div>
                        <div class="calculator-container-desc">
                            Наш логист подберёт самый оптимальный вариант доставки
                        </div>
                        <div class="calculator">
                            <form class="ajax-form-send" name="form-delivery" data-formtype="form-delivery" id="deliveryForm" action="">
                                <input type="hidden" name="form-delivery" id="form-delivery"/>
                                <div class="form-item-line">
                                    <div class="form-item-one width-100">
                                        <label>Имя и Фамилия</label>
                                        <input type="text" id="user-name" name="user-name" required />
                                    </div>
                                </div>
                                <div class="form-item-line">
                                    <div class="form-item-one width-100">
                                        <label>Номер телефона</label>
                                        <input class="phoneNumber" type="text" id="user-phone" name="user-phone" required />
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
                                    <button type="submit" class="btn btn-primary">Отправить</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>