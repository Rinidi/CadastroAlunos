<?php


$langkilleyou = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);

switch ($langkilleyou){
		
		
    default:
        //echo "PAGE FR - Setting Default";
        header("Location: ../imp/");
        break; 
}

?>