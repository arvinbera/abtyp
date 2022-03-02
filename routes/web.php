<?php
//use DB;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//use Illuminate\Routing\Route;
use Illuminate\Support\Facades\Route;
Route::get('/', function () {
    return view('auth/login');
});







Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/users/userlogout','Auth\LoginController@logout')->name('user.logout');
Route::get('/dashboard', 'User\UserController@index')->name('user.dashboard');
Route::get('/user-dashboard', 'User\UserController@user_index')->name('user.stat-dashboard');
Route::get('/yuva-sangam', 'User\UserController@yuva_sangam')->name('user.yuva-sangam');
Route::get('/members', 'User\UserController@members')->name('user.members');
Route::get('/t8-members', 'User\UserController@t8members')->name('user.t8members');
Route::post('/dashboard', 'User\MonthlyReportController@monthly_report_submit')->name('user.monthly-report-submit');




//Ajax for Dashboard
Route::get('/fetch-dashboard-data/{month?}/{branch_id?}','User\UserController@atdc_fetch');



/*=============================User password change=======================================*/
Route::get('/user/password-change', 'User\UserController@change_password_form')->name('user.change-password');
Route::post('/user/password-change', 'User\UserController@password_upadte')->name('user.password.update');




/*=============================Seva Maanagement=======================================*/
Route::any('user/ampk-list','User\SevaManagementController@ampk_list')->name('user.ampk-list');
Route::any('user/atdc-list','User\SevaManagementController@atdc_list')->name('user.atdc-list');

Route::any('user/mbdd-list-list','User\SevaManagementController@mbdd_list')->name('user.mbdd-list');

Route::any('user/ttf-list-list','User\SevaManagementController@ttf_list')->name('user.ttf-list');

Route::any('user/yuva-vahini-list','User\SevaManagementController@yuva_vahini_list')->name('user.yuva-vahini-list');

Route::any('user/eye-donation-list','User\SevaManagementController@eye_donation_list')->name('user.eye-donation-list');

Route::any('user/atjh-list','User\SevaManagementController@atjh_list')->name('user.atjh-list');

Route::any('user/choka-satkar-list','User\SevaManagementController@choka_satkar_list')->name('user.choka-satkar-list');




/*=============================Sanskar Maanagement=======================================*/
Route::any('user/jain-sanskar-vidhi-list','User\SanskarManagementController@jain_sanskar_vidhi_list')->name('user.jain-sanskar-vidhi-list');
Route::any('user/samayik-sadhak-list','User\SanskarManagementController@samayik_sadhak_list')->name('user.samayik-sadhak-list');

Route::any('user/tapoyagya-list','User\SanskarManagementController@tapoyagya_list')->name('user.tapoyagya-list');

Route::any('user/cps-list','User\SanskarManagementController@cps_list')->name('user.cps-list');

Route::any('user/pd-list','User\SanskarManagementController@pd_list')->name('user.pd-listipd-list');

Route::any('user/barah-vrat-list','User\SanskarManagementController@barah_vrat_list')->name('user.barah-vrat-list');

Route::any('user/twenty-bol-list','User\SanskarManagementController@twenty_bol_list')->name('user.twenty-bol-list');

Route::any('user/jain-vidhya-katyashala-list','User\SanskarManagementController@jain_vidhya_katyashala_list')->name('user.jain-vidhya-katyashala-list');

Route::any('user/yuva-divas-list','User\SanskarManagementController@yuva_divas_list')->name('user.yuva-divas-list');






/*=============================Sangathan Maanagement=======================================*/
Route::any('user/abtyp-direct-list','User\SangathanManagementController@abtyp_direct_list')->name('user.abtyp-direct-list');
Route::any('user/fit-yuva-list','User\SangathanManagementController@fit_yuva_list')->name('user.fit-yuva-list');

Route::any('user/jtn-list','User\SangathanManagementController@jtn_list')->name('user.jtn-list');

Route::any('user/sankalp-sangathan-yatra-list','User\SangathanManagementController@sankalp_sangathan_yatra_list')->name('user.sankalp-sangathan-yatra-list');

Route::any('user/sargam-list','User\SangathanManagementController@sargam_list')->name('user.sargam-list');

