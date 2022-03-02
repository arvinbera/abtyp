<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Mbdd extends Model
{
     protected $table="mbdd";
	protected $primaryKey="id";
	protected $fillable=['id', 'user_id','monthly_report_id', 'branch_id','name_of_camps','date','time','venue','name_of_blood_bank','in_association','total_units_collected','camp_convenors','key_members','sponsors','special_thatnks_to','brief_reports','chaitra_aatma','abtyp_members','chief_guest','guests','total','mbdd_prepared_by','status','mbdd_images','updated_at','mbdd_total_units_collected',];
}
