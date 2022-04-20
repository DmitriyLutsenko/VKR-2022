<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reviews;


class HomeController extends Controller
{
	public function home () {
		
		$reviews = Reviews::orderBy('created_at','desc')
		->take(10)
		->get();

		return view('front.main.home', [ 'reviews'=>$reviews ]);
	}
}
