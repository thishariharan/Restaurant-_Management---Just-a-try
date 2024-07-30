<?php    
if(isset($_COOKIE["shkie"]))
    {        setcookie("shkie", $_COOKIE["shkie"], time() + 0);

        header("Location: welcomehtml.php");   
        exit;    }
    else    
    {        
        header("Location: welcomehtml.php");   
        exit;   } ?>