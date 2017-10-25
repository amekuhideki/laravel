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
    $str = 'ウォーター';
    $response = $client->request('GET',$path,
     [
       'query' => [
         'format' => 'json',
         'affiliateId' => config('app.rakuten_afi_id'),
         'keyword' => urldecode($str),
         'shopCode' => 'rakuten24',
         'applicationId' => config('app.rakuten_api'),
         'sort' => '+itemPrice',
       ]
     ] );

    $res = json_decode((string)$response->getBody(), true);
    $page_count = $res['count'];
    $items = $res['Items'];
    foreach($items as $item){
      $item_name = $item['Item']['itemName'];
      $price = $item['Item']['itemPrice'];
      var_dump($item);
      // exit;
    }
    // var_dump ($res['Items']);
  }
}
