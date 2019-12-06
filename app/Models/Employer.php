<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Employer extends Model
{
  protected $fillable=[
    'name',

    'phoneNumber',
    'email',
    'address',
    'description'
  ];
}
