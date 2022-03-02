<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Twentyfivebol extends Model
{
    protected $table="twentyfivebol";
	protected $primaryKey="id";
	protected $fillable=['id', 'tbol_user_id','tbol_monthly_report_id', 'tbol_branch_id','tbol_date','tbol_time','tbol_venue','tbol_in_association','tbol_conveymor','tbol_key_members','tbol_sponsors','tbol_special_thanks','tbol_brief_report','tbol_chaitra_aatma','tbol_abtyp_members','tbol_chief_guest','tbol_guest','tbol_total','tbol_preapred_by','status','updated_at',];
}
