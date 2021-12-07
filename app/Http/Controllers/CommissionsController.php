<?php

namespace App\Http\Controllers;

use App\Charts\AreaChart;
use App\Charts\LineChart;
use App\Charts\DonutChart;
use App\Charts\SalesChart;
use App\Models\Postback;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class CommissionsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(SalesChart $chart, DonutChart $chart2, LineChart $chart3, AreaChart $chart4, Request $request)
    {
        // $token = auth()->user()->token_braip;
        // $response = Http::get('https://ev.braip.com/webhook');

        $chaveUnica = $request;

        // dd($chaveUnica);

        return view('pages.commissions.index',  [
            'chart' => $chart->build(),
            'chart2' => $chart2->build(),
            'chart3' => $chart3->build(),
            'chart4' => $chart4->build()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function postback(Request $request)
    {
        $values = $request->basic_authentication;
        // $values2 = implode($values);
        Postback::Create([
            'basic_authentication' => $request->basic_authentication,
        ]);

        $arquivo = 'data.json';
        $json = json_encode($values);
        $file = fopen($arquivo, 'w');
        fwrite($file, $json);
        fclose($file);


        return response()->json('Success', 200);
    }
}
