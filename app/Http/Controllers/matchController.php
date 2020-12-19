<?php

namespace App\Http\Controllers;

class matchController
{
	/**
	 * 
	 * 
	 * @return 
	 */
	public function addForm() {
		if (isset($_GET["teams_league"])) {
			$team = app('App\Http\Controllers\api\leagueController');
			$teams = $team->teamOfLeagues($_GET["teams_league"]);
			$data = array(
				"teams" => $teams,
				"step" => 2
			);
		} else {
			$leagueClass = app('App\Http\Controllers\api\leagueController');
			$leagues = $leagueClass->ListOfLeagues();

			$data = array(
				"step" 		=> 1,
				"leagues" 	=> $leagues
			);
		}
		return view('admin.set-match')->with($data);
	}

	/**
	 * 
	 * 
	 * @return 
	 */
	public function insert_update($id=NULL) {
		$state = (isset($_POST["state"])) ? $_POST["state"] : -1 ;
		$start = $_POST["start"];
		$host_goal = (isset($_POST["host_goal"]) AND $_POST["host_goal"] != '') ? $_POST["host_goal"] : NULL ;
		$guest_goal = (isset($_POST["guest_goal"]) AND $_POST["guest_goal"] != '') ? $_POST["guest_goal"] : NULL ;
		$data = array(
			"state" 	=> $state,
			"start" 	=> $start,
			"host_goal" => $host_goal,
			"guest_goal" => $guest_goal
		);
		if (isset($_POST["host"])) {
			$host = $_POST["host"];
			$guest = $_POST["guest"];
			$data["host"] = $host;
			$data["guest"] = $guest;
			
		}

		$condition = array(
			"id" 		=> $id
		);

		$matchClass = app('App\Http\Controllers\api\matchController');
		$match = $matchClass->insert_update($condition, $data);

		if ($state == 1) {
			$forecastsClass = app('App\Http\Controllers\api\forecastsController');
			$forecasts = $forecastsClass->get_forecast($id);
			$score = array();
			foreach ($forecasts as $f) {
				if ($f->host_goal == $host_goal AND $f->guest_goal == $guest_goal)
					array_push($score, ['userid'=>$f->userid, 'score'=>5]);
				elseif(($f->host_goal > $f->guest_goal AND $host_goal > $guest_goal) OR ($f->host_goal == $f->guest_goal AND $host_goal == $guest_goal) OR ($f->host_goal < $f->guest_goal AND $host_goal < $guest_goal))
					array_push($score, ['userid'=>$f->userid, 'score'=>3]);
				else
					array_push($score, ['userid'=>$f->userid, 'score'=>1]);
			}

			$scoreClass = app('App\Http\Controllers\api\scoreController');
			$x = $scoreClass->insert($score);
		}

		return redirect('admin/matches/1')->with('success', 'عملیات با موفقیت انجام شد.');
	}

	/**
	 * 
	 * 
	 * @return 
	 */
	public function allMatches($page) {
		$matchClass = app('App\Http\Controllers\api\matchController');
		$matches = $matchClass->getPage($page);

		return view('admin.matches')->with('matches', $matches);
	}

	/**
	 * 
	 * 
	 * @return 
	 */
	public function editMatch($id) {
		$matchClass = app('App\Http\Controllers\api\matchController');
		$match = $matchClass->get($id);
		$match = $match[0];

		return view('admin.edit-match')->with('match', $match);
	}

}