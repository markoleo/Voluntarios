<?php

namespace App\Exports;

use App\Models\Toppings;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class ToppingsExport implements FromView
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function view(): View
    {
        return view('export.toppings', [
            'toppings' => Toppings::all()
        ]);  }
}
