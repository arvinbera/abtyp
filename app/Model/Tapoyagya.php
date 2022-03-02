<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Tapoyagya extends Model
{
    protected $table="tapoyagya";
	protected $primaryKey="id";
	protected $fillable=['id', 'tapoyaga_user_id','tapoyaga_monthly_report_id', 'tapoyaga_branch_id','tapoyaga_date','tapoyaga_time','tapoyaga_venue','tapoyaga_in_association','tapoyaga_conveynor','tapoyaga_key_member','tapoyaga_special_thanks','tapoyaga_brief_report','tapoyaga_prepared_by','tapoyagya_no_of_participants','tapoyagya_Participants_List','status','tapoyaga_images','updated_at','tapoyaga_chaitra_aatma','tapoyaga_abtyp_members'];
}
