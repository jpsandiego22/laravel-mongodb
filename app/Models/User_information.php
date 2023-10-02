<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Jenssegers\Mongodb\Eloquent\Model;

class User_information extends Model
{
    protected $connection = 'mongodb';
    protected $collection = 'user_information';
   
    protected $fillable = [
        'fname', 'lname','mname','prefix','age','address','favorite'
    ];
}
