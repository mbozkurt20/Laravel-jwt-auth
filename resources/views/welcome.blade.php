<html class="no-js" lang="en"><!--<![endif]--><head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <!--[if ie]><meta http-equiv='X-UA-Compatible' content="IE=edge,IE=9,IE=8,chrome=1" /><![endif]-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

    <link rel="icon" href="assets/favicon.ico" type="image/x-icon">
    <link rel="shortcut icon" href="assets/favicon.ico" type="image/x-icon">


    <title>Portfolio | Synergy - Responsive and Interactive HTML Portfolio </title>

    <meta name="description" content="">
    <meta name="author" content="MEDIACREED.COM">

    <link rel="stylesheet" href="css/style.css">
    <link href="http://fonts.googleapis.com/css?family=PT+Sans:400,700,400italic|PT+Sans+Caption:400,700" rel="stylesheet" type="text/css">

    <!-- SCRIPT IE FIXES -->
    <!--[if lt IE 9]>
    <script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    <!-- END SCRIPT IE FIXES-->
    <style>
        /**********************************************/
        /*     RESET             					  */
        /**********************************************/

        html, body, div, span, applet, object, iframe, h1, h2, h3, h4, h5, h6, p, blockquote, pre, a, abbr, acronym, address, big, cite, code, del, dfn, em, img, ins, kbd, q, s, samp, small, strike, strong, sub, sup, tt, var, b, u, i, center, dl, dt, dd, ol, ul, li, fieldset, form, label, legend, table, caption, tbody, tfoot, thead, tr, th, td, article, aside, canvas, details, embed, figure, figcaption, footer, header, hgroup, menu, nav, output, ruby, section, summary, time, mark, audio, video { margin: 0; padding: 0; border: 0; font-size: 100%; font: inherit; vertical-align: baseline; }
        /* HTML5 display-role reset for older browsers */
        article, aside, details, figcaption, figure, footer, header, hgroup, menu, nav, section {  display: block; }
        body { line-height: 1; }
        ol, ul { list-style: none; }
        blockquote, q { quotes: none; }
        blockquote:before, blockquote:after, q:before, q:after { content: ''; content: none; }
        table { border-collapse: collapse; border-spacing: 0; }


        /**********************************************/
        /*     CLEAR             					  */
        /**********************************************/
        .clear {
            clear: both;
            display: block;
            overflow: hidden;
            visibility: hidden;
            width: 0;
            height: 0;
        }
        .clearfix:after {
            clear: both;
            content: '';
            display: block;
            font-size: 0;
            line-height: 0;
            visibility: hidden;
            width: 0;
            height: 0;
        }
        /*
The following zoom:1 rule is specifically for IE6 + IE7.
Move to separate stylesheet if invalid CSS is a problem.
*/

        * html .clearfix,
        *:first-child+html .clearfix {
            zoom: 1;
        }

        /* ================================================================== */
        html.cssClass
        {
            -webkit-transform: scale(1);/* stupid 0.98875 value that doesn't allow us to use 100% width and height in Chrome */
            -webkit-transform-origin: 0 0;
        }

        html, body
        {
            height: 100%;
            overflow:hidden;
            -webkit-user-select: none;
            -khtml-user-select: none;
            -moz-user-select: none;
            -o-user-select: none;
            user-select: none;

        }
        *:not(html)
        {
            -webkit-transform: translate3d(0, 0, 0);
        }
        #console-log
        {
            position: absolute;
            display:none;
            top: 140px;
            left: 5px;
            width: 200px;
            height: 200px;
            background: #FFFFFF;
            z-index: 9999999;
            overflow:auto;

        }
        #console-log span
        {
            position: relative;
            float:left;
            margin-top: 4px;
            width: 200px;
            font-family: PT Sans Caption; /*'Open Sans',sans-serif;*/
            font-size: 14px;
            color: #444444;
            text-decoration:none;
            outline:none;
        }
        body
        {
            visibility:hidden;
        }
        #template-wrapper
        {
            position:fixed;
            left: 0px;
            top: 0px;
            width:100%;
            height: 100%;
        }
        /* -------- THEME COLOR SETUP ---------------------- */
        #menu-hider-background,
        #menu-hider-icon,
        .menu-option-background,
        .menu-option-background-selected,
        .sub-menu-option-background,
        .sub-menu-option-background-selected,
        #module-scrollbar-dragger,
        .draggerH-preview,
        .filter-button.selected,
        .draggerH,
        .tooltip-background,
        .smartphone-option-background,
        .smartphone-option-background-selected
        {
            background-color:#d00355;
        }
        .thumb-selected img
        {
            border-color:#d00355;
        }
        /* -------- END THEME COLOR SETUP ------------------ */

        .main-template-loader
        {
            position:absolute;
            visibility:visible;
            width: 100%;
            height: 100%;
            background-color:#ffffff;
            background-image:url(../assets/loaders/loader.gif);
            background-repeat:no-repeat;
            background-position:center;
            z-index: 1000;
        }

        .menu-background
        {
            position:absolute;
            width: 100%;
            height: 100%;
            top:0px;
            left:0px;
            z-index:7;
        }
        .menu-background, .sub-menu-holder
        {
            background-color: #ffffff;
            background-image:url(../assets/patterns/menu/menu_pattern_1.png);/*url(../assets/patterns/pattern_menu.png);*/
            background-repeat:repeat;
        }

        /* ============================ 1. MENU & LOGO ====================== */

        #menu-container
        {
            position:absolute;
            visibility:hidden;
            height: 100%;
            left:0px;
            z-index:10;
            top: 0px;
        }

        /* -------- MENU AND  SUBMENU SIZE ------- */
        .template-menu
        {
            margin: 0 0 0 20px;
        }
        .template-menu,
        .menu-option-holder,
        .menu-option-background-selected,
        .menu-option-text,
        .sub-menu-option-text
        {
            width: 210px;
        }
        .sub-menu-holder,
        .menu-option-background
        {
            margin-left:210px;
        }
        .sub-menu-holder
        {
            width: 84%;
            margin-left:220px; /*  + menu-hider width so the submenu appears after the vertical hider strip*/
        }

        /* START fix IE 8: we add 2 more px so it fills the gap.
In the other browser this 2px don't matter because
submenu holder has overflow hidden */
        .sub-menu-option-holder,
        .sub-menu-option-background-selected
        {
            width: 212px;
        }

        .sub-menu-option-background
        {
            margin-left:212px;
        }
        /* END fix IE 8*/
        /* -------- END MENU AND  SUBMENU SIZE --- */

        .menu-content-holder
        {
            position:relative;
            float:left;
            height:100%;
        }
        #menu-hider
        {
            position:relative;
            float:left;
            width:10px;
            height:100%;
            z-index:-1;
            display:none;
        }
        #menu-hider-background
        {
            position:absolute;
            width:10px;
            height: 100%;
            left:0px;
            z-index:2;
        }
        #menu-hider-icon
        {
            position:absolute;
            left:3px;
            top: 68px;
            height: 30px;
            width: 20px;
            /*background-color:#d00355;*/
            background-image:url(../assets/synergy_sprite.png);
            background-repeat:no-repeat;
            background-position: -274px -202px;
            overflow:hidden;
            cursor:hand;
            cursor:pointer;
            z-index:1;
        }

        .template-logo
        {
            clear:both;
            position:relative;
            float:left;
            background-image:url(../assets/media/synergy_html5_logo.png);
            background-repeat:no-repeat;
            width: 140px;
            height: 90px;
            margin: 28px 0 28px -70px;
            z-index: 8;
            left:50%;
            cursor:pointer;
        }
        .template-menu
        {
            clear:both;
            position:relative;
            float:left;
            padding:0;
            z-index:9;
        }
        .menu-option-holder, .sub-menu-option-holder, .smartphone-option-holder
        {
            margin-bottom: 1px;
        }
        .menu-option-holder:hover, .sub-menu-option-holder:hover, .smartphone-option-holder:hover
        {
            cursor: pointer;
            cursor: hand;
        }
        .menu-option-holder,
        .menu-option-background,
        .menu-option-background-selected,
        .menu-option-text,
        .sub-menu-option-holder,
        .sub-menu-option-background,
        .sub-menu-option-background-selected,
        .sub-menu-option-text
        {
            height:32px;
        }
        .menu-option-background,
        .menu-option-background-selected,
        .sub-menu-option-background,
        .sub-menu-option-background-selected
        {
            position:absolute;
            z-index:1;
        }
        .sub-menu-option-text,
        .menu-option-text,
        .smartphone-option-text
        {
            position:absolute;
            z-index:2;
        }
        .menu-option-text a, .menu-option-sign, .sub-menu-option-text a, .smartphone-option-text a
        {
            display:block;
            padding-top:10px;
            padding-bottom:10px;
            padding-left:14px;
            font-family: PT Sans Caption; /*'Open Sans',sans-serif;*/
            font-size: 12px;
            /*letter-spacing:1px;*/
            color: #777777;
            overflow:hidden;
            text-decoration:none;
            outline:none;
        }
        .menu-option-sign
        {
            position:absolute;
            top:0px;
            right: 16px;
            padding-left:10px;
            text-align:right;
        }
        .menu-option-text .selected, .menu-option-sign .selected, .sub-menu-option-text .selected, .smartphone-option-text .selected
        {
            color: #ffffff;
        }
        /* ================ SUB MENU ==================== */

        .sub-menu-holder
        {
            position:relative;
            display:none;
            overflow:hidden;
        }
        .sub-menu-option-holder
        {
            overflow:hidden;
        }
        .sub-menu-option-holder:last-child {
            margin-bottom: 0px;
        }
        .sub-menu-option-text a
        {
            font-family: PT Sans;
            font-size: 13px;
        }

        #module-holder
        {

            position:relative;
            float:left;
            height:100%;
            overflow:hidden;
            background-color:#330000;
        }
        /* ================ SUB MENU ==================== */
        #audio-player{
            clear:both;
            position:relative;
            float:left;
            top: 10px;
            left: 20px;
            height: 70px;
            /*background-color: #3f3f3f;*/
            z-index:12;
            overflow:hidden;
        }
        #audio-items{
            display:none;
        }
        #audio-player-holder{
            position:absolute;
            top:40px;
            left:0px;
            width: 100%;
            height: 30px;
            overflow:hidden;
        }
        #audio-player-tooltip{
            position:absolute;
            float:left;
            width: 88%;
            height: 35px;
            top: 0px;
            left:0px;
            display:none;
        }

        .audio-player-tooltip-hook{
            position:absolute;
            top: 26px;
            left:36%;
            width: 0px;
            height: 0px;
            border-left: 7px solid transparent;
            border-right: 7px solid transparent;
            border-top: 9px solid #171717;
        }
        #audio-tooltip-holder{
            position:absolute;
            height: 26px;
            width: 100%;
            z-index:1;
        }
        .audio-player-tooltip-title{
            position:absolute;
            top: 3px;
            left: 2%;
            width: 96%;
            height: 20px;
            overflow:hidden;
            /*background-color:#373737;*/
            z-index:2;
        }
        .audio-player-tooltip-title span{
            position:relative;
            left: 1px;
            display:inline-block;
            white-space: nowrap;
            font-family:PT Sans;
            font-weight: normal;
            font-size:12px;
            line-height: 160%;
            text-align: center;
            color: #FFFFFF;
            text-decoration: none;
        }
        .audio-tooltip-backg{
            position:absolute;
            height: 100%;
            width: 100%;
            background-color: #171717;
            z-index:1;
        }
        #audio-player-options-holder{
            position:absolute;
            top:0px;
            left:30px;
            height: 30px;
            overflow:hidden;
        }

        #audio-options-button, #audio-prev-track, #audio-play-pause-track, #audio-next-track, #audio-volume-speaker{
            float:left;
            height: 30px;
            width: 28px;
            cursor:pointer;
            z-index:3;
        }
        #audio-options-button{ width: 30px; }
        #audio-volume-bar{
            position:relative;
            float:left;
            height: 30px;
            width: 68px;
        }
        /*#audio-prev-track, #audio-play-pause-track, #audio-next-track, #audio-volume-speaker{ background-color: #171717; }*/
        #audio-volume-bar{ background-color: #171717; }
        .audio-options-button-backg, .audio-controls-backg{
            position:absolute;
            z-index:1;
            height: 30px;
            width: 30px;
        }
        .audio-options-button-backg{ background-color: #d00355; }
        .audio-controls-backg{ background-color: #171717; }

        .audio-options-button-sign, .audio-prev-track-sign, .audio-play-track-sign, .audio-pause-track-sign,
        .audio-next-track-sign, .audio-volume-on-sign, .audio-volume-off-sign{
            position:absolute;
            height: 30px;
            width: 29px;
            background-image:url(../assets/synergy_sprite.png);
            background-repeat:no-repeat;
            z-index:2;
        }
        .audio-options-button-sign{ background-position: -360px -200px; }
        .audio-prev-track-sign{ background-position: -390px -200px; }
        .audio-play-track-sign{ background-position: -420px -200px; }
        .audio-pause-track-sign{ background-position: -450px -200px; }
        .audio-next-track-sign{ background-position: -480px -200px; }
        .audio-volume-on-sign{ background-position: -510px -200px; }
        .audio-volume-off-sign{ background-position: -542px -200px; }

        .audio-volume-bar-scrub-backg, .audio-volume-bar-scrub-current{
            position:absolute;
            top: 50%;
            width: 58px;
            height: 3px;
            margin-top: -1px;
            left: 5px;
            background-color: #535353;
            cursor:pointer;
        }
        .audio-volume-bar-scrub-current{
            width: 40px;
            background-color: #303030;
        }
        #footer-social-tooltip
        {
            position:absolute;
            display:block;
            margin: auto;
            bottom: 89px;
            left: 55px;
            width: 150px;
            height: 20px;
            background-color: #FFFFFF;
            z-index: 12;
            display: none;
            visibility: hidden;
        }
        footer
        {
            position:absolute;
            bottom: 8px;
            width: 230px;
            height: 74px;
            /*left: -230px;*/
            display:none;
            left: 0px;
            /* visibility:hidden;*/
            z-index: 11;
        }
        #footer-social
        {
            position:relative;
            float:left;
            margin: auto;
            width: 100%;
            height: 28px;
            overflow:hidden;
        }
        #footer-social-holder
        {
            display:block;
            margin: 0px auto;
            width: 150px;
            height: 28px;
        }

        #footer-social-tooltip span
        {
            display:block;
            margin:  auto;
            padding-top: 3px;
            font-family:PT Sans;
            font-weight: bold;
            font-size:13px;
            color:#444444;
            text-align:center;
            overflow:hidden;
        }
        #footer-social-holder ul
        {
            list-style-type:none;
            float:left;
            width: 150px;
            height: 25px;
        }
        #footer-social-holder ul li
        {
            float:left;
            width: 26px;
            height: 26px;
            cursor:pointer;
            margin-right:4px;
        }
        #footer-social-holder ul li a{
            display:block;
            width:100%;
            height:100%;
            /*outline: 0px solid #d00355;*/
        }
        /*#footer-social-holder ul li a:hover{
	outline: 1px solid;
	outline-color:#d00355;
}*/
        #footer-social-holder ul .twitter{ background-position:0 -100px; }
        #footer-social-holder ul .facebook{ background-position:-30px -100px; }
        #footer-social-holder ul li.google{ background-position:-60px -100px; }
        #footer-social-holder ul li.dribbble{ background-position:-90px -100px; }
        #footer-social-holder ul li.flickr{ background-position:-120px -100px; }

        #footer-social-holder ul li.twitter:hover{ background-position:0px -130px; }
        #footer-social-holder ul li.facebook:hover{ background-position:-30px -130px; }
        #footer-social-holder ul li.google:hover{ background-position:-60px -130px; }
        #footer-social-holder ul li.dribbble:hover{ background-position:-90px -130px; }
        #footer-social-holder ul li.flickr:hover{ background-position:-120px -130px; }

        #footer-text
        {
            display:block;
            position:relative;
            margin: 44px auto;
            width: 100%;
        }
        #footer-copyright
        {
            position:absolute;
            top: 0px;
            display:block;
            width: 100%;
        }
        #footer-copyright a
        {
            position:relative;
            float:left;
            width: 100%;
            font-family:PT Sans;
            font-weight: normal;
            font-size:12px;
            line-height: 170%;
            padding: 9px 0;
            color:#777777;
            text-align:center;
            text-decoration:none;
        }
        #footer-copyright a:hover
        {
            color:#ffffff;
            text-decoration: underline;
        }



        #footer-social-holder ul li,
        #control-pin,
        .control-pin-hover,
        .client-over,
        .client-out
        { background-image:url(../assets/synergy_sprite.png); }


        /* ============================ 2. CONTENT ========================== */

        #module-container
        {
            position:absolute;
            top: 0px;
            width:100%;
            height:100%;
            z-index:6;
        }
        #module-container-old
        {
            position:absolute;
            top: 0px;
            left: 240px;
            width:100%;
            height:100%;
            z-index:3;
        }
        #load-container
        {
            position:absolute;
            left: 260px;
            top:0px;
            width:100%;
            height:100%;
            background-color:#669933;
            z-index:6;
            display:none;
        }
        #loading-animation
        {
            display:none;
            visibility: hidden;
            position: fixed;
            right: 0px;
            top:50%;
            width: 48px;
            height: 33px;
            background-color:#FFFFFF;
            z-index: 10;
            /**** START CSS3 SHADOW CROSS-BROWSER ****/
            -moz-box-shadow: -1px 1px 2px #0c0c0c;
            -webkit-box-shadow: -1px 1px 2px #0c0c0c;
            box-shadow: -1px 1px 2px #0c0c0c;

            /* For IE 8 */
            -ms-filter: "progid:DXImageTransform.Microsoft.Shadow(Strength=2, Direction=-120, Color='#0c0c0c')";
            /* For IE 5.5 - 7 */
            filter: progid:DXImageTransform.Microsoft.Shadow(Strength=2, Direction=-120, Color='#0c0c0c');
            /**** END CSS3 SHADOW CROSS-BROWSER ****/
        }
        #loading-animation img
        {
            position:relative;
            float: left;
            top: 11px;
            margin-left: 16px;
        }
        /* ============================ 2.1 SLIDESHOW ======================= */

        #slideshow, .slideshow-slide
        {
            width:100%;
            height:100%;
        }

        /* == 2.2 - SLIDESHOW == */

        #slide-current
        {
            position: absolute; top: 0; left: 0px; visibility:hidden; display:none; z-index:1;
        }

        .slideshow-hidden { visibility:hidden; }

        .bgStart { position: fixed; top: 0; left: 0; visibility:hidden; }
        .bgwidth { width: 100%; }
        .bgheight { height: 100%; }

        #slideshow-thumbs
        {
            position:absolute;
            bottom: -84px;
            z-index:4;
        }
        #slideshow-thumbs-background
        {
            position:absolute;
            top:0px;
            left:0px;
            background-color:#FFFFFF;
            width: 100%;
            height: 82px;/* 50 img height + 8 (margin top and bottom )+ 4 ( border bottom and top )*/
        }
        #slideshow-thumbs-holder
        {
            position:relative;
            float:left;
            top: 0px;
            margin: 4px !important;
            height: 74px;
        }
        /*--------------------------------------------*/

        .slideshow-thumbs-arrow-forward, .slideshow-thumbs-arrow-backward
        {
            position:relative;
            float:left;
            top: 50%;
            margin-top: -15px;
            margin-right: 4px;
            width:30px;
            height:30px;
            cursor:pointer;

            -webkit-user-select: none;
            -khtml-user-select: none;
            -moz-user-select: none;
            -o-user-select: none;
            user-select: none;
        }
        .slideshow-thumbs-arrow-forward{ margin-left: 4px; margin-right: 0px;}
        .slideshow-thumbs-arrow-backg
        {
            position:absolute;
            top:0px;
            left:0px;
            width:100%;
            height:100%;
            background-color:#3f3f3f;
        }
        .slideshow-thumbs-arrow-backward-sign,
        .slideshow-thumbs-arrow-forward-sign
        {
            position:relative;
            float:left;
            width:100%;
            height:100%;
            background-image:url(../assets/synergy_sprite.png);
            background-repeat:no-repeat;
            background-position:center;
        }
        .slideshow-thumbs-arrow-backward-sign{ background-position: -202px -202px; }
        .slideshow-thumbs-arrow-forward-sign{ background-position: -270px -202px; }


        /*--------------------------------------------*/

        #slideshow-thumbs-content
        {
            position:relative;
            float:left;
            width: 448px;
            height: 74px;
            overflow:hidden;
        }
        .horizontal-fix-slideshow-thumbs
        {
            position:relative;
        }
        #slideshow-thumbs-container
        {
            position:relative;
            float:left;
            height: 74px;
            overflow:hidden;
        }
        .slideshow-thumb-holder
        {
            position:relative;
            float:left;
            width: 109px;
            height: 74px;
            margin-right: 4px;
            background-image:url(../assets/loaders/loader.gif);
            background-repeat:no-repeat;
            background-position:center;
            cursor:pointer;
            cursor:hand;
            overflow:hidden;
        }
        .slideshow-thumb-holder img
        {
            position:absolute;
            top: 0px;
            outline: none;
            border: 2px solid #FFFFFF;
            display:block;
        }
        .slideshow-thumb-holder-hover
        {
            position:absolute;
            top: 0px;
            width: 105px;
            height: 50px;
            margin: 2px !important;
            background-color:#444444;

            -ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=40)";/* IE 8 */
            filter: alpha(opacity=40);/* IE 5-7 */

            -moz-opacity: 0.4;/* Netscape */
            -khtml-opacity: 0.4;/* Safari 1.x */
            opacity: 0.4;/* Other browsers */
        }

        .thumb-selected img
        {
            border: 2px solid;
            display:block;
        }
        #slideshow-thumbs-counter
        {
            position:relative;
            float:left;
            width: 40px;
            height: 54px;
        }
        #slideshow-thumbs-counter span
        {
            margin: 28px auto;
            display:block;
            font-family:Century Gothic, Arial;
            font-weight: normal;
            font-size:16px;
            color:#0c0c0c;
            text-align:center;
        }


        #slideshow-captions
        {
            position:absolute;
            top: 350px;
            left: 300px;
            display:inline-block;
            opacity:1;
            z-index:3;
        }
        #slideshow-captions-text
        {
            position:absolute;
            background-color:#FFF;
            display:none;
            white-space:nowrap;
            overflow:hidden;

            /**** CSS3 SHADOW CROSS-BROWSER ****/
            -moz-box-shadow: 2px 2px 2px #0c0c0c;
            -webkit-box-shadow: 2px 2px 2px #0c0c0c;
            box-shadow: 2px 2px 2px #0c0c0c;

            /* For IE 8 */
            -ms-filter: "progid:DXImageTransform.Microsoft.Shadow(Strength=2, Direction=120, Color='#0c0c0c')";
            /* For IE 5.5 - 7 */
            filter: progid:DXImageTransform.Microsoft.Shadow(Strength=2, Direction=120, Color='#0c0c0c');
        }

        #slideshow-captions-text p
        {
            padding: 10px !important;
            font-family: PT Sans;
            font-size:20px;
            color:#3f3f3f;
        }

        /* ============================ 2.0 MODULE POSITIONS ======================= */
        .module-position-lc {
            left:0px;
        }
        .module-position-cc
        {

        }
        .module-position-no-shadow-cc
        {
            left:50%;
        }
        .module-position-no-shadow-lb
        {
            bottom:0px;
        }
        .module-position-rc
        {
            position:fixed;
            right:0px;
        }
        .module-position-bc
        {

        }
        .module-position-lb
        {

        }
        /* ============================ 2.0 END MODULE POSITIONS =================== */



        /* ============================ 2.0 UTILS CLASSES ============================= */
        .opacity_10
        {
            -ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=100)";/* IE 8 */
            filter: alpha(opacity=100);/* IE 5-7 */
            -moz-opacity: 1;/* Netscape */
            -khtml-opacity: 1;/* Safari 1.x */
            opacity: 1;/* Other browsers */
        }
        .opacity_9_7
        {
            -ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=97)";/* IE 8 */
            filter: alpha(opacity=97);/* IE 5-7 */
            -moz-opacity: 0.97;/* Netscape */
            -khtml-opacity: 0.97;/* Safari 1.x */
            opacity: 0.97;/* Other browsers */
        }
        .opacity_9
        {
            -ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=90)";/* IE 8 */
            filter: alpha(opacity=90);/* IE 5-7 */
            -moz-opacity: 0.9;/* Netscape */
            -khtml-opacity: 0.9;/* Safari 1.x */
            opacity: 0.9;/* Other browsers */
        }
        .opacity_8
        {
            -ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=80)";/* IE 8 */
            filter: alpha(opacity=80);/* IE 5-7 */
            -moz-opacity: 0.8;/* Netscape */
            -khtml-opacity: 0.8;/* Safari 1.x */
            opacity: 0.8;/* Other browsers */
        }
        .opacity_6
        {
            -ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=60)";/* IE 8 */
            filter: alpha(opacity=60);/* IE 5-7 */
            -moz-opacity: 0.6;/* Netscape */
            -khtml-opacity: 0.6;/* Safari 1.x */
            opacity: 0.6;/* Other browsers */
        }
        .opacity_4
        {
            -ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=40)";/* IE 8 */
            filter: alpha(opacity=40);/* IE 5-7 */
            -moz-opacity: 0.4;/* Netscape */
            -khtml-opacity: 0.4;/* Safari 1.x */
            opacity: 0.4;/* Other browsers */
        }
        .opacity_2
        {
            -ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=20)";/* IE 8 */
            filter: alpha(opacity=20);/* IE 5-7 */
            -moz-opacity: 0.2;/* Netscape */
            -khtml-opacity: 0.2;/* Safari 1.x */
            opacity: 0.2;/* Other browsers */
        }
        .opacity_0
        {
            -ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=0)";/* IE 8 */
            filter: alpha(opacity=0);/* IE 5-7 */
            -moz-opacity: 0;/* Netscape */
            -khtml-opacity: 0;/* Safari 1.x */
            opacity: 0;/* Other browsers */
        }
        .shadow-side-right
        {
            -moz-box-shadow: 1px 1px 2px #0c0c0c;
            -webkit-box-shadow: 1px 1px 2px #0c0c0c;
            box-shadow: 1px 1px 2px #0c0c0c;
            -ms-filter: "progid:DXImageTransform.Microsoft.Shadow(Strength=2, Direction=120, Color='#0c0c0c')";/* For IE 8 */
            filter: progid:DXImageTransform.Microsoft.Shadow(Strength=2, Direction=120, Color='#0c0c0c');/* For IE 5.5 - 7 */
        }
        .shadow-side-left
        {
            -moz-box-shadow: -1px 1px 2px #0c0c0c;
            -webkit-box-shadow: -1px 1px 2px #0c0c0c;
            box-shadow: -1px 1px 2px #0c0c0c;
            -ms-filter: "progid:DXImageTransform.Microsoft.Shadow(Strength=2, Direction=-120, Color='#0c0c0c')";/* For IE 8 */
            filter: progid:DXImageTransform.Microsoft.Shadow(Strength=2, Direction=-120, Color='#0c0c0c');/* For IE 5.5 - 7 */
        }
        .shadow-side-all
        {
            -moz-box-shadow: 0px 0px 2px #0c0c0c;
            -webkit-box-shadow: 0px 0px 2px #0c0c0c;
            box-shadow: 0px 0px 2px #0c0c0c;

            -ms-filter: "progid:DXImageTransform.Microsoft.Shadow(OffX=0, OffY=0, Strength=2, Color='#0c0c0c')";/* For IE 8 */
        }

        .shadow-side-all-pricing-tables
        {
            -moz-box-shadow: 0px 0px 6px #0c0c0c;
            -webkit-box-shadow: 0px 0px 6px #0c0c0c;
            box-shadow: 0px 0px 6px #0c0c0c;

            -ms-filter: "progid:DXImageTransform.Microsoft.Shadow(OffX=0, OffY=0, Strength=6, Color='#909090')";/* For IE 8 */
        }
        .box-sizing{
            -webkit-box-sizing: border-box; /* Safari/Chrome, other WebKit */
            -moz-box-sizing: border-box;    /* Firefox, other Gecko */
            box-sizing: border-box;         /* Opera/IE 8+ */
        }
        /* ============================ 2.0 END UTILS CLASSES ========================= */

        #module-scrollbar-holder
        {
            display:none;
            position:relative;
            float:left;
            width: 10px;
            height: 100%;
            z-index:1;
        }
        #module-scrollbar-holder_v2
        {
            display:none;
            position:absolute;
            top: 0px;
            right: 0px;
            width: 10px;
            height: 100%;
            z-index:3;
        }
        #module-scrollbar-background
        {
            background-color: #EEEEEE;
            height: 100%;
            width: 100%;
        }
        #module-scrollbar-dragger
        {
            position:absolute;
            top: 0px;
            width: 100%;
            height: 100px;
        }

        /* ============================ 3.0 GENERAL MODULES =========================== */
        #module-container-holder
        {
            position:absolute;
            z-index:2;
            height:100%;
            visibility:hidden;
        }

        /* ---------------------------- 3.1.1 HOME LAYOUT 2 --------------------------- */
        #module-home-layout2
        {
            float: left;
            position: relative;
            height:100%;
            z-index: 1;
        }
        .module-home-layout2
        {
            width:960px;
        }
        #module-home-layout2-holder
        {

            display:inline-block;
            position:relative;
            margin:40px 25px;
        }
        #home-layout2-banner
        {
            position:relative;
            float:left;
            width:100%;
            margin: 0px;
            padding: 0px;
        }
        .banner-timer-graphic{
            position:absolute;
            height: 4px;
            width: 0%;
            top: 0px;
            left: 0px;
            background-color: #d00355;
            z-index: 2;
        }
        #standard-banner{
            float:left;
            top:0px;
            left:0px;
            width:100%;
            height:440px;
            overflow:hidden;
            z-index: 1;
            background-image:url(../assets/loaders/loader_circle.gif);
            background-repeat:no-repeat;
            background-position:center;
        }
        #standard-banner a{
            position:absolute;
            top: 0px;
            left: 0px;
            display:none;
        }
        #standard-banner a img{width:100%;}
        #standard-banner a.selected{ display:inline;}
        .banner-desc-tr{ top: 100px; right: 50px; }
        .banner-desc-cr{ top: 200px; right: 50px; }
        .banner-desc-br{ bottom: 100px; right: 50px; }
        .banner-desc-tl{ top: 100px; left: 50px; }
        .banner-desc-cl{ top: 200px; left: 50px; }
        .banner-desc-bl{ bottom: 100px; left: 50px; }
        .banner-desc {
            position:absolute;
            width: 352px;
        }
        .banner-desc span{
            position:relative;
            padding: 30px;
            display:block;
            font-family:PT Sans;
            font-weight: normal;
            font-size:14px;
            line-height: 140%;
            text-align: left;
            color: #FFFFFF;
            text-decoration: none;
        }
        .banner-desc span h1{ font-weight: bold; font-size:20px; margin-bottom:20px; color:#ffffff; }
        .banner-desc span p{  }
        .desc-background{
            position:absolute;
            top:0px;
            left:0px;
            width:100%;
            height: 100%;
            background-color:#333333;
        }
        #standard-banner-controls
        {
            clear: both;
            position:relative;
            float: left;
            left: 50%;
            margin-top: 10px;
            height: 31px;
            z-index: 2;
        }
        #control-pin
        {
            float:left;
            width: 20px;
            height: 21px;
            margin: 5px 0px 5px 5px;
            cursor:pointer;
            background-position:0 -200px;
        }
        #control-pin.last{ margin: 5px; }
        .control-pin-hover
        {
            float:left;
            width: 20px;
            height: 21px;
            margin: 0px;
            background-position:-30px -200px;
        }

        .home-layout2-title
        {
            position:relative;
            float:left;
            margin-top: 20px;
            margin-left: 20px;
            font-family:PT Sans;
            font-weight: bold;
            font-size:20px;
            color:#444444;
            text-align:left;
        }
        .home-layout-clients
        {
            position:relative;
            float:left;
            width:100%;
            background-color:#f1f1f1;
            text-align:center;
        }
        .home-layout-clients-title
        {
            position:relative;
            float:left;
            margin-top: 20px;
            margin-left: 20px;
            font-family:PT Sans;
            font-weight: bold;
            font-size:20px;
            color:#444444;
            text-align:left;

        }
        .home-layout-clients a
        {
            margin: 10px 0px 10px 13px;
            color:#d00355;
            font-weight:normal;
            text-decoration:none;
            width: 166px;
            height: 73px;
            position:relative;
            float:left;
        }

        .client-over, .client-out { position:absolute; top:0px; left:0px; width:100%; height: 100%; }
        .client-over, .client-out { /*background-image:url(../assets/synergy_sprite.png);*/ }

        #client1 .client-out{ background-position:0px -280px; }
        #client1 .client-over{ background-position:0px -360px; }

        #client2 .client-out{ background-position:-170px -280px; }
        #client2 .client-over{ background-position:-170px -360px; }

        #client3 .client-out{ background-position:-340px -280px; }
        #client3 .client-over{ background-position:-340px -360px; }

        #client4 .client-out{ background-position:-510px -280px; }
        #client4 .client-over{ background-position:-510px -360px; }

        #client5 .client-out{ background-position:-680px -280px; }
        #client5 .client-over{ background-position:-680px -360px; }

        .home-layout2-content
        {
            position:relative;
            float:left;
            margin-top: 30px;
            margin-bottom: 30px;
            width:100%;
            background-color:#f1f1f1;
        }
        .home-layout2-content ul
        {
            position:relative;
            float:left;
            margin: 0px 30px;
            padding: 0;
            list-style-type: none;
            text-align: center;
        }
        .home-layout2-content ul li
        {
            position:relative;
            float:left;
            width: 190px;
            margin: 20px 30px 20px 0px;
        }
        .layout2-icon-holder1, .layout2-icon-holder2, .layout2-icon-holder3, .layout2-icon-holder4
        {
            position:relative;
            float:left;
            width: 100%;
            height: 101px;
            background-position:center;
            background-repeat:no-repeat;
        }
        .layout2-icon-holder1{
            background-image:url(../assets/media/home/home_layout2/icons/1.png);
        }
        .layout2-icon-holder2{
            background-image:url(../assets/media/home/home_layout2/icons/2.png);
        }
        .layout2-icon-holder3{
            background-image:url(../assets/media/home/home_layout2/icons/3.png);
        }
        .layout2-icon-holder4{
            background-image:url(../assets/media/home/home_layout2/icons/4.png);
        }
        .layout2-description, .layout2-description p, .layout2-description span
        {
            position:relative;
            float:left;
            width: 100%;
        }
        .layout2-description p
        {
            width: 100%;
            margin-top: 15px;
            font-family:PT Sans;
            font-weight: bold;
            font-size:16px;
            color:#3f3f3f;
            text-align:center;
            line-height:100%;
        }
        .layout2-description span
        {
            margin-top: 15px;
            font-family:PT Sans;
            font-weight: normal;
            font-size:14px;
            color:#434343;
            text-align:justify;
            line-height:125%;
        }
        .layout2-description a
        {

        }
        /* ---------------------------- 3.1.1 END HOME LAYOUT 2 ----------------------- */

        /* ---------------------------- 3.1.2 HOME LAYOUT 3 --------------------------- */
        #module-home-layout3
        {
            float: left;
            position: relative;
            height:100%;
            z-index: 2;
        }
        .module-home-layout3
        {
            width:960px;
        }
        #home-top-block
        {
            position: relative;
            float: left;
            margin-bottom: 20px;
            height: auto;
            width: 100%;
        }
        #home-video-block
        {
            position:relative;
            float:left;
            margin-right: 20px;
            width:680px;
            height: 391px;
            background-image: url(../assets/media/home/home_layout3/home_layout3_video.jpg);
            background-position: center center;
            background-repeat: no-repeat;
        }
        #home-video-holder
        {
            display: none;
            float: left;
            height: 391px;
            overflow: hidden;
            position: relative;
            visibility: hidden;
            width: 680px;
        }

        #module-home-layout3-holder
        {
            display:inline-block;
            position:relative;
            margin:25px 25px;
        }

        #home3-advertise
        {
            position:relative;
            float:left;
            width:210px;
        }
        #home-advertise1
        {
            position:relative;
            float:left;
            width:210px;
            height: 185px;
            margin-bottom: 21px;
            background-color:#669933;
            box-shadow: 0 1px 2px rgba(0, 0, 0, 0.5);
        }
        .advertise-image
        {
            position:relative;
            float:left;
            width:210px;
            height: 148px;
            overflow:hidden;
        }
        .advertise-image img
        {
            position:abosolute;
            top:0px;
            left:0px;
            width: 210px;
            height:148px;
        }
        .advertise-details
        {
            position:relative;
            float:left;
            border-top: 1px solid #cecece;
            width:100%;
            height: 37px;
            text-align:center;
            background-color:#f1f1f1;
        }
        #home-advertise1, #home-advertise2
        {
            cursor:pointer;
            cursor:hand;
        }
        .advertise-details span
        {
            display: block;
            height: 24px;
            margin: 7px 0px;
            color: #0C0C0C;

            font-family: PT Sans;
            font-size: 18px;
            font-weight: bold;
            text-align: center;
            line-height:120%;


        }

        #home-advertise1 a, #home-advertise2 a{
            display:block;
            position:absolute;
        }

        #home-advertise2
        {
            position:relative;
            float:left;
            width:210px;
            height: 185px;
            background-color:#669933;
        }

        #home-testimonials img
        {
            display:inline-block;
            margin: 0px 15px;
        }
        .home-layout3-sperator
        {
            position:relative;
            float:left;
            margin-top: 25px;
            width:910px;/*100%;*/
            height:1px;
            background-color: #cecece;
        }
        .home-layout3-content
        {
            position:relative;
            float:left;
            margin-top: 25px;
            width:100%;
            height:600px;
        }
        /* ---------------------------- 3.1.2 END HOME LAYOUT 3 ----------------------- */


        /* ---------------------------- 3.2 TEXT PAGE MODULE -------------------------- */

        #module-text-page
        {
            float: left;
            position: relative;
            z-index: 2;
            /*height:100%;*/
        }
        #module-background-holder
        {
            position:absolute;
            top:0px;
            left: 0px;
            width:100%;
            height:100%;
        }
        #module-background{ z-index: 2; }
        .module-background
        {
            position: absolute;
            top: 0;
            left: 0;
            visibility:hidden;
            display:none;
            z-index:1;
        }
        .title-holder
        {
            position:relative;
            float:left;
            width: 100%;
        }
        .title-text_normal
        {
            font-family:PT Sans Caption;
            font-weight: normal;
            font-size:23px;
            line-height:120%;
            color:#333333;
            text-align:left;
        }
        .main-text-holder
        {
            clear:both;
            position:relative;
            float:left;
        }
        .main-text-holder p
        {
            font-family:PT Sans;
            line-height:170%;
            font-size:13px;
            color:#444444;
            text-align:justify;
            margin-top: 20px;
        }
        .main-text-holder p span
        {
            font-weight: bold;
            font-size:14px;
        }
        .custom-separator, .custom-separator-preview-news
        {
            clear:both;
            position:relative;
            float:left;
            margin-top: 20px;
            width:100%;
            height:1px;
            background-color:#D9D9D9;
        }

        .media-holder
        {
            clear:both;
            float:left;
            margin-top: 22px;
            background-image:url(../assets/loaders/loader.gif);
            background-repeat:no-repeat;
            background-position:center;
        }

        /* ---------------------------- 3.2.1 ABOUT US -------------------------------- */
        #module-wrapper
        {
            float:left;
            width: 100%;
            height: 100%;
        }

        .module-about-us
        {
            top:0px;
            width:580px;
            height:100%;
            background-color:#FFFFFF;
        }
        #module-text-page-holder-about-us
        {
            position:relative;
            display:inline-block;
            margin: 45px 45px;
        }
        /* ---------------------------- 3.2.1 END ABOUT US ---------------------------- */


        /* ---------------------------- 3.2.2 PHILOSOPHY ------------------------------ */
        .module-philosophy
        {
            width:700px;
            background-color:#FFFFFF;
        }
        #module-text-page-holder-philosophy
        {
            float:left;
            position:relative;
            margin:45px 45px;
        }
        /* ---------------------------- 3.2.2 END PHILOSOPHY -------------------------- */

        /* ---------------------------- 3.2.3 ETHICS ---------------------------------- */
        .module-ethics
        {
            top:0px;
            width:580px;
            height:100%;
            background-color:#FFFFFF;
        }
        #module-text-page-holder-ethics
        {
            display:inline-block;
            position:relative;
            margin:45px 45px;
        }
        .sub-title-text-ethics
        {
            margin-left:152px;
            font-family:PT Sans;
            font-weight: normal;
            font-size:16px;
            color:#0c0c0c;
            text-align:right;
        }

        /* ---------------------------- 3.2.3 END ETHICS ------------------------------ */



        /* ---------------------------- 3.2.5 CAREERS ---------------------------------- */
        .module-careers
        {
            width:600px;
            background-color:#FFFFFF;
        }
        #module-text-page-holder-careers
        {
            display:inline-block;
            float:left;
            position:relative;
            margin:45px;
        }
        .main-text-holder-careers
        {
            clear:both;
            position:relative;
            float:left;
            margin-top: 10px;
        }
        .main-text-holder-careers p
        {
            font-family:PT Sans;
            line-height:170%;
            font-size:13px;
            color:#444444;
            text-align:justify;
        }

        .media-holder-careers
        {
            clear:both;
            position:relative;
            float:left;
            margin-top: 10px;
            background-image:url(../assets/loaders/loader.gif);
            background-repeat:no-repeat;
            background-position:center;
        }


        .custom-separator-careers
        {
            clear:both;
            position:relative;
            float:left;
            margin-top: 10px;
            width:100%;
            height:1px;
            background-color:#a0a0a0;
        }
        /* ---------------------------- 3.2.5 END CAREERS ------------------------------ */

        /******** MODULE POSITIONS *******/
        /*
 * lc - left center
 * cc - center center
 * rc - right center
 * bc - bottom center
 */




        /******** END MODULE POSITIONS ***/


        /* ============================ 4. NEWS ============================= */

        /* ============================ 4.1 NEWS - VERTICAL ================= */
        #module-news-vertical
        {
            float: left;
            position: relative;
            z-index: 3;
            overflow:hidden;
        }
        .module-news-vertical
        {
            top:0px;
            width:580px;
            height:100%;
            background-color:#FFFFFF;
        }
        .news-vertical-preview-horizontal-fix, #news-vertical-preview ul li { width:540px; }

        #module-news-vertical-holder
        {
            position:absolute;
            width:100%;
            height:100%;
            z-index:1;
        }



        #module-news-vertical-container
        {
            position:relative;
            display:inline-block;
            margin: 45px 45px;
        }

        #module-news-preview-holder{
            height: 100%;
            top:0px;
            position: absolute;
            width: 100%;
            z-index:2;
            display:none;
        }
        #module-news-preview-container{
            display: inline-block;
            margin: 39px 45px;
            position: relative;
            overflow:hidden;
        }
        .news-item-vertical
        {
            position:relative;
            float:left;
            margin-top: 22px;
            z-index: 4;
        }
        .news-item-vertical-title
        {
            position:relative;
            float:left;
            margin: 0 0 20px;
            font-family:PT Sans;
            font-weight: bold;
            font-size:18px;
            color:#3f3f3f;
            text-align:left;
            cursor:pointer;
        }
        .media-holder-news-vertical
        {
            clear:both;
            position:relative;
            float:left;
            margin-top: 0px;
            background-image:url(../assets/loaders/loader.gif);
            background-repeat:no-repeat;
            background-position:center;
            cursor:pointer;
        }
        .news-item-vertical-read-more
        {
            position:relative;
            float:left;
            background-color: #3F3F3F;
            cursor: pointer;
            cursor: hand;
            margin-top: 15px;
            width: 18%;
        }
        .news-item-vertical-read-more span
        {
            position:relative;
            float:left;
            width: 94%;
            padding: 3%;
            font-family: PT Sans; /*'Open Sans',sans-serif;*/
            font-size: 13px;
            line-height: 200%;
            color: #ffffff;
            overflow:hidden;
            text-decoration:none;
            outline:none;
            text-align:center;
            -webkit-user-select: none;
            -khtml-user-select: none;
            -moz-user-select: none;
            -o-user-select: none;
            user-select: none;
        }
        #news-preview-controls{
            position:relative;
            float:right;
            left: 0px;
            margin: 0px;
        }

        .news-preview-backward, .news-preview-close, .news-preview-forward
        {
            position:relative;
            float:left;
            background-color: #3F3F3F;
            cursor: pointer;
            cursor: hand;
            margin-left: 4px;
            width: 38px;
            height:38px;
            -webkit-user-select: none;
            -khtml-user-select: none;
            -moz-user-select: none;
            -o-user-select: none;
            user-select: none;

        }
        .news-preview-backg
        {
            position:absolute;
            width:100%;
            height:100%;
            top:0px;
            left: 0px;
            background-color:#3f3f3f;
        }
        .news-preview-backward-sign, .news-preview-forward-sign, .news-preview-close-sign
        {
            position:relative;
            float:left;
            width:100%;
            height:100%;
            background-repeat:no-repeat;
            background-position:center;
            background-image:url(../assets/synergy_sprite.png);
        }
        .news-preview-backward-sign{ background-position: -198px -198px; }
        .news-preview-close-sign{ background-position: -232px -197px; }
        .news-preview-forward-sign{	background-position: -266px -198px; }

        .news-preview-horizontal-fix
        {
            position:relative;
            float:left;
            margin: 20px 0px 20px 0px;
        }
        #module-news-preview-container ul{
            float:left;
            list-style-type: none;
            position:relative;
        }
        #module-news-preview-container ul li{
            float:left;
            margin-right: 45px;
        }
        .news-preview-horizontal-fix, #module-news-preview-container ul li { width:490px; }

        .custom-separator-preview-news{ margin-top: 0px; margin-bottom:20px; }
        .media-holder-news-preview
        {
            clear:both;
            width: 100%;
            height: 100px;
            overflow:hidden;
            float:left;
            margin-top: 22px;
            background-image:url(../assets/loaders/loader_circle.gif);
            background-repeat:no-repeat;
            background-position:center;
        }
        /* ============================ 6. CONTACT ========================= */
        #module-contact-container{
            display: inline-block;
            position: relative;
            width:100%;
        }
        #map-holder, #media-holder-contact
        {
            position:relative;
            float:left;
            width: 100%;
            height: 360px;
            z-index:2;
            display:none;
            background-image:url(../assets/loaders/loader.gif);
            background-repeat:no-repeat;
            background-position:center;
            background-color: #f5f5f5;
        }
        #media-holder-contact{ display: inline-block; overflow:hidden;}
        #map-holder iframe
        {
            position:absolute;
            top: 0px;
            left: 0px;
            width: 100%;
            height: 100%;
            display:none;
        }
        #module-contact
        {
            clear:both;
            position:relative;
            float:left;
            z-index:3;
            width:100%;
            height:330px;
            visibility:hidden;
        }
        .module-contact-background
        {
            position:relative;
            float:left;
            width:100%;
            height:330px;
            background-color:#FFFFFF;
        }
        #module-contact-holder
        {
            position:absolute;
            width: 635px;
            right:0;
            margin-top: 20px;
        }
        .contact-information
        {
            position:relative;
            float:left;
            width: 40%;
            height: 250px;
            margin-top: 10px;
        }
        .contact-information-title
        {
            position:relative;
            float: left;
            width: 100%;
            margin-top: 16px;
        }
        .contact-information-title p
        {
            font-family:PT Sans;
            font-weight: bold;
            font-size:20px;
            color:#333333;
            text-align:left;
        }
        .contact-information-details
        {
            position:relative;
            float: left;
            width: 100%;
            margin-top: 20px;
        }
        .contact-information-details img
        {
            position:relative;
            float: left;
            width: 30px;
            height: 30px;
        }
        .contact-information-details p
        {
            position:relative;
            float: left;
            width: 160px;
            margin-left: 15px;
            margin-top: 8px;
            font-family:PT Sans;
            font-weight: normal;
            font-size:14px;
            color:#444444;
            text-align:left;
        }
        .contact-information-details p a
        {
            position:relative;
            float: left;
            font-family:PT Sans;
            font-weight: normal;
            text-decoration: none;
            font-size:14px;
            color:#4c4c4c;
            text-align:left;
        }
        .contact-information-details p a:hover
        {
            font-family:PT Sans;
            font-weight: normal;
            text-decoration: underline;
            font-size:14px;
            color:#4c4c4c;
            text-align:left;
        }
        .contact-form-holder
        {
            position:relative;
            float:left;
            width: 56%;
            height: 250px;
            margin-top: 10px;
            margin-left: 4%;
        }
        .contact-form-holder form
        {
            position: relative;
            float: left;
            width: 100%;
            margin-top: 8px;
        }
        .form-input-half-left
        {
            position:relative;
            float: left;
            width: 48%;
            height: 30px;
            margin: 2px auto;
        }
        .form-input-half-left input, .form-input-half-right input
        {
            position:absolute;
            float:left;
            left: 0px;
            width: 97%;
            height:25px;
            top: 0px;
            margin: 3px auto;
            margin-left: 5px;
            padding: 0;
            background-color:transparent;
            border: none;
            font-family:PT Sans;
            font-weight: normal;
            text-decoration: none;
            font-size:14px;
            color:#0c0c0c;
            text-align:left;
            overflow:hidden;
            outline: none;
        }

        .form-input-half-right
        {
            position:relative;
            float:left;
            width: 48%;
            height: 30px;
            margin: 2px auto;
            margin-left: 2%;
        }

        .form-input-large
        {
            position:relative;
            float: left;
            width: 98.5%;
            height:30px;
            margin: 5px 1% 2px 0;
        }
        .form-input-large input
        {
            position:absolute;
            float:left;
            left: 0px;
            width: 98.5%;
            height:25px;
            top: 0px;
            margin: 3px auto;
            margin-left: 5px;
            padding: 0;
            background-color:transparent;
            border: none;
            font-family:PT Sans;
            font-weight: normal;
            text-decoration: none;
            font-size:14px;
            color:#0c0c0c;
            text-align:left;
            overflow:hidden;
            outline: none;
        }
        .form-input-textarea
        {
            position:relative;
            float: left;
            width: 98.5%;
            height:120px;
            margin: 5px 1% 2px 0;

        }
        .form-input-textarea textarea
        {
            position:absolute;
            float:left;
            left: 0px;
            width: 98.5%;
            height:115px;
            margin: 3px auto;
            margin-left: 5px;
            padding: 0;
            background-color: transparent;
            border: none;
            font-family:PT Sans;
            font-weight: normal;
            text-decoration: none;
            font-size:14px;
            color:#0c0c0c;
            text-align:left;
            overflow:hidden;
            outline: none;
        }
        .form-input-border{
            border: #6e6e6e 1px solid;
        }
        .form-input-error-border{
            border: #cc0033 1px solid;
        }
        .form-input-background
        {
            position: relative;
            float: left;
            width: 100%;
            height: 100%;
            background-color: #9e9e9e;
        }
        #response-form{
            display:none;
            position:relative;
            float:left;
            left: 0px;
            margin-top: 6px;
            margin-right: 0px;
            line-height: 110%;
            width: 48%;
        }
        #response-form p, #response-form span
        {
            display:none;
            font-family:PT Sans;
            font-weight: bold;
            text-decoration: none;
            font-size:13px;
            color:#3f3f3f;
            text-align:left;
        }
        #response-form span{ color: #cc0033; }
        .form-buttons
        {
            position:relative;
            float:right;
            right: 0px;
            margin-top: 6px;
            margin-right: 0px;
            width: 48%;
        }
        #form-reset, #form-send
        {
            position:relative;
            float:left;
            width: 45%;
            line-height: 200%;
            background-color: #3F3F3F;
            margin-left: 7px;
            cursor: pointer;
            cursor: hand;
        }
        #form-reset p, #form-send p
        {
            font-family:PT Sans;
            font-weight: normal;
            text-decoration: none;
            font-size:13px;
            color:#FFFFFF;
            text-align:center;
        }
        /* ============================ 7. SHOWREEL ======================== */
        #module-showreel
        {
            float:left;
            z-index:2;
        }
        .module-showreel
        {
            width:648px;
            height:398px;
            background-color:#FFFFFF;
            overflow:hidden;
        }
        #module-showreel-holder
        {
            position:relative;
            width: 640px;
            height: 390px;
            vertical-align:middle;
            margin-left:4px;
            margin-top: 4px;
            background-image:url(../assets/loaders/loader.gif);
            background-repeat:no-repeat;
            background-position:center;
        }
        #showreel-video
        {
            position: relative;
            float: left;
            width: 640px;
            height: 390px;
            overflow:hidden;
            display: none;
            visibility: hidden;
        }
        #showreel-video iframe, #showreel-video object, #showreel-video #standalone_wrapper
        {
            position: absolute;
            top: 0px;
            left: 0px;
            width: 640px;
            height: 390px;
        }
        /* ============================ XX. FULLSCREEN VIDEO ================= */
        #module-fullscreen-video{
            float: left;
            position: relative;
            z-index: 2;
        }
        .module-fullscreen-video {
            height: 100%;
            top: 0;
            width: 580px;
        }
        #fullscreen-video-holder
        {
            position: relative;
            float: left;
            width: 100%;
            height: 100%;
            overflow:hidden;
            background-image:url(../assets/loaders/loader_circle.gif);
            background-repeat:no-repeat;
            background-position:center;
        }
        #fullscreen-video iframe, #fullscreen-video object, #fullscreen-video #standalone_wrapper
        {
            position: absolute;
            top: 0px;
            left: 0px;
            width: 100%;
            height: 100%;
        }
        #video-wrapper
        {
            position: relative;
            float: left;
            width: 100%;
            height: 100%;
            /*-webkit-transform-style:preserve-3d;
	-webkit-transform:translateZ(0);*/
        }
        #standalone-wrapper,
        #video-wrapper iframe,
        #video-wrapper object,
        #video-wrapper embed
        {
            position: absolute;
            top: 0px;
            left: 0px;
            width: 100%;
            height: 100%;
        }
        /* ============================ XX. PRICING TABLES =================== */
        #module-pricing
        {
            float: left;
            position: relative;
            z-index: 2;
        }
        .module-pricing
        {
            width:770px;
            height:100%;
        }
        #module-pricing-container
        {
            position: absolute;
            top: 0;
            display:inline-block;
            margin:40px 0px;
            z-index:2;
        }
        .module-pricing-holder-backg
        {
            position:absolute;
            float:left;
            width: 100%;
            background-color:#F9F9F9;
            height:100%;
        }
        #module-pricing-holder
        {
            position:relative;
            float:left;
            display:inline-block;
            margin:30px 24px;
            z-index:2;
        }
        #pricing-column-holder-features
        {
            position: relative;
            width: 25%;
            float: left;
        }

        #pricing-column-holder
        {
            position:relative;
            float:left;
            width: 25%;
            z-index:1;
        }
        #pricing-column-header-features, #pricing-column-header-basic, #pricing-column-header-premium, #pricing-column-header-corporate
        {
            float: left;
            position: relative;
            width: 100%;
        }
        #pricing-column-header-basic-buy, #pricing-column-header-premium-buy, #pricing-column-header-corporate-buy
        {
            float: left;
            position: relative;
            width: 100%;
        }
        .pricing-buy-holder-backg
        {
            position:absolute;
            width: 100%;
            background-color:#F9F9F9;
            height:100%;
            border-left: 1px solid;
            border-bottom: 1px solid;
            border-bottom: 1px solid;
        }
        #pricing-buy-holder
        {
            position:relative;
            float:left;
            margin: 10% 24%;
            width: 52%;
            background-color: #3F3F3F;
            cursor: pointer;
            cursor: hand;
        }
        #pricing-buy-holder span
        {
            position:relative;
            float:left;
            width: 100%;
            padding: 5px 0px 5px 0px;
            font-family: PT Sans; /*'Open Sans',sans-serif;*/
            font-size: 16px;
            line-height: 200%;
            color: #ffffff;
            overflow:hidden;
            text-decoration:none;
            outline:none;
            text-align:center;
        }

        #pricing-header-backg
        {
            background-color: #cfcfcf;
            float: left;
            height: 40%;
            margin: 0 0;
            position: absolute;
            width: 100%;
            z-index:1;
            border-bottom: 1px solid #222222;
        }
        #pricing-column-header-features{ visibility:hidden; }
        #pricing-column-header-basic
        {
            background-color:#909090;
        }
        #pricing-column-header-premium
        {
            background-color:#909090;
        }
        #pricing-column-header-corporate
        {
            background-color:#909090;
        }
        #pricing-column-header
        {
            float: left;
            margin: 4% 0;
            position: relative;
            width: 100%;
            z-index:2;
        }

        #pricing-column-header h1
        {
            position:relative;
            float:left;
            margin-bottom: 20px;
            width:100%;
            font-size: 14px;
            color: #ffffff;
            text-align:center;
        }
        #pricing-column-header h2
        {
            position:relative;
            float:left;
            width:100%;
            margin-bottom: 0px;
            font-size: 24px;
            color: #ffffff;
            text-align:center;
        }
        #pricing-column-header h2 span
        {
            font-weight: normal;
            color: #f6f6f6;
            font-size: 16px;
        }
        h1, h2, h3, h4, h5, h6
        {
            color: #444444;
            font-family: PT Sans Caption,'Open Sans','Lucida Sans Unicode','Lucida Grande',sans-serif;
            font-weight: normal;
            line-height: 125%;
            margin-bottom: 10px;
        }
        #pricing-column-holder-features ul, #pricing-column-holder ul
        {
            position:relative;
            float:left;
            padding: 0;
            list-style-type: none;
            border-left: 1px solid transparent;
        }

        #pricing-column-holder-features ul li, #pricing-column-holder ul li
        {
            position:relative;
            float:left;
            width: 100%;
            background-color: #f9f9f9;
            border-bottom: 1px solid #D0D0D0;
        }
        #pricing-column-holder-features ul li:nth-child(2n+2), #pricing-column-holder ul li:nth-child(2n+2)
        {
            background-color: #f4f4f4;
            border-bottom: 1px solid #D0D0D0;
        }
        #pricing-column-holder-features ul li:last-child, #pricing-column-holder ul li:last-child
        {
            border-bottom: 0px solid #3f3f3f;
        }
        #pricing-column-holder-features ul li span, #pricing-column-holder ul li span
        {
            position:relative;
            float:left;
            width: 100%;
            padding: 5px 0px 5px 0px;
            font-family: PT Sans; /*'Open Sans',sans-serif;*/
            font-size: 13px;
            line-height: 200%;
            color: #3f3f3f;
            overflow:hidden;
            text-decoration:none;
            outline:none;
            text-align:center;
        }
        #pricing-column-holder-features ul li span
        {
            text-align:left;
            width: 96%;
            padding-left: 4%;
        }
        /* ============================ 7. FULL WIDTH MODULE ======================= */
        #module-full-width
        {
            position:relative;
            float: left;
            z-index: 2;
            height: 100%;
        }
        #module-full-width-holder-text
        {
            position:relative;
            display:inline-block;
            z-index:2;
        }
        #module-full-width-media, #module-full-width-text
        {
            float:left;
            width:100%;
        }

        #module-full-width-media{
            overflow:hidden;
            background-image:url(../assets/loaders/loader_circle.gif);
            background-repeat:no-repeat;
            background-position:center;
        }
        .full-width-text-title, .full-width-text-content, .full-width-text-content-dropcaps
        {
            float:left;
            margin-left: 30px;
            margin-right: 30px;
        }
        #module-full-width-text{ margin-bottom: 20px; }
        .full-width-text-title p, .full-width-text-content span, .full-width-text-content p
        {
            float:left;
            width: 100%;
            font-family:PT Sans;
            font-weight: normal;
            font-size:18px;
            color:#3f3f3f;
            text-align:justify;
            margin-top: 20px;
        }
        .full-width-text-content-dropcaps p
        {
            font-family:PT Sans;
            font-weight: normal;
            color:#3f3f3f;
            text-align:justify;
            margin-top: 20px;
        }
        .full-width-text-content-dropcaps span{
            float: left;
            color: #d00355;
            font-size: 66px;
            line-height:82%;
            padding-right: 8px;
            padding-left: 3px;
            padding-top: 20px;
            font-family: PT Sans;
        }
        .full-width-text-content span, .full-width-text-content-dropcaps p
        {
            line-height:140%;
            font-size:13px;
        }
        .full-width-text-content-half-left, .full-width-text-content-half-right
        {
            float:left;
            width: 48%;
            margin-right: 2%;
        }
        .full-width-text-content-half-right{ margin-left: 2%; margin-right: 0; }

        .full-width-text-content-third-left,
        .full-width-text-content-third-right,
        .full-width-text-content-third-middle
        {
            float:left;
            width: 30.6%;
            margin-right: 2%;
        }
        .full-width-text-content-third-right{ margin-left: 2%; margin-right: 0; }
        .full-width-text-content-third-middle{ margin-left: 2%; }

        .full-width-text-content-fourth-left, .full-width-text-content-fourth-right,
        .full-width-text-content-fourth-middle
        {
            float:left;
            width: 22%;
            margin-right: 2%;
        }
        .full-width-text-content-fourth-right, .full-width-text-content-fourth-third{ margin-left: 2%; margin-right: 0; }
        .full-width-text-content-fourth-middle{ margin-left: 2%; }*/
        /* ============================ 8. FULL WIDTH GALLERY ======================= */
        #module-full-width-gallery
        {
            color:#666666;
        }
        .module-full-width-gallery
        {
            float: left;
            position: relative;
            z-index: 2;
            width:966px;
            height:100%;
            background-color:#FFFFFF;
        }
        #module-full-width-holder
        {
            position: absolute;
            top: 0px;
            left: 0px;
            width:100%;
            height:100%;
            display:inline-block;
            z-index:2;
        }
        .full-width-item
        {
            position:relative;
            float:left;
            background-image:url(../assets/loaders/loader_circle.gif);
            background-repeat:no-repeat;
            background-position:center;
            width: 480px;
            height: 294px;
            overflow:hidden;
            cursor:pointer;
        }
        .full-width-item .item-title
        {
            position:absolute;
            width:100%;
            bottom:0px;
        }
        .full-width-item .item-title p
        {
            position:relative;
            float:left;
            width: 90%;
            font-family:PT Sans;
            font-weight: bold;
            font-size:18px;
            color:#e3e3e3;
            text-align:center;
            margin: 5%;
            line-height:140%;
        }
        /*.full-width-item img{ width: 100.5% }*/
        #full-width-preview
        {
            position:absolute;
            width:100%;
            height:100%;
            left: 0px;
            top: 0px;
            z-index:1000;
            display:none;
            visibility: hidden;
        }
        .full-width-preview-background
        {
            position:absolute;
            width:100%;
            height:100%;
            left: 0px;
            top: 0px;
            background-color:#000000;
            z-index:991;
        }
        #full-width-preview-info-holder
        {
            position:absolute;
            height: 100%;
            top:0px;
            z-index:992;
            visibility:hidden;
        }
        #full-width-info-container
        {
            /*position:relative;
	float:left;*/
            display: inline-block;
            position: relative;
            z-index:2;
        }
        .full-width-info-container
        {
            top:0px;
            width:380px;
            height:100%;
            background-color:#FFFFFF;
        }
        .full-width-info-holder
        {
            position:relative;
            float:left;
            height:100%;
            margin:9%;
            width:82%;
        }
        .full-width-info-holder-desc
        {
            position:absolute;
            top:0px;
            left:0px;
            width:100%;
            display:none;
            visibility: hidden;
        }
        .full-width-info-holder-desc p, .full-width-info-holder-desc span
        {
            position:relative;
            float:left;
            width:100%;
            font-family:PT Sans;
            font-weight: normal;
            font-size:18px;
            color:#3f3f3f;
            text-align:justify;
        }
        .full-width-info-holder-desc span
        {
            line-height:140%;
            font-size:13px;
            margin-top: 20px;
        }
        #full-width-preview-media-holder
        {
            position:absolute;
            top:0px;
            left: 0px;
            width:100%;/*********/
            height: 100%;
            z-index:992;
        }
        .full-width-preview-media-holder-background
        {
            position:absolute;
            width:100%;
            height:100%;
            left: 0px;
            top: 0px;
            background-color:#000000;
        }
        .full-width-preview-media-loader, .gallery-preview-media-loader
        {
            position:relative;
            width: 60px;
            height: 40px;
            top: 50%;
            left:50%;
            margin-top: -20px;
            margin-left: -30px;
            background-color:#f9f9f9;
            background-image:url(../assets/loaders/loader.gif);
            background-repeat:no-repeat;
            background-position:center;
        }
        .preview-smartphone-info{
            position:absolute;
            display:none;
            bottom: 0px;
            width:100%;
            cursor:pointer;
            z-index:1000;
        }
        .preview-smartphone-info span{
            line-height: 40px;
            font-family:PT Sans;
            font-weight: normal;
            font-size:18px;
            color:#D00355;
            position: relative;
            text-align: center;
            width: 100%;
            z-index: 9;
        }
        .preview-smartphone-info span.show_info{
            display:inline-block;
        }
        .preview-smartphone-info span.hide_info{
            display:none;
        }
        .preview-arrow-forward, .preview-arrow-backward , .preview-arrow-close
        {
            position:absolute;
            display:none;
            top:50%;
            margin:-23px 30px 0px 0px;
            right:0px;
            width:46px;
            height:46px;
            cursor:pointer;
            z-index:993;

            -webkit-user-select: none;
            -khtml-user-select: none;
            -moz-user-select: none;
            -o-user-select: none;
            user-select: none;
        }
        .preview-arrow-close{ margin-right: 30px; display:none;  top:50px; z-index:993;}
        .preview-arrow-backward{ left:0px; margin:-23px 0px 0px 30px; }
        .preview-arrow-backg, .preview-smartphone-info-backg
        {
            position:absolute;
            top:0px;
            left:0px;
            width:100%;
            height:100%;
            background-color:#3f3f3f;
        }
        .preview-smartphone-info-backg{ background-color: #FFFFFF; }
        .preview-arrow-backward-sign, .preview-arrow-close-sign, .preview-arrow-forward-sign
        {
            position:relative;
            float:left;
            width:100%;
            height:100%;
            background-image:url(../assets/synergy_sprite.png);
            background-repeat:no-repeat;
            background-position:center;
        }
        .preview-arrow-backward-sign{ background-position: -194px -194px; }
        .preview-arrow-close-sign{ background-position: -228px -193px; }
        .preview-arrow-forward-sign{ background-position: -262px -194px; }

        /* ============================ 8. COLUMNS PORTFOLIO ================ */
        #module-background-solid1
        {
            background-color:#ffffff;
            position:absolute;
            top:0px;
            left: 0px;
            width:100%;
            height:100%;
            z-index:1;
        }
        #module-background-solid2
        {
            position:absolute;
            top:0px;
            left: 0px;
            width:100%;
            height:100%;
            z-index:1;
            background-color:#ffffff;
        }
        #module-columns
        {
            float: left;
            position: relative;
            z-index: 2;
        }
        .module-columns
        {
            width:966px;
            height:100%;
        }
        #module-columns-container, #module-columns-preview
        {
            position: relative;
            float:left;
            display:inline-block;
            margin:40px 14px;
            z-index:2;
        }
        #module-columns-preview{ overflow:hidden; }
        #module-columns-wrapper, #module-columns-preview-wrapper{
            width:100%;
            height:100%;
            position:absolute;
            top:0px;
            left: 0px;
        }
        #module-columns-preview-wrapper{ display:none; }
        #module-columns-holder
        {
            clear:both;
            position:relative;
            float:left;
            display:inline-block;
            z-index:2;
        }
        .columns-filter-holder
        {
            position:relative;
            float:right;
            display:block;
            width:100%;
            margin-bottom: 6px;
            /*height: 40px;*/
            margin-bottom: 0px;
        }
        .columns-horizontal-separator
        {
            position:relative;
            float:right;
            display:block;
            width:100%;
            height: 1px;
            background-color:#D9D9D9;
            margin-top:10px;
            margin-bottom: 20px;
        }
        #filter-buttons-holder
        {
            position:relative;
            float:right;
            display:block;
            width:100%;
            margin: 0px 5px 0px 5px;
        }
        .filter-button
        {
            position:relative;
            float:right;
            display:block;
            margin: 0px 0px 2px 4px;
            padding: 4px 13px;
            font-family: PT Sans; /*'Open Sans',sans-serif;*/
            font-size: 13px;
            color: #3f3f3f;
            overflow:hidden;
            text-decoration:none;
            outline:none;
            text-align:center;
            line-height:200%;
            cursor:pointer;
            cursor: hand;
        }
        .filter-button.selected
        {
            color: #ffffff;
        }

        /************* fourth column ************/
        .fourth-thumb-holder
        {
            position:relative;
            float:left;
            width: 222px;
            height: 240px;
            background-color:#FFFFFF;
            margin-right: 14px;
            margin-bottom: 14px;
            cursor:hand;
            cursor:pointer;
            z-index: 3;
            overflow:hidden;
        }
        .fourth-thumb-holder:nth-child(4n +4)
        {
            margin-right: 0px;
        }
        .fourth-thumb-holder:nth-last-child(-n+4)
        {
            margin-bottom: 0px;
        }
        .fourth-thumb-image
        {
            position:relative;
            float:left;
            width: 220px;
            height:180px;
            margin-left: 1px;
            margin-top: 1px;
            overflow:hidden;
            background-color:#FFFFFF;
            background-image:url(../assets/loaders/loader_circle.gif);
            background-repeat:no-repeat;
            background-position:center;
            z-index:1;
        }

        /************* third-column ************/
        .third-thumb-holder
        {
            position:relative;
            float:left;
            width: 300px;
            height: 260px;
            background-color:#FFFFFF;
            margin-right: 16px;
            margin-bottom: 16px;
            cursor:hand;
            cursor:pointer;
            z-index: 3;
            overflow:hidden;
        }
        .third-thumb-holder:nth-child(3n +3)
        {
            margin-right: 0px;
        }
        .third-thumb-holder:nth-last-child(-n+3)
        {
            margin-bottom: 0px;
        }
        .third-thumb-image
        {
            position:relative;
            float:left;
            width: 298px;
            height:200px;
            margin-left: 1px;
            margin-top: 1px;
            overflow:hidden;
            background-color:#FFFFFF;
            background-image:url(../assets/loaders/loader_circle.gif);
            background-repeat:no-repeat;
            background-position:center;
            z-index:1;
        }
        /************* half-column ************/
        .half-thumb-holder
        {
            position:relative;
            float:left;
            width: 459px;
            height: 340px;
            background-color:#FFFFFF;
            margin-right: 16px;
            margin-bottom: 16px;
            cursor:hand;
            cursor:pointer;
            z-index: 3;
            overflow:hidden;
        }
        .half-thumb-holder:nth-child(2n +2)
        {
            margin-right: 0px;
        }
        .half-thumb-holder:nth-last-child(-n+2)
        {
            margin-bottom: 0px;
        }
        .half-thumb-image
        {
            position:relative;
            float:left;
            width: 457px;
            height:280px;
            margin-left: 1px;
            margin-top: 1px;
            overflow:hidden;
            background-color:#FFFFFF;
            background-image:url(../assets/loaders/loader_circle.gif);
            background-repeat:no-repeat;
            background-position:center;
            z-index:1;
        }
        /************** COLUMNS PREVIEW *************/
        .columns-preview-horizontal-fix
        {
            float:left;
            height:100%;
        }
        .columns-preview-horizontal-fix ul
        {
            position:relative;
            float:left;
            left: 0px;
            list-style-type: none;
        }
        .columns-preview-horizontal-fix ul li
        {
            float:left;
            margin-right:20px;
        }
        #module-columns-preview-holder
        {
            display:inline-block;
            position:relative;
            width: 938px;
            overflow:hidden;
        }

        #columns-preview-details
        {
            float:left;
            width: 100%;
            height: 100%;
        }
        .columns-preview-media
        {
            position:relative;
            float:left;
            width: 610px;
            min-height: 100px;
            overflow:hidden;
            margin-bottom:20px;
            background-image:url(../assets/loaders/loader_circle.gif);
            background-repeat:no-repeat;
            background-position:center;
        }
        .columns-preview-description
        {
            float:left;
            margin-left: 30px;
            width: 290px;
        }
        .columns-preview-description p, .columns-preview-description span
        {
            float:left;
            font-family:PT Sans;
            font-weight: normal;
            font-size:18px;
            color:#3f3f3f;
            text-align:left;


        }
        .columns-preview-description span
        {
            line-height: 140%;
            margin-top: 20px;
            font-size:13px;
            text-align:justify;
        }

        #columns-preview-controls
        {
            position:relative;
            /*display:none;*/
            float:right;
            margin: 3px 0px;
        }
        .columns-preview-counter, .news-preview-counter{
            float:left;
            background-color: #3F3F3F;
            margin-left: 1px;
            height:38px;
            -webkit-user-select: none;
            -khtml-user-select: none;
            -moz-user-select: none;
            -o-user-select: none;
            user-select: none;
        }
        .columns-preview-counter span, .news-preview-counter span
        {
            display:block;
            font-family:Century Gothic,Arial;
            font-weight: normal;
            font-size:14px;
            color:#ffffff;
            text-align:center;
            padding: 12px 12px;
            text-decoration:none;
            cursor:default;

        }
        .columns-preview-backward, .columns-preview-close, .columns-preview-forward, .columns-preview-backward
        {
            position:relative;
            float:left;
            background-color: #3F3F3F;
            cursor: pointer;
            cursor: hand;
            margin-left: 4px;
            width: 38px;
            height:38px;
            -webkit-user-select: none;
            -khtml-user-select: none;
            -moz-user-select: none;
            -o-user-select: none;
            user-select: none;
        }
        .columns-preview-backg
        {
            position:absolute;
            width:100%;
            height:100%;
            top:0px;
            left: 0px;
            background-color:#3f3f3f;
        }
        .columns-preview-backward-sign, .columns-preview-forward-sign, .columns-preview-close-sign
        {
            position:relative;
            float:left;
            width:100%;
            height:100%;
            background-image:url(../assets/synergy_sprite.png);
            background-repeat:no-repeat;
            background-position:center;
        }
        .columns-preview-backward-sign{ background-position: -198px -198px; }
        .columns-preview-close-sign{ background-position: -232px -197px; }
        .columns-preview-forward-sign{	background-position: -266px -198px; }


        #columns-slides-controls{
            position:absolute;
            top: 0px;
            left: 0px;
            height: 100%;
            width: 100%;
            z-index: 3;
        }
        .col-prev-media-slide{
            position:absolute;
            top: 0px;
            left: 0px;
            z-index: 1;
        }
        .col-prev-media-arrow-backward, .col-prev-media-arrow-forward
        {
            position:absolute;
            top:50%;
            margin-top: -23px;
            right:0px;
            width:46px;
            height:46px;
            cursor:pointer;
            z-index:993;
            -webkit-user-select: none;
            -khtml-user-select: none;
            -moz-user-select: none;
            -o-user-select: none;
            user-select: none;
        }
        .col-prev-media-arrow-backward{ left:0px; }
        .col-prev-media-arrow-backg
        {
            position:absolute;
            top:0px;
            left:0px;
            width:100%;
            height:100%;
            background-color:#3f3f3f;
        }
        .col-prev-media-arrow-backward-sign, .col-prev-media-arrow-forward-sign
        {
            position:relative;
            float:left;
            width:100%;
            height:100%;
            background-image:url(../assets/synergy_sprite.png);
            background-repeat:no-repeat;
            background-position:center;
        }
        .col-prev-media-arrow-backward-sign{ background-position: -194px -194px; }
        .col-prev-media-arrow-forward-sign{	background-position: -262px -194px; }
        /* ============================ 8. GALLERIES ======================= */
        /* ============================ 8.1 IMAGE GALLERY ================== */
        #module-galleries
        {
            float: left;
            position: relative;
            z-index: 2;
        }
        .module-galleries
        {
            width:966px;
            height:100%;
        }
        #galleries-background
        {
            background-color: #EEEEEE;
            height: 100%;
            width: 100%;
            z-index:1;
        }
        #module-gallery-pattern
        {
            position:absolute;
            top:0px;
            left: 0px;
            width:100%;
            height:100%;
            background-image:url(../assets/patterns/body_pattern1.png);
            background-repeat:repeat;

        }
        #module-galleries-holder
        {
            position: absolute;
            top: 0;
            display:inline-block;
            margin:40px 14px;
            z-index:2;
        }

        .thumb-holder
        {
            position:relative;
            float:left;
            width: 222px;
            height: 230px;
            background-color:#FFFFFF;
            margin-right: 14px;
            margin-bottom: 14px;
            cursor:hand;
            cursor:pointer;
            z-index: 3;
            overflow:hidden;
        }
        .thumb-image
        {
            position:relative;
            float:left;
            width: 220px;
            height:180px;
            margin-left: 1px;
            margin-top: 1px;
            overflow:hidden;
            background-color:#FFFFFF;
            background-image:url(../assets/loaders/loader_circle.gif);
            background-repeat:no-repeat;
            background-position:center;
            z-index:1;
        }
        .thumb-selected #thumb-image-hover{ display:inline; }
        #thumb-image-hover .background
        {
            display:block;
            position:absolute;
            top:0;
            width:100%;
            height:100%;
            background-color:#0c0c0c;
        }
        .zoom-gallery, .zoom-gallery-small
        {
            position:absolute;
            top:0;
            width:100%;
            height:100%;
            background-repeat:no-repeat;
            background-position:center;
        }
        .zoom-gallery{ background-image:url(../assets/media/zoom_gallery.png); }
        .zoom-gallery-small{ background-image:url(../assets/media/zoom_gallery_small.png); }

        .play-gallery
        {
            position:absolute;
            top:0;
            width:100%;
            height:100%;
            background-image:url(../assets/media/play_gallery.png);
            background-repeat:no-repeat;
            background-position:center;
            /*z-index:3;*/
        }
        #thumb-image-hover
        {
            position:absolute;
            width:100%;
            height:100%;
            z-index:2;
        }
        .hover-default
        {
            display:visible;
            top: 0px;
            left: -100%;
        }
        /* Initial state classes: */
        .hover-slideFromTop {
            left: 0px;
            top: -100%;
        }
        .hover-slideFromBottom {
            left: 0px;
            top: 100%;
        }
        .hover-slideFromLeft {
            top: 0px;
            left: -100%;
        }
        .hover-slideFromRight {
            top: 0px;
            left: 100%;
        }
        /* Final state classes: */
        .hover-slideTop {
            top: 0px;
        }
        .hover-slideTopLeft {
            left: 0px;
            top: 0px;
        }
        .thumb-tag
        {
            clear:both;
            position:relative;
            float:left;
            width: 100%;
            margin-top: 9px;
            overflow:hidden;
        }
        .thumb-tag p
        {
            position:relative;
            float:left;
            width: 100%;
            font-family:PT Sans;
            font-weight: normal;
            font-size:14px;
            color:#3f3f3f;
            text-align:center;
            margin-top: 8px;
            line-height:120%;
        }
        .thumb-tag h1, .thumb-tag h2
        {
            position:relative;
            float:left;
            overflow:hidden;
            width: 100%;
            font-family:PT Sans;
            font-weight: normal;
            font-size:14px;
            color:#3f3f3f;
            text-align:center;
            margin-top: 2px;
            margin-bottom:2px;
        }
        .thumb-tag h2
        {
            font-size:12px;
            font-style:italic;
            color:#909090;
        }
        .thumb-tag span
        {
            position:relative;
            float:left;
            width: 22px;
            height: 22px;
        }
        #dragger-holder
        {
            display:block;
            width: 10px;
            height: 230px;
            position:relative;
            float:left;
        }
        .dragger_container
        {
            display:block;
            width: 10px;
            height: 230px;
            position:absolute;
            top: 0px;
            left: 0px;

            /*margin-left: 6px;*/
            background-color:#444444;

            -ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=60)";/* IE 8 */
            filter: alpha(opacity=60);/* IE 5-7 */
            -moz-opacity: 0.6;/* Netscape */
            -khtml-opacity: 0.6;/* Safari 1.x */
            opacity: 0.6;/* Other browsers */
        }
        .dragger
        {
            position:absolute;
            top: 0px;
            left: 0px;
            display:block;
            width: 10px;
            height: 60px;
            background-color:#FFFFFF;
            cursor: pointer;
            cursor: hand;
        }

        #module-galleries-preview
        {
            position:absolute;
            width:100%;
            height:100%;
            left: 0px;
            top: 0px;
            z-index:100;
            display:none;
            visibility: hidden;
        }
        #module-galleries-preview-background
        {
            position:absolute;
            width:100%;
            height:100%;
            left: 0px;
            top: 0px;
            background-color:#000000;
            /*z-index:91;*/
        }
        #preview-media-holder
        {
            position:absolute;
            margin: 4px;
            width: 292px;
            height: 292px;
            overflow:hidden;
        }
        #preview-media-load
        {
            position: relative;
            top: 0px;
            left: 0px;
            display: none;
            visibility: hidden;

        }
        #preview-media-video
        {
            position: relative;
            float: left;
            width: 640px;
            height: 390px;
            overflow:hidden;
            display: none;
            visibility: hidden;
        }
        #module-galleries-preview-description-holder
        {
            position:fixed;
            width: 100%;
            height: 36px;
            bottom:-36px;
            z-index:96;
        }
        #module-galleries-preview-description-background
        {
            position:relative;
            width: 100%;
            height: 36px;
            background-color:#FFFFFF;
            z-index:93;
            -ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=80)";/* IE 8 */
            filter: alpha(opacity=80);/* IE 5-7 */

            -moz-opacity: 0.8;/* Netscape */
            -khtml-opacity: 0.8;/* Safari 1.x */
            opacity: 0.8;/* Other browsers */
        }
        .module-galleries-preview-description-text
        {
            position: absolute;
            top: 9px;
            font-family:PT Sans;
            font-weight: normal;
            font-size:16px;
            color:#3f3f3f;
            width: 100%;
            text-align:center;
            z-index:94;
            display:none;
            visibility: hidden;

        }

        /*--------------------------------------------*/

        .module-galleries-preview-arrow-forward, .module-galleries-preview-arrow-backward, .module-galleries-preview-arrow-close
        {
            position:absolute;
            top:50%;
            margin-top: -23px;
            right:30px;
            width:46px;
            height:46px;
            cursor:pointer;
            z-index:993;
            -webkit-user-select: none;
            -khtml-user-select: none;
            -moz-user-select: none;
            -o-user-select: none;
            user-select: none;
        }
        .module-galleries-preview-arrow-close{ right: 30px;  top:20px; margin-top: 0px; z-index:993;}
        .module-galleries-preview-arrow-backward{ left:30px; }
        .module-galleries-preview-arrow-backg
        {
            position:absolute;
            top:0px;
            left:0px;
            width:100%;
            height:100%;
            background-color:#3f3f3f;
        }
        .module-galleries-preview-arrow-backward-sign,
        .module-galleries-preview-arrow-forward-sign,
        .module-galleries-preview-arrow-close-sign
        {
            position:relative;
            float:left;
            width:100%;
            height:100%;
            background-image:url(../assets/synergy_sprite.png);
            background-repeat:no-repeat;
            background-position:center;
        }
        .module-galleries-preview-arrow-backward-sign{ background-position: -194px -194px; }
        .module-galleries-preview-arrow-close-sign{ background-position: -228px -193px; }
        .module-galleries-preview-arrow-forward-sign{	background-position: -262px -194px; }



        /* ============================ 8. PORTFOLIO ======================= */
        #module-portfolio
        {
            position:fixed;
            top:0px;
            z-index:2;
            width:100%;
            height:100%;
        }
        .module-portfolio-background
        {
            position:relative;
            float:left;
            width:175px;
            height:100%;
            background-color:#FFFFFF;
        }
        #module-portfolio-holder
        {
            position:relative;
            float:left;
            top:0px;
            left:0px;
            width:175px;
            height:100%;
            margin-top:0px;
            z-index:4;
        }
        #portfolio-items-holder
        {
            position:absolute;
            float:left;
            top:0px;
            left:0px;
            overflow:hidden;
            height:654px;
            width: 155px;
            margin-top: 10px;
            margin-left: 10px;
        }
        .portfolio-items-container
        {
            position:relative;
            float:left;
            left: 0px;
        }
        .portfolio-item-holder
        {
            position:relative;
            float:left;
            width: 155px;
            height:104px;
            margin-bottom: 5px;
            background-color: #FFFFFF;
            cursor: hand;
            cursor: pointer;
            overflow:hidden;
        }
        .portfolio-item-image
        {

            position: relative;
            float: left;
            width: 145px;
            height: 94px;
            margin-left: 4px;
            margin-top: 4px;
            overflow: hidden;
            background-color: #FFFFFF;
            border: 1px solid #0c0c0c;
            background-image:url(../assets/loaders/loader.gif);
            background-repeat:no-repeat;
            background-position:center;

        }
        .portfolio-item-tooltip-holder
        {
            position: absolute;
            top:76px;
            left: 5px;
            width: 145px;
            height: 24px;
            overflow:hidden;
        }
        .portfolio-item-tooltip
        {
            position: absolute;
            top:24px;
            left: 0px;
            width: 145px;
            height: 24px;
        }

        .tooltip-background
        {
            position: absolute;
            top:0px;
            left: 0px;
            width: 100%;
            height: 100%;

            -ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=80)";/* IE 8 */
            filter: alpha(opacity=80);/* IE 5-7 */

            -moz-opacity: 0.8;/* Netscape */
            -khtml-opacity: 0.8;/* Safari 1.x */
            opacity: 0.8;/* Other browsers */
        }
        .portfolio-item-tooltip span
        {

            position:relative;
            display: block;
            height: 24px;
            margin: 6px auto;
            font-family: PT Sans Caption; /*'Open Sans',sans-serif;*/
            font-size: 12px;
            color: #ffffff;
            overflow:hidden;
            text-decoration:none;
            outline:none;
            text-align:center;
        }

        #module-portfolio-preview
        {
            width:100%;
            height:100%;
            left: 175px;
            background-color:#ffffff;
            background-image:url(../assets/loaders/loader.gif);
            background-repeat:no-repeat;
            background-position:center;
            z-index:3;
        }
        .preview-slide
        {
            width:100%;
            height:100%;
        }
        .portfolio-preview-slide
        {
            position:absolute;
            top: 0px;
            left: 175px;
            z-index:1;
            visibility:hidden;
            display:none;
        }
        #social-holder{
            clear:both;
            float:left;
            position:relative;
            margin: 20px 0px;
            width: 100%;
            min-height: 40px;
        }
        #social-holder-back{
            position: absolute;
            top: 0px;
            left: 0px;
            width: 100%;
            height: 100%;
            z-index: -1;
            background-color: #D9D9D9;
        }
        #social-holder iframe, #social-holder a{
            float:left;
            margin: 6px 5px 5px 10px;
            padding-top:3px;
            height:100%;
        }
        #social-holder a{ width: 78px; }

        /* Holly Hack for IE \*/
        * html .class-menu ul li { float: left; height: 1%; }
        * html .class-menu ul li a { height: 1%; }
        /* End */

        #template-smpartphone-menu
        {
            display:none;
            clear:both;
            position:relative;
            float:left;
            left: 50%;
            margin: 0px 0px 15px -120px;
            width: 240px;
            /*height: 40px;*/
            /*background-color:#FFFFFF;	*/

            z-index:9;
        }
        #template-smpartphone-menu select
        {
            display:block;
            width: 100%;
            padding:5px;
            border: 1px solid #777777;
        }

        /*------------------------------------------------------------------*/
        /*						TOUCH DEVICES								*/
        /*------------------------------------------------------------------*/
        @media only screen and (min-width: 1025px) and (max-width: 1200px)
        {
            #standard-banner{ height: 363px; }
            .home-layout2-content ul{ margin: 0px 21px; }
            .banner-desc-tr{ top: 50px; right: 50px; }
            .banner-desc-cr{ top: 100px; right: 50px; }
            .banner-desc-br{ bottom: 50px; right: 50px; }
            .banner-desc-tl{ top: 50px; left: 50px; }
            .banner-desc-cl{ top: 100px; left: 50px; }
            .banner-desc-bl{ bottom: 50px; left: 50px; }

            .module-home-layout3{ width: 824px; } #home-video-block{ width: 572px; height: 337px; }
            #home-advertise, #home-advertise1, #home-advertise2{ height: 158px; width: 170px; } .advertise-image, #home-advertise img{ height: 120px; width: 170px; }

            .module-galleries{ width: 722px; }

        }
        @media only screen and (min-width: 768px) and (max-width: 1024px)
        {
            .template-logo{ margin-left: -80px; }
            .template-menu{ margin: 0px; }
            #audio-player{left: 0px;}
            footer{ width: 210px; }

            #thumb-image-hover{ display: none; }


            #standard-banner{ height: 251px; }
            .home-layout2-content ul{ margin: 0px 30px; } .home-layout2-content ul li{ margin: 20px 30px 20px 0px; width: 215px; }
            .banner-desc{ width: 100%; clear: both; float: left; position: absolute;} .banner-desc span{ padding: 10px; font-size:13px; } .banner-desc span h1{ margin-bottom: 5px; font-size:18px;}
            .banner-desc-tr, .banner-desc-cr,.banner-desc-br, .banner-desc-tl, .banner-desc-cl, .banner-desc-bl {bottom:3px; left:0px; top:auto; }

            .home-layout-clients a{margin: 10px 0 10px 3px; }

            .module-home-layout3{ width: 556px; } #home-video-block{ width: 510px; height: 296px; margin-right: 0px; }
            #module-home-layout3-holder{margin:25px 20px; width: 510px;}
            #home-advertise{ margin-top: 20px;  height: 210px; width: 510px; } #home-advertise1{ margin-bottom: 0px;} #home-advertise2{ margin-left: 20px; }
            #home-advertise1, #home-advertise2{ height: 210px; width: 245px; } .advertise-image, #home-advertise img{ height: 173px; width: 245px; }



            .module-about-us, .module-ethics, .module-careers{ width: 460px; } .module-philosophy{ width: 510px; }

            .module-pricing{ width: 510px; } #pricing-column-header h2{ font-size: 15px; } #pricing-column-header h1{ font-size: 12px; }
            #module-pricing-container{ margin: 5px 0px; }

            .module-news-vertical, #module-news-preview-holder{ width: 490px; } .news-preview-horizontal-fix, #module-news-preview-container ul li { width:400px; }

            #module-contact-holder { width: 510px; }

            .module-galleries{ width: 486px; }

            .full-width-info-container{ width: 240px; }


        }
        @media only screen and (min-width: 480px) and (max-width: 767px)
        {
            #menu-container{ position:absolute; width: 100%; height:auto; left:0px; z-index:10; }
            #template-menu{ display: none; }
            #audio-player{display:none;}
            .menu-content-holder{ width: 100%; }
            .template-logo{ margin: 5px 0 5px -47px; background-image: url("../assets/media/synergy_html5_logo_smartphone.png"); width:94px; height:60px;}
            #template-smpartphone-menu{ display: inline; }

            #menu-hider{ width: 100%; height: 10px; }
            #menu-hider-background{ width: 100%; height: 10px; }
            #menu-hider-icon{ background-position: -299px -200px; height: 28px; width: 38px; left:50%; top: 3px; margin-left: -15px; }

            footer{ display:none; }

            #thumb-image-hover{ display: none; }

            .home-layout2-content ul{ margin: 0px 25px; } .home-layout2-content ul li{ margin: 20px 20px 20px 0px; width: 195px; }
            #standard-banner{ height: 222px; }
            .banner-desc{ width: 460px; clear: both; float: left; position: absolute;} .banner-desc span{ padding: 10px; font-size:13px; } .banner-desc span h1{ margin-bottom: 5px; font-size:18px;}
            .banner-desc-tr, .banner-desc-cr,.banner-desc-br, .banner-desc-tl, .banner-desc-cl, .banner-desc-bl {bottom:3px; left:0px; top:auto; }

            .home-layout-clients a{ margin: 10px 0px 10px 40px; }


            .module-home-layout3{ width: 516px; } #home-video-block{ width: 470px; height: 274px; margin-right: 0px; }
            #home-advertise{ margin-top: 20px;  height: 196px; width: 470px; } #home-advertise1{ margin-bottom: 0px;} #home-advertise2{ margin-left: 20px; }
            #home-advertise1, #home-advertise2{ height: 196px; width: 225px; } .advertise-image, #home-advertise img{ height: 159px; width: 225px; }

            .module-about-us, .module-ethics, .module-careers{ width: 466px; } .module-philosophy{ width: 466px; }

            .module-pricing{ width: 550px; } #pricing-column-header h2{ font-size: 15px; } #pricing-column-header h1{ font-size: 12px }

            .module-news-vertical, #module-news-preview-holder{ width: 480px; } .news-preview-horizontal-fix, #module-news-preview-container ul li { width:390px; }

            #module-contact-holder { width: 480px; }

            .module-galleries{ width: 486px; }

            #module-columns-container{ margin: 40px 0px; }


            .columns-filter-holder{ margin-bottom: 6px; }
            .filter-button{ font-size: 13px; margin: 0 0 2px 2px; padding: 4px; }

            .full-width-info-container{ width: 100%; }
            .full-width-info-holder{ margin: 3%; width: 94%; }
            .full-width-info-holder-desc span, .custom-separator{ margin-top: 10px; }

            #module-scrollbar-holder{ width: 7px; }
            #module-scrollbar-holder_v2{ width: 7px; }

        }
        @media only screen and (max-width: 479px)
        {
            #menu-container{ position:absolute; width: 100%; height:auto; left:0px; z-index:10; }
            #template-menu{ display: none; }
            #audio-player{display:none;}
            .menu-content-holder{ width: 100%; }
            .template-logo{ margin: 5px 0 5px -47px; background-image: url("../assets/media/synergy_html5_logo_smartphone.png"); width:94px; height:60px;}
            #template-smpartphone-menu{ display: inline; }

            #menu-hider{ width: 100%; height: 10px; }
            #menu-hider-background{ width: 100%; height: 10px; }
            #menu-hider-icon{ background-position: -299px -200px; height: 28px; width: 38px; left:50%; top: 3px; margin-left: -15px; }

            footer{ display:none; }
            #module-home-layout3{width: 367px;}

            #module-home-layout3-holder{width: 308px;}
            #home-video-block{height: 182px; width: 308px; }
            #home-advertise{margin-top:20px;  width: 308px;}
            #home-advertise1{height: 144px; width: 150px; margin-bottom: 0px; margin-right: 8px;}
            #home-advertise2{height: 144px; width: 150px;}
            .advertise-image, .advertise-image img{height: 106px; width: 150px;  }

            #standard-banner{ height: 145px; }
            .banner-desc{display:none;}
            .home-layout2-content ul li {width: 238px;}
            .home-layout-clients a{margin-left: 60px;}

            #module-text-page-holder-about-us, #module-text-page-holder-philosophy,
            #module-text-page-holder-ethics, #module-text-page-holder-careers{ margin: 35px 30px; }
            .module-about-us, .module-ethics, .module-careers{ width: 320px; } .module-philosophy{ width: 320px; }

            #module-news-vertical-container{ margin: 35px 30px; } #module-news-preview-container{margin: 29px 25px;}
            .module-news-vertical, #module-news-preview-holder{ width: 320px; } .news-preview-horizontal-fix, #module-news-preview-container ul li { width:250px; }
            .news-item-vertical-read-more{ width: 30%; }

            .half-thumb-holder{ width: 362px; height: 281px; }
            .half-thumb-image{ width: 360px; height: 221px; }
            .half-thumb-image img{ width: 360px; height: 221px;}

            .module-galleries{ width: 250px; }

            .full-width-info-container{ width: 100%; }
            .full-width-info-holder{ margin: 4%; width: 92%; }
            .full-width-info-holder-desc span, .custom-separator{ margin-top: 10px; }
            #module-scrollbar-holder{ width: 7px; }
            #module-scrollbar-holder_v2{ width: 7px; }

            #map-holder{ height: 200px; }
            #module-contact-holder { width: 320px; }
            .contact-information-details p{ width: 101px; margin-left: 10px; font-size: 12px; }
            .form-input-half-right, .form-input-half-left{ width: 44%; }
            .form-input-large, .form-input-textarea{ width: 91%; }
            .contact-form-holder{ margin-left: 12%;}
            .contact-information{ width: 24%; }
            .contact-form-holder{ width: 64%; }
            .contact-information-title p{ margin-left: 5px;}
            .form-buttons{ width: 70%; margin-right: 16px; }

            .columns-filter-holder{ margin-bottom: 6px; }
            .filter-button{ font-size: 13px; margin: 0 0 2px 2px; padding: 4px; }
            #module-columns-container, #module-columns-preview{ margin: 40px -1px;}
        }
        @media only screen and (min-width: 300px) and (max-width: 390px)
        {
            /*.module-container{ width: 320px; }*/
            .half-thumb-holder{ width: 292px; height: 239px; }
            .half-thumb-image{ width: 290px; height: 178px; }
            .half-thumb-image img{ width: 290px; height: 178px;}
        }
    </style>

    <!-- START TEMPLATE JavaScript load -->
    <script type="text/javascript" async="" src="https://assets.pinterest.com/js/pinit_main.js?0.14169909161196492"></script><script type="text/javascript" async="" src="http://www.google-analytics.com/ga.js"></script><script type="text/javascript" src="js/libs/jquery-1.7.2.min.js"></script>
    <script type="text/javascript" src="js/libs/modernizr.custom.min.js"></script>
    <script type="text/javascript" src="js/libs/jquery.wipetouch.js"></script>

    <script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?key=AIzaSyBttxrYoBq8srteD7evmDqnaK6V2Uun42o&amp;sensor=true"></script>

    <script type="text/javascript" src="js/libs/jquery.gmap.min.js"></script>
    <script type="text/javascript" src="js/greensock/minified/TweenMax.min.js"></script>
    <script type="text/javascript" src="js/libs/jquery.timer.js"></script>
    <script type="text/javascript" src="js/libs/jqueryui/1.8/jquery-ui.min.js"></script>
    <script type="text/javascript" src="js/libs/jquery.mousewheel.min.js"></script>
    <script type="text/javascript" src="js/audio-js/jquery.jplayer.min.js"></script>
    <script type="text/javascript" src="js/audio-js/jplayer.playlist.min.js"></script>
    <script type="text/javascript" src="js/mediacreed/scrollbar/mc.custom.list.js"></script>
    <script type="text/javascript" src="js/mc.modules.animation.min.js"></script>
    <link rel="stylesheet" href="js/video-js/video-js.min.css" media="screen">
    <script type="text/javascript" src="js/video-js/video.min.js"></script>
    <!-- END TEMPLATE JavaScript load -->

    <!--<script src="http://vjs.zencdn.net/c/video.js"></script>
    Careful when using the online version because the destroy method throws an error.
    Our version has the fix on destroy method. Until it updates we recommend using the JS file from the template.
    -->
    <script>
        _V_.options.flash.swf = "js/video-js/video-js.swf";
        _V_.options.techOrder = ["html5", "flash", "links"];
        var params = {};
        params.bgcolor = "#000000";
        params.allowFullScreen = "true";
        _V_.options.flash.params = params;

    </script>
    <script type="text/javascript">

        var _gaq = _gaq || [];
        _gaq.push(['_setAccount', 'UA-35026890-1']);
        _gaq.push(['_trackPageview']);

        (function() {
            var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
            ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
            var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
        })();

    </script>
    <style type="text/css"> span.PIN_1642950077673_embed_grid {
            width: 100%;
            max-width: 257px;
            min-width: 140px;
            display: inline-block;
            border: 1px solid rgba(0,0,0,.1);
            border-radius: 16px;
            overflow: hidden;
            font: 12px "Helvetica Neue", Helvetica, arial, sans-serif;
            color: rgb(54, 54, 54);
            box-sizing: border-box;
            background: #fff;
            cursor: pointer;
            -webkit-font-smoothing: antialiased;
        }
        span.PIN_1642950077673_embed_grid * {
            display: block;
            position: relative;
            font: inherit;
            cursor: inherit;
            color: inherit;
            box-sizing: inherit;
            margin: 0;
            padding: 0;
            text-align: left;
        }
        span.PIN_1642950077673_embed_grid .PIN_1642950077673_hd {
            height: 55px;
        }
        span.PIN_1642950077673_embed_grid .PIN_1642950077673_hd .PIN_1642950077673_img {
            position: absolute;
            top: 10px;
            left: 10px;
            height: 36px;
            width: 36px;
            border-radius: 18px;
            background: transparent url () 0 0 no-repeat;
            background-size: cover;
        }
        span.PIN_1642950077673_embed_grid .PIN_1642950077673_hd .PIN_1642950077673_pinner {
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
            width: 75%;
            position: absolute;
            top: 20px;
            left: 56px;
            font-size: 14px;
            font-weight: bold;
        }
        span.PIN_1642950077673_embed_grid .PIN_1642950077673_bd {
            padding: 0 10px;
            -moz-scrollbars: none;
            -ms-overflow-style: none;
            overflow-x: hidden;
            overflow-y: auto;
        }
        span.PIN_1642950077673_embed_grid .PIN_1642950077673_bd .PIN_1642950077673_ct {
            width: 100%;
            height: auto;
        }
        span.PIN_1642950077673_embed_grid .PIN_1642950077673_bd .PIN_1642950077673_ct .PIN_1642950077673_col {
            display: inline-block;
            width: 100%;
            padding: 1px;
            vertical-align: top;
            min-width: 60px;
        }
        span.PIN_1642950077673_embed_grid .PIN_1642950077673_bd .PIN_1642950077673_ct .PIN_1642950077673_col .PIN_1642950077673_img {
            margin: 0;
            display: inline-block;
            width: 100%;
            background: transparent url() 0 0 no-repeat;
            background-size: cover;
            border-radius: 8px;
        }
        span.PIN_1642950077673_embed_grid .PIN_1642950077673_ft {
            padding: 10px;
        }
        span.PIN_1642950077673_embed_grid .PIN_1642950077673_ft .PIN_1642950077673_button {
            border-radius: 16px;
            text-align: center;
            background-color: #efefef;
            border: 1px solid #efefef;
            position: relative;
            display: block;
            overflow: hidden;
            height: 32px;
            width: 100%;
            min-width: 70px;
            padding: 0 3px;
        }
        span.PIN_1642950077673_embed_grid .PIN_1642950077673_ft .PIN_1642950077673_button .PIN_1642950077673_label {
            position: absolute;
            left: 0;
            width: 100%;
            text-align: center;
        }
        span.PIN_1642950077673_embed_grid .PIN_1642950077673_ft .PIN_1642950077673_button .PIN_1642950077673_label.PIN_1642950077673_top {
            top: 0;
        }
        span.PIN_1642950077673_embed_grid .PIN_1642950077673_ft .PIN_1642950077673_button .PIN_1642950077673_label.PIN_1642950077673_bottom {
            bottom: 0;
        }
        span.PIN_1642950077673_embed_grid .PIN_1642950077673_ft .PIN_1642950077673_button .PIN_1642950077673_label .PIN_1642950077673_string {
            white-space: pre;
            color: #746d6a;
            font-size: 13px;
            font-weight: bold;
            vertical-align: top;
            display: inline-block;
            height: 32px;
            line-height: 32px;
        }
        span.PIN_1642950077673_embed_grid .PIN_1642950077673_ft .PIN_1642950077673_button .PIN_1642950077673_label .PIN_1642950077673_logo {
            display: inline-block;
            vertical-align: bottom;
            height: 32px;
            width: 80px;
            background: transparent url(data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIGhlaWdodD0iMTJweCIgd2lkdGg9IjUwcHgiIHZpZXdCb3g9IjAgMCA1MCAxMiI+PGc+PHBhdGggZD0iTTE5LjY5LDkuMjggTDE5LjY5LDQuMjggTDIxLjI3LDQuMjggTDIxLjI3LDkuMjggTDE5LjY5LDkuMjggWiBNNS45NywwLjAwIEM5LjI3LDAuMDAgMTEuOTUsMi42OSAxMS45NSw2LjAwIEMxMS45NSw5LjMxIDkuMjcsMTIuMDAgNS45NywxMi4wMCBDNS4zOCwxMi4wMCA0LjgwLDExLjkxIDQuMjYsMTEuNzUgQzQuMjYsMTEuNzUgNC4yNiwxMS43NSA0LjI2LDExLjc1IEM0LjI1LDExLjc1IDQuMjQsMTEuNzQgNC4yMywxMS43NCBMNC4yMSwxMS43MyBDNC4yMSwxMS43MyA0LjIxLDExLjczIDQuMjEsMTEuNzMgQzQuNDUsMTEuMzMgNC44MSwxMC42OCA0Ljk1LDEwLjE2IEM1LjAyLDkuODggNS4zMiw4LjczIDUuMzIsOC43MyBDNS41Miw5LjExIDYuMDgsOS40MiA2LjY5LDkuNDIgQzguNDksOS40MiA5Ljc5LDcuNzYgOS43OSw1LjY5IEM5Ljc5LDMuNzEgOC4xOCwyLjIzIDYuMTEsMi4yMyBDMy41MywyLjIzIDIuMTYsMy45NiAyLjE2LDUuODYgQzIuMTYsNi43NCAyLjYzLDcuODMgMy4zNyw4LjE4IEMzLjQ5LDguMjMgMy41NSw4LjIxIDMuNTcsOC4xMCBDMy41OSw4LjAyIDMuNjksNy42MSAzLjc0LDcuNDIgQzMuNzUsNy4zNiAzLjc1LDcuMzEgMy43MCw3LjI1IEMzLjQ1LDYuOTUgMy4yNSw2LjM5IDMuMjUsNS44OCBDMy4yNSw0LjU1IDQuMjUsMy4yNyA1Ljk1LDMuMjcgQzcuNDIsMy4yNyA4LjQ1LDQuMjggOC40NSw1LjcxIEM4LjQ1LDcuMzQgNy42Myw4LjQ2IDYuNTcsOC40NiBDNS45OCw4LjQ2IDUuNTQsNy45OCA1LjY4LDcuMzggQzUuODUsNi42NyA2LjE4LDUuOTAgNi4xOCw1LjM4IEM2LjE4LDQuOTIgNS45Myw0LjU0IDUuNDIsNC41NCBDNC44Miw0LjU0IDQuMzQsNS4xNiA0LjM0LDUuOTkgQzQuMzQsNi41MiA0LjUyLDYuODggNC41Miw2Ljg4IEM0LjUyLDYuODggMy45Myw5LjQwIDMuODIsOS44NyBDMy43MCwxMC4zOCAzLjc1LDExLjExIDMuODAsMTEuNTkgTDMuODAsMTEuNTkgQzMuNzksMTEuNTkgMy43OCwxMS41OCAzLjc4LDExLjU4IEMzLjc3LDExLjU4IDMuNzYsMTEuNTggMy43NiwxMS41NyBDMy43NiwxMS41NyAzLjc2LDExLjU3IDMuNzYsMTEuNTcgQzEuNTYsMTAuNjkgMC4wMCw4LjUzIDAuMDAsNi4wMCBDMC4wMCwyLjY5IDIuNjcsMC4wMCA1Ljk3LDAuMDAgWiBNMTYuODcsMi4zMSBDMTcuNzEsMi4zMSAxOC4zNCwyLjU0IDE4Ljc2LDIuOTUgQzE5LjIxLDMuMzcgMTkuNDYsMy45NiAxOS40Niw0LjY2IEMxOS40Niw2LjAwIDE4LjU0LDYuOTUgMTcuMTEsNi45NSBMMTUuNzIsNi45NSBMMTUuNzIsOS4yOCBMMTQuMTIsOS4yOCBMMTQuMTIsMi4zMSBMMTYuODcsMi4zMSBaIE0xNi45NCw1LjU4IEMxNy41Niw1LjU4IDE3LjkxLDUuMjEgMTcuOTEsNC42NSBDMTcuOTEsNC4xMCAxNy41NSwzLjc2IDE2Ljk0LDMuNzYgTDE1LjcyLDMuNzYgTDE1LjcyLDUuNTggTDE2Ljk0LDUuNTggWiBNNTAuMDAsNS4yOCBMNDkuMTksNS4yOCBMNDkuMTksNy42MiBDNDkuMTksOC4wMSA0OS40MCw4LjExIDQ5Ljc0LDguMTEgQzQ5LjgzLDguMTEgNDkuOTMsOC4xMCA1MC4wMCw4LjEwIEw1MC4wMCw5LjI4IEM0OS44NCw5LjMxIDQ5LjU4LDkuMzMgNDkuMjIsOS4zMyBDNDguMzAsOS4zMyA0Ny42NCw5LjAzIDQ3LjY0LDcuOTYgTDQ3LjY0LDUuMjggTDQ3LjE2LDUuMjggTDQ3LjE2LDQuMjggTDQ3LjY0LDQuMjggTDQ3LjY0LDIuNzAgTDQ5LjE5LDIuNzAgTDQ5LjE5LDQuMjggTDUwLjAwLDQuMjggTDUwLjAwLDUuMjggWiBNNDUuMzEsNi4xMyBDNDYuMTgsNi4yNyA0Ny4yMSw2LjUwIDQ3LjIxLDcuNzcgQzQ3LjIxLDguODcgNDYuMjUsOS40MyA0NC45NSw5LjQzIEM0My41NSw5LjQzIDQyLjY1LDguODEgNDIuNTQsNy43OCBMNDQuMDUsNy43OCBDNDQuMTUsOC4yMCA0NC40Niw4LjQwIDQ0Ljk0LDguNDAgQzQ1LjQyLDguNDAgNDUuNzIsOC4yMiA0NS43Miw3LjkwIEM0NS43Miw3LjQ1IDQ1LjEyLDcuNDAgNDQuNDYsNy4yOSBDNDMuNTksNy4xNCA0Mi42Nyw2LjkxIDQyLjY3LDUuNzQgQzQyLjY3LDQuNjggNDMuNjQsNC4xNCA0NC44Miw0LjE0IEM0Ni4yMiw0LjE0IDQ2Ljk4LDQuNzUgNDcuMDYsNS43NCBMNDUuNjAsNS43NCBDNDUuNTQsNS4yOSA0NS4yNCw1LjE1IDQ0LjgwLDUuMTUgQzQ0LjQyLDUuMTUgNDQuMTIsNS4zMCA0NC4xMiw1LjYxIEM0NC4xMiw1Ljk2IDQ0LjY4LDYuMDEgNDUuMzEsNi4xMyBaIE0yMC40OCwyLjAwIEMyMS4wMCwyLjAwIDIxLjQzLDIuNDIgMjEuNDMsMi45NSBDMjEuNDMsMy40OCAyMS4wMCwzLjkwIDIwLjQ4LDMuOTAgQzE5Ljk1LDMuOTAgMTkuNTMsMy40OCAxOS41MywyLjk1IEMxOS41MywyLjQyIDE5Ljk1LDIuMDAgMjAuNDgsMi4wMCBaIE0yOC40OCw3LjYyIEMyOC40OCw4LjAxIDI4LjcwLDguMTEgMjkuMDQsOC4xMSBDMjkuMTAsOC4xMSAyOS4xOCw4LjEwIDI5LjI0LDguMTAgTDI5LjI0LDkuMjkgQzI5LjA4LDkuMzEgMjguODMsOS4zMyAyOC41Miw5LjMzIEMyNy42MCw5LjMzIDI2Ljk0LDkuMDMgMjYuOTQsNy45NiBMMjYuOTQsNS4yOCBMMjYuNDIsNS4yOCBMMjYuNDIsNC4yOCBMMjYuOTQsNC4yOCBMMjYuOTQsMi43MCBMMjguNDgsMi43MCBMMjguNDgsNC4yOCBMMjkuMjQsNC4yOCBMMjkuMjQsNS4yOCBMMjguNDgsNS4yOCBMMjguNDgsNy42MiBaIE0yNC42OSw0LjE0IEMyNS43Nyw0LjE0IDI2LjQxLDQuOTIgMjYuNDEsNi4wMyBMMjYuNDEsOS4yOCBMMjQuODMsOS4yOCBMMjQuODMsNi4zNSBDMjQuODMsNS44MiAyNC41Nyw1LjQ2IDI0LjA1LDUuNDYgQzIzLjUzLDUuNDYgMjMuMTgsNS45MCAyMy4xOCw2LjUyIEwyMy4xOCw5LjI4IEwyMS42MCw5LjI4IEwyMS42MCw0LjI4IEwyMy4xMiw0LjI4IEwyMy4xMiw0Ljk3IEwyMy4xNSw0Ljk3IEMyMy41Miw0LjQzIDI0LjAwLDQuMTQgMjQuNjksNC4xNCBaIE0zMy40Miw0Ljc2IEMzMi45OSw0LjM3IDMyLjQzLDQuMTQgMzEuNzIsNC4xNCBDMzAuMjAsNC4xNCAyOS4xNiw1LjI4IDI5LjE2LDYuNzcgQzI5LjE2LDguMjggMzAuMTcsOS40MiAzMS44MSw5LjQyIEMzMi40NCw5LjQyIDMyLjk1LDkuMjYgMzMuMzcsOC45NiBDMzMuODAsOC42NiAzNC4xMCw4LjIzIDM0LjIwLDcuNzggTDMyLjY2LDcuNzggQzMyLjUyLDguMTAgMzIuMjUsOC4yOCAzMS44Myw4LjI4IEMzMS4xOCw4LjI4IDMwLjgxLDcuODYgMzAuNzIsNy4xOSBMMzQuMjksNy4xOSBDMzQuMzAsNi4xOCAzNC4wMSw1LjMxIDMzLjQyLDQuNzYgTDMzLjQyLDQuNzYgWiBNNDEuNjYsNC43NiBDNDIuMjYsNS4zMSA0Mi41NSw2LjE4IDQyLjU0LDcuMTkgTDM4Ljk3LDcuMTkgQzM5LjA2LDcuODYgMzkuNDMsOC4yOCA0MC4wOCw4LjI4IEM0MC41MCw4LjI4IDQwLjc3LDguMTAgNDAuOTEsNy43OCBMNDIuNDUsNy43OCBDNDIuMzQsOC4yMyA0Mi4wNSw4LjY2IDQxLjYyLDguOTYgQzQxLjIwLDkuMjYgNDAuNjksOS40MiA0MC4wNiw5LjQyIEMzOC40Miw5LjQyIDM3LjQxLDguMjggMzcuNDEsNi43NyBDMzcuNDEsNS4yOCAzOC40NSw0LjE0IDM5Ljk3LDQuMTQgQzQwLjY3LDQuMTQgNDEuMjQsNC4zNyA0MS42Niw0Ljc2IFogTTMwLjczLDYuMjQgQzMwLjgzLDUuNjUgMzEuMTQsNS4yNyAzMS43NSw1LjI3IEMzMi4yNiw1LjI3IDMyLjYzLDUuNjUgMzIuNjksNi4yNCBMMzAuNzMsNi4yNCBaIE0zOC45OCw2LjI0IEw0MC45NCw2LjI0IEM0MC44OCw1LjY1IDQwLjUxLDUuMjcgNDAuMDAsNS4yNyBDMzkuMzksNS4yNyAzOS4wOCw1LjY1IDM4Ljk4LDYuMjQgWiBNMzcuNTQsNC4yMSBMMzcuNTQsNS42MCBDMzYuNjQsNS41MSAzNi4wNyw1Ljk5IDM2LjA3LDcuMDMgTDM2LjA3LDkuMjggTDM0LjQ4LDkuMjggTDM0LjQ4LDQuMjggTDM2LjAwLDQuMjggTDM2LjAwLDUuMDYgTDM2LjAzLDUuMDYgQzM2LjM4LDQuNDcgMzYuNzgsNC4yMSAzNy4zOSw0LjIxIEMzNy40NSw0LjIxIDM3LjUwLDQuMjEgMzcuNTQsNC4yMSBaIiBmaWxsPSIjZTYwMDIzIj48L3BhdGg+PC9nPjwvc3ZnPg==) 50% 50% no-repeat;
            background-size: contain;
        }
        span.PIN_1642950077673_embed_grid .PIN_1642950077673_ft .PIN_1642950077673_button:hover {
            border: 1px solid rgba(0,0,0,.1);
        }
        span.PIN_1642950077673_embed_grid.PIN_1642950077673_noscroll .PIN_1642950077673_bd {
            overflow: hidden;
        }
        span.PIN_1642950077673_embed_grid.PIN_1642950077673_board .PIN_1642950077673_hd .PIN_1642950077673_pinner {
            top: 10px;
        }
        span.PIN_1642950077673_embed_grid.PIN_1642950077673_board .PIN_1642950077673_hd .PIN_1642950077673_board {
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
            width: 75%;
            position: absolute;
            bottom: 10px;
            left: 56px;
            color: #363636;
            font-size: 12px;
        }
        span.PIN_1642950077673_embed_grid.PIN_1642950077673_c2 {
            max-width: 494px;
            min-width: 140px;
        }
        span.PIN_1642950077673_embed_grid.PIN_1642950077673_c2 .PIN_1642950077673_bd .PIN_1642950077673_ct .PIN_1642950077673_col {
            width: 50%;
        }
        span.PIN_1642950077673_embed_grid.PIN_1642950077673_c3 {
            max-width: 731px;
            min-width: 200px;
        }
        span.PIN_1642950077673_embed_grid.PIN_1642950077673_c3 .PIN_1642950077673_bd .PIN_1642950077673_ct .PIN_1642950077673_col {
            width: 33.33%;
        }
        span.PIN_1642950077673_embed_grid.PIN_1642950077673_c4 {
            max-width: 968px;
            min-width: 260px;
        }
        span.PIN_1642950077673_embed_grid.PIN_1642950077673_c4 .PIN_1642950077673_bd .PIN_1642950077673_ct .PIN_1642950077673_col {
            width: 25%;
        }
        span.PIN_1642950077673_embed_grid.PIN_1642950077673_c5 {
            max-width: 1205px;
            min-width: 320px;
        }
        span.PIN_1642950077673_embed_grid.PIN_1642950077673_c5 .PIN_1642950077673_bd .PIN_1642950077673_ct .PIN_1642950077673_col {
            width: 20%;
        }
        span.PIN_1642950077673_embed_grid.PIN_1642950077673_c6 {
            max-width: 1442px;
            min-width: 380px;
        }
        span.PIN_1642950077673_embed_grid.PIN_1642950077673_c6 .PIN_1642950077673_bd .PIN_1642950077673_ct .PIN_1642950077673_col {
            width: 16.66%;
        }
        span.PIN_1642950077673_embed_grid.PIN_1642950077673_c7 {
            max-width: 1679px;
            min-width: 440px;
        }
        span.PIN_1642950077673_embed_grid.PIN_1642950077673_c7 .PIN_1642950077673_bd .PIN_1642950077673_ct .PIN_1642950077673_col {
            width: 14.28%;
        }
        span.PIN_1642950077673_embed_grid.PIN_1642950077673_c8 {
            max-width: 1916px;
            min-width: 500px;
        }
        span.PIN_1642950077673_embed_grid.PIN_1642950077673_c8 .PIN_1642950077673_bd .PIN_1642950077673_ct .PIN_1642950077673_col {
            width: 12.5%;
        }
        span.PIN_1642950077673_embed_grid.PIN_1642950077673_c9 {
            max-width: 2153px;
            min-width: 560px;
        }
        span.PIN_1642950077673_embed_grid.PIN_1642950077673_c9 .PIN_1642950077673_bd .PIN_1642950077673_ct .PIN_1642950077673_col {
            width: 11.11%;
        }
        span.PIN_1642950077673_embed_grid.PIN_1642950077673_c10 {
            max-width: 2390px;
            min-width: 620px;
        }
        span.PIN_1642950077673_embed_grid.PIN_1642950077673_c10 .PIN_1642950077673_bd .PIN_1642950077673_ct .PIN_1642950077673_col {
            width: 10%;
        }
        span.PIN_1642950077673_embed_pin {
            min-width: 160px;
            max-width: 236px;
            width: 100%;
            border-radius: 16px;
            font: 12px "SF Pro", "Helvetica Neue", Helvetica, arial, sans-serif;
            display: inline-block;
            background: rgba(0,0,0,.1);
            overflow: hidden;
            border: 1px solid rgba(0,0,0,.1);
            box-sizing: border-box;
            -webkit-font-smoothing: antialiased;
            -webkit-osx-font-smoothing: grayscale;
        }
        span.PIN_1642950077673_embed_pin * {
            display: block;
            position: relative;
            font: inherit;
            cursor: inherit;
            color: inherit;
            box-sizing: inherit;
            margin: 0;
            padding: 0;
            text-align: left;
        }
        span.PIN_1642950077673_embed_pin .PIN_1642950077673_pages {
            height: 100%;
            width: 100%;
            display: block;
            position: relative;
            overflow: hidden;
        }
        span.PIN_1642950077673_embed_pin .PIN_1642950077673_pages .PIN_1642950077673_page {
            position: absolute;
            left: 0;
            transition-property: left;
            transition-duration: .25s;
            transition-timing-function: ease-in;
            height: inherit;
            width: inherit;
        }
        span.PIN_1642950077673_embed_pin .PIN_1642950077673_pages .PIN_1642950077673_page.PIN_1642950077673_past {
            left: -100%;
        }
        span.PIN_1642950077673_embed_pin .PIN_1642950077673_pages .PIN_1642950077673_page.PIN_1642950077673_future {
            left: 100%;
        }
        span.PIN_1642950077673_embed_pin .PIN_1642950077673_pages .PIN_1642950077673_page .PIN_1642950077673_blocks {
            height: inherit;
            width: inherit;
            overflow: hidden;
        }
        span.PIN_1642950077673_embed_pin .PIN_1642950077673_pages .PIN_1642950077673_page .PIN_1642950077673_blocks .PIN_1642950077673_block {
            position: absolute;
            height: 100%;
            width: 100%;
            overflowX: hidden;
        }
        span.PIN_1642950077673_embed_pin .PIN_1642950077673_pages .PIN_1642950077673_page .PIN_1642950077673_blocks .PIN_1642950077673_block .PIN_1642950077673_container {
            position: absolute;
            width: 100%;
        }
        span.PIN_1642950077673_embed_pin .PIN_1642950077673_pages .PIN_1642950077673_page .PIN_1642950077673_blocks .PIN_1642950077673_block .PIN_1642950077673_container.PIN_1642950077673_top {
            top: 0;
        }
        span.PIN_1642950077673_embed_pin .PIN_1642950077673_pages .PIN_1642950077673_page .PIN_1642950077673_blocks .PIN_1642950077673_block .PIN_1642950077673_container.PIN_1642950077673_middle {
            top: 50%;
            transform: translateY(-50%);
        }
        span.PIN_1642950077673_embed_pin .PIN_1642950077673_pages .PIN_1642950077673_page .PIN_1642950077673_blocks .PIN_1642950077673_block .PIN_1642950077673_container.PIN_1642950077673_bottom {
            bottom: 0;
        }
        span.PIN_1642950077673_embed_pin .PIN_1642950077673_pages .PIN_1642950077673_page .PIN_1642950077673_blocks .PIN_1642950077673_block .PIN_1642950077673_container.PIN_1642950077673_left {
            text-align: left;
        }
        span.PIN_1642950077673_embed_pin .PIN_1642950077673_pages .PIN_1642950077673_page .PIN_1642950077673_blocks .PIN_1642950077673_block .PIN_1642950077673_container.PIN_1642950077673_center {
            text-align: center;
        }
        span.PIN_1642950077673_embed_pin .PIN_1642950077673_pages .PIN_1642950077673_page .PIN_1642950077673_blocks .PIN_1642950077673_block .PIN_1642950077673_container.PIN_1642950077673_right {
            text-align: right;
        }
        span.PIN_1642950077673_embed_pin .PIN_1642950077673_pages .PIN_1642950077673_page .PIN_1642950077673_blocks .PIN_1642950077673_block .PIN_1642950077673_container .PIN_1642950077673_paragraph {
            text-align: inherit;
            display: inline;
            word-break: break-word;
            font-size: 16px;
            line-height: 1.24em;
            border-radius: 3px;
            padding: 0.1em 0.2em;
        }
        span.PIN_1642950077673_embed_pin .PIN_1642950077673_pages .PIN_1642950077673_page .PIN_1642950077673_blocks .PIN_1642950077673_block .PIN_1642950077673_container _video {
            position: absolute;
            height: 100%;
            width: auto;
            left: 50%;
            transform: translateX(-50%);
        }
        span.PIN_1642950077673_embed_pin .PIN_1642950077673_pages .PIN_1642950077673_page .PIN_1642950077673_blocks .PIN_1642950077673_block .PIN_1642950077673_container.PIN_1642950077673_video {
            height: 100%;
        }
        span.PIN_1642950077673_embed_pin .PIN_1642950077673_pages .PIN_1642950077673_page .PIN_1642950077673_blocks .PIN_1642950077673_block .PIN_1642950077673_image {
            position: absolute;
            height: 100%;
            width: 100%;
            background-position: 50% 50%;
            background-repeat: no-repeat;
        }
        span.PIN_1642950077673_embed_pin .PIN_1642950077673_pages .PIN_1642950077673_page .PIN_1642950077673_blocks .PIN_1642950077673_block .PIN_1642950077673_image.PIN_1642950077673_containMe {
            background-size: contain;
        }
        span.PIN_1642950077673_embed_pin .PIN_1642950077673_pages .PIN_1642950077673_page .PIN_1642950077673_blocks .PIN_1642950077673_block .PIN_1642950077673_image.PIN_1642950077673_coverMe {
            background-size: cover;
        }
        span.PIN_1642950077673_embed_pin .PIN_1642950077673_pages .PIN_1642950077673_page .PIN_1642950077673_blocks .PIN_1642950077673_block video {
            position: absolute;
            height: 100%;
            width: auto;
            left: 50%;
            transform: translateX(-50%);
        }
        span.PIN_1642950077673_embed_pin .PIN_1642950077673_pages .PIN_1642950077673_page .PIN_1642950077673_blocks .PIN_1642950077673_block video.PIN_1642950077673_isNative {
            width: 100%;
        }
        span.PIN_1642950077673_embed_pin .PIN_1642950077673_pages .PIN_1642950077673_overlay {
            position: absolute;
            height: 100%;
            width: 100%;
            opacity: .001;
            background: rgba(0,0,0,.03);
            cursor: pointer;
            user-select: none;
        }
        span.PIN_1642950077673_embed_pin .PIN_1642950077673_pages .PIN_1642950077673_overlay .PIN_1642950077673_repin {
            position: absolute;
            top: 12px;
            right: 12px;
            height: 40px;
            color: #fff;
            background: #e60023 url(data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIGhlaWdodD0iMzBweCIgd2lkdGg9IjMwcHgiIHZpZXdCb3g9Ii0xIC0xIDMxIDMxIj48Zz48cGF0aCBkPSJNMjkuNDQ5LDE0LjY2MiBDMjkuNDQ5LDIyLjcyMiAyMi44NjgsMjkuMjU2IDE0Ljc1LDI5LjI1NiBDNi42MzIsMjkuMjU2IDAuMDUxLDIyLjcyMiAwLjA1MSwxNC42NjIgQzAuMDUxLDYuNjAxIDYuNjMyLDAuMDY3IDE0Ljc1LDAuMDY3IEMyMi44NjgsMC4wNjcgMjkuNDQ5LDYuNjAxIDI5LjQ0OSwxNC42NjIiIGZpbGw9IiNmZmYiIHN0cm9rZT0iI2ZmZiIgc3Ryb2tlLXdpZHRoPSIxIj48L3BhdGg+PHBhdGggZD0iTTE0LjczMywxLjY4NiBDNy41MTYsMS42ODYgMS42NjUsNy40OTUgMS42NjUsMTQuNjYyIEMxLjY2NSwyMC4xNTkgNS4xMDksMjQuODU0IDkuOTcsMjYuNzQ0IEM5Ljg1NiwyNS43MTggOS43NTMsMjQuMTQzIDEwLjAxNiwyMy4wMjIgQzEwLjI1MywyMi4wMSAxMS41NDgsMTYuNTcyIDExLjU0OCwxNi41NzIgQzExLjU0OCwxNi41NzIgMTEuMTU3LDE1Ljc5NSAxMS4xNTcsMTQuNjQ2IEMxMS4xNTcsMTIuODQyIDEyLjIxMSwxMS40OTUgMTMuNTIyLDExLjQ5NSBDMTQuNjM3LDExLjQ5NSAxNS4xNzUsMTIuMzI2IDE1LjE3NSwxMy4zMjMgQzE1LjE3NSwxNC40MzYgMTQuNDYyLDE2LjEgMTQuMDkzLDE3LjY0MyBDMTMuNzg1LDE4LjkzNSAxNC43NDUsMTkuOTg4IDE2LjAyOCwxOS45ODggQzE4LjM1MSwxOS45ODggMjAuMTM2LDE3LjU1NiAyMC4xMzYsMTQuMDQ2IEMyMC4xMzYsMTAuOTM5IDE3Ljg4OCw4Ljc2NyAxNC42NzgsOC43NjcgQzEwLjk1OSw4Ljc2NyA4Ljc3NywxMS41MzYgOC43NzcsMTQuMzk4IEM4Ljc3NywxNS41MTMgOS4yMSwxNi43MDkgOS43NDksMTcuMzU5IEM5Ljg1NiwxNy40ODggOS44NzIsMTcuNiA5Ljg0LDE3LjczMSBDOS43NDEsMTguMTQxIDkuNTIsMTkuMDIzIDkuNDc3LDE5LjIwMyBDOS40MiwxOS40NCA5LjI4OCwxOS40OTEgOS4wNCwxOS4zNzYgQzcuNDA4LDE4LjYyMiA2LjM4NywxNi4yNTIgNi4zODcsMTQuMzQ5IEM2LjM4NywxMC4yNTYgOS4zODMsNi40OTcgMTUuMDIyLDYuNDk3IEMxOS41NTUsNi40OTcgMjMuMDc4LDkuNzA1IDIzLjA3OCwxMy45OTEgQzIzLjA3OCwxOC40NjMgMjAuMjM5LDIyLjA2MiAxNi4yOTcsMjIuMDYyIEMxNC45NzMsMjIuMDYyIDEzLjcyOCwyMS4zNzkgMTMuMzAyLDIwLjU3MiBDMTMuMzAyLDIwLjU3MiAxMi42NDcsMjMuMDUgMTIuNDg4LDIzLjY1NyBDMTIuMTkzLDI0Ljc4NCAxMS4zOTYsMjYuMTk2IDEwLjg2MywyNy4wNTggQzEyLjA4NiwyNy40MzQgMTMuMzg2LDI3LjYzNyAxNC43MzMsMjcuNjM3IEMyMS45NSwyNy42MzcgMjcuODAxLDIxLjgyOCAyNy44MDEsMTQuNjYyIEMyNy44MDEsNy40OTUgMjEuOTUsMS42ODYgMTQuNzMzLDEuNjg2IiBmaWxsPSIjZTYwMDIzIj48L3BhdGg+PC9nPjwvc3ZnPg==) 10px 50% no-repeat;
            background-size: 18px 18px;
            text-indent: 36px;
            font-size: 14px;
            line-height: 40px;
            font-weight: bold;
            border-radius: 20px;
            padding: 0 12px 0 0;
            width: auto;
            z-index: 2;
        }
        span.PIN_1642950077673_embed_pin .PIN_1642950077673_pages .PIN_1642950077673_overlay .PIN_1642950077673_price {
            position: absolute;
            top: 12px;
            left: 12px;
            height: 40px;
            background: rgba(255,255,255,.9);
            font-size: 14px;
            line-height: 40px;
            font-weight: bold;
            border-radius: 20px;
            padding: 0 12px;
            width: auto;
            z-index: 2;
        }
        span.PIN_1642950077673_embed_pin .PIN_1642950077673_pages .PIN_1642950077673_overlay .PIN_1642950077673_controls {
            position: absolute;
            height: 64px;
            width: 64px;
            top: 50%;
            left: 50%;
            margin-top: -32px;
            margin-left: -32px;
        }
        span.PIN_1642950077673_embed_pin .PIN_1642950077673_pages .PIN_1642950077673_overlay .PIN_1642950077673_controls .PIN_1642950077673_play {
            background: rgba(0,0,0,.8) url(data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIGhlaWdodD0iMjRweCIgd2lkdGg9IjI0cHgiIHZpZXdCb3g9IjAgMCAyNCAyNCI+PGc+PHBhdGggZD0iTTIyLjYyIDkuNDhMOC42My40OEEzIDMgMCAwIDAgNCAzdjE4YTMgMyAwIDAgMCA0LjYzIDIuNTJsMTQtOWEzIDMgMCAwIDAgMC01LjA0IiBmaWxsPSIjZmZmIj48L3BhdGg+PC9nPjwvc3ZnPg==) 50% 50% no-repeat;
        }
        span.PIN_1642950077673_embed_pin .PIN_1642950077673_pages .PIN_1642950077673_overlay .PIN_1642950077673_controls .PIN_1642950077673_pause {
            background: rgba(0,0,0,.8) url(data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIGhlaWdodD0iMjRweCIgd2lkdGg9IjI0cHgiIHZpZXdCb3g9IjAgMCAyNCAyNCI+PGc+PHBhdGggZD0iTTcgMGMxLjY1IDAgMyAxLjM1IDMgM3YxOGMwIDEuNjUtMS4zNSAzLTMgM3MtMy0xLjM1LTMtM1YzYzAtMS42NSAxLjM1LTMgMy0zem0xMCAwYzEuNjUgMCAzIDEuMzUgMyAzdjE4YzAgMS42NS0xLjM1IDMtMyAzcy0zLTEuMzUtMy0zVjNjMC0xLjY1IDEuMzUtMyAzLTN6IiBmaWxsPSIjZmZmIj48L3BhdGg+PC9nPjwvc3ZnPg==) 50% 50% no-repeat;
        }
        span.PIN_1642950077673_embed_pin .PIN_1642950077673_pages .PIN_1642950077673_overlay .PIN_1642950077673_controls .PIN_1642950077673_pause,  span.PIN_1642950077673_embed_pin .PIN_1642950077673_pages .PIN_1642950077673_overlay .PIN_1642950077673_controls .PIN_1642950077673_play {
            position: absolute;
            display: block;
            height: 64px;
            width: 64px;
            border-radius: 32px;
        }
        span.PIN_1642950077673_embed_pin .PIN_1642950077673_pages .PIN_1642950077673_overlay .PIN_1642950077673_nav {
            user-select: none;
            position: absolute;
            height: 100%;
            width: 20%;
            background: transparent url() 0 0 no-repeat;
            background-size: 24px 24px;
            z-index: 1;
        }
        span.PIN_1642950077673_embed_pin .PIN_1642950077673_pages .PIN_1642950077673_overlay .PIN_1642950077673_nav.PIN_1642950077673_forward,  span.PIN_1642950077673_embed_pin .PIN_1642950077673_pages .PIN_1642950077673_overlay .PIN_1642950077673_nav.PIN_1642950077673_forward_noop {
            right: 0;
        }
        span.PIN_1642950077673_embed_pin .PIN_1642950077673_pages .PIN_1642950077673_overlay .PIN_1642950077673_nav.PIN_1642950077673_backward,  span.PIN_1642950077673_embed_pin .PIN_1642950077673_pages .PIN_1642950077673_overlay .PIN_1642950077673_nav.PIN_1642950077673_backward_noop {
            left: 0;
        }
        span.PIN_1642950077673_embed_pin .PIN_1642950077673_pages .PIN_1642950077673_overlay .PIN_1642950077673_nav.PIN_1642950077673_forward {
            background-image: url(data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIGhlaWdodD0iMjRweCIgd2lkdGg9IjI0cHgiIHZpZXdCb3g9IjAgMCAyNCAyNCI+PGc+PHBhdGggZD0iTTYuNzIgMjRjLjU3IDAgMS4xNC0uMjIgMS41Ny0uNjZMMTkuNSAxMiA4LjI5LjY2Yy0uODYtLjg4LTIuMjctLjg4LTMuMTQgMC0uODcuODgtLjg3IDIuMyAwIDMuMThMMTMuMjEgMTJsLTguMDYgOC4xNmMtLjg3Ljg4LS44NyAyLjMgMCAzLjE4LjQzLjQ0IDEgLjY2IDEuNTcuNjYiIGZpbGw9IiNmZmYiIHN0cm9rZT0iI2FhYSIgc3Ryb2tlLXdpZHRoPSIuNSI+PC9wYXRoPjwvZz48L3N2Zz4=);
            background-position: 100% 50%;
        }
        span.PIN_1642950077673_embed_pin .PIN_1642950077673_pages .PIN_1642950077673_overlay .PIN_1642950077673_nav.PIN_1642950077673_backward {
            background-image: url(data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIGhlaWdodD0iMjRweCIgd2lkdGg9IjI0cHgiIHZpZXdCb3g9IjAgMCAyNCAyNCI+PGc+PHBhdGggZD0iTTE3LjI4IDI0Yy0uNTcgMC0xLjE0LS4yMi0xLjU4LS42Nkw0LjUgMTIgMTUuNy42NmEyLjIxIDIuMjEgMCAwIDEgMy4xNSAwYy44Ny44OC44NyAyLjMgMCAzLjE4TDEwLjc5IDEybDguMDYgOC4xNmMuODcuODguODcgMi4zIDAgMy4xOC0uNDQuNDQtMSAuNjYtMS41Ny42NiIgZmlsbD0iI2ZmZiIgc3Ryb2tlPSIjYWFhIiBzdHJva2Utd2lkdGg9Ii41Ij48L3BhdGg+PC9nPjwvc3ZnPg==);
            background-position: 0 50%;
        }
        span.PIN_1642950077673_embed_pin .PIN_1642950077673_pages .PIN_1642950077673_overlay .PIN_1642950077673_progress {
            position: absolute;
            bottom: 0;
            left: 0;
            height: 36px;
            width: 100%;
            background: linear-gradient(rgba(0,0,0,0), rgba(0,0,0,.2));
            text-align: center;
        }
        span.PIN_1642950077673_embed_pin .PIN_1642950077673_pages .PIN_1642950077673_overlay .PIN_1642950077673_progress .PIN_1642950077673_indicator {
            display: inline-block;
            height: 8px;
            width: 8px;
            margin: 16px 2px 0;
            background: rgba(255,255,255,.5);
            border-radius: 50%;
        }
        span.PIN_1642950077673_embed_pin .PIN_1642950077673_pages .PIN_1642950077673_overlay .PIN_1642950077673_progress .PIN_1642950077673_indicator.PIN_1642950077673_current {
            background: #fff;
        }
        span.PIN_1642950077673_embed_pin .PIN_1642950077673_pages .PIN_1642950077673_overlay:hover {
            opacity: 1;
        }
        span.PIN_1642950077673_embed_pin .PIN_1642950077673_footer {
            position: relative;
            display: block;
            height: 96px;
            padding: 16px;
            color: #333;
            background: #fff;
        }
        span.PIN_1642950077673_embed_pin .PIN_1642950077673_footer .PIN_1642950077673_container {
            position: relative;
            display: block;
            width: 100%;
            height: 100%;
            background: #fff;
        }
        span.PIN_1642950077673_embed_pin .PIN_1642950077673_footer .PIN_1642950077673_container .PIN_1642950077673_title {
            position: absolute;
            left: 0px;
            right: 0px;
            font-size: 16px;
            font-weight: bold;
            overflow: hidden;
            white-space: pre;
            text-overflow: ellipsis;
        }
        span.PIN_1642950077673_embed_pin .PIN_1642950077673_footer .PIN_1642950077673_container .PIN_1642950077673_avatar {
            position: absolute;
            bottom: 0;
            left: 0;
            height: 30px;
            width: 30px;
            border-radius: 50%;
            background: transparent url() 0 0 no-repeat;
            background-size: cover;
            box-shadow: 0 0 1px rgba(0,0,0,.5);
        }
        span.PIN_1642950077673_embed_pin .PIN_1642950077673_footer .PIN_1642950077673_container .PIN_1642950077673_deets {
            position: absolute;
            left: 40px;
            right: 0px;
            bottom: 0px;
            height: 30px;
        }
        span.PIN_1642950077673_embed_pin .PIN_1642950077673_footer .PIN_1642950077673_container .PIN_1642950077673_deets span {
            left: 0px;
            right: 0px;
            position: absolute;
            font-size: 12px;
            overflow: hidden;
            white-space: pre;
            text-overflow: ellipsis;
        }
        span.PIN_1642950077673_embed_pin .PIN_1642950077673_footer .PIN_1642950077673_container .PIN_1642950077673_deets .PIN_1642950077673_topline {
            top: 0;
        }
        span.PIN_1642950077673_embed_pin .PIN_1642950077673_footer .PIN_1642950077673_container .PIN_1642950077673_deets .PIN_1642950077673_bottomline {
            bottom: 0;
        }
        span.PIN_1642950077673_embed_pin .PIN_1642950077673_footer::after {
            content: "------------------------------------------------------------------------------------------------------------------------";
            display: block;
            height: 1px;
            line-height: 1px;
            color: transparent;
        }
        span.PIN_1642950077673_embed_pin .PIN_1642950077673_footer.PIN_1642950077673_uno .PIN_1642950077673_container .PIN_1642950077673_deets .PIN_1642950077673_topline {
            top: 8px;
        }
        span.PIN_1642950077673_embed_pin .PIN_1642950077673_footer.PIN_1642950077673_uno .PIN_1642950077673_container .PIN_1642950077673_deets .PIN_1642950077673_bottomline {
            display: none;
        }
        span.PIN_1642950077673_embed_pin.PIN_1642950077673_fresh .PIN_1642950077673_pages .PIN_1642950077673_overlay {
            opacity: 1;
        }
        span.PIN_1642950077673_embed_pin.PIN_1642950077673_medium {
            min-width: 237px;
            max-width: 345px;
            border-radius: 24px;
        }
        span.PIN_1642950077673_embed_pin.PIN_1642950077673_medium .PIN_1642950077673_pages .PIN_1642950077673_page .PIN_1642950077673_blocks .PIN_1642950077673_block .PIN_1642950077673_container .PIN_1642950077673_paragraph {
            font-size: 21px;
            line-height: 1.23em;
            border-radius: 5px;
            padding: 2px 3px;
        }
        span.PIN_1642950077673_embed_pin.PIN_1642950077673_medium .PIN_1642950077673_pages .PIN_1642950077673_overlay .PIN_1642950077673_progress .PIN_1642950077673_indicator {
            margin: 16px 4px 0;
        }
        span.PIN_1642950077673_embed_pin.PIN_1642950077673_large {
            min-width: 346px;
            max-width: 600px;
            border-radius: 36px;
        }
        span.PIN_1642950077673_embed_pin.PIN_1642950077673_large .PIN_1642950077673_pages .PIN_1642950077673_page .PIN_1642950077673_blocks .PIN_1642950077673_block .PIN_1642950077673_container .PIN_1642950077673_paragraph {
            font-size: 27px;
            line-height: 1.11em;
            border-radius: 5px;
            padding: 3px 4.5px;
        }
        span.PIN_1642950077673_embed_pin.PIN_1642950077673_large .PIN_1642950077673_pages .PIN_1642950077673_overlay .PIN_1642950077673_progress .PIN_1642950077673_indicator {
            margin: 16px 4px 0;
        }
        span.PIN_1642950077673_embed_pin.PIN_1642950077673_atStart .PIN_1642950077673_pages .PIN_1642950077673_overlay .PIN_1642950077673_backward {
            display: none;
        }
        span.PIN_1642950077673_embed_pin.PIN_1642950077673_atEnd .PIN_1642950077673_pages .PIN_1642950077673_overlay .PIN_1642950077673_forward {
            display: none;
        }
        .PIN_1642950077673_button_follow {
            display: inline-block;
            color: #363636;
            box-sizing: border-box;
            box-shadow: inset 0 0 1px #888;
            border-radius: 3px;
            font: bold 11px/20px "Helvetica Neue", Helvetica, arial, sans-serif !important;
            cursor: pointer;
            -webkit-font-smoothing: antialiased;
            height: 20px;
            padding: 0 4px 0 20px;
            background-color: #efefef;
            position: relative;
            white-space: nowrap;
            vertical-align: baseline;
        }
        .PIN_1642950077673_button_follow:hover {
            box-shadow: inset 0 0 1px #000;
        }
        .PIN_1642950077673_button_follow::after {
            content: "";
            position: absolute;
            height: 14px;
            width: 14px;
            top: 3px;
            left: 3px;
            background: transparent url(data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIGhlaWdodD0iMzBweCIgd2lkdGg9IjMwcHgiIHZpZXdCb3g9Ii0xIC0xIDMxIDMxIj48Zz48cGF0aCBkPSJNMjkuNDQ5LDE0LjY2MiBDMjkuNDQ5LDIyLjcyMiAyMi44NjgsMjkuMjU2IDE0Ljc1LDI5LjI1NiBDNi42MzIsMjkuMjU2IDAuMDUxLDIyLjcyMiAwLjA1MSwxNC42NjIgQzAuMDUxLDYuNjAxIDYuNjMyLDAuMDY3IDE0Ljc1LDAuMDY3IEMyMi44NjgsMC4wNjcgMjkuNDQ5LDYuNjAxIDI5LjQ0OSwxNC42NjIiIGZpbGw9IiNmZmYiIHN0cm9rZT0iI2ZmZiIgc3Ryb2tlLXdpZHRoPSIxIj48L3BhdGg+PHBhdGggZD0iTTE0LjczMywxLjY4NiBDNy41MTYsMS42ODYgMS42NjUsNy40OTUgMS42NjUsMTQuNjYyIEMxLjY2NSwyMC4xNTkgNS4xMDksMjQuODU0IDkuOTcsMjYuNzQ0IEM5Ljg1NiwyNS43MTggOS43NTMsMjQuMTQzIDEwLjAxNiwyMy4wMjIgQzEwLjI1MywyMi4wMSAxMS41NDgsMTYuNTcyIDExLjU0OCwxNi41NzIgQzExLjU0OCwxNi41NzIgMTEuMTU3LDE1Ljc5NSAxMS4xNTcsMTQuNjQ2IEMxMS4xNTcsMTIuODQyIDEyLjIxMSwxMS40OTUgMTMuNTIyLDExLjQ5NSBDMTQuNjM3LDExLjQ5NSAxNS4xNzUsMTIuMzI2IDE1LjE3NSwxMy4zMjMgQzE1LjE3NSwxNC40MzYgMTQuNDYyLDE2LjEgMTQuMDkzLDE3LjY0MyBDMTMuNzg1LDE4LjkzNSAxNC43NDUsMTkuOTg4IDE2LjAyOCwxOS45ODggQzE4LjM1MSwxOS45ODggMjAuMTM2LDE3LjU1NiAyMC4xMzYsMTQuMDQ2IEMyMC4xMzYsMTAuOTM5IDE3Ljg4OCw4Ljc2NyAxNC42NzgsOC43NjcgQzEwLjk1OSw4Ljc2NyA4Ljc3NywxMS41MzYgOC43NzcsMTQuMzk4IEM4Ljc3NywxNS41MTMgOS4yMSwxNi43MDkgOS43NDksMTcuMzU5IEM5Ljg1NiwxNy40ODggOS44NzIsMTcuNiA5Ljg0LDE3LjczMSBDOS43NDEsMTguMTQxIDkuNTIsMTkuMDIzIDkuNDc3LDE5LjIwMyBDOS40MiwxOS40NCA5LjI4OCwxOS40OTEgOS4wNCwxOS4zNzYgQzcuNDA4LDE4LjYyMiA2LjM4NywxNi4yNTIgNi4zODcsMTQuMzQ5IEM2LjM4NywxMC4yNTYgOS4zODMsNi40OTcgMTUuMDIyLDYuNDk3IEMxOS41NTUsNi40OTcgMjMuMDc4LDkuNzA1IDIzLjA3OCwxMy45OTEgQzIzLjA3OCwxOC40NjMgMjAuMjM5LDIyLjA2MiAxNi4yOTcsMjIuMDYyIEMxNC45NzMsMjIuMDYyIDEzLjcyOCwyMS4zNzkgMTMuMzAyLDIwLjU3MiBDMTMuMzAyLDIwLjU3MiAxMi42NDcsMjMuMDUgMTIuNDg4LDIzLjY1NyBDMTIuMTkzLDI0Ljc4NCAxMS4zOTYsMjYuMTk2IDEwLjg2MywyNy4wNTggQzEyLjA4NiwyNy40MzQgMTMuMzg2LDI3LjYzNyAxNC43MzMsMjcuNjM3IEMyMS45NSwyNy42MzcgMjcuODAxLDIxLjgyOCAyNy44MDEsMTQuNjYyIEMyNy44MDEsNy40OTUgMjEuOTUsMS42ODYgMTQuNzMzLDEuNjg2IiBmaWxsPSIjZTYwMDIzIj48L3BhdGg+PC9nPjwvc3ZnPg==) 0 0 no-repeat;
            background-size: 14px 14px;
        }
        .PIN_1642950077673_button_follow.PIN_1642950077673_tall {
            height: 26px;
            line-height: 26px;
            font-size: 13px;
            padding: 0 6px 0 25px;
            border-radius: 3px;
        }
        .PIN_1642950077673_button_follow.PIN_1642950077673_tall::after {
            height: 18px;
            width: 18px;
            top: 4px;
            left: 4px;
            background-size: 18px 18px;
        }
        .PIN_1642950077673_button_pin {
            cursor: pointer;
            display: inline-block;
            box-sizing: border-box;
            box-shadow: inset 0 0 1px #888;
            border-radius: 3px;
            height: 20px;
            width: 40px;
            -webkit-font-smoothing: antialiased;
            background: #efefef url(data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIGhlaWdodD0iMThweCIgd2lkdGg9IjQycHgiIHZpZXdCb3g9IjAgMCA0MiAxOCI+PGc+PHBhdGggZD0iTTE2Ljg1Myw2LjM0NSBDMTcuNjMyLDYuMzQ1IDE4LjM4LDUuNzAyIDE4LjUxLDQuOTA5IEMxOC42NjQsNC4xMzggMTguMTM1LDMuNDk0IDE3LjM1NywzLjQ5NCBDMTYuNTc4LDMuNDk0IDE1LjgzLDQuMTM4IDE1LjY5OCw0LjkwOSBDMTUuNTQ2LDUuNzAyIDE2LjA1Myw2LjM0NSAxNi44NTMsNi4zNDUgWiBNNy40NTgsMCBDMi41LDAgMCwzLjUyMiAwLDYuNDU5IEMwLDguMjM3IDAuNjgsOS44MTkgMi4xMzcsMTAuNDA5IEMyLjM3NiwxMC41MDUgMi41OSwxMC40MTIgMi42NiwxMC4xNSBDMi43MDgsOS45NjkgMi44MjIsOS41MTEgMi44NzMsOS4zMiBDMi45NDMsOS4wNjEgMi45MTYsOC45NyAyLjcyMyw4Ljc0NCBDMi4zMDIsOC4yNTMgMi4wMzQsNy42MTcgMi4wMzQsNi43MTYgQzIuMDM0LDQuMTA0IDQuMDA3LDEuNzY1IDcuMTcyLDEuNzY1IEM5Ljk3NSwxLjc2NSAxMS41MTQsMy40NjEgMTEuNTE0LDUuNzI2IEMxMS41MTQsOC43MDggMTAuMTgzLDExLjE4IDguMjA2LDExLjE4IEM3LjExNCwxMS4xOCA2LjI5NywxMC4zMjkgNi41NTksOS4yMzMgQzYuODcyLDcuOTIyIDcuNDgsNi41MDkgNy40OCw1LjU2NCBDNy40OCw0LjcxNyA3LjAyMiw0LjAxMSA2LjA3Miw0LjAxMSBDNC45NTYsNC4wMTEgNC4wNiw1LjE1NSA0LjA2LDYuNjg3IEM0LjA2LDcuNjYzIDQuMzkzLDguMzIzIDQuMzkzLDguMzIzIEM0LjM5Myw4LjMyMyAzLjI1MSwxMy4xMTcgMy4wNTEsMTMuOTU3IEMyLjY1MiwxNS42MjkgMi45OTEsMTcuNjc5IDMuMDE5LDE3Ljg4NiBDMy4wMzYsMTguMDA5IDMuMTk1LDE4LjAzOCAzLjI2NywxNy45NDYgQzMuMzcsMTcuODEyIDQuNywxNi4xODcgNS4xNTEsMTQuNTYyIEM1LjI3OSwxNC4xMDIgNS44ODUsMTEuNzIgNS44ODUsMTEuNzIgQzYuMjQ4LDEyLjQwNiA3LjMwOCwxMy4wMDkgOC40MzUsMTMuMDA5IEMxMS43OSwxMy4wMDkgMTQuMDY2LDkuOTc5IDE0LjA2Niw1LjkyMyBDMTQuMDY2LDIuODU3IDExLjQ0NCwwIDcuNDU4LDAgWiBNMjYuODk2LDE0LjE4OSBDMjYuMzQ4LDE0LjE4OSAyNi4xMTcsMTMuOTE1IDI2LjExNywxMy4zMjggQzI2LjExNywxMi40MDQgMjcuMDM1LDEwLjA5MSAyNy4wMzUsOS4wNDEgQzI3LjAzNSw3LjYzOCAyNi4yNzYsNi44MjYgMjQuNzIsNi44MjYgQzIzLjczOSw2LjgyNiAyMi43MjIsNy40NTMgMjIuMjkxLDguMDAzIEMyMi4yOTEsOC4wMDMgMjIuNDIyLDcuNTUzIDIyLjQ2Nyw3LjM4IEMyMi41MTUsNy4xOTYgMjIuNDE1LDYuODg0IDIyLjE3Myw2Ljg4NCBMMjAuNjUxLDYuODg0IEMyMC4zMjgsNi44ODQgMjAuMjM4LDcuMDU1IDIwLjE5MSw3LjI0NCBDMjAuMTcyLDcuMzIgMTkuNjI0LDkuNTg0IDE5LjA5OCwxMS42MzIgQzE4LjczOCwxMy4wMzQgMTcuODYzLDE0LjIwNSAxNi45MjgsMTQuMjA1IEMxNi40NDcsMTQuMjA1IDE2LjIzMywxMy45MDYgMTYuMjMzLDEzLjM5OSBDMTYuMjMzLDEyLjk1OSAxNi41MTksMTEuODc3IDE2Ljg2LDEwLjUzNCBDMTcuMjc2LDguODk4IDE3LjY0Miw3LjU1MSAxNy42ODEsNy4zOTQgQzE3LjczMiw3LjE5MiAxNy42NDIsNy4wMTcgMTcuMzc5LDcuMDE3IEwxNS44NDksNy4wMTcgQzE1LjU3Miw3LjAxNyAxNS40NzMsNy4xNjEgMTUuNDE0LDcuMzYxIEMxNS40MTQsNy4zNjEgMTQuOTgzLDguOTc3IDE0LjUyNywxMC43NzUgQzE0LjE5NiwxMi4wNzkgMTMuODMsMTMuNDA5IDEzLjgzLDE0LjAzNCBDMTMuODMsMTUuMTQ4IDE0LjMzNiwxNS45NDQgMTUuNzI0LDE1Ljk0NCBDMTYuNzk2LDE1Ljk0NCAxNy42NDQsMTUuNDUgMTguMjkyLDE0Ljc2NCBDMTguMTk3LDE1LjEzNSAxOC4xMzYsMTUuNDE0IDE4LjEzLDE1LjQzOSBDMTguMDc0LDE1LjY1IDE4LjE0MiwxNS44MzggMTguMzk0LDE1LjgzOCBMMTkuOTYxLDE1LjgzOCBDMjAuMjMzLDE1LjgzOCAyMC4zMzcsMTUuNzMgMjAuMzk0LDE1LjQ5NCBDMjAuNDQ5LDE1LjI2OSAyMS42MTksMTAuNjY3IDIxLjYxOSwxMC42NjcgQzIxLjkyOCw5LjQ0MyAyMi42OTIsOC42MzIgMjMuNzY4LDguNjMyIEMyNC4yNzksOC42MzIgMjQuNzIsOC45NjcgMjQuNjY5LDkuNjE4IEMyNC42MTIsMTAuMzMzIDIzLjc0MSwxMi45MDMgMjMuNzQxLDE0LjAzMSBDMjMuNzQxLDE0Ljg4NCAyNC4wNiwxNS45NDUgMjUuNjgzLDE1Ljk0NSBDMjYuNzg5LDE1Ljk0NSAyNy42MDMsMTUuNDY0IDI4LjE5NSwxNC43ODYgTDI3LjQ4OSwxMy45NDEgQzI3LjMxMSwxNC4wOTQgMjcuMTE0LDE0LjE4OSAyNi44OTYsMTQuMTg5IFogTTQxLjcwMSw2Ljg3MyBMNDAuMTM0LDYuODczIEM0MC4xMzQsNi44NzMgNDAuODU2LDQuMTA5IDQwLjg3Myw0LjAzNSBDNDAuOTQyLDMuNzQ1IDQwLjY5OCwzLjU3OCA0MC40NDEsMy42MzEgQzQwLjQ0MSwzLjYzMSAzOS4yMywzLjg2NiAzOS4wMDUsMy45MTMgQzM4Ljc3OSwzLjk1OCAzOC42MDQsNC4wODEgMzguNTIyLDQuNDAzIEMzOC41MTIsNC40NDUgMzcuODgsNi44NzMgMzcuODgsNi44NzMgTDM2LjYyMiw2Ljg3MyBDMzYuMzg1LDYuODczIDM2LjI0NSw2Ljk2OCAzNi4xOTIsNy4xODggQzM2LjExNSw3LjUwNCAzNS45NzUsOC4xNDUgMzUuOTM2LDguMjk3IEMzNS44ODUsOC40OTQgMzYsOC42NDQgMzYuMjIyLDguNjQ0IEwzNy40NTcsOC42NDQgQzM3LjQ0OCw4LjY3NyAzNy4wNjQsMTAuMTI1IDM2LjcyNSwxMS41MjEgTDM2LjcyNCwxMS41MTYgQzM2LjcyLDExLjUzMiAzNi43MTYsMTEuNTQ2IDM2LjcxMiwxMS41NjIgTDM2LjcxMiwxMS41NTYgQzM2LjcxMiwxMS41NTYgMzYuNzA4LDExLjU3MSAzNi43MDIsMTEuNTk4IEMzNi4zMjQsMTIuOTY4IDM1LjExOCwxNC4yMDkgMzQuMjAxLDE0LjIwOSBDMzMuNzIxLDE0LjIwOSAzMy41MDYsMTMuOTA5IDMzLjUwNiwxMy40MDIgQzMzLjUwNiwxMi45NjMgMzMuNzkyLDExLjg4IDM0LjEzNCwxMC41MzcgQzM0LjU0OSw4LjkwMSAzNC45MTUsNy41NTUgMzQuOTU1LDcuMzk3IEMzNS4wMDYsNy4xOTYgMzQuOTE1LDcuMDIgMzQuNjUyLDcuMDIgTDMzLjEyMiw3LjAyIEMzMi44NDUsNy4wMiAzMi43NDYsNy4xNjQgMzIuNjg3LDcuMzY0IEMzMi42ODcsNy4zNjQgMzIuMjU3LDguOTggMzEuOCwxMC43NzggQzMxLjQ2OSwxMi4wODMgMzEuMTAzLDEzLjQxMiAzMS4xMDMsMTQuMDM3IEMzMS4xMDMsMTUuMTUxIDMxLjYwOSwxNS45NDggMzIuOTk3LDE1Ljk0OCBDMzQuMDcsMTUuOTQ4IDM1LjEzNiwxNS40NTMgMzUuNzgzLDE0Ljc2NyBDMzUuNzgzLDE0Ljc2NyAzNi4wMTEsMTQuNTIxIDM2LjIzLDE0LjIyOSBDMzYuMjQxLDE0LjU4MSAzNi4zMjQsMTQuODM3IDM2LjQxMSwxNS4wMTggQzM2LjQ1OCwxNS4xMTkgMzYuNTE1LDE1LjIxNSAzNi41ODEsMTUuMzAzIEMzNi41ODIsMTUuMzA0IDM2LjU4MywxNS4zMDYgMzYuNTg1LDE1LjMwOCBMMzYuNTg1LDE1LjMwOCBDMzYuODkxLDE1LjcxMyAzNy4zOTgsMTUuOTYyIDM4LjE1MSwxNS45NjIgQzM5Ljg5NCwxNS45NjIgNDAuOTQ0LDE0LjkzOCA0MS41NjIsMTMuOTA5IEw0MC43MDQsMTMuMjM5IEM0MC4zMzMsMTMuNzc0IDM5LjgzOSwxNC4xNzUgMzkuMzI0LDE0LjE3NSBDMzguODQ2LDE0LjE3NSAzOC41NzksMTMuODc4IDM4LjU3OSwxMy4zNzIgQzM4LjU3OSwxMi45MzUgMzguODg5LDExLjg2OCAzOS4yMjksMTAuNTMgQzM5LjM0NCwxMC4wODMgMzkuNTE2LDkuNDAxIDM5LjcwOCw4LjY0NCBMNDEuMzAyLDguNjQ0IEM0MS41MzksOC42NDQgNDEuNjc4LDguNTQ5IDQxLjczMiw4LjMyOSBDNDEuODA4LDguMDEyIDQxLjk0OCw3LjM3MiA0MS45ODgsNy4yMjEgQzQyLjAzOSw3LjAyMyA0MS45MjMsNi44NzMgNDEuNzAxLDYuODczIFogTTM0LjEyNiw2LjM0OCBDMzQuOTA1LDYuMzQ4IDM1LjY1Myw1LjcwNiAzNS43ODMsNC45MTIgQzM1LjkzNyw0LjE0MSAzNS40MDksMy40OTggMzQuNjMsMy40OTggQzMzLjg1MSwzLjQ5OCAzMy4xMDMsNC4xNDEgMzIuOTcxLDQuOTEyIEMzMi44MTksNS43MDYgMzMuMzI2LDYuMzQ4IDM0LjEyNiw2LjM0OCBaIiBmaWxsPSIjZTYwMDIzIj48L3BhdGg+PC9nPjwvc3ZnPg==) 50% 50% no-repeat;
            background-size: 75%;
            position: relative;
            font: 12px "Helvetica Neue", Helvetica, arial, sans-serif;
            color: #555;
            text-align: center;
            vertical-align: baseline;
        }
        .PIN_1642950077673_button_pin:hover {
            box-shadow: inset 0 0 1px #000;
        }
        .PIN_1642950077673_button_pin.PIN_1642950077673_above .PIN_1642950077673_count {
            position: absolute;
            top: -28px;
            left: 0;
            height: 28px;
            width: inherit;
            line-height: 24px;
            background: transparent url(data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIGhlaWdodD0iNzZweCIgd2lkdGg9IjExNHB4IiB2aWV3Qm94PSIwIDAgMTE0IDc2Ij48Zz48cGF0aCBkPSJNOSAxQzQuNiAxIDEgNC42IDEgOXY0M2MwIDQuMyAzLjYgOCA4IDhoMjZsMTggMTVoNy41bDE2LTE1SDEwNWM0LjQgMCA4LTMuNyA4LThWOWMwLTQuNC0zLjYtOC04LThIOXoiIGZpbGw9IiNmZmYiIHN0cm9rZT0iI2I1YjViNSIgc3Ryb2tlLXdpZHRoPSIyIj48L3BhdGg+PC9nPjwvc3ZnPg==) 0 0 no-repeat;
            background-size: 40px 28px;
        }
        .PIN_1642950077673_button_pin.PIN_1642950077673_above.PIN_1642950077673_padded {
            margin-top: 28px;
        }
        .PIN_1642950077673_button_pin.PIN_1642950077673_beside .PIN_1642950077673_count {
            position: absolute;
            right: -45px;
            text-align: center;
            text-indent: 5px;
            height: inherit;
            width: 45px;
            font-size: 11px;
            line-height: 20px;
            background: transparent url(data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIGhlaWdodD0iNTZweCIgd2lkdGg9IjEyNnB4IiB2aWV3Qm94PSIyIDAgMTMwIDYwIj48Zz48cGF0aCBkPSJNMTE5LjYgMmM0LjUgMCA4IDMuNiA4IDh2NDBjMCA0LjQtMy41IDgtOCA4SDIzLjNMMS42IDMyLjR2LTQuNkwyMy4zIDJoOTYuM3oiIGZpbGw9IiNmZmYiIHN0cm9rZT0iI2I1YjViNSIgc3Ryb2tlLXdpZHRoPSIyIj48L3BhdGg+PC9nPjwvc3ZnPg==);
            background-size: cover;
        }
        .PIN_1642950077673_button_pin.PIN_1642950077673_beside.PIN_1642950077673_padded {
            margin-right: 45px;
        }
        .PIN_1642950077673_button_pin.PIN_1642950077673_ja {
            background-image: url(data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIGhlaWdodD0iMThweCIgd2lkdGg9IjQxcHgiIHZpZXdCb3g9IjAgMCA0MSAxOCI+PGc+PHBhdGggZD0iTTE5LjgyMiw3LjE3MyBDMTkuODIyLDYuNTEgMTkuODM1LDYuMjc2IDE5Ljg4Nyw1Ljk2NCBMMTguMTQ1LDUuOTY0IEMxOC4xOTcsNi4yODkgMTguMTk3LDYuNDk3IDE4LjE5Nyw3LjE2IEwxOC4yMSwxMy4xOTIgQzE4LjIxLDEzLjk0NiAxOC4yMjMsMTQuMTY3IDE4LjI0OSwxNC4zODggQzE4LjMyNywxNS4wMjUgMTguNTIyLDE1LjQ0MSAxOC44ODYsMTUuNzE0IEMxOS4zOTMsMTYuMTA0IDIwLjI5LDE2LjI3MyAyMS45MjgsMTYuMjczIEMyMi43MjEsMTYuMjczIDI0LjM1OSwxNi4xOTUgMjUuMTI2LDE2LjExNyBDMjYuNTA0LDE1Ljk4NyAyNi41NjksMTUuOTc0IDI2Ljg0MiwxNS45NzQgTDI2Ljc2NCwxNC4yNDUgQzI2LjE5MiwxNC40MTQgMjUuOTA2LDE0LjQ3OSAyNS4yODIsMTQuNTU3IEMyNC4zMzMsMTQuNjg3IDIzLjEzNywxNC43NjUgMjIuMjY2LDE0Ljc2NSBDMjEuMDA1LDE0Ljc2NSAyMC4yNjQsMTQuNjQ4IDIwLjA0MywxNC40MjcgQzE5Ljg2MSwxNC4yNDUgMTkuODA5LDEzLjk1OSAxOS44MDksMTMuMjMxIEMxOS44MDksMTMuMTc5IDE5LjgwOSwxMy4xMDEgMTkuODIyLDEzLjAyMyBMMTkuODIyLDExLjMwNyBDMjEuOTkzLDEwLjkwNCAyNC4wMDgsMTAuMjI4IDI1LjkzMiw5LjI0IEwyNi4yNyw5LjA3MSBDMjYuMzc0LDkuMDE5IDI2LjQsOS4wMDYgMjYuNTQzLDguOTU0IEwyNS41MDMsNy40ODUgQzI0LjY1OCw4LjI3OCAyMS43ODUsOS40MzUgMTkuODIyLDkuNzk5IEwxOS44MjIsNy4xNzMgWiBNMjcuMzEsNC44NzIgQzI2LjQ5MSw0Ljg3MiAyNS44MTUsNS41NDggMjUuODE1LDYuMzY3IEMyNS44MTUsNy4xOTkgMjYuNDkxLDcuODc1IDI3LjMxLDcuODc1IEMyOC4xNDIsNy44NzUgMjguODE4LDcuMTk5IDI4LjgxOCw2LjM2NyBDMjguODE4LDUuNTQ4IDI4LjE0Miw0Ljg3MiAyNy4zMSw0Ljg3MiBMMjcuMzEsNC44NzIgWiBNMjcuMzEsNS41MjIgQzI3Ljc5MSw1LjUyMiAyOC4xNjgsNS44OTkgMjguMTY4LDYuMzY3IEMyOC4xNjgsNi44MzUgMjcuNzkxLDcuMjI1IDI3LjMxLDcuMjI1IEMyNi44NDIsNy4yMjUgMjYuNDY1LDYuODM1IDI2LjQ2NSw2LjM2NyBDMjYuNDY1LDUuODk5IDI2Ljg0Miw1LjUyMiAyNy4zMSw1LjUyMiBMMjcuMzEsNS41MjIgWiBNMzAuNTg2LDcuNjU0IEMzMS43OTUsOC4zMyAzMi44NjEsOS4xODggMzMuOTAxLDEwLjI5MyBMMzUuMDE5LDguODc2IEMzNC4wMTgsNy45MjcgMzMuMjEyLDcuMzI5IDMxLjY2NSw2LjM2NyBMMzAuNTg2LDcuNjU0IFogTTMxLjA0MSwxNi4yMzQgQzMxLjM0LDE2LjEzIDMxLjM3OSwxNi4xMTcgMzEuODk5LDE2LjAxMyBDMzMuOTE0LDE1LjU4NCAzNS41MjYsMTQuOTQ3IDM2Ljg1MiwxNC4wNjMgQzM4LjYzMywxMi44OCAzOS44NjgsMTEuMzQ2IDQwLjk3Myw4Ljk2NyBDNDAuMzEsOC40OTkgNDAuMTAyLDguMzA0IDM5LjU5NSw3LjY5MyBDMzkuMjA1LDguNzQ2IDM4Ljg0MSw5LjQ2MSAzOC4yNjksMTAuMjkzIEMzNy4yNDIsMTEuNzc1IDM2LjAzMywxMi43NzYgMzQuNDA4LDEzLjQ3OCBDMzMuMjI1LDEzLjk5OCAzMS42NzgsMTQuMzc1IDMwLjU2LDE0LjQ0IEwzMS4wNDEsMTYuMjM0IFogTTcuNDU4LDAgQzIuNSwwIDAsMy41MjIgMCw2LjQ1OSBDMCw4LjIzNyAwLjY4LDkuODE5IDIuMTM3LDEwLjQwOSBDMi4zNzYsMTAuNTA1IDIuNTksMTAuNDEyIDIuNjYsMTAuMTUgQzIuNzA4LDkuOTY5IDIuODIyLDkuNTExIDIuODczLDkuMzIgQzIuOTQzLDkuMDYxIDIuOTE2LDguOTcgMi43MjMsOC43NDQgQzIuMzAyLDguMjUzIDIuMDM0LDcuNjE3IDIuMDM0LDYuNzE2IEMyLjAzNCw0LjEwNCA0LjAwNywxLjc2NSA3LjE3MiwxLjc2NSBDOS45NzUsMS43NjUgMTEuNTE0LDMuNDYxIDExLjUxNCw1LjcyNiBDMTEuNTE0LDguNzA4IDEwLjE4MywxMS4xOCA4LjIwNiwxMS4xOCBDNy4xMTQsMTEuMTggNi4yOTcsMTAuMzI5IDYuNTU5LDkuMjMzIEM2Ljg3Miw3LjkyMiA3LjQ4LDYuNTA5IDcuNDgsNS41NjQgQzcuNDgsNC43MTcgNy4wMjIsNC4wMTEgNi4wNzIsNC4wMTEgQzQuOTU2LDQuMDExIDQuMDYsNS4xNTUgNC4wNiw2LjY4NyBDNC4wNiw3LjY2MyA0LjM5Myw4LjMyMyA0LjM5Myw4LjMyMyBDNC4zOTMsOC4zMjMgMy4yNTEsMTMuMTE3IDMuMDUxLDEzLjk1NyBDMi42NTIsMTUuNjI5IDIuOTkxLDE3LjY3OSAzLjAxOSwxNy44ODYgQzMuMDM2LDE4LjAwOSAzLjE5NSwxOC4wMzggMy4yNjcsMTcuOTQ2IEMzLjM3LDE3LjgxMiA0LjcsMTYuMTg3IDUuMTUxLDE0LjU2MiBDNS4yNzksMTQuMTAyIDUuODg1LDExLjcyIDUuODg1LDExLjcyIEM2LjI0OCwxMi40MDYgNy4zMDgsMTMuMDA5IDguNDM1LDEzLjAwOSBDMTEuNzksMTMuMDA5IDE0LjA2Niw5Ljk3OSAxNC4wNjYsNS45MjMgQzE0LjA2NiwyLjg1NyAxMS40NDQsMCA3LjQ1OCwwIFoiIGZpbGw9IiNlNjAwMjMiPjwvcGF0aD48L2c+PC9zdmc+);
            background-size: 72%;
        }
        .PIN_1642950077673_button_pin.PIN_1642950077673_red {
            background-color: #e60023;
            background-image: url(data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIGhlaWdodD0iMThweCIgd2lkdGg9IjQycHgiIHZpZXdCb3g9IjAgMCA0MiAxOCI+PGc+PHBhdGggZD0iTTE2Ljg1Myw2LjM0NSBDMTcuNjMyLDYuMzQ1IDE4LjM4LDUuNzAyIDE4LjUxLDQuOTA5IEMxOC42NjQsNC4xMzggMTguMTM1LDMuNDk0IDE3LjM1NywzLjQ5NCBDMTYuNTc4LDMuNDk0IDE1LjgzLDQuMTM4IDE1LjY5OCw0LjkwOSBDMTUuNTQ2LDUuNzAyIDE2LjA1Myw2LjM0NSAxNi44NTMsNi4zNDUgWiBNNy40NTgsMCBDMi41LDAgMCwzLjUyMiAwLDYuNDU5IEMwLDguMjM3IDAuNjgsOS44MTkgMi4xMzcsMTAuNDA5IEMyLjM3NiwxMC41MDUgMi41OSwxMC40MTIgMi42NiwxMC4xNSBDMi43MDgsOS45NjkgMi44MjIsOS41MTEgMi44NzMsOS4zMiBDMi45NDMsOS4wNjEgMi45MTYsOC45NyAyLjcyMyw4Ljc0NCBDMi4zMDIsOC4yNTMgMi4wMzQsNy42MTcgMi4wMzQsNi43MTYgQzIuMDM0LDQuMTA0IDQuMDA3LDEuNzY1IDcuMTcyLDEuNzY1IEM5Ljk3NSwxLjc2NSAxMS41MTQsMy40NjEgMTEuNTE0LDUuNzI2IEMxMS41MTQsOC43MDggMTAuMTgzLDExLjE4IDguMjA2LDExLjE4IEM3LjExNCwxMS4xOCA2LjI5NywxMC4zMjkgNi41NTksOS4yMzMgQzYuODcyLDcuOTIyIDcuNDgsNi41MDkgNy40OCw1LjU2NCBDNy40OCw0LjcxNyA3LjAyMiw0LjAxMSA2LjA3Miw0LjAxMSBDNC45NTYsNC4wMTEgNC4wNiw1LjE1NSA0LjA2LDYuNjg3IEM0LjA2LDcuNjYzIDQuMzkzLDguMzIzIDQuMzkzLDguMzIzIEM0LjM5Myw4LjMyMyAzLjI1MSwxMy4xMTcgMy4wNTEsMTMuOTU3IEMyLjY1MiwxNS42MjkgMi45OTEsMTcuNjc5IDMuMDE5LDE3Ljg4NiBDMy4wMzYsMTguMDA5IDMuMTk1LDE4LjAzOCAzLjI2NywxNy45NDYgQzMuMzcsMTcuODEyIDQuNywxNi4xODcgNS4xNTEsMTQuNTYyIEM1LjI3OSwxNC4xMDIgNS44ODUsMTEuNzIgNS44ODUsMTEuNzIgQzYuMjQ4LDEyLjQwNiA3LjMwOCwxMy4wMDkgOC40MzUsMTMuMDA5IEMxMS43OSwxMy4wMDkgMTQuMDY2LDkuOTc5IDE0LjA2Niw1LjkyMyBDMTQuMDY2LDIuODU3IDExLjQ0NCwwIDcuNDU4LDAgWiBNMjYuODk2LDE0LjE4OSBDMjYuMzQ4LDE0LjE4OSAyNi4xMTcsMTMuOTE1IDI2LjExNywxMy4zMjggQzI2LjExNywxMi40MDQgMjcuMDM1LDEwLjA5MSAyNy4wMzUsOS4wNDEgQzI3LjAzNSw3LjYzOCAyNi4yNzYsNi44MjYgMjQuNzIsNi44MjYgQzIzLjczOSw2LjgyNiAyMi43MjIsNy40NTMgMjIuMjkxLDguMDAzIEMyMi4yOTEsOC4wMDMgMjIuNDIyLDcuNTUzIDIyLjQ2Nyw3LjM4IEMyMi41MTUsNy4xOTYgMjIuNDE1LDYuODg0IDIyLjE3Myw2Ljg4NCBMMjAuNjUxLDYuODg0IEMyMC4zMjgsNi44ODQgMjAuMjM4LDcuMDU1IDIwLjE5MSw3LjI0NCBDMjAuMTcyLDcuMzIgMTkuNjI0LDkuNTg0IDE5LjA5OCwxMS42MzIgQzE4LjczOCwxMy4wMzQgMTcuODYzLDE0LjIwNSAxNi45MjgsMTQuMjA1IEMxNi40NDcsMTQuMjA1IDE2LjIzMywxMy45MDYgMTYuMjMzLDEzLjM5OSBDMTYuMjMzLDEyLjk1OSAxNi41MTksMTEuODc3IDE2Ljg2LDEwLjUzNCBDMTcuMjc2LDguODk4IDE3LjY0Miw3LjU1MSAxNy42ODEsNy4zOTQgQzE3LjczMiw3LjE5MiAxNy42NDIsNy4wMTcgMTcuMzc5LDcuMDE3IEwxNS44NDksNy4wMTcgQzE1LjU3Miw3LjAxNyAxNS40NzMsNy4xNjEgMTUuNDE0LDcuMzYxIEMxNS40MTQsNy4zNjEgMTQuOTgzLDguOTc3IDE0LjUyNywxMC43NzUgQzE0LjE5NiwxMi4wNzkgMTMuODMsMTMuNDA5IDEzLjgzLDE0LjAzNCBDMTMuODMsMTUuMTQ4IDE0LjMzNiwxNS45NDQgMTUuNzI0LDE1Ljk0NCBDMTYuNzk2LDE1Ljk0NCAxNy42NDQsMTUuNDUgMTguMjkyLDE0Ljc2NCBDMTguMTk3LDE1LjEzNSAxOC4xMzYsMTUuNDE0IDE4LjEzLDE1LjQzOSBDMTguMDc0LDE1LjY1IDE4LjE0MiwxNS44MzggMTguMzk0LDE1LjgzOCBMMTkuOTYxLDE1LjgzOCBDMjAuMjMzLDE1LjgzOCAyMC4zMzcsMTUuNzMgMjAuMzk0LDE1LjQ5NCBDMjAuNDQ5LDE1LjI2OSAyMS42MTksMTAuNjY3IDIxLjYxOSwxMC42NjcgQzIxLjkyOCw5LjQ0MyAyMi42OTIsOC42MzIgMjMuNzY4LDguNjMyIEMyNC4yNzksOC42MzIgMjQuNzIsOC45NjcgMjQuNjY5LDkuNjE4IEMyNC42MTIsMTAuMzMzIDIzLjc0MSwxMi45MDMgMjMuNzQxLDE0LjAzMSBDMjMuNzQxLDE0Ljg4NCAyNC4wNiwxNS45NDUgMjUuNjgzLDE1Ljk0NSBDMjYuNzg5LDE1Ljk0NSAyNy42MDMsMTUuNDY0IDI4LjE5NSwxNC43ODYgTDI3LjQ4OSwxMy45NDEgQzI3LjMxMSwxNC4wOTQgMjcuMTE0LDE0LjE4OSAyNi44OTYsMTQuMTg5IFogTTQxLjcwMSw2Ljg3MyBMNDAuMTM0LDYuODczIEM0MC4xMzQsNi44NzMgNDAuODU2LDQuMTA5IDQwLjg3Myw0LjAzNSBDNDAuOTQyLDMuNzQ1IDQwLjY5OCwzLjU3OCA0MC40NDEsMy42MzEgQzQwLjQ0MSwzLjYzMSAzOS4yMywzLjg2NiAzOS4wMDUsMy45MTMgQzM4Ljc3OSwzLjk1OCAzOC42MDQsNC4wODEgMzguNTIyLDQuNDAzIEMzOC41MTIsNC40NDUgMzcuODgsNi44NzMgMzcuODgsNi44NzMgTDM2LjYyMiw2Ljg3MyBDMzYuMzg1LDYuODczIDM2LjI0NSw2Ljk2OCAzNi4xOTIsNy4xODggQzM2LjExNSw3LjUwNCAzNS45NzUsOC4xNDUgMzUuOTM2LDguMjk3IEMzNS44ODUsOC40OTQgMzYsOC42NDQgMzYuMjIyLDguNjQ0IEwzNy40NTcsOC42NDQgQzM3LjQ0OCw4LjY3NyAzNy4wNjQsMTAuMTI1IDM2LjcyNSwxMS41MjEgTDM2LjcyNCwxMS41MTYgQzM2LjcyLDExLjUzMiAzNi43MTYsMTEuNTQ2IDM2LjcxMiwxMS41NjIgTDM2LjcxMiwxMS41NTYgQzM2LjcxMiwxMS41NTYgMzYuNzA4LDExLjU3MSAzNi43MDIsMTEuNTk4IEMzNi4zMjQsMTIuOTY4IDM1LjExOCwxNC4yMDkgMzQuMjAxLDE0LjIwOSBDMzMuNzIxLDE0LjIwOSAzMy41MDYsMTMuOTA5IDMzLjUwNiwxMy40MDIgQzMzLjUwNiwxMi45NjMgMzMuNzkyLDExLjg4IDM0LjEzNCwxMC41MzcgQzM0LjU0OSw4LjkwMSAzNC45MTUsNy41NTUgMzQuOTU1LDcuMzk3IEMzNS4wMDYsNy4xOTYgMzQuOTE1LDcuMDIgMzQuNjUyLDcuMDIgTDMzLjEyMiw3LjAyIEMzMi44NDUsNy4wMiAzMi43NDYsNy4xNjQgMzIuNjg3LDcuMzY0IEMzMi42ODcsNy4zNjQgMzIuMjU3LDguOTggMzEuOCwxMC43NzggQzMxLjQ2OSwxMi4wODMgMzEuMTAzLDEzLjQxMiAzMS4xMDMsMTQuMDM3IEMzMS4xMDMsMTUuMTUxIDMxLjYwOSwxNS45NDggMzIuOTk3LDE1Ljk0OCBDMzQuMDcsMTUuOTQ4IDM1LjEzNiwxNS40NTMgMzUuNzgzLDE0Ljc2NyBDMzUuNzgzLDE0Ljc2NyAzNi4wMTEsMTQuNTIxIDM2LjIzLDE0LjIyOSBDMzYuMjQxLDE0LjU4MSAzNi4zMjQsMTQuODM3IDM2LjQxMSwxNS4wMTggQzM2LjQ1OCwxNS4xMTkgMzYuNTE1LDE1LjIxNSAzNi41ODEsMTUuMzAzIEMzNi41ODIsMTUuMzA0IDM2LjU4MywxNS4zMDYgMzYuNTg1LDE1LjMwOCBMMzYuNTg1LDE1LjMwOCBDMzYuODkxLDE1LjcxMyAzNy4zOTgsMTUuOTYyIDM4LjE1MSwxNS45NjIgQzM5Ljg5NCwxNS45NjIgNDAuOTQ0LDE0LjkzOCA0MS41NjIsMTMuOTA5IEw0MC43MDQsMTMuMjM5IEM0MC4zMzMsMTMuNzc0IDM5LjgzOSwxNC4xNzUgMzkuMzI0LDE0LjE3NSBDMzguODQ2LDE0LjE3NSAzOC41NzksMTMuODc4IDM4LjU3OSwxMy4zNzIgQzM4LjU3OSwxMi45MzUgMzguODg5LDExLjg2OCAzOS4yMjksMTAuNTMgQzM5LjM0NCwxMC4wODMgMzkuNTE2LDkuNDAxIDM5LjcwOCw4LjY0NCBMNDEuMzAyLDguNjQ0IEM0MS41MzksOC42NDQgNDEuNjc4LDguNTQ5IDQxLjczMiw4LjMyOSBDNDEuODA4LDguMDEyIDQxLjk0OCw3LjM3MiA0MS45ODgsNy4yMjEgQzQyLjAzOSw3LjAyMyA0MS45MjMsNi44NzMgNDEuNzAxLDYuODczIFogTTM0LjEyNiw2LjM0OCBDMzQuOTA1LDYuMzQ4IDM1LjY1Myw1LjcwNiAzNS43ODMsNC45MTIgQzM1LjkzNyw0LjE0MSAzNS40MDksMy40OTggMzQuNjMsMy40OTggQzMzLjg1MSwzLjQ5OCAzMy4xMDMsNC4xNDEgMzIuOTcxLDQuOTEyIEMzMi44MTksNS43MDYgMzMuMzI2LDYuMzQ4IDM0LjEyNiw2LjM0OCBaIiBmaWxsPSIjZmZmIj48L3BhdGg+PC9nPjwvc3ZnPg==);
        }
        .PIN_1642950077673_button_pin.PIN_1642950077673_red.PIN_1642950077673_ja {
            background-image: url(data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIGhlaWdodD0iMThweCIgd2lkdGg9IjQxcHgiIHZpZXdCb3g9IjAgMCA0MSAxOCI+PGc+PHBhdGggZD0iTTE5LjgyMiw3LjE3MyBDMTkuODIyLDYuNTEgMTkuODM1LDYuMjc2IDE5Ljg4Nyw1Ljk2NCBMMTguMTQ1LDUuOTY0IEMxOC4xOTcsNi4yODkgMTguMTk3LDYuNDk3IDE4LjE5Nyw3LjE2IEwxOC4yMSwxMy4xOTIgQzE4LjIxLDEzLjk0NiAxOC4yMjMsMTQuMTY3IDE4LjI0OSwxNC4zODggQzE4LjMyNywxNS4wMjUgMTguNTIyLDE1LjQ0MSAxOC44ODYsMTUuNzE0IEMxOS4zOTMsMTYuMTA0IDIwLjI5LDE2LjI3MyAyMS45MjgsMTYuMjczIEMyMi43MjEsMTYuMjczIDI0LjM1OSwxNi4xOTUgMjUuMTI2LDE2LjExNyBDMjYuNTA0LDE1Ljk4NyAyNi41NjksMTUuOTc0IDI2Ljg0MiwxNS45NzQgTDI2Ljc2NCwxNC4yNDUgQzI2LjE5MiwxNC40MTQgMjUuOTA2LDE0LjQ3OSAyNS4yODIsMTQuNTU3IEMyNC4zMzMsMTQuNjg3IDIzLjEzNywxNC43NjUgMjIuMjY2LDE0Ljc2NSBDMjEuMDA1LDE0Ljc2NSAyMC4yNjQsMTQuNjQ4IDIwLjA0MywxNC40MjcgQzE5Ljg2MSwxNC4yNDUgMTkuODA5LDEzLjk1OSAxOS44MDksMTMuMjMxIEMxOS44MDksMTMuMTc5IDE5LjgwOSwxMy4xMDEgMTkuODIyLDEzLjAyMyBMMTkuODIyLDExLjMwNyBDMjEuOTkzLDEwLjkwNCAyNC4wMDgsMTAuMjI4IDI1LjkzMiw5LjI0IEwyNi4yNyw5LjA3MSBDMjYuMzc0LDkuMDE5IDI2LjQsOS4wMDYgMjYuNTQzLDguOTU0IEwyNS41MDMsNy40ODUgQzI0LjY1OCw4LjI3OCAyMS43ODUsOS40MzUgMTkuODIyLDkuNzk5IEwxOS44MjIsNy4xNzMgWiBNMjcuMzEsNC44NzIgQzI2LjQ5MSw0Ljg3MiAyNS44MTUsNS41NDggMjUuODE1LDYuMzY3IEMyNS44MTUsNy4xOTkgMjYuNDkxLDcuODc1IDI3LjMxLDcuODc1IEMyOC4xNDIsNy44NzUgMjguODE4LDcuMTk5IDI4LjgxOCw2LjM2NyBDMjguODE4LDUuNTQ4IDI4LjE0Miw0Ljg3MiAyNy4zMSw0Ljg3MiBMMjcuMzEsNC44NzIgWiBNMjcuMzEsNS41MjIgQzI3Ljc5MSw1LjUyMiAyOC4xNjgsNS44OTkgMjguMTY4LDYuMzY3IEMyOC4xNjgsNi44MzUgMjcuNzkxLDcuMjI1IDI3LjMxLDcuMjI1IEMyNi44NDIsNy4yMjUgMjYuNDY1LDYuODM1IDI2LjQ2NSw2LjM2NyBDMjYuNDY1LDUuODk5IDI2Ljg0Miw1LjUyMiAyNy4zMSw1LjUyMiBMMjcuMzEsNS41MjIgWiBNMzAuNTg2LDcuNjU0IEMzMS43OTUsOC4zMyAzMi44NjEsOS4xODggMzMuOTAxLDEwLjI5MyBMMzUuMDE5LDguODc2IEMzNC4wMTgsNy45MjcgMzMuMjEyLDcuMzI5IDMxLjY2NSw2LjM2NyBMMzAuNTg2LDcuNjU0IFogTTMxLjA0MSwxNi4yMzQgQzMxLjM0LDE2LjEzIDMxLjM3OSwxNi4xMTcgMzEuODk5LDE2LjAxMyBDMzMuOTE0LDE1LjU4NCAzNS41MjYsMTQuOTQ3IDM2Ljg1MiwxNC4wNjMgQzM4LjYzMywxMi44OCAzOS44NjgsMTEuMzQ2IDQwLjk3Myw4Ljk2NyBDNDAuMzEsOC40OTkgNDAuMTAyLDguMzA0IDM5LjU5NSw3LjY5MyBDMzkuMjA1LDguNzQ2IDM4Ljg0MSw5LjQ2MSAzOC4yNjksMTAuMjkzIEMzNy4yNDIsMTEuNzc1IDM2LjAzMywxMi43NzYgMzQuNDA4LDEzLjQ3OCBDMzMuMjI1LDEzLjk5OCAzMS42NzgsMTQuMzc1IDMwLjU2LDE0LjQ0IEwzMS4wNDEsMTYuMjM0IFogTTcuNDU4LDAgQzIuNSwwIDAsMy41MjIgMCw2LjQ1OSBDMCw4LjIzNyAwLjY4LDkuODE5IDIuMTM3LDEwLjQwOSBDMi4zNzYsMTAuNTA1IDIuNTksMTAuNDEyIDIuNjYsMTAuMTUgQzIuNzA4LDkuOTY5IDIuODIyLDkuNTExIDIuODczLDkuMzIgQzIuOTQzLDkuMDYxIDIuOTE2LDguOTcgMi43MjMsOC43NDQgQzIuMzAyLDguMjUzIDIuMDM0LDcuNjE3IDIuMDM0LDYuNzE2IEMyLjAzNCw0LjEwNCA0LjAwNywxLjc2NSA3LjE3MiwxLjc2NSBDOS45NzUsMS43NjUgMTEuNTE0LDMuNDYxIDExLjUxNCw1LjcyNiBDMTEuNTE0LDguNzA4IDEwLjE4MywxMS4xOCA4LjIwNiwxMS4xOCBDNy4xMTQsMTEuMTggNi4yOTcsMTAuMzI5IDYuNTU5LDkuMjMzIEM2Ljg3Miw3LjkyMiA3LjQ4LDYuNTA5IDcuNDgsNS41NjQgQzcuNDgsNC43MTcgNy4wMjIsNC4wMTEgNi4wNzIsNC4wMTEgQzQuOTU2LDQuMDExIDQuMDYsNS4xNTUgNC4wNiw2LjY4NyBDNC4wNiw3LjY2MyA0LjM5Myw4LjMyMyA0LjM5Myw4LjMyMyBDNC4zOTMsOC4zMjMgMy4yNTEsMTMuMTE3IDMuMDUxLDEzLjk1NyBDMi42NTIsMTUuNjI5IDIuOTkxLDE3LjY3OSAzLjAxOSwxNy44ODYgQzMuMDM2LDE4LjAwOSAzLjE5NSwxOC4wMzggMy4yNjcsMTcuOTQ2IEMzLjM3LDE3LjgxMiA0LjcsMTYuMTg3IDUuMTUxLDE0LjU2MiBDNS4yNzksMTQuMTAyIDUuODg1LDExLjcyIDUuODg1LDExLjcyIEM2LjI0OCwxMi40MDYgNy4zMDgsMTMuMDA5IDguNDM1LDEzLjAwOSBDMTEuNzksMTMuMDA5IDE0LjA2Niw5Ljk3OSAxNC4wNjYsNS45MjMgQzE0LjA2NiwyLjg1NyAxMS40NDQsMCA3LjQ1OCwwIFoiIGZpbGw9IiNmZmYiPjwvcGF0aD48L2c+PC9zdmc+);
        }
        .PIN_1642950077673_button_pin.PIN_1642950077673_white {
            background-color: #fff;
        }
        .PIN_1642950077673_button_pin.PIN_1642950077673_save {
            border-radius: 2px;
            text-indent: 20px;
            width: auto;
            padding: 0 4px 0 0;
            text-align: center;
            text-decoration: none;
            font: 11px/20px "Helvetica Neue", Helvetica, sans-serif;
            font-weight: bold;
            color: #fff!important;
            background: #e60023 url(data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIGhlaWdodD0iMzBweCIgd2lkdGg9IjMwcHgiIHZpZXdCb3g9Ii0xIC0xIDMxIDMxIj48Zz48cGF0aCBkPSJNMjkuNDQ5LDE0LjY2MiBDMjkuNDQ5LDIyLjcyMiAyMi44NjgsMjkuMjU2IDE0Ljc1LDI5LjI1NiBDNi42MzIsMjkuMjU2IDAuMDUxLDIyLjcyMiAwLjA1MSwxNC42NjIgQzAuMDUxLDYuNjAxIDYuNjMyLDAuMDY3IDE0Ljc1LDAuMDY3IEMyMi44NjgsMC4wNjcgMjkuNDQ5LDYuNjAxIDI5LjQ0OSwxNC42NjIiIGZpbGw9IiNmZmYiIHN0cm9rZT0iI2ZmZiIgc3Ryb2tlLXdpZHRoPSIxIj48L3BhdGg+PHBhdGggZD0iTTE0LjczMywxLjY4NiBDNy41MTYsMS42ODYgMS42NjUsNy40OTUgMS42NjUsMTQuNjYyIEMxLjY2NSwyMC4xNTkgNS4xMDksMjQuODU0IDkuOTcsMjYuNzQ0IEM5Ljg1NiwyNS43MTggOS43NTMsMjQuMTQzIDEwLjAxNiwyMy4wMjIgQzEwLjI1MywyMi4wMSAxMS41NDgsMTYuNTcyIDExLjU0OCwxNi41NzIgQzExLjU0OCwxNi41NzIgMTEuMTU3LDE1Ljc5NSAxMS4xNTcsMTQuNjQ2IEMxMS4xNTcsMTIuODQyIDEyLjIxMSwxMS40OTUgMTMuNTIyLDExLjQ5NSBDMTQuNjM3LDExLjQ5NSAxNS4xNzUsMTIuMzI2IDE1LjE3NSwxMy4zMjMgQzE1LjE3NSwxNC40MzYgMTQuNDYyLDE2LjEgMTQuMDkzLDE3LjY0MyBDMTMuNzg1LDE4LjkzNSAxNC43NDUsMTkuOTg4IDE2LjAyOCwxOS45ODggQzE4LjM1MSwxOS45ODggMjAuMTM2LDE3LjU1NiAyMC4xMzYsMTQuMDQ2IEMyMC4xMzYsMTAuOTM5IDE3Ljg4OCw4Ljc2NyAxNC42NzgsOC43NjcgQzEwLjk1OSw4Ljc2NyA4Ljc3NywxMS41MzYgOC43NzcsMTQuMzk4IEM4Ljc3NywxNS41MTMgOS4yMSwxNi43MDkgOS43NDksMTcuMzU5IEM5Ljg1NiwxNy40ODggOS44NzIsMTcuNiA5Ljg0LDE3LjczMSBDOS43NDEsMTguMTQxIDkuNTIsMTkuMDIzIDkuNDc3LDE5LjIwMyBDOS40MiwxOS40NCA5LjI4OCwxOS40OTEgOS4wNCwxOS4zNzYgQzcuNDA4LDE4LjYyMiA2LjM4NywxNi4yNTIgNi4zODcsMTQuMzQ5IEM2LjM4NywxMC4yNTYgOS4zODMsNi40OTcgMTUuMDIyLDYuNDk3IEMxOS41NTUsNi40OTcgMjMuMDc4LDkuNzA1IDIzLjA3OCwxMy45OTEgQzIzLjA3OCwxOC40NjMgMjAuMjM5LDIyLjA2MiAxNi4yOTcsMjIuMDYyIEMxNC45NzMsMjIuMDYyIDEzLjcyOCwyMS4zNzkgMTMuMzAyLDIwLjU3MiBDMTMuMzAyLDIwLjU3MiAxMi42NDcsMjMuMDUgMTIuNDg4LDIzLjY1NyBDMTIuMTkzLDI0Ljc4NCAxMS4zOTYsMjYuMTk2IDEwLjg2MywyNy4wNTggQzEyLjA4NiwyNy40MzQgMTMuMzg2LDI3LjYzNyAxNC43MzMsMjcuNjM3IEMyMS45NSwyNy42MzcgMjcuODAxLDIxLjgyOCAyNy44MDEsMTQuNjYyIEMyNy44MDEsNy40OTUgMjEuOTUsMS42ODYgMTQuNzMzLDEuNjg2IiBmaWxsPSIjZTYwMDIzIj48L3BhdGg+PC9nPjwvc3ZnPg==) 3px 50% no-repeat;
            background-size: 14px 14px;
            -webkit-font-smoothing: antialiased;
        }
        .PIN_1642950077673_button_pin.PIN_1642950077673_save:hover {
            background-color: #e60023;
            box-shadow: none;
            color: #fff!important;
        }
        .PIN_1642950077673_button_pin.PIN_1642950077673_save .PIN_1642950077673_count {
            text-indent: 0;
            position: absolute;
            color: #555;
            background: #efefef;
            border-radius: 2px;
        }
        .PIN_1642950077673_button_pin.PIN_1642950077673_save .PIN_1642950077673_count::before {
            content: "";
            position: absolute;
        }
        .PIN_1642950077673_button_pin.PIN_1642950077673_save.PIN_1642950077673_beside .PIN_1642950077673_count {
            right: -46px;
            height: 20px;
            width: 40px;
            font-size: 10px;
            line-height: 20px;
        }
        .PIN_1642950077673_button_pin.PIN_1642950077673_save.PIN_1642950077673_beside .PIN_1642950077673_count::before {
            top: 3px;
            left: -4px;
            border-right: 7px solid #efefef;
            border-top: 7px solid transparent;
            border-bottom: 7px solid transparent;
        }
        .PIN_1642950077673_button_pin.PIN_1642950077673_save.PIN_1642950077673_above .PIN_1642950077673_count {
            top: -36px;
            width: 100%;
            height: 30px;
            font-size: 10px;
            line-height: 30px;
        }
        .PIN_1642950077673_button_pin.PIN_1642950077673_save.PIN_1642950077673_above .PIN_1642950077673_count::before {
            bottom: -4px;
            left: 4px;
            border-top: 7px solid #efefef;
            border-right: 7px solid transparent;
            border-left: 7px solid transparent;
        }
        .PIN_1642950077673_button_pin.PIN_1642950077673_save.PIN_1642950077673_above.PIN_1642950077673_padded {
            margin-top: 28px;
        }
        .PIN_1642950077673_button_pin.PIN_1642950077673_tall {
            height: 28px;
            width: 56px;
            border-radius: 3px;
        }
        .PIN_1642950077673_button_pin.PIN_1642950077673_tall.PIN_1642950077673_above .PIN_1642950077673_count {
            position: absolute;
            height: 37px;
            width: inherit;
            top: -37px;
            left: 0;
            line-height: 30px;
            font-size: 14px;
            background: transparent url(data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIGhlaWdodD0iNzZweCIgd2lkdGg9IjExNHB4IiB2aWV3Qm94PSIwIDAgMTE0IDc2Ij48Zz48cGF0aCBkPSJNOSAxQzQuNiAxIDEgNC42IDEgOXY0M2MwIDQuMyAzLjYgOCA4IDhoMjZsMTggMTVoNy41bDE2LTE1SDEwNWM0LjQgMCA4LTMuNyA4LThWOWMwLTQuNC0zLjYtOC04LThIOXoiIGZpbGw9IiNmZmYiIHN0cm9rZT0iI2I1YjViNSIgc3Ryb2tlLXdpZHRoPSIyIj48L3BhdGg+PC9nPjwvc3ZnPg==);
            background-size: cover;
        }
        .PIN_1642950077673_button_pin.PIN_1642950077673_tall.PIN_1642950077673_above.PIN_1642950077673_padded {
            margin-top: 37px;
        }
        .PIN_1642950077673_button_pin.PIN_1642950077673_tall.PIN_1642950077673_beside .PIN_1642950077673_count {
            text-indent: 5px;
            position: absolute;
            right: -63px;
            height: inherit;
            width: 63px;
            font-size: 14px;
            line-height: 28px;
            background: transparent url(data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIGhlaWdodD0iNTZweCIgd2lkdGg9IjEyNnB4IiB2aWV3Qm94PSIyIDAgMTMwIDYwIj48Zz48cGF0aCBkPSJNMTE5LjYgMmM0LjUgMCA4IDMuNiA4IDh2NDBjMCA0LjQtMy41IDgtOCA4SDIzLjNMMS42IDMyLjR2LTQuNkwyMy4zIDJoOTYuM3oiIGZpbGw9IiNmZmYiIHN0cm9rZT0iI2I1YjViNSIgc3Ryb2tlLXdpZHRoPSIyIj48L3BhdGg+PC9nPjwvc3ZnPg==);
            background-size: cover;
        }
        .PIN_1642950077673_button_pin.PIN_1642950077673_tall.PIN_1642950077673_beside.PIN_1642950077673_padded {
            margin-right: 63px;
        }
        .PIN_1642950077673_button_pin.PIN_1642950077673_tall.PIN_1642950077673_save {
            border-radius: 4px;
            width: auto;
            background-position-x: 6px;
            background-size: 18px 18px;
            text-indent: 29px;
            font: 14px/28px "Helvetica Neue", Helvetica, Arial, "sans-serif";
            font-weight: bold;
            padding: 0 6px 0 0;
        }
        .PIN_1642950077673_button_pin.PIN_1642950077673_tall.PIN_1642950077673_save .PIN_1642950077673_count {
            position: absolute;
            color: #555;
            font-size: 12px;
            text-indent: 0;
            background: #efefef;
            border-radius: 4px;
        }
        .PIN_1642950077673_button_pin.PIN_1642950077673_tall.PIN_1642950077673_save .PIN_1642950077673_count::before {
            content: "";
            position: absolute;
        }
        .PIN_1642950077673_button_pin.PIN_1642950077673_tall.PIN_1642950077673_save.PIN_1642950077673_above .PIN_1642950077673_count {
            font-size: 14px;
            top: -50px;
            width: 100%;
            height: 44px;
            line-height: 44px;
        }
        .PIN_1642950077673_button_pin.PIN_1642950077673_tall.PIN_1642950077673_save.PIN_1642950077673_above .PIN_1642950077673_count::before {
            bottom: -4px;
            left: 7px;
            border-top: 7px solid #efefef;
            border-right: 7px solid transparent;
            border-left: 7px solid transparent;
        }
        .PIN_1642950077673_button_pin.PIN_1642950077673_tall.PIN_1642950077673_save.PIN_1642950077673_beside .PIN_1642950077673_count {
            font-size: 14px;
            right: -63px;
            width: 56px;
            height: 28px;
            line-height: 28px;
        }
        .PIN_1642950077673_button_pin.PIN_1642950077673_tall.PIN_1642950077673_save.PIN_1642950077673_beside .PIN_1642950077673_count::before {
            top: 7px;
            left: -4px;
            border-right: 7px solid #efefef;
            border-top: 7px solid transparent;
            border-bottom: 7px solid transparent;
        }
        .PIN_1642950077673_button_pin.PIN_1642950077673_round {
            height: 16px;
            width: 16px;
            background: transparent url(data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIGhlaWdodD0iMzBweCIgd2lkdGg9IjMwcHgiIHZpZXdCb3g9Ii0xIC0xIDMxIDMxIj48Zz48cGF0aCBkPSJNMjkuNDQ5LDE0LjY2MiBDMjkuNDQ5LDIyLjcyMiAyMi44NjgsMjkuMjU2IDE0Ljc1LDI5LjI1NiBDNi42MzIsMjkuMjU2IDAuMDUxLDIyLjcyMiAwLjA1MSwxNC42NjIgQzAuMDUxLDYuNjAxIDYuNjMyLDAuMDY3IDE0Ljc1LDAuMDY3IEMyMi44NjgsMC4wNjcgMjkuNDQ5LDYuNjAxIDI5LjQ0OSwxNC42NjIiIGZpbGw9IiNmZmYiIHN0cm9rZT0iI2ZmZiIgc3Ryb2tlLXdpZHRoPSIxIj48L3BhdGg+PHBhdGggZD0iTTE0LjczMywxLjY4NiBDNy41MTYsMS42ODYgMS42NjUsNy40OTUgMS42NjUsMTQuNjYyIEMxLjY2NSwyMC4xNTkgNS4xMDksMjQuODU0IDkuOTcsMjYuNzQ0IEM5Ljg1NiwyNS43MTggOS43NTMsMjQuMTQzIDEwLjAxNiwyMy4wMjIgQzEwLjI1MywyMi4wMSAxMS41NDgsMTYuNTcyIDExLjU0OCwxNi41NzIgQzExLjU0OCwxNi41NzIgMTEuMTU3LDE1Ljc5NSAxMS4xNTcsMTQuNjQ2IEMxMS4xNTcsMTIuODQyIDEyLjIxMSwxMS40OTUgMTMuNTIyLDExLjQ5NSBDMTQuNjM3LDExLjQ5NSAxNS4xNzUsMTIuMzI2IDE1LjE3NSwxMy4zMjMgQzE1LjE3NSwxNC40MzYgMTQuNDYyLDE2LjEgMTQuMDkzLDE3LjY0MyBDMTMuNzg1LDE4LjkzNSAxNC43NDUsMTkuOTg4IDE2LjAyOCwxOS45ODggQzE4LjM1MSwxOS45ODggMjAuMTM2LDE3LjU1NiAyMC4xMzYsMTQuMDQ2IEMyMC4xMzYsMTAuOTM5IDE3Ljg4OCw4Ljc2NyAxNC42NzgsOC43NjcgQzEwLjk1OSw4Ljc2NyA4Ljc3NywxMS41MzYgOC43NzcsMTQuMzk4IEM4Ljc3NywxNS41MTMgOS4yMSwxNi43MDkgOS43NDksMTcuMzU5IEM5Ljg1NiwxNy40ODggOS44NzIsMTcuNiA5Ljg0LDE3LjczMSBDOS43NDEsMTguMTQxIDkuNTIsMTkuMDIzIDkuNDc3LDE5LjIwMyBDOS40MiwxOS40NCA5LjI4OCwxOS40OTEgOS4wNCwxOS4zNzYgQzcuNDA4LDE4LjYyMiA2LjM4NywxNi4yNTIgNi4zODcsMTQuMzQ5IEM2LjM4NywxMC4yNTYgOS4zODMsNi40OTcgMTUuMDIyLDYuNDk3IEMxOS41NTUsNi40OTcgMjMuMDc4LDkuNzA1IDIzLjA3OCwxMy45OTEgQzIzLjA3OCwxOC40NjMgMjAuMjM5LDIyLjA2MiAxNi4yOTcsMjIuMDYyIEMxNC45NzMsMjIuMDYyIDEzLjcyOCwyMS4zNzkgMTMuMzAyLDIwLjU3MiBDMTMuMzAyLDIwLjU3MiAxMi42NDcsMjMuMDUgMTIuNDg4LDIzLjY1NyBDMTIuMTkzLDI0Ljc4NCAxMS4zOTYsMjYuMTk2IDEwLjg2MywyNy4wNTggQzEyLjA4NiwyNy40MzQgMTMuMzg2LDI3LjYzNyAxNC43MzMsMjcuNjM3IEMyMS45NSwyNy42MzcgMjcuODAxLDIxLjgyOCAyNy44MDEsMTQuNjYyIEMyNy44MDEsNy40OTUgMjEuOTUsMS42ODYgMTQuNzMzLDEuNjg2IiBmaWxsPSIjZTYwMDIzIj48L3BhdGg+PC9nPjwvc3ZnPg==) 0 0 no-repeat;
            background-size: 16px 16px;
            box-shadow: none;
        }
        .PIN_1642950077673_button_pin.PIN_1642950077673_round.PIN_1642950077673_tall {
            height: 32px;
            width: 32px;
            background-size: 32px 32px;
        }
    </style><script type="text/javascript" charset="UTF-8" src="http://maps.googleapis.com/maps-api-v3/api/js/47/6/intl/tr_ALL/common.js"></script><script type="text/javascript" charset="UTF-8" src="http://maps.googleapis.com/maps-api-v3/api/js/47/6/intl/tr_ALL/util.js"></script></head>

