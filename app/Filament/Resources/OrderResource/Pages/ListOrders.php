<?php

namespace App\Filament\Resources\OrderResource\Pages;

use App\Filament\Resources\OrderResource;
use Filament\Resources\Components\Tab;
use App\Filament\Resources\OrderResource\Widgets\OrderStats;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListOrders extends ListRecords
{
    protected static string $resource = OrderResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }

    protected function getHeaderWidgets(): array
    {
        return [
            OrderStats::class,
        ];
    }

    public function getTabs(): array
    {
        return [
            null => Tab::make('All'),
            'New' => Tab::make()->query(fn ($query) => $query->where('status', 'new')),
            'Processing' => Tab::make()->query(fn ($query) => $query->where('status', 'processing')),
            'Shipped' => Tab::make()->query(fn ($query) => $query->where('status', 'shipped')),
            'Delivered' => Tab::make()->query(fn ($query) => $query->where('status', 'delivered')),
            'Canceled' => Tab::make()->query(fn ($query) => $query->where('status', 'canceled')),
        ];
    }
}
