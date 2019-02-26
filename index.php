<html>
  <head>
    <title>HoT Garage Door Control</title>
    <meta http-equiv="content-type" content="text/html; charset=windows-1252">
    <meta name="author" content="Brett G. Durrett">
    <meta name="description" content="Wen access for HoT Garage Controls">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <link rel="stylesheet" href="assets/css/main.css">

    <link rel="apple-touch-icon" sizes="180x180" href="favicon_package_v0.16/apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="favicon_package_v0.16/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="favicon_package_v0.16/favicon-16x16.png">
	<link rel="manifest" href="favicon_package_v0.16/site.webmanifest">
	<link rel="mask-icon" href="favicon_package_v0.16/safari-pinned-tab.svg" color="#5bbad5">
	<meta name="msapplication-TileColor" content="#da532c">
	<meta name="theme-color" content="#ffffff">


<style>
#overlay {
  position: fixed;
  display: none;
  width: 100%;
  height: 100%;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background-color: rgba(0,0,0,0.5);
  z-index: 2;
  cursor: pointer;
}

#text{
  position: absolute;
  top: 50%;
  left: 50%;
  font-size: 50px;
  color: white;
  transform: translate(-50%,-50%);
  -ms-transform: translate(-50%,-50%);
}
  </style>


  </head>
  <body>

<script>

function spinner() {
  document.getElementById("garage-door-button").className = "button primary fit disabled";
  document.getElementById("overlay").style.display = "block";
}

</script>




<div id="overlay" onclick="off()">
  <div id="text"><img src="images/lg.ajax-spinner-gif.gif"></div>
</div>


    <div style="width: 50%; margin: auto; text-align: center">
      <div>
	    <h1> HoT Garage Door </h1>
      <div> <a id='garage-door-button' href="open-door.php" class="button primary fit"  onclick="spinner()">Garage Door Button</a> </div>
      <br>
      <div> <a href="#" class="button primary fit disabled">Vacation Lock</a> </div>
	    <p><br>
	    </p>
	    <p>Debug: The relay status is: </p>
	    <?php echo "unknown" ?>
  		</div>
  	</div>

  </body>
</html>