Route::any('user/tkm-list','User\SangathanManagementController@tkm_list')->name('user.tkm-list');

Route::any('user/yuva-sangam-list','User\SangathanManagementController@yuva_sangam_list')->name('user.yuva-sangam-list');

/*=============================Monthly REport Filter=======================================*/

/*=============================SEVA REport Filter=======================================*/
Route::get('user/atdc-report-filter','User\SevaManagementController@atdc_filter')->name('user.atdc-report-filter');
Route::get('user/mbdd-report-filter','User\SevaManagementController@mbdd_filter')->name('user.mbdd-report-filter');
Route::get('user/ttf-report-filter','User\SevaManagementController@ttf_filter')->name('user.ttf-report-filter');
Route::get('user/yuvavahini-report-filter','User\SevaManagementController@yuvavahini_filter')->name('user.yuvavahini-report-filter');
Route::get('user/eyedonation-report-filter','User\SevaManagementController@eyedonation_filter')->name('user.eyedonation-report-filter');
Route::get('user/ampk-report-filter','User\SevaManagementController@ampk_filter')->name('user.ampk-report-filter');
Route::get('user/chokasatar-report-filter','User\SevaManagementController@chokasatar_filter')->name('user.chokasatar-report-filter');
Route::get('user/atjh-report-filter','User\SevaManagementController@atjh_filter')->name('user.atjh-report-filter');

/*=============================Sanskar REport Filter=======================================*/

Route::get('user/jsv-report-filter','User\SanskarManagementController@jsv_filter')->name('user.jsv-report-filter');
Route::get('user/samayiksadhak-report-filter','User\SanskarManagementController@samayiksadhak_filter')->name('user.samayiksadhak-report-filter');

Route::get('user/tapoyagya-report-filter','User\SanskarManagementController@tapoyagya_filter')->name('user.tapoyagya-report-filter');
Route::get('user/cps-report-filter','User\SanskarManagementController@cps_filter')->name('user.cps-report-filter');
Route::get('user/pd-report-filter','User\SanskarManagementController@pd_filter')->name('user.pd-report-filter');
Route::get('user/barahvarat-report-filter','User\SanskarManagementController@barahvarat_filter')->name('user.barahvarat-report-filter');
Route::get('user/twentyfivebol-report-filter','User\SanskarManagementController@twentyfivebol_filter')->name('user.twentyfivebol-report-filter');
Route::get('user/jvk-report-filter','User\SanskarManagementController@jvk_filter')->name('user.jvk-report-filter');
Route::get('user/yuvadivas-report-filter','User\SanskarManagementController@yuvadivas_filter')->name('user.yuvadivas-report-filter');




/*=============================Sangathan REport Filter=======================================*/

Route::get('user/fityuva-report-filter','User\SangathanManagementController@fityuva_filter')->name('user.fityuva-report-filter');
Route::get('user/ttk-report-filter','User\SangathanManagementController@ttk_filter')->name('user.ttk-report-filter');
Route::get('user/yuvasangam-report-filter','User\SangathanManagementController@yuvasangam_filter')->name('user.yuvasangam-report-filter');






/*========================================Monyhly Report=====================================*/
Route::get('user/monthly-report','User\MonthlyReportController@monthly_report')->name('user.monthly-report');
Route::any('user/monthly-report-filter','User\MonthlyReportController@monthly_report_filter')->name('user.monthly-report_filer');

Route::get('user/monthly-report-edit/{id?}', 'User\MonthlyReportController@monthly_report_edit')->name('branch.monthly-report-edit');
Route::get('user/monthyreport-pdfview',array('as'=>'user/monthyreport-pdfview','uses'=>'User\MonthlyReportController@pdfview'));


Route::get('/monthly-report-print/{id?}','User\MonthlyReportController@monthly_report_print')->name('admin.monthly_report_print');




