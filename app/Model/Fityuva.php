<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Fityuva extends Model
{
     protected $table="fityuva";
	protected $primaryKey="id";
	protected $fillable=['id', 'fit_yuva_user_id','fit_yuva_monthly_report_id','fit_yuva_images', 'fit_yuva_branch_id','fit_yuva_date','fit_yuva_time','fit_yuva_venue','fit_yuva_in_association','fit_yuva_event','fit_yuva_no_of_participants','fit_yuva_convenors','fit_yuva_key_members','fit_yuva_sponsors','fit_yuva_brief_report','fit_yuva_chaitrs_aatma','fit_yuva_abtyp_members','fit_yuva_chief_guest','fit_yuva_guest','fit_yuva_total','fit_yuva_prepared_by','status','fit_yuva_special_thanks_to','updated_at','fit_yuva_participant_list'];
}
