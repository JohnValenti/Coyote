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
          <h2 class="text-center"><b>(JaCoCo Reports)</b></h2>
      </section>
      <div class="logo">
         <a href="index.html"><img src="assets/images/ProjectCoyoteLogo.png" width="300" align="center"></a>
          <br><br> 
      </div>
       <!-- Removed nav bar as now only one page, may add more later-->
      <!-- <div class="navbar navbar-inverse">
         <div class="container">
            <div class="navbar-header">
               <!-- Button for smallest screens -->
            <!--   <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
          <!--  </div>
          <!--  <div class="navbar-collapse collapse">
               <ul class="nav navbar-nav  mainNav">
                  <li class="active"><a href="jacoco.php" class="text-center">Jacoco</a></li>
               </ul>
            </div> -->
            <!--/.nav-collapse -->
        <!-- </div>
      <!--</div> 
      <!-- Progress bars-->
      <?php
         echo'<section class="main-contents">';
          echo'<h3 class="text-center sub-texts">Team Progress Overview</h3>';
          echo'<div class="container">';
          echo'<hr>';
             echo'<div class="item-section col-md-12 col-sm-4 col-xs-12">';
                 echo'<p class="text-center"> <b>Teams Current Progress</b></p>';
                 echo'<br>';
         
         //Combined progress bar
         //Extract the most recent jacoco coverage value from the html report for All of the core teams
         
         $alldoc = new DOMDocument();
         $alldoc->loadHTMLFile('C:\Coyote\Reports\report\coreteams\index.html');
         $x= new DOMXpath($alldoc);
         foreach($x->query("//table[@class='coverage']//tfoot/tr/td[3]/text()") as $node)
         $allProgress = $node->textContent;
         echo' <h5 class="text-left"><b>All Teams Combined</b></h5>';
         echo'<div class="progress">';
         echo'<div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="'. $allProgress .'"
         aria-valuemin="0" aria-valuemax="100" style="width:'. $allProgress .'">';
         echo' '. $allProgress .'   ALL TEAMS COMBINED';
         echo'</div>';
         echo'</div>';
         
         // Delphi progress
         //Extract the most recent jacoco coverage value from the html report for Delphi
         
         $delphidoc = new DOMDocument();
         $delphidoc->loadHTMLFile('C:\Coyote\Reports\report\delphi\index.html');
         $x= new DOMXpath($delphidoc);
         foreach($x->query("//table[@class='coverage']//tfoot/tr/td[3]/text()") as $node)
         $delphiProgress = $node->textContent;
         echo' <h5 class="text-left"><b>Delphi</b></h5>';
         echo'<div class="progress">';
         echo'<div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="'. $delphiProgress .'"
         aria-valuemin="0" aria-valuemax="100" style="width:'. $delphiProgress .'">';
         echo' '. $delphiProgress .'   DELPHI';
         echo'</div>';
         echo'</div>';
         
         // QueueX progress 
         //Extract the most recent jacoco coverage value from the html report for QX
         
        // $qxdoc = new DOMDocument();
       //  $qxdoc->loadHTMLFile('C:\Coyote\Reports\report\queuex\index.html');
       //  $x= new DOMXpath($qxdoc);
      //   foreach($x->query("//table[@class='coverage']//tfoot/tr/td[3]/text()") as $node)
      //   $qxProgress = $node->textContent;
      //   echo'<div class="progress">';
     //    echo'<div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="'. $qxProgress .'"
//aria-valuemin="0" aria-valuemax="100" style="width:'. $qxProgress .'">';
    ///     echo' '. $qxProgress .'   QUEUEX';
     //    echo'</div>';
     //    echo'</div>';
         
         // Mixtape progress mixtape is now firebirds and queuex
         //Extract the most recent jacoco coverage value from the html report for Mixtape
         
         $mixtapedoc = new DOMDocument();
         $mixtapedoc->loadHTMLFile('C:\Coyote\Reports\report\mixtape\index.html');
         $x= new DOMXpath($mixtapedoc);
         foreach($x->query("//table[@class='coverage']//tfoot/tr/td[3]/text()") as $node)
         $mixtapeProgress = $node->textContent;
         echo' <h5 class="text-left"><b>MixTape</b></h5>';
         echo'<div class="progress">';
         echo'<div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="'. $mixtapeProgress .'"
         aria-valuemin="0" aria-valuemax="100" style="width:'. $mixtapeProgress .'">';
         echo' '. $mixtapeProgress .'   MIXTAPE';
         echo'</div>';
         echo'</div>';
         
          // FIS progress
         //Extract the most recent jacoco coverage value from the html report for FIS
         
         $fisdoc = new DOMDocument();
         $fisdoc->loadHTMLFile('C:\Coyote\Reports\report\fis\index.html');
         $x= new DOMXpath($fisdoc);
         foreach($x->query("//table[@class='coverage']//tfoot/tr/td[3]/text()") as $node) //echo $node->textContent;
         $fisProgress = $node->textContent;
         echo' <h5 class="text-left"><b>FIS</b></h5>';
         echo'<div class="progress">';
         echo'<div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="'. $fisProgress .'"
         aria-valuemin="0" aria-valuemax="100" style="width:'. $fisProgress .'">';
         echo' '. $fisProgress .'   FIS';
         echo'</div>';
         echo'</div>';
         
          // Sustaining progress
         //Extract the most recent jacoco coverage value from the html report for sustaining
         
         $susdoc = new DOMDocument();
         $susdoc->loadHTMLFile('C:\Coyote\Reports\report\sustaining\index.html');
         $x= new DOMXpath($susdoc);
         foreach($x->query("//table[@class='coverage']//tfoot/tr/td[3]/text()") as $node)
         $susProgress = $node->textContent;
         echo' <h5 class="text-left"><b>Sustaining</b></h5>';
         echo'<div class="progress">';
         echo'<div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="'. $susProgress .'"
         aria-valuemin="0" aria-valuemax="100" style="width:'. $susProgress .'">';
         echo' '. $susProgress .'   SUSTAINING';
         echo'</div>';
         echo'</div>';
         echo'</section>';
             ?>
      <section class="main-contents">
         <h3 class="text-center sub-texts">Code Coverage Reports</h3>
         <div class="container">
            <hr>
            <div class="item-section col-md-12 col-sm-4 col-xs-12">
               <p class="text-center"> <b>View JaCoCo Report</b></p>
               <br>
            </div>
         </div>
         <div class="text-center">
            <form method="post" id =selectForm action="getJacoco.php">
               <fieldset>
                  <select name="teamName">
                     <option value="AllTeams">ALL TEAMS</option>
                     <option value="Delphi">DELPHI</option>
                     <option value="Mixtape">MIXTAPE</option>
                     <option value="Fis">FIS</option>
                     <option value="Sustaining">SUSTAINING</option>
                  </select>
                  <br>
                  <button type="submit">Get Jacoco'd</button>
				  <br><br>
				  <p class="text-center"><iframe src="https://giphy.com/embed/yhRhIgnJIRD0I" width="300" height="200" frameBorder="0" class="giphy-embed" allowFullScreen></iframe><a href="https://giphy.com/gifs/beycreative-yhRhIgnJIRD0I"></a></p>
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