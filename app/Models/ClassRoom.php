<?php

namespace App\Models;

use App\Models\ClassRoom as ModelsClassRoom;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClassRoom extends Model
{

    use HasFactory;
   protected $fillable =[

    'className','teacher_id'
   ];
   //classes connect with one teacher (one to many RelationShip)
   public function teacher(){
return $this->belongsTo(Teacher::class);
   }
/******************************** 
  //A class has many student 
  public function students(){
    return $this->hasMany(Student::class);
    
       }*********************/


//A student belongs to many classes (many to many RelationShip)
public function students(){
    return $this->belongsToMany(Student::class);
    
       }


}
