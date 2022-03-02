<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Newsgallery extends Model
{
    protected $table="Newsgalleries";
	protected $primaryKey="id";
	protected $fillable=['id', 'newspost_id','image','updated_at',];
}
