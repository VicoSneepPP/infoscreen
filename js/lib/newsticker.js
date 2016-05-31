(function ($, root, undefined) {

	$(function () {


var newsTickerWidth = 0;
var tickerDuration = 200000;
var contentDuration = 10000;
var newsDuration = 5000;

$(document).ready(function()
{

	isMobile=false;

	(function(a,b){
	if(/android.+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|symbian|treo|up\.(browser|link)|vodafone|wap|windows (ce|phone)|xda|xiino/i.test(a)||/1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|e\-|e\/|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(di|rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|xda(\-|2|g)|yas\-|your|zeto|zte\-/i.test(a.substr(0,4)))
		isMobile = true;
		})
		(navigator.userAgent||navigator.vendor||window.opera,'http://detectmobilebrowser.com/mobile');

	/** MAIN CONTENT **/
	if(!isMobile)
	{
		$("#content .content-block:first").addClass("active");
		$("#content .content-block").not(".active").css({opacity:0});
		setTimeout(nextContent, contentDuration);
	}
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
