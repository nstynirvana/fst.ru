<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
$this->setFrameMode(true);
?>

<section class="section section-main-banner">
    <div class="wrapper-inside">
        <div class="main-banner-content">
            <div class="main-banner-item">
                <? /*весь текст во включаемые области*/ ?>

                <div class="main-banner-item-content">
                    <h1 class="main-banner-title">
                        <? $APPLICATION->IncludeFile($APPLICATION->GetTemplatePath("/include/area/main-info-title.php"), array(), array("MODE" => "html")); ?>
                    </h1>
                    <div class="separate-line"></div>
                    <div class="main-banner-desc">
                        <? $APPLICATION->IncludeFile($APPLICATION->GetTemplatePath("/include/area/main-info-about.php"), array(), array("MODE" => "html")); ?>
                    </div>
                    <div class="main-banner-price">
                        <? $APPLICATION->IncludeFile($APPLICATION->GetTemplatePath("/include/area/main-info-price.php"), array(), array("MODE" => "html")); ?>
                    </div>
                    <div class="main-banner-btns">
                        <div class="main-banner-feedback">
                            <a href="#consultation-form" class="btn btn-form btn-primary" data-fancybox="">Скачать прайс</a>
                        </div>
                    </div>
                    <div class="main-banner-after">
                        <div class="main-banner-after-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16"
                                 fill="none">
                                <circle cx="8" cy="8" r="7" stroke="#BE6853" stroke-width="2"/>
                                <rect x="7" y="4" width="2" height="5" fill="#BE6853"/>
                                <rect x="7" y="10" width="2" height="2" fill="#BE6853"/>
                            </svg>
                        </div>
                        <div class="main-banner-after-text">
                            Оставьте телефон и мы зафиксируем цены на месяц для первого заказа
                        </div>
                    </div>
                </div>
                <? /*dp($arResult)*/ ?>
                <div class="main-banner-picture">
                    <? foreach ($arResult["ITEMS"] as $arItem): ?>
                        <?
                        $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
                        $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
                        ?>

                        <img src="<?= $arItem["PREVIEW_PICTURE"]["SRC"] ?>" alt="" id="<?= $this->GetEditAreaId($arItem['ID']); ?>">

                    <? endforeach; ?>
                </div>
                <img class="main-banner-picture_garanty" src="/img/garanty.png" alt="">
                <img class="main-banner-picture_garanty-mobile" src="/img/garanty-mobile.png" alt="">
            </div>


            <div class="main-banner-changer">
                <ul class="slider-switch">
                    <? foreach ($arResult["ITEMS"] as $arItem): ?>
                        <?
                        $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
                        $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
                        ?>
                        <li id="<?= $this->GetEditAreaId($arItem['ID']); ?>">
                            <a href="#" style="pointer-events: none">
                                <img src="<?= $arItem["DETAIL_PICTURE"]["SRC"] ?>" alt="">
                            </a>
                        </li>
<!--                        <li><a class="active" href="#"><img src="/img/main-banner-changer-1.jpg" alt=""></a></li>-->
                    <? endforeach; ?>
                </ul>

            </div>

        </div>
    </div>
</section>