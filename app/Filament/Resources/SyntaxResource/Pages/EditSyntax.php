<?php

namespace App\Filament\Resources\SyntaxResource\Pages;

use App\Filament\Resources\SyntaxResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditSyntax extends EditRecord
{
    protected static string $resource = SyntaxResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
