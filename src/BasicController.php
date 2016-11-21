<?php

namespace Nxb\Basic;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BasicController extends Controller
{
    //

	public function index(){

		$title = "This is basic package";

		return view("basic::index", compact('title'));
	}

}
