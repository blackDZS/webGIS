<?php

$connectster = "host=127.0.0.1 port=5432 dbname=gisdb user=postgres password=123456";
$con = @pg_connect($connectster);
$target = $_REQUEST['target'];

// echo $target;
if ($target === "login") {
    $email = $_REQUEST['email'];
    $passward = $_REQUEST['passward'];
    $sql = "SELECT count(1) FROM users WHERE email= '$email' AND passward= '$passward'";
    // echo $sql;
    $result = @pg_query($con, $sql);
    $row = @pg_fetch_row($result, 0);
    // echo  $row[0];

    if (intval($row[0]) === 1) {
        $sql = "SELECT relname FROM users WHERE email= '$email' AND passward= '$passward'";
        $result = @pg_query($con, $sql);
        $row = @pg_fetch_row($result, 0);
        echo "Welcome " . $row[0] . '!';
    } else {
        // echo $target;
        echo "No this account";
    };
    pg_free_result($result);
} else {
    // echo $target;
    $email = $_REQUEST['email'];
    $passward = $_REQUEST['passward'];
    $relName = $_REQUEST['relName'];
    $telephone = $_REQUEST['telephone'];
    $sql = "SELECT count(1) FROM users WHERE email= '$email'";
    $result = @pg_query($con, $sql);
    $row = @pg_fetch_row($result, 0);
    if (intval($row[0]) === 1) {
        echo "Account already exists！";
    } else {
        $sql = "INSERT INTO users(email, passward, relName, telephone) VALUES ('$email', '$passward', '$relName', '$telephone')";
        $result = @pg_query($con, $sql);
        // $row = pg_fetch_row($result, 0);
        echo "Success register";
    }
    pg_free_result($result);
}

pg_close($con);
