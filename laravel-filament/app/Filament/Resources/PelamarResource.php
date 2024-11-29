<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PelamarResource\Pages;
use App\Filament\Resources\PelamarResource\RelationManagers;
use App\Models\Pelamar;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class PelamarResource extends Resource
{
    protected static ?string $model = Pelamar::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                //
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                //
                Tables\Columns\TextColumn::make('nama')->searchable(),
                Tables\Columns\TextColumn::make('noTelp'),
                Tables\Columns\TextColumn::make('alamat'),
                Tables\Columns\TextColumn::make('email'),
                Tables\Columns\TextColumn::make('posisi'),
                Tables\Columns\TextColumn::make('jenisPekerjaan'),                
                Tables\Columns\TextColumn::make('CV')                    
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
            'index' => Pages\ListPelamars::route('/'),
            'create' => Pages\CreatePelamar::route('/create'),
            'edit' => Pages\EditPelamar::route('/{record}/edit'),
        ];
    }
}
