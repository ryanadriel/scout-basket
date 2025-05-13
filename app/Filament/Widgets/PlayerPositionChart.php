<?php

namespace App\Filament\Widgets;

use App\Models\Player;
use Filament\Widgets\ChartWidget;

class PlayerPositionChart extends ChartWidget
{
    protected static ?string $heading = 'Distribuição por Posição';
    protected static ?string $maxHeight = '300px';

    protected function getType(): string
    {
        return 'doughnut';
    }

    protected function getData(): array
    {
        $positions = [
            'PG' => 'Armador',
            'SG' => 'Ala-armador',
            'SF' => 'Ala',
            'PF' => 'Ala-pivô',
            'C' => 'Pivô'
        ];

        $counts = Player::selectRaw('position, count(*) as count')
            ->groupBy('position')
            ->get()
            ->pluck('count', 'position');

        return [
            'labels' => array_values($positions),
            'datasets' => [
                [
                    'label' => 'Jogadores por Posição',
                    'data' => array_map(fn($pos) => $counts[$pos] ?? 0, array_keys($positions)),
                    'backgroundColor' => ['#3b82f6', '#ef4444', '#10b981', '#f59e0b', '#8b5cf6'],
                ],
            ],
        ];
    }
}
