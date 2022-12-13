<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Emergencyroom extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'address', 'post_code', 'city', 'country', 'phone', 'email', 'website'];
}
