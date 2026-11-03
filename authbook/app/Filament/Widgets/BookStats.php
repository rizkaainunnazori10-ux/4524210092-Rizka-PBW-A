<?php

namespace App\Filament\Widgets;

use App\Models\Book;
use App\Models\Author;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class BookStats extends BaseWidget
{
    protected function getStats(): array
    {
        return [
            Stat::make('Total Books', Book::count())
                ->description('Jumlah seluruh buku')
                ->icon('heroicon-o-book-open'),

            Stat::make('Total Authors', Author::count())
                ->description('Jumlah seluruh penulis')
                ->icon('heroicon-o-user'),

            Stat::make('Available Books', Book::where('status', 'available')->count())
                ->description('Buku yang tersedia')
                ->icon('heroicon-o-check-circle')
                ->color('success'),

            Stat::make('Borrowed Books', Book::where('status', 'borrowed')->count())
                ->description('Buku yang dipinjam')
                ->icon('heroicon-o-clock')
                ->color('warning'),
        ];
    }
}