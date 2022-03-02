<?php

/*=============================Branch Login/ Logout=======================================*/

//use Illuminate\Routing\Route;
use Illuminate\Support\Facades\Route;

Route::get('/monthly-report', 'Branch\BranchController@index')->name('branch.dashboard');
Route::get('/stat-dashboard', 'Branch\BranchController@stat_dashboard')->name('branch.stat_dashboard');
Route::get('/login', 'Auth\BranchLoginController@showloginform')->name('branch.login');
Route::post('/login', 'Auth\BranchLoginController@login')->name('branch.login.submit');
Route::get('/logout','Auth\BranchLoginController@logout')->name('branch.logout');

/*=============================Branch password change=======================================*/
Route::get('/password-change', 'Branch\BranchController@change_password_form')->name('branch.change-password');
Route::post('/password-change', 'Branch\BranchController@password_upadte')->name('branch.password.update');




/*=============================User Maanagement=======================================*/
Route::get('/user-list','Branch\UserManagementController@user_list')->name('branch.user-list');






/*=============================Seva Maanagement=======================================*/
Route::get('/ampk-list','Branch\SevaManagementController@ampk_list')->name('branch.ampk-list');
Route::get('/atdc-list','Branch\SevaManagementController@atdc_list')->name('branch.atdc-list');

Route::get('/mbdd-list-list','Branch\SevaManagementController@mbdd_list')->name('branch.mbdd-list');

Route::get('/ttf-list-list','Branch\SevaManagementController@ttf_list')->name('branch.ttf-list');

Route::get('/yuva-vahini-list','Branch\SevaManagementController@yuva_vahini_list')->name('branch.yuva-vahini-list');

Route::get('/eye-donation-list','Branch\SevaManagementController@eye_donation_list')->name('branch.eye-donation-list');

Route::get('/atjh-list','Branch\SevaManagementController@atjh_list')->name('branch.atjh-list');

Route::get('/choka-satkar-list','Branch\SevaManagementController@choka_satkar_list')->name('branch.choka-satkar-list');




/*=============================Sanskar Maanagement=======================================*/
Route::get('/jain-sanskar-vidhi-list','Branch\SanskarManagementController@jain_sanskar_vidhi_list')->name('branch.jain-sanskar-vidhi-list');
Route::get('/samayik-sadhak-list','Branch\SanskarManagementController@samayik_sadhak_list')->name('branch.samayik-sadhak-list');

Route::get('/tapoyagya-list','Branch\SanskarManagementController@tapoyagya_list')->name('branch.tapoyagya-list');

Route::get('/cps-list','Branch\SanskarManagementController@cps_list')->name('branch.cps-list');

Route::get('/pd-list','Branch\SanskarManagementController@pd_list')->name('branch.pd-listipd-list');

Route::get('/barah-vrat-list','Branch\SanskarManagementController@barah_vrat_list')->name('branch.barah-vrat-list');

Route::get('/twenty-bol-list','Branch\SanskarManagementController@twenty_bol_list')->name('branch.twenty-bol-list');

Route::get('/jain-vidhya-katyashala-list','Branch\SanskarManagementController@jain_vidhya_katyashala_list')->name('branch.jain-vidhya-katyashala-list');

Route::get('/yuva-divas-list','Branch\SanskarManagementController@yuva_divas_list')->name('branch.yuva-divas-list');






/*=============================Sangathan Maanagement=======================================*/
Route::get('/abtyp-direct-list','Branch\SangathanManagementController@abtyp_direct_list')->name('branch.abtyp-direct-list');
Route::get('/fit-yuva-list','Branch\SangathanManagementController@fit_yuva_list')->name('branch.fit-yuva-list');

Route::get('/jtn-list','Branch\SangathanManagementController@jtn_list')->name('branch.jtn-list');

Route::get('/sankalp-sangathan-yatra-list','Branch\SangathanManagementController@sankalp_sangathan_yatra_list')->name('branch.sankalp-sangathan-yatra-list');

