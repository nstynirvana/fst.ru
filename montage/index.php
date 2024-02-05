<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetPageProperty("description", "Видео инструкция по монтажу гибкого клинкера. Гибкая Клинкерная Плитка FST проста в применении и не требует специальных навыков при монтаже.");
$APPLICATION->SetTitle("Инструкция по монтажу гибкого клинкера FST");
?>

    <section class="section section-content-page">
        <div class="wrapper-inside">
            <div class="content-page-container">
                <div class="content-page-left">
                    <div class="breadcrumbs-list">
                        <? include($_SERVER['DOCUMENT_ROOT'] . "/include/template/breadcrumb.php"); ?>
                    </div>
                    <div class="calculator-title">
                        <h1><? $APPLICATION->IncludeFile($APPLICATION->GetTemplatePath("/include/area/montage-title.php"), array(), array("MODE" => "html")); ?></h1>
                    </div>
                    <div class="separate-line"></div>
                    <div class="product-item-text">
                        <p><? $APPLICATION->IncludeFile($APPLICATION->GetTemplatePath("/include/area/montage-about.php"), array(), array("MODE" => "html")); ?></p>
                    </div>
                    <div class="content-block-btn lg-view">
                        <a href="#application-form-classic" class="btn btn-form btn-primary">Узнать как</a>
                    </div>
                </div>
                <div class="content-page-right">
                    <div class="content-picture-block">
                        <div class="video-block">
                            <a href="https://youtu.be/gJvbzHUaLmY?si=npi5Numwzq1T7v_A" data-fancybox="">
                                <img src="/img/content-pic-1.jpg" alt="">
                                <span class="video-icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="76" height="76"
                                             viewBox="0 0 76 76" fill="none">
                                            <circle cx="38" cy="38" r="36.5" fill="black" fill-opacity="0.43"
                                                    stroke="white" stroke-width="3"/>
                                            <path d="M53 38L30.5 50.9904L30.5 25.0096L53 38Z" fill="white"/>
                                        </svg>
                                    </span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content-block-btn xs-view">
                <a href="#application-form-classic" class="btn btn-form btn-primary">Узнать как</a>
            </div>
        </div>
    </section>

    <section class="section section-docs">
        <div class="wrapper-inside">
            <div class="docs-list-container">

                <? $APPLICATION->IncludeComponent(
	"bitrix:catalog.section", 
	"main-page-documents", 
	array(
		"COMPONENT_TEMPLATE" => "main-page-documents",
		"IBLOCK_TYPE" => "infoblocks",
		"IBLOCK_ID" => "1",
		"SECTION_ID" => "3",
		"SECTION_CODE" => "",
		"SECTION_USER_FIELDS" => array(
			0 => "",
			1 => "",
		),
		"FILTER_NAME" => "arrFilter",
		"INCLUDE_SUBSECTIONS" => "Y",
		"SHOW_ALL_WO_SECTION" => "N",
		"ELEMENT_SORT_FIELD" => "sort",
		"ELEMENT_SORT_ORDER" => "asc",
		"ELEMENT_SORT_FIELD2" => "id",
		"ELEMENT_SORT_ORDER2" => "desc",
		"PAGE_ELEMENT_COUNT" => "18",
		"LINE_ELEMENT_COUNT" => "3",
		"BACKGROUND_IMAGE" => "-",
		"TEMPLATE_THEME" => "blue",
		"PRODUCT_ROW_VARIANTS" => "[{'VARIANT':'2','BIG_DATA':false},{'VARIANT':'2','BIG_DATA':false},{'VARIANT':'2','BIG_DATA':false},{'VARIANT':'2','BIG_DATA':false},{'VARIANT':'2','BIG_DATA':false},{'VARIANT':'2','BIG_DATA':false}]",
		"ENLARGE_PRODUCT" => "STRICT",
		"PRODUCT_BLOCKS_ORDER" => "price,props,sku,quantityLimit,quantity,buttons",
		"SHOW_SLIDER" => "Y",
		"SLIDER_INTERVAL" => "3000",
		"SLIDER_PROGRESS" => "N",
		"ADD_PICT_PROP" => "-",
		"LABEL_PROP" => array(
		),
		"MESS_BTN_BUY" => "Купить",
		"MESS_BTN_ADD_TO_BASKET" => "В корзину",
		"MESS_BTN_SUBSCRIBE" => "Подписаться",
		"MESS_BTN_DETAIL" => "Подробнее",
		"MESS_NOT_AVAILABLE" => "Нет в наличии",
		"MESS_NOT_AVAILABLE_SERVICE" => "Недоступно",
		"RCM_TYPE" => "personal",
		"RCM_PROD_ID" => $_REQUEST["PRODUCT_ID"],
		"SHOW_FROM_SECTION" => "N",
		"SECTION_URL" => "",
		"DETAIL_URL" => "",
		"SECTION_ID_VARIABLE" => "SECTION_ID",
		"SEF_MODE" => "N",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"CACHE_TYPE" => "A",
		"CACHE_TIME" => "36000000",
		"CACHE_GROUPS" => "Y",
		"SET_TITLE" => "N",
		"SET_BROWSER_TITLE" => "N",
		"BROWSER_TITLE" => "-",
		"SET_META_KEYWORDS" => "N",
		"META_KEYWORDS" => "-",
		"SET_META_DESCRIPTION" => "N",
		"META_DESCRIPTION" => "-",
		"SET_LAST_MODIFIED" => "N",
		"USE_MAIN_ELEMENT_SECTION" => "N",
		"ADD_SECTIONS_CHAIN" => "N",
		"CACHE_FILTER" => "N",
		"ACTION_VARIABLE" => "action",
		"PRODUCT_ID_VARIABLE" => "id",
		"PRICE_CODE" => array(
		),
		"USE_PRICE_COUNT" => "N",
		"SHOW_PRICE_COUNT" => "1",
		"PRICE_VAT_INCLUDE" => "Y",
		"BASKET_URL" => "/personal/basket.php",
		"USE_PRODUCT_QUANTITY" => "N",
		"PRODUCT_QUANTITY_VARIABLE" => "quantity",
		"ADD_PROPERTIES_TO_BASKET" => "Y",
		"PRODUCT_PROPS_VARIABLE" => "prop",
		"PARTIAL_PRODUCT_PROPERTIES" => "N",
		"DISPLAY_COMPARE" => "N",
		"USE_ENHANCED_ECOMMERCE" => "N",
		"PAGER_TEMPLATE" => ".default",
		"DISPLAY_TOP_PAGER" => "N",
		"DISPLAY_BOTTOM_PAGER" => "Y",
		"PAGER_TITLE" => "Товары",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "N",
		"PAGER_BASE_LINK_ENABLE" => "N",
		"LAZY_LOAD" => "N",
		"MESS_BTN_LAZY_LOAD" => "Показать ещё",
		"LOAD_ON_SCROLL" => "N",
		"SET_STATUS_404" => "N",
		"SHOW_404" => "N",
		"MESSAGE_404" => "",
		"COMPATIBLE_MODE" => "N",
		"DISABLE_INIT_JS_IN_COMPONENT" => "N"
	),
	false
); ?>


            </div>
        </div>
    </section>

