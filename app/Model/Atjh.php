<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Atjh extends Model
{
    protected $table="atjh";
	protected $primaryKey="id";
	protected $fillable=['id', 'atjh_user_id','atjh_monthly_report_id','atjh_images','atjh_branch_id','atjh_ADDRESS','atjh_IN_ASSOCIATION','atjh_NUMBER_OF_OCCUPANTS','atjh_TOTAL_STRENGHT','atjh_TOTAL_FEE','atjh_DONATION','atjh_TOTAL_FOOD_EXPENSES','atjh_TOTAL_SALARIES','atjh_TOTALOF_OTHER_EXPENSES','atjh_CONVENORS','atjh_KEY_MEMBERS','atjh_SPECIAL_THANKS_TO','atjh_BREIF_REPORT','atjh_image','atjh_PREPARED_BY','atjh_status',




	'updated_at'];
}
