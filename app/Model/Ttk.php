<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Ttk extends Model
{
     protected $table="ttk";
	protected $primaryKey="id";
	protected $fillable=['id', 'tkm_user_id','tkm_monthly_report_id', 'tkm_branch_id','tkm_images','tkm_name','tkm_time','tkm_event_title','tkm_venue','tkm_in_association','tkm_no_of_participants','tkm_convenors','tkm_key_members','tkm_sponsors','tkm_special_thanks_to','tkm_brief_report','tkm_chaitra_aatma','tkm_abtyp_members','tkm_chief_guest','tkm_guest','tkm_total','status','tkm_prepared_by','updated_at',];
}
