<?php

namespace App\Filament\Resources;

use App\Filament\Resources\LanguageResource\Pages;
use App\Filament\Resources\LanguageResource\RelationManagers;
use App\Models\Language;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class LanguageResource extends Resource
{
    protected static ?string $model = Language::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
            // Other form configurations...

            //Components\Text::make('id')->disabled(),

            Forms\Components\TextInput::make('code'),

            Forms\Components\TextInput::make('name_en'),

            Forms\Components\TextInput::make('name')->required(),

            Forms\Components\TextInput::make('slug'),

            Forms\Components\TextInput::make('slug_en'),

            Forms\Components\TextInput::make('position_nb'),

            Forms\Components\Checkbox::make('is_active'),

            Forms\Components\DateTimePicker::make('created_at')->disabled(),

            Forms\Components\DateTimePicker::make('updated_at')->disabled(),

            // Other fields...


        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')
                    ->label('Name')
                    ->sortable()
                    ->searchable(),

                Tables\Columns\TextColumn::make('code')
                    ->sortable(),

                Tables\Columns\TextColumn::make('is_active')
                    ->sortable(),

                Tables\Columns\TextColumn::make('position_nb')
                    ->sortable(),

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
            'index' => Pages\ListLanguages::route('/'),
            'create' => Pages\CreateLanguage::route('/create'),
            'edit' => Pages\EditLanguage::route('/{record}/edit'),
        ];
    }    
}
