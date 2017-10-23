<?php

namespace App\Http\Controllers;

// use Illuminate\Http\Request;
use GuzzleHttp\Pool;
use GuzzleHttp\Client;
use GuzzleHttp\Psr7\Request;

class HogeController extends Controller
{
  public function rakuten_request() {

    $base_url = config('app.rakuten_url');
    $client = new \GuzzleHttp\Client( [
      'base_uri' => $base_url,
    ] );
    $path = config('app.rakuten_path');
    $str = 'みず';
    $response = $client->request('GET',$path,
     [
       'query' => [
         'format' => 'json',
         'keyword' => urldecode($str),
         'shopCode' => 'rakuten24',
         'applicationId' => config('app.rakuten_api'),
       ]
     ] );

    $response_body = (string) $response->getBody();
    echo $response_body;
  }
}
