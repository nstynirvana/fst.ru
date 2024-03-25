<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
$this->setFrameMode(true);
?>
<div class="dilers__list">
    <? foreach ($arResult["ITEMS"] as $arItem): ?>
        <?
        $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
        $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
        ?>
        <div class="diler">
            <p class="diler__town"><?= $arItem["PROPERTIES"]["TOWN"]["VALUE"] ?></p>
            <h3 class="diler__title"><?= $arItem["NAME"] ?></h3>
            <? if (!empty($arItem["PROPERTIES"]["NUMBER"]["VALUE"])): ?>
                <div class="diler__info">
                    <img class="diler__icon" src="/img/phone-icon.png" alt="">
                    <a href="tel:+78652977446"><?= $arItem["PROPERTIES"]["NUMBER"]["VALUE"] ?></a>
                </div>
            <? endif ?>
            <? if (!empty($arItem["PROPERTIES"]["EMAIL"]["VALUE"])): ?>
                <div class="diler__info">
                    <img class="diler__icon" src="/img/mail-icon.png" alt="">
                    <a href="mailto:sales@fst-klinker.ru"><?= $arItem["PROPERTIES"]["EMAIL"]["VALUE"] ?></a>
                </div>
            <? endif ?>
            <? if (!empty($arItem["PROPERTIES"]["ADDRESS"]["VALUE"])): ?>
                <div class="diler__info adress">
                    <img class="diler__icon" src="/img/address-icon.png" alt="">
                    <p><?= $arItem["PROPERTIES"]["ADDRESS"]["VALUE"] ?></p>
                </div>
            <? endif ?>

        </div>
    <? endforeach; ?>
</div>