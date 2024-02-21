<?
include_once($_SERVER['DOCUMENT_ROOT'] . '/bitrix/modules/main/include/urlrewrite.php');

CHTTP::SetStatus("404 Not Found");
@define("ERROR_404", "Y");

require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");

$APPLICATION->SetTitle("Страница не найдена");
$APPLICATION->AddChainItem("404");

?>

<section class="not-found">
        <div class="not-found__wrapper">
            <img src="/img/Group 203.png" alt="" class="not-found__img desc-img">
            <img src="/img/Group203mobile.png" alt="" class="not-found__img mobile-img">
        </div>
        <div>
            <div class="not-found__wrapper-text">
                <p>
                    К сожалению, страница, которую вы запросили, не была найдена (ошибка 404).
                </p>
                <p>
                    Вы можете перейти на <a href="/">главную страницу</a>, воспользоваться <a href="/constructor/">конструктором</a> или посмотреть
                    <a href="/colors/">ассортимент цветов </a> нашей плитки.
                </p>
            </div>
        </div>
</section>

<section class="section section-feedback">
    <div class="wrapper-inside">
        <div class="feedback-container">
            <div class="feedback-picture">
                <img src="/img/feedback-pic.jpg" class="lg-view" alt=""/>
                <img src="/img/feedback-pic-mobile.jpg" class="xs-view" alt=""/>
            </div>
            <div id="feedback" class="feedback-form-container">
                <div class="calculator-container">
                    <h2 class="calculator-title">напишите нам, если у вас остались вопросы</h2>
                    <div class="separate-line"></div>
                    <div class="calculator-container-desc">
                        Фасадные панели из гибкого кирпича под ваш<br/> бюджет со сроком службы от 30 лет
                    </div>
                    <div class="calculator">
                        <form name="form-type-question" data-formtype="form-type-question" class="ajax-form-send"
                              id="questionForm" action="">
                            <input type="hidden" name="form-type-question" value=""/>
                            <div class="form-item-line">
                                <div class="form-item-one width-100">
                                    <label>Имя и Фамилия</label>
                                    <input type="text" maxlength="30" name="name-lastname" id="name-lastname"
                                           required/>
                                </div>
                            </div>
                            <div class="form-item-line">
                                <div class="form-item-one width-100">
                                    <label>Номер телефона</label>
                                    <input class="phoneNumber" type="text" name="phone" id="phone" required/>
                                </div>
                            </div>
                            <div class="form-item-line">
                                <div class="form-item-one width-100">
                                    <label>Сообщение</label>
                                    <textarea name="message" id="message" required></textarea>
                                </div>
                            </div>
                            <div class="form-item-line">
                                <div class="form-item-one width-100">
                                    <div class="pseudo-check">
                                        <label id="myCheckbox">
                                            <input type="checkbox" name="politica" required/>
                                            <span class="checkbox"></span>
                                            <span class="checkbox-text">
                                                        Соглашаюсь на обработку <a href="/confidentiality/">персональных данных</a>
                                                    </span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="calc-btn">
                                <button type="submit" class="btn btn-primary"
                                        onclick="ym(53915065,'reachGoal','price-send'); return true;">Отправить
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>
