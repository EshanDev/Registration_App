<?php

namespace App\Http\Controllers\ControlPanel;

use App\Agreement;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
class ControlPanelController extends Controller {
	public function index() {

		$var = Str::random(32);
		$gen = Str::substr($var, 0, 5);
		$user = 'USER-' . $gen;
		return view('registation', compact('var', 'user'));
	}

	public function CodeSending(Request $request) {
		$code = $request->input('code');
		$gen = Str::substr($code, 0, 5);
		$user = 'USER-' . $gen;
		$mail = $request->input('email');

		$data = new Agreement();
		$data->username = $user;
		$data->registration_code = $code;
		$data->email = $mail;

		$data->save();
		// dd($code);
		// RegisterCode::create([
		// 	'code' => $code['code'],
		// ]);

		//return Redirect::to('/students/register/'. $code)->with('code', $code)->with('user', $user);

		return Redirect()->route('students.register');
	}

	public function validate_email(Request $request) {
		if ($request->input('email') !== '') {
			if ($request->input('email')) {
				$rule = array('email' => 'required|email|unique:agreements');
				$validator = Validator::make($request->all(), $rule);
			}
			if (!$validator->fails()){
			    die('true');
            }
		}
		die('false');
	}

}
