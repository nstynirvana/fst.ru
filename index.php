<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetPageProperty("description", "Гибкий кирпич от производителя. Цена от 850р. за кв. метр. 40 оттенков. Гарантия 5 лет. · Водостойкий. Не выгорает. Огнеупорный. Не деформируется.");
$APPLICATION->SetTitle("Гибкий кирпич FST | Гибкая клинкерная плитка от производителя");
?>

<? $APPLICATION->IncludeComponent(
	"bitrix:news.list", 
	"main-info-slider", 
	array(
		"COMPONENT_TEMPLATE" => "main-info-slider",
		"IBLOCK_TYPE" => "infoblocks",
		"IBLOCK_ID" => "2",
		"NEWS_COUNT" => "20",
		"SORT_BY1" => "ACTIVE_FROM",
		"SORT_ORDER1" => "DESC",
		"SORT_BY2" => "SORT",
		"SORT_ORDER2" => "ASC",
		"FILTER_NAME" => "",
		"FIELD_CODE" => array(
			0 => "PREVIEW_PICTURE",
			1 => "DETAIL_PICTURE",
			2 => "",
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
		"SET_META_DESCRIPTION" => "N",
		"SET_LAST_MODIFIED" => "N",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
		"ADD_SECTIONS_CHAIN" => "N",
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"PARENT_SECTION" => "10",
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

<? $APPLICATION->IncludeComponent(
	"bitrix:news.list", 
	"main-page-advantages", 
	array(
		"ACTIVE_DATE_FORMAT" => "d.m.Y",
		"ADD_SECTIONS_CHAIN" => "N",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => "36000000",
		"CACHE_TYPE" => "A",
		"CHECK_DATES" => "Y",
		"DETAIL_URL" => "",
		"DISPLAY_BOTTOM_PAGER" => "Y",
		"DISPLAY_DATE" => "Y",
		"DISPLAY_NAME" => "Y",
		"DISPLAY_PICTURE" => "Y",
		"DISPLAY_PREVIEW_TEXT" => "Y",
		"DISPLAY_TOP_PAGER" => "N",
		"FIELD_CODE" => array(
			0 => "",
			1 => "",
		),
		"FILTER_NAME" => "",
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"IBLOCK_ID" => "1",
		"IBLOCK_TYPE" => "infoblocks",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
		"INCLUDE_SUBSECTIONS" => "Y",
		"MESSAGE_404" => "",
		"NEWS_COUNT" => "20",
		"PAGER_BASE_LINK_ENABLE" => "N",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "N",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_TEMPLATE" => ".default",
		"PAGER_TITLE" => "Новости",
		"PARENT_SECTION" => "1",
		"PARENT_SECTION_CODE" => "",
		"PREVIEW_TRUNCATE_LEN" => "",
		"PROPERTY_CODE" => array(
			0 => "",
			1 => "PICTURE_BULLET",
			2 => "",
		),
		"SET_BROWSER_TITLE" => "N",
		"SET_LAST_MODIFIED" => "N",
		"SET_META_DESCRIPTION" => "N",
		"SET_META_KEYWORDS" => "Y",
		"SET_STATUS_404" => "N",
		"SET_TITLE" => "N",
		"SHOW_404" => "N",
		"SORT_BY1" => "ACTIVE_FROM",
		"SORT_BY2" => "SORT",
		"SORT_ORDER1" => "DESC",
		"SORT_ORDER2" => "ASC",
		"STRICT_SECTION_CHECK" => "N",
		"COMPONENT_TEMPLATE" => "main-page-advantages"
	),
	false
); ?>


<? $APPLICATION->IncludeComponent(
	"bitrix:news.list", 
	"main-slider", 
	array(
		"COMPONENT_TEMPLATE" => "main-slider",
		"IBLOCK_TYPE" => "infoblocks",
		"IBLOCK_ID" => "2",
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
		"SET_META_KEYWORDS" => "N",
		"SET_META_DESCRIPTION" => "N",
		"SET_LAST_MODIFIED" => "N",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
		"ADD_SECTIONS_CHAIN" => "N",
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"PARENT_SECTION" => "5",
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

    <section class="section section-calculator">
        <div class="wrapper-inside">
            <div class="calculator-block-container">

                <div class="calculator-right">

                    <div class="calculator-container">
                        <h2 class="calculator-title">Калькулятор</h2>
                        <div class="separate-line"></div>
                        <div class="calculator-container-desc">
                            Оставьте телефон и мы дадим точную цену вашего объекта
                        </div>
                        <div class="calculator">
                            <form name="form-type-price" data-formtype="form-type-price" class="ajax-form-send" id="feedbackForm" action="">
                                <input type="hidden" name="form-type-price" value=""/>
                                <input type="hidden" id="yandex-metrika-id" name="yandex-metrika-id" value="">
                                <div class="form-item-line">
                                    <div class="form-item-one width-60">
                                        <label>Ваше имя</label>
                                        <input type="text" maxlength="50" name="user-name" id="user-name" required/>
                                    </div>
                                    <div class="form-item-one width-40">
                                        <label>номер телефона</label>
                                        <input class="phoneNumber" type="text" name="phone-number" id="phone-number"
                                               required/>
                                    </div>
                                </div>
                                <div class="form-item-line">
                                    <div class="form-item-one width-33">
                                        <label>площадь дома, М<sup>2</sup></label>
                                        <input class="form__input" type="number"
                                               min="1" value="" name="width" id="calc[width]"
                                               oninput="validity.valid||(value='');"
                                               required/>
                                    </div>
                                    <div class="form-item-one width-33">
                                        <label>ваш город</label>
                                        <input class="form__input" type="text" maxlength="30" value="" name="town"
                                               id="town" required/>
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
                                <div class="form-calc-result">
                                    <div class="calc-result-price">
                                        <label>Стоимость:</label>
                                        <div class="calc-result-price-value" id="cost">0 ₽</div>
                                        <div class="calc-result-price-desc">Предварительная стоимость</div>
                                    </div>
                                    <div class="calc-btn">
                                        <button type="submit" id="button-calc" class="btn btn-primary" onclick="ym(53915065,'reachGoal','price-send'); return true;">Оставить заявку
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>

                </div>
                <div class="calculator-left">
                    <? $APPLICATION->IncludeComponent(
	"bitrix:news.list", 
	"main-calc-slider", 
	array(
		"COMPONENT_TEMPLATE" => "main-calc-slider",
		"IBLOCK_TYPE" => "infoblocks",
		"IBLOCK_ID" => "2",
		"NEWS_COUNT" => "30",
		"SORT_BY1" => "ACTIVE_FROM",
		"SORT_ORDER1" => "DESC",
		"SORT_BY2" => "SORT",
		"SORT_ORDER2" => "ASC",
		"FILTER_NAME" => "",
		"FIELD_CODE" => array(
			0 => "PREVIEW_TEXT",
			1 => "PREVIEW_PICTURE",
			2 => "DETAIL_PICTURE",
			3 => "",
		),
		"PROPERTY_CODE" => array(
			0 => "",
			1 => "TYPE_OF_CIRCLE",
			2 => "",
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
		"PARENT_SECTION" => "15",
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
            </div>
        </div>
    </section>


<? $APPLICATION->IncludeComponent(
	"bitrix:news.list", 
	"main-assortment", 
	array(
		"COMPONENT_TEMPLATE" => "main-assortment",
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
			0 => "PANEL_SIZE",
			1 => "DISCOUNT_SIZE",
			2 => "PANEL_PRICE",
			3 => "",
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
		"SET_META_DESCRIPTION" => "N",
		"SET_LAST_MODIFIED" => "N",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
		"ADD_SECTIONS_CHAIN" => "N",
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"PARENT_SECTION" => "6",
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


    <section class="section section-compare">
        <div class="wrapper-inside">
            <h2 class="calculator-title">Сравнительная таблица гибкого кирпича “FST”</h2>
            <div class="compare-table">

                <div class="compare-table-container">
                    <div class="compare-table-header">
                        <div class="table-td td-name"></div>
                        <div class="table-td td-item-1">Гибкий кирпич “FST”</div>
                        <div class="table-td td-item-2">Клинкерная плитка</div>
                        <div class="table-td td-item-3">Сайдинг</div>
                        <div class="table-td td-item-4">Термопанели</div>
                    </div>
                    <div class="compare-table-body">
                        <div class="compare-table-body-line">
                            <div class="table-td td-name">Цена за 1м<sup>2</sup></div>
                            <div class="table-td td-item-1">950 руб/м<sup>2</sup></div>
                            <div class="table-td td-item-2">3000руб/м<sup>2</sup></div>
                            <div class="table-td td-item-3">1500руб/м<sup>2</sup></div>
                            <div class="table-td td-item-3">3500руб/м<sup>2</sup></div>
                        </div>
                        <div class="compare-table-body-line">
                            <div class="table-td td-name">Простота монтажа</div>
                            <div class="table-td td-item-1">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                     fill="none">
                                    <circle cx="12" cy="12" r="12" fill="#31C70C"/>
                                    <path d="M7 11L11.4 15L18 8" stroke="white" stroke-width="3"/>
                                </svg>
                            </div>
                            <div class="table-td td-item-2">
                                    <span class="icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                             viewBox="0 0 24 24" fill="none">
                                            <circle cx="12" cy="12" r="12" fill="#BE6853"/>
                                        </svg>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14"
                                             viewBox="0 0 14 14" fill="none">
                                            <path d="M2 12L12 2" stroke="white" stroke-width="3"/>
                                            <path d="M12 12L2 2" stroke="white" stroke-width="3"/>
                                        </svg>
                                    </span>
                            </div>
                            <div class="table-td td-item-3">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                     fill="none">
                                    <circle cx="12" cy="12" r="12" fill="#31C70C"/>
                                    <path d="M7 11L11.4 15L18 8" stroke="white" stroke-width="3"/>
                                </svg>
                            </div>
                            <div class="table-td td-item-4">
                                    <span class="icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                             viewBox="0 0 24 24" fill="none">
                                            <circle cx="12" cy="12" r="12" fill="#BE6853"/>
                                        </svg>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14"
                                             viewBox="0 0 14 14" fill="none">
                                            <path d="M2 12L12 2" stroke="white" stroke-width="3"/>
                                            <path d="M12 12L2 2" stroke="white" stroke-width="3"/>
                                        </svg>
                                    </span>
                            </div>
                        </div>
                        <div class="compare-table-body-line">
                            <div class="table-td td-name">Предварительный расчет фундамента на нагрузки</div>
                            <div class="table-td td-item-1">
                                    <span class="icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                             viewBox="0 0 24 24" fill="none">
                                            <circle cx="12" cy="12" r="12" fill="#BE6853"/>
                                        </svg>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14"
                                             viewBox="0 0 14 14" fill="none">
                                            <path d="M2 12L12 2" stroke="white" stroke-width="3"/>
                                            <path d="M12 12L2 2" stroke="white" stroke-width="3"/>
                                        </svg>
                                    </span>
                            </div>
                            <div class="table-td td-item-2">
                                <span class="icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                     fill="none">
                                    <circle cx="12" cy="12" r="12" fill="#31C70C"/>
                                    <path d="M7 11L11.4 15L18 8" stroke="white" stroke-width="3"/>
                                </svg>
                                </span>
                            </div>
                            <div class="table-td td-item-3">
                                    <span class="icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                             viewBox="0 0 24 24" fill="none">
                                            <circle cx="12" cy="12" r="12" fill="#BE6853"/>
                                        </svg>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14"
                                             viewBox="0 0 14 14" fill="none">
                                            <path d="M2 12L12 2" stroke="white" stroke-width="3"/>
                                            <path d="M12 12L2 2" stroke="white" stroke-width="3"/>
                                        </svg>
                                    </span>
                            </div>
                            <div class="table-td td-item-4">
                                    <span class="icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                             viewBox="0 0 24 24" fill="none">
                                            <circle cx="12" cy="12" r="12" fill="#BE6853"/>
                                        </svg>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14"
                                             viewBox="0 0 14 14" fill="none">
                                            <path d="M2 12L12 2" stroke="white" stroke-width="3"/>
                                            <path d="M12 12L2 2" stroke="white" stroke-width="3"/>
                                        </svg>
                                    </span>
                            </div>
                        </div>
                        <div class="compare-table-body-line">
                            <div class="table-td td-name">Срок службы</div>
                            <div class="table-td td-item-1">>30лет</div>
                            <div class="table-td td-item-2">>30лет</div>
                            <div class="table-td td-item-3">10 лет</div>
                            <div class="table-td td-item-4">>30лет</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


<? $APPLICATION->IncludeComponent(
	"bitrix:news.list", 
	"question-answer", 
	array(
		"COMPONENT_TEMPLATE" => "question-answer",
		"IBLOCK_TYPE" => "infoblocks",
		"IBLOCK_ID" => "4",
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


<? $APPLICATION->IncludeComponent(
	"bitrix:news.detail", 
	"main-quote", 
	array(
		"COMPONENT_TEMPLATE" => "main-quote",
		"IBLOCK_TYPE" => "infoblocks",
		"IBLOCK_ID" => "1",
		"ELEMENT_ID" => "5",
		"ELEMENT_CODE" => "",
		"CHECK_DATES" => "Y",
		"FIELD_CODE" => array(
			0 => "PREVIEW_PICTURE",
			1 => "",
		),
		"PROPERTY_CODE" => array(
			0 => "",
			1 => "",
		),
		"IBLOCK_URL" => "",
		"DETAIL_URL" => "",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"CACHE_TYPE" => "A",
		"CACHE_TIME" => "36000000",
		"CACHE_GROUPS" => "Y",
		"SET_TITLE" => "N",
		"SET_CANONICAL_URL" => "N",
		"SET_BROWSER_TITLE" => "N",
		"BROWSER_TITLE" => "-",
		"SET_META_KEYWORDS" => "Y",
		"META_KEYWORDS" => "-",
		"SET_META_DESCRIPTION" => "N",
		"META_DESCRIPTION" => "-",
		"SET_LAST_MODIFIED" => "N",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
		"ADD_SECTIONS_CHAIN" => "N",
		"ADD_ELEMENT_CHAIN" => "N",
		"ACTIVE_DATE_FORMAT" => "d.m.Y",
		"USE_PERMISSIONS" => "N",
		"STRICT_SECTION_CHECK" => "N",
		"DISPLAY_DATE" => "Y",
		"DISPLAY_NAME" => "Y",
		"DISPLAY_PICTURE" => "Y",
		"DISPLAY_PREVIEW_TEXT" => "Y",
		"USE_SHARE" => "N",
		"PAGER_TEMPLATE" => ".default",
		"DISPLAY_TOP_PAGER" => "N",
		"DISPLAY_BOTTOM_PAGER" => "Y",
		"PAGER_TITLE" => "Страница",
		"PAGER_SHOW_ALL" => "N",
		"PAGER_BASE_LINK_ENABLE" => "N",
		"SET_STATUS_404" => "N",
		"SHOW_404" => "N",
		"MESSAGE_404" => ""
	),
	false
); ?>


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
                            2 => "",
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
                        "SHOW_SLIDER" => "N",
                        "SLIDER_INTERVAL" => "3000",
                        "SLIDER_PROGRESS" => "N",
                        "ADD_PICT_PROP" => "-",
                        "LABEL_PROP" => array(),
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
                        "SET_META_KEYWORDS" => "Y",
                        "META_KEYWORDS" => "-",
                        "SET_META_DESCRIPTION" => "N",
                        "META_DESCRIPTION" => "-",
                        "SET_LAST_MODIFIED" => "N",
                        "USE_MAIN_ELEMENT_SECTION" => "N",
                        "ADD_SECTIONS_CHAIN" => "N",
                        "CACHE_FILTER" => "N",
                        "ACTION_VARIABLE" => "action",
                        "PRODUCT_ID_VARIABLE" => "id",
                        "PRICE_CODE" => array(),
                        "USE_PRICE_COUNT" => "N",
                        "SHOW_PRICE_COUNT" => "1",
                        "PRICE_VAT_INCLUDE" => "Y",
                        "BASKET_URL" => "/personal/basket.php",
                        "USE_PRODUCT_QUANTITY" => "N",
                        "PRODUCT_QUANTITY_VARIABLE" => "quantity",
                        "ADD_PROPERTIES_TO_BASKET" => "N",
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

                <? $APPLICATION->IncludeComponent(
	"bitrix:catalog.section", 
	"main-page-documents", 
	array(
		"COMPONENT_TEMPLATE" => "main-page-documents",
		"IBLOCK_TYPE" => "infoblocks",
		"IBLOCK_ID" => "1",
		"SECTION_ID" => "4",
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
		"SET_META_KEYWORDS" => "Y",
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
                            <form name="form-type-question" data-formtype="form-type-question" class="ajax-form-send" id="questionForm" action="">
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
                                    <button type="submit" class="btn btn-primary" onclick="ym(53915065,'reachGoal','price-send'); return true;">Отправить</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>