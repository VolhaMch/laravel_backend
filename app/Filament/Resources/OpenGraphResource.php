<?php

namespace App\Filament\Resources;

use App\Filament\Resources\OpenGraphResource\Pages;
use App\Filament\Resources\OpenGraphResource\RelationManagers;
use App\Models\OpenGraph;
use Filament\Forms;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Tables\Columns\TextColumn;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class OpenGraphResource extends Resource
{
    protected static ?string $model = OpenGraph::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
               TextInput::make('url')->required()->columnSpanFull(),
                TextInput::make('og_type'),
                TextInput::make('og_title'),
                TextInput::make('og_url'),
                TextInput::make('og_plural_title'),
                TextInput::make('og_image'),
                Textarea::make('og_descriptioon'),

            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('url')->sortable(),
                TextColumn::make('og_title')->sortable(),
                Tables\Columns\ImageColumn::make('og_image')->sortable(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
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
            'index' => Pages\ListOpenGraphs::route('/'),
            'create' => Pages\CreateOpenGraph::route('/create'),
            'edit' => Pages\EditOpenGraph::route('/{record}/edit'),
        ];
    }
}
