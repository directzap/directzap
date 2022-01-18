<?php

namespace App\Charts;

use ArielMejiaDev\LarapexCharts\LarapexChart;

class DonutChart
{
    protected $chart2;

    public function __construct(LarapexChart $chart2)
    {
        $this->chart = $chart2;
    }

    public function build(): \ArielMejiaDev\LarapexCharts\DonutChart
    {


        return $this->chart->donutChart()

            ->setSubtitle('')
            ->addData([62.2 , 37.8])
            ->setLabels(['Pix Pagos', 'Pix Pendentes']);
    }
}
