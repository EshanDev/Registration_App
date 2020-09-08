<?php

namespace App\Http\Controllers\Students;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
	public function index($code = null)
	{
		// return $user;
		return view('students.register', compact('code'));
	}

	public function register(Request $request)
	{
		$validateData = $request->validate([
			'st_name' => 'required|string|digits:10'
		], $message = [
			'st_name.required' => "รหัสนักศึกษาไม่ถูกต้อง"
		]);

		$input = $request->input();
		dd($input);
	}
}
