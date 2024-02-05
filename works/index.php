<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetPageProperty("description", "Примеры облицовки зданий и частных домов гибкой клинкерной плиткой FST. 40 оттенков. Гарантия 5 лет. · Водостойкая. Не выгорает. Огнеупорный. Не деформируется.");
$APPLICATION->SetTitle("Примеры наших работ — FST-KLINKER");
?>

    <section class="section section-content-page">
        <div class="wrapper-inside">
            <div class="content-page-container">
                <div class="content-page-left">
                    <div class="breadcrumbs-list">
                        <? include($_SERVER['DOCUMENT_ROOT'] . "/include/template/breadcrumb.php"); ?>
                    </div>
                    <div class="calculator-title">
                        <h1><? $APPLICATION->IncludeFile($APPLICATION->GetTemplatePath("/include/area/works-title.php"), array(), array("MODE" => "html")); ?></p></h1>
                    </div>
                    <div class="separate-line"></div>
                    <div class="product-item-text">
                        <p><? $APPLICATION->IncludeFile($APPLICATION->GetTemplatePath("/include/area/works-about.php"), array(), array("MODE" => "html")); ?></p>
                    </div>
                    <div class="content-block-btn lg-view">
                        <a href="#application-form-classic" class="btn btn-form  btn-primary">Связаться</a>
                    </div>
                </div>
                <div class="content-page-right">
                    <div class="content-picture-block">
                        <div class="picture-block">
                            <img src="/img/works-page-pic.jpg" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <div class="content-block-btn xs-view">
                <a href="#application-form-classic" class="btn btn-form btn-primary">Связаться</a>
            </div>
        </div>
    </section>

<? $APPLICATION->IncludeComponent(
	"bitrix:news.list", 
	"our-works-img", 
	array(
		"COMPONENT_TEMPLATE" => "our-works-img",
		"IBLOCK_TYPE" => "infoblocks",
		"IBLOCK_ID" => "5",
		"NEWS_COUNT" => "20",
		"SORT_BY1" => "ACTIVE_FROM",
		"SORT_ORDER1" => "DESC",
		"SORT_BY2" => "SORT",
		"SORT_ORDER2" => "ASC",
		"FILTER_NAME" => "",
		"FIELD_CODE" => array(
			0 => "PREVIEW_PICTURE",
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
		"PARENT_SECTION" => "13",
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
                    <img src="/img/feedback-pic.jpg" class="lg-view" alt=""/>
                    <img src="/img/feedback-pic-mobile.jpg" class="xs-view" alt=""/>
                </div>
                <div id="feedback" class="feedback-form-container">
                    <div class="calculator-container">
                        <div class="calculator-title">напишите нам, если у вас остались вопросы</div>
                        <div class="separate-line"></div>
                        <div class="calculator-container-desc">
                            Фасадные панели из гибкого кирпича под ваш<br/> бюджет со сроком службы от 30 лет
                        </div>
                        <div class="calculator">
                            <form name="form-type-question" data-formtype="form-type-question" class="ajax-form-send" id="questionForm" action="">
                                <input type="hidden" name="form-type-question" value=""/>
                                <div class="form-item-line">
                                    <div class="form-item-one width-100">
                                        <label>Имя и Фамилия</label>
                                        <input type="text" name="name-lastname" id="name-lastname" required/>
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
                                        <label>Сообщение</label>
                                        <textarea name="message" id="message"></textarea>
                                    </div>
                                </div>
                                <div class="form-item-line">
                                    <div class="form-item-one width-100">
                                        <div class="pseudo-check">
                                            <label id="myCheckbox">
                                                <input type="checkbox" name="politica" required />
                                                <span class="checkbox"></span>
                                                <span class="checkbox-text">
                                                        Соглашаюсь на обработку <a href="/confidentiality/">персональных данных</a>
                                                    </span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="calc-btn">
                                    <button type="submit"  class="btn btn-primary">Отправить</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>