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

    <link href="css/style.css?version=2" rel="stylesheet">
	
</head>

<body>

	

	<div class="splash">
		<img src = "resources/logo-small.png"></img>
	<div>



    <!-- SCRIPTS -->

    <!-- JQuery -->
    <script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>

    <!-- Bootstrap dropdown -->
    <script type="text/javascript" src="js/popper.min.js"></script>

    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="js/bootstrap.min.js"></script>

    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="js/mdb.min.js"></script>
	
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
			  
			  $( ".splash" ).animate({
				opacity: "show"
			  }, 1000, "linear", function() {
					  $( ".splash" ).animate({
						opacity: "hide",
					  }, 500, "linear", function() {
							//window.location.replace("status/thanks.php");
							window.location.replace("donate.php");
					  });
			  });
		});
	</script>

    <script>
        new WOW().init();
		includeHTML();
    </script>

</body>

</html>