<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Monthlyreport extends Model
{
    protected $table="monthlyreports";
	protected $primaryKey="id";
	protected $fillable=['id', 'branch_id','user_id', 'email_id','ph_no','month','ecw_meeting_date','other_activity','photo','filled_by','filled_by_role','monthly_report_photo','updated_at'];
}
