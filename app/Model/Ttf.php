<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Ttf extends Model
{
    protected $table="ttf";
	protected $primaryKey="id";
	protected $fillable=['id', 'user_id','monthly_report_id', 'branch_id','ttf_date','ttf_time','ttf_venue','ttf_in_associati','ttf_number_Of_participants','ttf_ndrf_trainer_ame','ttf_stage','ttf_convenors','ttf_key_members','ttf_sponsors','ttf_special_thanks_to','ttf_brief_reports','ttf_chaitra_aatma','ttf_abtyp_members','ttf_chief_guest','status','ttf_guests','ttf_total','ttf_prepared_by','ttf_images','updated_at',];
}
