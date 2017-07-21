<?php
header("Content-type: text/html; charset=utf-8");
session_start();
$array = array(
    "foo" => $_SESSION['room_id'],
    "bar" => "foo",
);
echo json_encode($_SESSION);
