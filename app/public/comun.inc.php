<?php
require("../config.php");
require("../../src/db_mysql.php");

session_start();
if (!isset($_SESSION['usuario'])) {
    header('Location: login.php');
    exit;
}
