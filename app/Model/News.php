<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    protected $table="newes";
	protected $primaryKey="id";
	protected $fillable=['id', 'user_id','user_name','title','submitted_by', 'image','newsdetails','updated_at',];
}
