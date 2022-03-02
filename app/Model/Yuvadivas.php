<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Yuvadivas extends Model
{
     protected $table="yuvadivas";
	protected $primaryKey="id";
	protected $fillable=['id', 'user_id','report_id', 'branch_id','yd_date','yd_images','yd_time','yd_venue','yd_in_association','yd_topic','yd_no_of_participants','yd_convenors','yd_key_members','yd_sponsors','yd_special_thanks_to','status','yd_brief_reports','yd_note','updated_at','yuvadivas_Chaitra_Aatma','yuvadivas_ABTYP','yuvadivas_Chief_Guest','yuvadivas_Guests','yuvadivas_Total','yuvadivas_Prepared'];
}
