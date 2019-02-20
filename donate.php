
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <title>Helpee</title>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Material Design Bootstrap -->
    <link href="css/mdb.min.css" rel="stylesheet">
    <link href="css/style.css?version=17" rel="stylesheet">
	
	<!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel='stylesheet' href='https://npmcdn.com/flickity@2/dist/flickity.css'>
	
	<!--Slider-->
	<link rel="stylesheet" href="css/page4a.css?version=3">
	
	<link rel="stylesheet" href="css/checkbox.css?version=1">

</head>

<body class="fade-right" style="background-color: #663399;">

	<header>
        <nav class="navbar navbar-expand-lg navbar-dark page-header">
            <div class="container">
					<img src="resources/logo-small.png" style="height: 40px; width: 40px; margin-left: 50%; transform: translateX(-20px);"></img>

            </div>
        </nav>
	</header>
    <main style="padding: 30px 10px 10px 10px; color: #fff; height: 100vh;">


		<div class="extra-margins"></div>

        <!--Main layout-->
        <div class="container">
			<div class="row">
					<!--Main column-->
					
					
				<div class="extra-margins"></div>
				<div class="extra-margins"></div>
				
				<div class="col-lg-12">
					<div class="divider-new">
						<h3 class="h3-responsive">Be Counted</h3>
					</div>
					
					
						<!--First columnn-->
	
							<img class="img-fluid" src="resources/change-life.jpg" alt="Change lives" style="margin-top: -30px;" ></img>
							
								<!-- Donate Slider -->
						
							
						
							<div>
								<hr>
							
								<div style="font-size: 20px; text-align: center;">
									<input type="text" id= "email" name="email" placeholder="Enter Email " class="email-input" style="width: 150px; font-size: 20px;"" ></input> @finastra.com
								</div>

								<div style="margin-top: 15px; text-align: center;">
										<i class="fa fa-info-circle align-middle" aria-hidden="true" style="font-size: 25px;"></i>
										<span class="align-middle">&nbsp;You may pledge multiple times!</span>
								</div>
								
								

									<div style="width: 290px; margin-left: 50%; transform: translateX(-145px);">
									
									
									  <div class="row">
										<div class="span6" id="add50"><div class="pokerchip flat blue"><div style="font-size: 25px; padding: 20px 10px 10px 20px; width: 100%;">₱50</div></div></div>
										<div class="span6" id="add100"><div class="pokerchip flat red"><div style="font-size: 25px; padding: 20px 10px 10px 10px; width: 100%;">₱100</div></div></div>
									  </div>
									  <div class="row">
										<div class="span6" id="add500"><div class="pokerchip flat orange"><div style="font-size: 25px; padding: 20px 10px 10px 10px; width: 100%;">₱500</div></div></div>
										<div class="span6" id="add1000"><div class="pokerchip flat green"><div style="font-size: 25px; padding: 20px 10px 10px 2px; width: 100%;">₱1000</div></div></div>
									  </div>
									</div>
									
								
								
								<div style="text-align: center; font-size: 20px;">
										Total Pledge: ₱ <span id="demo">0.00</span> 								
								</div>
								
								<button type="submit" class="btn btn-success mb-2" style="margin-top: 10px; margin-left: 50%;transform: translateX(-100px); width: 200px;" id="refresh">Check My Pledge</button>
								<div class="extra-margins"></div>
	
							</div>
	
						<!--First columnn-->
					

			<!--/.Main layout-->

				</div>
			</div>
		</div>
    </main>


    <!-- SCRIPTS -->

    <!-- JQuery -->
    <script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>

    <!-- Bootstrap dropdown -->
    <script type="text/javascript" src="js/popper.min.js"></script>

    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="js/bootstrap.min.js"></script>

    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="js/mdb.min.js"></script>
	
	<!--Slider script-->
	<script type="text/javascript" src="js/slider-script.js"></script>
	
		<script>
			function validate_email(){
				var txt = $('#email').val();  
                if (txt.length == 0) {  
                    alert('Please enter email address')  
                } 
			}
		
			$( "#add50" ).click(function() {
				validate_email();
				$.ajax({
					url: "addPledge.php",
					data: {
						email :  $("#email").val(),
						amount: 50
					},
					type: 'GET',
					success: function(data){
						$("#demo").html(data);
					}
				});
			});
			
			$( "#add100" ).click(function() {
				validate_email();
				$.ajax({
					url: "addPledge.php",
					data: {
						email :  $("#email").val(),
						amount: 100
					},
					type: 'GET',
					success: function(data){
						$("#demo").html(data);
					}
				});
			});
			
			$( "#add500" ).click(function() {
				validate_email();
				$.ajax({
					url: "addPledge.php",
					data: {
						email :  $("#email").val(),
						amount: 500
					},
					type: 'GET',
					success: function(data){
						$("#demo").html(data);
					}
				});
			});
			
			$( "#add1000" ).click(function() {
				validate_email();
				$.ajax({
					url: "addPledge.php",
					data: {
						email :  $("#email").val(),
						amount: 1000
					},
					type: 'GET',
					success: function(data){
						$("#demo").html(data);
					}
				});
			});
			
			$( "#refresh" ).click(function() {
				validate_email();
				$.ajax({
					url: "getPledge.php",
					data: {
						email :  $("#email").val(),
					},
					type: 'GET',
					success: function(data){
						$("#demo").html(data);
					}
				});
			});
		</script>

	
	<!-- Code to include html codes-->
	<script>
		function includeHTML() {
		  var z, i, elmnt, file, xhttp;
		  /*loop through a collection of all HTML elements:*/
		  z = document.getElementsByTagName("*");
		  for (i = 0; i < z.length; i++) {
			elmnt = z[i];
			/*search for elements with a certain atrribute:*/
			file = elmnt.getAttribute("w3-include-html");
			if (file) {
			  /*make an HTTP request using the attribute value as the file name:*/
			  xhttp = new XMLHttpRequest();
			  xhttp.onreadystatechange = function() {
				if (this.readyState == 4) {
				  if (this.status == 200) {elmnt.innerHTML = this.responseText;}
				  if (this.status == 404) {elmnt.innerHTML = "Page not found.";}
				  /*remove the attribute, and call this function once more:*/
				  elmnt.removeAttribute("w3-include-html");
				  includeHTML();
				}
			  } 
			  xhttp.open("GET", file, true);
			  xhttp.send();
			  /*exit the function:*/
			  return;
			}
		  }
		}
	</script>
	
	<script>
		$(document).ready(function(){
			  $(".fade-right").animate({left:0, opacity:"show"}, 300);
		});
	</script>

    <script>
        new WOW().init();
		includeHTML();
    </script>

</body>

</html>