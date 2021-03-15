<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Register extends Model
{
   
    use HasFactory;
    public $table='registers';
    protected $fillable=[
          'fname','lname','dob','age','gender','address','phno','adharno','email','password'];
     public $timestamps=false;
}
