<?php

namespace App\Filament\Widgets;

use App\Models\Player;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class PlayerEfficiencyWidget extends BaseWidget
{
    protected static ?string $pollingInterval = '10s';

    protected function getStats(): array
    {
        // Dados mockados para estatísticas adicionais
        $mockAssists = $this->mockStats('assists', 0, 15);
        $mockRebounds = $this->mockStats('rebounds', 0, 20);
        $mockBlocks = $this->mockStats('blocks', 0, 8);

        return [
            Stat::make('Pontos PJ', number_format(Player::avg('points'), 1))
                ->description('Média de pontos por jogador')
                ->icon('heroicon-o-bolt')
                ->color('primary')
                ->chart($this->generateRandomChartData(5, 30)),

            Stat::make('Altura Média', $this->formatHeight(Player::avg('height')))
                ->description('Centímetros')
                ->icon('heroicon-o-arrow-trending-up')
                ->color('success'),

            Stat::make('Peso Médio', number_format(Player::avg('weight'), 1) . ' kg')
                ->description('Peso médio do elenco')
                ->icon('heroicon-o-scale')
                ->color('warning'),

            Stat::make('Idade Média', number_format(Player::avg('age'), 1) . ' anos')
                ->description('Média de idade do time')
                ->icon('heroicon-o-cake')
                ->color('danger'),
        ];
    }

    /**
     * Gera dados mockados para uma estatística específica
     */
    protected function mockStats(string $stat, int $min, int $max): array
    {
        $players = Player::all();
        $data = [];

        foreach ($players as $player) {
            // Gera um valor aleatório baseado no número do jogador para consistência
            $data[$player->id] = rand($min, $max);
        }

        return [
            'avg' => number_format(array_sum($data) / count($data), 1),
            'data' => $data
        ];
    }

    /**
     * Formata a altura em metros (ex: 198 cm → 1.98 m)
     */
    protected function formatHeight(?float $heightInCm): string
    {
        if (!$heightInCm) return 'N/A';
        return number_format($heightInCm / 100, 2) . ' m';
    }

    /**
     * Gera dados aleatórios para gráficos
     */
    protected function generateRandomChartData(int $min, int $max, int $count = 6): array
    {
        return array_map(fn() => rand($min, $max), range(1, $count));
    }
}
