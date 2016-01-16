<?php 
namespace App\Http\Controllers;


use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;


class AdminController extends Controller {

    public function getHome()
    {
       // return view('panels.admin.home');
    	// return view('user.dashboard');

    	$user=\Auth::user();
        $kupons=\App\Kupon::all();
        return view('panels.admin.home')->withUser($user)->withKupons($kupons);
    }

}