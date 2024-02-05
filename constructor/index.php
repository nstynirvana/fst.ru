<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetPageProperty("description", "Онлайн конструктор от FST. Визуализируйте как будет выглядеть облицовка гибким клинкером на частном доме. На выбор 27 популярных текстур.");
$APPLICATION->SetTitle("Конструктор — FST-KLINKER");
?>

    <section style="padding-bottom: 0" class="section section-content-page">
        <div class="wrapper-inside">
            <div class="content-page-container">
                <div class="content-page-left">
                    <div class="breadcrumbs-list">
                        <? include($_SERVER['DOCUMENT_ROOT'] . "/include/template/breadcrumb.php"); ?>
                    </div>
                    <div class="calculator-title">
                        <h1>Конструктор</p></h1>
                    </div>
                    <!--                    <div class="separate-line"></div>-->
                    <!--                    <div class="product-item-text">-->
                    <!--                        <p>-->
                    <? // $APPLICATION->IncludeFile($APPLICATION->GetTemplatePath("/include/area/works-about.php"), array(), array("MODE" => "html")); ?><!--</p>-->
                    <!--                    </div>-->
                </div>
            </div>
        </div>
    </section>

    <section class="section section-content-page">
        <div class="wrapper-inside">
            <? $APPLICATION->IncludeComponent(
	"bitrix:news.list", 
	"constructor-slider", 
	array(
		"COMPONENT_TEMPLATE" => "constructor-slider",
		"IBLOCK_TYPE" => "infoblocks",
		"IBLOCK_ID" => "2",
		"NEWS_COUNT" => "30",
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
			1 => "TYPE_OF_CIRCLE",
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
    </section>


<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>