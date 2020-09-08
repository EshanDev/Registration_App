<?php

namespace App\Http\Controllers\ControlPanel;

use App\Http\Controllers\Controller;
use App\RegisterCode;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Str;

class ControlPanelController extends Controller
{
	public function index()
	{

		$var = Str::random(32);
		$gen = Str::substr($var, 0, 5);
		$user = 'USER-' . $gen;
		return view('registation', compact('var', 'user'));
	}

	public function CodeSending(Request $request)
	{
		$code = $request->input('code');
		$gen = Str::substr($code, 0, 5);
		$user = 'USER-' . $gen;
		// dd($code);
		// RegisterCode::create([
		// 	'code' => $code['code'],
		// ]);

		return Redirect::to('/students/register?code=' . $code)->with('code', $code)->with('user', $user);
	}
}
