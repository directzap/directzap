<?php

namespace App\Charts;

use ArielMejiaDev\LarapexCharts\LarapexChart;

class LineChart
{
    protected $chart2;

    public function __construct(LarapexChart $chart2)
    {
        $this->chart = $chart2;
    }

    public function build(): \ArielMejiaDev\LarapexCharts\barChart
    {
        return $this->chart->barChart()


        ->addData('San Francisco', [6, 9, 3, 4, 10, 8])
        ->addData('Boston', [7, 3, 8, 2, 6, 4])
        ->setXAxis(['January', 'February', 'March', 'April', 'May', 'June']);
    }
}
