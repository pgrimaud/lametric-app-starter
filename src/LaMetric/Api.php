<?php

declare(strict_types=1);

namespace LaMetric;

use GuzzleHttp\Client;
use LaMetric\Response\{Frame, FrameCollection};

class Api
{
    public function __construct(private Client $client, private array $credentials = [])
    {
    }

    /**
     * @param array $parameters
     *
     * @return FrameCollection
     */
    public function fetchData(array $parameters = []): FrameCollection
    {
        /**
         * You can call whatever API you want and extract data as array or object
         *
         * object $this->client (Guzzle HTTP) is available to make curl requests
         * array $this->credentials contains sensitive data
         * array $parameters (credentials) can contain sensitive data
         *
         * Here for example, we will return IP of user
         */

        return $this->mapData([
            'ip' => $_SERVER['REMOTE_HOST'] ?? 'UNKNOWN',
        ]);
    }

    /**
     * @param array $data
     *
     * @return FrameCollection
     */
    private function mapData(array $data = []): FrameCollection
    {
        $frameCollection = new FrameCollection();

        /**
         * Transform data as FrameCollection and Frame
         */
        $frame = new Frame();
        $frame->setText($data['ip']);
        $frame->setIcon('');

        $frameCollection->addFrame($frame);

        return $frameCollection;
    }
}
