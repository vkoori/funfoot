<?php

namespace App\Http\Controllers\api;
use Illuminate\Support\Facades\DB;

class scoreController
{
    /**
     * 
     * 
     * @return 
     */
    public function insert($data) {
        DB::table('scores')->insert($data);
        return 1;
        // return DB::getPdo()->lastInsertId();
    }

    /**
     * 
     * 
     * @return 
     */
    public function getAll($from = "1999-01-01") {
        $scores = DB::select("SELECT `users`.`mobile`, `scores`.`score`
                            FROM (SELECT `userid`, SUM(`score`) AS `score` FROM `scores` WHERE `date`>'$from' GROUP BY `userid`) AS `scores` 
                            INNER JOIN `users`
                            ON `scores`.`userid`=`users`.`id`");
        return $scores;
    }

}