Route::get('user/monthly-report-edit/atdc/{id?}', 'User\MonthlyReportController@atdc_monthly_report_edit')->name('branch.atdc.monthly-report-edit');
Route::get('user/monthly-report-edit/mbdd/{id?}', 'User\MonthlyReportController@mbdd_monthly_report_edit')->name('branch.mbdd.monthly-report-edit');
Route::get('user/monthly-report-edit/ttf/{id?}', 'User\MonthlyReportController@ttf_monthly_report_edit')->name('branch.ttf.monthly-report-edit');
Route::get('user/monthly-report-edit/yuvavahini/{id?}', 'User\MonthlyReportController@yuvavahini_monthly_report_edit')->name('branch.yuvavahini.monthly-report-edit');
Route::get('user/monthly-report-edit/eye-donation/{id?}', 'User\MonthlyReportController@eye_donation_monthly_report_edit')->name('branch.eye-donation.monthly-report-edit');
Route::get('user/monthly-report-edit/ampk/{id?}', 'User\MonthlyReportController@ampk_monthly_report_edit')->name('branch.ampk.monthly-report-edit');
Route::get('user/monthly-report-edit/chokasatar/{id?}', 'User\MonthlyReportController@chokasatar_monthly_report_edit')->name('branch.chokasatar.monthly-report-edit');
Route::get('user/monthly-report-edit/jsv/{id?}', 'User\MonthlyReportController@jsv_monthly_report_edit')->name('branch.jsv.monthly-report-edit');
Route::get('user/monthly-report-edit/ss/{id?}', 'User\MonthlyReportController@ss_monthly_report_edit')->name('branch.ss.monthly-report-edit');
Route::get('user/monthly-report-edit/tapoyagya/{id?}', 'User\MonthlyReportController@tapoyagya_monthly_report_edit')->name('branch.tapoyagya.monthly-report-edit');
Route::get('user/monthly-report-edit/cps/{id?}', 'User\MonthlyReportController@cps_monthly_report_edit')->name('branch.cps.monthly-report-edit');
Route::get('user/monthly-report-edit/pd/{id?}', 'User\MonthlyReportController@pd_monthly_report_edit')->name('branch.pd.monthly-report-edit');
Route::get('user/monthly-report-edit/barahvarat/{id?}', 'User\MonthlyReportController@barahvarat_monthly_report_edit')->name('branch.barahvarat.monthly-report-edit');
Route::get('user/monthly-report-edit/jvk/{id?}', 'User\MonthlyReportController@jvk_monthly_report_edit')->name('branch.jvk.monthly-report-edit');
Route::get('user/monthly-report-edit/yuvadivas/{id?}', 'User\MonthlyReportController@yuvadivas_monthly_report_edit')->name('branch.yuvadivas.monthly-report-edit');




/*=========================================================================================*/
Route::get('user/news','User\NewsController@news_form')->name('user.news');
Route::post('user/news','User\NewsController@news_submit')->name('user.news.submit');
Route::get('user/news-list','User\NewsController@news_list')->name('user.news-list');
Route::get('user/news-details/{id?}', 'User\NewsController@news_details')->name('user.news-details');
Route::get('user/news-edit/{id?}', 'User\NewsController@news_edit')->name('user.news-edit');
Route::post('user/news-update/', 'User\NewsController@news_update')->name('user.news-update');



/*================================================================================================*/
Route::get('user/list-of-booked-slot','User\NewsController@SlotBookList')->name('user.list-of-booked-slot');
Route::get('user/view-of-booked-slot/{id?}','User\NewsController@ViewSlotBookList')->name('user.view-of-booked-slot');
Route::get('user/edit-of-booked-slot/{id?}','User\NewsController@EditSlotBookList')->name('user.edit-of-booked-slot');
Route::post('user/edit-of-booked-slot/{id?}','User\NewsController@Edit_submit_SlotBookList')->name('user.submit-edit-of-booked-slot');

Route::get('user/book-slot','User\NewsController@SlotBook')->name('user.book-slot');
Route::post('user/book-slot','User\NewsController@SlotBookSubmit')->name('user.slot.submit');




Route::any('/yuva-sangam-status-change','User\UserController@yuva_sangam_status_change')->name('user.yuva_sangam_status_change');


Route::get('yuva-sangam-details/{id?}', 'User\NewsController@yuva_sangam_details')->name('user.yuva-sangam-details');
Route::get('t8-members-details/{id?}', 'User\NewsController@membersdetails')->name('user.members-details');

