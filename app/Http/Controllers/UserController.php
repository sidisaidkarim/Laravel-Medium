<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    public function getInfos()
    {
		return view('info');
  	}

  	public function postInfos(Request $request)
  	{
  		return 'Le nom est ' . $request->input('nom');
  	}

}
