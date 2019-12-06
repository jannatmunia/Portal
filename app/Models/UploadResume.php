<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\UploadResume as Authenticatable;
use Illuminate\Database\Eloquent\SoftDeletes;

class UploadResume extends Model
{
    use Notifiable;
use SoftDeletes;
protected $fillable=[
'jobseekers_id',
  'title',
  'description'
  // 'photo'

];

}
