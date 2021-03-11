<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostsController extends Controller
{
	public function __construct(){
		$this->middleware('auth');
	}	
	public function create(){
		return view('posts.create');
	}

	public function store(){
		$data = request()->validate([
			'description' => 'required',
			'image' => ['required','image'],
		]);

		$imagepath = request('image')->store('uploads','public');


		auth()->user()->posts()->create([
			'description' => $data['description'],
			'image' => $imagepath,
		]);

		return redirect('/profile/'. auth()->user()->id);
	
	}

}