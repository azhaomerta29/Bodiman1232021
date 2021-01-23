<?php
/* header.php
 */
require_once("db_connection.php");
$db = db_connect();
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF=8">
        <title><?php echo $title; ?></title>
        <link rel="stylesheet" href=".//css//style.css">
    </head>
    <body>