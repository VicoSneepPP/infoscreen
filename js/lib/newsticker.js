(function ($, root, undefined) {

	$(function () {

	console.log("222323223232");

var newsTickerWidth = 0;
var tickerDuration = 200000;
var contentDuration = 10000;
var newsDuration = 5000;

$(document).ready(function()
{


	/** MAIN CONTENT **/
	$("#content .content-block:first").addClass("active");
	$("#content .content-block").not(".active").css({opacity:0});
	setTimeout(nextContent, contentDuration);

	/** NEWS CONTENT **/
	$("#news .news-item:first").addClass("active");
	$("#news .news-item").not(".active").css({top:$("#news .news-item").height() + "px"});
	setTimeout(nextNewsItem, newsDuration);

	updateNews();
	news_interval = setInterval(updateNews, 600000);
});

function updateNews()
{

	/** TICKER **/
	$.getJSON( "wp-content/themes/konenieuws/includes/pp-news/newsfeed.php?url=http://www.ad.nl/rss.xml", function(rss)
	{
		var titels = new Array();
		var div = $("#news-items.original");
		div.empty();

		var max = 15;
		$.each(rss.channel.item, function(key, val)
		{
			titels.push(val.title);
		});

		div.append(titels.join("&nbsp;&#x2010;&nbsp;") + "&nbsp;&#x2010;&nbsp;");

		$("#news-items").velocity("stop");
		$("#news-items.copy").remove();

		newsTickerWidth = $("#news-items.original").width();
		$("#news-items").clone().appendTo("#news-ticker").removeClass('original').addClass('copy');
		$("#news-items.original").css('left', '0px');
		$("#news-items.original").velocity({ left: "-" + newsTickerWidth + "px"}, {easing: 'linear', duration: tickerDuration / 2, complete: animateTicker})
		animateTicker("#news-items.copy");
	});
}


function animateTicker(element)
{
	$(element).css('left', newsTickerWidth + 'px');
	$(element).velocity({ left: "-" + newsTickerWidth + "px"}, {easing: 'linear', duration: tickerDuration, complete: animateTicker});
}

function nextContent()
{
	var current = $("#content .content-block.active");
	var next = current.next(".content-block");
	if(next.length === 0) { next = $("#content .content-block:first"); }
	current.velocity({opacity: 0}, {duration: 1000});
	next.velocity({opacity: 1}, {duration: 1000, complete:function()
	{
		$("#content .content-block.active").removeClass("active");
		$(this).addClass("active");
		setTimeout(nextContent, contentDuration)}
	});
}

function nextNewsItem()
{
	var current = $("#news .news-item.active");
	var next = current.next(".news-item");
	if(next.length === 0) { next = $("#news .news-item:first"); }
	current.velocity({top: '-' + (current.height()) + 'px'}, {duration: 1000});
	next.css({top:$("#news .news-item").height() + "px"});
	next.velocity({top: '0px'}, {duration: 1000, complete:function()
	{
		$("#news .news-item.active").removeClass("active");
		$(this).addClass("active");
		setTimeout(nextNewsItem, newsDuration)}
	});
}

	});

})(jQuery, this);
