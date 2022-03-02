<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Jvk extends Model
{
     protected $table="jvk";
	protected $primaryKey="id";
	protected $fillable=['id', 'jvk_user_id','jvk_monthly_report_id','jvk_images', 'jvk_branch_id','jvk_date','jvk_time','jvk_venue','jvk_in_association','jvk_teachers_name','jvk_chaitra_aatma','jvk_no_of_participants','jvk_convenors','jvk_key_members','jvk_sponsor','jvk_special_thanks_to','jvk_brief_report','jvk_abtyp_members','jvk_chief_guest','jvk_guest','status','jvk_total','jvk_prepared_by','updated_at','jvk_participants_list'];
}
