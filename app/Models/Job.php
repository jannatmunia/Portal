<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
class Job extends Model
{
  use Notifiable;
  protected $fillable =
  [
    'user_id',
    'category_id',
    'job_title',
    'com_name',
    'vacancy',
    'job_context',
    'job_type',
    'description',
    'location',
    'salary',
    'status'


  ];
  public function category() {
    return $this->hasOne(Category::class, 'id','category_id');
  }
}
