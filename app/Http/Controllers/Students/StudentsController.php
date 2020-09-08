<?php

namespace App\Http\Controllers\Students;

use App\Http\Controllers\Controller;

class StudentsController extends Controller {
	public function index() {
		return view('students');
	}
}
