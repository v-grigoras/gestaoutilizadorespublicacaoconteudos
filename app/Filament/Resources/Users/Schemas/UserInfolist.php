<?php

namespace App\Filament\Resources\Users\Schemas;

use Filament\Infolists\Components\TextEntry;
use Filament\Infolists\Components\ImageEntry;
use Filament\Schemas\Schema;

class UserInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                ImageEntry::make('photo')
                    ->label('Fotografia')
                    ->disk('public'),
                TextEntry::make('name')
                    ->label('Nome'),
                TextEntry::make('email')
                    ->label('Email'),
                TextEntry::make('phone')
                    ->label('Telefone'),
                TextEntry::make('roles.name')
                    ->label('Perfis')
                    ->badge(),
            ]);
    }
}
