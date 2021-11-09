<?php

namespace App\Http\Controllers;

use App\Charts\AreaChart;
use App\Charts\LineChart;
use App\Charts\DonutChart;
use App\Charts\SalesChart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class CommissionsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(SalesChart $chart, DonutChart $chart2, LineChart $chart3, AreaChart $chart4)
    {
        $token = auth()->user()->token_braip;
        $response = Http::withToken($token)->post('https://ev.braip.com/webhook',  [
            'basic_authentication' => '755917c71f99b9e2c2ff5cd4ff9de1f7ebf6d1e6',
            'type' => 'STATUS_ALTERADO',
        ]);

        dd($response);

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
}
