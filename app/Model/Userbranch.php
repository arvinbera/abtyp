<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Userbranch extends Model
{
    protected $table="userbranches";
	protected $primaryKey="id";
	protected $fillable=['id', 'user_id','branch_id', 'updated_at',];
}
