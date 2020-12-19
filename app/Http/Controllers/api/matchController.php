<?php

namespace App\Http\Controllers\api;
use Illuminate\Support\Facades\DB;

class matchController
{
    /**
     * 
     * 
     * @return 
     */
    public function insert_update($condition, $data) {
        DB::table('matches')
        ->updateOrInsert(
            $condition, 
            $data
        );
        return 1;
        // return DB::getPdo()->lastInsertId();
    }

    /**
     * 
     * 
     * @return 
     */
    public function getPage($page) {
        $matches = DB::table('matches')
                    ->join('teams_leagues AS tl_host', 'tl_host.id', 'matches.host')
                    ->join('teams AS host', 'host.id', 'tl_host.teamid')
                    ->join('teams_leagues AS tl_guest', 'tl_guest.id', 'matches.guest')
                    ->join('teams AS guest', 'guest.id', 'tl_guest.teamid')
                    ->select('matches.id', 'host.name AS host_name', 'host.logo AS host_logo', 'guest.name AS guest_name', 'guest.logo AS guest_logo', 'matches.state', 'matches.start', 'matches.host_goal', 'matches.guest_goal')
                    ->offset(10*($page-1))
                    ->limit(10)
                    ->orderBy('matches.start', 'desc')
                    ->get();
        return $matches;
    }

    /**
     * 
     * 
     * @return 
     */
    public function get($id) {
        $match = DB::table('matches')
                    ->join('teams_leagues AS tl_host', 'tl_host.id', 'matches.host')
                    ->join('teams AS host', 'host.id', 'tl_host.teamid')
                    ->join('teams_leagues AS tl_guest', 'tl_guest.id', 'matches.guest')
                    ->join('teams AS guest', 'guest.id', 'tl_guest.teamid')
                    ->join('leagues', 'leagues.id', 'tl_host.leagueid')
                    ->select('matches.id', 'host.name AS host_name', 'host.logo AS host_logo', 'guest.name AS guest_name', 'guest.logo AS guest_logo', 'matches.state', 'matches.start', 'matches.host_goal', 'matches.guest_goal', 'leagues.name AS league')
                    ->where('matches.id', $id)
                    ->get();
        return $match;
    }

    /**
     * 
     * 
     * @return 
     */
    public function get_range($from, $to, $userid) {
        if (is_null($userid))
            $userid = 0;

        $matches = DB::select("SELECT `matches`.`id`, `host`.`name` AS `host_name`, `host`.`logo` AS `host_logo`, `guest`.`name` AS `guest_name`, `guest`.`logo` AS `guest_logo`, `matches`.`state`, `matches`.`start`, `matches`.`host_goal`, `matches`.`guest_goal`, `leagues`.`name` AS `league`, `forecasts`.`host_goal` AS `user_h_goal`, `forecasts`.`guest_goal` AS `user_g_goal`
            FROM (SELECT * FROM `matches` WHERE `matches`.`start` BETWEEN '$from' AND '$to') AS `matches`
            INNER JOIN `teams_leagues` AS `tl_host` 
            ON `tl_host`.`id` = `matches`.`host` 
            INNER JOIN `teams` AS `host` 
            ON `host`.`id` = `tl_host`.`teamid` 
            INNER JOIN `teams_leagues` AS `tl_guest` 
            ON `tl_guest`.`id` = `matches`.`guest` 
            INNER JOIN `teams` AS `guest` 
            ON `guest`.`id` = `tl_guest`.`teamid` 
            INNER JOIN `leagues` 
            ON `leagues`.`id` = `tl_guest`.`leagueid` 
            LEFT JOIN `forecasts` ON `forecasts`.`userid`=$userid AND `forecasts`.`matchid`=`matches`.`id`
            ORDER BY `matches`.`start` ASC");

        return $matches;
    }    
}