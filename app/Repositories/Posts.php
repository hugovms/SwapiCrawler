<?php

namespace App\Repositories;
use GuzzleHttp\Client;
use App\Providers\AppServiceProvider;
class Posts extends GuzzleHttpRequest
{
    public function all()
    {
        $value = 1;
        $page = "?page=".$value;
        return $this->get("people".$page);
    }
    public function find($id)
    {
        return $this->get("people/{$id}");
    }

}