Route::get('/sargam-list','Branch\SangathanManagementController@sargam_list')->name('branch.sargam-list');

Route::get('/tkm-list','Branch\SangathanManagementController@tkm_list')->name('branch.tkm-list');

Route::get('/yuva-sangam-list','Branch\SangathanManagementController@yuva_sangam_list')->name('branch.yuva-sangam-list');


/*=============================Monthly REport Filter=======================================*/

/*=============================SEVA REport Filter=======================================*/
Route::any('/atdc-report-filter','Branch\SevaManagementController@atdc_filter')->name('branch.atdc-report-filter');
Route::any('/mbdd-report-filter','Branch\SevaManagementController@mbdd_filter')->name('branch.mbdd-report-filter');
Route::any('/ttf-report-filter','Branch\SevaManagementController@ttf_filter')->name('branch.ttf-report-filter');
Route::any('/yuvavahini-report-filter','Branch\SevaManagementController@yuvavahini_filter')->name('branch.yuvavahini-report-filter');
Route::any('/eyedonation-report-filter','Branch\SevaManagementController@eyedonation_filter')->name('branch.eyedonation-report-filter');
Route::any('/ampk-report-filter','Branch\SevaManagementController@ampk_filter')->name('branch.ampk-report-filter');
Route::any('/chokasatar-report-filter','Branch\SevaManagementController@chokasatar_filter')->name('branch.chokasatar-report-filter');
Route::any('/atjh-report-filter','Branch\SevaManagementController@atjh_filter')->name('branch.atjh-report-filter');

/*=============================Sanskar REport Filter=======================================*/

Route::any('/jsv-report-filter','Branch\SanskarManagementController@jsv_filter')->name('branch.jsv-report-filter');
Route::any('/samayiksadhak-report-filter','Branch\SanskarManagementController@samayiksadhak_filter')->name('branch.samayiksadhak-report-filter');

Route::any('/tapoyagya-report-filter','Branch\SanskarManagementController@tapoyagya_filter')->name('branch.tapoyagya-report-filter');
Route::any('/cps-report-filter','Branch\SanskarManagementController@cps_filter')->name('branch.cps-report-filter');
Route::any('/pd-report-filter','Branch\SanskarManagementController@pd_filter')->name('branch.pd-report-filter');
Route::any('/barahvarat-report-filter','Branch\SanskarManagementController@barahvarat_filter')->name('branch.barahvarat-report-filter');
Route::any('/twentyfivebol-report-filter','Branch\SanskarManagementController@twentyfivebol_filter')->name('branch.twentyfivebol-report-filter');
Route::any('/jvk-report-filter','Branch\SanskarManagementController@jvk_filter')->name('branch.jvk-report-filter');
Route::any('/yuvadivas-report-filter','Branch\SanskarManagementController@yuvadivas_filter')->name('branch.yuvadivas-report-filter');




/*=============================Sangathan REport Filter=======================================*/

Route::any('/fityuva-report-filter','Branch\SangathanManagementController@fityuva_filter')->name('branch.fityuva-report-filter');
Route::any('/ttk-report-filter','Branch\SangathanManagementController@ttk_filter')->name('branch.ttk-report-filter');
Route::any('/yuvasangam-report-filter','Branch\SangathanManagementController@yuvasangam_filter')->name('branch.yuvasangam-report-filter');



Route::any('/monthly-report-filter','Branch\MonthllyReportController@monthly_report_filter')->name('branch.monthly-report_filer');


/*=================================Seva Edit===============================*/


Route::get('/atdc-edit/{id?}', 'Branch\SevaManagementController@atdc_edit_page')->name('branch.atdc-edit');
Route::post('/atdc-update', 'Branch\SevaManagementController@atdc_update')->name('branch.atdc-update');

Route::get('/mbdd-edit/{id?}', 'Branch\SevaManagementController@mbdd_edit_page')->name('branch.mbdd-edit');
Route::post('/mbdd-update', 'Branch\SevaManagementController@mbdd_update')->name('branch.mbdd-update');


