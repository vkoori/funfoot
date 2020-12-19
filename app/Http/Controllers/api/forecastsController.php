<?php

namespace App\Http\Controllers\api;
use Illuminate\Support\Facades\DB;

class forecastsController
{
    /**
     * 
     * 
     * @return 
     */
    public function insert_update($condition, $data) {
        $match = DB::table('matches')
                    ->select('state')
                    ->where('id', $data["matchid"])
                    ->first();
        if ($match->state == -1) {
            DB::table('forecasts')
            ->updateOrInsert(
                $condition, 
                $data
            );
            return 1;
            // return DB::getPdo()->lastInsertId();
        } else {
            return 0;
        }
    }

    /**
     * 
     * 
     * @return 
     */
    public function get_forecast($matchid) {
        $forecasts = DB::table('forecasts')
                    ->where('matchid', $matchid)
                    ->get();

        return $forecasts;
    }

}