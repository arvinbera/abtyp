<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Ampk extends Model
{
    protected $table="ampk";
	protected $primaryKey="id";
	protected $fillable=['id', 'ampk_user_id','ampk_monthly_report_id', 'ampk_branch_id','ampk_address','ampk_in_association','ampk_chaitra_atma_visited','ampk_date','ampk_conveynor','ampk_key_members','ampk_sponsors','ampk_special_thanks_to','ampk_brief_report','ampk_prepared_by','status','ampk_images','updated_at',];
}
