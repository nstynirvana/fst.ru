<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
IncludeTemplateLangFile(__FILE__);

global $APPLICATION;
$dir = $APPLICATION->GetCurDir();

?>
<!--<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>-->
<meta charset="utf-8" />
<!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js"></script><![endif]-->
<title><?$APPLICATION->ShowTitle()?></title>
<meta name="keywords" content="" />
<meta name="description" content="" />

<meta name="viewport" content="width=device-width, initial-scale=1"/>


<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Manrope:wght@300;400;500&family=Montserrat:wght@400;500;600;700;800&display=swap" rel="stylesheet">

<link href="/js/fancybox/jquery.fancybox.min.css" rel="stylesheet" />
<link href="/js/scroll/jquery.mCustomScrollbar.css" rel="stylesheet" />

<!--<link href="/fonts/stylesheet.css" rel="stylesheet">-->
<link href="/css/selectric.css" rel="stylesheet">
<link href="/css/slick.css" rel="stylesheet">
<link href="/css/style.css" rel="stylesheet">

<link href="/css/barsuk.css" rel="stylesheet">


<?if($dir === "/colors/"):?>
    <link rel='stylesheet' id='mfn-responsive-css' href='/css/old-styles/responsive.css' type='text/css' media='all' />
    <link rel='stylesheet' id='mfn-be-css' href='/css/old-styles/be.css' type='text/css' media='all' />
<?endif;?>

<!-- Yandex.Metrika counter -->
<script type="text/javascript" >
   (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
   m[i].l=1*new Date();
   for (var j = 0; j < document.scripts.length; j++) {if (document.scripts[j].src === r) { return; }}
   k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
   (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

   ym(53915065, "init", {
        clickmap:true,
        trackLinks:true,
        accurateTrackBounce:true,
        webvisor:true,
        trackHash:true
   });
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/53915065" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->
