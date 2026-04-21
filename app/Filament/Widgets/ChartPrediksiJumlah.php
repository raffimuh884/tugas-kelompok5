<?php

namespace App\Filament\Widgets;

use Filament\Widgets\ChartWidget;

class ChartPrediksiJumlah extends ChartWidget
{
    protected static ?string $heading = 'Prediksi Jumlah Mahasiswa';

    protected function getData(): array
    {
        return [
            'datasets' => [
                [
                    'label' => 'Data Historis',
                    'data' => [362, 423, 337, 359, 279, 252],
                    'borderColor' => 'rgb(0, 0, 255)',
                    'backgroundColor' => 'rgb(0, 0, 255)',
                    'pointStyle' => 'circle',
                    'showLine' => false,
                ],
                [
                    'label' => 'Regresi Linier',
                    'data' => [410, 380, 350, 320, 290, 260],
                    'borderColor' => 'rgb(255, 165, 0)',
                    'borderDash' => [5, 5],
                    'pointStyle' => false,
                ],
                [
                    'label' => 'Prediksi',
                    'data' => [null, null, null, null, null, null, 239, 211],
                    'borderColor' => 'rgb(255, 0, 0)',
                    'backgroundColor' => 'rgb(255, 0, 0)',
                    'pointStyle' => 'crossRot',
                    'showLine' => false,
                ],
            ],
            'labels' => ['2019', '2020', '2021', '2022', '2023', '2024', '2025', '2026'],
        ];
    }

    protected function getOptions(): array
    {
        return [
            'scales' => [
                'y' => [
                    'beginAtZero' => false,
                    'grid' => [
                        'drawBorder' => false,
                        'display' => true,
                    ],
                ],
                'x' => [
                    'grid' => [
                        'drawBorder' => false,
                        'display' => true,
                    ],
                ],
            ],
            'plugins' => [
                'legend' => [
                    'position' => 'top',
                ],
            ],
        ];
    }

    protected function getType(): string
    {
        return 'line';
    }
}
