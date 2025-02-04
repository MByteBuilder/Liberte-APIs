<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php'))
{
	require SYSTEMPATH . 'Config/Routes.php';
}

/**
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
$routes->setAutoRoute(true);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
$routes->get('/', 'Home::index');



$routes->group('api', function ($routes) {
    $routes->group('v1', function ($routes) {
		$routes->get('country-list', 'Api\v1\Settings::country_list');
		$routes->get('kyc-document-list', 'Api\v1\Settings::kyc_document_list');
		$routes->get('member-relation-list', 'Api\v1\Settings::member_relation');
		$routes->get('weather-mode', 'Api\v1\Settings::weather_mode');
		
		$routes->post('check-referral-code', 'Api\v1\Users::check_referral_code');
		$routes->post('add-app-push', 'Api\v1\Users::push_notification');
		$routes->post('update-user-notification-seen', 'Api\v1\Users::seen_push_notification');
		$routes->get('user-notification-list', 'Api\v1\Users::push_notification_list');
		$routes->post('check-email-phone', 'Api\v1\Users::check_email_phone');
		$routes->post('check-email-phone-referral', 'Api\v1\Users::checking_one');
		$routes->post('login', 'Api\v1\Users::login');
		$routes->post('logout', 'Api\v1\Users::logout');
		$routes->post('account-inactive', 'Api\v1\Users::account_inactive');
		$routes->post('registration', 'Api\v1\Users::registration');
		$routes->post('email-verification', 'Api\v1\Users::email_verification');
		$routes->post('resend-otp', 'Api\v1\Users::resend_otp');
		$routes->post('user-email-verification-send', 'Api\v1\Users::send_user_email_oto');
		
		$routes->get('user-dashboard', 'Api\v1\Users::user_dashboard');
        $routes->post('update-user-daily-checkin', 'Api\v1\Users::user_daily_checkin');
		$routes->get('user-daily-checkin-history', 'Api\v1\Users::user_daily_checkin_history');

		$routes->post('forgot-password', 'Api\v1\Users::forgot_password');
		$routes->post('forgot-password-otp-verification', 'Api\v1\Users::forgot_password_otp_verification');
		$routes->post('forgot-password-change-password', 'Api\v1\Users::forgot_password_change_password');
		$routes->post('change-password', 'Api\v1\Users::change_password');

		$routes->post('verify-phone', 'Api\v1\Users::verify_phone');

		$routes->post('change-email-phone-otp', 'Api\v1\Users::change_email_phone_otp');
		$routes->post('change-email-phone', 'Api\v1\Users::change_email_phone');
		$routes->post('change-email-phone-new-email-verify', 'Api\v1\Users::change_email_phone_new_email_verify');

		$routes->post('add-family-member', 'Api\v1\Users::add_family_member');
		$routes->get('family-members', 'Api\v1\Users::family_members');


		$routes->get('user-profile', 'Api\v1\Users::user_profile');
		$routes->post('update-user-profile', 'Api\v1\Users::edit_profile');
		$routes->post('update-kyc', 'Api\v1\Users::upload_kyc');
		$routes->get('kyc-status', 'Api\v1\Users::check_kyc_status');
		$routes->get('user-wallet-history', 'Api\v1\Users::wallet_history');
		$routes->post('user-profile-visibility', 'Api\v1\Users::user_profile_visibility');

		
		$routes->post('add-beneficiary', 'Api\v1\Insurance::add_beneficiary');
		$routes->get('beneficiaries', 'Api\v1\Insurance::beneficiary_list');
		$routes->post('beneficiary-share-update', 'Api\v1\Insurance::edit_beneficiary_share');
		$routes->post('beneficiary-share-update-raw', 'Api\v1\Insurance::edit_beneficiary_share_raw');

		$routes->post('update-health-details', 'Api\v1\Walknearn::update_user_health_details');
		$routes->post('start-waling', 'Api\v1\Walknearn::start_walking');
		$routes->post('end-walking', 'Api\v1\Walknearn::end_walking');
		$routes->post('update-walking', 'Api\v1\Walknearn::update_walking');
		$routes->get('walking-activity', 'Api\v1\Walknearn::walking_history');
		


		$routes->get('view-kycs', 'Api\v1\Kyc::kycs');
		$routes->post('verify-kyc', 'Api\v1\Kyc::verify_kyc');
		
		
		$routes->post('drinking-water-set-goal', 'Api\v1\Drinkingwater::set_goal');
		$routes->get('drinking-water-goal-activity', 'Api\v1\Drinkingwater::goal_activity');
		$routes->post('add-drinking-water-activity', 'Api\v1\Drinkingwater::add_drinking_water_activity');
		$routes->get('drinking-water-activity', 'Api\v1\Drinkingwater::drinking_water_activity_history');
		$routes->post('drinking-water-edit-goal', 'Api\v1\Drinkingwater::edit_goal');
		
		
		$routes->get('services', 'Api\v1\Services::service_list');
		$routes->get('feature-list', 'Api\v1\Services::feature_list');

		$routes->get('feedback-category', 'Api\v1\Services::feedback_category');
		$routes->post('feedback', 'Api\v1\Services::add_feedback');
		
		$routes->get('check-level-demo', 'Api\v1\Users::check_demo');
		$routes->get('demo-user-create', 'Api\v1\Users::demo_user_create');
		$routes->get('referrals', 'Api\v1\Referrel::referral_network');
		$routes->get('referrel-demo', 'Api\v1\Users::refer_and_earn_demo');
		////////////////////////09-02-23////////////////////////////
		$routes->get('team-list', 'Api\v1\Team::list');
		$routes->post('team-add', 'Api\v1\Team::team_add');
		$routes->post('team-edit', 'Api\v1\Team::team_edit');
		$routes->get('team-del', 'Api\v1\Team::team_del');

		$routes->get('referrel-code-list', 'Api\v1\Referrel::list');
		$routes->get('referrel-code-search', 'Api\v1\Referrel::search');

		$routes->get('usertable-list', 'Api\v1\User_table::user_list');
		$routes->get('user-search', 'Api\v1\User_table::user_search');
		$routes->post('user-status', 'Api\v1\User_table::user_edit');
		$routes->get('user-wallet-details', 'Api\v1\User_table::user_wallet_details');
		$routes->get('user-walking-details', 'Api\v1\User_table::user_walking_details');
		//////////////////////////////Users APi////////////////////////////////////////
		$routes->get('user-details-tot', 'Api\v1\User_table::user_details_tot');
		////////////////////////////////////////////////////////////////////////////////

		$routes->get('Family-relation', 'Api\v1\Fam_rel::family_rel');

		$routes->get('point-list', 'Api\v1\Point::point_list');
		$routes->post('point-edit', 'Api\v1\Point::point_edit');

		$routes->get('referral-point-distributions', 'Api\v1\Referrel::reward_point_distributions');

		$routes->get('profile-list', 'Api\v1\Profile::profile_details');
		$routes->get('edit-profile', 'Api\v1\Profile::profile_edit');
		////////////////////////////////////////////////////

		$routes->get('user-health', 'Api\v1\Users::user_health');
		$routes->post('user-health-update', 'Api\v1\Users::user_health_update');

		$routes->post('walking-update', 'Api\v1\Users::walking_update');
		$routes->get('walking-history', 'Api\v1\Users::walking_history');
		$routes->get('walking-details', 'Api\v1\Users::walking_details');




		$routes->get('add-daily-checkin-reminder', 'Api\v1\Cron::add_daily_checkin_reminder');
		$routes->get('send-daily-checkin-reminder', 'Api\v1\Cron::send_daily_checkin_reminder');


		$routes->post('update-premium', 'Api\v1\Users::update_premium');
		$routes->get('users-premium-status', 'Api\v1\Users::users_premium_status');
	});
	
});




$routes->group('console', function ($routes) {
	$routes->get('/', 'Web\admin\Home::index');
	$routes->get('logout', 'Web\admin\Home::logout');
	$routes->get('profile', 'Web\admin\Home::profile');
	$routes->post('login-action', 'Web\admin\Home::login_action');
	$routes->get('dashboard', 'Web\admin\Home::dashboard');
	
	$routes->get('team', 'Web\admin\Team::team_list');
	$routes->get('team/edit', 'Web\admin\Team::team_edit');
	$routes->get('team-add', 'Web\admin\Team::team_add');

	$routes->get('usertable', 'Web\admin\User_table::user_list');
	$routes->get('user/view', 'Web\admin\User_table::user_details');
	///////////////////////////User Pages////////////////////////////////////
	$routes->get('user-details', 'Web\admin\User_table::user_details_tot');
	$routes->get('user-wallet-page', 'Web\admin\User_table::user_wallet_tot');
	$routes->get('user-walking-page', 'Web\admin\User_table::user_walking_tot');
	///////////////////////////////////////////////////////////////

	$routes->get('point', 'Web\admin\Points::point_list');
	$routes->get('point/edit', 'Web\admin\Points::point_edit');

	$routes->get('family', 'Web\admin\Family::family_rel');

	$routes->get('referrel-list', 'Web\admin\Referrel::referrel_list');
});

 

// $routes->add('/users', 'API/v1/Users::user_listing');


/*
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need it to be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php'))
{
	require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
