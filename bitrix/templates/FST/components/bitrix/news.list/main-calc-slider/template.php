<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
$this->setFrameMode(true);
?>

<div class="interactive-block">
    <div class="interactive-pic">
        <? $count = 0; ?>
        <? foreach ($arResult["ITEMS"] as $arItem): ?>
            <?
            $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
            $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
            ?>
            <? if ($count > 1): ?>
                <div class="img-zoom-container interactive-pic-item" id="<?= $this->GetEditAreaId($arItem['ID']); ?>">
                    <img id="myimage" class="demo-img" data-lazy="<?= $arItem["DETAIL_PICTURE"]["SRC"] ?>" alt=""/>
                    <img id="myresult" class="img-zoom-result"
                         src="<?= $arItem["DISPLAY_PROPERTIES"]["TYPE_OF_CIRCLE"]["FILE_VALUE"]["SRC"] ?>"/>
                </div>
            <? endif; ?>
            <? $count++; ?>
        <? endforeach; ?>
    </div>

    <div class="interactive-examples">
        <div class="interactive-examples-title">Пример текстуры</div>
        <div class="inactive-slider">
            <? $count2 = 0; ?>
            <? foreach ($arResult["ITEMS"] as $arItem): ?>
                <?
                $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
                $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
                ?>
                <? if ($count2 > 1): ?>
                    <div class="inactive-slider-item" id="<?= $this->GetEditAreaId($arItem['ID']); ?>">
                        <a href="#" style="pointer-events: none;" class="active">
                            <img src="<?= $arItem["DISPLAY_PROPERTIES"]["TYPE_OF_CIRCLE"]["FILE_VALUE"]["SRC"] ?>"
                                 alt=""/>
                        </a>
                    </div>
                <? endif; ?>
                <? $count2++; ?>
            <? endforeach; ?>
        </div>
    </div>
</div>