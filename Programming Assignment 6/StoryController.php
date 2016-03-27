<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Story;

class StoryController extends Controller
{
     public function index()
	{
		$stories = Story::with('tags')->get();
		return view('stories', ['stories' => $stories]);
	}
	
	public function tags()
	{
		$tags = Tag::all();
		return view('tags',['tags'=>$tags]);
	}
}