<? $APPLICATION->IncludeComponent(
	"bitrix:news.list", 
	"montage-standart-size", 
	array(
		"COMPONENT_TEMPLATE" => "montage-standart-size",
		"IBLOCK_TYPE" => "infoblocks",
		"IBLOCK_ID" => "1",
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
			0 => "",
			1 => "",
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
		"SET_META_KEYWORDS" => "Y",
		"SET_META_DESCRIPTION" => "Y",
		"SET_LAST_MODIFIED" => "N",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
		"ADD_SECTIONS_CHAIN" => "N",
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"PARENT_SECTION" => "11",
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

    <section class="section section-feedback">
        <div class="wrapper-inside">
            <div class="feedback-container">
                <div class="feedback-picture">
                    <img src="/img/feedback-pic-2.jpg" class="lg-view" alt=""/>
                    <img src="/img/feedback-pic-2-mobile.jpg" class="xs-view" alt=""/>
                </div>
                <div class="feedback-form-container">
                    <div class="calculator-container">
                        <div class="calculator-title">Хотите получить бесплатную визуализацию или образцы нашей
                            продукции?
                        </div>
                        <div class="separate-line"></div>
                        <div class="calculator-container-desc">
                            Подпишитесь на нашу рассылку и вы будете получать самые актуальные материалы, скидки и
                            новости
                        </div>
                        <div class="calculator">
                            <form class="ajax-form-send" name="form-type-newsletter" data-formtype="form-type-newsletter" action="">
                                <input type="hidden" name="form-type-newsletter" value=""/>
                                <div class="form-item-line">
                                    <div class="form-item-one width-100">
                                        <label>Имя и Фамилия</label>
                                        <input type="text" id="user-name" name="user-name" required/>
                                    </div>
                                </div>
                                <div class="form-item-line">
                                    <div class="form-item-one width-100">
                                        <label>Номер телефона</label>
                                        <input class="phoneNumber" type="text" id="user-phone" name="user-phone" required/>
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