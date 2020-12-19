<?php

namespace App\Http\Controllers;

class forecastsController
{
	/**
	 * 
	 * 
	 * @return 
	 */
	public function show() {
		$userid = session()->get('userid');
		$from = date('Y-m-d', strtotime("yesterday"));
		$diff = strtotime("next Saturday") - time();
		$days = floor($diff/ (60*60*24));
		if ($days == 0)
			$to = date('Y-m-d', strtotime(" + 2 days"));
		else
			$to = date('Y-m-d', strtotime("next Saturday"));

		$matchClass = app('App\Http\Controllers\api\matchController');
		$matches = $matchClass->get_range($from, $to, $userid);

		$fromScore = date('Y-m-d', strtotime(" - 7 days"));
		$scoreClass = app('App\Http\Controllers\api\scoreController');
		$scores = $scoreClass->getAll($fromScore);

		$data = array(
			'matches' => $matches,
			'scores' => $scores
		);

		return view('home')->with($data);
	}

	/**
	 * 
	 * 
	 * @return 
	 */
	public function forecasts() {
		if (!session()->has('userid')) {
			return redirect(url('ورود'));
		}

		// check validation
		$rules = [
			'matchid' => array('required', 'numeric'),
			'forecasts-host' => array('required', 'digits_between:0,99'),
			'forecasts-guest' => array('required', 'digits_between:0,99'),
		];

		$customMessages = [
			'matchid.required' => 'خطایی رخ داده است',
			'matchid.numeric' => 'خطایی رخ داده است',
			'forecasts-host.required' => 'تعداد گل های میزبان وارد نشده است.',
			'forecasts-guest.required' => 'تعداد گل های مهمان وارد نشده است.',
			'forecasts-host.digits_between' => 'تعداد گل ها عددی بین 0 تا 99 میتواند باشد.',
			'forecasts-guest.digits_between' => 'تعداد گل ها عددی بین 0 تا 99 میتواند باشد.',
		];

		request()->validate($rules, $customMessages);

		$condition = array(
			"userid" 		=> session()->has('userid'),
			"matchid" 		=> $_POST["matchid"]
		);
		$data = array(
			"userid" 		=> session()->has('userid'),
			"matchid" 		=> $_POST["matchid"],
			"host_goal" 	=> $_POST["forecasts-host"],
			"guest_goal" 	=> $_POST["forecasts-guest"]

		);

		$forecastsClass = app('App\Http\Controllers\api\forecastsController');
		$forecast = $forecastsClass->insert_update($condition, $data);
		
		if ($forecast == 0)
			return redirect()->back()->withErrors('مدت زمان پیش بینی به پایان رسیده است.');
		else
			return redirect('/');
	}
}