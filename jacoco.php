<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="free-educational-responsive-web-template-webEdu">
	<meta name="author" content="webThemez.com">
	<title>Project Coyote</title>
	<link rel="favicon" href="assets/images/favicon.png">
    <link rel="shortcut icon" href="assets/images/favicon.png">
	<link rel="stylesheet" media="screen" href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700">
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/font-awesome.min.css"> 
	<link rel="stylesheet" href="assets/css/bootstrap-theme.css" media="screen"> 
	<link rel="stylesheet" href="assets/css/style.css">
    <link rel='stylesheet' id='camera-css'  href='assets/css/camera.css' type='text/css' media='all'> 
	<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
	<script src="assets/js/html5shiv.js"></script>
	<script src="assets/js/respond.min.js"></script>
	<![endif]-->
</head>
<body>
    <section class="main-contents">
        <h1 class="text-center page-title"><b>Project Coyote</b></h1>
    </section>
  <div class="logo">
    <a href="index.html"><img src="assets/images/ProjectCoyoteLogo.png" width="300" align="center"></a>
  </div>
	<div class="navbar navbar-inverse">
		<div class="container">
			<div class="navbar-header">
				<!-- Button for smallest screens -->
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
				
			</div>
			<div class="navbar-collapse collapse">
				<ul class="nav navbar-nav  mainNav">
					<li><a href="index.html">Home</a></li>
					<li class="active"><a href="jacoco.php">Jacoco</a></li>
                    <li><a href="futureWork.html">Future Work</a></li>
                    <li><a href="about.html">About</a></li>
				</ul>
			</div>
			<!--/.nav-collapse -->
		</div>
	</div>
     <section class="main-contents">
      <h3 class="text-center sub-texts">Teams Progress Overview</h3>
      <div class="container">
      <hr>
         <div class="item-section col-md-12 col-sm-4 col-xs-12">
             <p class="text-center"> <br><br>Teams Current Progress</p>
             <br><br>
<div class="progress">
  <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="43"
  aria-valuemin="0" aria-valuemax="100" style="width:43%">
    43% ALL TEAMS COMBINED
  </div>
</div>

<div class="progress">
  <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="69"
  aria-valuemin="0" aria-valuemax="100" style="width:69%">
    69% DELPHI
  </div>
</div>

<div class="progress">
  <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="53"
  aria-valuemin="0" aria-valuemax="100" style="width:53%">
    53% FIS
  </div>
</div>
     <div class="progress">
  <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="50"
  aria-valuemin="0" aria-valuemax="100" style="width:50%">
    50% FIREBIRDS
  </div>
</div>
<div class="progress">
  <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="67"
  aria-valuemin="0" aria-valuemax="100" style="width:67%">
    67% QUEUEX
  </div>
</div>
<div class="progress">
  <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="99"
  aria-valuemin="0" aria-valuemax="100" style="width:99%">
    99% SUSTAINING
  </div>
</div>             
          </div>
     </div>
  </section>
    <section class="main-contents">
      <h3 class="text-center sub-texts">View Code Coverage Reports</h3>
      <div class="container">
      <hr>
         <div class="item-section col-md-12 col-sm-4 col-xs-12">
             <p class="text-center"> <br><br>Select which team report you would like to view</p>
             <br><br>
          </div>
     </div>
        <div class="text-center">
        <form method="post" id =selectForm action="getJacoco.php">
    <fieldset>
        <select name="teamName">
            <option value="QueueX">QueueX</option>
            <option value="Sustaining">Sustaining</option>
              <option value="Delphi">Delphi</option>
              <option value="Firebirds">Firebirds</option>
        </select>
        <br>
        <button type="submit">Get Jacoco'd</button>
    </fieldset>
</form>
            </div>
  </section>
  <footer>
    <div class="footer-bottom">
      <div class="container">
          <div class="item-section col-md-4 col-sm-4 col-xs-12">
          <p><i class="fa fa-envelope-o pull-left"> Contact</i><br></p>
          <p class="text-left">seamus.mackie@verint.com</p>
          <p class="text-left">john.valenti@verint.com</p>
        </div> 
          <div class="item-section col-md-4 col-sm-4 col-xs-12">
          <p class="text-center"><br><br><br><br>Copyright © 2018 - Project Coyote Productions. All Rights Reserved </p>
              </div>
          <div class="item-section col-md-4 col-sm-4 col-xs-12">
          <p class="text-right">A Team Auton Production by<br></p>
          <p class="text-right">Seamus Mackie</p>
          <p class="text-right">John Valenti</p>
        </div> 
      </div>
      </div>
  </footer>

	<!-- JavaScript libs are placed at the end of the document so the pages load faster -->
    <script src="assets/js/modernizr-latest.js"></script> 
    <script type='text/javascript' src='assets/js/jquery.min.js'></script>
    <script type='text/javascript' src='assets/js/jquery.mobile.customized.min.js'></script>
    <script type='text/javascript' src='assets/js/jquery.easing.1.3.js'></script> 
    <script type='text/javascript' src='assets/js/camera.min.js'></script> 
    <script src="assets/js/bootstrap.min.js"></script>    
    <script>
		jQuery(function(){
			
			jQuery('#camera_wrap_4').camera({
                transPeriod: 500,
                time: 3000,
				height: '600',
				loader: 'false',
				pagination: true,
				thumbnails: false,
				hover: false,
                playPause: false,
                navigation: false,
				opacityOnGrid: false,
				imagePath: 'assets/images/'
			});

		});      
	</script>   
</body>
</html>
