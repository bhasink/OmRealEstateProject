<?php
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

Route::get('/','MainController@index')
    ->name('homeIndex');
Route::get('/', 'ProjectController@get_home_projects')
    ->name('homeIndex');
//projects
Route::get('/projects/{city}/{property_type}/{property_name}', 'ProjectController@get_specific_project')
    ->name('projectDetailss');
Route::get('/projects/{city}/{property_type}/{property_name}/location', 'ProjectController@get_project_location')
    ->name('projectDetailsLocation');
Route::get('/projects/{city}/{property_type}/{property_name}/contact-us', 'ProjectController@contact_us')
    ->name('projectDetailsContact');
Route::get('/projects/{city}/{property_type}/{property_name}/ebrochure/contact-us', 'ProjectController@ebrochure_contact_us')
    ->name('projectDetailsEbrochure');
Route::post('/projects/ebrochure-contact-us', 'ProjectController@contact_us_ebrochure')
    ->name('projectDetailsBrochureContact');
Route::get('/projects/{city}/{property_type}/{property_name}/nearby', 'ProjectController@nearby')
    ->name('projectDetailsNearby');
Route::get('/projects/{city}/{property_type}/{property_name}/location-map', 'ProjectController@location_map')
    ->name('projectDetailsLocationMap');
Route::get('/projects/ebrochure/{pdf}','ProjectController@e_brochure')
    ->name('projectDetailsEbrochure');
Route::post('/projects/contact-us', 'ProjectController@contact_us_project')
    ->name('projectDetailsContact');
Route::get('/projects/{city}/{property_type}/{property_name}/floorplan', 'ProjectController@floorplans')
    ->name('projectDetailsfloorplan');
Route::get('/projects/{city}/{property_type}/{property_name}/gallery', 'ProjectController@gallery')
    ->name('projectDetailsgallery');
Route::get('/projects/{city}/{property_type}/{property_name}/propertytype/{propdata}', 'ProjectController@property_type')
    ->name('projectPropertyType');
Route::get('/projects/category/{project_category}', 'ProjectController@get_projects_by_categories')->name('projectByCategory');
Route::get('/projects/type/{project_type}', 'ProjectController@get_projects_by_type')->name('projectByType');
Route::get('/projects/{city}','ProjectController@get_projects_by_city')->name('projectByCity');
Route::get('/projects/{state}/{type}','ProjectController@get_projects_by_state')->name('projectByState');
Route::get('/projects','ProjectController@get_all_properties_data')->name('allProjects');
Route::get('/exclusive-projects','ProjectController@get_all_static_properties')->name('allProjects1');
Route::get('/ajaxcity/{id}','ProjectController@get_ajax_cities');
Route::get('/ajaxprice/{id}','ProjectController@get_ajax_price');
//Route::get('/search','ProjectController@searchfilter');
//annual
Route::get('/investor/annual-report','InvestorsController@annual_report')->name('invannual');
Route::get('/investor/annual-report/download/{pdf}','InvestorsController@download');
Route::get('/investor/annual-report/balance-sheet','InvestorsController@balance_sheet');
Route::get('/investor/balance-sheet/download/{pdf}','InvestorsController@download');
Route::get('/investor/annual-report/certificate-incorporation','InvestorsController@certificate_incorporation');
Route::get('/investor/certificate-incorporation/download/{pdf}','InvestorsController@download');
Route::get('/investor/annual-report/moa-and-aoa','InvestorsController@moa');
Route::get('/investor/moa-and-aoa/download/{pdf}','InvestorsController@download');
Route::get('/investor/annual-report/prospectus','InvestorsController@prospectus');
Route::get('/investor/prospectus/download/{pdf}','InvestorsController@download');
//corporate-governance
Route::get('/investor/corporate-governance','InvestorsController@corporate_governance')->name('corpgov');
Route::get('/investor/corporate_governance/download','InvestorsController@download');
Route::get('/investor/corporate-governance/committees-of-board-of-directors','InvestorsController@committees_of_board_of_directors');
Route::get('/investor/committees_of_board_of_directors/download','InvestorsController@download');
Route::get('/investor/corporate-governance/appointment-letters','InvestorsController@appointment_letters');
Route::get('/investor/appointment_letters/download','InvestorsController@download');
Route::get('/investor/corporate-governance/resignation-letters','InvestorsController@resignation_letters');
Route::get('/investor/resignation_letters/download','InvestorsController@download');
Route::get('/investor/corporate-governance/corporate-governance-reports','InvestorsController@corporate_governance_reports');
Route::get('/investor/corporate_governance_reports/download/{pdf}','InvestorsController@download');
//csr
Route::get('/investor/csr/event','InvestorsController@csr_event');
Route::get('/investor/csr/event/download','InvestorsController@download');
Route::get('/investor/csr/policy','InvestorsController@csr_policy');
Route::get('/investor/csr/policy/download','InvestorsController@download');
Route::get('/investor/csr/project','InvestorsController@csr_project');
Route::get('/investor/csr/project/download','InvestorsController@download');
//financials
Route::get('/investor/financials','InvestorsController@financials');
Route::get('/investor/financials/download','InvestorsController@download');
//investor contact
Route::get('/investor/contact','InvestorsController@contact');
Route::post('/investor/contact','InvestorsController@investor_contact');
//shareholding pattern
Route::get('/investor/shareholding-pattern','InvestorsController@shareholding_pattern');
//stakeholder info
Route::get('/investor/stakeholder-information','InvestorsController@stakeholder_information')->name('stakeinfo');
Route::get('/investor/stakeholder_information/download{pdf}','InvestorsController@download');
Route::get('/investor/stakeholder-information/shareholder-claim','InvestorsController@stakeholder_claim');
Route::get('/investor/stakeholder_claim/download','InvestorsController@download{pdf}');
Route::get('/investor/stakeholder-information/notice-and-scrutinizers-report','InvestorsController@notice_and_scrutinizers_report');
Route::get('/investor/notice_and_scrutinizers_report/download{pdf}','InvestorsController@download');
Route::get('/investor/stakeholder-information/record-date-notice-for-ncds','InvestorsController@record_date_notice_for_ncds');
Route::get('/investor/record_date_notice_for_ncds/download{pdf}','InvestorsController@download');
Route::get('/investor/stakeholder-information/notice-payment-redemption','InvestorsController@notice_payment_redemption');
Route::get('/investor/notice_payment_redemption/download/{pdf}','InvestorsController@download');
Route::get('/investor/stakeholder-information/credit-rating','InvestorsController@credit_rating');
Route::get('/investor/credit_rating/download/{pdf}','InvestorsController@download');
Route::get('/investor/stakeholder-information/notice-and-information','InvestorsController@notice_and_information');
Route::get('/investor/notice_and_information/download/{pdf}','InvestorsController@download');
//media
Route::get('/media/ad-campaigns','MediaController@ad_campaigns');
Route::get('/media/ad_campaigns/download/{pdf}','MediaController@download');
Route::get('/media/e-coverages','MediaController@e_coverages');
Route::get('/media/events','MediaController@events');
Route::get('/media/contact','MediaController@contacts');
Route::post('/media/contact','MediaController@media_contact_us');
Route::get('/media/media-kit','MediaController@media_kit');
Route::get('/media/media_kit/download{pdf}','MediaController@download');
Route::get('/media/press-releases','MediaController@press_releases');
Route::get('/media/press_releases/download{pdf}','MediaController@download');
Route::get('/media/print-coverages','MediaController@print_coverages');
Route::get('/media/media-videos','MediaController@videos');
Route::get('/media/regional-newsletter','MediaController@regional_newsletter');
Route::get('/media/corporate-newsletter','MediaController@corporate_newsletter');
//static

