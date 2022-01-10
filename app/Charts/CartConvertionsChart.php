<?php

namespace App\Charts;

use ArielMejiaDev\LarapexCharts\LarapexChart;

class CartConvertionsChart
{
    protected $chart5;

    public function __construct(LarapexChart $chart5)
    {
        $this->chart = $chart5;
    }

    public function build(): \ArielMejiaDev\LarapexCharts\PieChart
    {
        return $this->chart->pieChart()
            ->setTitle('Conversões de Cartão')
            ->setSubtitle('Season 2021.')
            ->addData([20, 24, 30])
            ->setLabels(['Player 7', 'Player 10', 'Player 9']);
    }

}
