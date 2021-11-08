<?php

namespace App\Charts;

use ArielMejiaDev\LarapexCharts\LarapexChart;
use Illuminate\Support\Facades\Http;

class SalesChart
{
    protected $chart;

    public function __construct(LarapexChart $chart)
    {
        $this->chart = $chart;
    }

    public function build(): \ArielMejiaDev\LarapexCharts\PieChart
    {
        $boletos = getBoletoType();
        $aguardando_pagamento = 0;
        $pagamento_aprovado = 0;
        $cancelada = 0;
        $chargeback = 0;
        $devolvida = 0;
        $em_analise = 0;
        $estorno_pendente = 0;
        $em_processamento = 0;
        $parcialmente_pago = 0;
        $pagamento_atrasado = 0;
        foreach ($boletos as $key => $boleto) {
            if ($boleto['trans_status_code'] == 1) {
                $aguardando_pagamento++;
            } else if ($boleto['trans_status_code'] == 2) {
                $pagamento_aprovado++;
            } else if ($boleto['trans_status_code'] == 3) {
                $cancelada++;
            } else if ($boleto['trans_status_code'] == 4) {
                $chargeback++;
            } else if ($boleto['trans_status_code'] == 5) {
                $devolvida++;
            } else if ($boleto['trans_status_code'] == 6) {
                $em_analise++;
            } else if ($boleto['trans_status_code'] == 7) {
                $estorno_pendente++;
            } else if ($boleto['trans_status_code'] == 8) {
                $em_processamento++;
            } else if ($boleto['trans_status_code'] == 9) {
                $parcialmente_pago++;
            } else if ($boleto['trans_status_code'] == 10) {
                $pagamento_atrasado++;
            }
        }

        $set_labels = ['Aguardando Pagamento', 'Pagamento Aprovado', 'Cancelada', 'Chargeback','Devolvida', 'Em Análise', 'Estorno Pendente', 'Em Processamento', 'Parcialmente Pago', 'Pagamento Atrasado'];
        $set_values = [ $aguardando_pagamento, $pagamento_aprovado, $cancelada, $chargeback, $devolvida, $em_analise, $estorno_pendente, $em_processamento, $parcialmente_pago, $pagamento_atrasado];
        return $this->chart->pieChart()
            ->setTitle('Conversões de boleto')
            ->setSubtitle('')
            ->addData($set_values)
            ->setLabels($set_labels);
    }
}