Route::get('user/tapoyagya-report','User\NewsController@tapoyagya_report')->name('user.tapoyagya_report');
Route::get('user/barahvrat/registration-form','User\NewsController@barahvrat_registration_form_list')->name('user.barahvrat-registration-form');
Route::get('user/yuva-vahini-reg-slot-list', 'User\NewsController@yuva_vahini_reg_slot_list')->name('user.yuva-vahini-reg-slot-list');
//Route::get('/user/tapoyagya-report', 'User\NewsController@tapoyagya_report')->name('branch.tapoyagya_report');






//=======================start NEW  Monthly report===============================================
 Route::get('user/atdc-form','User\NewMonthlyReportController@atdcForm')->name('user.atdc-form');
 Route::get('user/mbdd-form','User\NewMonthlyReportController@mbddForm')->name('user.mbdd-form');
 Route::get('user/ttf-form','User\NewMonthlyReportController@ttfForm')->name('user.ttf-form');
 Route::get('user/yuva-vahini-form','User\NewMonthlyReportController@yuva_vahini_Form')->name('user.yuva-vahini-form');
 Route::get('user/eye-donation-form','User\NewMonthlyReportController@eye_donation_Form')->name('user.eye-donation-form');
 Route::get('user/ampk-form','User\NewMonthlyReportController@ampk_Form')->name('user.ampk-form');
 Route::get('user/choka-satkar-form','User\NewMonthlyReportController@choka_satkar_Form')->name('user.choka-satkar-form');
 Route::get('user/jsv-form','User\NewMonthlyReportController@jsv_Form')->name('user.jsv-form');
 Route::get('user/samayik-sadhak-form','User\NewMonthlyReportController@samayik_sadhak_Form')->name('user.samayik-sadhak-form');
  Route::get('user/tapoyagya-form','User\NewMonthlyReportController@tapoyagya_Form')->name('user.tapoyagya-form');
  Route::get('user/cps-form','User\NewMonthlyReportController@cps_Form')->name('user.cps-form');
   Route::get('user/pd-form','User\NewMonthlyReportController@pd_Form')->name('user.pd-form');
   Route::get('user/barah-vrat-form','User\NewMonthlyReportController@barah_vrat_Form')->name('user.barah-vrat-form');
     Route::get('user/jvk-form','User\NewMonthlyReportController@jvk_Form')->name('user.jvk-form');
     Route::get('user/tkm-form','User\NewMonthlyReportController@tkm_Form')->name('user.tkm-form');
    Route::get('user/yuva-sangam-form','User\NewMonthlyReportController@yuva_sangam_Form')->name('user.yuva-sangam-form');
    Route::get('user/fit-yuva-form','User\NewMonthlyReportController@fit_yuva_Form')->name('user.fit-yuva-form');


    Route::post('user/atdc-form','User\NewMonthlyReportController@atdc_Form_submit')->name('user.atdc-report-submit');
    Route::post('user/mbdd-form','User\NewMonthlyReportController@mbdd_Form_submit')->name('user.mbdd-report-submit');
     Route::post('user/ttf-form','User\NewMonthlyReportController@ttf_Form_submit')->name('user.ttf-report-submit');
 Route::post('user/Yuva-vahini-form','User\NewMonthlyReportController@Yuvavahini_Form_submit')->name('user.Yuvavahini-report-submit');
