<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Samayiksadhak extends Model
{
     protected $table="samayiksadhak";
	protected $primaryKey="id";
	protected $fillable=['id', 'ss_user_id','ss_monthly_report_id', 'ss_branch_id','ss_date','ss_time','ss_venue','ss_in_association','ss_jain_samayik_festival','ss_total_participants','ss_total_no_of_samayik_sadhak','ss_donation_of_samayik_kits','ss_conveynor','ss_key_member','ss_special_thanks_to','ss_brief_report','status','ss_prepared_by','ss_images','updated_at','ss_chaitra_aatma','ss_abtyp_members'];
}
