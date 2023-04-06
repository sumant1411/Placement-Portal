<?php
    session_start();
    mysql_connect('localhost','root','');
    mysql_select_db('placement');

    $subject = $_POST["Subject"];
    $message = $_POST["Message"];

    $r1 = mysql_query("SELECT branch from hlogin where Username='" . $_SESSION["husername"] . "'");
    $row1 = mysql_fetch_assoc($r1);
    $branch = $row1["branch"];

    if (mysql_query("INSERT into notifications(Dept, Subject, Message) values('$branch', '$subject', '$message')")) {
        echo "NOTIFICATION SENT";
    }
    else {
        echo "UNSUCCESSFUL";
    }

?>