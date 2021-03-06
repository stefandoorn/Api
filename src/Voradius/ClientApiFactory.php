<?php namespace Voradius;

class ClientApiFactory
{

    public static function newInstance($url, $api_key)
    {
        return new \GuzzleHttp\Client([
            'base_url' => $url,
            'defaults' => [
                'headers' => ['X-API-KEY' => $api_key]
            ]
        ]);
    }

}