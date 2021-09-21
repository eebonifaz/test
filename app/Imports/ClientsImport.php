<?php

namespace App\Imports;

use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;

use Maatwebsite\Excel\Concerns\WithMultipleSheets;
use Maatwebsite\Excel\Concerns\WithConditionalSheets;

class ClientsImport implements WithMultipleSheets
{
    use WithConditionalSheets;


    public function conditionalSheets(): array
    {
        return [
            // 'DIM FACTURA' => new FirstSheetImport(),
            'DATA' => new SecondSheetImport(),
        ];
    }
    public function onUnknownSheet($sheetName)
    {
        // E.g. you can log that a sheet was not found.
        info("Sheet {$sheetName} was skipped");
    }
}
