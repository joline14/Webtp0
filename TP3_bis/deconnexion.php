<?php

session_start();
session_unset();
session_destroy();

header('location: formulaire.php');
exit();