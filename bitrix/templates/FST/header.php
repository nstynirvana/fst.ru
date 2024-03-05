<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<?CModule::IncludeModule("iblock");?>

<?$dir = $APPLICATION->GetCurDir();?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <?$APPLICATION->ShowHead();?>
    <? include($_SERVER['DOCUMENT_ROOT'] . "/include/template/head.php"); ?>

</head>
<body>
<? $APPLICATION->ShowPanel(); ?>


<div class="wrapper">

<header class="header <?/*if($dir === "/contacts/" || $dir === "/constructor/"):?>header_fixed<?endif;*/?>">

    <div class="menu">
        <nav>
            <div class="header-menu-mobile">
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
        </nav>
    </div>

    <div class="wrapper-inside">
        <div class="header-container">

            <div class="header-logo">
                <a href="/">
                    <img src="/img/logo.svg" alt="">
                </a>
            </div>


            <div class="haeder-menu">
                <?$APPLICATION->IncludeComponent(
                    "bitrix:menu",
                    "menu",
                    array(
                        "ALLOW_MULTI_SELECT" => "N",
                        "CHILD_MENU_TYPE" => "top",
                        "DELAY" => "N",
                        "MAX_LEVEL" => "1",
                        "MENU_CACHE_GET_VARS" => array(
                        ),
                        "MENU_CACHE_TIME" => "3600",
                        "MENU_CACHE_TYPE" => "N",
                        "MENU_CACHE_USE_GROUPS" => "Y",
                        "ROOT_MENU_TYPE" => "top",
                        "USE_EXT" => "N",
                        "COMPONENT_TEMPLATE" => "menu"
                    ),
                    false
                );?>
            </div>

            <div class="header-contacts">
                <div class="header-phone">
                    <a href="tel:+78652977446">8 (8652) 97-74-46</a>
                </div>

                <div class="header-email">
                    <a href="mailto:sales@fst-klinker.ru">sales@fst-klinker.ru</a>
                </div>
            </div>

            <div class="header-contacts mobile">
                <div class="header-phone">
                    <a href="tel:+78652977446">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                            <path d="M2.23352 0.539582C2.95661 -0.179861 4.12897 -0.179861 4.85205 0.539583L8.48175 4.15099C9.65677 5.32009 9.65677 7.21556 8.48176 8.38465L7.08015 9.77919C7.6606 11.3797 8.59546 12.8816 9.88473 14.1643C11.1633 15.4365 12.6584 16.3618 14.252 16.9403L15.5146 15.6841C16.6896 14.515 18.5947 14.515 19.7697 15.6841L23.5054 19.401C24.1649 20.0571 24.1649 21.1209 23.5054 21.777L23.4229 21.7501C18.7192 25.1228 12.1192 24.7036 7.88693 20.4927L3.52504 16.1528C-0.712228 11.9369 -1.12945 5.35947 2.27339 0.678505L2.23352 0.539582Z" fill="#BE6853"/>
                        </svg>
                    </a>
                </div>
                <div class="header-email">
                    <a href="mailto:sales@fst-klinker.ru">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="18" viewBox="0 0 24 18" fill="none">
                            <path d="M1 4.96377C1 4.14648 1.9272 3.67433 2.58817 4.15503L11.4118 10.5722C11.7625 10.8273 12.2375 10.8273 12.5882 10.5722L21.4118 4.15503C22.0728 3.67433 23 4.14648 23 4.96377V16C23 17.1046 22.1046 18 21 18H3C1.89543 18 1 17.1046 1 16V4.96377Z" fill="#BE6853"/>
                            <path d="M2.74807 1.83205L11.4453 7.6302C11.7812 7.85413 12.2188 7.85413 12.5547 7.6302L21.2519 1.83205C22.0752 1.28323 21.6866 0 20.6972 0H3.30278C2.31337 0 1.92484 1.28322 2.74807 1.83205Z" fill="#BE6853"/>
                        </svg>
                    </a>
                </div>

<!--                    <a href="#mobile-menu-opener">-->
<!--                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="22" viewBox="0 0 24 22" fill="none">-->
<!--                            <rect width="24" height="2" fill="#232B35"/>-->
<!--                            <rect y="10" width="24" height="2" fill="#BE6853"/>-->
<!--                            <rect y="20" width="24" height="2" fill="#232B35"/>-->
<!--                        </svg>-->
<!--                    </a>-->
                    <div class="menu-btn">
                        <span style="background-color: #232B35!important"></span>
                        <span style="background-color: #BE6853!important;"></span>
                        <span style="background-color: #232B35!important"></span>
                    </div>

            </div>



        </div>
    </div>




    <div class="popup__mobile" id="mobile-menu-opener">
        <div class="wrapper-inside">
            <div class="footer-line-1">
                <div class="footer-logo">
                    <a href="/">
                        <img src="/img/logo.svg" alt="">
                    </a>
                </div>
                <div class="header-menu-mobile">
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
            </div>
        </div>
    </div>

</header>
    <main <?php if($dir === "/contacts/"):?>style="padding: 0 0 160px;"<?php elseif($dir === "/constructor/"):?>style="padding: 0 0 13px;"<?php endif;?> class="content">