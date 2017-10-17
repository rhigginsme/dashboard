<!doctype html>
<html style="height: 100%;">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0"/>
    <meta name="apple-mobile-web-app-capable" content="yes"/>
    <meta name="mobile-web-app-capable" content="yes">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="HomeDash">
    <meta name="theme-color" content="#689F38">
    <meta name="msapplication-navbutton-color" content="#689F38">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/ui-darkness/jquery-ui.css">
    <base href="/">
    <title>Home Dashboard</title>
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery.simpleWeather/3.1.0/jquery.simpleWeather.min.js"></script>
    <script src="dashboard/js/home-dash.js"></script>
</head>

<body>
<div id="main">
    <div id="time" class="<?php print strtolower(date("F")); ?>">
        <div id="clock-container" style="padding-top: 45px;">
            <div id="clock"></div>
            <div id="time-date"><?php print date("l, F d"); ?></div>
        </div>
    </div>
    <div id="weather">
        <h2></h2>
        <ul>
            <li id="forecast-open-1"></li>
            <li id="forecast-open-2"></li>
            <li id="forecast-open-3"></li>
            <li id="forecast-open-4"></li>
        </ul>
        <div id="forecast-1">
            <div class="forecast"></div>
            <h3 class="date"></h3>
            <h3 class="temps"></h3>
        </div>
        <div id="forecast-2">
            <div class="forecast"></div>
            <h3 class="date"></h3>
            <h3 class="temps"></h3>
        </div>
        <div id="forecast-3">
            <div class="forecast"></div>
            <h3 class="date"></h3>
            <h3 class="temps"></h3>
        </div>
        <div id="forecast-4">
            <div class="forecast"></div>
            <h3 class="date"></h3>
            <h3 class="temps"></h3>
        </div>
    </div>
    <iframe id="actiontiles" src="https://app.actiontiles.com/panel/a8d24daf-0de1-449f-ab2f-3a03954d51e3" width="512"
            height="340"></iframe>
    <div id="misc" src="" width="440" height="340">
        <div id="button-1" class="button"><img src="/dashboard/assets/calendar1600.png" width="150px"></div>
        <div id="button-2" class="button"><img src="/dashboard/assets/radar.png" width="150px"></div>
        <div id="button-3" class="button"><img src="/dashboard/assets/cam.png" width="150px"></div>
        <div id="button-4" class="button"><img src="/dashboard/assets/spotify1600.png" width="150px"></div>
        <div id="popup-1" class="popup">
            <iframe src="https://calendar.google.com/calendar/embed?showTitle=0&amp;showNav=0&amp;showDate=0&amp;showPrint=0&amp;showTabs=0&amp;showCalendars=0&amp;showTz=0&amp;height=600&amp;wkst=1&amp;bgcolor=%23ffffff&amp;src=veda36gc8o0golhveoou35bbu0%40group.calendar.google.com&amp;color=%232F6309&amp;src=ga3bhohuqau23o9847btp78qho%40group.calendar.google.com&amp;color=%232952A3&amp;ctz=America%2FNew_York" style="border-width:0" width="900" height="600" frameborder="0" scrolling="no"></iframe>
        </div>
        <div id="popup-2" class="popup"><iframe src="http://www.zoomforecast.com/zoomradar_weather_map/weather_image_user.php?key=kfUERqzaLyl3eHt" width="800" height="600" style="border:0" frameBorder="0" seamless="seamless" scrolling="no" allowfullscreen="true"></iframe></div>
        <div id="popup-3" class="popup">Add contents here for popup-3</div>
        <div id="popup-4" class="popup">Add contents here for popup-4</div>
    </div>
</div>
</body>
</html>