Route::post('user/eye-donation-form','User\NewMonthlyReportController@eye_donation_Form_submit')->name('user.eye-donation-report-submit');
Route::post('user/ampk-form','User\NewMonthlyReportController@ampk_Form_submit')->name('user.ampk-report-submit');
Route::post('user/choka-satkar-form','User\NewMonthlyReportController@choka_satkar_Form_submit')->name('user.choka-satkar-report-submit');
Route::post('user/jsv-form','User\NewMonthlyReportController@jsv_Form_submit')->name('user.jsv-report-submit');
Route::post('user/Samayiksadhak-form','User\NewMonthlyReportController@Samayiksadhak_Form_submit')->name('user.Samayiksadhak-report-submit');
Route::post('user/tapoyagya-form','User\NewMonthlyReportController@tp_Form_submit')->name('user.tapoyagya-report-submit');
Route::post('user/cps-form','User\NewMonthlyReportController@cps_Form_submit')->name('user.cps-report-submit');
Route::post('user/pd-form','User\NewMonthlyReportController@pd_Form_submit')->name('user.pd-report-submit');
Route::post('user/Barahvarat-form','User\NewMonthlyReportController@Barahvarat_Form_submit')->name('user.Barahvarat-report-submit');
Route::post('user/jvk-form','User\NewMonthlyReportController@jvk_Form_submit')->name('user.jvk-report-submit');
Route::post('user/tkm-form','User\NewMonthlyReportController@tkm_Form_submit')->name('user.tkm-report-submit');
Route::post('user/yuva-sangam-form','User\NewMonthlyReportController@ys_Form_submit')->name('user.yuva-sangam-report-submit');
Route::post('user/fit-yuva-form','User\NewMonthlyReportController@fityuva_Form_submit')->name('user.fit-yuva-report-submit');

 
 Route::get('user/atdc-form-view','User\NewMonthlyReportController@atdcFormView')->name('user.atdc-form-view');
 Route::get('user/mbdd-form-view','User\NewMonthlyReportController@mbddFormView')->name('user.mbdd-form-view');
 Route::get('user/ttf-form-view','User\NewMonthlyReportController@ttfFormView')->name('user.ttf-form-view');
 Route::get('user/yuva-vahini-form-view','User\NewMonthlyReportController@yuva_vahini_FormView')->name('user.yuva-vahini-form-view');
 Route::get('user/eye-donation-form-view','User\NewMonthlyReportController@eye_donation_FormView')->name('user.eye-donation-form-view');
 Route::get('user/ampk-form-view','User\NewMonthlyReportController@ampk_FormView')->name('user.ampk-form-view');
 Route::get('user/choka-satkar-form-view','User\NewMonthlyReportController@choka_satkar_FormView')->name('user.choka-satkar-form-view');
 Route::get('user/jsv-form-view','User\NewMonthlyReportController@jsv_FormView')->name('user.jsv-form-view');
 Route::get('user/samayik-sadhak-form-view','User\NewMonthlyReportController@samayik_sadhak_FormView')->name('user.samayik-sadhak-form-view');
  Route::get('user/tapoyagya-form-view','User\NewMonthlyReportController@tapoyagya_FormView')->name('user.tapoyagya-form-view');
  Route::get('user/cps-form-view','User\NewMonthlyReportController@cps_FormView')->name('user.cps-form-view');
   Route::get('user/pd-form-view','User\NewMonthlyReportController@pd_FormView')->name('user.pd-form-view');
   Route::get('user/barah-vrat-form-view','User\NewMonthlyReportController@barah_vrat_FormView')->name('user.barah-vrat-form-view');
     Route::get('user/jvk-form-view','User\NewMonthlyReportController@jvk_FormView')->name('user.jvk-form-view');
     Route::get('user/tkm-form-view','User\NewMonthlyReportController@tkm_FormView')->name('user.tkm-form-view');

    Route::get('user/yuva-sangam-form-view','User\NewMonthlyReportController@yuva_sangam_FormView')->name('user.yuva-sangam-form-view');

    Route::get('user/fit-yuva-form-view','User\NewMonthlyReportController@fit_yuva_FormView')->name('user.fit-yuva-form-view');


//=======================end monthly report==============================================
Route::get('user/ttf-edit-view/{id}', function () {
  return view('user/new-ttf-edit-view');
});
Route::get('user/ttf-edit-view/{id}','User\NewMonthlyReportController@ttf_detail_report');
Route::post('user/ttf-edit-view','User\NewMonthlyReportController@ttf_report_update')->name('submit-edit-of-ttf-report');

Route::get('user/yuva-vahini-edit-view/{id}',function(){
  return view('user/new-yuva-vahini-edit-view');
});
Route::get('user/yuva-vahini-edit-view/{id}','User\NewMonthlyReportController@yuva_vahini_report');
Route::post('user/yuva-vahini-edit-view','User\NewMonthlyReportController@yuva_vahini_report_update')->name('submit-edit-yuva-vahini');

Route::get('user/eye-donation-edit-view/{id}', function () {
  return view('user/new-eye-donation-edit');
});
Route::get('user/eye-donation-edit-view/{id}','User\NewMonthlyReportController@eye_donation_report');
Route::post('user/eye-donation-edit-view/','User\NewMonthlyReportController@eye_donation_report_update')->name('submit-edit-eye-donation');

