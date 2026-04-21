<?php

namespace App\Filament\Widgets;

use Filament\Widgets\ChartWidget;

class BlogPostsChart extends ChartWidget
{
    protected static ?string $heading = 'Jumlah Masuk Siswa per Tahun';

    protected function getData(): array
    {
        return [
            'datasets' => [
                [
                    'label' => 'Jumlah Mahasiswa',
                    'data' => [362, 423, 337, 359, 279, 252],
                ],
            ],

            'labels' => ['2019', '2020', '2021', '2022', '2023', '2024'],
        ];
    }

    protected function getType(): string
    {
        return 'line';
    }
}
