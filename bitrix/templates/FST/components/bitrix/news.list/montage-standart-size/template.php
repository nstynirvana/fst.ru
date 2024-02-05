<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
$this->setFrameMode(true);
?>

<section class="section section-sizeblock">
    <div class="products-page-container">
        <div class="wrapper-inside">
            <div class="calculator-title"><? $APPLICATION->IncludeFile($APPLICATION->GetTemplatePath("/include/area/standart-size-title.php"), array(), array("MODE" => "html")); ?></div>
            <div class="separate-line"></div>
            <div class="calculator-container-desc">
                <? $APPLICATION->IncludeFile($APPLICATION->GetTemplatePath("/include/area/standart-size-about.php"), array(), array("MODE" => "html")); ?>
            </div>
        </div>
    </div>

    <div class="sizeblock-container">
        <div class="wrapper-inside">
            <div class="sizeblock-list">

                <? foreach ($arResult["ITEMS"] as $arItem): ?>
                <?
                $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
                $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
                ?>

                <div class="sizeblock-item">
                    <div class="sizeblock-title"><?= $arItem["NAME"] ?></div>
                    <div class="sizeblock-pic">
                        <img src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>" alt="<?=$arItem["PREVIEW_PICTURE"]["ALT"]?>">
                    </div>
                    <div class="sizeblock-desc">
                        <p>
                            <?= $arItem["PREVIEW_TEXT"] ?>
                        </p>
                    </div>
                </div>

                <? endforeach; ?>

            </div>
        </div>
    </div>
</section>