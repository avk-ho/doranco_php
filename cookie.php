<?php

setcookie("user_pseudo", "Alexandre", time()+24*3600, null, null, false, true);
setcookie("user_country", "France", time()+24*3600, null, null, false, true);

session_start();
$_SESSION["user_pseudo2"] = "Alexandre2";
$_SESSION["user_country2"] = "France2";

?>