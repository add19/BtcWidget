<?php
	$url = "https://www.bitstamp.net/api/ticker";
	$fgc = file_get_contents($url);
	$json = json_decode($fgc,true);
	$price = $json["last"];
	$price = number_format($price,2);
	$high = $json["high"];
	$high = number_format($high,2);
	$low = $json["low"];
	$low = number_format($low,2);
	$date = date("d-m-Y - h:i:sa");
	$open = $json["open"];	

	if($open < $price){
		$indicator = "+";
		$change = $price - $open;
		$percent = $change / $open;
		$percent = $percentChange;
		$percentChange = $indicator.number_format($percent, 2);
		$color = "green";
	}

	if($open > $price){
		$indicator = "-";
		$change = $open - $price;
		$percent = $change / $open;
		$percent = $percent;
		$percentChange = $indicator.number_format($percent, 2);	
		$color = "red";	
	}
$table=<<<EOT
<table width="100%">
		<tr> 
			<td rowspan="3" width="60%" id="lastPrice">$$price</td>
			<td align="right" style="color: $color;">$percentChange%</td>
		</tr>
		<tr>
			<td align="right">$$high</td>
		</tr>
		<tr>
			<td align="right">$$low</td>
		</tr>
		<tr>
			<td colspan="2" align="right" id="timeDate">$date</td>
		</tr>
	</table>
EOT;

echo $table;
?>