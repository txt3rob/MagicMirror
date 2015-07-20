<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<title>Magic Mirror</title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta http-equiv="cache-control" content="max-age=0" />
		<meta http-equiv="cache-control" content="no-cache" />
		<meta http-equiv="expires" content="0" />
		<meta http-equiv="expires" content="Tue, 01 Jan 1980 1:00:00 GMT" />
		<meta http-equiv="pragma" content="no-cache" />
		<script type="text/javascript" src="//code.jquery.com/jquery-latest.min.js"></script>
		<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>
		<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/weather-icons/1.3.2/css/weather-icons.min.css" />
		<link rel="stylesheet" type="text/css" href="css/main.css" />

	
	<script type="text/javascript">
		var gitHash = '<?php echo trim(`git rev-parse HEAD`) ?>';
	</script>
	
	
</head>
<body>

	<div class="top left"><div class="date small dimmed"></div><div class="time"></div><div class="calendar xxsmall"></div></div>
	<div class="top right"><div class="windsun small dimmed"></div><div class="temp"></div><div class="forecast small dimmed"></div></div>
	<div class="center-ver center-hor"></div>
	<div class="lower-third center-hor"><div class="compliment light"></div></div>
	<div class="bottom center-hor"><div class="news medium"></div></div>

</div>


<script type="text/javascript" src="js/jquery.feedToJSON.js"></script>
<script type="text/javascript" src="js/ical_parser.js"></script>
<script type="text/javascript" src="js/moment-with-langs.min.js"></script>
<script type="text/javascript" src="js/config.js"></script>
<script type="text/javascript" src="js/rrule.js"></script>
<script type="text/javascript" src="js/main.js?nocache=<?php echo md5(microtime()) ?>"></script>


</body>
</html>
