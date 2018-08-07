<?php

namespace App\Http\Controllers;

use App\Brief;
use App\Http\Requests\BriefRequest;
use App\Mail\BriefEmail;
use Illuminate\Http\Request;
use Mail;

class BriefController extends Controller
{
    function index() {
        return view('test');
    }

	function addBrief(BriefRequest $request) {
        $paths = [];
		$files = $request->file('files');
		$brief = new Brief();
        $brief->name = $request->name;
        $brief->organization = $request->organization;
        $brief->services = $request->services;
        $brief->purposes = $request->purposes;
		$brief->description = $request->description;
		$brief->website = $request->website;
		$brief->deadline = $request->deadline;
		$brief->email = $request->email;
		$brief->phone = $request->phone;
		$brief->references = $request->references;
		$brief->save();
		$path = 'uploadedFiles/' . $brief->id;
        foreach ($files as $key => $file) {
            $paths[] = "$path/" . $file->getClientOriginalName();
            $files[$key] = $file->move($path, $file->getClientOriginalName());
        };
        $brief->files = json_encode($paths);
        $brief->save();
        Mail::to(["hello@artsurf.pro"])->send(new BriefEmail($brief));
        dd($files);
		return 'sdf';
	}
}