//faq
Route::get('/faq','MainController@faq');
Route::get('/faq/vrindavan','MainController@faqvrindavan');
Route::get('/faq/new-chandigarh','MainController@faqnewchandigarh');
Route::get('/faq/ludhiana','MainController@faqludhiana');

//others
Route::get('/disclaimer','MainController@disclaimer');
Route::get('/sitemap','MainController@sitemap');

//contact
Route::get('/contact-us/offices','MainController@contact_us_offices');
Route::get('/contact-us/regional-offices','MainController@regional_offices');
Route::get('/contact-us/send-enquiry','MainController@send_enquiry');
Route::post('/contact-us/send-enquiry', 'MainController@common_contact_us')
    ->name('ContactUsContact');
Route::post('/contact-us/send-enquiry', 'MainController@common_contact_us')
    ->name('ContactUsContact');
Route::post('/contact-us/enquiry-now-contact', 'MainController@enquiry_now_contact')
    ->name('enquirynowcontact');

//otp
Route::get('thankyou','MainController@thankyou');
Route::get('otp','MainController@otp')->name('otp');
Route::post('otpcheck','MainController@otp_working');
Route::post('otpresend','MainController@otp_resend');
Route::post('createlead','MainController@createlead');

//career
Route::get('/career/current-openings','MainController@current_openings')->name('career');
Route::get('/career/employee-welfare','MainController@employee_welfare');
Route::get('/career/growth-opportunities','MainController@growth_opportunities');
Route::get('/career/work-culture','MainController@work_culture');

//about us
Route::get('/about-us/awards-and-honors','MainController@awards_and_honors')->name('aboutus');
Route::get('/about-us/cmd-message','MainController@cmd_message');
Route::get('/about-us/leadership-team','MainController@leadership_team');
Route::get('/about-us/mission-and-vision','MainController@mission_and_vision');
Route::get('/about-us/success-story','MainController@success_story');
Route::get('/about-us/quality-policy','MainController@quality_policy');

