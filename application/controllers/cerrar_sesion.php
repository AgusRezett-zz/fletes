<?php
session_start();
session_destroy();

$url = base_url()."index.php";
header("Location:$url/inicio");