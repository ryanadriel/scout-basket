<?php

namespace App\Filament\Widgets;

use App\Models\Game;
use Filament\Widgets\ChartWidget;

class WinsChart extends ChartWidget
{
    protected static ?string $heading = 'Vitórias por Time';
    protected static ?string $maxHeight = '300px';

    protected function getType(): string
    {
        return 'bar';
    }

    protected function getData(): array
    {
        $data = Game::where('is_finished', true)
            ->selectRaw('opponent, COUNT(*) as wins')
            ->whereRaw("SUBSTRING_INDEX(result, '-', 1) > SUBSTRING_INDEX(result, '-', -1)")
            ->groupBy('opponent')
            ->orderBy('wins', 'desc')
            ->pluck('wins', 'opponent');

        return [
            'labels' => $data->keys()->toArray(),
            'datasets' => [
                [
                    'label' => 'Vitórias',
                    'data' => $data->values()->toArray(),
                    'backgroundColor' => '#4f46e5',
                ],
            ],
        ];
    }
}
