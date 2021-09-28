<?php

session_start();
session_destroy();
header("Location: Easybank_Login.php");

?>