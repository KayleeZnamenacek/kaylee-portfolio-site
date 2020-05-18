<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Strict//EN">

<head>
<meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home | KayleeZ Design </title>
    <script src="https://kit.fontawesome.com/e8eb2ee845.js" crossorigin="anonymous"></script>    <script src="js/vendor/jquery.js"></script>
	
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,600,700i&display=swap" rel="stylesheet">
  <link rel="shortcut icon" href="img/favicon-bluecat.svg" type="image/x-icon">
  <link rel="icon" href="img/favicon-bluecat.svg" type="image/x-icon">
    <link rel="stylesheet" href="css/foundation.css">
    <link rel="stylesheet" href="css/main.css">
</head>

<body>

<div class="hero">
      <header class="grid-container">
        <div class="grid-x grid-padding-x grid-padding-y navigation">
          <div class="cell small-3 medium-6 float-left">
            <a href="index.html"><img src="img/kaylee.logo.svg" alt="" class="svg"></a>
          </div>
          <nav class="cell small-9 medium-6 float-right">
            <ul>
              <li><a href="index.html#work">Work</a></li> 
              <li><a href="index.html#about">About</a></li>
              <li><a href="index.html#contact">Contact</a></li>
            </ul>
          </nav>
        </div>
        </header>

    <div class="grid-container">
      <div class="grid-x grid-padding-x grid-padding-y"><!--hero-->
        <div class="cell small-12 txt-center">
        <h1><?PHP 
$to = "hello@kayleez.design"; 
$subject = "Message Subject";
$headers = "From: Form Mailer";
$forward = 0;
$location = "";

$date = date ("l, F jS, Y"); 
$time = date ("h:i A"); 

$msg = "Below is the result of your feedback form. It was submitted on $date at $time.\n\n"; 

if ($_SERVER['REQUEST_METHOD'] == "POST") {
	foreach ($_POST as $key => $value) { 
		$msg .= ucfirst ($key) ." : ". $value . "\n"; 
	}
}
else {
	foreach ($_GET as $key => $value) { 
		$msg .= ucfirst ($key) ." : ". $value . "\n"; 
	}
}

mail($to, $subject, $msg, $headers); 
if ($forward == 1) { 
    header ("Location:$location"); 
} 
else { 
    echo "Your message has been sent! Thank you.";
} 

?></h1>

      </div>
     </div>
    </div>
  </div>
<div class="grid-container">
<div id="work">  <!--WORK/PROJECTS-->
        <div class="grid-x grid-margin-x grid-margin-y"><!--row 1-->
        <div class="cell small-6 medium-3 container"><!--project 1-->
          <a href="kfrx-campaign.html">
          <img src="img/home-promo-logo-green.jpg" alt="Promotional Campaign and Branding for 106.3 KFRX" class="img-hover">
          <div class="overlay">
           <div class="text"><p>106.3 KFRX</p></div>
          </div>
        </a>
        </div>
        <div class="cell small-6 medium-3 container"><!--project 2-->
          <a href="active-minds.social-activism.html">
          <img src="img/home-social-activism.jpg" alt="Social Activism Campaign for Active Minds" class="img-hover"> 
          <div class="overlay">
            <div class="text"><p>Active Minds</p></div>
           </div>
        </a>
        </div>
        <div class="cell small-6 medium-3 container"><!--project 3-->
          <a href="paint-yourself-silly.publication.html">
            <img src="img/home-type-heavy.jpg" alt="Publication Design for Paint Yourself Silly" class="img-hover"> 
            <div class="overlay">
              <div class="text"><p>Paint Yourself Silly</p></div>
             </div>
          </a>

          </div>
        <div class="cell small-6 medium-3 container"><!--project 4-->
          <a href="hiway-diner.branding.html">
            <img src="img/home-micro-logo.jpg" alt="Resturant Branding for Hi-Way Diner" class="img-hover">
            <div class="overlay">
              <div class="text"><p>Hi-Way Diner</p></div>
             </div>
          </a>
          </div>
      </div>
        <div class="grid-x grid-margin-x grid-margin-y"><!--row 2-->
          <div class="cell small-6 medium-3 container"><!--project 5-->
            <a href="glacial-till.mobile-app.html">
              <img src="img/home-mobile-app.jpg" alt="Mobile Application Design for Glacial Till" class="img-hover"> 
              <div class="overlay">
                <div class="text"><p>Glacial Till</p></div>
               </div>
              </a>
            </div>
          <div class="cell small-6 medium-3 container"><!--project 6-->
            <a href="package-line.steiner-kovarik.html">
              <img src="img/home-package-logo.jpg" alt="Package Design Line for Steiner & Kovarik" class="img-hover">
              <div class="overlay">
                <div class="text"><p>Steiner &amp; Kovarik</p></div>
               </div>
              </a>
          </div>
          <div class="cell small-6 medium-3 container"><!--project 7-->
            <a href="cat-house.web-design.html">
              <img src="img/home-responsive-site.jpg" alt="Responsive Site Design for The Cat House" class="img-hover"> 
            <div class="overlay">
             <div class="text"><p>The Cat House</p></div>
             </div>
            </a>
          </div>
          <div class="cell small-6 medium-3 container"><!--project 8-->
            <a href="live-nation.annual-report.html">
            <img src="img/home-annual-report.jpg" alt="Annual Report for Live Nation Entertainment" class="img-hover"> 
            <div class="overlay">
             <div class="text"><p>Live Nation Entertainment</p></div>
             </div>
            </a>
          </div>
        </div>
      </div>
<div>
</div>
</div>
  <footer class="bg-teal">
      <p class="txt-center align-center"> kaylee z design &copy; 2020</p>
    </footer>
    <script src="js/vendor/jquery.js"></script>
    <script src="js/vendor/what-input.js"></script>
    <script src="js/vendor/foundation.js"></script>
    <script src="js/app.js"></script>
	<script src="http://www.google-analytics.com/urchin.js" type="text/javascript">
	</script>


</body>

</html>