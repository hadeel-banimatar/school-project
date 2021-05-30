<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    use HasFactory;
    protected $fillable =[

        'teacherName','teacherNumber','class_id'
       ];
       //A teacher has many classes
       public function classes(){
        return $this->hasMany(ClassRoom::class);
           }
           //A teacher has many students
           public function students(){
            return $this->hasMany(student::class);
               }
}
