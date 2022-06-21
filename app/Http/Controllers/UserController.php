<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function home()
    {
        return view ('home');
    }
    public function data(Request $request)
    {
        if(isset($_POST["bhs"]))
	        $bahasa = implode(", ",$_POST["bhs"]);
            
        $text = $request->input(htmlspecialchars('text'));
        $number = $request->input('number');
        $gender = $request->input('gender');
        $kota = $request->input('kota');
        $bahasa = $request->input('bahasa[]');
         
        if(isset($bahasa)){
	        $bhs = implode(",",$bahasa);
            
        }
        return $text.", ".$number.", ".$gender.",$kota ".$bahasa;
    }
}
