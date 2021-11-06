<?php

namespace App\Exports;

use App\Models\Items;
use Maatwebsite\Excel\Concerns\FromCollection;

class ItemsExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Items::all();
    }
}
