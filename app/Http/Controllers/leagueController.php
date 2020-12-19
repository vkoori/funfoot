<?php

namespace App\Http\Controllers;

class leagueController
{
	/**
	 * 
	 * 
	 * @return 
	 */
	public function addForm() {
		$country = app('App\Http\Controllers\api\countryController');
		$countries = $country->getAll();
		return view('admin.set-league')->with('countries', $countries);
	}

	/**
	 * 
	 * 
	 * @return 
	 */
	public function addLeague() {
		$name = $_POST["name"];
		$countryid = $_POST["country"];
		$data = array(
			"name" 		=> $name,
			"countryid" => $countryid
		);
		$leagueClass = app('App\Http\Controllers\api\leagueController');
		$leagueClass->insert($data);

		return redirect('admin/leagues/1')->with('success', 'عملیات با موفقیت انجام شد.');
	}

	/**
	 * 
	 * 
	 * @return 
	 */
	public function allLeagues($page) {
		$leagueClass = app('App\Http\Controllers\api\leagueController');
		$leagues = $leagueClass->getPage($page);

		return view('admin.leagues')->with('leagues', $leagues);
	}

	/**
	 * 
	 * 
	 * @return 
	 */
	public function teamForm() {
		$leagueClass = app('App\Http\Controllers\api\leagueController');
		$leagues = $leagueClass->getAll();

		$teamClass = app('App\Http\Controllers\api\teamController');
		$teams = $teamClass->getAll();

		$data = array(
			"leagues" 	=> $leagues,
			"teams" 	=> $teams
		);

		return view('admin.team-league')->with($data);
	}

	/**
	 * 
	 * 
	 * @return 
	 */
	public function teamLeague() {
		$leagueid = $_POST["leagues"];
		$teamid = $_POST["team"];
		$season = $_POST["season"];
		
		$data = array(
			"leagueid" 	=> $leagueid,
			"teamid" 	=> $teamid,
			"season" 	=> $season
		);

		$leagueClass = app('App\Http\Controllers\api\leagueController');
		$leagues = $leagueClass->teamLeague($data);

		return redirect('admin/team-league')->with('success', 'عملیات با موفقیت انجام شد.');
	}

}