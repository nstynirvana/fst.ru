<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
$this->setFrameMode(true);
?>

<div class="docs-item">
    <div class="docs-item-container">
        <div class="docs-item-pic">
            <img src="<?= $arResult["PICTURE"]["SRC"] ?>" alt="<?= $arResult["PICTURE"]["ALT"] ?>" class="lg-view">
            <img src="<?= $arResult["DETAIL_PICTURE"]["SRC"] ?>" alt="<?= $arResult["DETAIL_PICTURE"]["ALT"] ?>" class="xs-view">
        </div>
        <div class="docs-item-desc">
            <div class="docs-item-desc-container">
                <h2 class="calculator-title"><?= $arResult["NAME"] ?>
                </h2>
                <div class="separate-line"></div>
                <div class="product-item-text">
                    <p><?= $arResult["DESCRIPTION"] ?></p>
                </div>

                <div class="docs-list-inside">

                    <? foreach ($arResult["ITEMS"] as $arItem): ?>
                        <?
                        $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
                        $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));


                        $arFilter = Array("IBLOCK_ID"=>'1', "ID"=>$arItem['ID']);
                        $res = CIBlockElement::GetList(Array(), $arFilter); // с помощью метода CIBlockElement::GetList вытаскиваем все значения из нужного элемента
                        if ($ob = $res->GetNextElement()){; // переходим к след элементу, если такой есть
                            $arProps = $ob->GetProperties(); // свойства элемента
                        }

                        $arProps["FILE"]["VALUE"] = CFile::GetFileArray($arProps["FILE"]["VALUE"]);

                        ?>

                        <div class="docs-list-inside-item">
                            <a href="<?=$arProps["FILE"]["VALUE"]['SRC']?>" data-fancybox="gallery-4">
                            <span class="icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                    <rect x="5" y="3" width="14" height="18" stroke="#232B35" stroke-width="2"/>
                                    <rect x="14" y="16" width="6" height="6" fill="#232B35"/>
                                </svg>
                            </span>
                                <span class="text"><?= $arItem["NAME"] ?></span>
                            </a>
                        </div>
                    <? endforeach; ?>


                </div>
            </div>
        </div>
    </div>
</div>