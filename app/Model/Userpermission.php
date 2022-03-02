<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Userpermission extends Model
{
    protected $table="userpermissions";
	protected $primaryKey="id";
	protected $fillable=['id', 'user_id','seva_atdc', 'seva_mbdd', 'seva_ttf','seva_yuva_vahini','seva_eye_donation','seva_ampk','seva_atjh','seva_choka_satkar','sanskar_jain_sanskar_vidhi','sanskar_samayik_sadhak','sanskar_tapoyagya','sanskar_cps','sanskar_pd','sanskar_barah_vrat','sanskar_twenty_five_bol','sanskar_jain_vidhya_katyashala','sanskar_yuva_divas','sangathan_tkm','sangathan_yuva_sangam','sangathan_fit_yuva','sangathan_jtn','sangathan_sankalp_sangathan_yatra','sangathan_sargam','sangathan_abtyp_direct',];
}
