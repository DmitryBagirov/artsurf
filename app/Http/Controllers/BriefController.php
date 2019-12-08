<?php

namespace App\Http\Controllers;

use Mail;
use App\Brief;
use App\Http\Requests\BriefRequest;
use App\Mail\BriefEmail;

class BriefController extends Controller
{
	function create (BriefRequest $request)
	{
		$brief = new Brief();
		$files = $request->file('files');
		
		$brief
			->fill($request->only([
			    'name',
				'from',
				'services',
				'purposes',
				'files_description',
				'website',
				'deadline',
				'email',
				'phone',
				'references'
			]))
			->save();

		Mail::to(["hello@artsurf.pro"])->send(new BriefEmail($brief, $files));
		
		return response()->json([
			'success' => true
		]);
	}
}
