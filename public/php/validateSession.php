<?php

session_start();

$session = json_encode($_SESSION);
$sessionExists = true;

if ($session == '[]') {
    $sessionExists = false;
}

?>