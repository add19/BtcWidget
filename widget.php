
<!DOCTYPE html>
<html>
<head>
<title>BTC WIDGET</title>
<style>
#container{
	width: 270px;
	height: 90px;
	border: 1px solid #000;
	background-color: #2f2f2f;
	overflow: hidden;
	border-radius: 3px;
	color: #fefdfb;
}
#lastPrice{
	font-size: 30px;
}
#timeDate{
	color: #999;
	font-size: 9px;
}
</style> 
<script src="//code.jquery.com/jquery-3.3.1.min.js"></script>
</head>
<body>
<div id="container">
 </div>
 <script>
 	$('document').ready(function(){
 			refreshData();
 		}
 		);

 	function refreshData(){
 		$('#container').load("data.php", function(){
 			setTimeout(refreshData, 5000);
 		});
 	};
 </script>
</body>
</html>