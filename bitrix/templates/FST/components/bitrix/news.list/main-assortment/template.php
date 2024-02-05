<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
$this->setFrameMode(true);
?>

<section class="section section-products">
    <div class="products-page-container">
        <div class="wrapper-inside">
            <h2 style="pointer-events: none" class="calculator-title">Ассортимент</h2>
            <div class="separate-line"></div>
            <div style="pointer-events: none" class="calculator-container-desc">
                <? $APPLICATION->IncludeFile($APPLICATION->GetTemplatePath("/include/area/assortment-about.php"), array(), array("MODE" => "html")); ?>
            </div>
        </div>
    </div>

    <div class="products-list">
    <?foreach($arResult["ITEMS"] as $arItem):?>
        <?
        $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
        $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
        ?>

        <div class="product-item" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
            <input type="hidden" name="title-form" id="title-form" value="<?=$arItem["NAME"]?>" />
            <div class="wrapper-inside">
                <div class="product-item-container">
                    <div  class="product-item-picture">
                        <img src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>"  alt="<?=$arItem["PREVIEW_PICTURE"]["ALT"]?>" title="<?=$arItem["PREVIEW_PICTURE"]["TITLE"]?>">
                    </div>
                    <div class="product-item-desc">
                        <h3 style="pointer-events: none" class="product-item-title"><?=$arItem["NAME"]?></h3>
                        <div style="pointer-events: none" class="product-item-text">
                            <?=$arItem["PREVIEW_TEXT"]?>
                        </div>
                        <div class="product-item-price-list">
                            <div class="price-list-line">
                                <div style="pointer-events: none" class="price-list-line-name"><?=$arItem["PROPERTIES"]["PANEL_SIZE"]["VALUE"][0]?> м<sup>2</sup></div>
                                <div style="pointer-events: none" class="price-list-line-price"><?=$arItem["PROPERTIES"]["PANEL_PRICE"]["VALUE"][0]?> ₽</div>
                                <div class="price-list-line-discount"></div>
                            </div>
                            <div class="price-list-line">
                                <div style="pointer-events: none" class="price-list-line-name"><?=$arItem["PROPERTIES"]["PANEL_SIZE"]["VALUE"][1]?> м<sup>2</sup></div>
                                <div style="pointer-events: none" class="price-list-line-price"><?=$arItem["PROPERTIES"]["PANEL_PRICE"]["VALUE"][1]?> ₽</div>
                                <div style="pointer-events: none" class="price-list-line-discount">-<?=$arItem["PROPERTIES"]["DISCOUNT_SIZE"]["VALUE"][0]?>%</div>
                            </div>
                            <?if(!empty($arItem["PROPERTIES"]["PANEL_SIZE"]["VALUE"][2])):?>
                                <div class="price-list-line">
                                    <div style="pointer-events: none" class="price-list-line-name"><?=$arItem["PROPERTIES"]["PANEL_SIZE"]["VALUE"][2]?> м<sup>2</sup></div>
                                    <div style="pointer-events: none" class="price-list-line-price"><?=$arItem["PROPERTIES"]["PANEL_PRICE"]["VALUE"][2]?> ₽</div>
                                    <div style="pointer-events: none" class="price-list-line-discount">-<?=$arItem["PROPERTIES"]["DISCOUNT_SIZE"]["VALUE"][1]?>%</div>
                                </div>
                            <?endif;?>
                            <?if(!empty($arItem["PROPERTIES"]["PANEL_SIZE"]["VALUE"][3])):?>
                                <div class="price-list-line">
                                    <div style="pointer-events: none" class="price-list-line-name"><?=$arItem["PROPERTIES"]["PANEL_SIZE"]["VALUE"][3]?> м<sup>2</sup></div>
                                    <div style="pointer-events: none" class="price-list-line-price"><?=$arItem["PROPERTIES"]["PANEL_PRICE"]["VALUE"][3]?> ₽</div>
                                    <div style="pointer-events: none" class="price-list-line-discount">-<?=$arItem["PROPERTIES"]["DISCOUNT_SIZE"]["VALUE"][2]?>%</div>
                                </div>
                            <?endif;?>
                        </div>
                        <div class="priduct-item-btn">
                            <a href="#application-form" data-name="<?=$arItem["NAME"]?>" class="btn btn-primary btn-form" >Оставить заявку</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    <?endforeach;?>
    </div>
</section>