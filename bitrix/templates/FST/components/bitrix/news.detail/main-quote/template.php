<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
$this->setFrameMode(true);
?>


<section class="section section-review">
    <div class="wrapper-inside">
        <div class="reviews-list">
            <div class="review-item">
                <div class="review-item-desc">
                    <p><?= $arResult["DETAIL_TEXT"] ?></p>
                </div>
                <div class="review-item-user">
                    <div class="review-item-pic">
                        <img src="<?= $arResult["PREVIEW_PICTURE"]["SRC"] ?>" alt="<?= $arResult["PREVIEW_PICTURE"]["ALT"] ?>">
                    </div>
                    <div class="review-item-user-desc">
                        <div class="review-item-user-title">
                            <?= $arResult["NAME"] ?>
                        </div>
                        <div class="review-item-user-text">
                            <?= $arResult["PREVIEW_TEXT"] ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

