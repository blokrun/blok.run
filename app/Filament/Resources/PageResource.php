<?php

namespace App\Filament\Resources;

use App\Enums\ServiceStationStatusType;
use App\Filament\Resources\PageResource\Pages;
use App\Filament\Resources\PageResource\RelationManagers;

use App\Models\Page;

use App\Tables\Columns\GoogleRating;
use App\Tables\Columns\RekvizitaiUrl;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class PageResource extends Resource
{
    protected static ?string $model = Page::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
            Forms\Components\TextInput::make('name'),
            Forms\Components\Textarea::make('text'),
                Forms\Components\Textarea::make('description'),
                Forms\Components\TextInput::make('logo_url'),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')
                    ->sortable()
                    ->searchable(),


                /*
                 Tables\Columns\TextColumn::make('email')
                    ->sortable(),

                Tables\Columns\TextColumn::make('address')->hidden(),

                Tables\Columns\TextColumn::make('status')->enum(ServiceStationStatusType::options()),
                RekvizitaiUrl::make('Rekvizitai')
                    ->openUrlInNewTab(),
                GoogleRating::make('google_rating'),
                 */
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
            'index' => Pages\ListPages::route('/'),
            'create' => Pages\CreatePage::route('/create'),
            'edit' => Pages\EditPage::route('/{record}/edit'),
        ];
    }
}
