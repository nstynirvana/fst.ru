<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
$this->setFrameMode(true);
?>

<section class="section section-faq">
    <div class="wrapper-inside">
        <div class="faq-container">
            <div class="calculator-title">ЧАСТО ЗАДАВАЕМЫЕ ВОПРОСЫ</div>
            <div class="faq-list">
                <?foreach($arResult["ITEMS"] as $arItem):?>
                <?
                $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
                $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
                ?>

                <div class="faq-item">
                    <div class="faq-item-header">
                        <a href="#">
                            <?=$arItem["NAME"]?>
                            <span class="icon-faq">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                             viewBox="0 0 24 24" fill="none">
                                            <rect class="invisible" x="11" y="2" width="2" height="20"
                                                  fill="currentColor"/>
                                            <rect x="2" y="13" width="2" height="20" transform="rotate(-90 2 13)"
                                                  fill="currentColor"/>
                                        </svg>
                                    </span>
                            <span class="icon-faq-open">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                             viewBox="0 0 24 24" fill="none">
                                            <rect x="2" y="13" width="2" height="20" transform="rotate(-90 2 13)"
                                                  fill="currentColor"/>
                                        </svg>
                                    </span>
                        </a>
                    </div>
                    <div class="faq-item-body" style="display: none;">
                        <?=$arItem["PREVIEW_TEXT"]?>
                    </div>
                </div>

                <?endforeach;?>
            </div>
            <div class="faq-btn">
                <a href="#question-form" class="btn btn-form btn-primary">Задать вопрос</a>
            </div>
        </div>
    </div>
</section>