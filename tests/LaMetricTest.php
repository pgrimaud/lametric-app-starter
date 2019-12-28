<?php

declare(strict_types=1);

use GuzzleHttp\Client;
use LaMetric\{Api, Response, Validator};
use PHPUnit\Framework\TestCase;

class LaMetricTest extends TestCase
{
    public function testCompleteProcess(): void
    {
        $httpGetData = [];

        $validator = new Validator($httpGetData);
        $result    = $validator->check([]);

        $this->assertEquals(true, $result);

        $api    = new Api(new Client(), []);
        $frames = $api->fetchData($validator->getData());

        $this->assertIsArray($frames->getFrames());

        $response = new Response();
        $json     = $response->printData($frames);

        $jsonFixtures = file_get_contents(__DIR__ . '/fixtures/response.json');

        $this->assertSame($jsonFixtures, $json);
    }

    public function testInvalidProcess(): void
    {
        $response = new Response();
        $json     = $response->printError();

        $jsonFixtures = file_get_contents(__DIR__ . '/fixtures/error.json');

        $this->assertSame($jsonFixtures, $json);
    }
}
