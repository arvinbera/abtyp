<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Yuvasangam extends Model
{
    protected $table="yuvasangam";
	protected $primaryKey="id";
	protected $fillable=['id', 'ys_user_id','ys_monthly_report_id','ys_images', 'ys_branch_id','tkm_ys_no_new_members','typ_ys_no_new_members','ys_conveynor','ys_special_thanks_to','ys_brief_reports','status','ys_prepared_by','new_member_list_updated_on_ys','updated_at','ys_participant_list',];
}