Route::get('user/ampk-edit-view/{id}', function () {
  return view('user/new-ampk-edit-form');
});
Route::get('user/ampk-edit-view/{id}','User\NewMonthlyReportController@ampk_report');
Route::post('user/ampk-edit-view/','User\NewMonthlyReportController@ampk_report_update')->name('submit-edit-ampk');

Route::get('user/choka-satkar-edit-view/{id}',function () {
  return view('user/new-choka-satkar-edit-form');
});
Route::get('user/choka-satkar-edit-view/{id}','User\NewMonthlyReportController@choka_satkar_report');
Route::post('user/choka-satkar-edit-view/','User\NewMonthlyReportController@choka_satkar_update')->name('submit-edit-choka-satkar');

Route::get('user/jsv-edit-view/{id}',function(){
  return view('user/new-jsv-edit-form');
});
Route::get('user/jsv-edit-view/{id}','User\NewMonthlyReportController@jsv_report');
Route::post('user/jsv-edit-view/','User\NewMonthlyReportController@jsv_report_update')->name('submit-edit-jsv');

Route::get('user/samayik-sadhak-edit-view/{id}',function(){
  return view('user/new-samayik-sadhak-edit-form');
});
Route::get('user/samayik-sadhak-edit-view/{id}','User\NewMonthlyReportController@sadhak_report');
Route::post('user/samayik-sadhak-edit-view/','User\NewMonthlyReportController@sadhak_report_update')->name('submit-edit-sadhak');

Route::get('user/tapoyagya-edit-view/{id}',function(){
  return view('user/new-tapoyagya-edit-form');
});
Route::get('user/tapoyagya-edit-view/{id}','User\NewMonthlyReportController@tapoyaga_report');
Route::post('user/tapoyagya-edit-view/','User\NewMonthlyReportController@tapoyaga_report_update')->name('submit-edit-tapoyaga');

Route::get('user/cps-edit-view/{id}',function(){
  return view('user/new-cps-edit-form-view');
});
Route::get('user/cps-edit-view/{id}','User\NewMonthlyReportController@cps_update');
Route::post('user/cps-edit-view/','User\NewMonthlyReportController@cps_update_report')->name('submit-edit-cps');

Route::get('user/pd-edit-form-view/{id}',function(){
  return view('user/new-pd-edit-form-view');
});
Route::get('user/pd-edit-form-view/{id}','User\NewMonthlyReportController@pd_update');
Route::post('user/pd-edit-form-view/','User\NewMonthlyReportController@pd_update_report')->name('submit-edit-pd');

Route::get('user/barah-vrat-edit-view/{id}',function(){
  return view('user/new-barah-vrat-edit-form');
});
Route::get('user/barah-vrat-edit-view/{id}','User\NewMonthlyReportController@barah_report');
Route::post('user/barah-vrat-edit-view/','User\NewMonthlyReportController@barah_update_report')->name('submit-barah-vrat');

Route::get('user/jvk-edit-form/{id}',function(){
  return view('user/new-jvk-edit-form');
});
Route::get('user/jvk-edit-form/{id}','User\NewMonthlyReportController@jvk_report');
Route::post('user/jvk-edit-form/','User\NewMonthlyReportController@jvk_update_report')->name('submit-edit-jvk');

Route::get('user/tkm-edit-form/{id}',function(){
  return view('user/new-tkm-edit-form');
});
Route::get('user/tkm-edit-form/{id}','User\NewMonthlyReportController@tkm_report');
Route::post('user/tkm-edit-form/','User\NewMonthlyReportController@tkm_update_report')->name('submit-edit-tkm');

Route::get('user/yuva-sangram-edit/{id}',function(){
  return view('user/new-yuva-sangram-edit-view');
});
Route::get('user/yuva-sangram-edit/{id}','User\NewMonthlyReportController@yuva_sangram_report');
Route::post('user/yuva-sangram-edit/','User\NewMonthlyReportController@yuva_sangram_report_update')->name('submit-edit-yuva-sangram');

