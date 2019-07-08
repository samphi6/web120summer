<!DOCTYPE html>
<html lang="en">
<head>
    <title>Coded Chrysalis</title>
    <meta name="viewport" content="width=device-width" /> <!-- And they're on a different sized viewport, which is, you know, the screen size say they're on a tablet, they're on a phone, they're on a
Device. That's one of their browsers on everything these days, refrigerators cars and so forth. I want
My the device that's looking at my web page to reset its viewport and recognize that I may have some at media queries that need to be applied. So that's what that meta tag is doing. -->
    <meta name="robots" content="noindex,nofollow" /> <!-- The next line robots. That's simply telling bots legitimate bots like Bing and Yahoo, Google and others don't index my page and search quite criteria and don't follow links and index them eithe -->
    <meta charset="UTF-8">
    <script src="https://use.fontawesome.com/6a71565c22.js"></script> <!-- That's a really great vector based icon that is super popular and great to use -->
    <link rel="stylesheet" href="css/nav.css" />
    <link rel="stylesheet" href="css/form.css" />
    <link rel="stylesheet" href="css/portal.css" />
     <!-- used for small nav -->
</head>
    
<body>
    
    <!-- START WRAPPER -->
    
<main class="wrapper"> <!-- Using <main> here is just like using a <div> and is growing in popularity. -->
<header id="top">
    <h1><a href="index.php"><i class="logo fa fa-home"></i>Welcome to Samuel T. Phillips' WEB120 Portal</a></h1>
    <nav>
        <ul class="topnav" id="myTopnav">
            <li><a href="index.html" class="selected">HOME</a></li>
            <li><a href="big/index.php">THE BIG SHOW</a></li>
            <li><a href="fp/index.php">FINALE!</a></li>
            <li><a href="contactme.php">CONTACT SAMUEL</a></li>
            <li class="icon"><a href="javascript:void(0);" onclick="myFunction()">&#9776;</a></li> <!-- for small nav -->
        </ul>
    </nav>
</header>