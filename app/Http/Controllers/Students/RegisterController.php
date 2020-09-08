<?php

namespace App\Http\Controllers\Students;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
	public function index($code = null)
	{
		return view('students.register', compact('code'));
	}

	public function register(Request $request)
	{
		$input = $request->input();
		dd($input);
	}
}
