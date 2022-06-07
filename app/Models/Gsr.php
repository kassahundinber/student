<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gsr extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'firstname',
        'middlename',
        'lastname',
        'yearofgraduation',
        'qualification',
        'gender',
        'department',
        'batch'
        ];
}
