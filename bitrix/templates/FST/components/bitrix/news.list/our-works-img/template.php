<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
$this->setFrameMode(true);
?>

<section class="section section-works-page">
    <div class="wrapper-inside">
        <div class="works-list">

            <? foreach ($arResult["ITEMS"] as $arItem): ?>
            <?
            $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
            $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
            ?>

            <div class="works-item">
                <a href="<?= $arItem["PREVIEW_PICTURE"]["SRC"] ?>" data-fancybox="gallery-1">
                    <img src="<?= $arItem["PREVIEW_PICTURE"]["SRC"] ?>" alt="">
                </a>
            </div>

            <? endforeach; ?>

        </div>
    </div>
</section>