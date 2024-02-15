<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class PostsController extends Controller
{
    public function index($id){
        $url = env('API_ENDPOINT', 'http://127.0.0.1');
        $response = http::get($url.'/posts?userId='.$id);
        $data = $response->json();
        return view ('posts', compact('data'));
    }
}
