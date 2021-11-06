<?php

namespace App\Charts;

use ArielMejiaDev\LarapexCharts\LarapexChart;

class AreaChart
{
    protected $chart;

    public function __construct(LarapexChart $chart)
    {
        $this->chart = $chart;
    }

    public function build(): \ArielMejiaDev\LarapexCharts\AreaChart
    {
        return $this->chart->areaChart()
            ->setTitle('Comissões / Valor Liquido')
            ->setSubtitle('')

            ->addData('Digital sales', [0, 9, 77, 2, 5, 5])
            ->setXAxis(['January', 'February', 'March', 'April', 'May', 'June']);
    }
}
