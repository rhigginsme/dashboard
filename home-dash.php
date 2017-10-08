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
        html = '<h2><i class="icon-'+weather.code+'"></i> '+weather.temp+'&deg;'+weather.units.temp+'</h2>';
        html += '<ul><li id="forecast-open-1"><i class="icon-'+weather.forecast[1].code+'"></i></li>';
        html += '<li id="forecast-open-2"><i class="icon-'+weather.forecast[2].code+'"></i></li>';
        html += '<li id="forecast-open-3"><i class="icon-'+weather.forecast[3].code+'"></i></li>';
        html += '<li id="forecast-open-4"><i class="icon-'+weather.forecast[4].code+'"></i></li></ul>';
        html += '<div id="forecast-1"><i class="icon-'+weather.forecast[1].code+'"></i></div>';
        html += '<div id="forecast-2"><i class="icon-'+weather.forecast[2].code+'"></i></div>';
        html += '<div id="forecast-3"><i class="icon-'+weather.forecast[3].code+'"></i></div>';
        html += '<div id="forecast-4"><i class="icon-'+weather.forecast[4].code+'"></i></div>';
        $("#weather").html(html);
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
    <div id="weather" style="width: 440px; height: 250px; float: left; border-radius: 2px; margin: 2px;"></div>
    <iframe width="512px" height="340px" src="https://app.actiontiles.com/panel/a8d24daf-0de1-449f-ab2f-3a03954d51e3" style="border:none;  border-radius: 2px; background-color: #4caf50; margin: 2px; float: left;"></iframe>
    <iframe width="440px" height="340px" src="http://www.google.com/custom?q=&btnG=Search" style="border:none;  border-radius: 2px; background-color: #4caf50; margin: 2px; float: left;"></iframe>

  </div>
</body>
</html>
