</main><!-- .content -->

</div><!-- .wrapper -->

<footer class="footer">

    <div class="wrapper-inside">

        <div class="footer-column-1 desc-view">
            <div class="footer-logo">
                <a href="/">
                    <img src="/img/logo-footer.svg" alt="">
                </a>
            </div>
            <div class="footer-copyright">
                ©2024 г.
            </div>
        </div>

        <div class="footer-column-2 desc-view">
            <div class="haeder-menu">
                <? $APPLICATION->IncludeComponent(
                    "bitrix:menu",
                    "menu",
                    array(
                        "ALLOW_MULTI_SELECT" => "N",
                        "CHILD_MENU_TYPE" => "top",
                        "DELAY" => "N",
                        "MAX_LEVEL" => "1",
                        "MENU_CACHE_GET_VARS" => array(),
                        "MENU_CACHE_TIME" => "3600",
                        "MENU_CACHE_TYPE" => "N",
                        "MENU_CACHE_USE_GROUPS" => "Y",
                        "ROOT_MENU_TYPE" => "top",
                        "USE_EXT" => "N",
                        "COMPONENT_TEMPLATE" => "menu"
                    ),
                    false
                ); ?>
            </div>
            <div class="footer-politica">
                <a href="/confidentiality/">
                    Политика обработки персональных данных
                </a>
            </div>
        </div>

        <div class="footer-column-3 desc-view">
            <div class="header-contacts">
                <div class="header-phone">
                    <a href="tel:+78652977446">8 (8652) 97-74-46</a>
                </div>
                <div class="header-email">
                    <a href="mailto:sales@fst-klinker.ru">sales@fst-klinker.ru</a>
                </div>
                <div class="header-network">
                    <a href="https://vk.com/fst.klinker" target="_blank">
                        <img src="/img/vk.png" alt="">
                    </a>
                    <a href="https://www.youtube.com/@fst4136" target="_blank">
                        <img src="/img/youtube.png" alt="">
                    </a>
                </div>
            </div>
        </div>


        <div class="footer-column mobile-view">

            <div class="footer-logo">
                <a href="/">
                    <img src="/img/logo-footer.svg" alt="">
                </a>
            </div>

            <div class="haeder-menu">
                <? $APPLICATION->IncludeComponent(
                    "bitrix:menu",
                    "menu",
                    array(
                        "ALLOW_MULTI_SELECT" => "N",
                        "CHILD_MENU_TYPE" => "top",
                        "DELAY" => "N",
                        "MAX_LEVEL" => "1",
                        "MENU_CACHE_GET_VARS" => array(),
                        "MENU_CACHE_TIME" => "3600",
                        "MENU_CACHE_TYPE" => "N",
                        "MENU_CACHE_USE_GROUPS" => "Y",
                        "ROOT_MENU_TYPE" => "top",
                        "USE_EXT" => "N",
                        "COMPONENT_TEMPLATE" => "menu"
                    ),
                    false
                ); ?>
            </div>

            <div class="footer-politica">
                <a href="/confidentiality/">
                    Политика обработки персональных данных
                </a>
            </div>

            <div class="header-contacts">
                <div class="header-phone">
                    <a href="tel:+78652977446">8 (8652) 97-74-46</a>
                </div>
                <div class="header-email">
                    <a href="mailto:sales@fst-klinker.ru">sales@fst-klinker.ru</a>
                </div>
                <div class="header-network">
                    <a href="https://vk.com/fst.klinker" target="_blank">
                        <img src="/img/vk.png" alt="">
                    </a>
                    <a href="https://www.youtube.com/@fst4136" target="_blank">
                        <img src="/img/youtube.png" alt="">
                    </a>
                </div>
            </div>

            <div class="footer-copyright">
                ©2024 г.
            </div>

        </div>

    </div>

</footer>

