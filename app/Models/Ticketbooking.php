<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ticketbooking extends Model
{
    //ticketbookings
    public $table='ticketbookings';
    protected $fillable= [
        'class','ticketcharge','flightid','userid'];
    public $timestamps=false;
    use HasFactory;
}
