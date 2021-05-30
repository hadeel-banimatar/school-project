<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
class StudentController extends Controller
{
    //
    public function student() { 
        // Your logic here 
        return view('student'); 
       } 

       public function teacher() { 
        // Your logic here 
        return view('teacher'); 
       } 
       public function class() { 
        // Your logic here 
        return view('class'); 
       } 
}