//fd
Route::get('/fixed-deposit','MainController@fd');
Route::get('/fixed-deposit/faq','MainController@fd_faq');
Route::get('/fixed-deposit/downloads','MainController@fd_downloads');
Route::get('/fixed-deposit/fd-contact-us','MainController@fd_contact_us');
Route::post('/fixed-deposit/fd-contact-us','MainController@fd_contact_us_save');

Route::get('/fixed-deposit/fd-application-form','MainController@fd_application_form');
Route::post('/fixed-deposit/fd-application-form','MainController@fd_application_form_save');
Route::get('/fixed-deposit/compliance','MainController@fd_compliance');
Route::get('/fixed-deposit/idbi-cms-branches','MainController@fd_idbi');

//emi and currency
Route::get('/emi-calculator','MainController@emi_calculator')->name('emiCalculator');
Route::get('/currency-converter','MainController@currency_converter')->name('currencyConverter');

//care
Route::get('/care/associate','MainController@associate')->name('associate');
Route::post('/care/associate','MainController@contact_us_associate')
    ->name('ContactUsAssociate');
Route::get('/care/buyers-guide','MainController@buyer_guide');
Route::get('/care/nri-care','MainController@nri_care');
Route::post('/care/nri-care','MainController@contact_us_nri')
    ->name('ContactUsNriCare');
Route::get('/care/omaxe-care','MainController@omaxe_care');
Route::get('/care/vendors','MainController@vendors');
Route::post('/care/vendors','MainController@vendorscon')
    ->name('ContactUsVendorsCare');

//test
Route::get('/type','MainController@p_type');

//buyers and testimonials
Route::get('/buyers-guide','MainController@buyers_guide');
Route::get('/testimonials','MainController@testimonials');

//payment gateway
Route::get('/payment-gateway','MainController@payment_gateway');

//filter and search
Route::post('/filterproperty/', 'Filtercontroller@applyFilter');
Route::get('/search','Filtercontroller@homesearch')->name('srch');

// 404
Route::get('/404', function(){
    return view('errors.404');
});




/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
*/


//admin
Auth::routes();
Route::get('/omaxeadmin', 'HomeController@index')->name('omaxeadmin');

//Route::group([ 'middleware' => 'auth', 'as' => 'omaxeadmin' ], function () {

//Seo Manager
Route::get('omaxeadmin/seo/dashboard','Admin\AdminSeoController@seo_dash_data');
Route::get('omaxeadmin/seo','Admin\AdminSeoController@seo');
Route::get('omaxeadmin/seo/data','Admin\AdminSeoController@seo_data');
Route::get('omaxeadmin/seo/create','Admin\AdminSeoController@seo_create');
Route::post('omaxeadmin/seo/create','Admin\AdminSeoController@store_meta_data');
Route::get('omaxeadmin/seo/edit/{id}','Admin\AdminSeoController@seo_edit');
Route::post('omaxeadmin/seo/update','Admin\AdminSeoController@update_meta_data');
Route::post('omaxeadmin/seo/delete','Admin\AdminSeoController@delete_meta_data');

// admin list
Route::get('/omaxeadmin/projects/contact-us','Admin\AdminProjectContactController@index');
Route::get('/omaxeadmin/projects/list','Admin\AdminProjectContactController@project_list');
Route::get('/omaxeadmin/media/list/{page_name}','Admin\AdminMediaController@media_list');
Route::get('/omaxeadmin/investor/list/{page_name}','Admin\AdminInvestorController@investor_list');
Route::get('/omaxeadmin/media/list/{page_name}/{edit_id}','Admin\AdminMediaController@media_edit');
Route::post('/omaxeadmin/media/list','Admin\AdminMediaController@media_edit_update');


//media create
Route::get('/omaxeadmin/media/media-videos/create','Admin\AdminMediaController@media_video_create');
Route::post('/omaxeadmin/media/media-videos/create','Admin\AdminMediaController@media_video_create_save');
Route::get('/omaxeadmin/media/ad-campaign/create','Admin\AdminMediaController@media_ad_campaign_create');
Route::post('/omaxeadmin/media/ad-campaign/create','Admin\AdminMediaController@media_ad_campaign_create_save');
Route::get('/omaxeadmin/media/e-coverages/create','Admin\AdminMediaController@media_e_coverages_create');
Route::post('/omaxeadmin/media/e-coverages/create','Admin\AdminMediaController@media_e_coverages_create_save');
Route::get('/omaxeadmin/media/media-kit/create','Admin\AdminMediaController@media_kit_create');
Route::post('/omaxeadmin/media/media-kit/create','Admin\AdminMediaController@media_kit_create_save');
Route::get('/omaxeadmin/media/media-events/create','Admin\AdminMediaController@media_events_create');
Route::post('/omaxeadmin/media/media-events/create','Admin\AdminMediaController@media_events_create_save');
Route::get('/omaxeadmin/media/print-coverages/create','Admin\AdminMediaController@media_print_coverages_create');
Route::post('/omaxeadmin/media/print-coverages/create','Admin\AdminMediaController@media_print_coverages_create_save');
Route::get('/omaxeadmin/media/press-releases/create','Admin\AdminMediaController@media_press_releases_create');
Route::post('/omaxeadmin/media/press-releases/create','Admin\AdminMediaController@media_press_releases_create_save');
Route::get('/omaxeadmin/media/corporate-newsletter/create','Admin\AdminMediaController@media_corporate_newsletter_create');
Route::post('/omaxeadmin/media/corporate-newsletter/create','Admin\AdminMediaController@media_corporate_newsletter_create_save');
Route::get('/omaxeadmin/media/regional-newsletter/create','Admin\AdminMediaController@media_regional_newsletter_create');
Route::post('/omaxeadmin/media/regional-newsletter/create','Admin\AdminMediaController@media_regional_newsletter_create_save');


