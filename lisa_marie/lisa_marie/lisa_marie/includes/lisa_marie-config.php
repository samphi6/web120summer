<?php
/*
portal-config.php

Used to store all of our WEB120 configuration information

*/

date_default_timezone_set('America/Los_Angeles');


define('THIS_PAGE',basename($_SERVER['PHP_SELF']));

switch(THIS_PAGE){

    case 'index.php':
        $title = "Lisa Marie's Website!";
        $logo = 'fa-home';
        $PageID = 'Welcome';
    break;
    
    case 'contactme.php':
        $title = "Contact Lisa";
        $logo = 'fa-pencil-square-o';
        $PageID = 'Contact Sara';
    break;

    default:
        $title = THIS_PAGE;
        $logo = 'fa-home';
        $PageID = 'Welcome';
   }

$nav1['index.php'] = "WELCOME";
$nav1['index.php'] = "WRITING";
$nav1['index.php'] = "ART";
$nav1['index.php'] = "PHOTOS";
$nav1['index.php'] = "RECORDINGS";
$nav1['index.php'] = "ABOUT";
$nav1['contact-lisa.php'] = "CONTACT LISA";

/* 
Creating a function to generate links and apply the class=selected to currently called page

      <li><a href="index.php" class="selected">Welcome</a></li>
      <li><a href="big/index.php">Big</a></li>
      <li><a href="aia.php">AIA</a></li>
      <li><a href="flowchart.php">Flowchart</a></li>
      <li><a href="fp/index.php">Final Project</a></li>
      <li><a href="contactme.php">Contact Sara</a></li>
*/

function makeLinks($nav1)
{
    $myReturn = '';
    foreach($nav1 as $url => $text){
        
        if($url == THIS_PAGE){
            $myReturn .= "<li><a class=\"selected\" href=\"$url\">$text</a></li>";
        }else{
            $myReturn .= "<li><a href=\"$url\">$text</a></li>";
        }
    }
    
    return $myReturn;
}

?>

