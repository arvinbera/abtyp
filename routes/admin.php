<?php
/*=============================Admin Login/ Logout=======================================*/

Route::get('/monthly-report', 'Admin\AdminController@index')->name('admin.dashboard');
Route::get('/login', 'Auth\AdminLoginController@showloginform')->name('admin.login');
Route::post('/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');
Route::get('/logout','Auth\AdminLoginController@logout')->name('admin.logout');

/*=============================Admin password change=======================================*/
Route::get('/password-change', 'Admin\AdminController@change_password_form')->name('admin.change-password');
Route::post('/password-change', 'Admin\AdminController@password_upadte')->name('admin.password.update');



/*=============================Branch Maanagement=======================================*/
Route::get('/add-branch','Admin\BranchManagementController@add_branch_form')->name('admin.add-branch');
Route::post('/add-branch','Admin\BranchManagementController@add_branch')->name('admin.add-branch.submit');
Route::get('/branch-list','Admin\BranchManagementController@branch_list')->name('admin.branch-list');
Route::get('/branch-edit/{id?}','Admin\BranchManagementController@branch_edit_form');
Route::post('/branch-update','Admin\BranchManagementController@branch_update');



/*=============================User Maanagement=======================================*/
Route::get('/add-user','Admin\UserManagementController@add_user_form')->name('admin.add-user');
Route::post('/add-user','Admin\UserManagementController@add_user')->name('admin.add-user.submit');
Route::get('/user-list','Admin\UserManagementController@user_list')->name('admin.user-list');

Route::get('/user-edit/{id?}','Admin\UserManagementController@user_edit');
Route::post('/user-update','Admin\UserManagementController@user_update');

Route::get('/get-branch/{state?}','Admin\UserManagementController@get_branch');




/*=============================Seva Maanagement=======================================*/
Route::any('/ampk-list','Admin\SevaManagementController@ampk_list')->name('admin.ampk-list');
Route::any('/atdc-list','Admin\SevaManagementController@atdc_list')->name('admin.atdc-list');

Route::any('/mbdd-list-list','Admin\SevaManagementController@mbdd_list')->name('admin.mbdd-list');

Route::any('/ttf-list-list','Admin\SevaManagementController@ttf_list')->name('admin.ttf-list');

Route::any('/yuva-vahini-list','Admin\SevaManagementController@yuva_vahini_list')->name('admin.yuva-vahini-list');

Route::any('/eye-donation-list','Admin\SevaManagementController@eye_donation_list')->name('admin.eye-donation-list');

Route::any('/atjh-list','Admin\SevaManagementController@atjh_list')->name('admin.atjh-list');

Route::any('/choka-satkar-list','Admin\SevaManagementController@choka_satkar_list')->name('admin.choka-satkar-list');




/*=============================Sanskar Maanagement=======================================*/
Route::any('/jain-sanskar-vidhi-list','Admin\SanskarManagementController@jain_sanskar_vidhi_list')->name('admin.jain-sanskar-vidhi-list');
Route::any('/samayik-sadhak-list','Admin\SanskarManagementController@samayik_sadhak_list')->name('admin.samayik-sadhak-list');

Route::any('/tapoyagya-list','Admin\SanskarManagementController@tapoyagya_list')->name('admin.tapoyagya-list');

Route::any('/cps-list','Admin\SanskarManagementController@cps_list')->name('admin.cps-list');

Route::any('/pd-list','Admin\SanskarManagementController@pd_list')->name('admin.pd-listipd-list');

Route::any('/barah-vrat-list','Admin\SanskarManagementController@barah_vrat_list')->name('admin.barah-vrat-list');

Route::any('/twenty-bol-list','Admin\SanskarManagementController@twenty_bol_list')->name('admin.twenty-bol-list');

Route::any('/jain-vidhya-katyashala-list','Admin\SanskarManagementController@jain_vidhya_katyashala_list')->name('admin.jain-vidhya-katyashala-list');

Route::any('/yuva-divas-list','Admin\SanskarManagementController@yuva_divas_list')->name('admin.yuva-divas-list');






/*=============================Sangathan Maanagement=======================================*/
Route::any('/abtyp-direct-list','Admin\SangathanManagementController@abtyp_direct_list')->name('admin.abtyp-direct-list');
Route::any('/fit-yuva-list','Admin\SangathanManagementController@fit_yuva_list')->name('admin.fit-yuva-list');

Route::any('/jtn-list','Admin\SangathanManagementController@jtn_list')->name('admin.jtn-list');

