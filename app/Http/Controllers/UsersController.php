<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class UsersController extends Controller
{
    public function index(){
        $url = env('API_ENDPOINT', 'http://127.0.0.1');
        $response = http::get($url.'/users');
        $data = $response->json();
        return view ('users', compact('data'));
    }
}