//investor edit
Route::get('/omaxeadmin/investor/list/annual-report/edit/{id}','Admin\AdminInvestorController@annual_report_edit');
Route::post('/omaxeadmin/investor/list/annual-report/edit/save','Admin\AdminInvestorController@annual_report_edit_save');
Route::get('/omaxeadmin/investor/list/balance-sheet/edit/{id}','Admin\AdminInvestorController@balance_sheet_edit');
Route::post('/omaxeadmin/investor/list/balance-sheet/edit/save','Admin\AdminInvestorController@balance_sheet_edit_save');
Route::get('/omaxeadmin/investor/list/certificate-of-incorporations/edit/{id}','Admin\AdminInvestorController@certificate_incorporations_edit');
Route::post('/omaxeadmin/investor/list/certificate-of-incorporations/edit/save','Admin\AdminInvestorController@certificate_incorporations_edit_save');
Route::get('/omaxeadmin/investor/list/moa-and-aoa/edit/{id}','Admin\AdminInvestorController@moa_and_edit');
Route::post('/omaxeadmin/investor/list/moa-and-aoa/edit/save','Admin\AdminInvestorController@moa_and_edit_save');
Route::get('/omaxeadmin/investor/list/prospectus/edit/{id}','Admin\AdminInvestorController@prospectus_edit');
Route::post('/omaxeadmin/investor/list/prospectus/edit/save','Admin\AdminInvestorController@prospectus_edit_save');
Route::get('/omaxeadmin/investor/list/corporate-governance/edit/{id}','Admin\AdminInvestorController@corporate_governance_edit');
Route::post('/omaxeadmin/investor/list/corporate-governance/edit/save','Admin\AdminInvestorController@corporate_governance_edit_save');
Route::get('/omaxeadmin/investor/list/committees-of-board-of-directors/edit/{id}','Admin\AdminInvestorController@committees_board_directors_edit');
Route::post('/omaxeadmin/investor/list/committees-of-board-of-directors/edit/save','Admin\AdminInvestorController@committees_board_directors_edit_save');
Route::get('/omaxeadmin/investor/list/appointment-letters/edit/{id}','Admin\AdminInvestorController@appointment_letters_edit');
Route::post('/omaxeadmin/investor/list/appointment-letters/edit/save','Admin\AdminInvestorController@appointment_letters_edit_save');
Route::get('/omaxeadmin/investor/list/resignation-letters/edit/{id}','Admin\AdminInvestorController@resignation_letters_edit');
Route::post('/omaxeadmin/investor/list/resignation-letters/edit/save','Admin\AdminInvestorController@resignation_letters_edit_save');
Route::get('/omaxeadmin/investor/list/corporate-governance-reports/edit/{id}','Admin\AdminInvestorController@corporate_governance_reports_edit');
Route::post('/omaxeadmin/investor/list/corporate-governance-reports/edit/save','Admin\AdminInvestorController@corporate_governance_reports_edit_save');
Route::get('/omaxeadmin/investor/list/csr-event/edit/{id}','Admin\AdminInvestorController@csr_event_edit');
Route::post('/omaxeadmin/investor/list/csr-event/edit/save','Admin\AdminInvestorController@csr_event_edit_save');
Route::get('/omaxeadmin/investor/list/csr-policy/edit/{id}','Admin\AdminInvestorController@csr_policy_edit');
Route::post('/omaxeadmin/investor/list/csr-policy/edit/save','Admin\AdminInvestorController@csr_policy_edit_save');
Route::get('/omaxeadmin/investor/list/csr-project/edit/{id}','Admin\AdminInvestorController@csr_project_edit');
Route::post('/omaxeadmin/investor/list/csr-project/edit/save','Admin\AdminInvestorController@csr_project_edit_save');
Route::get('/omaxeadmin/investor/list/financials/edit/{id}','Admin\AdminInvestorController@csr_financials_edit');
Route::post('/omaxeadmin/investor/list/financials/edit/save','Admin\AdminInvestorController@csr_financials_edit_save');
Route::get('/omaxeadmin/investor/list/shareholding-pattern/edit/{id}','Admin\AdminInvestorController@shareholding_pattern_edit');
Route::post('/omaxeadmin/investor/list/shareholding-pattern/edit/save','Admin\AdminInvestorController@shareholding_pattern_edit_save');
Route::get('/omaxeadmin/investor/list/stakeholder-information/edit/{id}','Admin\AdminInvestorController@stakeholder_information_edit');
Route::post('/omaxeadmin/investor/list/stakeholder-information/edit/save','Admin\AdminInvestorController@stakeholder_information_edit_save');
Route::get('/omaxeadmin/investor/list/stakeholder-claim/edit/{id}','Admin\AdminInvestorController@stakeholder_claim_edit');
Route::post('/omaxeadmin/investor/list/stakeholder-claim/edit/save','Admin\AdminInvestorController@stakeholder_claim_edit_save');
Route::get('/omaxeadmin/investor/list/notice-and-scrutinizers-report/edit/{id}','Admin\AdminInvestorController@notice_and_scrutinizers_report_edit');
Route::post('/omaxeadmin/investor/list/notice-and-scrutinizers-report/edit/save','Admin\AdminInvestorController@notice_and_scrutinizers_report_edit_save');
Route::get('/omaxeadmin/investor/list/record-date-notice-for-ncds/edit/{id}','Admin\AdminInvestorController@record_date_notice_for_ncds_report_edit');
Route::post('/omaxeadmin/investor/list/record-date-notice-for-ncds/edit/save','Admin\AdminInvestorController@record_date_notice_for_ncds_report_edit_save');
Route::get('/omaxeadmin/investor/list/notice-payment-redemption/edit/{id}','Admin\AdminInvestorController@notice_payment_redemption_edit');
Route::post('/omaxeadmin/investor/list/notice-payment-redemption/edit/save','Admin\AdminInvestorController@notice_payment_redemption_edit_save');
Route::get('/omaxeadmin/investor/list/credit-rating/edit/{id}','Admin\AdminInvestorController@credit_rating_edit');
Route::post('/omaxeadmin/investor/list/credit-rating/edit/save','Admin\AdminInvestorController@credit_rating_edit_save');
Route::get('/omaxeadmin/investor/list/notice-and-information/edit/{id}','Admin\AdminInvestorController@notice_and_information_edit');
Route::post('/omaxeadmin/investor/list/notice-and-information/edit/save','Admin\AdminInvestorController@notice_and_information_edit_save');

