<?php

namespace App\Charts;

use App\Models\Sale;
use ArielMejiaDev\LarapexCharts\LarapexChart;

class SalesChart
{
    protected $chart;

    public function __construct(LarapexChart $chart)
    {
        $this->chart = $chart;
    }

    public function build(): \ArielMejiaDev\LarapexCharts\DonutChart
    {
        $boletos = Sale::where('trans_payment', 1)->get();

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

        if ($boletos != false) {
            foreach ($boletos as $key => $boleto) {
                if ($boleto['trans_status_code'] == 1) {
                    $aguardando_pagamento++;
                } elseif ($boleto['trans_status_code'] == 2) {
                    $pagamento_aprovado++;
                } elseif ($boleto['trans_status_code'] == 3) {
                    $cancelada++;
                } elseif ($boleto['trans_status_code'] == 4) {
                    $chargeback++;
                } elseif ($boleto['trans_status_code'] == 5) {
                    $devolvida++;
                } elseif ($boleto['trans_status_code'] == 6) {
                    $em_analise++;
                } elseif ($boleto['trans_status_code'] == 7) {
                    $estorno_pendente++;
                } elseif ($boleto['trans_status_code'] == 8) {
                    $em_processamento++;
                } elseif ($boleto['trans_status_code'] == 9) {
                    $parcialmente_pago++;
                } elseif ($boleto['trans_status_code'] == 10) {
                    $pagamento_atrasado++;
                }
            }
        }

        $set_labels = [];
        $set_values = [];
        if ($aguardando_pagamento > 0) {
            $set_labels[] = 'Aguardando Pagamento';
            $set_values[] = $aguardando_pagamento;
        }
        if ($pagamento_aprovado > 0) {
            
            $set_labels[] = 'Aguardando Aprovado';
            $set_values[] = $pagamento_aprovado;
        }
        if ($cancelada > 0) {
            
            $set_labels[] = 'Cancelada';
            $set_values[] = $cancelada;
        }
        if ($chargeback > 0) {
            $set_labels[] = 'Chargeback';
            $set_values[] = $chargeback;
            
        }
        if ($devolvida > 0) {
            $set_labels[] = 'Devolvida';
            $set_values[] = $devolvida;
            
        }
        if ($em_analise > 0) {
            $set_labels[] = 'Em Análise';
            $set_values[] = $em_analise;
            
        }
        if ($estorno_pendente > 0) {
            
            $set_labels[] = 'Estorno Pendente';
            $set_values[] = $estorno_pendente;
        }
        if ($em_processamento > 0) {
            
            $set_labels[] = 'Em Processamento';
            $set_values[] = $em_processamento;
        }
        if ($parcialmente_pago > 0) {
            $set_labels[] = 'Parcialmente Pago';
            $set_values[] = $parcialmente_pago;
            
        }
        if ($pagamento_atrasado > 0) {
            $set_labels[] = 'Aguardando Atrasado';
            $set_values[] = $pagamento_atrasado;
            
        }

        //$set_labels = ['Aguardando Pagamento', 'Pagamento Aprovado', 'Cancelada', 'Chargeback', 'Devolvida', 'Em Análise', 'Estorno Pendente', 'Em Processamento', 'Parcialmente Pago', 'Pagamento Atrasado'];
        //  $set_labels = ['Teste 1', 'Teste 2'];
        //$set_values = [$aguardando_pagamento, $pagamento_aprovado, $cancelada, $chargeback, $devolvida, $em_analise, $estorno_pendente, $em_processamento, $parcialmente_pago, $pagamento_atrasado];
        return $this->chart->donutChart()

            ->setSubtitle('')
            ->addData($set_values)
            ->setLabels($set_labels);
    }
}