<body style="visibility: visible;">




<div id="template-wrapper">
    <div id="menu-container" class="shadow-side-all" style="left: 0px; visibility: visible;"><!-- start #menu-container -->
        <div class="menu-content-holder"><!-- start .menu-content-holder -->
            <div class="menu-background"></div>
            <div id="template-logo" class="template-logo" data-href="#portfolio.html"></div>
            <div id="template-menu" class="template-menu" data-current-module-type="full_width_gallery" data-side="none" data-href="portfolio.html"><!-- start #template-menu -->
                <div class="menu-option-holder">
                    <div class="menu-option-background"> </div>
                    <div class="menu-option-text">
                        <a href="#">HOME</a>
                        <div class="menu-option-sign">+</div>
                    </div>
                    <div class="sub-menu-holder">
                        <div class="sub-menu-option-holder" data-module-type="slideshow" data-side="none">
                            <div class="sub-menu-option-background"></div>
                            <div class="sub-menu-option-text"><a href="#home_layout_1.html" data-path-href="html/home/">Home Layout 1</a></div>
                        </div>
                        <div class="sub-menu-option-holder" data-module-type="home2" data-side="none">
                            <div class="sub-menu-option-background"></div>
                            <div class="sub-menu-option-text"><a href="#home_layout_2.html" data-path-href="html/home/">Home Layout 2</a></div>
                        </div>
                        <div class="sub-menu-option-holder" data-module-type="home3" data-side="none">
                            <div class="sub-menu-option-background"> </div>
                            <div class="sub-menu-option-text"><a href="#home_layout_3.html" data-path-href="html/home/">Home Layout 3</a></div>
                        </div>

                    </div>
                </div>
                <div class="menu-option-holder">
                    <div class="menu-option-background"> </div>
                    <div class="menu-option-text">
                        <a href="#">ABOUT US</a>
                        <div class="menu-option-sign">+</div>
                    </div>
                    <div class="sub-menu-holder">
                        <div class="sub-menu-option-holder" data-module-type="text_page" data-side="height">
                            <div class="sub-menu-option-background"></div>
                            <div class="sub-menu-option-text"><a href="#about_us.html" data-path-href="html/about_us/">About us</a></div>
                        </div>
                        <div class="sub-menu-option-holder" data-module-type="text_page" data-side="none">
                            <div class="sub-menu-option-background"></div>
                            <div class="sub-menu-option-text"><a href="#philosophy.html" data-path-href="html/about_us/">Philosophy</a></div>
                        </div>
                        <div class="sub-menu-option-holder" data-module-type="text_page" data-side="height">
                            <div class="sub-menu-option-background"> </div>
                            <div class="sub-menu-option-text"><a href="#ethics.html" data-path-href="html/about_us/">Ethics</a></div>
                        </div>
                        <div class="sub-menu-option-holder" data-module-type="text_page" data-side="none">
                            <div class="sub-menu-option-background"> </div>
                            <div class="sub-menu-option-text"><a href="#careers.html" data-path-href="html/about_us/">Careers</a></div>
                        </div>
                    </div>
                </div>
                <div class="menu-option-holder" data-module-type="news" data-side="height">
                    <div class="menu-option-background"> </div>
                    <div class="menu-option-text"><a href="#news.html" data-path-href="html/news/">NEWS</a></div>
                </div>
                <div class="menu-option-holder" data-module-type="full_width_gallery" data-side="none">
                    <div class="menu-option-background-selected" style="width: 210px; margin-left: 0px;"> </div>
                    <div class="menu-option-text"><a href="#portfolio.html" data-path-href="html/portfolio/" style="color: rgb(255, 255, 255);">PORTFOLIO</a></div>
                </div>
                <div class="menu-option-holder">
                    <div class="menu-option-background"> </div>
                    <div class="menu-option-text"><a href="#">OUR PROJECTS</a><div class="menu-option-sign">+</div></div>
                    <div class="sub-menu-holder">
                        <div class="sub-menu-option-holder" data-module-type="page_columns" data-side="custom">
                            <div class="sub-menu-option-background"> </div>
                            <div class="sub-menu-option-text"><a href="#4_columns_projects.html" data-path-href="html/our_projects/">4 Columns Projects</a></div>
                        </div>
                        <div class="sub-menu-option-holder" data-module-type="page_columns" data-side="custom">
                            <div class="sub-menu-option-background"> </div>
                            <div class="sub-menu-option-text"><a href="#3_columns_projects.html" data-path-href="html/our_projects/">3 Columns Projects</a></div>
                        </div>
                        <div class="sub-menu-option-holder" data-module-type="page_columns" data-side="custom">
                            <div class="sub-menu-option-background"> </div>
                            <div class="sub-menu-option-text"><a href="#2_columns_projects.html" data-path-href="html/our_projects/">2 Columns Projects</a></div>
                        </div>
                    </div>
                </div>
                <div class="menu-option-holder" data-module-type="showreel" data-side="none">
                    <div class="menu-option-background"> </div>
                    <div class="menu-option-text"><a href="#showreel.html" data-path-href="html/showreel/">SHOWREEL</a></div>
                </div>
                <div class="menu-option-holder">
                    <div class="menu-option-background"> </div>
                    <div class="menu-option-text"><a href="#">GALLERIES</a><div class="menu-option-sign">+</div></div>
                    <div class="sub-menu-holder">
                        <div class="sub-menu-option-holder" data-module-type="gallery" data-side="none">
                            <div class="sub-menu-option-background"></div>
                            <div class="sub-menu-option-text"><a href="#image_gallery.html" data-path-href="html/galleries/">Image Gallery</a></div>
                        </div>
                        <div class="sub-menu-option-holder" data-module-type="gallery" data-side="none">
                            <div class="sub-menu-option-background"> </div>
                            <div class="sub-menu-option-text"><a href="#mixed_gallery.html" data-path-href="html/galleries/">Mixed Gallery</a></div>
                        </div>
                    </div>
                </div>
                <div class="menu-option-holder">
                    <div class="menu-option-background"> </div>
                    <div class="menu-option-text"><a href="#">FEATURES</a><div class="menu-option-sign">+</div></div>
                    <div class="sub-menu-holder">
                        <div class="sub-menu-option-holder" data-module-type="full_width" data-side="custom">
                            <div class="sub-menu-option-background"></div>
                            <div class="sub-menu-option-text"><a href="#full_width_text_and_image.html" data-path-href="html/features/">Fullwidth Text + Image</a></div>
                        </div>
                        <div class="sub-menu-option-holder" data-module-type="full_width" data-side="custom">
                            <div class="sub-menu-option-background"></div>
                            <div class="sub-menu-option-text"><a href="#full_width_text_and_video.html" data-path-href="html/features/">Fullwidth Text + Video</a></div>
                        </div>
                        <div class="sub-menu-option-holder" data-module-type="fullscreen_video" data-side="none">
                            <div class="sub-menu-option-background"></div>
                            <div class="sub-menu-option-text"><a href="#fullscreen_video.html" data-path-href="html/features/">Fullscreen Video</a></div>
                        </div>
                        <div class="sub-menu-option-holder" data-module-type="pricing_tables" data-side="none">
                            <div class="sub-menu-option-background"> </div>
                            <div class="sub-menu-option-text"><a href="#pricing_tables.html" data-path-href="html/features/">Pricing Table</a></div>
                        </div>
                    </div>
                </div>
                <div class="menu-option-holder" data-module-type="contact" data-side="custom">
                    <div class="menu-option-background"> </div>
                    <div class="menu-option-text"><a href="#contact.html" data-path-href="html/contact/">CONTACT US</a></div>
                </div>
                <div class="menu-option-holder" data-module-type="external" data-side="custom" style="margin-top: 10px; margin-bottom:-10px;">
                    <div class="menu-option-background"> </div>
                    <div class="menu-option-text"><a href="http://themeforest.net/item/synergy-responsive-interactive-html-portfolio/3054099?ref=mediacreed" data-path-href="html/contact/" style="font-weight: bold;font-size:14px;">BUY THIS THEME!</a></div>
                </div>
            </div><!-- end #template-menu -->
            <div id="template-smpartphone-menu">
                <select>
                    <option value="#">Navigate to...</option>
                    <option value="#"> HOME +</option>
                    <option value="#home_layout_1.html">  - Home Layout 1</option>
                    <option value="#home_layout_2.html">  - Home Layout 2</option>
                    <option value="#home_layout_3.html">  - Home Layout 3</option>
                    <option value="#"> ABOUT US +</option>
                    <option value="#about_us.html">  - About us</option>
                    <option value="#philosophy.html">  - Philosophy</option>
                    <option value="#ethics.html">  - Ethics</option>
                    <option value="#careers.html">  - Careers</option>
                    <option value="#news.html"> NEWS</option>
                    <option value="#portfolio.html" selected="selected"> PORTFOLIO</option>
                    <option value="#"> OUR PROJECTS +</option>
                    <option value="#4_columns_projects.html">  - 4 Columns Projects</option>
                    <option value="#3_columns_projects.html">  - 3 Columns Projects</option>
                    <option value="#2_columns_projects.html">  - 2 Columns Projects</option>
                    <option value="#showreel.html"> SHOWREEL</option>
                    <option value="#"> GALLERIES +</option>
                    <option value="#image_gallery.html">  - Image Gallery</option>
                    <option value="#mixed_gallery.html">  - Mixed Gallery</option>
                    <option value="#"> FEATURES +</option>
                    <option value="#full_width_text_and_image.html">  - Full Width Text + Image</option>
                    <option value="#full_width_text_and_video.html">  - Full Width Text + Video</option>
                    <option value="#fullscreen_video.html">  - Fullscreen Video</option>
                    <option value="#pricing_tables.html">  - Pricing Table</option>
                    <option value="#contact.html"> CONTACT</option>
                </select>
            </div>
            <div id="audio-player" data-auto-play="false" data-player-opened="true" data-player-volume="0.6" style="width: 210px;">
                <div id="audio-items"></div>
                <div id="audio-player-tooltip" class="opacity_0">
                    <div id="audio-tooltip-holder">
                        <div class="audio-tooltip-backg"></div>
                        <div class="audio-player-tooltip-title" style=""><span style="width: 100%;">Tim McMorris - Top Of The World</span></div>
                    </div>
                    <div class="audio-player-tooltip-hook"></div>
                </div>
                <div id="audio-player-holder" style="left: 0px;">
                    <div id="audio-options-button">
                        <div class="audio-options-button-backg"></div>
                        <div class="audio-options-button-sign"></div>
                    </div>
                    <div id="audio-player-options-holder">
                        <div id="audio-prev-track">
                            <div class="audio-controls-backg"></div>
                            <div class="audio-prev-track-sign"></div>
                        </div>
                        <div id="audio-play-pause-track">
                            <div class="audio-controls-backg"></div>
                            <div class="audio-play-track-sign" style="opacity: 1;"></div>
                            <div class="audio-pause-track-sign" style="opacity: 0;"></div>
                        </div>
                        <div id="audio-next-track">
                            <div class="audio-controls-backg"></div>
                            <div class="audio-next-track-sign"></div>
                        </div>
                        <div id="audio-volume-speaker">
                            <div class="audio-controls-backg"></div>
                            <div class="audio-volume-on-sign" style="opacity: 1;"></div>
                            <div class="audio-volume-off-sign" style="opacity: 0;"></div>
                        </div>
                        <div id="audio-volume-bar">
                            <div class="audio-volume-bar-scrub-backg"></div>
                            <div class="audio-volume-bar-scrub-current" style="width: 34.8px;"></div>
                        </div>
                    </div>
                </div>
            </div>
            <footer style="display: inline; visibility: visible;">
                <div id="footer-social">
                    <div id="footer-social-holder">
                        <ul>
                            <li class="twitter"><a href="http://www.twitter.com" target="_blank"></a></li>
                            <li class="facebook"><a href="http://www.facebook.com" target="_blank"></a></li>
                            <li class="google"><a href="http://www.google.com" target="_blank"></a></li>
                            <li class="dribbble"><a href="http://www.dribbble.com" target="_blank"></a></li>
                            <li class="flickr"><a href="http://www.flickr.com" target="_blank"></a></li>
                        </ul>
                    </div>
                </div>
                <div id="footer-text"><!-- start #footer-text -->
                    <div id="footer-copyright"><a href="#">©2012 YOUR-COMPANY.COM</a></div>
                </div><!-- end #footer -->
            </footer>
        </div><!-- end .menu-content-holder-->

        <div id="menu-hider" style="display: inline; visibility: visible;">
            <div id="menu-hider-background"></div>
            <div id="menu-hider-icon" style=""></div>
        </div>
    </div><!-- end #menu-container -->

    <div id="module-container" style="width: 563px; opacity: 1; left: 220px; top: 0px; height: 100%;"><div id="module-background-holder">
            <div id="module-background-solid1" class="opacity_0" style="display: inline; opacity: 1; visibility: visible;"></div>
        </div><div id="module-container-holder" class="module-position-lc" data-id="module-position-lc" style="opacity: 1; visibility: visible; top: 0px;">
            <div id="module-full-width-gallery" class="module-full-width-gallery " style="width: 553px; top: 0px;"> <!-- .shadow-side-all-->
                <div id="module-full-width-holder" style="height: 2028px; top: 0px;">
                    <div class="full-width-item" style="position: absolute; top: 0px; left: 0px; height: 169px; width: 277px;">
                        <img src="assets/media/portfolio/thumbs/thumb1.jpg" class="opacity_0" onload="animateThumb(this)" alt="" style="opacity: 1; height: 169px; width: 277px;">
                        <div id="thumb-image-hover" class="hover-default">
                            <div class="background opacity_6"></div>
                            <div class="zoom-gallery"></div>
                            <div class="item-title"><p>Giuseppe</p></div>
                        </div>
                    </div>
                    <div class="full-width-item" style="position: absolute; top: 0px; left: 277px; height: 169px; width: 277px;">
                        <img src="assets/media/portfolio/thumbs/thumb-video3.jpg" class="opacity_0" onload="animateThumb(this)" alt="" style="opacity: 1; height: 169px; width: 277px;">
                        <div id="thumb-image-hover" class="" style="left: 100%; top: 0px;">
                            <div class="background opacity_6"></div>
                            <div class="play-gallery"></div>
                            <div class="item-title"><p>Beat</p></div>
                        </div>
                    </div>
                    <div class="full-width-item" style="position: absolute; top: 169px; left: 0px; height: 169px; width: 277px;">
                        <img src="assets/media/portfolio/thumbs/thumb2.jpg" class="opacity_0" onload="animateThumb(this)" alt="" style="opacity: 1; height: 169px; width: 277px;">
                        <div id="thumb-image-hover" class="hover-default">
                            <div class="background opacity_6"></div>
                            <div class="zoom-gallery"></div>
                            <div class="item-title"><p>Baseball Illustration</p></div>
                        </div>
                    </div>
                    <div class="full-width-item" style="position: absolute; top: 169px; left: 277px; height: 169px; width: 277px;">
                        <img src="assets/media/portfolio/thumbs/thumb-video6.jpg" class="opacity_0" onload="animateThumb(this)" alt="" style="opacity: 1; height: 169px; width: 277px;">
                        <div id="thumb-image-hover" class="hover-default">
                            <div class="background opacity_6"></div>
                            <div class="play-gallery"></div>
                            <div class="item-title"><p>Frames</p></div>
                        </div>
                    </div>
                    <div class="full-width-item" style="position: absolute; top: 338px; left: 0px; height: 169px; width: 277px;">
                        <img src="assets/media/portfolio/thumbs/thumb3.jpg" class="opacity_0" onload="animateThumb(this)" alt="" style="opacity: 1; height: 169px; width: 277px;">
                        <div id="thumb-image-hover" class="hover-default">
                            <div class="background opacity_6"></div>
                            <div class="zoom-gallery"></div>
                            <div class="item-title"><p>Caricature Dr. House</p></div>
                        </div>
                    </div>
                    <div class="full-width-item" style="position: absolute; top: 338px; left: 277px; height: 169px; width: 277px;">
                        <img src="assets/media/portfolio/thumbs/thumb-video1.jpg" class="opacity_0" onload="animateThumb(this)" alt="" style="opacity: 1; height: 169px; width: 277px;">
                        <div id="thumb-image-hover" class="hover-default">
                            <div class="background opacity_6"></div>
                            <div class="play-gallery"></div>
                            <div class="item-title"><p>The Node</p></div>
                        </div>
                    </div>
                    <div class="full-width-item" style="position: absolute; top: 507px; left: 0px; height: 169px; width: 277px;">
                        <img src="assets/media/portfolio/thumbs/thumb4.jpg" class="opacity_0" onload="animateThumb(this)" alt="" style="opacity: 1; height: 169px; width: 277px;">
                        <div id="thumb-image-hover" class="hover-default">
                            <div class="background opacity_6"></div>
                            <div class="zoom-gallery"></div>
                            <div class="item-title"><p>Carousel Bike</p></div>
                        </div>
                    </div>
                    <div class="full-width-item" style="position: absolute; top: 507px; left: 277px; height: 169px; width: 277px;">
                        <img src="assets/media/portfolio/thumbs/thumb5.jpg" class="opacity_0" onload="animateThumb(this)" alt="" style="opacity: 1; height: 169px; width: 277px;">
                        <div id="thumb-image-hover" class="hover-default">
                            <div class="background opacity_6"></div>
                            <div class="zoom-gallery"></div>
                            <div class="item-title"><p>Late Days Of A Legend</p></div>
                        </div>
                    </div>
                    <div class="full-width-item" style="position: absolute; top: 676px; left: 0px; height: 169px; width: 277px;">
                        <img src="assets/media/portfolio/thumbs/thumb6.jpg" class="opacity_0" onload="animateThumb(this)" alt="" style="opacity: 1; height: 169px; width: 277px;">
                        <div id="thumb-image-hover" class="hover-default">
                            <div class="background opacity_6"></div>
                            <div class="zoom-gallery"></div>
                            <div class="item-title"><p>Planet Of The Apes</p></div>
                        </div>
                    </div>
                    <div class="full-width-item" style="position: absolute; top: 676px; left: 277px; height: 169px; width: 277px;">
                        <img src="assets/media/portfolio/thumbs/thumb-video4.jpg" class="opacity_0" onload="animateThumb(this)" alt="" style="opacity: 1; height: 169px; width: 277px;">
                        <div id="thumb-image-hover" class="hover-default">
                            <div class="background opacity_6"></div>
                            <div class="play-gallery"></div>
                            <div class="item-title"><p>Cee-Ee</p></div>
                        </div>
                    </div>
                    <div class="full-width-item" style="position: absolute; top: 845px; left: 0px; height: 169px; width: 277px;">
                        <img src="assets/media/portfolio/thumbs/thumb7.jpg" class="opacity_0" onload="animateThumb(this)" alt="" style="opacity: 1; height: 169px; width: 277px;">
                        <div id="thumb-image-hover" class="hover-default">
                            <div class="background opacity_6"></div>
                            <div class="zoom-gallery"></div>
                            <div class="item-title"><p>Shopping Spree</p></div>
                        </div>
                    </div>
                    <div class="full-width-item" style="position: absolute; top: 845px; left: 277px; height: 169px; width: 277px;">
                        <img src="assets/media/portfolio/thumbs/thumb-video5.jpg" class="opacity_0" onload="animateThumb(this)" alt="" style="opacity: 1; height: 169px; width: 277px;">
                        <div id="thumb-image-hover" class="hover-default">
                            <div class="background opacity_6"></div>
                            <div class="play-gallery"></div>
                            <div class="item-title"><p>Proteigon</p></div>
                        </div>
                    </div>
                    <div class="full-width-item" style="position: absolute; top: 1014px; left: 0px; height: 169px; width: 277px;">
                        <img src="assets/media/portfolio/thumbs/thumb8.jpg" class="opacity_0" onload="animateThumb(this)" alt="" style="opacity: 1; height: 169px; width: 277px;">
                        <div id="thumb-image-hover" class="hover-default">
                            <div class="background opacity_6"></div>
                            <div class="zoom-gallery"></div>
                            <div class="item-title"><p>Oh My Gosh</p></div>
                        </div>
                    </div>
                    <div class="full-width-item" style="position: absolute; top: 1014px; left: 277px; height: 169px; width: 277px;">
                        <img src="assets/media/portfolio/thumbs/thumb9.jpg" class="opacity_0" onload="animateThumb(this)" alt="" style="opacity: 1; height: 169px; width: 277px;">
                        <div id="thumb-image-hover" class="hover-default">
                            <div class="background opacity_6"></div>
                            <div class="zoom-gallery"></div>
                            <div class="item-title"><p>Media Overdose</p></div>
                        </div>
                    </div>
                    <div class="full-width-item" style="position: absolute; top: 1183px; left: 0px; height: 169px; width: 277px;">
                        <img src="assets/media/portfolio/thumbs/thumb10.jpg" class="opacity_0" onload="animateThumb(this)" alt="" style="opacity: 1; height: 169px; width: 277px;">
                        <div id="thumb-image-hover" class="hover-default">
                            <div class="background opacity_6"></div>
                            <div class="zoom-gallery"></div>
                            <div class="item-title"><p>Qubsik Project</p></div>
                        </div>
                    </div>
                    <div class="full-width-item" style="position: absolute; top: 1183px; left: 277px; height: 169px; width: 277px;">
                        <img src="assets/media/portfolio/thumbs/thumb11.jpg" class="opacity_0" onload="animateThumb(this)" alt="" style="opacity: 1; height: 169px; width: 277px;">
                        <div id="thumb-image-hover" class="hover-default">
                            <div class="background opacity_6"></div>
                            <div class="zoom-gallery"></div>
                            <div class="item-title"><p>Modern House</p></div>
                        </div>
                    </div>
                    <div class="full-width-item" style="position: absolute; top: 1352px; left: 0px; height: 169px; width: 277px;">
                        <img src="assets/media/portfolio/thumbs/thumb12.jpg" class="opacity_0" onload="animateThumb(this)" alt="" style="opacity: 1; height: 169px; width: 277px;">
                        <div id="thumb-image-hover" class="hover-default">
                            <div class="background opacity_6"></div>
                            <div class="zoom-gallery"></div>
                            <div class="item-title"><p>Red Passion</p></div>
                        </div>
                    </div>
                    <div class="full-width-item" style="position: absolute; top: 1352px; left: 277px; height: 169px; width: 277px;">
                        <img src="assets/media/portfolio/thumbs/thumb-video2.jpg" class="opacity_0" onload="animateThumb(this)" alt="" style="opacity: 1; height: 169px; width: 277px;">
                        <div id="thumb-image-hover" class="hover-default">
                            <div class="background opacity_6"></div>
                            <div class="play-gallery"></div>
                            <div class="item-title"><p>Opening Sequence | BUNRAKU</p></div>
                        </div>
                    </div>
                    <div class="full-width-item" style="position: absolute; top: 1521px; left: 0px; height: 169px; width: 277px;">
                        <img src="assets/media/portfolio/thumbs/thumb13.jpg" class="opacity_0" onload="animateThumb(this)" alt="" style="opacity: 1; height: 169px; width: 277px;">
                        <div id="thumb-image-hover" class="hover-default">
                            <div class="background opacity_6"></div>
                            <div class="zoom-gallery"></div>
                            <div class="item-title"><p>Sleep Deprivation</p></div>
                        </div>
                    </div>
                    <div class="full-width-item" style="position: absolute; top: 1521px; left: 277px; height: 169px; width: 277px;">
                        <img src="assets/media/portfolio/thumbs/thumb14.jpg" class="opacity_0" onload="animateThumb(this)" alt="" style="opacity: 1; height: 169px; width: 277px;">
                        <div id="thumb-image-hover" class="hover-default">
                            <div class="background opacity_6"></div>
                            <div class="zoom-gallery"></div>
                            <div class="item-title"><p>Streetbot</p></div>
                        </div>
                    </div>
                    <div class="full-width-item" style="position: absolute; top: 1690px; left: 0px; height: 169px; width: 277px;">
                        <img src="assets/media/portfolio/thumbs/thumb15.jpg" class="opacity_0" onload="animateThumb(this)" alt="" style="opacity: 1; height: 169px; width: 277px;">
                        <div id="thumb-image-hover" class="hover-default">
                            <div class="background opacity_6"></div>
                            <div class="zoom-gallery"></div>
                            <div class="item-title"><p>Missed Relic</p></div>
                        </div>
                    </div>
                    <div class="full-width-item" style="position: absolute; top: 1690px; left: 277px; height: 169px; width: 277px;">
                        <img src="assets/media/portfolio/thumbs/thumb16.jpg" class="opacity_0" onload="animateThumb(this)" alt="" style="opacity: 1; height: 169px; width: 277px;">
                        <div id="thumb-image-hover" class="hover-default">
                            <div class="background opacity_6"></div>
                            <div class="zoom-gallery"></div>
                            <div class="item-title"><p>Nothing To Lose</p></div>
                        </div>
                    </div>
                    <div class="full-width-item" style="position: absolute; top: 1859px; left: 0px; height: 169px; width: 277px;">
                        <img src="assets/media/portfolio/thumbs/thumb17.jpg" class="opacity_0" onload="animateThumb(this)" alt="" style="opacity: 1; height: 169px; width: 277px;">
                        <div id="thumb-image-hover" class="hover-default">
                            <div class="background opacity_6"></div>
                            <div class="zoom-gallery"></div>
                            <div class="item-title"><p>Violen</p></div>
                        </div>
                    </div>
                    <div class="full-width-item" style="position: absolute; top: 1859px; left: 277px; height: 169px; width: 277px;">
                        <img src="assets/media/portfolio/thumbs/thumb18.jpg" class="opacity_0" onload="animateThumb(this)" alt="" style="opacity: 1; height: 169px; width: 277px;">
                        <div id="thumb-image-hover" class="hover-default">
                            <div class="background opacity_6"></div>
                            <div class="zoom-gallery"></div>
                            <div class="item-title"><p>Sunset Background</p></div>
                        </div>
                    </div>
                </div>
            </div>

        </div><div id="module-scrollbar-holder_v2" style="height: 625px; top: 0px; opacity: 1; display: inline;">
            <div id="module-scrollbar-background" class="opacity_8"></div>
            <div id="module-scrollbar-dragger" class="ui-draggable" style="height: 192.616px; top: 0px;"></div>
        </div></div>

