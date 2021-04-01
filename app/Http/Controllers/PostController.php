<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Collection;

class PostController extends Controller
{
    function index() {
        $currentPage = LengthAwarePaginator::resolveCurrentPage();

        $client   = new \GuzzleHttp\Client();
        $response = $client->request('GET', 'https://jsonplaceholder.typicode.com/posts'); 
        $response->getStatusCode();
        $response->getHeaderLine('content-type');
        $arr      = json_decode($response->getBody(), true); 

  
        $col     = new Collection($arr);
        $perPage = 10;
        $currentPageSearchResults = $col->slice(($currentPage - 1) * $perPage, $perPage)->all();
        $data    = new LengthAwarePaginator($currentPageSearchResults, count($col), $perPage, $currentPage,['path' => LengthAwarePaginator::resolveCurrentPath()] );
        return view('pages.index', ['posts' => $data]);


    }
  

}
