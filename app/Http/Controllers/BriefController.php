<?php

namespace App\Http\Controllers;

use App\Brief;
use App\Http\Requests\BriefRequest;
use Illuminate\Http\Request;

class BriefController extends Controller
{
	function addBrief(BriefRequest $request) {
		dd($request);
	}
}
