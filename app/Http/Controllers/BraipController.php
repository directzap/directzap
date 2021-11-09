<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class BraipController extends Controller
{
    public function index()
    {
        $token = auth()->user()->token_braip;
        $response = Http::withToken($token)->get('https://ev.braip.com/api/vendas',  [
            'date_min' => '2021-10-10 10:00:00',
            'date_max' => date('Y-m-d H:i:s'),
        ]);
        $data = $response->json()['data'];
        return view('pages.braip.index', [
            'data' => $data,
        ]);
    }
}
