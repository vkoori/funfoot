<?php

namespace App\Http\Controllers\api;
use Illuminate\Support\Facades\DB;

class countryController
{
    /**
     * 
     * 
     * @return 
     */
    public function getAll() {
        $countries = DB::table('countries')
                    ->get();
        return $countries;
    }


}