</div><div id="full-width-preview"><!-- start .full-width-preview" -->
    <div class="full-width-preview-background opacity_9_7"></div>
    <div id="full-width-preview-media-holder">
        <div class="full-width-preview-media-holder-background opacity_0"></div>
        <div class="full-width-preview-media-loader"></div>
        <div id="preview-media-holder"></div>
    </div>
    <div class="preview-arrow-close">
        <div class="preview-arrow-backg opacity_2"></div>
        <div class="preview-arrow-close-sign"></div>
    </div>
    <div class="preview-arrow-backward">
        <div class="preview-arrow-backg opacity_2"></div>
        <div class="preview-arrow-backward-sign"></div>
    </div>
    <div class="preview-arrow-forward">
        <div class="preview-arrow-backg opacity_2"></div>
        <div class="preview-arrow-forward-sign"></div>
    </div>
    <div class="preview-smartphone-info">
        <div class="preview-smartphone-info-backg opacity_1"></div>
        <span class="show_info">SHOW INFO</span>
        <span class="hide_info">HIDE INFO</span>
    </div>
    <div id="full-width-preview-info-holder" class="module-position-rc">
        <div id="full-width-info-container" class="full-width-info-container shadow-side-left">
            <div class="full-width-info-holder">
                <div class="full-width-info-holder-desc">
                    <p>Giuseppe</p>
                    <div class="custom-separator"></div>
                    <span>Pellentesque diam lectus, dapibus non lacinia in, vulputate sit amet dolor. Vivamus sollicitudin nunc sed augue lobortis at elementum nulla tristique.</span>
                    <span>Vivamus porta, mi non vestibulum semper, massa nisl commodo est, quis fermentum nisi risus in erat. Phasellus sed nulla vel enim mattis tristique. Ut condimentum sodales leo, et mattis urna vulputate ut. </span>
                    <!-- start social facebook, twitter and pinterest -->
                    <div id="social-holder">
                        <div id="social-holder-back" class="opacity_2"></div>
                        <div data-src="//www.facebook.com/plugins/like.php?href=http%3A%2F%2Fthemes.mediacreed.com%2F%23portfolio&amp;send=false&amp;layout=button_count&amp;width=85&amp;show_faces=false&amp;font=verdana&amp;colorscheme=light&amp;action=like&amp;height=21" style="float:left; border:none; overflow:hidden; width:82px; height:21px; margin: 6px 5px 5px 10px;"></div>
                        <div data-src="https://platform.twitter.com/widgets/tweet_button.html?url=http://themes.mediacreed.com/html/synergy/#portfolio&amp;text=Synergy - Awesome HTML Portfolio Template&amp;via=mediacreed" style="float:left; border:none; overflow:hidden; width:82px; height:21px; margin: 6px 5px 5px 10px;"></div>
                        <a href="http://pinterest.com/pin/create/button/?url=http%3A%2F%2Fthemes.mediacreed.com%2Fhtml%2Fsynergy%2F&amp;media=http%3A%2F%2Fthemes.mediacreed.com%2Fdesc_images%2Fprofile_preview_synergy.jpg&amp;description=Synergy%20is%20a%20responsive%20%26%20interactive%20fullscreen%20portfolio%20for%20artists%2C%20photographers%2C%20media%20agencies%2C%20restaurants%20and%20for%20everyone%20that%20wants%20to%20showcase%20their%20portfolio%20in%20a%20professional%20way." class="pin-it-button" count-layout="horizontal" target="_blank"><img border="0" src="//assets.pinterest.com/images/PinExt.png" title="Pin It"></a>
                    </div>
                    <!-- end social facebook, twitter and pinterest -->
                </div>
                <div class="full-width-info-holder-desc">
                    <p>Beat</p>
                    <div class="custom-separator"></div>
                    <span>Pellentesque diam lectus, dapibus non lacinia in, vulputate sit amet dolor. Vivamus sollicitudin nunc sed augue lobortis at elementum nulla tristique.</span>
                    <span>Vivamus porta, mi non vestibulum semper, massa nisl commodo est, quis fermentum nisi risus in erat. Phasellus sed nulla vel enim mattis tristique. Ut condimentum sodales leo, et mattis urna vulputate ut. </span>
                    <!-- start social facebook, twitter and pinterest -->
                    <div id="social-holder">
                        <div id="social-holder-back" class="opacity_2"></div>
                        <div data-src="//www.facebook.com/plugins/like.php?href=http%3A%2F%2Fthemes.mediacreed.com%2F%23portfolio&amp;send=false&amp;layout=button_count&amp;width=85&amp;show_faces=false&amp;font=verdana&amp;colorscheme=light&amp;action=like&amp;height=21" style="float:left; border:none; overflow:hidden; width:82px; height:21px; margin: 6px 5px 5px 10px;"></div>
                        <div data-src="https://platform.twitter.com/widgets/tweet_button.html?url=http://themes.mediacreed.com/html/synergy/#portfolio&amp;text=Synergy - Awesome HTML Portfolio Template&amp;via=mediacreed" style="float:left; border:none; overflow:hidden; width:82px; height:21px; margin: 6px 5px 5px 10px;"></div>
                        <a href="http://pinterest.com/pin/create/button/?url=http%3A%2F%2Fthemes.mediacreed.com%2Fhtml%2Fsynergy%2F&amp;media=http%3A%2F%2Fthemes.mediacreed.com%2Fdesc_images%2Fprofile_preview_synergy.jpg&amp;description=Synergy%20is%20a%20responsive%20%26%20interactive%20fullscreen%20portfolio%20for%20artists%2C%20photographers%2C%20media%20agencies%2C%20restaurants%20and%20for%20everyone%20that%20wants%20to%20showcase%20their%20portfolio%20in%20a%20professional%20way." class="pin-it-button" count-layout="horizontal" target="_blank"><img border="0" src="//assets.pinterest.com/images/PinExt.png" title="Pin It"></a>
                    </div>
                    <!-- end social facebook, twitter and pinterest -->
                </div>
                <div class="full-width-info-holder-desc">
                    <p>Baseball Illustration</p>
                    <div class="custom-separator"></div>
                    <span>Pellentesque diam lectus, dapibus non lacinia in, vulputate sit amet dolor. Vivamus sollicitudin nunc sed augue lobortis at elementum nulla tristique. Sed elit elit, adipiscing eget molestie vulputate, euismod vitae mi. Proin posuere volutpat congue. Proin posuere volutpat congue.</span>
                    <!-- start social facebook, twitter and pinterest -->
                    <div id="social-holder">
                        <div id="social-holder-back" class="opacity_2"></div>
                        <div data-src="//www.facebook.com/plugins/like.php?href=http%3A%2F%2Fthemes.mediacreed.com%2F%23portfolio&amp;send=false&amp;layout=button_count&amp;width=85&amp;show_faces=false&amp;font=verdana&amp;colorscheme=light&amp;action=like&amp;height=21" style="float:left; border:none; overflow:hidden; width:82px; height:21px; margin: 6px 5px 5px 10px;"></div>
                        <div data-src="https://platform.twitter.com/widgets/tweet_button.html?url=http://themes.mediacreed.com/html/synergy/#portfolio&amp;text=Synergy - Awesome HTML Portfolio Template&amp;via=mediacreed" style="float:left; border:none; overflow:hidden; width:82px; height:21px; margin: 6px 5px 5px 10px;"></div>
                        <a href="http://pinterest.com/pin/create/button/?url=http%3A%2F%2Fthemes.mediacreed.com%2Fhtml%2Fsynergy%2F&amp;media=http%3A%2F%2Fthemes.mediacreed.com%2Fdesc_images%2Fprofile_preview_synergy.jpg&amp;description=Synergy%20is%20a%20responsive%20%26%20interactive%20fullscreen%20portfolio%20for%20artists%2C%20photographers%2C%20media%20agencies%2C%20restaurants%20and%20for%20everyone%20that%20wants%20to%20showcase%20their%20portfolio%20in%20a%20professional%20way." class="pin-it-button" count-layout="horizontal" target="_blank"><img border="0" src="//assets.pinterest.com/images/PinExt.png" title="Pin It"></a>
                    </div>
                    <!-- end social facebook, twitter and pinterest -->
                </div>
                <div class="full-width-info-holder-desc">
                    <p>Frames</p>
                    <div class="custom-separator"></div>
                    <span>Pellentesque diam lectus, dapibus non lacinia in, vulputate sit amet dolor. Vivamus sollicitudin nunc sed augue lobortis at elementum nulla tristique.</span>
                    <span>Vivamus porta, mi non vestibulum semper, massa nisl commodo est, quis fermentum nisi risus in erat. Phasellus sed nulla vel enim mattis tristique. Ut condimentum sodales leo, et mattis urna vulputate ut. </span>
                    <!-- start social facebook, twitter and pinterest -->
                    <div id="social-holder">
                        <div id="social-holder-back" class="opacity_2"></div>
                        <div data-src="//www.facebook.com/plugins/like.php?href=http%3A%2F%2Fthemes.mediacreed.com%2F%23portfolio&amp;send=false&amp;layout=button_count&amp;width=85&amp;show_faces=false&amp;font=verdana&amp;colorscheme=light&amp;action=like&amp;height=21" style="float:left; border:none; overflow:hidden; width:82px; height:21px; margin: 6px 5px 5px 10px;"></div>
                        <div data-src="https://platform.twitter.com/widgets/tweet_button.html?url=http://themes.mediacreed.com/html/synergy/#portfolio&amp;text=Synergy - Awesome HTML Portfolio Template&amp;via=mediacreed" style="float:left; border:none; overflow:hidden; width:82px; height:21px; margin: 6px 5px 5px 10px;"></div>
                        <a href="http://pinterest.com/pin/create/button/?url=http%3A%2F%2Fthemes.mediacreed.com%2Fhtml%2Fsynergy%2F&amp;media=http%3A%2F%2Fthemes.mediacreed.com%2Fdesc_images%2Fprofile_preview_synergy.jpg&amp;description=Synergy%20is%20a%20responsive%20%26%20interactive%20fullscreen%20portfolio%20for%20artists%2C%20photographers%2C%20media%20agencies%2C%20restaurants%20and%20for%20everyone%20that%20wants%20to%20showcase%20their%20portfolio%20in%20a%20professional%20way." class="pin-it-button" count-layout="horizontal" target="_blank"><img border="0" src="//assets.pinterest.com/images/PinExt.png" title="Pin It"></a>
                    </div>
                    <!-- end social facebook, twitter and pinterest -->
                </div>
                <div class="full-width-info-holder-desc">
                    <p>Caricature Dr. House</p>
                    <div class="custom-separator"></div>
                    <span>Pellentesque diam lectus, dapibus non lacinia in, vulputate sit amet dolor. Vivamus sollicitudin nunc sed augue lobortis at elementum nulla tristique.</span>
                    <span>Vivamus porta, mi non vestibulum semper, massa nisl commodo est, quis fermentum nisi risus in erat. Phasellus sed nulla vel enim mattis tristique. Ut condimentum sodales leo, et mattis urna vulputate ut. </span>
                    <!-- start social facebook, twitter and pinterest -->
                    <div id="social-holder">
                        <div id="social-holder-back" class="opacity_2"></div>
                        <div data-src="//www.facebook.com/plugins/like.php?href=http%3A%2F%2Fthemes.mediacreed.com%2F%23portfolio&amp;send=false&amp;layout=button_count&amp;width=85&amp;show_faces=false&amp;font=verdana&amp;colorscheme=light&amp;action=like&amp;height=21" style="float:left; border:none; overflow:hidden; width:82px; height:21px; margin: 6px 5px 5px 10px;"></div>
                        <div data-src="https://platform.twitter.com/widgets/tweet_button.html?url=http://themes.mediacreed.com/html/synergy/#portfolio&amp;text=Synergy - Awesome HTML Portfolio Template&amp;via=mediacreed" style="float:left; border:none; overflow:hidden; width:82px; height:21px; margin: 6px 5px 5px 10px;"></div>
                        <a href="http://pinterest.com/pin/create/button/?url=http%3A%2F%2Fthemes.mediacreed.com%2Fhtml%2Fsynergy%2F&amp;media=http%3A%2F%2Fthemes.mediacreed.com%2Fdesc_images%2Fprofile_preview_synergy.jpg&amp;description=Synergy%20is%20a%20responsive%20%26%20interactive%20fullscreen%20portfolio%20for%20artists%2C%20photographers%2C%20media%20agencies%2C%20restaurants%20and%20for%20everyone%20that%20wants%20to%20showcase%20their%20portfolio%20in%20a%20professional%20way." class="pin-it-button" count-layout="horizontal" target="_blank"><img border="0" src="//assets.pinterest.com/images/PinExt.png" title="Pin It"></a>
                    </div>
                    <!-- end social facebook, twitter and pinterest -->
                </div>
                <div class="full-width-info-holder-desc">
                    <p>The Node</p>
                    <div class="custom-separator"></div>
                    <span>Pellentesque diam lectus, dapibus non lacinia in, vulputate sit amet dolor. Vivamus sollicitudin nunc sed augue lobortis at elementum nulla tristique.</span>
                    <span>Vivamus porta, mi non vestibulum semper, massa nisl commodo est, quis fermentum nisi risus in erat. Phasellus sed nulla vel enim mattis tristique. Ut condimentum sodales leo, et mattis urna vulputate ut. </span>
                    <!-- start social facebook, twitter and pinterest -->
                    <div id="social-holder">
                        <div id="social-holder-back" class="opacity_2"></div>
                        <div data-src="//www.facebook.com/plugins/like.php?href=http%3A%2F%2Fthemes.mediacreed.com%2F%23portfolio&amp;send=false&amp;layout=button_count&amp;width=85&amp;show_faces=false&amp;font=verdana&amp;colorscheme=light&amp;action=like&amp;height=21" style="float:left; border:none; overflow:hidden; width:82px; height:21px; margin: 6px 5px 5px 10px;"></div>
                        <div data-src="https://platform.twitter.com/widgets/tweet_button.html?url=http://themes.mediacreed.com/html/synergy/#portfolio&amp;text=Synergy - Awesome HTML Portfolio Template&amp;via=mediacreed" style="float:left; border:none; overflow:hidden; width:82px; height:21px; margin: 6px 5px 5px 10px;"></div>
                        <a href="http://pinterest.com/pin/create/button/?url=http%3A%2F%2Fthemes.mediacreed.com%2Fhtml%2Fsynergy%2F&amp;media=http%3A%2F%2Fthemes.mediacreed.com%2Fdesc_images%2Fprofile_preview_synergy.jpg&amp;description=Synergy%20is%20a%20responsive%20%26%20interactive%20fullscreen%20portfolio%20for%20artists%2C%20photographers%2C%20media%20agencies%2C%20restaurants%20and%20for%20everyone%20that%20wants%20to%20showcase%20their%20portfolio%20in%20a%20professional%20way." class="pin-it-button" count-layout="horizontal" target="_blank"><img border="0" src="//assets.pinterest.com/images/PinExt.png" title="Pin It"></a>
                    </div>
                    <!-- end social facebook, twitter and pinterest -->
                </div>
                <div class="full-width-info-holder-desc">
                    <p>Carousel Bike</p>
                    <div class="custom-separator"></div>
                    <span>Pellentesque diam lectus, dapibus non lacinia in, vulputate sit amet dolor. Vivamus sollicitudin nunc sed augue lobortis at elementum nulla tristique.</span>
                    <span>Vivamus porta, mi non vestibulum semper, massa nisl commodo est, quis fermentum nisi risus in erat. Phasellus sed nulla vel enim mattis tristique. Ut condimentum sodales leo, et mattis urna vulputate ut. </span>
                    <!-- start social facebook, twitter and pinterest -->
                    <div id="social-holder">
                        <div id="social-holder-back" class="opacity_2"></div>
                        <div data-src="//www.facebook.com/plugins/like.php?href=http%3A%2F%2Fthemes.mediacreed.com%2F%23portfolio&amp;send=false&amp;layout=button_count&amp;width=85&amp;show_faces=false&amp;font=verdana&amp;colorscheme=light&amp;action=like&amp;height=21" style="float:left; border:none; overflow:hidden; width:82px; height:21px; margin: 6px 5px 5px 10px;"></div>
                        <div data-src="https://platform.twitter.com/widgets/tweet_button.html?url=http://themes.mediacreed.com/html/synergy/#portfolio&amp;text=Synergy - Awesome HTML Portfolio Template&amp;via=mediacreed" style="float:left; border:none; overflow:hidden; width:82px; height:21px; margin: 6px 5px 5px 10px;"></div>
                        <a href="http://pinterest.com/pin/create/button/?url=http%3A%2F%2Fthemes.mediacreed.com%2Fhtml%2Fsynergy%2F&amp;media=http%3A%2F%2Fthemes.mediacreed.com%2Fdesc_images%2Fprofile_preview_synergy.jpg&amp;description=Synergy%20is%20a%20responsive%20%26%20interactive%20fullscreen%20portfolio%20for%20artists%2C%20photographers%2C%20media%20agencies%2C%20restaurants%20and%20for%20everyone%20that%20wants%20to%20showcase%20their%20portfolio%20in%20a%20professional%20way." class="pin-it-button" count-layout="horizontal" target="_blank"><img border="0" src="//assets.pinterest.com/images/PinExt.png" title="Pin It"></a>
                    </div>
                    <!-- end social facebook, twitter and pinterest -->
                </div>
                <div class="full-width-info-holder-desc">
                    <p>Late Days Of A Legend</p>
                    <div class="custom-separator"></div>
                    <span>Pellentesque diam lectus, dapibus non lacinia in, vulputate sit amet dolor. Vivamus sollicitudin nunc sed augue lobortis at elementum nulla tristique.</span>
                    <span>Vivamus porta, mi non vestibulum semper, massa nisl commodo est, quis fermentum nisi risus in erat. Phasellus sed nulla vel enim mattis tristique. Ut condimentum sodales leo, et mattis urna vulputate ut. </span>
                    <!-- start social facebook, twitter and pinterest -->
                    <div id="social-holder">
                        <div id="social-holder-back" class="opacity_2"></div>
                        <div data-src="//www.facebook.com/plugins/like.php?href=http%3A%2F%2Fthemes.mediacreed.com%2F%23portfolio&amp;send=false&amp;layout=button_count&amp;width=85&amp;show_faces=false&amp;font=verdana&amp;colorscheme=light&amp;action=like&amp;height=21" style="float:left; border:none; overflow:hidden; width:82px; height:21px; margin: 6px 5px 5px 10px;"></div>
                        <div data-src="https://platform.twitter.com/widgets/tweet_button.html?url=http://themes.mediacreed.com/html/synergy/#portfolio&amp;text=Synergy - Awesome HTML Portfolio Template&amp;via=mediacreed" style="float:left; border:none; overflow:hidden; width:82px; height:21px; margin: 6px 5px 5px 10px;"></div>
                        <a href="http://pinterest.com/pin/create/button/?url=http%3A%2F%2Fthemes.mediacreed.com%2Fhtml%2Fsynergy%2F&amp;media=http%3A%2F%2Fthemes.mediacreed.com%2Fdesc_images%2Fprofile_preview_synergy.jpg&amp;description=Synergy%20is%20a%20responsive%20%26%20interactive%20fullscreen%20portfolio%20for%20artists%2C%20photographers%2C%20media%20agencies%2C%20restaurants%20and%20for%20everyone%20that%20wants%20to%20showcase%20their%20portfolio%20in%20a%20professional%20way." class="pin-it-button" count-layout="horizontal" target="_blank"><img border="0" src="//assets.pinterest.com/images/PinExt.png" title="Pin It"></a>
                    </div>
                    <!-- end social facebook, twitter and pinterest -->
                </div>
                <div class="full-width-info-holder-desc">
                    <p>Planet Of The Apes</p>
                    <div class="custom-separator"></div>
                    <span>Pellentesque diam lectus, dapibus non lacinia in, vulputate sit amet dolor. Vivamus sollicitudin nunc sed augue lobortis at elementum nulla tristique.</span>
                    <span>Vivamus porta, mi non vestibulum semper, massa nisl commodo est, quis fermentum nisi risus in erat. Phasellus sed nulla vel enim mattis tristique. Ut condimentum sodales leo, et mattis urna vulputate ut. </span>
                    <!-- start social facebook, twitter and pinterest -->
                    <div id="social-holder">
                        <div id="social-holder-back" class="opacity_2"></div>
                        <div data-src="//www.facebook.com/plugins/like.php?href=http%3A%2F%2Fthemes.mediacreed.com%2F%23portfolio&amp;send=false&amp;layout=button_count&amp;width=85&amp;show_faces=false&amp;font=verdana&amp;colorscheme=light&amp;action=like&amp;height=21" style="float:left; border:none; overflow:hidden; width:82px; height:21px; margin: 6px 5px 5px 10px;"></div>
                        <div data-src="https://platform.twitter.com/widgets/tweet_button.html?url=http://themes.mediacreed.com/html/synergy/#portfolio&amp;text=Synergy - Awesome HTML Portfolio Template&amp;via=mediacreed" style="float:left; border:none; overflow:hidden; width:82px; height:21px; margin: 6px 5px 5px 10px;"></div>
                        <a href="http://pinterest.com/pin/create/button/?url=http%3A%2F%2Fthemes.mediacreed.com%2Fhtml%2Fsynergy%2F&amp;media=http%3A%2F%2Fthemes.mediacreed.com%2Fdesc_images%2Fprofile_preview_synergy.jpg&amp;description=Synergy%20is%20a%20responsive%20%26%20interactive%20fullscreen%20portfolio%20for%20artists%2C%20photographers%2C%20media%20agencies%2C%20restaurants%20and%20for%20everyone%20that%20wants%20to%20showcase%20their%20portfolio%20in%20a%20professional%20way." class="pin-it-button" count-layout="horizontal" target="_blank"><img border="0" src="//assets.pinterest.com/images/PinExt.png" title="Pin It"></a>
                    </div>
                    <!-- end social facebook, twitter and pinterest -->
                </div>
                <div class="full-width-info-holder-desc">
                    <p>Cee-Ee</p>
                    <div class="custom-separator"></div>
                    <span>Pellentesque diam lectus, dapibus non lacinia in, vulputate sit amet dolor. Vivamus sollicitudin nunc sed augue lobortis at elementum nulla tristique.</span>
                    <span>Vivamus porta, mi non vestibulum semper, massa nisl commodo est, quis fermentum nisi risus in erat. Phasellus sed nulla vel enim mattis tristique. Ut condimentum sodales leo, et mattis urna vulputate ut. </span>
                    <!-- start social facebook, twitter and pinterest -->
                    <div id="social-holder">
                        <div id="social-holder-back" class="opacity_2"></div>
                        <div data-src="//www.facebook.com/plugins/like.php?href=http%3A%2F%2Fthemes.mediacreed.com%2F%23portfolio&amp;send=false&amp;layout=button_count&amp;width=85&amp;show_faces=false&amp;font=verdana&amp;colorscheme=light&amp;action=like&amp;height=21" style="float:left; border:none; overflow:hidden; width:82px; height:21px; margin: 6px 5px 5px 10px;"></div>
                        <div data-src="https://platform.twitter.com/widgets/tweet_button.html?url=http://themes.mediacreed.com/html/synergy/#portfolio&amp;text=Synergy - Awesome HTML Portfolio Template&amp;via=mediacreed" style="float:left; border:none; overflow:hidden; width:82px; height:21px; margin: 6px 5px 5px 10px;"></div>
                        <a href="http://pinterest.com/pin/create/button/?url=http%3A%2F%2Fthemes.mediacreed.com%2Fhtml%2Fsynergy%2F&amp;media=http%3A%2F%2Fthemes.mediacreed.com%2Fdesc_images%2Fprofile_preview_synergy.jpg&amp;description=Synergy%20is%20a%20responsive%20%26%20interactive%20fullscreen%20portfolio%20for%20artists%2C%20photographers%2C%20media%20agencies%2C%20restaurants%20and%20for%20everyone%20that%20wants%20to%20showcase%20their%20portfolio%20in%20a%20professional%20way." class="pin-it-button" count-layout="horizontal" target="_blank"><img border="0" src="//assets.pinterest.com/images/PinExt.png" title="Pin It"></a>
                    </div>
                    <!-- end social facebook, twitter and pinterest -->
                </div>
                <div class="full-width-info-holder-desc">
                    <p>Shopping Spree</p>
                    <div class="custom-separator"></div>
                    <span>Pellentesque diam lectus, dapibus non lacinia in, vulputate sit amet dolor. Vivamus sollicitudin nunc sed augue lobortis at elementum nulla tristique.</span>
                    <span>Vivamus porta, mi non vestibulum semper, massa nisl commodo est, quis fermentum nisi risus in erat. Phasellus sed nulla vel enim mattis tristique. Ut condimentum sodales leo, et mattis urna vulputate ut. </span>
                    <!-- start social facebook, twitter and pinterest -->
                    <div id="social-holder">
                        <div id="social-holder-back" class="opacity_2"></div>
                        <div data-src="//www.facebook.com/plugins/like.php?href=http%3A%2F%2Fthemes.mediacreed.com%2F%23portfolio&amp;send=false&amp;layout=button_count&amp;width=85&amp;show_faces=false&amp;font=verdana&amp;colorscheme=light&amp;action=like&amp;height=21" style="float:left; border:none; overflow:hidden; width:82px; height:21px; margin: 6px 5px 5px 10px;"></div>
                        <div data-src="https://platform.twitter.com/widgets/tweet_button.html?url=http://themes.mediacreed.com/html/synergy/#portfolio&amp;text=Synergy - Awesome HTML Portfolio Template&amp;via=mediacreed" style="float:left; border:none; overflow:hidden; width:82px; height:21px; margin: 6px 5px 5px 10px;"></div>
                        <a href="http://pinterest.com/pin/create/button/?url=http%3A%2F%2Fthemes.mediacreed.com%2Fhtml%2Fsynergy%2F&amp;media=http%3A%2F%2Fthemes.mediacreed.com%2Fdesc_images%2Fprofile_preview_synergy.jpg&amp;description=Synergy%20is%20a%20responsive%20%26%20interactive%20fullscreen%20portfolio%20for%20artists%2C%20photographers%2C%20media%20agencies%2C%20restaurants%20and%20for%20everyone%20that%20wants%20to%20showcase%20their%20portfolio%20in%20a%20professional%20way." class="pin-it-button" count-layout="horizontal" target="_blank"><img border="0" src="//assets.pinterest.com/images/PinExt.png" title="Pin It"></a>
                    </div>
                    <!-- end social facebook, twitter and pinterest -->
                </div>
                <div class="full-width-info-holder-desc">
                    <p>Proteigon</p>
                    <div class="custom-separator"></div>
                    <span>Pellentesque diam lectus, dapibus non lacinia in, vulputate sit amet dolor. Vivamus sollicitudin nunc sed augue lobortis at elementum nulla tristique.</span>
                    <span>Vivamus porta, mi non vestibulum semper, massa nisl commodo est, quis fermentum nisi risus in erat. Phasellus sed nulla vel enim mattis tristique. Ut condimentum sodales leo, et mattis urna vulputate ut. </span>
                    <!-- start social facebook, twitter and pinterest -->
                    <div id="social-holder">
                        <div id="social-holder-back" class="opacity_2"></div>
                        <div data-src="//www.facebook.com/plugins/like.php?href=http%3A%2F%2Fthemes.mediacreed.com%2F%23portfolio&amp;send=false&amp;layout=button_count&amp;width=85&amp;show_faces=false&amp;font=verdana&amp;colorscheme=light&amp;action=like&amp;height=21" style="float:left; border:none; overflow:hidden; width:82px; height:21px; margin: 6px 5px 5px 10px;"></div>
                        <div data-src="https://platform.twitter.com/widgets/tweet_button.html?url=http://themes.mediacreed.com/html/synergy/#portfolio&amp;text=Synergy - Awesome HTML Portfolio Template&amp;via=mediacreed" style="float:left; border:none; overflow:hidden; width:82px; height:21px; margin: 6px 5px 5px 10px;"></div>
                        <a href="http://pinterest.com/pin/create/button/?url=http%3A%2F%2Fthemes.mediacreed.com%2Fhtml%2Fsynergy%2F&amp;media=http%3A%2F%2Fthemes.mediacreed.com%2Fdesc_images%2Fprofile_preview_synergy.jpg&amp;description=Synergy%20is%20a%20responsive%20%26%20interactive%20fullscreen%20portfolio%20for%20artists%2C%20photographers%2C%20media%20agencies%2C%20restaurants%20and%20for%20everyone%20that%20wants%20to%20showcase%20their%20portfolio%20in%20a%20professional%20way." class="pin-it-button" count-layout="horizontal" target="_blank"><img border="0" src="//assets.pinterest.com/images/PinExt.png" title="Pin It"></a>
                    </div>
                    <!-- end social facebook, twitter and pinterest -->
                </div>
                <div class="full-width-info-holder-desc">
                    <p>Oh My Gosh</p>
                    <div class="custom-separator"></div>
                    <span>Pellentesque diam lectus, dapibus non lacinia in, vulputate sit amet dolor. Vivamus sollicitudin nunc sed augue lobortis at elementum nulla tristique.</span>
                    <span>Vivamus porta, mi non vestibulum semper, massa nisl commodo est, quis fermentum nisi risus in erat. Phasellus sed nulla vel enim mattis tristique. Ut condimentum sodales leo, et mattis urna vulputate ut. </span>
                    <!-- start social facebook, twitter and pinterest -->
                    <div id="social-holder">
                        <div id="social-holder-back" class="opacity_2"></div>
                        <div data-src="//www.facebook.com/plugins/like.php?href=http%3A%2F%2Fthemes.mediacreed.com%2F%23portfolio&amp;send=false&amp;layout=button_count&amp;width=85&amp;show_faces=false&amp;font=verdana&amp;colorscheme=light&amp;action=like&amp;height=21" style="float:left; border:none; overflow:hidden; width:82px; height:21px; margin: 6px 5px 5px 10px;"></div>
                        <div data-src="https://platform.twitter.com/widgets/tweet_button.html?url=http://themes.mediacreed.com/html/synergy/#portfolio&amp;text=Synergy - Awesome HTML Portfolio Template&amp;via=mediacreed" style="float:left; border:none; overflow:hidden; width:82px; height:21px; margin: 6px 5px 5px 10px;"></div>
                        <a href="http://pinterest.com/pin/create/button/?url=http%3A%2F%2Fthemes.mediacreed.com%2Fhtml%2Fsynergy%2F&amp;media=http%3A%2F%2Fthemes.mediacreed.com%2Fdesc_images%2Fprofile_preview_synergy.jpg&amp;description=Synergy%20is%20a%20responsive%20%26%20interactive%20fullscreen%20portfolio%20for%20artists%2C%20photographers%2C%20media%20agencies%2C%20restaurants%20and%20for%20everyone%20that%20wants%20to%20showcase%20their%20portfolio%20in%20a%20professional%20way." class="pin-it-button" count-layout="horizontal" target="_blank"><img border="0" src="//assets.pinterest.com/images/PinExt.png" title="Pin It"></a>
                    </div>
                    <!-- end social facebook, twitter and pinterest -->
                </div>
                <div class="full-width-info-holder-desc">
                    <p>Media Overdose</p>
                    <div class="custom-separator"></div>
                    <span>Pellentesque diam lectus, dapibus non lacinia in, vulputate sit amet dolor. Vivamus sollicitudin nunc sed augue lobortis at elementum nulla tristique.</span>
                    <span>Vivamus porta, mi non vestibulum semper, massa nisl commodo est, quis fermentum nisi risus in erat. Phasellus sed nulla vel enim mattis tristique. Ut condimentum sodales leo, et mattis urna vulputate ut. </span>
                    <!-- start social facebook, twitter and pinterest -->
                    <div id="social-holder">
                        <div id="social-holder-back" class="opacity_2"></div>
                        <div data-src="//www.facebook.com/plugins/like.php?href=http%3A%2F%2Fthemes.mediacreed.com%2F%23portfolio&amp;send=false&amp;layout=button_count&amp;width=85&amp;show_faces=false&amp;font=verdana&amp;colorscheme=light&amp;action=like&amp;height=21" style="float:left; border:none; overflow:hidden; width:82px; height:21px; margin: 6px 5px 5px 10px;"></div>
                        <div data-src="https://platform.twitter.com/widgets/tweet_button.html?url=http://themes.mediacreed.com/html/synergy/#portfolio&amp;text=Synergy - Awesome HTML Portfolio Template&amp;via=mediacreed" style="float:left; border:none; overflow:hidden; width:82px; height:21px; margin: 6px 5px 5px 10px;"></div>
                        <a href="http://pinterest.com/pin/create/button/?url=http%3A%2F%2Fthemes.mediacreed.com%2Fhtml%2Fsynergy%2F&amp;media=http%3A%2F%2Fthemes.mediacreed.com%2Fdesc_images%2Fprofile_preview_synergy.jpg&amp;description=Synergy%20is%20a%20responsive%20%26%20interactive%20fullscreen%20portfolio%20for%20artists%2C%20photographers%2C%20media%20agencies%2C%20restaurants%20and%20for%20everyone%20that%20wants%20to%20showcase%20their%20portfolio%20in%20a%20professional%20way." class="pin-it-button" count-layout="horizontal" target="_blank"><img border="0" src="//assets.pinterest.com/images/PinExt.png" title="Pin It"></a>
                    </div>
                    <!-- end social facebook, twitter and pinterest -->
                </div>
                <div class="full-width-info-holder-desc">
                    <p>Qubsik Project</p>
                    <div class="custom-separator"></div>
                    <span>Pellentesque diam lectus, dapibus non lacinia in, vulputate sit amet dolor. Vivamus sollicitudin nunc sed augue lobortis at elementum nulla tristique.</span>
                    <span>Vivamus porta, mi non vestibulum semper, massa nisl commodo est, quis fermentum nisi risus in erat. Phasellus sed nulla vel enim mattis tristique. Ut condimentum sodales leo, et mattis urna vulputate ut. </span>
                    <!-- start social facebook, twitter and pinterest -->
                    <div id="social-holder">
                        <div id="social-holder-back" class="opacity_2"></div>
                        <div data-src="//www.facebook.com/plugins/like.php?href=http%3A%2F%2Fthemes.mediacreed.com%2F%23portfolio&amp;send=false&amp;layout=button_count&amp;width=85&amp;show_faces=false&amp;font=verdana&amp;colorscheme=light&amp;action=like&amp;height=21" style="float:left; border:none; overflow:hidden; width:82px; height:21px; margin: 6px 5px 5px 10px;"></div>
                        <div data-src="https://platform.twitter.com/widgets/tweet_button.html?url=http://themes.mediacreed.com/html/synergy/#portfolio&amp;text=Synergy - Awesome HTML Portfolio Template&amp;via=mediacreed" style="float:left; border:none; overflow:hidden; width:82px; height:21px; margin: 6px 5px 5px 10px;"></div>
                        <a href="http://pinterest.com/pin/create/button/?url=http%3A%2F%2Fthemes.mediacreed.com%2Fhtml%2Fsynergy%2F&amp;media=http%3A%2F%2Fthemes.mediacreed.com%2Fdesc_images%2Fprofile_preview_synergy.jpg&amp;description=Synergy%20is%20a%20responsive%20%26%20interactive%20fullscreen%20portfolio%20for%20artists%2C%20photographers%2C%20media%20agencies%2C%20restaurants%20and%20for%20everyone%20that%20wants%20to%20showcase%20their%20portfolio%20in%20a%20professional%20way." class="pin-it-button" count-layout="horizontal" target="_blank"><img border="0" src="//assets.pinterest.com/images/PinExt.png" title="Pin It"></a>
                    </div>
                    <!-- end social facebook, twitter and pinterest -->
                </div>
                <div class="full-width-info-holder-desc">
                    <p>Modern House</p>
                    <div class="custom-separator"></div>
                    <span>Pellentesque diam lectus, dapibus non lacinia in, vulputate sit amet dolor. Vivamus sollicitudin nunc sed augue lobortis at elementum nulla tristique.</span>
                    <span>Vivamus porta, mi non vestibulum semper, massa nisl commodo est, quis fermentum nisi risus in erat. Phasellus sed nulla vel enim mattis tristique. Ut condimentum sodales leo, et mattis urna vulputate ut. </span>
                    <!-- start social facebook, twitter and pinterest -->
                    <div id="social-holder">
                        <div id="social-holder-back" class="opacity_2"></div>
                        <div data-src="//www.facebook.com/plugins/like.php?href=http%3A%2F%2Fthemes.mediacreed.com%2F%23portfolio&amp;send=false&amp;layout=button_count&amp;width=85&amp;show_faces=false&amp;font=verdana&amp;colorscheme=light&amp;action=like&amp;height=21" style="float:left; border:none; overflow:hidden; width:82px; height:21px; margin: 6px 5px 5px 10px;"></div>
                        <div data-src="https://platform.twitter.com/widgets/tweet_button.html?url=http://themes.mediacreed.com/html/synergy/#portfolio&amp;text=Synergy - Awesome HTML Portfolio Template&amp;via=mediacreed" style="float:left; border:none; overflow:hidden; width:82px; height:21px; margin: 6px 5px 5px 10px;"></div>
                        <a href="http://pinterest.com/pin/create/button/?url=http%3A%2F%2Fthemes.mediacreed.com%2Fhtml%2Fsynergy%2F&amp;media=http%3A%2F%2Fthemes.mediacreed.com%2Fdesc_images%2Fprofile_preview_synergy.jpg&amp;description=Synergy%20is%20a%20responsive%20%26%20interactive%20fullscreen%20portfolio%20for%20artists%2C%20photographers%2C%20media%20agencies%2C%20restaurants%20and%20for%20everyone%20that%20wants%20to%20showcase%20their%20portfolio%20in%20a%20professional%20way." class="pin-it-button" count-layout="horizontal" target="_blank"><img border="0" src="//assets.pinterest.com/images/PinExt.png" title="Pin It"></a>
                    </div>
                    <!-- end social facebook, twitter and pinterest -->
                </div>
                <div class="full-width-info-holder-desc">
                    <p>Red Passion</p>
                    <div class="custom-separator"></div>
                    <span>Pellentesque diam lectus, dapibus non lacinia in, vulputate sit amet dolor. Vivamus sollicitudin nunc sed augue lobortis at elementum nulla tristique.</span>
                    <span>Vivamus porta, mi non vestibulum semper, massa nisl commodo est, quis fermentum nisi risus in erat. Phasellus sed nulla vel enim mattis tristique. Ut condimentum sodales leo, et mattis urna vulputate ut. </span>
                    <!-- start social facebook, twitter and pinterest -->
                    <div id="social-holder">
                        <div id="social-holder-back" class="opacity_2"></div>
                        <div data-src="//www.facebook.com/plugins/like.php?href=http%3A%2F%2Fthemes.mediacreed.com%2F%23portfolio&amp;send=false&amp;layout=button_count&amp;width=85&amp;show_faces=false&amp;font=verdana&amp;colorscheme=light&amp;action=like&amp;height=21" style="float:left; border:none; overflow:hidden; width:82px; height:21px; margin: 6px 5px 5px 10px;"></div>
                        <div data-src="https://platform.twitter.com/widgets/tweet_button.html?url=http://themes.mediacreed.com/html/synergy/#portfolio&amp;text=Synergy - Awesome HTML Portfolio Template&amp;via=mediacreed" style="float:left; border:none; overflow:hidden; width:82px; height:21px; margin: 6px 5px 5px 10px;"></div>
                        <a href="http://pinterest.com/pin/create/button/?url=http%3A%2F%2Fthemes.mediacreed.com%2Fhtml%2Fsynergy%2F&amp;media=http%3A%2F%2Fthemes.mediacreed.com%2Fdesc_images%2Fprofile_preview_synergy.jpg&amp;description=Synergy%20is%20a%20responsive%20%26%20interactive%20fullscreen%20portfolio%20for%20artists%2C%20photographers%2C%20media%20agencies%2C%20restaurants%20and%20for%20everyone%20that%20wants%20to%20showcase%20their%20portfolio%20in%20a%20professional%20way." class="pin-it-button" count-layout="horizontal" target="_blank"><img border="0" src="//assets.pinterest.com/images/PinExt.png" title="Pin It"></a>
                    </div>
                    <!-- end social facebook, twitter and pinterest -->
                </div>
                <div class="full-width-info-holder-desc">
                    <p>Opening Sequence | BUNRAKU </p>
                    <div class="custom-separator"></div>
                    <span>Pellentesque diam lectus, dapibus non lacinia in, vulputate sit amet dolor. Vivamus sollicitudin nunc sed augue lobortis at elementum nulla tristique.</span>
                    <span>Vivamus porta, mi non vestibulum semper, massa nisl commodo est, quis fermentum nisi risus in erat. Phasellus sed nulla vel enim mattis tristique. Ut condimentum sodales leo, et mattis urna vulputate ut. </span>
                    <!-- start social facebook, twitter and pinterest -->
                    <div id="social-holder">
                        <div id="social-holder-back" class="opacity_2"></div>
                        <div data-src="//www.facebook.com/plugins/like.php?href=http%3A%2F%2Fthemes.mediacreed.com%2F%23portfolio&amp;send=false&amp;layout=button_count&amp;width=85&amp;show_faces=false&amp;font=verdana&amp;colorscheme=light&amp;action=like&amp;height=21" style="float:left; border:none; overflow:hidden; width:82px; height:21px; margin: 6px 5px 5px 10px;"></div>
                        <div data-src="https://platform.twitter.com/widgets/tweet_button.html?url=http://themes.mediacreed.com/html/synergy/#portfolio&amp;text=Synergy - Awesome HTML Portfolio Template&amp;via=mediacreed" style="float:left; border:none; overflow:hidden; width:82px; height:21px; margin: 6px 5px 5px 10px;"></div>
                        <a href="http://pinterest.com/pin/create/button/?url=http%3A%2F%2Fthemes.mediacreed.com%2Fhtml%2Fsynergy%2F&amp;media=http%3A%2F%2Fthemes.mediacreed.com%2Fdesc_images%2Fprofile_preview_synergy.jpg&amp;description=Synergy%20is%20a%20responsive%20%26%20interactive%20fullscreen%20portfolio%20for%20artists%2C%20photographers%2C%20media%20agencies%2C%20restaurants%20and%20for%20everyone%20that%20wants%20to%20showcase%20their%20portfolio%20in%20a%20professional%20way." class="pin-it-button" count-layout="horizontal" target="_blank"><img border="0" src="//assets.pinterest.com/images/PinExt.png" title="Pin It"></a>
                    </div>
                    <!-- end social facebook, twitter and pinterest -->
                </div>
                <div class="full-width-info-holder-desc">
                    <p>Sleep Deprivation</p>
                    <div class="custom-separator"></div>
                    <span>Pellentesque diam lectus, dapibus non lacinia in, vulputate sit amet dolor. Vivamus sollicitudin nunc sed augue lobortis at elementum nulla tristique.</span>
                    <span>Vivamus porta, mi non vestibulum semper, massa nisl commodo est, quis fermentum nisi risus in erat. Phasellus sed nulla vel enim mattis tristique. Ut condimentum sodales leo, et mattis urna vulputate ut. </span>
                    <!-- start social facebook, twitter and pinterest -->
                    <div id="social-holder">
                        <div id="social-holder-back" class="opacity_2"></div>
                        <div data-src="//www.facebook.com/plugins/like.php?href=http%3A%2F%2Fthemes.mediacreed.com%2F%23portfolio&amp;send=false&amp;layout=button_count&amp;width=85&amp;show_faces=false&amp;font=verdana&amp;colorscheme=light&amp;action=like&amp;height=21" style="float:left; border:none; overflow:hidden; width:82px; height:21px; margin: 6px 5px 5px 10px;"></div>
                        <div data-src="https://platform.twitter.com/widgets/tweet_button.html?url=http://themes.mediacreed.com/html/synergy/#portfolio&amp;text=Synergy - Awesome HTML Portfolio Template&amp;via=mediacreed" style="float:left; border:none; overflow:hidden; width:82px; height:21px; margin: 6px 5px 5px 10px;"></div>
                        <a href="http://pinterest.com/pin/create/button/?url=http%3A%2F%2Fthemes.mediacreed.com%2Fhtml%2Fsynergy%2F&amp;media=http%3A%2F%2Fthemes.mediacreed.com%2Fdesc_images%2Fprofile_preview_synergy.jpg&amp;description=Synergy%20is%20a%20responsive%20%26%20interactive%20fullscreen%20portfolio%20for%20artists%2C%20photographers%2C%20media%20agencies%2C%20restaurants%20and%20for%20everyone%20that%20wants%20to%20showcase%20their%20portfolio%20in%20a%20professional%20way." class="pin-it-button" count-layout="horizontal" target="_blank"><img border="0" src="//assets.pinterest.com/images/PinExt.png" title="Pin It"></a>
                    </div>
                    <!-- end social facebook, twitter and pinterest -->
                </div>
                <div class="full-width-info-holder-desc">
                    <p>Streetbot</p>
                    <div class="custom-separator"></div>
                    <span>Pellentesque diam lectus, dapibus non lacinia in, vulputate sit amet dolor. Vivamus sollicitudin nunc sed augue lobortis at elementum nulla tristique.</span>
                    <span>Vivamus porta, mi non vestibulum semper, massa nisl commodo est, quis fermentum nisi risus in erat. Phasellus sed nulla vel enim mattis tristique. Ut condimentum sodales leo, et mattis urna vulputate ut. </span>
                    <!-- start social facebook, twitter and pinterest -->
                    <div id="social-holder">
                        <div id="social-holder-back" class="opacity_2"></div>
                        <div data-src="//www.facebook.com/plugins/like.php?href=http%3A%2F%2Fthemes.mediacreed.com%2F%23portfolio&amp;send=false&amp;layout=button_count&amp;width=85&amp;show_faces=false&amp;font=verdana&amp;colorscheme=light&amp;action=like&amp;height=21" style="float:left; border:none; overflow:hidden; width:82px; height:21px; margin: 6px 5px 5px 10px;"></div>
                        <div data-src="https://platform.twitter.com/widgets/tweet_button.html?url=http://themes.mediacreed.com/html/synergy/#portfolio&amp;text=Synergy - Awesome HTML Portfolio Template&amp;via=mediacreed" style="float:left; border:none; overflow:hidden; width:82px; height:21px; margin: 6px 5px 5px 10px;"></div>
                        <a href="http://pinterest.com/pin/create/button/?url=http%3A%2F%2Fthemes.mediacreed.com%2Fhtml%2Fsynergy%2F&amp;media=http%3A%2F%2Fthemes.mediacreed.com%2Fdesc_images%2Fprofile_preview_synergy.jpg&amp;description=Synergy%20is%20a%20responsive%20%26%20interactive%20fullscreen%20portfolio%20for%20artists%2C%20photographers%2C%20media%20agencies%2C%20restaurants%20and%20for%20everyone%20that%20wants%20to%20showcase%20their%20portfolio%20in%20a%20professional%20way." class="pin-it-button" count-layout="horizontal" target="_blank"><img border="0" src="//assets.pinterest.com/images/PinExt.png" title="Pin It"></a>
                    </div>
                    <!-- end social facebook, twitter and pinterest -->
                </div>
                <div class="full-width-info-holder-desc">
                    <p>Missed Relic</p>
                    <div class="custom-separator"></div>
                    <span>Pellentesque diam lectus, dapibus non lacinia in, vulputate sit amet dolor. Vivamus sollicitudin nunc sed augue lobortis at elementum nulla tristique.</span>
                    <span>Vivamus porta, mi non vestibulum semper, massa nisl commodo est, quis fermentum nisi risus in erat. Phasellus sed nulla vel enim mattis tristique. Ut condimentum sodales leo, et mattis urna vulputate ut. </span>
                    <!-- start social facebook, twitter and pinterest -->
                    <div id="social-holder">
                        <div id="social-holder-back" class="opacity_2"></div>
                        <div data-src="//www.facebook.com/plugins/like.php?href=http%3A%2F%2Fthemes.mediacreed.com%2F%23portfolio&amp;send=false&amp;layout=button_count&amp;width=85&amp;show_faces=false&amp;font=verdana&amp;colorscheme=light&amp;action=like&amp;height=21" style="float:left; border:none; overflow:hidden; width:82px; height:21px; margin: 6px 5px 5px 10px;"></div>
                        <div data-src="https://platform.twitter.com/widgets/tweet_button.html?url=http://themes.mediacreed.com/html/synergy/#portfolio&amp;text=Synergy - Awesome HTML Portfolio Template&amp;via=mediacreed" style="float:left; border:none; overflow:hidden; width:82px; height:21px; margin: 6px 5px 5px 10px;"></div>
                        <a href="http://pinterest.com/pin/create/button/?url=http%3A%2F%2Fthemes.mediacreed.com%2Fhtml%2Fsynergy%2F&amp;media=http%3A%2F%2Fthemes.mediacreed.com%2Fdesc_images%2Fprofile_preview_synergy.jpg&amp;description=Synergy%20is%20a%20responsive%20%26%20interactive%20fullscreen%20portfolio%20for%20artists%2C%20photographers%2C%20media%20agencies%2C%20restaurants%20and%20for%20everyone%20that%20wants%20to%20showcase%20their%20portfolio%20in%20a%20professional%20way." class="pin-it-button" count-layout="horizontal" target="_blank"><img border="0" src="//assets.pinterest.com/images/PinExt.png" title="Pin It"></a>
                    </div>
                    <!-- end social facebook, twitter and pinterest -->
                </div>
                <div class="full-width-info-holder-desc">
                    <p>Nothing To Lose</p>
                    <div class="custom-separator"></div>
                    <span>Pellentesque diam lectus, dapibus non lacinia in, vulputate sit amet dolor. Vivamus sollicitudin nunc sed augue lobortis at elementum nulla tristique.</span>
                    <span>Vivamus porta, mi non vestibulum semper, massa nisl commodo est, quis fermentum nisi risus in erat. Phasellus sed nulla vel enim mattis tristique. Ut condimentum sodales leo, et mattis urna vulputate ut. </span>
                    <!-- start social facebook, twitter and pinterest -->
                    <div id="social-holder">
                        <div id="social-holder-back" class="opacity_2"></div>
                        <div data-src="//www.facebook.com/plugins/like.php?href=http%3A%2F%2Fthemes.mediacreed.com%2F%23portfolio&amp;send=false&amp;layout=button_count&amp;width=85&amp;show_faces=false&amp;font=verdana&amp;colorscheme=light&amp;action=like&amp;height=21" style="float:left; border:none; overflow:hidden; width:82px; height:21px; margin: 6px 5px 5px 10px;"></div>
                        <div data-src="https://platform.twitter.com/widgets/tweet_button.html?url=http://themes.mediacreed.com/html/synergy/#portfolio&amp;text=Synergy - Awesome HTML Portfolio Template&amp;via=mediacreed" style="float:left; border:none; overflow:hidden; width:82px; height:21px; margin: 6px 5px 5px 10px;"></div>
                        <a href="http://pinterest.com/pin/create/button/?url=http%3A%2F%2Fthemes.mediacreed.com%2Fhtml%2Fsynergy%2F&amp;media=http%3A%2F%2Fthemes.mediacreed.com%2Fdesc_images%2Fprofile_preview_synergy.jpg&amp;description=Synergy%20is%20a%20responsive%20%26%20interactive%20fullscreen%20portfolio%20for%20artists%2C%20photographers%2C%20media%20agencies%2C%20restaurants%20and%20for%20everyone%20that%20wants%20to%20showcase%20their%20portfolio%20in%20a%20professional%20way." class="pin-it-button" count-layout="horizontal" target="_blank"><img border="0" src="//assets.pinterest.com/images/PinExt.png" title="Pin It"></a>
                    </div>
                    <!-- end social facebook, twitter and pinterest -->
                </div>
                <div class="full-width-info-holder-desc">
                    <p>Violen</p>
                    <div class="custom-separator"></div>
                    <span>Pellentesque diam lectus, dapibus non lacinia in, vulputate sit amet dolor. Vivamus sollicitudin nunc sed augue lobortis at elementum nulla tristique.</span>
                    <span>Vivamus porta, mi non vestibulum semper, massa nisl commodo est, quis fermentum nisi risus in erat. Phasellus sed nulla vel enim mattis tristique. Ut condimentum sodales leo, et mattis urna vulputate ut. </span>
                    <!-- start social facebook, twitter and pinterest -->
                    <div id="social-holder">
                        <div id="social-holder-back" class="opacity_2"></div>
                        <div data-src="//www.facebook.com/plugins/like.php?href=http%3A%2F%2Fthemes.mediacreed.com%2F%23portfolio&amp;send=false&amp;layout=button_count&amp;width=85&amp;show_faces=false&amp;font=verdana&amp;colorscheme=light&amp;action=like&amp;height=21" style="float:left; border:none; overflow:hidden; width:82px; height:21px; margin: 6px 5px 5px 10px;"></div>
                        <div data-src="https://platform.twitter.com/widgets/tweet_button.html?url=http://themes.mediacreed.com/html/synergy/#portfolio&amp;text=Synergy - Awesome HTML Portfolio Template&amp;via=mediacreed" style="float:left; border:none; overflow:hidden; width:82px; height:21px; margin: 6px 5px 5px 10px;"></div>
                        <a href="http://pinterest.com/pin/create/button/?url=http%3A%2F%2Fthemes.mediacreed.com%2Fhtml%2Fsynergy%2F&amp;media=http%3A%2F%2Fthemes.mediacreed.com%2Fdesc_images%2Fprofile_preview_synergy.jpg&amp;description=Synergy%20is%20a%20responsive%20%26%20interactive%20fullscreen%20portfolio%20for%20artists%2C%20photographers%2C%20media%20agencies%2C%20restaurants%20and%20for%20everyone%20that%20wants%20to%20showcase%20their%20portfolio%20in%20a%20professional%20way." class="pin-it-button" count-layout="horizontal" target="_blank"><img border="0" src="//assets.pinterest.com/images/PinExt.png" title="Pin It"></a>
                    </div>
                    <!-- end social facebook, twitter and pinterest -->
                </div>
                <div class="full-width-info-holder-desc">
                    <p>Sunset Background</p>
                    <div class="custom-separator"></div>
                    <span>Pellentesque diam lectus, dapibus non lacinia in, vulputate sit amet dolor. Vivamus sollicitudin nunc sed augue lobortis at elementum nulla tristique.</span>
                    <span>Vivamus porta, mi non vestibulum semper, massa nisl commodo est, quis fermentum nisi risus in erat. Phasellus sed nulla vel enim mattis tristique. Ut condimentum sodales leo, et mattis urna vulputate ut. </span>
                    <!-- start social facebook, twitter and pinterest -->
                    <div id="social-holder">
                        <div id="social-holder-back" class="opacity_2"></div>
                        <div data-src="//www.facebook.com/plugins/like.php?href=http%3A%2F%2Fthemes.mediacreed.com%2F%23portfolio&amp;send=false&amp;layout=button_count&amp;width=85&amp;show_faces=false&amp;font=verdana&amp;colorscheme=light&amp;action=like&amp;height=21" style="float:left; border:none; overflow:hidden; width:82px; height:21px; margin: 6px 5px 5px 10px;"></div>
                        <div data-src="https://platform.twitter.com/widgets/tweet_button.html?url=http://themes.mediacreed.com/html/synergy/#portfolio&amp;text=Synergy - Awesome HTML Portfolio Template&amp;via=mediacreed" style="float:left; border:none; overflow:hidden; width:82px; height:21px; margin: 6px 5px 5px 10px;"></div>
                        <a href="http://pinterest.com/pin/create/button/?url=http%3A%2F%2Fthemes.mediacreed.com%2Fhtml%2Fsynergy%2F&amp;media=http%3A%2F%2Fthemes.mediacreed.com%2Fdesc_images%2Fprofile_preview_synergy.jpg&amp;description=Synergy%20is%20a%20responsive%20%26%20interactive%20fullscreen%20portfolio%20for%20artists%2C%20photographers%2C%20media%20agencies%2C%20restaurants%20and%20for%20everyone%20that%20wants%20to%20showcase%20their%20portfolio%20in%20a%20professional%20way." class="pin-it-button" count-layout="horizontal" target="_blank"><img border="0" src="//assets.pinterest.com/images/PinExt.png" title="Pin It"></a>
                    </div>
                    <!-- end social facebook, twitter and pinterest -->
                </div>
            </div>
        </div>
    </div>
</div>

<div id="load-container">
</div>

<div id="loading-animation" style="right: -104px;">
    <img src="assets/loaders/loader.gif" width="16" height="11" alt="Synergy - loading animation">
</div>
<div id="footer-social-tooltip"></div>

<div id="console-log"></div>



</body></html>
