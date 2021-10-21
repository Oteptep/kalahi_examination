<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MasterController extends Controller
{
    public function index(Request $request) 
    {
        $numbers = str_split($request->number);
        $new = '';
        for($i = count($numbers) -1; $i >= 0; $i--){
            $new .= $numbers[$i];
        }
        return $new;
    }
}
