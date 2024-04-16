<?php

namespace App\Exports;

use App\Models\UserModel;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class UserExport implements FromView
{
    // /**
    // * @return \Illuminate\Support\Collection
    // */
    public function view():View

    {
        $members = userModel::with('level')
        ->whereRelation('level', 'level_nama', 'Member' )
        ->get();

        return view('TableExport.tabelMember', ['members' => $members]);

    }
}
