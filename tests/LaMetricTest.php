<?php

declare(strict_types=1);

use GuzzleHttp\Client;
use LaMetric\{Api, Response, Validator};
use PHPUnit\Framework\TestCase;

class LaMetricTest extends TestCase
{
    public function testCompleteProccess(): void
    {
        $httpGetData = [];

        $validator = new Validator($httpGetData);
        $result    = $validator->check([]);

        $this->assertEquals(true, $result);

        $api    = new Api(new Client(), []);
        $frames = $api->fetchData($validator->getData());

        $this->assertIsArray($frames->getFrames());

        $response = new Response();
        $response->data($frames);
    }
}
