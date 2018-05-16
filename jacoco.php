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
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
      <link href="https://maxcdn.bootstrapcdn.com/bootswatch/3.3.7/cerulean/bootstrap.min.css" rel="stylesheet" integrity="sha384-zF4BRsG/fLiTGfR9QL82DrilZxrwgY/+du4p/c7J72zZj+FLYq4zY00RylP9ZjiT" crossorigin="anonymous">
      <!-- link rel="stylesheet" href="assets/css/bootstrap.min.css" -->
      <!--link rel="stylesheet" href="assets/css/font-awesome.min.css"-->
      <!--link rel="stylesheet" href="assets/css/bootstrap-theme.css" media="screen"-->
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
         <h1 class="text-center page-title"><b>JaCoCo Coverage Reporting</b></h1>
      </section>
      <div class="logo">
         <a href="jacoco.php"><img src="assets/images/ProjectCoyoteLogo.png" width="150" align="center"></a>
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
        include 'config.php';

         echo'<section class="main-contents">';
          echo'<h3 class="text-center sub-texts">Team Progress Overview</h3>';
          echo'<div class="container">';
          echo'<hr>';
             echo'<div class="item-section col-md-12 col-sm-4 col-xs-12">';
                 echo'<p class="text-center"> <b>Teams Current Progress</b></p>';
                 echo'<br>';
         
        // Output the progress bars
        foreach (TEAMS as $directory => $title){
            $progress='0%';
            $thedoc = new DOMDocument();
            $thedoc->loadHTMLFile("C:/Coyote/Reports/report/{$directory}/index.html");
            $x= new DOMXpath($thedoc);
            foreach($x->query("//table[@class='coverage']//tfoot/tr/td[3]/text()") as $node){
                $progress = $node->textContent;
            }
            echo "<h5 class='text-left'><b>{$title}</b></h5>";
            echo '<div class="progress">';
            echo "<div class='progress-bar progress-bar-success' role='progressbar' aria-valuenow='{$progress}'
            aria-valuemin='0' aria-valuemax='100' style='width:{$progress}'>";
            echo "{$progress} {$title}";
            echo '</div>';
            echo '</div>';
        }
        
         echo'</section>';
             ?>
      <section class="main-contents">
         <h3 class="text-center sub-texts">Code Coverage Reports</h3>
         <div class="container">
            <hr>
            <div class="item-section col-md-12 col-sm-4 col-xs-12">
               <p class="text-center"> <b>Select a team below to view their coverage report.</b></p>
               <br>
            </div>
         </div>
         <div class="text-center">
            <form method="post" id =selectForm action="getJacoco.php">
               <fieldset>
                  <select name="teamName">
                  <?php
                      foreach (TEAMS as $directory => $title){
                          echo "<option value='{$directory}'>{$title}</option>";
                      }
                  ?>
                  </select>
                  <br>
                  <button type="submit">Display Report</button>
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
                  <p class="text-center"><br><br><br><br>Copyright © 2018 - Verint Inc. </p>
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