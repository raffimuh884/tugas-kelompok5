<?php

namespace App\Filament\Widgets;

use Filament\Widgets\Widget;
use Illuminate\Support\Facades\Storage;

class MahasiswaMap extends Widget
{
    protected static string $view = 'filament.widgets.mahasiswa-map';
    public $tahunTerpilih = '2024';

    protected function getData()
    {
        return [
            '2019' => [
                'data' => [32, 153, 204, 254, 205],
                'color' => '#fee5d9'
            ],
            '2020' => [
                'data' => [79, 158, 197, 236],
                'color' => '#fcae91'
            ],
            '2021' => [
                'data' => [143, 180, 238],
                'color' => '#fb6a4a'
            ],
            '2022' => [
                'data' => [143, 215],
                'color' => '#de2d26'
            ],
            '2023' => [
                'data' => [112, 185, 222],
                'color' => '#a50f15'
            ],
            '2024' => [
                'data' => [148, 185],
                'color' => '#67000d'
            ]
        ];
    }
}
