<?php

namespace App\Http\Controllers;

// use Illuminate\Http\Request;
use GuzzleHttp\Pool;
use GuzzleHttp\Client;
use GuzzleHttp\Psr7\Request;

class HogeController extends Controller
{
  public function basic_request() {
    $base_url = 'https://github.com';
    $client = new \GuzzleHttp\Client( [
      'base_uri' => $base_url,
    ] );
    $path = '/guzzle/guzzle';
    $response = $client->request( 'GET', $path,
     [
       'allow_redirects' => true,
     ] );
    $response_body = (string) $response->getBody();
    echo $response_body;
  }
}
