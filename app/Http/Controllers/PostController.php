<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Collection;

class PostController extends Controller
{
    function __construct() {

        $client   = new \GuzzleHttp\Client();
        $response = $client->request('GET', 'https://jsonplaceholder.typicode.com/posts'); 
        $response->getStatusCode();
        $response->getHeaderLine('content-type');
        $this->data    =   json_decode($response->getBody(), true); 
    }


    function index() {

        $currentPage = LengthAwarePaginator::resolveCurrentPage();
        $arr     = $this->data;
        $col     = new Collection($arr);
        $perPage = 10;
        $currentPageSearchResults = $col->slice(($currentPage - 1) * $perPage, $perPage)->all();
        $data    = new LengthAwarePaginator($currentPageSearchResults, count($col), $perPage, $currentPage,['path' => LengthAwarePaginator::resolveCurrentPath()] );
        return view('pages.index', ['posts' => $data]);

    }
  

    function show($id) {
   
      if (is_numeric($id) && ($id > 0 && $id <=100 )) :
            $a   = $this->data;
            $i   = ($id - 1); 
            return view('pages.show', ['item' => $a[$i]]);
       else:  
            return view('pages.show', ['error'=> 'Não foi possível localizar esta postagem...']);
       endif;



    }

}
