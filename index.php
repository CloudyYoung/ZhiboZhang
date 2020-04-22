<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="assets/ico/favicon.ico">

    <title>PORTFOLIO - ZHIBO ZHANG</title>

    <link href="assets/css/bootstrap.css" rel="stylesheet">

    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/font-awesome.min.css" rel="stylesheet">

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <div class="navbar navbar-default navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">PORTFOLIO</a>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
          </ul>
        </div>
      </div>
    </div>
	
	<div id="headerwrap">
	    <div class="container">
			<div class="row">
				<div class="col-lg-8 col-lg-offset-2">
					<h4>HELLO PEOPLE, MY NAME IS</h4>
					<h1>ZHIBO ZHANG</h1>
					<h4>AN ART STUDENT</h4>
				</div>
			</div>
	    </div>
	</div>
	
	<section id="works"></section>
	<div class="container">
		<div class="row centered mt mb">
			<h1>My Portfolio</h1>
			
		<?php
		
		$P = array(1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30);
		
		for($t = 1; $t <= 46; $t++){
		
		?>
			<div class="col-lg-4 col-md-4 col-sm-4 gallery">
				<img src="http://leafer.bj.bcebos.com/zhibozhang%2FC%20(<?php echo $t ?>).JPG" class="img-responsive">
			</div>
		<?php
		
		}
		
		?>
		</div>
	</div>
	

	<div id="footerwrap">
		<div class="container">
			<div class="row centered">
				<div class="col-lg-12">
					<p>Powered by His Best Friend Cloudy Young</p>
				</div>
			</div>
		</div>
	</div>
	

     <script src="assets/js/jquery.min.js"></script>
  </body>
    <script src="assets/js/bootstrap.min.js"></script>
  </body>
</html>
