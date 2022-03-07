<?php

namespace App\Charts;

use App\Models\Sale;
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

        $sales = Sale::where('trans_payment', 5)->get();
        $pagamento_aprovado = 0;
        $pagamento_pendente = 0;
        foreach ($sales as $key => $sale) {
            if ($sale['trans_status_code'] == 2) {
                $pagamento_aprovado++;
            } else {
                $pagamento_pendente++;
            }
        }

        return $this->chart->donutChart()

            ->setSubtitle('')
            ->addData([$pagamento_aprovado, $pagamento_pendente])
            ->setLabels(['Pix Pagos', 'Pix Pendentes']);
    }
}
