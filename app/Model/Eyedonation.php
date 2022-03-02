<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Eyedonation extends Model
{
     protected $table="eyedonation";
	protected $primaryKey="id";
	protected $fillable=['id', 'eye_donate_user_id','eye_donate_monthly_report_id', 'eye_donate_branch_id','eye_donate_no_of_eye_donation','eye_donate_no_ofeye_bank','eye_donate_kry_members','eye_donate_special_thanks_to','eye_donate_brief_report','eye_donate_prepared_by','status','eye_donation_images','updated_at',];
}