//investor delete
Route::get('/omaxeadmin/investor/list/annual-report/delete/{id}','Admin\AdminInvestorController@annual_report_delete');
Route::get('/omaxeadmin/investor/list/balance-sheet/delete/{id}','Admin\AdminInvestorController@balance_sheet_delete');
Route::get('/omaxeadmin/investor/list/certificate-of-incorporations/delete/{id}','Admin\AdminInvestorController@certificate_incorporations_delete');
Route::get('/omaxeadmin/investor/list/moa-and-aoa/delete/{id}','Admin\AdminInvestorController@moa_and_delete');
Route::get('/omaxeadmin/investor/list/prospectus/delete/{id}','Admin\AdminInvestorController@prospectus_delete');
Route::get('/omaxeadmin/investor/list/corporate-governance/delete/{id}','Admin\AdminInvestorController@corporate_governance_delete');
Route::get('/omaxeadmin/investor/list/committees-of-board-of-directors/delete/{id}','Admin\AdminInvestorController@committees_board_directors_delete');
Route::get('/omaxeadmin/investor/list/appointment-letters/delete/{id}','Admin\AdminInvestorController@appointment_letters_delete');
Route::get('/omaxeadmin/investor/list/resignation-letters/delete/{id}','Admin\AdminInvestorController@resignation_letters_delete');
Route::get('/omaxeadmin/investor/list/corporate-governance-reports/delete/{id}','Admin\AdminInvestorController@corporate_governance_reports_delete');
Route::get('/omaxeadmin/investor/list/csr-event/delete/{id}','Admin\AdminInvestorController@csr_event_delete');
Route::get('/omaxeadmin/investor/list/csr-policy/delete/{id}','Admin\AdminInvestorController@csr_policy_delete');
Route::get('/omaxeadmin/investor/list/csr-project/delete/{id}','Admin\AdminInvestorController@csr_project_delete');
Route::get('/omaxeadmin/investor/list/financials/delete/{id}','Admin\AdminInvestorController@csr_financials_delete');
Route::get('/omaxeadmin/investor/list/shareholding-pattern/delete/{id}','Admin\AdminInvestorController@shareholding_pattern_delete');
Route::get('/omaxeadmin/investor/list/stakeholder-information/delete/{id}','Admin\AdminInvestorController@stakeholder_information_delete');
Route::get('/omaxeadmin/investor/list/stakeholder-claim/delete/{id}','Admin\AdminInvestorController@stakeholder_claim_delete');
Route::get('/omaxeadmin/investor/list/notice-and-scrutinizers-report/delete/{id}','Admin\AdminInvestorController@notice_and_scrutinizers_report_delete');
Route::get('/omaxeadmin/investor/list/record-date-notice-for-ncds/delete/{id}','Admin\AdminInvestorController@record_date_notice_for_ncds_report_delete');
Route::get('/omaxeadmin/investor/list/notice-payment-redemption/delete/{id}','Admin\AdminInvestorController@notice_payment_redemption_delete');
Route::get('/omaxeadmin/investor/list/credit-rating/delete/{id}','Admin\AdminInvestorController@credit_rating_delete');
Route::get('/omaxeadmin/investor/list/notice-and-information/delete/{id}','Admin\AdminInvestorController@notice_and_information_delete');



