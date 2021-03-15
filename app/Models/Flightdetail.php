<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Flightdetail extends Model
{
    use HasFactory;
    public $table='flightdetails';
    protected $fillable= [
        'fno','flname','departure','arrival','depdate','arrdate','deptime','arrtime','costfirst',
        'costeconomic','costbuisness','cfirst','ceconomic','cbuisness','afirst','aeconomic','abuisness','status'
    ];
    public $timestamps=false;
}
