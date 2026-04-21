<?php

namespace App\Filament\Widgets;

use Filament\Widgets\ChartWidget;

class ChartJumlahMahasiswa extends ChartWidget
{
    protected static ?string $heading = 'Jumlah Mahasiswa per Jurusan';

    protected function getData(): array
    {
        return [
            'datasets' => [
                [
                    'label' => 'Jumlah Mahasiswa',
                    'data' => [419, 61, 1437, 96],
                    'backgroundColor' => 'rgb(31, 119, 180)',
                ]
            ],
            'labels' => ['Akutansi', 'Keuangan dan Perbankan', 'Manajemen', 'Manajemen Pemasaran'],
        ];
    }

    protected function getType(): string
    {
        return 'bar';
    }
}
