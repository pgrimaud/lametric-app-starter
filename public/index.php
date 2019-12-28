<?php

use LaMetric\{Api, Response, Validator};

use GuzzleHttp\Client;

require_once __DIR__ . '/../vendor/autoload.php';

$response = new Response();

try {

    $credentials = include_once __DIR__ . '/../config/credentials.php';
    $parameters  = include_once __DIR__ . '/../config/fields.php';

    $validator = new Validator($_GET);
    $validator->check($parameters);

    $api = new Api(new Client(), $credentials);
    $api->fetchData($validator->getPair());

    $frames = $api->getData();

    echo $response->data($x, $validator);
} catch (Exception $exception) {
    echo $response->error($exception->getMessage());
}
