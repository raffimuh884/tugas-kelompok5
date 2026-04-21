<?php

namespace App\Filament\Widgets;

use Filament\Widgets\ChartWidget;

class ChartJumlahGender extends ChartWidget
{
    protected static ?string $heading = 'Jumlah Masuk per Tahun Berdasarkan Jenis Kelamin';

    protected function getData(): array
    {
        return [
            'datasets' => [
                [
                    'label' => 'L',
                    'data' => [153, 204, 157, 179, 129, 109],
                    'backgroundColor' => 'rgb(31, 119, 180)',
                ],
                [
                    'label' => 'P',
                    'data' => [208, 219, 180, 179, 149, 143],
                    'backgroundColor' => 'rgb(255, 127, 14)',
                ]
            ],
            'labels' => ['2019', '2020', '2021', '2022', '2023', '2024'],
        ];
    }

    protected function getType(): string
    {
        return 'bar';
    }
}