<div style="display: none;">


    <div class="popUp popUp-item" id="price-message">
        <div class="popUp-container">
            <div class="popUp-title h3" style="text-align: center;">Спасибо!</div>
        </div>
        <div class="calc-btn" style="display: flex; justify-content: center;">
            <a onclick="ym(53915065,'reachGoal','price-send'); return true;" href="/img/price2023.pdf"
               data-fancybox="gallery-4" class="btn btn-primary">Открыть прайс</a>
        </div>
        <div class="calc-btn" style="display: flex; justify-content: center;">
            <a href="/img/price2023.pdf" download="/img/price2023.pdf" class="btn btn-primary">Скачать прайс</a>
        </div>
    </div>

    <div class="popUp popUp-item" id="question-form">
        <div class="popUp-container">
            <div class="calculator-title">Напишите нам, если у вас остались вопросы</div>
            <div class="separate-line"></div>
            <div class="calculator-container-desc">
                Фасадные панели из гибкого кирпича под ваш бюджет со сроком службы от 30 лет
            </div>
            <div class="popUp-body">
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
                        <button type="submit" class="btn btn-primary">Отправить</button>
                    </div>
                </form>
            </div>
        </div>
    </div>


    <div class="popUp popUp-item" id="consultation-form">
        <div class="popUp-container">
            <div class="calculator-title">Получить прайс</div>
            <div class="separate-line"></div>
            <div class="calculator-container-desc">
                Фасадные панели из гибкого кирпича под ваш бюджет со сроком службы от 30 лет
            </div>
            <div class="popUp-body price-thanks">
                <form class="ajax-form-send price-thanks" name="form-type-application"
                      data-formtype="form-type-application" id="applicationFormSend" action="">
                    <input type="hidden" name="form-type-application" id="form-type-application" value=""/>
                    <div class="form-item-line">
                        <div class="form-item-one width-100">
                            <label>Ваше имя</label>
                            <input maxlength="30" type="text" id="applicationUserName" name="applicationUserName"
                                   required/>
                        </div>
                    </div>
                    <div class="form-item-line">
                        <div class="form-item-one width-100">
                            <label>номер телефона</label>
                            <input class="phoneNumber" type="text" id="applicationUserPhone" name="applicationUserPhone"
                                   required/>
                        </div>
                    </div>
                    <div class="form-item-line">
                        <div class="form-item-one width-100">
                            <div class="pseudo-check">
                                <label>
                                    <input required type="checkbox" name="politica"/>
                                    <span class="checkbox"></span>
                                    <span class="checkbox-text">
                                        Соглашаюсь на обработку <a href="/confidentiality/">персональных данных</a>
                                    </span>
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="calc-btn">
                        <button type="submit" onclick="ym(53915065,'reachGoal','price-send'); return true;"
                                class="btn btn-primary">Получить прайс
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="popUp popUp-item" id="success-message">
        <div class="popUp-container">
            <div class="popUp-title h3">Ваша заявка принята!</div>
            <div class="popUp-textMessage">В ближайшее время с вами свяжется наш менеджер</div>
        </div>
    </div>

    <div class="popUp popUp-item" id="application-form">
        <div class="popUp-container">
            <div class="calculator-title">Оставить заявку</div>
            <div class="separate-line"></div>
            <div class="calculator-container-desc">
                Фасадные панели из гибкого кирпича под ваш бюджет со сроком службы от 30 лет
            </div>
            <div class="popUp-body">
                <form class="ajax-form-send" name="form-type-circle" data-formtype="form-type-circle"
                      id="applicationFormSend" action="">
                    <input class="form-type-circle" type="hidden" name="name-form-circle" id="name-form-circle"
                           value=""/>
                    <div class="form-item-line">
                        <div class="form-item-one width-100">
                            <label>Ваше имя</label>
                            <input maxlength="30" type="text" name="user-name" id="user-name" required/>
                        </div>
                    </div>
                    <div class="form-item-line">
                        <div class="form-item-one width-100">
                            <label>номер телефона</label>
                            <input class="phoneNumber" type="text" id="user-phone" name="user-phone" required/>
                        </div>
                    </div>
                    <div class="form-item-line">
                        <div class="form-item-one width-100">
                            <div class="pseudo-check">
                                <label>
                                    <input required type="checkbox" name="politica"/>
                                    <span class="checkbox"></span>
                                    <span class="checkbox-text">
                                        Соглашаюсь на обработку <a href="/confidentiality/">персональных данных</a>
                                    </span>
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="calc-btn">
                        <button type="submit" onclick="ym(53915065,'reachGoal','price-send'); return true;"
                                class="btn btn-primary">Оставить заявку
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="popUp popUp-item" id="application-form-classic">
        <div class="popUp-container">
            <div class="calculator-title">Оставить заявку</div>
            <div class="separate-line"></div>
            <div class="calculator-container-desc">
                Фасадные панели из гибкого кирпича под ваш бюджет со сроком службы от 30 лет
            </div>
            <div class="popUp-body">
                <form class="ajax-form-send" name="form-type-application" data-formtype="form-type-application"
                      id="applicationFormSend" action="">
                    <input type="hidden" name="form-type-application" id="form-type-application" value=""/>
                    <div class="form-item-line">
                        <div class="form-item-one width-100">
                            <label>Ваше имя</label>
                            <input maxlength="30" type="text" name="applicationUserName" id="applicationUserName"
                                   required/>
                        </div>
                    </div>
                    <div class="form-item-line">
                        <div class="form-item-one width-100">
                            <label>номер телефона</label>
                            <input class="phoneNumber" type="text" id="applicationUserPhone" name="applicationUserPhone"
                                   required/>
                        </div>
                    </div>
                    <div class="form-item-line">
                        <div class="form-item-one width-100">
                            <div class="pseudo-check">
                                <label>
                                    <input required type="checkbox" name="politica"/>
                                    <span class="checkbox"></span>
                                    <span class="checkbox-text">
                                        Соглашаюсь на обработку <a href="/confidentiality/">персональных данных</a>
                                    </span>
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="calc-btn">
                        <button type="submit" onclick="ym(53915065,'reachGoal','price-send'); return true;"
                                class="btn btn-primary">Оставить заявку
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>