Route::any('/sankalp-sangathan-yatra-list','Admin\SangathanManagementController@sankalp_sangathan_yatra_list')->name('admin.sankalp-sangathan-yatra-list');

Route::any('/sargam-list','Admin\SangathanManagementController@sargam_list')->name('admin.sargam-list');

Route::any('/tkm-list','Admin\SangathanManagementController@tkm_list')->name('admin.tkm-list');

Route::any('/yuva-sangam-list','Admin\SangathanManagementController@yuva_sangam_list')->name('admin.yuva-sangam-list');




/*=============================Monthly REport Filter=======================================*/

/*=============================SEVA REport Filter=======================================*/
Route::any('/atdc-report-filter','Admin\SevaManagementController@atdc_filter')->name('admin.atdc-report-filter');
Route::any('/mbdd-report-filter','Admin\SevaManagementController@mbdd_filter')->name('admin.mbdd-report-filter');
Route::any('/ttf-report-filter','Admin\SevaManagementController@ttf_filter')->name('admin.ttf-report-filter');
Route::any('/yuvavahini-report-filter','Admin\SevaManagementController@yuvavahini_filter')->name('admin.yuvavahini-report-filter');
Route::any('/eyedonation-report-filter','Admin\SevaManagementController@eyedonation_filter')->name('admin.eyedonation-report-filter');
Route::any('/ampk-report-filter','Admin\SevaManagementController@ampk_filter')->name('admin.ampk-report-filter');
Route::any('/chokasatar-report-filter','Admin\SevaManagementController@chokasatar_filter')->name('admin.chokasatar-report-filter');
Route::any('/atjh-report-filter','Admin\SevaManagementController@atjh_filter')->name('admin.atjh-report-filter');


/*=============================Sanskar REport Filter=======================================*/

Route::any('/jsv-report-filter','Admin\SanskarManagementController@jsv_filter')->name('admin.jsv-report-filter');
Route::any('/samayiksadhak-report-filter','Admin\SanskarManagementController@samayiksadhak_filter')->name('admin.samayiksadhak-report-filter');

Route::any('/tapoyagya-report-filter','Admin\SanskarManagementController@tapoyagya_filter')->name('admin.tapoyagya-report-filter');
Route::any('/cps-report-filter','Admin\SanskarManagementController@cps_filter')->name('admin.cps-report-filter');
Route::any('/pd-report-filter','Admin\SanskarManagementController@pd_filter')->name('admin.pd-report-filter');
Route::any('/barahvarat-report-filter','Admin\SanskarManagementController@barahvarat_filter')->name('admin.barahvarat-report-filter');
Route::any('/twentyfivebol-report-filter','Admin\SanskarManagementController@twentyfivebol_filter')->name('admin.twentyfivebol-report-filter');
Route::any('/jvk-report-filter','Admin\SanskarManagementController@jvk_filter')->name('admin.jvk-report-filter');
Route::any('/yuvadivas-report-filter','Admin\SanskarManagementController@yuvadivas_filter')->name('admin.yuvadivas-report-filter');




/*=============================Sangathan REport Filter=======================================*/

Route::any('/fityuva-report-filter','Admin\SangathanManagementController@fityuva_filter')->name('admin.fityuva-report-filter');
Route::any('/ttk-report-filter','Admin\SangathanManagementController@ttk_filter')->name('admin.ttk-report-filter');
Route::any('/yuvasangam-report-filter','Admin\SangathanManagementController@yuvasangam_filter')->name('admin.yuvasangam-report-filter');



Route::any('/monthly-report-filter','Admin\MonthllyReportController@monthly_report_filter')->name('admin.monthly-report_filer');




	




/*=====================================================PDF =======================================*/


Route::get('admin-atdc-pdfview',array('as'=>'admin-atdc-pdfview','uses'=>'Admin\SevaManagementController@pdfview'));
Route::get('admin-mbdd-pdfview',array('as'=>'admin-mbdd-pdfview','uses'=>'Admin\SevaManagementController@mbdd_pdfview'));
Route::get('admin-ttf-pdfview',array('as'=>'admin-ttf-pdfview','uses'=>'Admin\SevaManagementController@ttf_pdfview'));
Route::get('admin-yuvavahini-pdfview',array('as'=>'admin-yuvavahini-pdfview','uses'=>'Admin\SevaManagementController@yuvavahini_pdfview'));
Route::get('admin-eyedonation-pdfview',array('as'=>'admin-eyedonation-pdfview','uses'=>'Admin\SevaManagementController@eyedonation_pdfview'));
Route::get('admin-ampk-pdfview',array('as'=>'admin-ampk-pdfview','uses'=>'Admin\SevaManagementController@ampk_pdfview'));
Route::get('admin-chokasatkar-pdfview',array('as'=>'admin-chokasatkar-pdfview','uses'=>'Admin\SevaManagementController@chokasatar_pdfview'));




