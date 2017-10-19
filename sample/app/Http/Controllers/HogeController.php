<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HogeController extends Controller
{
    public function basic_request() {
      $base_url = 'http://example.com';
      $client = new \GuzzleHttp\Client( [
        'base_url' => $base_url,
      ]);
      $path = '/index.html';
      $response = $client->request('GET', $path,
      [
        'allow_redirects' => true,
      ]);
      $response_body = (string) $response->getBody();
      echo $response_body;
    }

    public function get_http_status_code() {
      $base_url = 'http://example.com';
      $client = new \GuzzleHttp\Client( [
        'base_url' => $base_url,
      ]);
      $path ='/index.html';
      $response = $client->request( 'GET', $path,
      [
        'allow_redirect' => true,
      ]);
      $response_body = (string) $response->getStatusCode();
      echo $response_body;
    }
}
