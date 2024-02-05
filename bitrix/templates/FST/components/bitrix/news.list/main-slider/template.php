<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
$this->setFrameMode(true);
?>

<section class="section section-gallery">
    <div class="wrapper-inside">
        <div class="gallery-block-container">

            <?foreach($arResult["ITEMS"] as $arItem):?>
                <?
                $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
                $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
                ?>
                <div class="gallery-item" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
                    <a href="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>" data-fancybox="gallery-3">
                        <img src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>" alt="<?=$arItem["PREVIEW_PICTURE"]["ALT"]?>" title="<?=$arItem["PREVIEW_PICTURE"]["TITLE"]?>">
                    </a>
                </div>
            <?endforeach;?>

        </div>
        <div class="gallery-block-navigation">
            <div class="gallery-arrow arrow-left">
                <svg xmlns="http://www.w3.org/2000/svg" width="50" height="10" viewBox="0 0 50 10" fill="none">
                    <rect width="42" height="2" transform="matrix(-1 0 0 1 50 4)" fill="#BE6853"/>
                    <path d="M0 5L8 10L8 0L0 5Z" fill="#BE6853"/>
                </svg>
            </div>

            <div class="nav">

            </div>

            <div class="gallery-arrow arrow-right">
                <svg xmlns="http://www.w3.org/2000/svg" width="50" height="10" viewBox="0 0 50 10" fill="none">
                    <rect y="4" width="42" height="2" fill="#BE6853"/>
                    <path d="M50 5L42 10L42 0L50 5Z" fill="#BE6853"/>
                </svg>
            </div>
        </div>
    </div>
</section>