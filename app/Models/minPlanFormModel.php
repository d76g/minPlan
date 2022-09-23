<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class minPlanFormModel extends Model
{
    use HasFactory;
    protected $fillable = ['priority', 'country', 'email', 'phone_number', 'age', 'receive_sms', 'receive_email', 'needs_safty_plan'];
}
