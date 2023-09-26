<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blogs extends Model
{
    
    protected $fillable=['title','user_id','content'];
  
    use HasFactory;

}
