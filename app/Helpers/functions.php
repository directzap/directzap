<?php
use Carbon\Carbon;
use Illuminate\Support\Facades\Http;

function getDateComplete($date)
{
    return \Carbon\Carbon::parse($date)->format('d/m/Y H:i');
}

function getBoletoType()
{
    $token = auth()->user()->token_braip;
    $response = Http::withToken($token)->get('https://ev.braip.com/api/vendas',  [
        'date_min' => '2021-10-10 10:00:00',
        'date_max' => date('Y-m-d H:i:s'),
        'payment'  => [1],
    ]);


    return $response->json()['data'];
}
