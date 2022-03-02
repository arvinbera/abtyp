<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Barahvarat extends Model
{
    protected $table="barahvarat";
	protected $primaryKey="id";
	protected $fillable=['id', 'bv_user_id','bv_monthly_report_id','bv_images', 'bv_branch_id','bv_date','bv_time','bv_venue','bv_in_association','bv_no_of_participant','bv_sanskar_name','bv_convenors','bv_key_members','bv_sponsors','bv_special_thanks_to','bv_brief_report','bv_chaitra_aatma','bv_abtyp_members','bv_chief_guest','bv_guets','status','bv_total','bv_prepared_by','updated_at',];
}
