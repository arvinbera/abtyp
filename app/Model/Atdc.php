<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Atdc extends Model
{
    protected $table="atdc";
	protected $primaryKey="id";
	protected $fillable=['id', 'user_id','monthly_report_id', 'branch_id','total_no_of_billing','total_no_of_pathology_patients','no_of_dental_patients','no_of_x_ray_patients','no_of_sonography_patients','no_of_opd_patients','total_no_of_inventory_used','special_donation','special_activity','chnage_in_machinery','atdc_key_members','brief_reporting','atdc_status','atdc_prepared_by','center_name','atdc_images','updated_at','atdc_special_activity_or_camp','atdc_total_amount_of_collection_at_amms'];
}
