<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Pd extends Model
{
    protected $table="pd";
	protected $primaryKey="id";
	protected $fillable=['id', 'pd_user_id','pd_monthly_report_id',
               'pd_branch_id','pd_date','pd_time','pd_venue','pd_in_association','pd_teachers_name','pd_no_of_participants','pd_convenors','pd_kry_member','pd_sponsors','pd_special_thanks_to','pd_brief_report','pd_chaitra_aatma','pd_abtyp_members','pd_chief_guest','pd_guest','pd_total','pd_prepared_by','status','updated_at','pd_no_of_the_paticipants','created_at','pd_images'];
}
