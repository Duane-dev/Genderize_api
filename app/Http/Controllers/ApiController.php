<?php

namespace App\Http\Controllers;
use GuzzleHttp\Client;

use Illuminate\Http\Request;

class apiController extends Controller
{
    public function getName($name){
        $client = new Client();

        $response = $client->request('GET','https://api.nationalize.io/?',[
            'query' =>[
                'name' => $name
            ]
        ]);

        return $response;
    }
}
