<?php
header('Content-type: application/json');


$message = [
    'hello' => 'world'
];


echo json_encode($message);

