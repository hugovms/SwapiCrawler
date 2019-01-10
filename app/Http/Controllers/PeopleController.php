<?php

namespace App\Http\Controllers;

use App\Services\SWAPI\PeopleService;
use Goutte\Client;
use Illuminate\Http\Request;
use GuzzleHttp\Client as GuzzleClient;


class PeopleController extends Controller
{
    protected $service;


    public function __construct(PeopleService $service)
    {
        $this->service = $service;
    }


    public function all(Request $request)
    {
        $page = $request->get('page');
        $name = $request->get('name');

        $posts = $this->service->all($page, $name);

        return view('posts.index', compact('posts'));
    }


    public function getById(Request $request, $id)
    {
       $post = $this->service->getById($id);
        //injeta o Client do Goutte
       $goutteClient = new Client();
       //injeta o Client do Guzzle
       $guzzleClient = new GuzzleClient(array(
        'timeout' => 60,
        ));
       $goutteClient->setClient($guzzleClient);
        //Define um termo a ser pesquisado
       $name = $post['name'];
       //Faz o Request no google imagens
       $crawler = $goutteClient->request('GET', 'http://starwars.wikia.com/wiki/'.$name);
       //Alt das imagens geradas pelo google imagens
       $result = 'Resultado de imagem para '.$name;
       //$crawler->filter('img')->first();
       $uri = $crawler->filter('figure > a > img')->first()->attr('src');
       //retorno
       return view('posts.show', compact('post', 'uri'));
    }
}
