<?php

namespace App\Filament\Widgets;

use App\Models\Game;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class GamesStatsOverview extends BaseWidget
{
    protected function getStats(): array
    {
        return [
            Stat::make('Total de Jogos', Game::count())
                ->icon('heroicon-o-calendar')
                ->description('Todos os jogos cadastrados')
                ->chart([7, 3, 5, 10, 4, 8])
                ->color('primary'),

            Stat::make('Jogos em Casa', Game::where('location', 'home')->count())
                ->icon('heroicon-o-home')
                ->description('Jogos como mandante')
                ->color('success'),

            Stat::make('Jogos Fora', Game::where('location', 'away')->count())
                ->icon('heroicon-o-globe-alt') // Ícone correto para "fora"
                ->description('Jogos como visitante')
                ->color('warning'),

            Stat::make('Jogos Finalizados', Game::where('is_finished', true)->count())
                ->icon('heroicon-o-check-circle')
                ->description('Partidas concluídas')
                ->color('danger'),
        ];
    }
}
