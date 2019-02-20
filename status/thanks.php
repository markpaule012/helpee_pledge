<!DOCTYPE html>
<html lang="en" >

<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <title>Helpee</title>

    <link href="css/style.css?version=3" rel="stylesheet">
  
  
  

  
</head>

<body>

  
  <script src='https://cdnjs.cloudflare.com/ajax/libs/sketch.js/1.0.0/sketch.min.js'></script>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/stats.js/r11/Stats.min.js'></script>

  <div style="position: absolute; top: 40%; left: 50%; font-size: 7vw; transform: translate(-50%, -50%); font-family: FontAwesome, 'Open Sans', Verdana, sans-serif; color: #111;" id="total" >
		₱ 1000.00 
  </div>
  <div style="position: absolute; top: 50%; left: 50%; font-size: 1.5vw; transform: translate(-50%, -50%); font-family: FontAwesome, 'Open Sans', Verdana, sans-serif; color: #111;" id="total" >
		Thank you for your pledges!
  </div>
  
    <div style="position: absolute; top: 95%; left: 50%; font-size: 1vw; transform: translate(-50%, -50%); font-family: FontAwesome, 'Open Sans', Verdana, sans-serif; color: #111;" id="total" >
		Kindly wait for the email from CSR team for pledge confirmation.
	</div>
  

  <script type="text/javascript" src="../js/status.js"></script>
  <!-- JQuery -->
  <script type="text/javascript" src="../js/jquery-3.2.1.min.js"></script>
  <script>
  function loadlink(){
		$.ajax({
					url: "totalPledge.php",
					data: {},
					type: 'GET',
					success: function(data){
						$("#total").html("₱ " + data);
					}
		});
	}

	loadlink(); // This will run on page load
	setInterval(function(){
		loadlink() // this will run after every 5 seconds
	}, 5000);
  </script>


</body>

</html>