Route::get('/ttf-edit/{id?}', 'Branch\SevaManagementController@ttf_edit_page')->name('branch.ttf-edit');
Route::post('/ttf-update', 'Branch\SevaManagementController@ttf_update')->name('branch.ttf-update');

Route::get('/yuva-vahini-edit/{id?}', 'Branch\SevaManagementController@yuva_vahini_edit_page')->name('branch.yuva-vahini-edit');
Route::post('/yuva-vahini-update', 'Branch\SevaManagementController@yuva_vahini_update')->name('branch.yuva-vahini-update');

Route::get('/eyedonate-edit/{id?}', 'Branch\SevaManagementController@eyedonate_edit_page')->name('branch.eyedonate-edit');
Route::post('/eyedonate-update', 'Branch\SevaManagementController@eyedonate_update')->name('branch.eyedonate-update');

Route::get('/chokasatkar-edit/{id?}', 'Branch\SevaManagementController@chokasatkar_edit_page')->name('branch.chokasatkar-edit');
Route::post('/chokasatkar-update', 'Branch\SevaManagementController@chokasatkar_update')->name('branch.chokasatkar-update');



/*========================================Monyhly Report=====================================*/
Route::any('monthly-report','Branch\MonthllyReportController@monthly_report')->name('branch.monthly-report');
Route::any('/monthly-report-edit/{id?}', 'Branch\MonthllyReportController@monthly_report_edit')->name('b.monthly-report-edit');
Route::post('/monthly-report-update', 'Branch\MonthllyReportController@monthly_report_submit')->name('branch.monthly-report-submit');


/*=====================================================PDF =======================================*/

Route::get('atdc-pdfview',array('as'=>'atdc-pdfview','uses'=>'Branch\SevaManagementController@pdfview'));

Route::get('mbdd-pdfview',array('as'=>'mbdd-pdfview','uses'=>'Branch\SevaManagementController@mbdd_pdfview'));
Route::get('ttf-pdfview',array('as'=>'ttf-pdfview','uses'=>'Branch\SevaManagementController@ttf_pdfview'));
Route::get('ttf-pdfview/{id}','Branch\SevaManagementController@ttf_pdfview');
Route::get('yuvavahini-pdfview',array('as'=>'yuvavahini-pdfview','uses'=>'Branch\SevaManagementController@yuvavahini_pdfview'));
Route::get('eyedonation-pdfview',array('as'=>'eyedonation-pdfview','uses'=>'Branch\SevaManagementController@eyedonation_pdfview'));
Route::get('ampk-pdfview',array('as'=>'ampk-pdfview','uses'=>'Branch\SevaManagementController@ampk_pdfview'));
Route::get('chokasatkar-pdfview',array('as'=>'chokasatkar-pdfview','uses'=>'Branch\SevaManagementController@chokasatar_pdfview'));




Route::get('jsv-pdfview',array('as'=>'jsv-pdfview','uses'=>'Branch\SanskarManagementController@jsv_pdfview'));
Route::get('ss-pdfview',array('as'=>'ss-pdfview','uses'=>'Branch\SanskarManagementController@ss__pdfview'));
Route::get('tapoyagya-pdfview',array('as'=>'tapoyagya-pdfview','uses'=>'Branch\SanskarManagementController@tapoyagya_pdfview'));
Route::get('cps-pdfview',array('as'=>'cps-pdfview','uses'=>'Branch\SanskarManagementController@cps_pdfview'));
Route::get('pd-pdfview',array('as'=>'pd-pdfview','uses'=>'Branch\SanskarManagementController@pd_pdfview'));
Route::get('barah-varat-pdfview',array('as'=>'barah-varat-pdfview','uses'=>'Branch\SanskarManagementController@barah_varat_pdfview'));
Route::get('twenty-five-bol-pdfview',array('as'=>'twenty-five-bol-pdfview','uses'=>'Branch\SanskarManagementController@twenty_five_bol_pdfview'));

