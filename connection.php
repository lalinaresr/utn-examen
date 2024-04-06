<?php

const CONNECT = [
    'HOSTNAME' => 'localhost',
    'USERNAME' => 'root',
    'PASSWORD' => '',
    'DATABASE' => 'crud',
    'PORT' => null,
    'SOCKET' => null
];

try {
    $db = mysqli_connect(CONNECT['HOSTNAME'], CONNECT['USERNAME'], CONNECT['PASSWORD'], CONNECT['DATABASE'], CONNECT['PORT'], CONNECT['SOCKET']);
} catch (mysqli_sql_exception $e) {
    throw new Exception(mysqli_connect_error());
    return;
}

