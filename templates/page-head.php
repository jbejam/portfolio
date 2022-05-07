<?php
if (!defined('DEFAULT_BASE_URL')) {
    define('DEFAULT_BASE_URL', 'https://jbejam.github.io/portfolio');
}

if (!function_exists('gen_path')) {
    function gen_path($path) {
        return __DIR__ . DIRECTORY_SEPARATOR .  str_replace(array('/', '\\'), DIRECTORY_SEPARATOR, $path); ;
    }
}
if (!function_exists('get_baseurl')) {
    function get_baseurl(){
        if (!isset($_SERVER) || !isset($_SERVER['SERVER_NAME'])) {
            return DEFAULT_BASE_URL . '/';
        }
        $scheme = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off' ? 'https' : 'http') ;
        $url =  ($_SERVER['SERVER_NAME']==='localhost')?'localhost/jesusbejarano':$_SERVER['SERVER_NAME']; 

        return $scheme . '://' . $url . '/';
    }
}

?>
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>
    <meta name="description" content='Hello! My name is Jesús Bejarano. I&#39;m a designer, front-end developer from Venezuela.'/>
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1.0">
    <title>Jesús Bejarano. Web designer and developer.</title>
    <link rel="shortcut icon" href="<?=get_baseurl();?>img/favicon.ico" media="all"/>
    <link rel="apple-touch-icon" href="<?=get_baseurl();?>img/apple-touch-icon.jpg" media="all"/>
    
    <link rel="stylesheet" href="<?=get_baseurl();?>css/fonts.min.css" media="x">
    
    <link rel="stylesheet" href="<?=get_baseurl();?>/css/highlight/dracula.css" media="x">
    
    
    <link rel="stylesheet" href="<?=get_baseurl();?>css/main.css" media="all"/>
    <script>window.Hugo = {}; window.Hugo.Site = {}; window.Hugo.Site.BaseURL = "/";</script>
    <script>window.MQ=Object.freeze({tiny:window.matchMedia("only screen and (max-width: 33.9em)").matches,tinyUp:window.matchMedia("only screen and (min-width: 34em)").matches,small:window.matchMedia("only screen and (max-width: 47.9em)").matches,smallUp:window.matchMedia("only screen and (min-width: 48em)").matches,medium:window.matchMedia("only screen and (max-width: 61.9em)").matches,mediumUp:window.matchMedia("only screen and (min-width: 62em)").matches,large:window.matchMedia("only screen and (max-width: 74.9em)").matches,largeUp:window.matchMedia("only screen and (min-width: 75em)").matches}),function(e,n,t){"use strict";var i="(max-width: 62em)";t.doSync=function(){var e=[].slice.call(arguments,0,1)[0],n=[].slice.call(arguments,1);void 0!==window.requestAnimationFrame?t.requestAnimationFrame(function(){e.apply(this,n)}):setTimeout(e,0,n)},t.appendStyle=function(e){document.head.appendChild(e)},t.inStyleSheets=function(e){return[].some.call(document.styleSheets,function(n){var t=n.href;return t&&t.indexOf(e)>-1})},t.setMedia=function(e,n){var i=e.href;n=n,Array.isArray(e)&&(e=e[0],i=e.href);var a=t.inStyleSheets(i);return a?(e.media=n,!0):void t.doSync(t.setMedia,e,n)},t.setMediaMobile=function(e){t.setMedia(e,i)},t.setMediaDesktop=function(e){t.setMedia(e,"all")},[].forEach.call(e,function(e){var n=e.media;"x"===n&&t.setMediaDesktop(e),"m"===n&&t.setMediaMobile(e)})}(document.getElementsByTagName("link"),window.document.styleSheets,window),function(){"use strict";function e(e){var n=document.head,t=new XMLHttpRequest;t.open("GET",e,!0),t.responseType="document",t.send(),t.onload=function(e){try{var i=t.responseXML.documentElement;i.style.display="none",n.insertBefore(i,n.childNodes[n.childNodes.length-1])}catch(e){console.log(e)}}}var n=document;n.head;e("<?=get_baseurl();?>mysvg/sprite.symbol.svg")}();</script>
</head>