Route::get('admin-jsv-pdfview',array('as'=>'admin-jsv-pdfview','uses'=>'Admin\SanskarManagementController@jsv_pdfview'));
Route::get('admin-ss-pdfview',array('as'=>'admin-ss-pdfview','uses'=>'Admin\SanskarManagementController@ss__pdfview'));
Route::get('admin-tapoyagya-pdfview',array('as'=>'admin-tapoyagya-pdfview','uses'=>'Admin\SanskarManagementController@tapoyagya_pdfview'));
Route::get('admin-cps-pdfview',array('as'=>'admin-cps-pdfview','uses'=>'Admin\SanskarManagementController@cps_pdfview'));
Route::get('admin-pd-pdfview',array('as'=>'admin-pd-pdfview','uses'=>'Admin\SanskarManagementController@pd_pdfview'));
Route::get('admin-barah-varat-pdfview',array('as'=>'admin-barah-varat-pdfview','uses'=>'Admin\SanskarManagementController@barah_varat_pdfview'));
Route::get('admin-twenty-five-bol-pdfview',array('as'=>'admin-twenty-five-bol-pdfview','uses'=>'Admin\SanskarManagementController@twenty_five_bol_pdfview'));

Route::get('admin-jvk-pdfview',array('as'=>'admin-jvk-pdfview','uses'=>'Admin\SanskarManagementController@jvk_pdfview'));
Route::get('admin-yuva-divas-pdfview',array('as'=>'admin-yuva-divas-pdfview','uses'=>'Admin\SanskarManagementController@yuva_divas_pdfview'));


Route::get('admin-tkm-pdfview',array('as'=>'admin-tkm-pdfview','uses'=>'Admin\SangathanManagementController@tkm_pdfview'));
Route::get('admin-yuvasangam-pdfview',array('as'=>'admin-yuvasangam-pdfview','uses'=>'Admin\SangathanManagementController@yuvasangam_pdfview'));
Route::get('admin-fittyuva-pdfview',array('as'=>'admin-fittyuva-pdfview','uses'=>'Admin\SangathanManagementController@fityuva_pdfview'));





/*========================================Monyhly Report=====================================*/
Route::any('monthly-report','Admin\MonthllyReportController@monthly_report')->name('admin.monthly-report');
Route::any('/monthly-report-edit/{id?}', 'Admin\MonthllyReportController@monthly_report_edit')->name('a.monthly-report-edit');
Route::post('/monthly-report-update', 'Admin\MonthllyReportController@monthly_report_submit')->name('admin.monthly-report-submit');


/*======================================Print=================================================*/


Route::get('/yuvasangam-print/{id?}','Admin\SangathanManagementController@yuvasangam_print')->name('admin.yuvasangam_print');
Route::get('/fityuva-print/{id?}','Admin\SangathanManagementController@fityuva_print')->name('admin.fityuva_print');
Route::get('/ttk-print/{id?}','Admin\SangathanManagementController@ttk_print')->name('admin.ttk_print');


Route::get('/bvl-print/{id?}','Admin\SanskarManagementController@bvl_print')->name('admin.bvl_print');
Route::get('/cps-print/{id?}','Admin\SanskarManagementController@cps_print')->name('admin.cps_print');
Route::get('/jsv-print/{id?}','Admin\SanskarManagementController@jsv_print')->name('admin.jsv_print');
Route::get('/jvk-print/{id?}','Admin\SanskarManagementController@jvk_print')->name('admin.jvk_print');
Route::get('/pd-print/{id?}','Admin\SanskarManagementController@pd_print')->name('admin.pd_print');
Route::get('/ss-print/{id?}','Admin\SanskarManagementController@ss_print')->name('admin.ss_print');
Route::get('/tapoyagya-print/{id?}','Admin\SanskarManagementController@tapoyagya_print')->name('admin.tapoyagya_print');
Route::get('/tfbl-print/{id?}','Admin\SanskarManagementController@tfbl_print')->name('admin.tfbl_print');
Route::get('/yuvadivas-print/{id?}','Admin\SanskarManagementController@yuvadivas_print')->name('admin.yuvadivas_print');



