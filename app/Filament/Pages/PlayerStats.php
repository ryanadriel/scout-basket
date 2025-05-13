<?php

namespace App\Filament\Pages;

use App\Filament\Widgets\PlayerEfficiencyWidget;
use App\Filament\Widgets\PlayerPositionChart;
use App\Filament\Widgets\TopScorersChart;
use App\Models\Player;
use Filament\Pages\Page;
use Filament\Widgets\StatsOverviewWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class PlayerStats extends Page
{
    protected static ?string $navigationIcon = 'heroicon-o-user-group';
    protected static ?string $navigationGroup = 'Jogadores';
    protected static ?string $navigationLabel = 'Estatísticas de Jogadores';
    protected static string $view = 'filament.pages.player-stats';

    protected function getHeaderWidgets(): array
    {
        return [
            PlayerEfficiencyWidget::class,
            TopScorersChart::class,
        ];
    }

    protected function getFooterWidgets(): array
    {
        return [
            PlayerPositionChart::class,
        ];
    }
}
