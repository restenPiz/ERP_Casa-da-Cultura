<?php

namespace App\Exports;

use App\Models\artist;
use Maatwebsite\Excel\Concerns\FromCollection;

class ArtistExport implements FromCollection
{
    public function collection()
    {
        return artist::all();
    }
}