</div>

<script type="text/javascript" src="/js/jquery-1.11.1.min.js"></script>
<script type="text/javascript" src="/js/jquery-migrate-1.2.1.min.js"></script>
<script type="text/javascript" src="/js/jquery.maskedinput-1.2.2.js"></script>
<script type="text/javascript" src="/js/slick.min.js"></script>
<script type="text/javascript" src="/js/fancybox/jquery.fancybox.min.js"></script>
<script type="text/javascript" src="/js/selectric/src/jquery.selectric.js"></script>

<script type="text/javascript" src="/js/pvashoot.js"></script>
<script type="text/javascript" src="/js/dapsite.js"></script>


<? if ($dir === "/colors/"): ?>
    <script type='text/javascript' id='mfn-plugins-js-extra'>
        /* <![CDATA[ */
        var mfn = {
            "mobileInit": "1240",
            "parallax": "translate3d",
            "responsive": "1",
            "sidebarSticky": "",
            "lightbox": {"disable": false, "disableMobile": false, "title": false},
            "slider": {
                "blog": 0,
                "clients": 0,
                "offer": 0,
                "portfolio": 0,
                "shop": 0,
                "slider": 2000,
                "testimonials": 0
            },
            "livesearch": {
                "minChar": 3,
                "loadPosts": 10,
                "translation": {
                    "pages": "Pages",
                    "categories": "Categories",
                    "portfolio": "Portfolio",
                    "post": "Posts",
                    "products": "Products"
                }
            },
            "home_url": "",
            "site_url": "https:\/\/fst-klinker.ru"
        };
        /* ]]> */
    </script>
    <script type='text/javascript' src='/js/old-script/plugins.js' id='mfn-plugins-js'></script>
    <script type='text/javascript' src='/js/old-script/scripts.js' id='mfn-scripts-js'></script>
<? endif; ?>


</body>
</html>