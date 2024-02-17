<?php

namespace App\Filament\Resources;

use App\Enums\ServiceStationStatusType;
use App\Filament\Resources\TranslationResource\Pages;
use App\Filament\Resources\TranslationResource\RelationManagers;
use App\Models\Translation;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class TranslationResource extends Resource
{
    protected static ?string $model = Translation::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                // Other fields, if any
                Forms\Components\Textarea::make('text'),
                Forms\Components\Select::make('language_id')
                    ->label('Language')
                    ->default(1)
                    ->options(function () {
                        return \App\Models\Language::pluck('name', 'id')->toArray();
                    }),

            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('slug')
                    ->sortable()
                    ->searchable(),
                Tables\Columns\TextColumn::make('text')
                    ->sortable()
                    ->searchable(),
                Tables\Columns\TextColumn::make('language_id')
                    ->sortable()
                    ->searchable(),
                //
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListTranslations::route('/'),
            'create' => Pages\CreateTranslation::route('/create'),
            'edit' => Pages\EditTranslation::route('/{record}/edit'),
        ];
    }
}
