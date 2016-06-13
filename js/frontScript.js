(function ($, root, undefined) {

	$(function () {

		'use strict';

		$.getJSON("/wp-content/themes/konenieuws/includes/ppclock/weerfeed.php", function(data)
		{
			$("#weer-stad").html(data.list[0].name);
			$("#weer-type").html(data.list[0].weather[0].description);
			$("#weer-icon").html("<img src='/wp-content/themes/konenieuws/includes/ppclock/weather/" + data.list[0].weather[0].icon + ".png\' />");
			$("#weer-temp").html(Math.round(data.list[0].main.temp) + "&deg;C");
			//$("#weer-temp").html(Math.round((data.list[0].main.temp - 32) /1.8) + "&deg;C");
		});

		console.log('This is the front script for Kone');


	});


})(jQuery, this);