//create acheivement panel admin
Route::get('/omaxeadmin/acheivement-panel/list','Admin\AdminInvestorController@acheivement_panel_list');
Route::get('/omaxeadmin/acheivement-panel/create','Admin\AdminInvestorController@acheivement_panel_create');
Route::post('/omaxeadmin/acheivement-panel/create','Admin\AdminInvestorController@acheivement_panel_create_save');
Route::get('/omaxeadmin/acheivement-panel/edit/{id}','Admin\AdminInvestorController@acheivement_panel_edit');
Route::post('/omaxeadmin/acheivement-panel/edit/','Admin\AdminInvestorController@acheivement_panel_edit_save');
Route::get('/omaxeadmin/acheivement-panel/delete/{id}','Admin\AdminInvestorController@acheivement_panel_delete');

//create testimonial panel
Route::get('/omaxeadmin/testimonial-panel/list','Admin\AdminInvestorController@testimonial_panel_list');
Route::get('/omaxeadmin/testimonial-panel/create','Admin\AdminInvestorController@testimonial_panel_create');
Route::post('/omaxeadmin/testimonial-panel/create','Admin\AdminInvestorController@testimonial_panel_create_save');
Route::get('/omaxeadmin/testimonial-panel/edit/{id}','Admin\AdminInvestorController@testimonial_panel_edit');
Route::post('/omaxeadmin/testimonial-panel/edit/','Admin\AdminInvestorController@testimonial_panel_edit_save');
Route::get('/omaxeadmin/testimonial-panel/delete/{id}','Admin\AdminInvestorController@testimonial_panel_delete');

