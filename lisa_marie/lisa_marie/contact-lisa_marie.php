<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Lisa Marie Website</title>
        <meta name="viewport" content="width=device-width">
        <meta name="robots" content="noindex,nofollow">
        <meta charset="utf-8">
        <link href="css/nav.css" type="text/css" rel="stylesheet">
        <link href="css/style.css" type="text/css" rel="stylesheet">
        <link href="css/form.css" type="text/css" rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
        <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
   <script src="https://s3.amazonaws.com/menumaker/menumaker.min.js" type="text/javascript"></script>
   <script src="js/script.js"></script>
        
    </head>

<body>
    
    <main class="wrapper">
        
    <h1 class="pageID"><a href="index.php"><i class="logo fa fa-home"></i>GREETTINGS, SALAM AND WELCOME TO LISA MARIE'S WEBSITE</a></h1>

    <div class="banner"><img src="images/L-to-the-people2.jpg" alt="Lisa Getting Down"></div>
    
    <header>
        
        <nav id="cssmenu">
            
          <ul>
             <li><a href="../index.html"><span><i class="fa fa-fw fa-bank"></i>WEB120</span></a></li>
             <li><a href="index.html"><span><i class="fa fa-fw fa-home"></i>LISA MARI'S HOME</span></a></li>
              <li><a href="contact-lisa_marie.php"><span><i class="fa fa-fw fa-pencil"></i>CONTACT LISA MARIE</span></a></li>
             <li><a href="flexbox.html"><span><i class="fa fa-fw fa-cube"></i>FLEXBOX</span></a></li>
             <li><a href="galleries.html"><span><i class="fa fa-fw fa-camera-retro"></i>GALLERIES</span></a></li>
             <li><a href="#"><span><i class="fa fa-fw fa-chevron-down"></i>GOOGLE</span></a>
                <ul>
                   <li><a href="calendar.html"><span><i class="fa fa-fw fa-calendar"></i>CALENDAR</span></a></li>
                   <li><a href="map.html"><span><i class="fa fa-fw fa-map-o"></i>MAP</span></a></li>
                   <li><a href="youtube.html"><span><i class="fa fa-fw fa-youtube-square"></i>YOUTUBE</span></a></li>
                </ul>
             <li><a href="carts.html"><span><i class="fa fa-fw fa-shopping-basket"></i>SHOPPING CARTS</span></a></li>
             <li><a href="sitevmobile.html"><span><i class="fa fa-fw fa-html5"></i>SITE v. MOBILE</span></a></li>
          </ul>
        
        </nav>
        
    </header>
    
   <div class="container"> 
       
       <img src="images/l_home.jpg" alt="Lisa's Main Page Photo">
       
       <blockquote>"My mind is an infinite ink well... my blood is lined with stories to tell."</blockquote>
       
        </div>

    <section>
        
        <h2>CONTACT LISA MARIE!</h2>
        
        <?php
        /*
         * Below are 2 different forms to be re-used       
         * 
         * Only use one at a time, comment out the other 1!       
         *
         */
        //include 'includes/simple.php'; #demonstrates a simple contact form
        include 'includes/multiple.php';#demonstrates multiple form elements

	?>
        
    </section>
        
    <aside>
        
        <h2>UPCOMING EVENTS</h2>
        
        <ul>
            <li><a href="...">RESPONSIVE v. MOBILE</a></li>
            <li><a href="..." >GALLERIES</a></li>
            <li><a href="..." >FLEXBOX</a></li>
            <li><a href="..." >SHOPPING CARTS</a></li>
        
        </ul>
        
        </aside>
    
</main> <!-- END OF MAIN WRAPPER -->

<footer>
        <ul>
            <li><small><a href="#top">Back to Top</a></small></li>
            <li><small>&copy; 2019 by<a href="contactme.php" target="_blank">Samuel at Coded Chrystalis</a>All Rights Reserved</small></li>
            <li><small><a href="http://validator.w3.org/check?uri=referer" target="_blank">Validate HTML</a></small></li>
            <li><a href="http://jigsaw.w3.org/css-validator/check?uri=referer" target="_blank">CSS</a></li>
        </ul>
    
    </footer>
    
    
    
</body>
</html>