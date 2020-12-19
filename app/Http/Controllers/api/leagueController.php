<?php

namespace App\Http\Controllers\api;
use Illuminate\Support\Facades\DB;

class leagueController
{
    /**
     * 
     * 
     * @return 
     */
    public function insert($data) {
        $leagues = DB::table('leagues')->insert($data);

        return 1;
    }

    /**
     * 
     * 
     * @return 
     */
    public function getPage($page) {
        $leagues = DB::table('leagues')
                    ->join('countries', 'countries.id', 'leagues.countryid')
                    ->select('leagues.id', 'leagues.name', DB::raw('countries.name AS country'), 'countries.flag')
                    ->offset(10*($page-1))
                    ->limit(10)
                    ->get();

        return $leagues;
    }

    /**
     * 
     * 
     * @return 
     */
    public function getAll() {
        $leagues = DB::table('leagues')
                    ->join('countries', 'countries.id', 'leagues.countryid')
                    ->select('leagues.id', 'leagues.name', DB::raw('countries.name AS country'), 'countries.flag')
                    ->get();

        return $leagues;
    }

    /**
     * 
     * 
     * @return 
     */
    public function teamLeague($data) {
        $leagues = DB::table('teams_leagues')->insert($data);

        return 1;
    }

    /**
     * 
     * 
     * @return 
     */
    public function ListOfLeagues() {
        $leagues = DB::table('teams_leagues')
                    ->join('leagues', 'leagues.id', 'teams_leagues.leagueid')
                    ->select('teams_leagues.id', 'teams_leagues.season', 'leagues.name AS league')
                    ->groupBy('teams_leagues.leagueid')
                    ->orderBy('season', 'desc')
                    ->get();

        return $leagues;
    }

    /**
     * 
     * 
     * @return 
     */
    public function teamOfLeagues($teams_leaguesid) {
        $leagues = DB::select("SELECT `teams_leagues`.`id`, `teams`.`name`, `teams`.`logo`, `countries`.`name` AS `country`
                                FROM (SELECT `leagueid`,`season` FROM `teams_leagues` WHERE `id`=$teams_leaguesid) AS `tl`
                                INNER JOIN `teams_leagues`
                                ON `teams_leagues`.`leagueid`=`tl`.`leagueid` AND `teams_leagues`.`season`=`tl`.`season`
                                INNER JOIN `teams`
                                ON `teams`.`id`=`teams_leagues`.`teamid`
                                INNER JOIN `countries`
                                ON `countries`.`id`=`teams`.`countryid`");

        return $leagues;
    }

}