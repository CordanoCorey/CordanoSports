<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Untitled Document</title>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script>
function theNewsTicker() {
var $theContainer = $("div#tickerContainer");
var $theMask = $("div#tickerContainer");
var $theContent = $("div#tickerContent");
var $theHeadline = $("span.tickerHeadline");
var $theMaskWidth = $theMask.width();
var $theGap = 20;
var $theWidth = 0;
var $theCutOff = 0;
var $theTime = 20000;
var $theDelay = 1500;
var $theAdjustedSpeed = 0;
$theHeadline.css("padding-right",$theGap + "px");
$theHeadline.each(function() {
$theWidth = $theWidth + $(this).outerWidth();
$(this).clone().appendTo($theContent);
});
$theCutOff = "-" + $theWidth - 1;
if ($theWidth > $theMaskWidth) {
$theWidth = $theWidth * 2;
setTimeout(function() {
theNewsTickerAnimation($theContent, $theCutOff, $theTime, $theAdjustedSpeed);
}, $theDelay);
}
$theContent.width($theWidth);
$theContent.hover(function() {
$theContent.stop(true);
$theLeftPosition = getCurrentTickerInformation($theContent);
}, function() {
$timeRemaining = calculateNewTimePercentage($theLeftPosition, $theCutOff, $theTime);
theNewsTickerAnimation($theContent, $theCutOff, $theTime, $timeRemaining);
});
}
function theNewsTickerAnimation(theContent, theCutoff, theTime, theAdjustedSpeed) {
if (theAdjustedSpeed == 0) {
theContent.stop().animate({left:theCutoff}, theTime, 'linear', function() {
theContent.css("left","0px");
theNewsTickerAnimation(theContent, theCutoff, theTime, theAdjustedSpeed);
});
} else {
theContent.stop().animate({left:theCutoff}, theAdjustedSpeed, 'linear', function() {
theContent.css("left","0px");
theAdjustedSpeed = 0;
theNewsTickerAnimation(theContent, theCutoff, theTime, theAdjustedSpeed);
});
}
}
function getCurrentTickerInformation(theContent) {
var $theLeftPosition = $(theContent).position();
$theLeftPosition = $theLeftPosition.left;
$theLeftPosition = parseInt($theLeftPosition);
return $theLeftPosition;
}
function calculateNewTimePercentage(theLeftPosition, theCutOff, theOrigSpeed) {
var $distancePercentage = theLeftPosition / theCutOff * 100;
$distancePercentage = parseInt($distancePercentage);
var $timeRemaining = $distancePercentage / 100 * theOrigSpeed;
$timeRemaining = parseInt(Math.abs($timeRemaining));
$timeRemaining = theOrigSpeed - $timeRemaining;
return $timeRemaining;
}
$(document).ready(function() {
theNewsTicker();
}); 
</script>

<style>
div#tickerContainer {
	width: 986px;
	height: 23px;
	border: 1px solid #000;
	overflow: hidden;
}
div#tickerMask {
	position: relative;
	width: 986px;
	height: 23px;
	overflow: hidden;
}
div#tickerContent {
	position: relative;
	height: 23px;
	left: 0px;
	background-color: #FFF;
}
span.tickerHeadline {
	float: left;
	font-size: 14px;
	line-height: 22px;
}
</style>

</head>

<body>

<div id="tickerContainer">
	<div id="tickerMask">
		<div id="tickerContent">
			<span class="tickerHeadline">Here is a sample <span> headline.</span>
			<span class="tickerHeadline">Use this to show headlines, breaking news or even stocks.</span>
			<span class="tickerHeadline"><b>WAL</b> <span style="color: #009900; font-weight: bold;">↑ 14.75</span></span>
			<span class="tickerHeadline"><b>GRPN</b> <span style="color: #990000; font-weight: bold;">↓ 3.12</span></span>
			<span class="tickerHeadline">So let's extend this bad boy out, see how it stretches and have ourselves a ball.</span>
		</div>
	</div>
</div>

</body>
</html>