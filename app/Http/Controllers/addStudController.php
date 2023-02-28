<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class addStudController extends Controller
{
    //
    public function insertform(){
        return view('addStudent');
        }
        public function insert(Request $request){
        $stud_name = $request->input('stud_name');
        $stud_email = $request->input('stud_email');
        $stud_address = $request->input('stud_address');
        $stud_course = $request->input('stud_course');
        $data=array('stud_name'=>$stud_name,"stud_email"=>$stud_email,"stud_address"=>$stud_address,"stud_course"=>$stud_course);
        DB::table('students')->insert($data);
        echo "Student record inserted successfully.<br/>";
        echo '<a href = "/insert">Click Here</a> to go back.';
        }
        }