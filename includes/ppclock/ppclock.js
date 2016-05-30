/* VERSIE 1.0.0 */

(function ($, root, undefined) {

	$(function () {

		'use strict';

		// DOM ready, take it away



var maanden = ["januari", "februari", "maart", "april", "mei", "juni", "juli", "augustus", "september", "oktober", "november", "december"];
var dagen = ["zondag", "maandag", "dinsdag", "woensdag", "donderdag", "vrijdag", "zaterdag"];
var time_interval = setInterval(update_time, 250);
var date_interval = setInterval(update_date, 3600000);
function update_time()
{
	var date = new Date();
	var hours = date.getHours().toString();
	var minutes = date.getMinutes().toString();

	hours = hours.length < 2 ? "0" + hours : hours;
	minutes = minutes.length < 2 ? "0" + minutes : minutes;

	jQuery("#weer-tijd").text(hours + ":" + minutes);
}

function update_date()
{
	var date = new Date();
	jQuery("#weer-date").html(dagen[date.getDay()] + "<br />" + date.getDate() + " " + maanden[date.getMonth()]);
}


jQuery(document).ready(function($)
{
	update_date();
	fontsize();
	$.getJSON("/wp-content/themes/konenieuws/includes/ppclock/weerfeed.php", function(data)
	{
		$("#weer-stad").html(data.list[0].name);
		$("#weer-type").html(data.list[0].weather[0].description);
		$("#weer-icon").html("<img src='/wp-content/themes/konenieuws/includes/ppclock/weather/" + data.list[0].weather[0].icon + ".png' />");
		$("#weer-temp").html(Math.round(data.list[0].main.temp) + "&deg;C");
		//$("#weer-temp").html(Math.round((data.list[0].main.temp - 32) /1.8) + "&deg;C");
	});

});

function fontsize()
{
	var tijdSize = $("#weer").width() * 0.33;
	var tempSize = $("#weer-temp").width() * 0.30;
	var weerparent = $("#weer").parent().parent().width() - 32;
	weerparent = weerparent > 280 ? weerparent : 280;
	weerparent = weerparent < 340 ? weerparent : 340;

	$("#weer-tijd").css('font-size', tijdSize < 180 ? tijdSize : 180);
	$("#weer-temp").css('font-size', tempSize < 30 ? tempSize : 30);
	$("#weer").css('height', weerparent);
};
jQuery(window).resize(fontsize);


	});

})(jQuery, this);
