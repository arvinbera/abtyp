<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Booksloat extends Model
{
    protected $table="book_sloats";
	protected $primaryKey="id";
	protected $fillable=['id', 'user_id','user_name', 'project_on','tentative_date','description','created_at','updated_at','tentative_date_to',];
}
