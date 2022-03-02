<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Yuvavahini extends Model
{
     protected $table="yuvavahini";
	protected $primaryKey="id";
	protected $fillable=['id', 'yuva_vahini_user_id','yuva_vahini_monthly_report_id', 'yuva_vahini_branch_id','yuva_vahini_date_form','yuva_vahini_date_to','yuva_vahini_time','yuva_vahini_no_Of_days','yuva_vahini_no_of_members','yuva_vahini_total_distance','yuva_vahini_no_of_yv_jackets_collected','yuva_vahini_availed_abtyp_accomodation','yuva_vahini_availed_satkar','status','yuva_vahini_brief_report','yuva_vahini_prepared_by','yuvavahini_images','updated_at',];
}
