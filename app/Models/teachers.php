<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class teachers extends Model
{
    protected $fillable = [
        'first_name',
        'last_name',
        'phone',
        'subject',
        'class_name'
    ];



}
