<!DOCTYPE html>
<html lang="en" class="mdl-js">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
    <meta name="theme-color" content="#4caf50">
    <meta name="msapplication-navbutton-color" content="#4caf50">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="google" content="notranslate">
    <title>Proxima B</title>
    <link rel="icon" type="image/png" href="assets/img_proximab.png">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="assets/material.css">
</head>

<body>
    <div class="mdl-color--grey-100 mdl-layout mdl-js-layout mdl-layout--fixed-header">
        <header class="mdl-layout__header">
            <div class="mdl-layout__header-row">
                <span class="mdl-layout-title">Proxima B</span>
            </div>
        </header>
        <div class="mdl-layout__drawer">
            <span class="mdl-layout-title">Proxima B</span>
            <nav class="mdl-navigation">
                <?php
                    $navs = json_decode(file_get_contents('navs.json'), true);
                    foreach ($navs as $key => $value) {
                        echo '<a class="mdl-navigation__link" href="' . $value . '">' . $key . '</a>';
                    }
                ?>
            </nav>
        </div>
        <main class="mdl-layout__content">
            <div id="top"></div>
            <div class="mdl-grid">
                <div class="mdl-color--white mdl-shadow--2dp mdl-cell mdl-cell--8-col mdl-cell--2-offset-desktop" id="content" style="padding: 0 24px 0px 24px">
                    <h4>License</h4>
                    <ul class="mdl-list">
                        <li class="mdl-list__item mdl-list__item--two-line">
                            <span class="mdl-list__item-primary-content">
                                <a href="https://github.com/Astro36/ProximaB">Proxima B</a>
                                <span class="mdl-list__item-sub-title">© <a href="https://github.com/Astro36">Astro</a>, <a href="https://github.com/Astro36/ProximaB/blob/master/LICENSE">GPL-3.0</a></span>
                            </span>
                        </li>
                        <li class="mdl-list__item mdl-list__item--two-line">
                            <span class="mdl-list__item-primary-content">
                                <a href="https://github.com/google/material-design-lite">Material Design Lite</a>
                                <span class="mdl-list__item-sub-title">© <a href="https://github.com/google">Google</a>, <a href="https://github.com/google/material-design-lite/blob/master/LICENSE">Apache-2.0</a></span>
                            </span>
                        </li>
                        <li class="mdl-list__item mdl-list__item--two-line">
                            <span class="mdl-list__item-primary-content">
                                <a href="https://github.com/google/material-design-icons">Material Design Icons</a>
                                <span class="mdl-list__item-sub-title">© <a href="https://github.com/google">Google</a>, <a href="https://github.com/google/material-design-icons/blob/master/LICENSE">Apache-2.0</a></span>
                            </span>
                        </li>
                    </ul>
                </div>
                <div class="mdl-color--white mdl-shadow--2dp mdl-cell mdl-cell--8-col mdl-cell--2-offset-desktop" id="content" style="padding: 0 24px 24px 24px">
                    <h4>Resources</h4>
                    <h5>img_proximab.png</h5>
                    <div style="background: url('assets/img_proximab.png') center / cover; border-radius: 8px; width: 256px; height: 256px;">
                    </div>

                    <h5>img_milkyway.jpg</h5>
                    <div style="background: url('assets/img_milkyway.jpg') center / cover; border-radius: 8px; width: 256px; height: 256px;">
                    </div><br>
                    <a class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored" href="http://wallpaperswide.com/milky_way_wellington-wallpapers.html">Download</a><br>
                </div>
            </div>
            <footer class="mdl-mini-footer">
                <div class="mdl-mini-footer__left-section">
                    <div class="mdl-logo">Copyright 2017&nbsp;<a class="mdl-color-text--grey-100" href="https://github.com/Astro36">Astro</a>. All rights reserved.</div>
                </div>
                <div class="mdl-mini-footer__right-section">
                    <ul class="mdl-mini-footer__link-list">
                        <li><a href="index.php">Home</a></li>
                        <li><a href="#top">Back to Top</a></li>
                    </ul>
                </div>
            </footer>
        </main>
    </div>
    <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
</body>

</html>