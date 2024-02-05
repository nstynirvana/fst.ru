<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
$this->setFrameMode(true);
?>
<section class="section section-bullets-list">
    <div class="wrapper-inside">
        <div class="bullets-list">

            <? foreach ($arResult["ITEMS"] as $arItem): ?>
                <?
                $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
                $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
                ?>
                <div class="bullet-item" id="<?= $this->GetEditAreaId($arItem['ID']); ?>">
                    <div class="bullet-item-pic">
                        <? $arFile = CFile::GetFileArray($arItem["PROPERTIES"]["PICTURE_BULLET"]["VALUE"]); ?>
                        <img src="<?= $arFile["SRC"] ?>" alt="">
                    </div>
                    <div class="bullet-item-name">
                        <?= $arItem["NAME"] ?>
                    </div>
                    <div class="bullet-item-text">
                        <?= $arItem["PREVIEW_TEXT"] ?>
                    </div>
                </div>
            <? endforeach; ?>
        </div>
    </div>
</section>