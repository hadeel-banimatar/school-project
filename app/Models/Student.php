<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    protected $fillable =[

        'studentName','studentNumber'
       ];
       //students connect with one teacher (one to many RelationShip)
       public function teacher(){
    return $this->belongsTo(Teacher::class);
       }
       //students connect with one class (one to many RelationShip)
       public function class(){
        return $this->belongsTo(ClassRoom::class);
           }
//A student belongs to many classes (many to many RelationShip)
public function classes(){
    return $this->belongsToMany(ClassRoom::class);
    
       }


}
