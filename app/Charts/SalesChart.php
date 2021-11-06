<?php

namespace App\Charts;

use ArielMejiaDev\LarapexCharts\LarapexChart;

class SalesChart
{
    protected $chart;

    public function __construct(LarapexChart $chart)
    {
        $this->chart = $chart;
    }

    public function build(): \ArielMejiaDev\LarapexCharts\PieChart
    {
        return $this->chart->pieChart()
            ->setTitle('Conversões de boleto')
            ->setSubtitle('')
            ->addData([50, 30])
            ->setLabels(['Boletos Pagos', 'Boletos Pagos']);
    }
}
