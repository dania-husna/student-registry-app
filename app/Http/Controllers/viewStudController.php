<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Controllers\Controller;

class viewStudController extends Controller
{
    //
    public function index(){
        $users = DB::select('select * from students');
        return view('studView',['users'=>$users]);
        }
}