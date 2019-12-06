<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\Jobseekr as Authenticatable;

class Jobseekr extends Model
{
    use Notifiable;
    protected $fillable=[
      'user_id',
      'gender',
      'skill_list',
      'phone_number',

    ];
}
