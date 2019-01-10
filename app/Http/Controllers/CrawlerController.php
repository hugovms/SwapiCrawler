<?php

namespace App\Http\Controllers;
use Goutte\Client;
use Illuminate\Http\Request;
use GuzzleHttp\Client as GuzzleClient;

class CrawlerController extends Controller
{
   public function get(Request $request){
   
   //injeta o Client do Goutte
   $goutteClient = new Client();
   //injeta o Client do Guzzle
   $guzzleClient = new GuzzleClient(array(
    'timeout' => 60,
	));
   $goutteClient->setClient($guzzleClient);
	//Define um termo a ser pesquisado
   $name = $request->get('name');
   //Faz o Request no google imagens
   $crawler = $goutteClient->request('GET', 'https://www.google.com/search?q='.$name.'&source=lnms&tbm=isch&sa=X&ved=0ahUKEwiprIicqt_fAhUl01kKHfUmDF4Q_AUIDigB&biw=1097&bih=536#imgrc=_');
   //Alt das imagens geradas pelo google imagens
   $result = 'Resultado de imagem para '.$name;
   //Seleciona a imagem
   $image = $crawler->selectImage($result)->image();
   //Obtem a URL da imagem
   $uri = $image->getUri();
   //retorno
   return view('posts.show', compact('uri'));
   }
}