Route::get('jvk-pdfview',array('as'=>'jvk-pdfview','uses'=>'Branch\SanskarManagementController@jvk_pdfview'));
Route::get('yuva-divas-pdfview',array('as'=>'yuva-divas-pdfview','uses'=>'Branch\SanskarManagementController@yuva_divas_pdfview'));


Route::get('tkm-pdfview',array('as'=>'tkm-pdfview','uses'=>'Branch\SangathanManagementController@tkm_pdfview'));
Route::get('yuvasangam-pdfview',array('as'=>'yuvasangam-pdfview','uses'=>'Branch\SangathanManagementController@yuvasangam_pdfview'));
Route::get('fittyuva-pdfview',array('as'=>'fittyuva-pdfview','uses'=>'Branch\SangathanManagementController@fityuva_pdfview'));



/*======================================Print=================================================*/


Route::get('/yuvasangam-print/{id?}','Branch\SangathanManagementController@yuvasangam_print')->name('admin.yuvasangam_print');
Route::get('/fityuva-print/{id?}','Branch\SangathanManagementController@fityuva_print')->name('admin.fityuva_print');
Route::get('/ttk-print/{id?}','Branch\SangathanManagementController@ttk_print')->name('admin.ttk_print');


Route::get('/bvl-print/{id?}','Branch\SanskarManagementController@bvl_print')->name('admin.bvl_print');
Route::get('/cps-print/{id?}','Branch\SanskarManagementController@cps_print')->name('admin.cps_print');
Route::get('/jsv-print/{id?}','Branch\SanskarManagementController@jsv_print')->name('admin.jsv_print');
Route::get('/jvk-print/{id?}','Branch\SanskarManagementController@jvk_print')->name('admin.jvk_print');
Route::get('/pd-print/{id?}','Branch\SanskarManagementController@pd_print')->name('admin.pd_print');
Route::get('/ss-print/{id?}','Branch\SanskarManagementController@ss_print')->name('admin.ss_print');
Route::get('/tapoyagya-print/{id?}','Branch\SanskarManagementController@tapoyagya_print')->name('admin.tapoyagya_print');
Route::get('/tfbl-print/{id?}','Branch\SanskarManagementController@tfbl_print')->name('admin.tfbl_print');
Route::get('/yuvadivas-print/{id?}','Branch\SanskarManagementController@yuvadivas_print')->name('admin.yuvadivas_print');



Route::get('/ampk-print/{id?}','Branch\SevaManagementController@ampk_print')->name('admin.ampk_print');
Route::get('/atdc-print/{id?}','Branch\SevaManagementController@atdc_print')->name('admin.atdc_print');
Route::get('/cs_list-print/{id?}','Branch\SevaManagementController@cs_list_print')->name('admin.cs_list_print');
Route::get('/eyedonate-print/{id?}','Branch\SevaManagementController@eyedonate_print')->name('admin.eyedonate_print');
Route::get('/ttf-print/{id?}','Branch\SevaManagementController@ttf_print')->name('admin.ttf_print');
Route::get('/yv-print/{id?}','Branch\SevaManagementController@yv_print')->name('admin.yv_print');



Route::get('branch/monthyreport-pdfview',array('as'=>'branch.monthyreport-pdfview','uses'=>'Branch\MonthllyReportController@pdfview'));


Route::get('/monthly-report-print/{id?}','Branch\MonthllyReportController@monthly_report_print')->name('branch.monthly_report_print');




/*==============================aproval status chaneg==========================================*/
Route::post('/atdc_approval_status_change', 'Branch\MonthllyReportController@atdc_approval_status_change')->name('branch.atdc_approval_status_change');

Route::post('/mbdd_approval_status_change', 'Branch\MonthllyReportController@mbdd_approval_status_change')->name('branch.mbdd_approval_status_change');

Route::post('/ttf_approval_status_change', 'Branch\MonthllyReportController@ttf_approval_status_change')->name('branch.ttf_approval_status_change');