Route::get('user/fit-yuva-edit/{id}',function(){
  return view('user/new-fit-yuva-edit-form');
});
Route::get('user/fit-yuva-edit/{id}','User\NewMonthlyReportController@fit_yuva_report');
Route::post('user/fit-yuva-edit/','User\NewMonthlyReportController@fit_yuva_report_update')->name('submit-fit-yuva');

Route::get('user/abcd2/{id}','User\NewMonthlyReportController@mbddDetailReport');
Route::post('user/abcd2/{id?}','User\NewMonthlyReportController@mbddEditReport')->name('submit-edit-of-mbdd-report');

Route::get('user/abcd/{id}','User\NewMonthlyReportController@atdcDetailReport');
Route::post('user/abcd','User\NewMonthlyReportController@editMonthlyReport')->name('submit-edit-of-monthly-report');

//PDF ROUTES
Route::get('user/atdc_pdfview/{id}/{download}','User\SevaManagementController@atdc_pdfview');
Route::get('user/mbdd_pdfview/{id}/{download}','User\SevaManagementController@mbdd_pdfview');
Route::get('user/ttf-pdfview/{id}/{download}','User\SevaManagementController@ttf_pdfview');
Route::get('user/yuvavahini_pdfview/{id}/{download}','User\SevaManagementController@yuvavahini_pdfview');
Route::get('user/eyedonation_pdfview/{id}/{download}','User\SevaManagementController@eyedonation_pdfview');
Route::get('user/ampk_pdfview/{id}/{download}','User\SevaManagementController@ampk_pdfview');
Route::get('user/chokasatar_pdfview/{id}/{download}','User\SevaManagementController@chokasatar_pdfview');
Route::get('user/jsv_pdfview/{id}/{download}','User\SanskarManagementController@jsv_pdfview');
Route::get('user/ss__pdfview/{id}/{download}','User\SanskarManagementController@ss__pdfview');
Route::get('user/tapoyagya_pdfview/{id}/{download}','User\SanskarManagementController@tapoyagya_pdfview');
Route::get('user/cps_pdfview/{id}/{download}','User\SanskarManagementController@cps_pdfview');
Route::get('user/pd_pdfview/{id}/{download}','User\SanskarManagementController@pd_pdfview');
Route::get('user/barah_varat_pdfview/{id}/{download}','User\SanskarManagementController@barah_varat_pdfview');
Route::get('user/jvk_pdfview/{id}/{download}','User\SanskarManagementController@jvk_pdfview');
Route::get('user/tkm_pdfview/{id}/{download}','User\SangathanManagementController@tkm_pdfview');
Route::get('user/yuvasangam_pdfview/{id}/{download}','User\SangathanManagementController@yuvasangam_pdfview');
Route::get('user/fityuva_pdfview/{id}/{download}','User\SangathanManagementController@fityuva_pdfview');

//PRINT ROUTES
Route::get('user/atdc_print/{id}','User\SevaManagementController@atdc_print');
Route::get('user/mbdd_print/{id}','User\SevaManagementController@mbdd_print');
Route::get('user/ttf-print/{id}','User\SevaManagementController@ttf_print');
Route::get('user/yv_print/{id}','User\SevaManagementController@yv_print');
Route::get('user/eyedonate_print/{id}','User\SevaManagementController@eyedonate_print');
Route::get('user/ampk_print/{id}','User\SevaManagementController@ampk_print');
Route::get('user/cs_list_print/{id}','User\SevaManagementController@cs_list_print');
Route::get('user/jsv_print/{id}','User\SanskarManagementController@jsv_print');
Route::get('user/ss_print/{id}','User\SanskarManagementController@ss_print');
Route::get('user/tapoyagya_print/{id}','User\SanskarManagementController@tapoyagya_print');
Route::get('user/cps_print/{id}','User\SanskarManagementController@cps_print');
Route::get('user/pd_print/{id}','User\SanskarManagementController@pd_print');
Route::get('user/bvl_print/{id}','User\SanskarManagementController@bvl_print');
Route::get('user/jvk_print/{id}','User\SanskarManagementController@jvk_print');
Route::get('user/ttk_print/{id}','User\SangathanManagementController@ttk_print');
Route::get('user/yuvasangam_print/{id}','User\SangathanManagementController@yuvasangam_print');
Route::get('user/fityuva_print/{id}','User\SangathanManagementController@fityuva_print');