Route::get('/ampk-print/{id?}','Admin\SevaManagementController@ampk_print')->name('admin.ampk_print');
Route::get('/atdc-print/{id?}','Admin\SevaManagementController@atdc_print')->name('admin.atdc_print');
Route::get('/cs_list-print/{id?}','Admin\SevaManagementController@cs_list_print')->name('admin.cs_list_print');
Route::get('/eyedonate-print/{id?}','Admin\SevaManagementController@eyedonate_print')->name('admin.eyedonate_print');
Route::get('/ttf-print/{id?}','Admin\SevaManagementController@ttf_print')->name('admin.ttf_print');
Route::get('/yv-print/{id?}','Admin\SevaManagementController@yv_print')->name('admin.yv_print');



/*==============================================================================================*/

Route::any('/atdc-pdf-submit','Admin\SevaManagementController@atdc_pdf_submit')->name('admin.atdc_pdf_submit');
Route::any('/mbdd-pdf-submit','Admin\SevaManagementController@mbdd_pdf_submit')->name('admin.mbdd_pdf_submit');
Route::any('/ttf-pdf-submit','Admin\SevaManagementController@ttf_pdf_submit')->name('admin.ttf_pdf_submit');
Route::any('/yuvavahini-pdf-submit','Admin\SevaManagementController@yuvavahini_pdf_submit')->name('admin.yuvavahini_pdf_submit');
Route::any('/eyedonation-pdf-submit','Admin\SevaManagementController@eyedonation_pdf_submit')->name('admin.eyedonation_pdf_submit');
Route::any('/ampk-pdf-submit','Admin\SevaManagementController@ampk_pdf_submit')->name('admin.ampk_pdf_submit');
Route::any('/chokasatar-pdf-submit','Admin\SevaManagementController@achokasatar_pdf_submit')->name('admin.chokasatar_pdf_submit');


Route::any('/barahvarat-pdf-submit','Admin\SanskarManagementController@barahvarat_pdf_submit')->name('admin.barahvarat_pdf_submit');
Route::any('/cps-pdf-submit','Admin\SanskarManagementController@cps_pdf_submit')->name('admin.cps_pdf_submit');
Route::any('/jsv-pdf-submit','Admin\SanskarManagementController@jsv_pdf_submit')->name('admin.jsv_pdf_submit');
Route::any('/jvk-pdf-submit','Admin\SanskarManagementController@jvk_pdf_submit')->name('admin.jvk_pdf_submit');
Route::any('/pd-pdf-submit','Admin\SanskarManagementController@pd_pdf_submit')->name('admin.pd_pdf_submit');
Route::any('/samayiksadhak-pdf-submit','Admin\SanskarManagementController@samayiksadhak_pdf_submit')->name('admin.samayiksadhak_pdf_submit');
Route::any('/tapoyagya-pdf-submit','Admin\SanskarManagementController@tapoyagya_pdf_submit')->name('admin.tapoyagya_pdf_submit');
Route::any('/twentyfivebol-pdf-submit','Admin\SanskarManagementController@twentyfivebol_pdf_submit')->name('admin.twentyfivebol_pdf_submit');
Route::any('/yuvadivas-pdf-submit','Admin\SanskarManagementController@yuvadivas_pdf_submit')->name('admin.yuvadivas_pdf_submit');


Route::any('/ttk-pdf-submit','Admin\SangathanManagementController@ttk_pdf_submit')->name('admin.ttk_pdf_submit');
Route::any('/fityuva-pdf-submit','Admin\SangathanManagementController@fityuva_pdf_submit')->name('admin.fityuva_pdf_submit');
Route::any('/yuvasangam-pdf-submit','Admin\SangathanManagementController@yuvasangam_pdf_submit')->name('admin.yuvasangam_pdf_submit');











//Route::post('/atdc-pdf-submit','Admin\SevaManagementController@atdc_pdf_submit')->name('admin.atdc_pdf_submit');


Route::get('/news','Admin\NewsController@news_list')->name('admin.news');
Route::get('/news-details/{id?}', 'Admin\NewsController@news_details')->name('admin.news-details');
Route::get('/user-booked-slot','Admin\NewsController@booked_slots')->name('admin.user-booked-slot');










Route::get('/monthyreport-pdfview',array('as'=>'monthyreport-pdfview','uses'=>'Admin\MonthllyReportController@pdfview'));


Route::get('/monthly-report-print/{id?}','Admin\MonthllyReportController@monthly_report_print')->name('admin.monthly_report_print');






















?>