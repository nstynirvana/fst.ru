<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
$this->setFrameMode(true);
?>

<? //echo "<pre>"; print_r($arResult["ITEMS"]); echo "</pre>";?>

<section class="slider-constructor">

    <div class="slider-constructor-pictures">
        <? foreach ($arResult["ITEMS"] as $arItem): ?>
            <?
            $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
            $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
            ?>
            <div class="slider-constructor-item" id="<?= $this->GetEditAreaId($arItem['ID']); ?>">
                <img data-lazy="<?= $arItem["PREVIEW_PICTURE"]["SRC"] ?>"
                     alt="<?= $arItem["PREVIEW_PICTURE"]["ALT"] ?>" title="<?= $arItem["PREVIEW_PICTURE"]["TITLE"] ?>"
                     class="slider-constructor-img">
            </div>
        <? endforeach; ?>
    </div>

    <div class="interactive-examples">

        <ul class="slider-constructor-switch">
            <? foreach ($arResult["ITEMS"] as $arItem): ?>
                <?
                $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
                $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
                ?>
                <li class="" id="<?= $this->GetEditAreaId($arItem['ID']); ?>">
                    <a href="#" style="pointer-events: none">
                        <img src="<?= $arItem["DISPLAY_PROPERTIES"]["TYPE_OF_CIRCLE"]["FILE_VALUE"]["SRC"] ?>" class="slider-constructor-switch-img"
                             alt="">
                    </a>
                    <p class="slider-constructor-switch-text"><?= $arItem["PREVIEW_TEXT"] ?></p>
                </li>
            <? endforeach; ?>
        </ul>
    </div>

</section>
