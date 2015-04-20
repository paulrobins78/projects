<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class PagesController extends Controller {

	//
	public function about(){
		$name = 'Paolo Pettirossi';
		return view('pages.about')->with([
			'first' => 'Paolo',
			'last'=> 'Pettirossi'
			
		]);
	}

}
