<?php

namespace App\Http\Controllers;
use GuzzleHttp\Client;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function getData($name){
        $client = new Client();

        $response = $client->request('GET','https://api.nationalize.io/?,[
            'query' =>[
                'name' => $name
            ]
          ]);

        return $response;
    }
}
