<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Jsv extends Model
{
     protected $table="jsv";
	protected $primaryKey="id";
	protected $fillable=['id', 'jsv_user_id','jsv_monthly_report_id', 'jsv_branch_id','jsv_date','jsv_time','jsv_venue','jsv_in_association','jsv_sanskar_name','jsv_sanskar_name','jsv_no_of_participant','jsv_convenors','jsv_key_member','jsv_sponsors','jsv_specila_thanks_to','jsv_brief_report','jsv_chaitra_aatma','jsv_abtyp_members','jsv_chief_guest','jsv_guest','jsv_total','jsv_prepared_by','jsv_images','status','updated_at',];
}
