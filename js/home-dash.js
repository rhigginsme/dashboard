$(document).ready(function() {
  $.simpleWeather({
    location: 'Auburn, ME',
    woeid: '',
    unit: 'f',
    success: function(weather) {

      html = '<i class="icon-'+weather.code+'"></i> '+weather.temp+'&deg;'+weather.units.temp;
      $("#weather > h2").html(html);
      console.log(weather);
      console.log(weather.forecast[2].low);

      $("#forecast-open-1").html('<div>'+weather.forecast[1].day+'</div><i class="icon-'+weather.forecast[1].code+'"></i>');
      $("#forecast-open-2").html('<div>'+weather.forecast[2].day+'</div><i class="icon-'+weather.forecast[2].code+'"></i>');
      $("#forecast-open-3").html('<div>'+weather.forecast[3].day+'</div><i class="icon-'+weather.forecast[3].code+'"></i>');
      $("#forecast-open-4").html('<div>'+weather.forecast[4].day+'</div><i class="icon-'+weather.forecast[4].code+'"></i>');

      $('#forecast-1').prop('title', weather.forecast[1].day+' '+weather.forecast[1].date);
      $('#forecast-2').prop('title', weather.forecast[2].day+' '+weather.forecast[2].date);
      $('#forecast-3').prop('title', weather.forecast[3].day+' '+weather.forecast[3].date);
      $('#forecast-4').prop('title', weather.forecast[4].day+' '+weather.forecast[4].date);

      $("#forecast-1 > .date").html(weather.forecast[1].text);
      $("#forecast-2 > .date").html(weather.forecast[2].text);
      $("#forecast-3 > .date").html(weather.forecast[3].text);
      $("#forecast-4 > .date").html(weather.forecast[4].text);

      $("#forecast-1 > .temps").html('Low: '+weather.forecast[1].low+' / High: '+weather.forecast[1].high);
      $("#forecast-2 > .temps").html('Low: '+weather.forecast[2].low+'/ High: '+weather.forecast[2].high);
      $("#forecast-3 > .temps").html('Low: '+weather.forecast[3].low+' / High: '+weather.forecast[3].high);
      $("#forecast-4 > .temps").html('Low: '+weather.forecast[4].low+' / High: '+weather.forecast[4].high);

      $("#forecast-1 > .forecast").html('<img src="'+weather.forecast[1].image+'"/>');
      $("#forecast-2 > .forecast").html('<img src="'+weather.forecast[2].image+'"/>');
      $("#forecast-3 > .forecast").html('<img src="'+weather.forecast[3].image+'"/>');
      $("#forecast-4 > .forecast").html('<img src="'+weather.forecast[4].image+'"/>');
    },
    error: function(error) {
      $("#weather").html('<p>'+error+'</p>');
    }
  });
  $("#forecast-1").dialog({
    autoOpen: false,
    width: 502,
    height: 200,
    show: {
      effect: "scale",
      duration: 1000
    },
    hide: {
      effect: "scale",
      duration: 1000
    }
  }).css("font-size", "20px");

  $("#forecast-2").dialog({
    autoOpen: false,
    width: 502,
    height: 200,
    show: {
      effect: "scale",
      duration: 1000
    },
    hide: {
      effect: "scale",
      duration: 1000
    }
  }).css("font-size", "20px");

  $("#forecast-3").dialog({
    autoOpen: false,
    width: 502,
    height: 200,
    show: {
      effect: "scale",
      duration: 1000
    },
    hide: {
      effect: "scale",
      duration: 1000
    }
  }).css("font-size", "20px");

  $("#forecast-4").dialog({
    autoOpen: false,
    width: 502,
    height: 200,
    show: {
      effect: "scale",
      duration: 1000
    },
    hide: {
      effect: "scale",
      duration: 1000
    }
  }).css("font-size", "20px");

  $("#forecast-open-1").click(function() {
    $("#forecast-1").dialog({title: $("#forecast-1").attr('title')}).dialog("open");
  });
  $("#forecast-open-2").click(function() {
    $("#forecast-1").dialog({title: $("#forecast-2").attr('title')}).dialog("open");
  });
  $("#forecast-open-3").click(function() {
    $("#forecast-1").dialog({title: $("#forecast-3").attr('title')}).dialog("open");
  });
  $("#forecast-open-4").click(function() {
    $("#forecast-1").dialog({title: $("#forecast-4").attr('title')}).dialog("open");
  });

  startTime();
});

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