Route::post('/yuvavahini_approval_status_change', 'Branch\MonthllyReportController@yuvavahini_approval_status_change')->name('branch.yuvavahini_approval_status_change');

Route::post('/eyedonation_approval_status_change', 'Branch\MonthllyReportController@eyedonation_approval_status_change')->name('branch.eyedonation_approval_status_change');

Route::post('/ampk_approval_status_change', 'Branch\MonthllyReportController@ampk_approval_status_change')->name('branch.ampk_approval_status_change');

Route::post('/atjh_approval_status_change', 'Branch\MonthllyReportController@atjh_approval_status_change')->name('branch.atjh_approval_status_change');

Route::post('/chokasatar_approval_status_change', 'Branch\MonthllyReportController@chokasatar_approval_status_change')->name('branch.chokasatar_approval_status_change');

Route::post('/JainSanskarVidhi_approval_status_change', 'Branch\MonthllyReportController@JainSanskarVidhi_approval_status_change')->name('branch.JainSanskarVidhi_approval_status_change');
Route::post('/SamayikSadhak_approval_status_change', 'Branch\MonthllyReportController@SamayikSadhak_approval_status_change')->name('branch.SamayikSadhak_approval_status_change');
Route::post('/Tapoyagya_approval_status_change', 'Branch\MonthllyReportController@Tapoyagya_approval_status_change')->name('branch.Tapoyagya_approval_status_change');


Route::post('/Tapoyagya_approval_status_change', 'Branch\MonthllyReportController@Tapoyagya_approval_status_change')->name('branch.Tapoyagya_approval_status_change');


Route::post('/cps_approval_status_change', 'Branch\MonthllyReportController@cps_approval_status_change')->name('branch.cps_approval_status_change');


Route::post('/pd_approval_status_change', 'Branch\MonthllyReportController@pd_approval_status_change')->name('branch.pd_approval_status_change');


Route::post('/barahvarat_approval_status_change', 'Branch\MonthllyReportController@barahvarat_approval_status_change')->name('branch.barahvarat_approval_status_change');


Route::post('/jvk_approval_status_change', 'Branch\MonthllyReportController@jvk_approval_status_change')->name('branch.jvk_approval_status_change');

Route::post('/yuvadivas_approval_status_change', 'Branch\MonthllyReportController@yuvadivas_approval_status_change')->name('branch.yuvadivas_approval_status_change');

/*=========================================================================================*/
Route::get('/news','Branch\NewsController@news_list')->name('branch.news');
Route::get('/news-details/{id?}', 'Branch\NewsController@news_details')->name('branch.news-details');
Route::get('/booked-slot','Branch\NewsController@booked_slot')->name('branch.booked-slot');
Route::get('branch/tapoyagya-report','Branch\NewsController@tapoyagya_report')->name('branch.tapoyagya_report');

