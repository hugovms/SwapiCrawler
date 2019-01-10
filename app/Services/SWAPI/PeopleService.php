<?php

namespace App\Services\SWAPI;


use GuzzleHttp\Exception\BadResponseException;

class PeopleService extends SwapiService
{

    public function all($page, $name)
    {
        $page = is_null($page) ? 1 : $page;

        if($name){
            $url = $this->baseUrl . '/people?page=' . $page . '&search='. $name;
        }else{
            $url=  $this->baseUrl . '/people?page=' . $page;
        }

        try {
            $response = $this->client->get($url);
        } catch (BadResponseException $e) {
            throw new \Exception($e->getResponse()->getBody()->getContents());
        }

        return $this->formatResponse($response->getBody()->getContents());
    }


    public function getById($id)
    {
        try {
            $response = $this->client->get($this->baseUrl . '/people/'. $id);
        } catch (BadResponseException $e) {
            throw new \Exception($e->getResponse()->getBody()->getContents());
        }
        return $this->formatResponse($response->getBody()->getContents());
    }



}