<!doctype html>
<html style="height: 100%;">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0" />
  <meta name="apple-mobile-web-app-capable" content="yes" />
  <meta name="mobile-web-app-capable" content="yes">
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="description" content="HomeDash">
  <meta name="theme-color" content="#689F38">
  <meta name="msapplication-navbutton-color" content="#689F38">
  <meta name="apple-mobile-web-app-capable" content="yes">
  <meta name="apple-mobile-web-app-status-bar-style" content="black">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.7.0/themes/blitzer/jquery-ui.css">
  <base href="/">
  <title>Home Dashboard</title>
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/jquery.simpleWeather/3.1.0/jquery.simpleWeather.min.js"></script>
  <script>
  $(document).ready(function() {
    $.simpleWeather({
      location: 'Auburn, ME',
      woeid: '',
      unit: 'f',
      success: function(weather) {

        html = '<i class="icon-'+weather.code+'"></i> '+weather.temp+'&deg;'+weather.units.temp;
        $("#weather > h2").html(html);

        $("#forecast-open-1").html('<i class="icon-'+weather.forecast[1].code+'"></i>');
        $("#forecast-open-2").html('<i class="icon-'+weather.forecast[2].code+'"></i>');
        $("#forecast-open-3").html('<i class="icon-'+weather.forecast[3].code+'"></i>');
        $("#forecast-open-4").html('<i class="icon-'+weather.forecast[4].code+'"></i>');

        $("#forecast-1 > .date").html(weather.forecast[1].day+': '+weather.forecast[1].text);
        $("#forecast-2 > .date").html(weather.forecast[2].day+': '+weather.forecast[2].text);
        $("#forecast-3 > .date").html(weather.forecast[3].day+': '+weather.forecast[3].text);
        $("#forecast-4 > .date").html(weather.forecast[4].day+': '+weather.forecast[4].text);

        $("#forecast-1 > .temps").html('Low: '+weather.forecast[1].low+' / High: '+weather.forecast[1].high);
        $("#forecast-2 > .temps").html('Low: '+weather.forecast[2].low+'/ High: '+weather.forecast[2].high));
        $("#forecast-3 > .temps").html('Low: '+weather.forecast[3].low+' / High: '+weather.forecast[3].high));
        $("#forecast-4 > .temps").html('Low: '+weather.forecast[4].low+' / High: '+weather.forecast[4].high);

        //$("#forecast-1 > .forecast").html(weather.forecast[1].thumbnail);
        //$("#forecast-2 > .forecast").html(weather.forecast[2].thumbnail);
        //$("#forecast-3 > .forecast").html(weather.forecast[3].thumbnail);
        //$("#forecast-4 > .forecast").html(weather.forecast[4].thumbnail);
      },
      error: function(error) {
        $("#weather").html('<p>'+error+'</p>');
      }
    });
    $("#forecast-1").dialog({
      autoOpen: false,
      show: {
        effect: "blind",
        duration: 1000
      },
      hide: {
        effect: "explode",
        duration: 1000
      }
    });
    $("#forecast-2").dialog({
      autoOpen: false,
      show: {
        effect: "blind",
        duration: 1000
      },
      hide: {
        effect: "explode",
        duration: 1000
      }
    });
    $("#forecast-3").dialog({
      autoOpen: false,
      show: {
        effect: "blind",
        duration: 1000
      },
      hide: {
        effect: "explode",
        duration: 1000
      }
    });
    $("#forecast-4").dialog({
      autoOpen: false,
      show: {
        effect: "blind",
        duration: 1000
      },
      hide: {
        effect: "explode",
        duration: 1000
      }
    });

    $("#forecast-open-1").click(function() {
      $("#forecast-1").dialog("open");
    });
    $("#forecast-open-2").click(function() {
      $("#forecast-2").dialog("open");
    });
    $("#forecast-open-3").click(function() {
      $("#forecast-3").dialog("open");
    });
    $("#forecast-open-4").click(function() {
      $("#forecast-4").dialog("open");
    });
  });
});
</script>
<script>
function startTime() {
  var today = new Date();
  var hh = today.getHours();
  var m = today.getMinutes();
  var dd = "AM";
  var h = hh;
  if (h >= 12) {
    h = hh - 12;
    dd = "PM";
  }
  if (h == 0) {
    h = 12;
  }

  h = checkTime(h);
  m = checkTime(m);
  document.getElementById('clock').innerHTML =
  h + ":" + m + " " + dd;
  var t = setTimeout(startTime, 500);
}
function checkTime(i) {
  if (i < 10) {i = "0" + i};  // add zero in front of numbers < 10
  return i;
}
</script>
</head>

<body onload="startTime()" BGCOLOR="#000000" style="color: #FFF; width: 100%; height: 100%; margin: 0px; padding: 0px; overflow: hidden;" scroll="no">
  <div style="overflow: hidden; width: 100%; height: 100%;">
    <div id="time" class="<?php print strtolower(date("F")); ?>" style="width: 512px; height: 250px; text-align: center; vertical-align: middle; float: left; border-radius: 2px; margin: 2px;">
      <div style="padding-top: 45px;">
        <div id="clock" style="font-size: 100px;"></div>
        <div style="font-size: 30px;"><?php print date("l, F d"); ?></div>
      </div>
    </div>
    <div id="weather" style="width: 440px; height: 250px; float: left; border-radius: 2px; margin: 2px;">
      <h2></h2>
      <ul>
        <li id="forecast-open-1"></li>
        <li id="forecast-open-2"></li>
        <li id="forecast-open-3"></li>
        <li id="forecast-open-4"></li>
      </ul>
      <div id="forecast-1">
        <div class="forecast"></div>
        <div class="date"></div>
        <div class="temps"></div>
      </div>
      <div id="forecast-2">
        <div class="forecast"></div>
        <div class="date"></div>
        <div class="temps"></div>
      </div>
      <div id="forecast-3">
        <div class="forecast"></div>
        <div class="date"></div>
        <div class="temps"></div>
      </div>
      <div id="forecast-4">
        <div class="forecast"></div>
        <div class="date"></div>
        <div class="temps"></div>
      </div>'
    </div>
    <iframe width="512px" height="340px" src="https://app.actiontiles.com/panel/a8d24daf-0de1-449f-ab2f-3a03954d51e3" style="border:none;  border-radius: 2px; background-color: #4caf50; margin: 2px; float: left;"></iframe>
    <iframe src="" width="440" height="340" style="border:none;  border-radius: 2px; background-color: #4caf50; margin: 2px; float: left;"></iframe>

  </div>
</body>
</html>
