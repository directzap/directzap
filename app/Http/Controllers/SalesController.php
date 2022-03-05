<?php

namespace App\Http\Controllers;

use App\Charts\SalesChart;
use App\Models\Sale;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class SalesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(SalesChart $pie_chart)
    {
        $token = auth()->user()->token_braip;
        if (!$token) {
            return redirect()->route('integration.index');
        }

        // dd($sales[0]);
        /*  return view('pages.sales.index',  [
    'chart' => $pie_chart->build(),
    'sales' => $sales
    ]); */
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

    public function storeSales()
    {
        $token = auth()->user()->token_braip;
        $date_min = date('Y-m-d H:i:s', strtotime('-180 days', strtotime(date('Y-m-d H:i:s'))));
        $response = Http::withToken($token)->get('https://ev.braip.com/api/vendas', [
            'date_min' => $date_min,
            'date_max' => date('Y-m-d H:i:s'),
            'product_key' => 'propv3jo',
        ]);
        $last_page = $response->json()['last_page'];

        for ($page = 1; $page <= $last_page; $page++) {
            $response = Http::withToken($token)->get('https://ev.braip.com/api/vendas', [
                'date_min' => $date_min,
                'date_max' => date('Y-m-d H:i:s'),
                'page' => $page,
                'product_key' => 'propv3jo',
            ]);
            $sales = $response->json()['data'];
            foreach ($sales as $key => $sale) {
                Sale::create($sale);
            }
        }

        return response()->json(true);
    }
}
