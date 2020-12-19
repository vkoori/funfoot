<?php

namespace App\Http\Controllers;

class teamController
{
	/**
	 * 
	 * 
	 * @return 
	 */
	public function addForm() {
		$country = app('App\Http\Controllers\api\countryController');
		$countries = $country->getAll();

		return view('admin.set-team')->with('countries', $countries);
	}

	/**
	 * 
	 * 
	 * @return 
	 */
	public function insert() {
		$upload = app('App\Http\Controllers\api\uploadController');
		$dir = public_path()."/assets/images/logo/";
		$logo = $upload->upload($dir, $_FILES["logo"]);

		$data = array(
			"id" 		=> null,
			"name" 		=> $_POST['name'],
			"logo" 		=> $logo,
			"countryid" => $_POST['country'],
		);
		$team = app('App\Http\Controllers\api\teamController');
		$team->insert($data);

		return redirect('admin/new-team')->with('success', 'ثبت تیم با موفقیت انجام شد.');
	}

	/**
	 * 
	 * 
	 * @return 
	 */
	public function allTeams($page) {
		$team = app('App\Http\Controllers\api\teamController');
		$teams = $team->getPage($page);

		return View('admin/teams')->with('teams', $teams);
	}

}