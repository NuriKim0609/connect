<!DOCTYPE html>
<html>
<head>
    <title>MS SQL Data</title>
</head>
<body>
    <h1>tripController function check </h1>
<h2>trip_table 확인 중입니다...</h2>

<ul>
<?php
    foreach ($trip as $t) {
        echo "<li>";
        echo $t;
        echo "</li>";
    }
?>