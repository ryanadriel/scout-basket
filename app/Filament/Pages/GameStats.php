<?php

namespace App\Filament\Pages;

use App\Filament\Widgets\GamesByLocationChart;
use App\Filament\Widgets\GamesStatsOverview;
use App\Filament\Widgets\WinsChart;
use App\Models\Game;
use Filament\Pages\Page;
use Filament\Widgets\BarChartWidget;
use Filament\Widgets\ChartWidget;
use Filament\Widgets\StatsOverviewWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class GameStats extends Page
{
    protected static ?string $navigationIcon = 'heroicon-o-chart-bar';
    protected static ?string $navigationGroup = 'Jogos';
    protected static string $view = 'filament.pages.game-stats';

    protected function getHeaderWidgets(): array
    {
        return [
            GamesStatsOverview::class,
            WinsChart::class,
        ];
    }

    protected function getFooterWidgets(): array
    {
        return [
            GamesByLocationChart::class,
        ];
    }
}
