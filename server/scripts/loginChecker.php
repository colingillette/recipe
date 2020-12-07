<?php

include_once("domain/user.php");

if (!isset($_SESSION["user"])) {
    $_SESSION["user"] = new User();
}

?>