/*=====================================================================================================================*/

    Route::get('/tapoyagya-reservation-list','Branch\MonthllyReportController@getslotbookList')->name('branch.slot_book.list');
    Route::get('/acharaya-pravar', 'Branch\MonthllyReportController@acharaya_pravar')->name('branch.acharaya-pravar');
    Route::get('/charitra-atma', 'Branch\MonthllyReportController@charitra_atma')->name('branch.charitra-atma');
    Route::get('/adhivesan2021-list','Branch\MonthllyReportController@adhivesan2021_list')->name('branch.adhivesan2021.list');
    Route::get('/tapoyagya-report', 'Branch\MonthllyReportController@tapoyagya_report')->name('branch.tapoyagya_report');
    Route::get('/barahvrat/registration-form','Branch\MonthllyReportController@barahvrat_registration_form_list')->name('branch.barahvrat-registration-form.list');
    Route::get('/ewc', 'Branch\MonthllyReportController@ewc')->name('branch.ewc');
    Route::get('/yuva-vahini-reg-slot-list', 'Branch\MonthllyReportController@yuva_vahini_reg_slot_list')->name('branch.yuva-vahini-reg-slot-list');
    Route::get('/tapoyagya-report', 'Branch\MonthllyReportController@tapoyagya_report')->name('branch.tapoyagya_report');


    //===================================================new monthly report===========================//
  Route::get('/atdc-form-view','Branch\NewMonthlyReportController@atdcFormView')->name('branch.atdc-form-view');
  
  Route::get('/atdc-status/{id?}','Branch\NewMonthlyReportController@atdc_status');

  Route::get('/mbdd-form-view','Branch\NewMonthlyReportController@mbddFormView')->name('branch.mbdd-form-view');
  
  Route::get('/mbdd-status/{id?}','Branch\NewMonthlyReportController@mbdd_status');

 Route::get('/ttf-form-view','Branch\NewMonthlyReportController@ttfFormView')->name('branch.ttf-form-view');
  
  Route::get('/ttf-status/{id?}','Branch\NewMonthlyReportController@ttf_status');

   Route::get('/yv-form-view','Branch\NewMonthlyReportController@yvFormView')->name('branch.yv-form-view');
  
  Route::get('/yv-status/{id?}','Branch\NewMonthlyReportController@yv_status');

  Route::get('/ed-form-view','Branch\NewMonthlyReportController@edFormView')->name('branch.ed-form-view');
  
  Route::get('/ed-status/{id?}','Branch\NewMonthlyReportController@ed_status');

  Route::get('/ampk-form-view','Branch\NewMonthlyReportController@ampkFormView')->name('branch.ampk-form-view');
  
  Route::get('/ampk-status/{id?}','Branch\NewMonthlyReportController@ampk_status');

    Route::get('/cs-form-view','Branch\NewMonthlyReportController@csFormView')->name('branch.cs-form-view');
  
  Route::get('/cs-status/{id?}','Branch\NewMonthlyReportController@cs_status');
 
  Route::get('/jsv-form-view','Branch\NewMonthlyReportController@jsvFormView')->name('branch.jsv-form-view');
  
  Route::get('/jsv-status/{id?}','Branch\NewMonthlyReportController@jsv_status');

  Route::get('/ss-form-view','Branch\NewMonthlyReportController@ssFormView')->name('branch.ss-form-view');
  
  Route::get('/ss-status/{id?}','Branch\NewMonthlyReportController@ss_status');
 Route::get('/tapo-form-view','Branch\NewMonthlyReportController@tapoFormView')->name('branch.tapo-form-view');
  
  Route::get('/tapo-status/{id?}','Branch\NewMonthlyReportController@tapo_status');

  Route::get('/cps-form-view','Branch\NewMonthlyReportController@cpsFormView')->name('branch.cps-form-view');
  
  Route::get('/cps-status/{id?}','Branch\NewMonthlyReportController@cps_status');
    Route::get('/pd-form-view','Branch\NewMonthlyReportController@pdFormView')->name('branch.pd-form-view');
  
  Route::get('/pd-status/{id?}','Branch\NewMonthlyReportController@pd_status');

      Route::get('/bv-form-view','Branch\NewMonthlyReportController@bvFormView')->name('branch.bv-form-view');
  
  Route::get('/bv-status/{id?}','Branch\NewMonthlyReportController@bv_status');

      Route::get('/jvk-form-view','Branch\NewMonthlyReportController@jvkFormView')->name('branch.jvk-form-view');
  
  Route::get('/jvk-status/{id?}','Branch\NewMonthlyReportController@jvk_status');

        Route::get('/tkm-form-view','Branch\NewMonthlyReportController@tkmFormView')->name('branch.tkm-form-view');
  
  Route::get('/tkm-status/{id?}','Branch\NewMonthlyReportController@tkm_status');

        Route::get('/ys-form-view','Branch\NewMonthlyReportController@ysFormView')->name('branch.ys-form-view');
  
  Route::get('/ys-status/{id?}','Branch\NewMonthlyReportController@ys_status');

        Route::get('/fy-form-view','Branch\NewMonthlyReportController@fyFormView')->name('branch.fy-form-view');
  
  Route::get('/fy-status/{id?}','Branch\NewMonthlyReportController@fy_status');

  //PDF VIEW ROUTE
  Route::get('ttf-pdfview',array('as'=>'ttf-pdfview','uses'=>'Branch\SevaManagementController@ttf_pdfview'));
  Route::get('ttf-pdfview/{id}','Branch\SevaManagementController@ttf_pdfview');

  //PDF VIEW ROUTE
  Route::get('atdc_pdfview/{id}/{download}','Branch\SevaManagementController@pdfview');
  Route::get('mbdd_pdfview/{id}/{download}','Branch\SevaManagementController@mbdd_pdfview');
  Route::get('ttf_pdfview/{id}/{download}','Branch\SevaManagementController@ttf_pdfview');
  Route::get('yuvavahini_pdfview/{id}/{download}','Branch\SevaManagementController@yuvavahini_pdfview');
  Route::get('eyedonation_pdfview/{id}/{download}','Branch\SevaManagementController@eyedonation_pdfview');
  Route::get('ampk_pdfview/{id}/{download}','Branch\SevaManagementController@ampk_pdfview');
  Route::get('chokasatar_pdfview/{id}/{download}','Branch\SevaManagementController@chokasatar_pdfview');
  Route::get('jsv_pdfview/{id}/{download}','Branch\SanskarManagementController@jsv_pdfview');
  Route::get('ss__pdfview/{id}/{download}','Branch\SanskarManagementController@ss__pdfview');
  Route::get('tapoyagya_pdfview/{id}/{download}','Branch\SanskarManagementController@tapoyagya_pdfview');
  Route::get('cps_pdfview/{id}/{download}','Branch\SanskarManagementController@cps_pdfview');
  Route::get('pd_pdfview/{id}/{download}','Branch\SanskarManagementController@pd_pdfview');
  Route::get('barah_varat_pdfview/{id}/{download}','Branch\SanskarManagementController@barah_varat_pdfview');
  Route::get('jvk_pdfview/{id}/{download}','Branch\SanskarManagementController@jvk_pdfview');
  Route::get('tkm_pdfview/{id}/{download}','Branch\SangathanManagementController@tkm_pdfview');
  Route::get('yuvasangam_pdfview/{id}/{download}','Branch\SangathanManagementController@yuvasangam_pdfview');
  Route::get('fityuva_pdfview/{id}/{download}','Branch\SangathanManagementController@fityuva_pdfview');
  //PRINT ROUTE
  Route::get('atdc_print/{id}','Branch\SevaManagementController@atdc_print');
  Route::get('ttf_print/{id}','Branch\SevaManagementController@ttf_print');
  Route::get('yv_print/{id}','Branch\SevaManagementController@yv_print');
  Route::get('eyedonate_print/{id}','Branch\SevaManagementController@eyedonate_print');
  Route::get('ampk_print/{id}','Branch\SevaManagementController@ampk_print');
  Route::get('cs_list_print/{id}','Branch\SevaManagementController@cs_list_print');
  Route::get('jsv_print/{id}','Branch\SanskarManagementController@jsv_print');
  Route::get('ss_print/{id}','Branch\SanskarManagementController@ss_print');
  Route::get('tapoyagya_print/{id}','Branch\SanskarManagementController@tapoyagya_print');
  Route::get('cps_print/{id}','Branch\SanskarManagementController@cps_print');
  Route::get('pd_print/{id}','Branch\SanskarManagementController@pd_print');
  Route::get('bvl_print/{id}','Branch\SanskarManagementController@bvl_print');
  Route::get('jvk_print/{id}','Branch\SanskarManagementController@jvk_print');
  Route::get('ttk_print/{id}','Branch\SangathanManagementController@ttk_print');
  Route::get('yuvasangam_print/{id}','Branch\SangathanManagementController@yuvasangam_print');
  Route::get('fityuva_print/{id}','Branch\SangathanManagementController@fityuva_print');
?>