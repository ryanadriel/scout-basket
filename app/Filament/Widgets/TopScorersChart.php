<?php

namespace App\Filament\Widgets;

use App\Models\Player;
use Filament\Widgets\ChartWidget;

class TopScorersChart extends ChartWidget
{
    protected static ?string $heading = 'Top 10 Pontuadores';
    protected static ?string $maxHeight = '400px';

    protected function getType(): string { return 'bar'; }

    protected function getData(): array
    {
        $players = Player::orderByDesc('points')->limit(10)->get();
        return [
            'labels' => $players->pluck('name')->toArray(),
            'datasets' => [[
                'label' => 'Pontos',
                'data' => $players->pluck('points')->toArray(),
                'backgroundColor' => '#3b82f6',
            ]],
        ];
    }
}
