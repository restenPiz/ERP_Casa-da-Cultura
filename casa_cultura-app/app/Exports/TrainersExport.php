<?php

namespace App\Exports;

use App\Models\User;
use Maatwebsite\Excel\Concerns\FromCollection;

class TrainersExport implements FromCollection
{
    public function collection()
    {
        return \DB::table('users')
            ->where('user_type', '=', 'Trainer')
            ->get();
    }
}
