<?php

namespace App\Http\Controllers\api;
use Illuminate\Support\Facades\DB;

class teamController
{
    /**
     * 
     * 
     * @return 
     */
    public function insert($data) {
        DB::table('teams')->insert($data);
        return 1;
        // return DB::getPdo()->lastInsertId();
    }

    /**
     * 
     * 
     * @return 
     */
    public function getPage($page) {
        $teams = DB::table('teams')
                ->join('countries', 'countries.id', 'teams.countryid')
                ->select('teams.id', 'teams.name', 'teams.logo', DB::raw('countries.name AS country'), 'countries.flag')
                ->offset(10*($page-1))
                ->limit(10)
                ->get();
        return $teams;
    }

    /**
     * 
     * 
     * @return 
     */
    public function getAll() {
        $teams = DB::table('teams')
                ->join('countries', 'countries.id', 'teams.countryid')
                ->select('teams.id', 'teams.name', 'teams.logo', DB::raw('countries.name AS country'), 'countries.flag')
                ->get();
        return $teams;
    }
}