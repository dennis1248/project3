<?php
include("functions.php");
include("nav.php");





//bestand met functie includen
$paggekozen = paggekozen();
$paggepost = paggepost();


switch ($paggepost){
    case "home";
        include ("main.php");
        break;
    case "TEST";
        include ("kittens.php");
        break;
    case "forum";
        include ("form.php");
        break;
    case "registereren";
        include ("register.php");
        break;
    case "inloggen";
        include ("login.php");
        break;
    case "placeholder";
        include ("welcome.php");
        break;
    case "uitloggen";
        include ("uitloggen.php");
        break;
    case "uitgelogt";
        include ("uitgelogt.php");
        break;


}

switch ($paggekozen){

    case "home";
        include ("main.php");
        break;
    case "TEST";
        include ("kittens.php");
        break;
    case "forum";
        include ("form.php");
        break;
    case "registreren";
        include ("register.php");
        break;
    case "inloggen";
        include ("login.php");
        break;
    case "uitloggen";
        include ("uitloggen.php");
        break;
    case "profiel";
        include ("welcome.php");
        break;
    default;
        include ("main.php");
        break;

}

include("footer.php");
?>



