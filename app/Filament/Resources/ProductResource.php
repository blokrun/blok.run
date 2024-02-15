<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ProductResource\Pages;
use App\Filament\Resources\ProductResource\RelationManagers;
use App\Models\Product;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Models\ProductCategory;
use Filament\Forms\Components\TextInput;

class ProductResource extends Resource
{
    protected static ?string $model = Product::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([


                Forms\Components\Select::make('product_category_id')
                    ->default(1)
                    ->options(ProductCategory::pluck('name', 'id')->toArray())
                    ->required(),
                Forms\Components\TextInput::make('name'),
                Forms\Components\TextInput::make('slug'),
                Forms\Components\Textarea::make('description'),
                Forms\Components\Textarea::make('text'),
                Forms\Components\Checkbox::make('is_active'),
                Forms\Components\TextInput::make('price'), // ->mask(fn (TextInput\Mask $mask) => $mask->money(prefix: '€', thousandsSeparator: ',', decimalPlaces: 2))
                Forms\Components\TextInput::make('discount_percentage'),

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

                Tables\Columns\TextColumn::make('price')
                    ->label('Kaina')
                    ->sortable()
                    ->searchable(),

                Tables\Columns\TextColumn::make('discount_percentage')
                    ->label('Nuolaida, %')
                    ->sortable()
                    ->searchable(),
Tables\Columns\TextColumn::make('product_category.name'),
                Tables\Columns\TextColumn::make('is_active')
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
            'index' => Pages\ListProducts::route('/'),
            'create' => Pages\CreateProduct::route('/create'),
            'edit' => Pages\EditProduct::route('/{record}/edit'),
        ];
    }    
}
