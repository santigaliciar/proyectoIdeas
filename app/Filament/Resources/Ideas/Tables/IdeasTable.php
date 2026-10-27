<?php

namespace App\Filament\Resources\Ideas\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Actions\ViewAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Filters\SelectFilter;
use Filament\Tables\Table;
use Filament\Actions\DeleteAction;
use Filament\Actions\RestoreAction;
use Filament\Actions\ForceDeleteAction;
use Filament\Tables\Filters\TrashedFilter;
use Filament\Actions\Action;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Models\Idea;
use Filament\Notifications\Notification; // Asegúrate de usar 'Notifications' en plural
use Filament\Forms\Components\Textarea; // <-- Importante para el campo de texto del modal

class IdeasTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('index')
                    ->label('#')
                    ->rowIndex()
                    ->toggleable(),

                TextColumn::make('titulo')
                    ->label('Idea')
                    ->searchable()
                    ->toggleable(),

                TextColumn::make('descripcion')
                    ->label('Descripción')
                    ->limit(50)
                    ->wrap()
                    ->toggleable(),

                TextColumn::make('estado')
                    ->label('Estado')
                    ->searchable()
                    ->toggleable(),

                TextColumn::make('autor')
                    ->label('Autor')
                    ->searchable()
                    ->toggleable(isToggledHiddenByDefault: true),

                TextColumn::make('categoria.nombre')
                    ->label('Categoria')
                    ->searchable()
                    ->toggleable(isToggledHiddenByDefault: true),

                TextColumn::make('created_at')
                    ->label('Creado el')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),

                TextColumn::make('updated_at')
                    ->label('Actualizado el')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                SelectFilter::make('estado')
                    ->label('Estado')
                    ->options([
                        'registrada' => 'Registrada',
                        'en revisión' => 'En revision',
                        'aprobada' => 'Aprobada',
                        'rechazada' => 'Rechazada',
                    ]),

                TrashedFilter::make(),
            ])
            ->recordActions([
                EditAction::make(),
                ViewAction::make(),
                DeleteAction::make(),
                RestoreAction::make(),
                ForceDeleteAction::make(),

                Action::make('aprobar')
                    ->label('Aprobar')
                    ->color('success')
                    ->requiresConfirmation()
                    ->modalHeading('Aprobar')
                    ->modalDescription('¿Deseas aprobar esta idea?')
                    ->action(function (Idea $record) {
                        $record->update(['estado' => 'aprobada']);

                        Notification::make()
                            ->title('Idea aprobada correctamente')
                            ->success()
                            ->send();
                    })
                    ->visible(fn(Idea $record) => $record->estado != 'aprobada'),

                Action::make('rechazar')
                    ->label('Rechazar')
                    ->color('danger')
                    ->requiresConfirmation()
                    ->modalHeading('Rechazar idea')
                    ->modalDescription('Por favor indica el motivo del rechazo.')
                    ->schema([
                        Textarea::make('observacion')
                            ->label('Motivo del rechazo')
                            ->required()
                    ])
                    ->action(function (Idea $record, array $data) {
                        $record->update([
                            'estado' => 'rechazada',
                            'observacion' => $data['observacion'],
                        ]);

                        Notification::make()
                            ->title('Idea rechazada correctamente')
                            ->success()
                            ->send();
                    })
                    ->visible(fn(Idea $record) => $record->estado != 'rechazada'),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    //DeleteBulkAction::make(),
                ]),
            ]);
    }
}