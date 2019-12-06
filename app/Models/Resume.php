<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Resume extends Model
{
  use Notifiable;
  protected $fillable=
  [
    'user_id',
    'jobseeker_name',
    'jobseeker_address',
    'jobseeker_phn_no',
    'jobseeker_email',
    'photo',
    'career_objective',
    'academic_qualification'

  ];
}
