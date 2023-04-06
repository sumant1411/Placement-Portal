<?php
    mysql_connect('localhost','root','');
    mysql_select_db('placement');

    $subject = $_POST['Subject'];
    $message = $_POST['Message'];


    if (mysql_query("INSERT into notifications(Dept, Subject, Message) values('ALL', '$subject', '$message')")) {
        echo "NOTIFICATION SENT";
    }
    else {
        echo "UNSUCCESSFUL";
    }

?>