//investor admin
Route::get('/omaxeadmin/investor/list/annual-report/create','Admin\AdminInvestorController@annual_report_create');
Route::post('/omaxeadmin/investor/list/annual-report/create','Admin\AdminInvestorController@annual_report_create_save');
Route::get('/omaxeadmin/investor/list/balance-sheet/create','Admin\AdminInvestorController@balance_sheet_create');
Route::post('/omaxeadmin/investor/list/balance-sheet/create','Admin\AdminInvestorController@balance_sheet_create_save');
Route::get('/omaxeadmin/investor/list/certificate-of-incorporations/create','Admin\AdminInvestorController@certificate_of_incorporations_create');
Route::post('/omaxeadmin/investor/list/certificate-of-incorporations/create','Admin\AdminInvestorController@certificate_of_incorporations_create_save');
Route::get('/omaxeadmin/investor/list/moa-and-aoa/create','Admin\AdminInvestorController@moa_and_aoa_create');
Route::post('/omaxeadmin/investor/list/moa-and-aoa/create','Admin\AdminInvestorController@moa_and_aoa_create_save');
Route::get('/omaxeadmin/investor/list/prospectus/create','Admin\AdminInvestorController@prospectus_create');
Route::post('/omaxeadmin/investor/list/prospectus/create','Admin\AdminInvestorController@prospectus_create_save');
Route::get('/omaxeadmin/investor/list/corporate-governance/create','Admin\AdminInvestorController@corporate_governance_create');
Route::post('/omaxeadmin/investor/list/corporate-governance/create','Admin\AdminInvestorController@corporate_governance_create_save');
Route::get('/omaxeadmin/investor/list/committees-of-board-of-directors/create','Admin\AdminInvestorController@committees_of_board_of_directors_create');
Route::post('/omaxeadmin/investor/list/committees-of-board-of-directors/create','Admin\AdminInvestorController@committees_of_board_of_directors_create_save');
Route::get('/omaxeadmin/investor/list/appointment-letters/create','Admin\AdminInvestorController@appointment_letters_create');
Route::post('/omaxeadmin/investor/list/appointment-letters/create','Admin\AdminInvestorController@appointment_letters_create_save');
Route::get('/omaxeadmin/investor/list/resignation-letters/create','Admin\AdminInvestorController@resignation_letters_create');
Route::post('/omaxeadmin/investor/list/resignation-letters/create','Admin\AdminInvestorController@resignation_letters_create_save');
Route::get('/omaxeadmin/investor/list/corporate-governance-reports/create','Admin\AdminInvestorController@corporate_governance_reports_create');
Route::post('/omaxeadmin/investor/list/corporate-governance-reports/create','Admin\AdminInvestorController@corporate_governance_reports_create_save');
Route::get('/omaxeadmin/investor/list/csr-event/create','Admin\AdminInvestorController@csr_event_create');
Route::post('/omaxeadmin/investor/list/csr-event/create','Admin\AdminInvestorController@csr_event_create_save');
Route::get('/omaxeadmin/investor/list/csr-policy/create','Admin\AdminInvestorController@csr_policy_create');
Route::post('/omaxeadmin/investor/list/csr-policy/create','Admin\AdminInvestorController@csr_policy_create_save');
Route::get('/omaxeadmin/investor/list/csr-project/create','Admin\AdminInvestorController@csr_project_create');
Route::post('/omaxeadmin/investor/list/csr-project/create','Admin\AdminInvestorController@csr_project_create_save');
Route::get('/omaxeadmin/investor/list/financials/create','Admin\AdminInvestorController@financials_create');
Route::post('/omaxeadmin/investor/list/financials/create','Admin\AdminInvestorController@financials_create_save');
Route::get('/omaxeadmin/investor/list/shareholding-pattern/create','Admin\AdminInvestorController@shareholding_pattern_create');
Route::post('/omaxeadmin/investor/list/shareholding-pattern/create','Admin\AdminInvestorController@shareholding_pattern_create_save');
Route::get('/omaxeadmin/investor/list/stakeholder-information/create','Admin\AdminInvestorController@stakeholder_information_create');
Route::post('/omaxeadmin/investor/list/stakeholder-information/create','Admin\AdminInvestorController@stakeholder_information_create_save');
Route::get('/omaxeadmin/investor/list/stakeholder-claim/create','Admin\AdminInvestorController@stakeholder_claim_create');
Route::post('/omaxeadmin/investor/list/stakeholder-claim/create','Admin\AdminInvestorController@stakeholder_claim_create_save');
Route::get('/omaxeadmin/investor/list/notice-and-scrutinizers-report/create','Admin\AdminInvestorController@notice_and_scrutinizers_report_create');
Route::post('/omaxeadmin/investor/list/notice-and-scrutinizers-report/create','Admin\AdminInvestorController@notice_and_scrutinizers_report_create_save');
Route::get('/omaxeadmin/investor/list/record-date-notice-for-ncds/create','Admin\AdminInvestorController@record_date_notice_for_ncds_create');
Route::post('/omaxeadmin/investor/list/record-date-notice-for-ncds/create','Admin\AdminInvestorController@record_date_notice_for_ncds_create_save');
Route::get('/omaxeadmin/investor/list/notice-payment-redemption/create','Admin\AdminInvestorController@notice_payment_redemption_create');
Route::post('/omaxeadmin/investor/list/notice-payment-redemption/create','Admin\AdminInvestorController@notice_payment_redemption_create_save');
Route::get('/omaxeadmin/investor/list/credit-rating/create','Admin\AdminInvestorController@credit_rating_create');
Route::post('/omaxeadmin/investor/list/credit-rating/create','Admin\AdminInvestorController@credit_rating_create_save');
Route::get('/omaxeadmin/investor/list/notice-and-information/create','Admin\AdminInvestorController@notice_and_information_create');
Route::post('/omaxeadmin/investor/list/notice-and-information/create','Admin\AdminInvestorController@notice_and_information_create_save');

//media delete
Route::get('/omaxeadmin/media/ad-campaign/delete/{id}','Admin\AdminMediaController@media_ad_campaign_delete');
Route::get('/omaxeadmin/media/media-kit/delete/{id}','Admin\AdminMediaController@media_kit_delete');
Route::get('/omaxeadmin/media/media-events/delete/{id}','Admin\AdminMediaController@media_events_delete');
Route::get('/omaxeadmin/media/print-coverages/delete/{id}','Admin\AdminMediaController@media_print_coverages_delete');
Route::get('/omaxeadmin/media/regional-newsletter/delete/{id}','Admin\AdminMediaController@media_regional_newsletter_delete');
Route::get('/omaxeadmin/media/e-coverages/delete/{id}','Admin\AdminMediaController@media_ecoverages_delete');
Route::get('/omaxeadmin/media/press-releases/delete/{id}','Admin\AdminMediaController@media_press_releases_delete');
Route::get('/omaxeadmin/media/media_video/delete/{id}','Admin\AdminMediaController@media_video_delete');
Route::get('/omaxeadmin/media/corporate_newsletter/delete/{id}','Admin\AdminMediaController@corporate_newsletter_delete');

