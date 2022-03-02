<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Chokasatkar extends Model
{
     protected $table="chokasatar";
	protected $primaryKey="id";
	protected $fillable=['id', 'choka_satkar_user_id','choka_satkar_monthly_report_id', 'choka_satkar_branch_id','choka_satkar_date_form','choka_satkar_date_to','choka_satkar_time','choka_satkar_no_of_days','choka_satkar_amount_paid','choka_satkar_sponsor','choka_satkar_in_association','choka_satkar_special_thanks_to','choka_satkar_brief_reports','status','choka_satkarprepared_by','chokasatar_images','updated_at',];
}
