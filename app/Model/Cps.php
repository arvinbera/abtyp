<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Cps extends Model
{
    protected $table="cps";
	protected $primaryKey="id";
	protected $fillable=['id', 'cps_user_id','cps_monthly_report_id', 'cps_branch_id','cps_date','cps_to','cps_venue','cps_in_association','cps_chaitra_aatma','cps_abtyp_members','cps_chief_guest','cps_guest','cps_total_presesnt','cps_conveynor','cps_key_member','cps_sponcer','cps_special_thanks','cps_brief_report','cps_NUMBER_OF_PARTICIPANTS','cps_Faculty_Name','status','cps_prepared_by','updated_at','cps_images','cps_participants_list'];
}