//media edit
Route::get('/omaxeadmin/media/ad-campaign/edit/{id}','Admin\AdminMediaController@media_ad_campaign_edit');
Route::get('/omaxeadmin/media/e-coverages/edit/{id}','Admin\AdminMediaController@media_ecoverages_edit');
Route::get('/omaxeadmin/media/events/edit/{id}','Admin\AdminMediaController@media_events_edit');
Route::get('/omaxeadmin/media/media-kit/edit/{id}','Admin\AdminMediaController@media_kit_edit');
Route::get('/omaxeadmin/media/print-coverages/edit/{id}','Admin\AdminMediaController@media_print_coverages_edit');
Route::get('/omaxeadmin/media/press-releases/edit/{id}','Admin\AdminMediaController@media_press_releases_edit');
Route::get('/omaxeadmin/media/corporate-newsletter/edit/{id}','Admin\AdminMediaController@media_corporate_newsletter_edit');
Route::get('/omaxeadmin/media/regional-newsletter/edit/{id}','Admin\AdminMediaController@media_regional_newsletter_edit');

//media post
Route::post('/omaxeadmin/media/ad-campaign/edit','Admin\AdminMediaController@media_ad_campaign_edit_save');
Route::post('/omaxeadmin/media/e-coverages/edit','Admin\AdminMediaController@media_e_coverages_edit_save');
Route::post('/omaxeadmin/media/events/edit','Admin\AdminMediaController@media_events_edit_save');
Route::post('/omaxeadmin/media/media-kit/edit','Admin\AdminMediaController@media_kit_edit_save');
Route::post('/omaxeadmin/media/print-coverages/edit','Admin\AdminMediaController@media_print_coverages_edit_save');
Route::post('/omaxeadmin/media/press-releases/edit','Admin\AdminMediaController@media_press_releases_edit_save');
Route::post('/omaxeadmin/media/corporate-newsletter/edit','Admin\AdminMediaController@media_corporate_newsletter_edit_save');
Route::post('/omaxeadmin/media/regional-newsletter/edit','Admin\AdminMediaController@media_regional_newsletter_edit_save');

//admin project
Route::get('/omaxeadmin/projects/edit/{id}','Admin\AdminProjectContactController@project_list_edit');
Route::get('/omaxeadmin/projects/delete/{id}','Admin\AdminProjectContactController@project_list_delete');
Route::get('/omaxeadmin/projects/create','Admin\AdminProjectContactController@create_project');
Route::post('/omaxeadmin/projects/create','Admin\AdminProjectContactController@save_project');
Route::post('/omaxeadmin/projects/save-project-edit','Admin\AdminProjectContactController@save_project_edit');
Route::post('/omaxeadmin/projects/create/multiple-file-store1','Admin\AdminProjectContactController@multiplefileStore1');
Route::post('/omaxeadmin/projects/create/multiple-file-store2','Admin\AdminProjectContactController@multiplefileStore2');
Route::post('/omaxeadmin/projects/create/multiple-file-store3','Admin\AdminProjectContactController@multiplefileStore3');
Route::post('/omaxeadmin/projects/create/multiple-file-store4','Admin\AdminProjectContactController@multiplefileStore4');
Route::post('/omaxeadmin/projects/create/multiple-file-store5','Admin\AdminProjectContactController@multiplefileStore5');
Route::post('/omaxeadmin/projects/create/multiple-file-store6','Admin\AdminProjectContactController@multiplefileStore6');

//admin lat long
Route::get('/omaxeadmin/projects/get-lat-long','Admin\AdminProjectContactController@get_lat_long_by_address');

//admin contact
Route::get('/omaxeadmin/contact-us','Admin\AdminContactController@common_contact')
    ->name('CommonContactUsContact');
Route::get('/omaxeadmin/investor/contact-us','Admin\AdminContactController@investor_contact');
Route::get('/omaxeadmin/media/contact-us','Admin\AdminContactController@media_contact');
Route::get('/omaxeadmin/care/associate-contact-us','Admin\AdminContactController@associate_media_contact');
Route::get('/omaxeadmin/care/vendors-contact-us','Admin\AdminContactController@vendors_contact');
Route::get('/omaxeadmin/care/vendors-contact-us/vendordownload/{data}','Admin\AdminContactController@vendordownload');
Route::get('/omaxeadmin/care/vendors-contact-us/vendor/download/{data}','Admin\AdminContactController@vendordownload1');
Route::get('/omaxeadmin/media/nri-contact-us','Admin\AdminContactController@nri_media_contact');
Route::get('/omaxeadmin/fd/contact-us','Admin\AdminContactController@fd_contact');
Route::get('/omaxeadmin/fd/app-contact-us','Admin\AdminContactController@fd_app_contact');
Route::get('/omaxeadmin/ebrochure-contact-us','Admin\AdminProjectContactController@ebrochure_contact_us');
Route::get('/omaxeadmin/projects/enquiry-now','Admin\AdminProjectContactController@enquiry_now__contact');



//});











