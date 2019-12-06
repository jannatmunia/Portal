<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Company extends Model
{
  use Notifiable;
  protected $fillable=
  [ 'user_id',
    'company_name',
    'company_location',
    'select_category',
    'search_industry_type',
    'company_description',
    'company_website_url',
    'contact_person_name',
    'contact_person_designation',
    'contact_person_email',
    'contact_person_phone_number'

  ];
}
