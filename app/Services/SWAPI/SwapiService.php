<?php

namespace App\Services\SWAPI;
use GuzzleHttp\Client;

class SwapiService
{
    protected $baseUrl;
    protected $client;

    public function __construct()
    {
        $this->baseUrl = env('SWAPI_BASE_URL');

        // SETANDO PARAMETROS QUE SÃO OBRIGATORIO PARA USO DO WEB SERVICE
        $this->client = new Client(
            ['headers' =>
                [
                    'Content-Type' => 'application/json',
                ],
                'verify' => false
            ]);
    }

    /**
     * Formata a resposta da API para o sistema
     * @param $response
     * @return mixed
     */
    protected function formatResponse($response)
    {
        $return = json_decode($response, true);

        if (empty($return))
            $return = $response;

        return $return;
    }

}