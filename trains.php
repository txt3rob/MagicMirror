<?php




if (empty($_REQUEST['to']))
{
	header('Content-Type: application/json');
	echo json_encode("Error No To");
	exit();
} else 
{
	$to = $_REQUEST['to'];
}
if (empty($_REQUEST['from']))
{
	header('Content-Type: application/json');
	echo json_encode("from");
	exit();
} else{
	$from = $_REQUEST['from'];
}

function grab_trains ($from,$to)
{
// Get cURL resource
$curl = curl_init();
// Set some options - we are passing in a useragent too here
curl_setopt_array($curl, array(
    CURLOPT_RETURNTRANSFER => 1,
    CURLOPT_URL => 'http://ojp.nationalrail.co.uk/service/ldb/liveTrainsJson?departing=true&liveTrainsFrom='.$from.'&liveTrainsTo='.$to.'&serviceId=&f=',
    CURLOPT_USERAGENT => 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/43.0.2357.134 Safari/537.36'
));
// Send the request & save response to $resp
$resp = curl_exec($curl);
// Close request to clear up some resources
curl_close($curl);
$json = json_decode ($resp);
if ($json->error == "true")
{
	return json_encode ($json->errorMsg);
} else
{
	return json_encode ($json->trains);
}
}

echo grab_trains ($from,$to);
?>