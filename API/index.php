<?php
include_once ('./server-configure.php');
header('Content-type: application/json');

$message = [
    'hello' => $db_configure['id']
];


echo json_encode($message);

