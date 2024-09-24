<?php

namespace App\Filament\Resources\OrderResource\Widgets;

use App\Models\Order;
use Illuminate\Support\Number;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class OrderStats extends BaseWidget
{
    protected function getStats(): array
    {
        return [
            Stat::make('New Orders', Order::query()->where('status', 'new')->count())
                ->icon('heroicon-o-sparkles')
                ->color('success'),
            Stat::make('Orders Delivered', Order::query()->where('status', 'delivered')->count())
                ->icon('heroicon-o-check-badge')
                ->color('success'),
            Stat::make('Orders Shipped', Order::query()->where('status', 'Shipped')->count())
                ->icon('heroicon-o-truck')
                ->color('success'),
            Stat::make('Total Payment', Number::currency(Order::query()->sum('grand_total'), 'USD'))
                ->icon('heroicon-o-banknotes')
                ->color('success'),
        ];
    }
}
