<?php

namespace App\Filament\Widgets;

use App\Models\Game;
use Filament\Widgets\ChartWidget;

class GamesByLocationChart extends ChartWidget
{
    protected static ?string $heading = 'Jogos por Local';
    protected static ?string $maxHeight = '300px';

    protected function getType(): string
    {
        return 'pie';
    }

    protected function getData(): array
    {
        return [
            'labels' => ['Casa', 'Fora'],
            'datasets' => [
                [
                    'label' => 'Jogos',
                    'data' => [
                        Game::where('location', 'home')->count(),
                        Game::where('location', 'away')->count(),
                    ],
                    'backgroundColor' => ['#4f46e5', '#10b981'],
                ],
            ],
        ];
    }
}
